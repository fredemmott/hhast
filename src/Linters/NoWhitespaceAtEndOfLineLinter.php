<?hh // strict
/**
 * Copyright (c) 2017, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional
 * grant of patent rights can be found in the PATENTS file in the same
 * directory.
 *
 */

namespace Facebook\HHAST\Linters;

use namespace HH\Lib\Str;

final class NoWhitespaceAtEndOfLineLinter
  extends AutoFixingLineLinter<FixableLineLintError> {

  <<__Override>>
  public function getLintErrors(): Traversable<FixableLineLintError> {
    $lines = $this->getLinesFromFile();
    $errs = vec[];
    foreach ($lines as $ln => $line) {
      for ($i = strlen($line) - 1; $i >= 0; $i--) {
        $char = $line[$i];
        if ($char !== ' ') {
          break;
        }
        $errs[] = new FixableLineLintError(
          $this,
          'trailing whitespace at end of line',
          tuple($ln + 1, $i + 1),
        );
        break;
      }
    }
    return $errs;
  }

  <<__Override>>
  public function getFixedLine(string $line): string {
    return Str\trim_right($line, ' ');
  }
}
