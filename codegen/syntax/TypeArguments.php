<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<61489f4ebc6db18e54868040b752c6b9>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TypeArguments extends EditableNode {

  public function __construct(
    private LessThanToken $leftAngle,
    private EditableList<EditableNode> $types,
    private ?GreaterThanToken $rightAngle,
  ) {
    parent::__construct('type_arguments');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_angle = LessThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_arguments_left_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_angle->getWidth();
    $types = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['type_arguments_types'],
      $file,
      $offset,
      $source,
    );
    $offset += $types->getWidth();
    $right_angle = GreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_arguments_right_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_angle->getWidth();
    return new static($left_angle, $types, $right_angle);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_angle' => $this->leftAngle,
      'types' => $this->types,
      'right_angle' => $this->rightAngle,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $left_angle = $this->leftAngle->rewrite($rewriter, $parents);
    $types = $this->types->rewrite($rewriter, $parents);
    $right_angle = $this->rightAngle?->rewrite($rewriter, $parents);
    if (
      $left_angle === $this->leftAngle &&
      $types === $this->types &&
      $right_angle === $this->rightAngle
    ) {
      return $this;
    }
    return new static($left_angle, $types, $right_angle);
  }

  final public function getLeftAngleUNTYPED(): EditableNode {
    return $this->leftAngle;
  }

  public function withLeftAngle(LessThanToken $value): this {
    if ($value === $this->leftAngle) {
      return $this;
    }
    return new static($value, $this->types, $this->right_angle);
  }

  public function hasLeftAngle(): bool {
    return $this->leftAngle !== null;
  }

  /**
   * @returns LessThanToken
   */
  public function getLeftAngle(): LessThanToken {
    return TypeAssert\instance_of(LessThanToken::class, $this->leftAngle);
  }

  /**
   * @returns LessThanToken
   */
  public function getLeftAnglex(): LessThanToken {
    return $this->getLeftAngle();
  }

  final public function getTypesUNTYPED(): EditableNode {
    return $this->types;
  }

  public function withTypes(EditableList<EditableNode> $value): this {
    if ($value === $this->types) {
      return $this;
    }
    return new static($this->left_angle, $value, $this->right_angle);
  }

  public function hasTypes(): bool {
    return $this->types !== null;
  }

  /**
   * @returns EditableList<ClassnameTypeSpecifier> |
   * EditableList<ClosureTypeSpecifier> | EditableList<DictionaryTypeSpecifier>
   * | EditableList<GenericTypeSpecifier> | EditableList<EditableNode> |
   * EditableList<MapArrayTypeSpecifier> | EditableList<NullableTypeSpecifier>
   * | EditableList<ShapeTypeSpecifier> | EditableList<SimpleTypeSpecifier> |
   * EditableList<NoreturnToken> | EditableList<TupleTypeSpecifier> |
   * EditableList<TypeConstant> | EditableList<VectorArrayTypeSpecifier>
   */
  public function getTypes(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->types);
  }

  /**
   * @returns EditableList<ClassnameTypeSpecifier> |
   * EditableList<ClosureTypeSpecifier> | EditableList<DictionaryTypeSpecifier>
   * | EditableList<GenericTypeSpecifier> | EditableList<EditableNode> |
   * EditableList<MapArrayTypeSpecifier> | EditableList<NullableTypeSpecifier>
   * | EditableList<ShapeTypeSpecifier> | EditableList<SimpleTypeSpecifier> |
   * EditableList<NoreturnToken> | EditableList<TupleTypeSpecifier> |
   * EditableList<TypeConstant> | EditableList<VectorArrayTypeSpecifier>
   */
  public function getTypesx(): EditableList<EditableNode> {
    return $this->getTypes();
  }

  final public function getRightAngleUNTYPED(): EditableNode {
    return $this->rightAngle;
  }

  public function withRightAngle(?GreaterThanToken $value): this {
    if ($value === $this->rightAngle) {
      return $this;
    }
    return new static($this->left_angle, $this->types, $value);
  }

  public function hasRightAngle(): bool {
    return $this->rightAngle !== null;
  }

  /**
   * @returns Missing | GreaterThanToken
   */
  public function getRightAngle(): ?GreaterThanToken {
    if ($this->rightAngle->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(GreaterThanToken::class, $this->rightAngle);
  }

  /**
   * @returns GreaterThanToken
   */
  public function getRightAnglex(): GreaterThanToken {
    return TypeAssert\instance_of(GreaterThanToken::class, $this->rightAngle);
  }
}
