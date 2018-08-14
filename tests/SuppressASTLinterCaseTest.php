<?hh // strict
/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST;

/**
 * Testing that we can suppress a specific linter error. Using
 * CamelCasedMethodsUnderscoredFunctionsLinter as the example.
 */
final class SuppressASTLinterCaseTest extends TestCase {
  use LinterTestTrait;

  protected function getLinter(string $file): Linters\BaseLinter {
    return Linters\CamelCasedMethodsUnderscoredFunctionsLinter::fromPath($file);
  }

  public function getCleanExamples(): array<array<string>> {
    return [
      ['<?hh '.
       '/* HHAST_FIXME[CamelCasedMethodsUnderscoredFunctions] */. '.
       'function CamelCasing() { return null; }'
      ],
    ];
  }
}
