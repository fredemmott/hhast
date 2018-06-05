<?hh // strict
/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST\Linters;

use type Facebook\HHAST\EditableNode;
use function Facebook\HHAST\find_position;

class FixableASTLintError<
  Tnode as EditableNode,
> extends ASTLintError<Tnode> implements FixableLintError {
  private ?EditableNode $fixed;

  <<__Override>>
  public function __construct(
    AutoFixingASTLinter<Tnode> $linter,
    string $description,
    Tnode $node,
    ?EditableNode $context = null,
  ) {
    parent::__construct($linter, $description, $node, $context);
    $this->fixed = $linter->getFixedNode($node);
  }

  final public function isFixable(): bool {
    return $this->fixed !== null;
  }

  final public function getReadableFix(): (string, string) {
    $linter = $this->linter;
    invariant(
      $linter instanceof AutoFixingASTLinter,
      "Can't render fix for unfixable lint error",
    );
    $node = $this->fixed;
    invariant(
      $node !== null,
      'shouldnt attempt to fix without a fixed version',
    );
    return tuple(
      $this->getPrettyBlame(),
      $linter->getPrettyTextForNode($node, $this->context),
    );
  }

  final public function shouldRenderBlameAndFixAsDiff(): bool {
    return true;
  }
}
