/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<72164c6d7f786283e317085c1b029ded>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ArrayIntrinsicExpression
  extends Node
  implements IPHPArray, IContainer, ILambdaBody, IExpression {

  const string SYNTAX_KIND = 'array_intrinsic_expression';

  private Node $_keyword;
  private Node $_left_paren;
  private Node $_members;
  private Node $_right_paren;

  public function __construct(
    Node $keyword,
    Node $left_paren,
    Node $members,
    Node $right_paren,
    ?__Private\SourceRef $source_ref = null,
  ) {
    $this->_keyword = $keyword;
    $this->_left_paren = $left_paren;
    $this->_members = $members;
    $this->_right_paren = $right_paren;
    parent::__construct($source_ref);
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $initial_offset,
    string $source,
  ): this {
    $offset = $initial_offset;
    $keyword = Node::fromJSON(
      /* HH_FIXME[4110] */ $json['array_intrinsic_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = Node::fromJSON(
      /* HH_FIXME[4110] */ $json['array_intrinsic_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $members = Node::fromJSON(
      /* HH_FIXME[4110] */ $json['array_intrinsic_members'],
      $file,
      $offset,
      $source,
    );
    $offset += $members->getWidth();
    $right_paren = Node::fromJSON(
      /* HH_FIXME[4110] */ $json['array_intrinsic_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $source_ref = shape(
      'file' => $file,
      'source' => $source,
      'offset' => $initial_offset,
      'width' => $offset - $initial_offset,
    );
    return new static(
      $keyword,
      $left_paren,
      $members,
      $right_paren,
      $source_ref,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, Node> {
    return dict[
      'keyword' => $this->_keyword,
      'left_paren' => $this->_left_paren,
      'members' => $this->_members,
      'right_paren' => $this->_right_paren,
    ];
  }

  <<__Override>>
  public function rewriteChildren(
    self::TRewriter $rewriter,
    vec<Node> $parents = vec[],
  ): this {
    $parents[] = $this;
    $keyword = $rewriter($this->_keyword, $parents);
    $left_paren = $rewriter($this->_left_paren, $parents);
    $members = $rewriter($this->_members, $parents);
    $right_paren = $rewriter($this->_right_paren, $parents);
    if (
      $keyword === $this->_keyword &&
      $left_paren === $this->_left_paren &&
      $members === $this->_members &&
      $right_paren === $this->_right_paren
    ) {
      return $this;
    }
    return new static($keyword, $left_paren, $members, $right_paren);
  }

  public function getKeywordUNTYPED(): Node {
    return $this->_keyword;
  }

  public function withKeyword(Node $value): this {
    if ($value === $this->_keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->_left_paren,
      $this->_members,
      $this->_right_paren,
    );
  }

  public function hasKeyword(): bool {
    return !$this->_keyword->isMissing();
  }

  /**
   * @return ArrayToken
   */
  public function getKeyword(): ArrayToken {
    return TypeAssert\instance_of(ArrayToken::class, $this->_keyword);
  }

  /**
   * @return ArrayToken
   */
  public function getKeywordx(): ArrayToken {
    return $this->getKeyword();
  }

  public function getLeftParenUNTYPED(): Node {
    return $this->_left_paren;
  }

  public function withLeftParen(Node $value): this {
    if ($value === $this->_left_paren) {
      return $this;
    }
    return new static(
      $this->_keyword,
      $value,
      $this->_members,
      $this->_right_paren,
    );
  }

  public function hasLeftParen(): bool {
    return !$this->_left_paren->isMissing();
  }

  /**
   * @return LeftParenToken
   */
  public function getLeftParen(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->_left_paren);
  }

  /**
   * @return LeftParenToken
   */
  public function getLeftParenx(): LeftParenToken {
    return $this->getLeftParen();
  }

  public function getMembersUNTYPED(): Node {
    return $this->_members;
  }

  public function withMembers(Node $value): this {
    if ($value === $this->_members) {
      return $this;
    }
    return new static(
      $this->_keyword,
      $this->_left_paren,
      $value,
      $this->_right_paren,
    );
  }

  public function hasMembers(): bool {
    return !$this->_members->isMissing();
  }

  /**
   * @return NodeList<AnonymousFunction> | NodeList<IExpression> |
   * NodeList<ArrayCreationExpression> | NodeList<ArrayIntrinsicExpression> |
   * NodeList<Node> | NodeList<AwaitableCreationExpression> |
   * NodeList<BinaryExpression> | NodeList<IHasOperator> |
   * NodeList<CastExpression> | NodeList<CollectionLiteralExpression> |
   * NodeList<ElementInitializer> | NodeList<FunctionCallExpression> |
   * NodeList<IFunctionCallishExpression> | NodeList<LiteralExpression> |
   * NodeList<MemberSelectionExpression> | NodeList<ObjectCreationExpression> |
   * NodeList<PrefixUnaryExpression> | NodeList<QualifiedName> |
   * NodeList<ScopeResolutionExpression> | NodeList<SubscriptExpression> |
   * NodeList<NameToken> | NodeList<TupleExpression> |
   * NodeList<VariableExpression> | NodeList<VectorIntrinsicExpression> | null
   */
  public function getMembers(): ?NodeList<Node> {
    if ($this->_members->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(NodeList::class, $this->_members);
  }

  /**
   * @return NodeList<AnonymousFunction> | NodeList<IExpression> |
   * NodeList<ArrayCreationExpression> | NodeList<ArrayIntrinsicExpression> |
   * NodeList<Node> | NodeList<AwaitableCreationExpression> |
   * NodeList<BinaryExpression> | NodeList<IHasOperator> |
   * NodeList<CastExpression> | NodeList<CollectionLiteralExpression> |
   * NodeList<ElementInitializer> | NodeList<FunctionCallExpression> |
   * NodeList<IFunctionCallishExpression> | NodeList<LiteralExpression> |
   * NodeList<MemberSelectionExpression> | NodeList<ObjectCreationExpression> |
   * NodeList<PrefixUnaryExpression> | NodeList<QualifiedName> |
   * NodeList<ScopeResolutionExpression> | NodeList<SubscriptExpression> |
   * NodeList<NameToken> | NodeList<TupleExpression> |
   * NodeList<VariableExpression> | NodeList<VectorIntrinsicExpression>
   */
  public function getMembersx(): NodeList<Node> {
    return TypeAssert\not_null($this->getMembers());
  }

  public function getRightParenUNTYPED(): Node {
    return $this->_right_paren;
  }

  public function withRightParen(Node $value): this {
    if ($value === $this->_right_paren) {
      return $this;
    }
    return new static(
      $this->_keyword,
      $this->_left_paren,
      $this->_members,
      $value,
    );
  }

  public function hasRightParen(): bool {
    return !$this->_right_paren->isMissing();
  }

  /**
   * @return RightParenToken
   */
  public function getRightParen(): RightParenToken {
    return TypeAssert\instance_of(RightParenToken::class, $this->_right_paren);
  }

  /**
   * @return RightParenToken
   */
  public function getRightParenx(): RightParenToken {
    return $this->getRightParen();
  }
}
