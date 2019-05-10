/*
 *  Copyright (c) 2017-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace Facebook\HHAST\__Private;

use namespace HH\Lib\{Keyset, Vec};
use type Facebook\HackCodegen\{CodegenFileType, HackBuilderValues};

final class CodegenTrivia extends CodegenBase {
  <<__Override>>
  public function generate(): void {
    $cg = $this->getCodegenFactory();

    $file = $cg
      ->codegenFile($this->getOutputDirectory().'/Trivia.hack')
      ->setFileType(CodegenFileType::DOT_HACK)
      ->setNamespace('Facebook\\HHAST');

    foreach ($this->getSchema()['trivia'] as $trivia) {
      $interfaces = $this
        ->getMarkerInterfacesByImplementingClass()[$trivia['trivia_kind_name']] ??
        keyset[];
      $file->addClass(
        $cg
          ->codegenClass($trivia['trivia_kind_name'])
          ->setIsFinal()
          ->setExtends('EditableTrivia')
          ->setInterfaces(
            Vec\map($interfaces, $if ==> $cg->codegenImplementsInterface($if)),
          )
          ->setConstructor(
            $cg
              ->codegenConstructor()
              ->addParameter('string $text')
              ->addParameter('?__Private\\SourceRef $source_ref = null')
              ->setBodyf(
                'parent::__construct(%s, $text, $source_ref);',
                \var_export($trivia['trivia_type_name'], true),
              ),
          )
          ->addMethod(
            $cg
              ->codegenMethod('withText')
              ->addParameter('string $text')
              ->setReturnType('this')
              ->setBody(
                $cg
                  ->codegenHackBuilder()
                  ->startIfBlock('$text === $this->getText()')
                  ->addReturnf('$this')
                  ->endIfBlock()
                  ->addReturnf('new self($text)')
                  ->getCode(),
              ),
          )
          ->addConstant(
            $cg->codegenClassConstant('INTERFACES')
              ->setType('keyset<classname<EditableNode>>')
              ->setValue(
                Keyset\union(
                  keyset[
                    $trivia['trivia_kind_name'],
                    'EditableNode',
                    'EditableTrivia',
                  ],
                  $interfaces,
                ),
                HackBuilderValues::keyset(
                  HackBuilderValues::lambda(($_, $if) ==> $if.'::class'),
                ),
              ),
          ),
      );
    }

    $file->save();
  }
}
