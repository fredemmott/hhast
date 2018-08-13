<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<28410e3622b598ad56e75089df9f2336>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class AttributeSpecification extends EditableNode {

  public function __construct(
    private LessThanLessThanToken $leftDoubleAngle,
    private EditableList<Attribute> $attributes,
    private GreaterThanGreaterThanToken $rightDoubleAngle,
  ) {
    parent::__construct('attribute_specification');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_double_angle = LessThanLessThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['attribute_specification_left_double_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_double_angle->getWidth();
    $attributes = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['attribute_specification_attributes'],
      $file,
      $offset,
      $source,
    );
    $offset += $attributes->getWidth();
    $right_double_angle = GreaterThanGreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['attribute_specification_right_double_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_double_angle->getWidth();
    return new static($left_double_angle, $attributes, $right_double_angle);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_double_angle' => $this->leftDoubleAngle,
      'attributes' => $this->attributes,
      'right_double_angle' => $this->rightDoubleAngle,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $left_double_angle = $this->leftDoubleAngle->rewrite($rewriter, $parents);
    $attributes = $this->attributes->rewrite($rewriter, $parents);
    $right_double_angle = $this->rightDoubleAngle->rewrite($rewriter, $parents);
    if (
      $left_double_angle === $this->leftDoubleAngle &&
      $attributes === $this->attributes &&
      $right_double_angle === $this->rightDoubleAngle
    ) {
      return $this;
    }
    return new static($left_double_angle, $attributes, $right_double_angle);
  }

  final public function getLeftDoubleAngleUNTYPED(): EditableNode {
    return $this->leftDoubleAngle;
  }

  public function withLeftDoubleAngle(LessThanLessThanToken $value): this {
    if ($value === $this->leftDoubleAngle) {
      return $this;
    }
    return new static($value, $this->attributes, $this->right_double_angle);
  }

  public function hasLeftDoubleAngle(): bool {
    return $this->leftDoubleAngle !== null;
  }

  /**
   * @returns LessThanLessThanToken
   */
  public function getLeftDoubleAngle(): LessThanLessThanToken {
    return TypeAssert\instance_of(
      LessThanLessThanToken::class,
      $this->leftDoubleAngle,
    );
  }

  /**
   * @returns LessThanLessThanToken
   */
  public function getLeftDoubleAnglex(): LessThanLessThanToken {
    return $this->getLeftDoubleAngle();
  }

  final public function getAttributesUNTYPED(): EditableNode {
    return $this->attributes;
  }

  public function withAttributes(EditableList<Attribute> $value): this {
    if ($value === $this->attributes) {
      return $this;
    }
    return
      new static($this->left_double_angle, $value, $this->right_double_angle);
  }

  public function hasAttributes(): bool {
    return $this->attributes !== null;
  }

  /**
   * @returns EditableList<Attribute>
   */
  public function getAttributes(): EditableList<Attribute> {
    return TypeAssert\instance_of(EditableList::class, $this->attributes);
  }

  /**
   * @returns EditableList<Attribute>
   */
  public function getAttributesx(): EditableList<Attribute> {
    return $this->getAttributes();
  }

  final public function getRightDoubleAngleUNTYPED(): EditableNode {
    return $this->rightDoubleAngle;
  }

  public function withRightDoubleAngle(
    GreaterThanGreaterThanToken $value,
  ): this {
    if ($value === $this->rightDoubleAngle) {
      return $this;
    }
    return new static($this->left_double_angle, $this->attributes, $value);
  }

  public function hasRightDoubleAngle(): bool {
    return $this->rightDoubleAngle !== null;
  }

  /**
   * @returns GreaterThanGreaterThanToken
   */
  public function getRightDoubleAngle(): GreaterThanGreaterThanToken {
    return TypeAssert\instance_of(
      GreaterThanGreaterThanToken::class,
      $this->rightDoubleAngle,
    );
  }

  /**
   * @returns GreaterThanGreaterThanToken
   */
  public function getRightDoubleAnglex(): GreaterThanGreaterThanToken {
    return $this->getRightDoubleAngle();
  }
}
