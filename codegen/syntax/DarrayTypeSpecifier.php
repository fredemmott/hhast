<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<45064baeb72ea82a2fa706140665e472>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class DarrayTypeSpecifier extends EditableNode {

  public function __construct(
    private DarrayToken $keyword,
    private LessThanToken $leftAngle,
    private SimpleTypeSpecifier $key,
    private CommaToken $comma,
    private EditableNode $value,
    private ?EditableNode $trailingComma,
    private GreaterThanToken $rightAngle,
  ) {
    parent::__construct('darray_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = DarrayToken::fromJSON(
      /* UNSAFE_EXPR */ $json['darray_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_angle = LessThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['darray_left_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_angle->getWidth();
    $key = SimpleTypeSpecifier::fromJSON(
      /* UNSAFE_EXPR */ $json['darray_key'],
      $file,
      $offset,
      $source,
    );
    $offset += $key->getWidth();
    $comma = CommaToken::fromJSON(
      /* UNSAFE_EXPR */ $json['darray_comma'],
      $file,
      $offset,
      $source,
    );
    $offset += $comma->getWidth();
    $value = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['darray_value'],
      $file,
      $offset,
      $source,
    );
    $offset += $value->getWidth();
    $trailing_comma = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['darray_trailing_comma'],
      $file,
      $offset,
      $source,
    );
    $offset += $trailing_comma->getWidth();
    $right_angle = GreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['darray_right_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_angle->getWidth();
    return new static(
      $keyword,
      $left_angle,
      $key,
      $comma,
      $value,
      $trailing_comma,
      $right_angle,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_angle' => $this->leftAngle,
      'key' => $this->key,
      'comma' => $this->comma,
      'value' => $this->value,
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
    $left_angle = $this->leftAngle->rewrite($rewriter, $parents);
    $key = $this->key->rewrite($rewriter, $parents);
    $comma = $this->comma->rewrite($rewriter, $parents);
    $value = $this->value->rewrite($rewriter, $parents);
    $trailing_comma = $this->trailingComma?->rewrite($rewriter, $parents);
    $right_angle = $this->rightAngle->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_angle === $this->leftAngle &&
      $key === $this->key &&
      $comma === $this->comma &&
      $value === $this->value &&
      $trailing_comma === $this->trailingComma &&
      $right_angle === $this->rightAngle
    ) {
      return $this;
    }
    return new static(
      $keyword,
      $left_angle,
      $key,
      $comma,
      $value,
      $trailing_comma,
      $right_angle,
    );
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(DarrayToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_angle,
      $this->key,
      $this->comma,
      $this->value,
      $this->trailing_comma,
      $this->right_angle,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns DarrayToken
   */
  public function getKeyword(): DarrayToken {
    return TypeAssert\instance_of(DarrayToken::class, $this->keyword);
  }

  /**
   * @returns DarrayToken
   */
  public function getKeywordx(): DarrayToken {
    return $this->getKeyword();
  }

  final public function getLeftAngleUNTYPED(): EditableNode {
    return $this->leftAngle;
  }

  public function withLeftAngle(LessThanToken $value): this {
    if ($value === $this->leftAngle) {
      return $this;
    }
    return new static(
      $this->keyword,
      $value,
      $this->key,
      $this->comma,
      $this->value,
      $this->trailing_comma,
      $this->right_angle,
    );
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

  final public function getKeyUNTYPED(): EditableNode {
    return $this->key;
  }

  public function withKey(SimpleTypeSpecifier $value): this {
    if ($value === $this->key) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_angle,
      $value,
      $this->comma,
      $this->value,
      $this->trailing_comma,
      $this->right_angle,
    );
  }

  public function hasKey(): bool {
    return $this->key !== null;
  }

  /**
   * @returns SimpleTypeSpecifier
   */
  public function getKey(): SimpleTypeSpecifier {
    return TypeAssert\instance_of(SimpleTypeSpecifier::class, $this->key);
  }

  /**
   * @returns SimpleTypeSpecifier
   */
  public function getKeyx(): SimpleTypeSpecifier {
    return $this->getKey();
  }

  final public function getCommaUNTYPED(): EditableNode {
    return $this->comma;
  }

  public function withComma(CommaToken $value): this {
    if ($value === $this->comma) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_angle,
      $this->key,
      $value,
      $this->value,
      $this->trailing_comma,
      $this->right_angle,
    );
  }

  public function hasComma(): bool {
    return $this->comma !== null;
  }

  /**
   * @returns CommaToken
   */
  public function getComma(): CommaToken {
    return TypeAssert\instance_of(CommaToken::class, $this->comma);
  }

  /**
   * @returns CommaToken
   */
  public function getCommax(): CommaToken {
    return $this->getComma();
  }

  final public function getValueUNTYPED(): EditableNode {
    return $this->value;
  }

  public function withValue(EditableNode $value): this {
    if ($value === $this->value) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_angle,
      $this->key,
      $this->comma,
      $value,
      $this->trailing_comma,
      $this->right_angle,
    );
  }

  public function hasValue(): bool {
    return $this->value !== null;
  }

  /**
   * @returns DarrayTypeSpecifier | SimpleTypeSpecifier | VarrayTypeSpecifier |
   * VectorArrayTypeSpecifier
   */
  public function getValue(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->value);
  }

  /**
   * @returns DarrayTypeSpecifier | SimpleTypeSpecifier | VarrayTypeSpecifier |
   * VectorArrayTypeSpecifier
   */
  public function getValuex(): EditableNode {
    return $this->getValue();
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
      $this->key,
      $this->comma,
      $this->value,
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

  public function withRightAngle(GreaterThanToken $value): this {
    if ($value === $this->rightAngle) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_angle,
      $this->key,
      $this->comma,
      $this->value,
      $this->trailing_comma,
      $value,
    );
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
