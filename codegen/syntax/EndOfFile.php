<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<462628bfd92c75a6b9950f597a635827>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class EndOfFile extends EditableNode {

  public function __construct(private EndOfFileToken $token) {
    parent::__construct('end_of_file');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $token = EndOfFileToken::fromJSON(
      /* UNSAFE_EXPR */ $json['end_of_file_token'],
      $file,
      $offset,
      $source,
    );
    $offset += $token->getWidth();
    return new static($token);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'token' => $this->token,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $token = $this->token->rewrite($rewriter, $parents);
    if ($token === $this->token) {
      return $this;
    }
    return new static($token);
  }

  final public function getTokenUNTYPED(): EditableNode {
    return $this->token;
  }

  public function withToken(EndOfFileToken $value): this {
    if ($value === $this->token) {
      return $this;
    }
    return new static($value);
  }

  public function hasToken(): bool {
    return $this->token !== null;
  }

  /**
   * @returns EndOfFileToken
   */
  public function getToken(): EndOfFileToken {
    return TypeAssert\instance_of(EndOfFileToken::class, $this->token);
  }

  /**
   * @returns EndOfFileToken
   */
  public function getTokenx(): EndOfFileToken {
    return $this->getToken();
  }
}
