<?hh // strict
/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST\__Private\LSPLib;

use namespace Facebook\HHAST\__Private\LSP;
use function Facebook\HHAST\__Private\type_alias_structure;
use namespace Facebook\TypeSpec;
use type Facebook\TypeAssert\TypeCoercionException;
use namespace HH\Lib\{Dict, Str};

abstract class Server<TState as ServerState> {
  abstract protected function getSupportedServerCommands(): vec<ServerCommand>;

  abstract protected function getSupportedClientNotifications(
  ): vec<ClientNotification>;

  private dict<string, ServerCommand> $commands = dict[];
  private dict<string, ClientNotification> $notifications = dict[];
  private bool $inited = false;

  public function __construct(
    protected Client $client,
    protected TState $state,
  ) {
    $this->commands = Dict\pull(
      $this->getSupportedServerCommands(),
      $class ==> $class,
      $class ==> $class::METHOD,
    );
    $this->notifications = Dict\pull(
      $this->getSupportedClientNotifications(),
      $class ==> $class,
      $class ==> $class::METHOD,
    );
  }

  final public async function handleMessageAsync(
    string $json,
  ): Awaitable<void> {
    $was_request = await $this->tryHandleMessageTypeAsync(
      type_alias_structure(LSP\RequestMessage::class),
      async $r ==> await $this->handleRequestMessageAsync($r),
      $json,
    );
    if ($was_request) {
      return;
    }

    $was_notification = await $this->tryHandleMessageTypeAsync(
      type_alias_structure(LSP\NotificationMessage::class),
      async $n ==> await $this->handleClientNotificationMessageAsync($n),
      $json,
    );
    if ($was_notification) {
      return;
    }

    $was_response = await $this->tryHandleMessageTypeAsync(
      type_alias_structure(LSP\ResponseMessage::class),
      async $x ==> {},
      $json,
    );
    if ($was_response) {
      return;
    }

    invariant_violation(
      "Don't know how to handle this message type: %s",
      $json,
    );
  }

  private async function tryHandleMessageTypeAsync<T>(
    TypeStructure<T> $type_structure,
    (function(T): Awaitable<void>) $impl,
    string $json,
  ): Awaitable<bool> {
    try {
      $message = self::jsonDecode($type_structure, $json);
    } catch (TypeCoercionException $_) {
      return false;
    }
    await $impl($message);
    return true;
  }

  private async function handleClientNotificationMessageAsync(
    LSP\NotificationMessage $notification,
  ): Awaitable<void> {
    $handler = $this->notifications[$notification['method']] ?? null;
    if ($handler === null) {
      throw new \Exception("Don't know how to handle ".$notification['method']);
      return;
    }
    $params = ($notification['params'] ?? null)
      |> TypeSpec\__Private\from_type_structure(
        type_structure($handler, 'TParams'),
      )->coerceType($$);
    await $handler->executeAsync($params);
    if ($handler instanceof InitializedNotification) {
      $this->inited = true;
    }
  }

  private async function handleRequestMessageAsync(
    LSP\RequestMessage $request,
  ): Awaitable<void> {
    $command = $this->commands[$request['method']] ?? null;
    if ($command === null) {
      $this->client->sendResponseMessage(
        shape(
          'jsonrpc' => '2.0',
          'id' => $request['id'],
          'error' => shape(
            'code' => LSP\ErrorCode::METHOD_NOT_FOUND,
            'message' =>
              Str\format("Command '%s' is not implemented", $request['method']),
          ),
        ),
      );
      return;
    }

    $params = ($request['params'] ?? null)
      |> TypeSpec\__Private\from_type_structure(
        type_structure($command, 'TParams'),
      )->coerceType($$);
    $result = await $command->executeAsync($params);
    if ($result instanceof Success) {
      $this->client->sendResponseMessage(shape(
        'jsonrpc' => '2.0',
        'id' => $request['id'],
        'result' => $result->getResult(),
      ));
      return;
    }

    $error = $result->getError();
    $this->client->sendResponseMessage(shape(
      'jsonrpc' => '2.0',
      'id' => $request['id'],
      'error' => $result->getError()->asResponseError(),
    ));
    return;
  }

  private static function jsonDecode<T>(TypeStructure<T> $ts, string $json): T {
    $request = \json_decode(
      $json, /* assoc = */
      true, /* depth = */
      512,
      \JSON_FB_HACK_ARRAYS,
    );
    return TypeSpec\__Private\from_type_structure($ts)->coerceType($request);
  }
}
