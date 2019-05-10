/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST;

final class NameExpression extends WrapperNode implements IExpression {
  const type TWrapped = INameishNode;
  const keyset<classname<EditableNode>> INTERFACES =
    keyset[EditableNode::class, WrapperNode::class, self::class];

  <<__Override>>
  public function getWrappedNode(): INameishNode {
    return $this->wrapped as INameishNode;
  }
}
