<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<21e9718c959b8bc48dd0a0a1abcbe302>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPOpen extends EditableNode {

  public function __construct(
    private LessThanToken $leftAngle,
    private XHPElementNameToken $name,
    private ?EditableList<EditableNode> $attributes,
    private ?EditableToken $rightAngle,
  ) {
    parent::__construct('xhp_open');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_angle = LessThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_open_left_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_angle->getWidth();
    $name = XHPElementNameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_open_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $attributes = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_open_attributes'],
      $file,
      $offset,
      $source,
    );
    $offset += $attributes->getWidth();
    $right_angle = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_open_right_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_angle->getWidth();
    return new static($left_angle, $name, $attributes, $right_angle);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_angle' => $this->leftAngle,
      'name' => $this->name,
      'attributes' => $this->attributes,
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
    $name = $this->name->rewrite($rewriter, $parents);
    $attributes = $this->attributes?->rewrite($rewriter, $parents);
    $right_angle = $this->rightAngle?->rewrite($rewriter, $parents);
    if (
      $left_angle === $this->leftAngle &&
      $name === $this->name &&
      $attributes === $this->attributes &&
      $right_angle === $this->rightAngle
    ) {
      return $this;
    }
    return new static($left_angle, $name, $attributes, $right_angle);
  }

  final public function getLeftAngleUNTYPED(): EditableNode {
    return $this->leftAngle;
  }

  public function withLeftAngle(LessThanToken $value): this {
    if ($value === $this->leftAngle) {
      return $this;
    }
    return
      new static($value, $this->name, $this->attributes, $this->right_angle);
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

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(XHPElementNameToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static(
      $this->left_angle,
      $value,
      $this->attributes,
      $this->right_angle,
    );
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns XHPElementNameToken
   */
  public function getName(): XHPElementNameToken {
    return TypeAssert\instance_of(XHPElementNameToken::class, $this->name);
  }

  /**
   * @returns XHPElementNameToken
   */
  public function getNamex(): XHPElementNameToken {
    return $this->getName();
  }

  final public function getAttributesUNTYPED(): EditableNode {
    return $this->attributes;
  }

  public function withAttributes(?EditableList<EditableNode> $value): this {
    if ($value === $this->attributes) {
      return $this;
    }
    return
      new static($this->left_angle, $this->name, $value, $this->right_angle);
  }

  public function hasAttributes(): bool {
    return $this->attributes !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getAttributes(): ?EditableList<EditableNode> {
    if ($this->attributes->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->attributes);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getAttributesx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->attributes);
  }

  final public function getRightAngleUNTYPED(): EditableNode {
    return $this->rightAngle;
  }

  public function withRightAngle(?EditableToken $value): this {
    if ($value === $this->rightAngle) {
      return $this;
    }
    return
      new static($this->left_angle, $this->name, $this->attributes, $value);
  }

  public function hasRightAngle(): bool {
    return $this->rightAngle !== null;
  }

  /**
   * @returns Missing | SlashGreaterThanToken | GreaterThanToken
   */
  public function getRightAngle(): ?EditableToken {
    if ($this->rightAngle->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableToken::class, $this->rightAngle);
  }

  /**
   * @returns SlashGreaterThanToken | GreaterThanToken
   */
  public function getRightAnglex(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->rightAngle);
  }
}
