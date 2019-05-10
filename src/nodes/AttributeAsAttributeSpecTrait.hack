/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST;


trait AttributeAsAttributeSpecTrait {
  require extends EditableNode;

  abstract public function hasAttribute(): bool;
  abstract public function getAttribute(): ?AttributeSpecification;
  abstract public function getAttributex(): AttributeSpecification;
  abstract public function getAttributeUNTYPED(): EditableNode;

  final public function hasAttributeSpec(): bool {
    return $this->hasAttribute();
  }

  final public function getAttributeSpec(): ?AttributeSpecification {
    return $this->getAttribute();
  }

  public function getAttributeSpecx(): AttributeSpecification {
    return $this->getAttributex();
  }

  public function getAttributeSpecUNTYPED(): EditableNode {
    return $this->getAttributeUNTYPED();
  }
}
