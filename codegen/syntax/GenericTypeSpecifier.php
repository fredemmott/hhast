<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<f7d0afc48addc003e9788884d261be9f>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class GenericTypeSpecifier extends EditableNode {

  public function __construct(
    private EditableNode $classType,
    private TypeArguments $argumentList,
  ) {
    parent::__construct('generic_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $class_type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['generic_class_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $class_type->getWidth();
    $argument_list = TypeArguments::fromJSON(
      /* UNSAFE_EXPR */ $json['generic_argument_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $argument_list->getWidth();
    return new static($class_type, $argument_list);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'class_type' => $this->classType,
      'argument_list' => $this->argumentList,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $class_type = $this->classType->rewrite($rewriter, $parents);
    $argument_list = $this->argumentList->rewrite($rewriter, $parents);
    if (
      $class_type === $this->classType && $argument_list === $this->argumentList
    ) {
      return $this;
    }
    return new static($class_type, $argument_list);
  }

  final public function getClassTypeUNTYPED(): EditableNode {
    return $this->classType;
  }

  public function withClassType(EditableNode $value): this {
    if ($value === $this->classType) {
      return $this;
    }
    return new static($value, $this->argument_list);
  }

  public function hasClassType(): bool {
    return $this->classType !== null;
  }

  /**
   * @returns QualifiedName | XHPClassNameToken | NameToken | StringToken
   */
  public function getClassType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->classType);
  }

  /**
   * @returns QualifiedName | XHPClassNameToken | NameToken | StringToken
   */
  public function getClassTypex(): EditableNode {
    return $this->getClassType();
  }

  final public function getArgumentListUNTYPED(): EditableNode {
    return $this->argumentList;
  }

  public function withArgumentList(TypeArguments $value): this {
    if ($value === $this->argumentList) {
      return $this;
    }
    return new static($this->class_type, $value);
  }

  public function hasArgumentList(): bool {
    return $this->argumentList !== null;
  }

  /**
   * @returns TypeArguments
   */
  public function getArgumentList(): TypeArguments {
    return TypeAssert\instance_of(TypeArguments::class, $this->argumentList);
  }

  /**
   * @returns TypeArguments
   */
  public function getArgumentListx(): TypeArguments {
    return $this->getArgumentList();
  }
}
