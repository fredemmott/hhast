<?hh // strict
/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST\Migrations;

use type Facebook\HHAST\{
  BracedExpression,
  EditableNode,
  LeftBraceToken,
  MemberSelectionExpression,
  RightBraceToken,
  SubscriptExpression,
};

use function Facebook\HHAST\Missing;

final class PHP7UniformVariableSyntaxMigration extends StepBasedMigration {
  private static function parenthesizeMemberSelectionExpression(
    SubscriptExpression $node,
  ): EditableNode {
    $receiver = $node->getReceiver();
    if (!$receiver instanceof MemberSelectionExpression) {
      return $node;
    }

    return new SubscriptExpression(
      $receiver->getName(),
      $node->getLeftBracket(),
      $node->getIndex(),
      $node->getRightBracketx(),
    )
      |> new BracedExpression(
        new LeftBraceToken(Missing(), Missing()),
        $$,
        new RightBraceToken(Missing(), Missing()),
      )
      |> new MemberSelectionExpression(
        $receiver->getObject(),
        $receiver->getOperator(),
        $$,
      );
  }

  <<__Override>>
  final public function getSteps(): Traversable<IMigrationStep> {
    return vec[
      new TypedMigrationStep(
        'Parenthesize array lookups for dynamic property lookups',
        SubscriptExpression::class,
        EditableNode::class,
        $node ==> self::parenthesizeMemberSelectionExpression($node),
      ),
    ];
  }
}
