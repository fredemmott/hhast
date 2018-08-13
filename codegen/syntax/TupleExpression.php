<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<e555c36993b761c50fe650d6f5c0d0db>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TupleExpression extends EditableNode {

  public function __construct(
    private TupleToken $keyword,
    private LeftParenToken $leftParen,
    private ?EditableList<EditableNode> $items,
    private RightParenToken $rightParen,
  ) {
    parent::__construct('tuple_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = TupleToken::fromJSON(
      /* UNSAFE_EXPR */ $json['tuple_expression_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['tuple_expression_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $items = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['tuple_expression_items'],
      $file,
      $offset,
      $source,
    );
    $offset += $items->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['tuple_expression_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    return new static($keyword, $left_paren, $items, $right_paren);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'items' => $this->items,
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
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $items = $this->items?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $items === $this->items &&
      $right_paren === $this->rightParen
    ) {
      return $this;
    }
    return new static($keyword, $left_paren, $items, $right_paren);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(TupleToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return
      new static($value, $this->left_paren, $this->items, $this->right_paren);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns TupleToken
   */
  public function getKeyword(): TupleToken {
    return TypeAssert\instance_of(TupleToken::class, $this->keyword);
  }

  /**
   * @returns TupleToken
   */
  public function getKeywordx(): TupleToken {
    return $this->getKeyword();
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static($this->keyword, $value, $this->items, $this->right_paren);
  }

  public function hasLeftParen(): bool {
    return $this->leftParen !== null;
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParen(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParenx(): LeftParenToken {
    return $this->getLeftParen();
  }

  final public function getItemsUNTYPED(): EditableNode {
    return $this->items;
  }

  public function withItems(?EditableList<EditableNode> $value): this {
    if ($value === $this->items) {
      return $this;
    }
    return
      new static($this->keyword, $this->left_paren, $value, $this->right_paren);
  }

  public function hasItems(): bool {
    return $this->items !== null;
  }

  /**
   * @returns EditableList<ArrayIntrinsicExpression> |
   * EditableList<EditableNode> | EditableList<BinaryExpression> |
   * EditableList<CastExpression> | EditableList<FunctionCallExpression> |
   * EditableList<LiteralExpression> | EditableList<VariableExpression> |
   * Missing
   */
  public function getItems(): ?EditableList<EditableNode> {
    if ($this->items->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->items);
  }

  /**
   * @returns EditableList<ArrayIntrinsicExpression> |
   * EditableList<EditableNode> | EditableList<BinaryExpression> |
   * EditableList<CastExpression> | EditableList<FunctionCallExpression> |
   * EditableList<LiteralExpression> | EditableList<VariableExpression>
   */
  public function getItemsx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->items);
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static($this->keyword, $this->left_paren, $this->items, $value);
  }

  public function hasRightParen(): bool {
    return $this->rightParen !== null;
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParen(): RightParenToken {
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParenx(): RightParenToken {
    return $this->getRightParen();
  }
}
