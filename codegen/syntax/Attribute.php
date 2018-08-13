<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<b50c15b222a34b0abb4b5483676e7400>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class Attribute extends EditableNode {

  public function __construct(
    private NameToken $name,
    private ?LeftParenToken $leftParen,
    private ?EditableList<EditableNode> $values,
    private ?RightParenToken $rightParen,
  ) {
    parent::__construct('attribute');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $name = NameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['attribute_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['attribute_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $values = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['attribute_values'],
      $file,
      $offset,
      $source,
    );
    $offset += $values->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['attribute_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    return new static($name, $left_paren, $values, $right_paren);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'name' => $this->name,
      'left_paren' => $this->leftParen,
      'values' => $this->values,
      'right_paren' => $this->rightParen,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $name = $this->name->rewrite($rewriter, $parents);
    $left_paren = $this->leftParen?->rewrite($rewriter, $parents);
    $values = $this->values?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen?->rewrite($rewriter, $parents);
    if (
      $name === $this->name &&
      $left_paren === $this->leftParen &&
      $values === $this->values &&
      $right_paren === $this->rightParen
    ) {
      return $this;
    }
    return new static($name, $left_paren, $values, $right_paren);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(NameToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return
      new static($value, $this->left_paren, $this->values, $this->right_paren);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns NameToken
   */
  public function getName(): NameToken {
    return TypeAssert\instance_of(NameToken::class, $this->name);
  }

  /**
   * @returns NameToken
   */
  public function getNamex(): NameToken {
    return $this->getName();
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(?LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static($this->name, $value, $this->values, $this->right_paren);
  }

  public function hasLeftParen(): bool {
    return $this->leftParen !== null;
  }

  /**
   * @returns Missing | LeftParenToken
   */
  public function getLeftParen(): ?LeftParenToken {
    if ($this->leftParen->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParenx(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  final public function getValuesUNTYPED(): EditableNode {
    return $this->values;
  }

  public function withValues(?EditableList<EditableNode> $value): this {
    if ($value === $this->values) {
      return $this;
    }
    return
      new static($this->name, $this->left_paren, $value, $this->right_paren);
  }

  public function hasValues(): bool {
    return $this->values !== null;
  }

  /**
   * @returns EditableList<ArrayCreationExpression> |
   * EditableList<EditableNode> | EditableList<BinaryExpression> |
   * EditableList<DictionaryIntrinsicExpression> |
   * EditableList<KeysetIntrinsicExpression> | EditableList<LiteralExpression>
   * | EditableList<ScopeResolutionExpression> | EditableList<ShapeExpression>
   * | EditableList<VectorIntrinsicExpression> | Missing
   */
  public function getValues(): ?EditableList<EditableNode> {
    if ($this->values->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->values);
  }

  /**
   * @returns EditableList<ArrayCreationExpression> |
   * EditableList<EditableNode> | EditableList<BinaryExpression> |
   * EditableList<DictionaryIntrinsicExpression> |
   * EditableList<KeysetIntrinsicExpression> | EditableList<LiteralExpression>
   * | EditableList<ScopeResolutionExpression> | EditableList<ShapeExpression>
   * | EditableList<VectorIntrinsicExpression>
   */
  public function getValuesx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->values);
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(?RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static($this->name, $this->left_paren, $this->values, $value);
  }

  public function hasRightParen(): bool {
    return $this->rightParen !== null;
  }

  /**
   * @returns Missing | RightParenToken
   */
  public function getRightParen(): ?RightParenToken {
    if ($this->rightParen->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParenx(): RightParenToken {
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }
}
