<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<277707bf74f32adc40ab5c58748e1f03>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class VectorArrayTypeSpecifier extends EditableNode {

  public function __construct(
    private ArrayToken $keyword,
    private LessThanToken $leftAngle,
    private EditableNode $type,
    private GreaterThanToken $rightAngle,
  ) {
    parent::__construct('vector_array_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = ArrayToken::fromJSON(
      /* UNSAFE_EXPR */ $json['vector_array_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_angle = LessThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['vector_array_left_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_angle->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['vector_array_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $right_angle = GreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['vector_array_right_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_angle->getWidth();
    return new static($keyword, $left_angle, $type, $right_angle);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_angle' => $this->leftAngle,
      'type' => $this->type,
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
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $left_angle = $this->leftAngle->rewrite($rewriter, $parents);
    $type = $this->type->rewrite($rewriter, $parents);
    $right_angle = $this->rightAngle->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_angle === $this->leftAngle &&
      $type === $this->type &&
      $right_angle === $this->rightAngle
    ) {
      return $this;
    }
    return new static($keyword, $left_angle, $type, $right_angle);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(ArrayToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return
      new static($value, $this->left_angle, $this->type, $this->right_angle);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns ArrayToken
   */
  public function getKeyword(): ArrayToken {
    return TypeAssert\instance_of(ArrayToken::class, $this->keyword);
  }

  /**
   * @returns ArrayToken
   */
  public function getKeywordx(): ArrayToken {
    return $this->getKeyword();
  }

  final public function getLeftAngleUNTYPED(): EditableNode {
    return $this->leftAngle;
  }

  public function withLeftAngle(LessThanToken $value): this {
    if ($value === $this->leftAngle) {
      return $this;
    }
    return new static($this->keyword, $value, $this->type, $this->right_angle);
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

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return
      new static($this->keyword, $this->left_angle, $value, $this->right_angle);
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns DarrayTypeSpecifier | GenericTypeSpecifier |
   * NullableTypeSpecifier | ShapeTypeSpecifier | SimpleTypeSpecifier |
   * TupleTypeSpecifier | VarrayTypeSpecifier | VectorArrayTypeSpecifier
   */
  public function getType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns DarrayTypeSpecifier | GenericTypeSpecifier |
   * NullableTypeSpecifier | ShapeTypeSpecifier | SimpleTypeSpecifier |
   * TupleTypeSpecifier | VarrayTypeSpecifier | VectorArrayTypeSpecifier
   */
  public function getTypex(): EditableNode {
    return $this->getType();
  }

  final public function getRightAngleUNTYPED(): EditableNode {
    return $this->rightAngle;
  }

  public function withRightAngle(GreaterThanToken $value): this {
    if ($value === $this->rightAngle) {
      return $this;
    }
    return new static($this->keyword, $this->left_angle, $this->type, $value);
  }

  public function hasRightAngle(): bool {
    return $this->rightAngle !== null;
  }

  /**
   * @returns GreaterThanToken
   */
  public function getRightAngle(): GreaterThanToken {
    return TypeAssert\instance_of(GreaterThanToken::class, $this->rightAngle);
  }

  /**
   * @returns GreaterThanToken
   */
  public function getRightAnglex(): GreaterThanToken {
    return $this->getRightAngle();
  }
}
