/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST;


<<__ConsistentConstruct>>
abstract class EditableTokenWithFixedText extends EditableToken {

  abstract const string KIND;
  abstract const string TEXT;

  public function __construct(
    EditableNode $leading,
    EditableNode $trailing,
    ?__Private\SourceRef $ref,
  ) {
    parent::__construct(static::KIND, $leading, $trailing, static::TEXT, $ref);
  }

}
