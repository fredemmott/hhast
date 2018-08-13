<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<1cb8eb44f3a5a1f7ce98805760a71aa6>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ClassnameTypeSpecifier extends EditableNode {

  public function __construct(
    private ClassnameToken $keyword,
    private ?LessThanToken $leftAngle,
    private ?EditableNode $type,
    private ?EditableNode $trailingComma,
    private ?GreaterThanToken $rightAngle,
  ) {
    parent::__construct('classname_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = ClassnameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['classname_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_angle = LessThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['classname_left_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_angle->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['classname_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $trailing_comma = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['classname_trailing_comma'],
      $file,
      $offset,
      $source,
    );
    $offset += $trailing_comma->getWidth();
    $right_angle = GreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['classname_right_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_angle->getWidth();
    return
      new static($keyword, $left_angle, $type, $trailing_comma, $right_angle);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_angle' => $this->leftAngle,
      'type' => $this->type,
      'trailing_comma' => $this->trailingComma,
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
    $left_angle = $this->leftAngle?->rewrite($rewriter, $parents);
    $type = $this->type?->rewrite($rewriter, $parents);
    $trailing_comma = $this->trailingComma?->rewrite($rewriter, $parents);
    $right_angle = $this->rightAngle?->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_angle === $this->leftAngle &&
      $type === $this->type &&
      $trailing_comma === $this->trailingComma &&
      $right_angle === $this->rightAngle
    ) {
      return $this;
    }
    return
      new static($keyword, $left_angle, $type, $trailing_comma, $right_angle);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(ClassnameToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_angle,
      $this->type,
      $this->trailing_comma,
      $this->right_angle,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns ClassnameToken
   */
  public function getKeyword(): ClassnameToken {
    return TypeAssert\instance_of(ClassnameToken::class, $this->keyword);
  }

  /**
   * @returns ClassnameToken
   */
  public function getKeywordx(): ClassnameToken {
    return $this->getKeyword();
  }

  final public function getLeftAngleUNTYPED(): EditableNode {
    return $this->leftAngle;
  }

  public function withLeftAngle(?LessThanToken $value): this {
    if ($value === $this->leftAngle) {
      return $this;
    }
    return new static(
      $this->keyword,
      $value,
      $this->type,
      $this->trailing_comma,
      $this->right_angle,
    );
  }

  public function hasLeftAngle(): bool {
    return $this->leftAngle !== null;
  }

  /**
   * @returns Missing | LessThanToken
   */
  public function getLeftAngle(): ?LessThanToken {
    if ($this->leftAngle->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(LessThanToken::class, $this->leftAngle);
  }

  /**
   * @returns LessThanToken
   */
  public function getLeftAnglex(): LessThanToken {
    return TypeAssert\instance_of(LessThanToken::class, $this->leftAngle);
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(?EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_angle,
      $value,
      $this->trailing_comma,
      $this->right_angle,
    );
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns Missing | SimpleTypeSpecifier | TypeConstant
   */
  public function getType(): ?EditableNode {
    if ($this->type->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns SimpleTypeSpecifier | TypeConstant
   */
  public function getTypex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  final public function getTrailingCommaUNTYPED(): EditableNode {
    return $this->trailingComma;
  }

  public function withTrailingComma(?EditableNode $value): this {
    if ($value === $this->trailingComma) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_angle,
      $this->type,
      $value,
      $this->right_angle,
    );
  }

  public function hasTrailingComma(): bool {
    return $this->trailingComma !== null;
  }

  /**
   * @returns Missing
   */
  public function getTrailingComma(): ?EditableNode {
    if ($this->trailingComma->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->trailingComma);
  }

  /**
   * @returns
   */
  public function getTrailingCommax(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->trailingComma);
  }

  final public function getRightAngleUNTYPED(): EditableNode {
    return $this->rightAngle;
  }

  public function withRightAngle(?GreaterThanToken $value): this {
    if ($value === $this->rightAngle) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_angle,
      $this->type,
      $this->trailing_comma,
      $value,
    );
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
