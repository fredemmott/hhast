<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<2921a83441c8546680041292d4446aae>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ForeachStatement
  extends EditableNode
  implements IControlFlowStatement, ILoopStatement {

  public function __construct(
    private ForeachToken $keyword,
    private LeftParenToken $leftParen,
    private EditableNode $collection,
    private ?AwaitToken $awaitKeyword,
    private AsToken $as,
    private ?EditableNode $key,
    private ?EqualGreaterThanToken $arrow,
    private EditableNode $value,
    private RightParenToken $rightParen,
    private EditableNode $body,
  ) {
    parent::__construct('foreach_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = ForeachToken::fromJSON(
      /* UNSAFE_EXPR */ $json['foreach_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['foreach_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $collection = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['foreach_collection'],
      $file,
      $offset,
      $source,
    );
    $offset += $collection->getWidth();
    $await_keyword = AwaitToken::fromJSON(
      /* UNSAFE_EXPR */ $json['foreach_await_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $await_keyword->getWidth();
    $as = AsToken::fromJSON(
      /* UNSAFE_EXPR */ $json['foreach_as'],
      $file,
      $offset,
      $source,
    );
    $offset += $as->getWidth();
    $key = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['foreach_key'],
      $file,
      $offset,
      $source,
    );
    $offset += $key->getWidth();
    $arrow = EqualGreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['foreach_arrow'],
      $file,
      $offset,
      $source,
    );
    $offset += $arrow->getWidth();
    $value = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['foreach_value'],
      $file,
      $offset,
      $source,
    );
    $offset += $value->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['foreach_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $body = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['foreach_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static(
      $keyword,
      $left_paren,
      $collection,
      $await_keyword,
      $as,
      $key,
      $arrow,
      $value,
      $right_paren,
      $body,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'collection' => $this->collection,
      'await_keyword' => $this->awaitKeyword,
      'as' => $this->as,
      'key' => $this->key,
      'arrow' => $this->arrow,
      'value' => $this->value,
      'right_paren' => $this->rightParen,
      'body' => $this->body,
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
    $collection = $this->collection->rewrite($rewriter, $parents);
    $await_keyword = $this->awaitKeyword?->rewrite($rewriter, $parents);
    $as = $this->as->rewrite($rewriter, $parents);
    $key = $this->key?->rewrite($rewriter, $parents);
    $arrow = $this->arrow?->rewrite($rewriter, $parents);
    $value = $this->value->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $collection === $this->collection &&
      $await_keyword === $this->awaitKeyword &&
      $as === $this->as &&
      $key === $this->key &&
      $arrow === $this->arrow &&
      $value === $this->value &&
      $right_paren === $this->rightParen &&
      $body === $this->body
    ) {
      return $this;
    }
    return new static(
      $keyword,
      $left_paren,
      $collection,
      $await_keyword,
      $as,
      $key,
      $arrow,
      $value,
      $right_paren,
      $body,
    );
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(ForeachToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->collection,
      $this->await_keyword,
      $this->as,
      $this->key,
      $this->arrow,
      $this->value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns ForeachToken
   */
  public function getKeyword(): ForeachToken {
    return TypeAssert\instance_of(ForeachToken::class, $this->keyword);
  }

  /**
   * @returns ForeachToken
   */
  public function getKeywordx(): ForeachToken {
    return $this->getKeyword();
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static(
      $this->keyword,
      $value,
      $this->collection,
      $this->await_keyword,
      $this->as,
      $this->key,
      $this->arrow,
      $this->value,
      $this->right_paren,
      $this->body,
    );
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

  final public function getCollectionUNTYPED(): EditableNode {
    return $this->collection;
  }

  public function withCollection(EditableNode $value): this {
    if ($value === $this->collection) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $value,
      $this->await_keyword,
      $this->as,
      $this->key,
      $this->arrow,
      $this->value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasCollection(): bool {
    return $this->collection !== null;
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | CastExpression | CollectionLiteralExpression |
   * FunctionCallExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression | PrefixUnaryExpression
   * | ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression | VectorIntrinsicExpression
   */
  public function getCollection(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->collection);
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | CastExpression | CollectionLiteralExpression |
   * FunctionCallExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression | PrefixUnaryExpression
   * | ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression | VectorIntrinsicExpression
   */
  public function getCollectionx(): EditableNode {
    return $this->getCollection();
  }

  final public function getAwaitKeywordUNTYPED(): EditableNode {
    return $this->awaitKeyword;
  }

  public function withAwaitKeyword(?AwaitToken $value): this {
    if ($value === $this->awaitKeyword) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->collection,
      $value,
      $this->as,
      $this->key,
      $this->arrow,
      $this->value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasAwaitKeyword(): bool {
    return $this->awaitKeyword !== null;
  }

  /**
   * @returns Missing | AwaitToken
   */
  public function getAwaitKeyword(): ?AwaitToken {
    if ($this->awaitKeyword->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(AwaitToken::class, $this->awaitKeyword);
  }

  /**
   * @returns AwaitToken
   */
  public function getAwaitKeywordx(): AwaitToken {
    return TypeAssert\instance_of(AwaitToken::class, $this->awaitKeyword);
  }

  final public function getAsUNTYPED(): EditableNode {
    return $this->as;
  }

  public function withAs(AsToken $value): this {
    if ($value === $this->as) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->collection,
      $this->await_keyword,
      $value,
      $this->key,
      $this->arrow,
      $this->value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasAs(): bool {
    return $this->as !== null;
  }

  /**
   * @returns AsToken
   */
  public function getAs(): AsToken {
    return TypeAssert\instance_of(AsToken::class, $this->as);
  }

  /**
   * @returns AsToken
   */
  public function getAsx(): AsToken {
    return $this->getAs();
  }

  final public function getKeyUNTYPED(): EditableNode {
    return $this->key;
  }

  public function withKey(?EditableNode $value): this {
    if ($value === $this->key) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->collection,
      $this->await_keyword,
      $this->as,
      $value,
      $this->arrow,
      $this->value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasKey(): bool {
    return $this->key !== null;
  }

  /**
   * @returns FunctionCallExpression | ListExpression |
   * MemberSelectionExpression | Missing | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression
   */
  public function getKey(): ?EditableNode {
    if ($this->key->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->key);
  }

  /**
   * @returns FunctionCallExpression | ListExpression |
   * MemberSelectionExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression
   */
  public function getKeyx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->key);
  }

  final public function getArrowUNTYPED(): EditableNode {
    return $this->arrow;
  }

  public function withArrow(?EqualGreaterThanToken $value): this {
    if ($value === $this->arrow) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->collection,
      $this->await_keyword,
      $this->as,
      $this->key,
      $value,
      $this->value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasArrow(): bool {
    return $this->arrow !== null;
  }

  /**
   * @returns Missing | EqualGreaterThanToken
   */
  public function getArrow(): ?EqualGreaterThanToken {
    if ($this->arrow->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EqualGreaterThanToken::class, $this->arrow);
  }

  /**
   * @returns EqualGreaterThanToken
   */
  public function getArrowx(): EqualGreaterThanToken {
    return TypeAssert\instance_of(EqualGreaterThanToken::class, $this->arrow);
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
      $this->left_paren,
      $this->collection,
      $this->await_keyword,
      $this->as,
      $this->key,
      $this->arrow,
      $value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasValue(): bool {
    return $this->value !== null;
  }

  /**
   * @returns ArrayCreationExpression | FunctionCallExpression | ListExpression
   * | MemberSelectionExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression
   */
  public function getValue(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->value);
  }

  /**
   * @returns ArrayCreationExpression | FunctionCallExpression | ListExpression
   * | MemberSelectionExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression
   */
  public function getValuex(): EditableNode {
    return $this->getValue();
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->collection,
      $this->await_keyword,
      $this->as,
      $this->key,
      $this->arrow,
      $this->value,
      $value,
      $this->body,
    );
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

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(EditableNode $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->collection,
      $this->await_keyword,
      $this->as,
      $this->key,
      $this->arrow,
      $this->value,
      $this->right_paren,
      $value,
    );
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns AlternateLoopStatement | CompoundStatement | EchoStatement |
   * ExpressionStatement | ForeachStatement
   */
  public function getBody(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->body);
  }

  /**
   * @returns AlternateLoopStatement | CompoundStatement | EchoStatement |
   * ExpressionStatement | ForeachStatement
   */
  public function getBodyx(): EditableNode {
    return $this->getBody();
  }
}
