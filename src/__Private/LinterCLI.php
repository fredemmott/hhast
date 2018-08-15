<?hh // strict
/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST\__Private;

use namespace Facebook\HHAST\Linters;
use namespace HH\Lib\{C, Math, Str, Vec};

use type Facebook\CLILib\{CLIWithArguments, ExitException};
use namespace Facebook\CLILib\CLIOptions;

final class LinterCLI extends CLIWithArguments {
  private bool $xhprof = false;
  private LinterCLIMode $mode = LinterCLIMode::PLAIN;

  use CLIWithVerbosityTrait;

  <<__Override>>
  public static function getHelpTextForOptionalArguments(): string {
    return 'PATH';
  }

  <<__Override>>
  protected function getSupportedOptions(): vec<CLIOptions\CLIOption> {
    return vec[
      CLIOptions\flag(
        () ==> {
          throw new ExitException(
            1,
            "--perf is no longer supported; consider --xhprof",
          );
        },
        '[unsupported]',
        '--perf',
      ),
      CLIOptions\flag(
        () ==> {
          $this->xhprof = true;
        },
        'Enable XHProf profiling',
        '--xhprof',
      ),
      CLIOptions\with_required_enum(
        LinterCLIMode::class,
        $m ==> {
          $this->mode = $m;
        },
        'Set the output mode; supported values are '.
        Str\join(LinterCLIMode::getValues(), ' | '),
        '--mode',
        '-m',
      ),
      CLIOptions\with_required_string(
        $_ ==> {},
        'Name of the caller; intended for use with `--mode json` or `--mode lsp`',
        '--from',
      ),
      $this->getVerbosityOption(),
    ];
  }

  <<__Override>>
  public async function mainAsync(): Awaitable<int> {
    if ($this->xhprof) {
      XHProf::enable();
    }

    $result = await $this->mainImplAsync();

    if ($this->xhprof) {
      XHProf::disableAndDump(\STDERR);
    }

    return $result;
  }

  private async function mainImplAsync(): Awaitable<int> {
    $terminal = $this->getTerminal();
    if ($this->mode === LinterCLIMode::LSP) {
      return await (new LSPImpl\Server($terminal))->mainAsync();
    }

    $err = $this->getStderr();
    $roots = $this->getArguments();

    if (C\is_empty($roots)) {
      $config = LintRunConfig::getForPath(\getcwd());
      $roots = $config->getRoots();
      if (C\is_empty($roots)) {
        $err->write(
          "You must either specify PATH arguments, or provide a configuration".
          "file.\n",
        );
        return 1;
      }
    } else {
      foreach ($roots as $root) {
        $path = \realpath($root);
        if (\is_dir($path)) {
          $config_file = $path.'/hhast-lint.json';
          if (\file_exists($config_file)) {
            $err->write(
              "Warning: PATH arguments contain a hhast-lint.json, ".
              "which modifies the linters used and customizes behavior. ".
              "Consider 'cd ".
              $root.
              "; vendor/bin/hhast-lint'\n\n",
            );
          }
        }
      }
      $config = null;
    }

    switch ($this->mode) {
      case LinterCLIMode::PLAIN:
        $error_handler = new LintRunCLIEventHandler($terminal);
        break;
      case LinterCLIMode::JSON:
        $error_handler = new LintRunJSONEventHandler($terminal);
        break;
      case LinterCLIMode::LSP:
        invariant_violation('should have returned earlier');
    }

    try {
      $result =
        await (new LintRun($config, $error_handler, $roots))->runAsync();
    } catch (Linters\LinterException $e) {
      $orig = $e->getPrevious() ?? $e;
      $err = $terminal->getStderr();
      $pos = $e->getPosition();
      $err->write(Str\format(
        "A linter threw an exception:\n  Linter: %s\n  File: %s%s\n",
        $e->getLinterClass(),
        \realpath($e->getFileBeingLinted()),
        $pos === null ? '' : Str\format(':%d:%d', $pos[0], $pos[1] + 1),
      ));
      if ($pos !== null && \is_readable($e->getFileBeingLinted())) {
        list($line, $column) = $pos;
        $content = \file_get_contents($e->getFileBeingLinted());
        \file_get_contents($e->getFileBeingLinted())
          |> Str\split($$, "\n")
          |> Vec\take($$, $line)
          |> Vec\slice($$, Math\maxva($line - 3, 0))
          |> Vec\map($$, $line ==> '    > '.$line)
          |> Str\join($$, "\n")
          |> Str\format("%s\n      %s^ HERE\n", $$, Str\repeat(' ', $column))
          |> $err->write($$);
      }
      $err->write(Str\format(
        "  Exception: %s\n"."  Message: %s\n",
        \get_class($orig),
        $orig->getMessage(),
      ));
      $err->write(
        $orig->getTraceAsString()
          |> Str\split($$, "\n")
          |> Vec\map($$, $line ==> '    '.$line)
          |> Str\join($$, "\n")
          |> "  Trace:\n".$$."\n\n",
      );
      return 2;
    }

    switch ($result) {
      case LintRunResult::NO_ERRORS:
      case LintRunResult::HAD_AUTOFIXED_ERRORS:
        return 0;
      case LintRunResult::HAVE_UNFIXED_ERRORS:
        return 1;
    }
  }
}
