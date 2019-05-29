/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<23f541eb245ee5f8db2674aa5e7d8aac>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class CollectionLiteralExpression
  extends Node
  implements IContainer, ILambdaBody, IExpression {

  const string SYNTAX_KIND = 'collection_literal_expression';

  private Node $_name;
  private Node $_left_brace;
  private Node $_initializers;
  private Node $_right_brace;

  public function __construct(
    Node $name,
    Node $left_brace,
    Node $initializers,
    Node $right_brace,
    ?__Private\SourceRef $source_ref = null,
  ) {
    $this->_name = $name;
    $this->_left_brace = $left_brace;
    $this->_initializers = $initializers;
    $this->_right_brace = $right_brace;
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
    $name = Node::fromJSON(
      /* HH_FIXME[4110] */ $json['collection_literal_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $left_brace = Node::fromJSON(
      /* HH_FIXME[4110] */ $json['collection_literal_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $initializers = Node::fromJSON(
      /* HH_FIXME[4110] */ $json['collection_literal_initializers'],
      $file,
      $offset,
      $source,
    );
    $offset += $initializers->getWidth();
    $right_brace = Node::fromJSON(
      /* HH_FIXME[4110] */ $json['collection_literal_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    $source_ref = shape(
      'file' => $file,
      'source' => $source,
      'offset' => $initial_offset,
      'width' => $offset - $initial_offset,
    );
    return new static(
      $name,
      $left_brace,
      $initializers,
      $right_brace,
      $source_ref,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, Node> {
    return dict[
      'name' => $this->_name,
      'left_brace' => $this->_left_brace,
      'initializers' => $this->_initializers,
      'right_brace' => $this->_right_brace,
    ];
  }

  <<__Override>>
  public function rewriteChildren(
    self::TRewriter $rewriter,
    vec<Node> $parents = vec[],
  ): this {
    $parents[] = $this;
    $name = $rewriter($this->_name, $parents);
    $left_brace = $rewriter($this->_left_brace, $parents);
    $initializers = $rewriter($this->_initializers, $parents);
    $right_brace = $rewriter($this->_right_brace, $parents);
    if (
      $name === $this->_name &&
      $left_brace === $this->_left_brace &&
      $initializers === $this->_initializers &&
      $right_brace === $this->_right_brace
    ) {
      return $this;
    }
    return new static($name, $left_brace, $initializers, $right_brace);
  }

  public function getNameUNTYPED(): Node {
    return $this->_name;
  }

  public function withName(Node $value): this {
    if ($value === $this->_name) {
      return $this;
    }
    return new static(
      $value,
      $this->_left_brace,
      $this->_initializers,
      $this->_right_brace,
    );
  }

  public function hasName(): bool {
    return !$this->_name->isMissing();
  }

  /**
   * @return GenericTypeSpecifier | SimpleTypeSpecifier
   */
  public function getName(): ISimpleCreationSpecifier {
    return TypeAssert\instance_of(
      ISimpleCreationSpecifier::class,
      $this->_name,
    );
  }

  /**
   * @return GenericTypeSpecifier | SimpleTypeSpecifier
   */
  public function getNamex(): ISimpleCreationSpecifier {
    return $this->getName();
  }

  public function getLeftBraceUNTYPED(): Node {
    return $this->_left_brace;
  }

  public function withLeftBrace(Node $value): this {
    if ($value === $this->_left_brace) {
      return $this;
    }
    return new static(
      $this->_name,
      $value,
      $this->_initializers,
      $this->_right_brace,
    );
  }

  public function hasLeftBrace(): bool {
    return !$this->_left_brace->isMissing();
  }

  /**
   * @return LeftBraceToken
   */
  public function getLeftBrace(): LeftBraceToken {
    return TypeAssert\instance_of(LeftBraceToken::class, $this->_left_brace);
  }

  /**
   * @return LeftBraceToken
   */
  public function getLeftBracex(): LeftBraceToken {
    return $this->getLeftBrace();
  }

  public function getInitializersUNTYPED(): Node {
    return $this->_initializers;
  }

  public function withInitializers(Node $value): this {
    if ($value === $this->_initializers) {
      return $this;
    }
    return new static(
      $this->_name,
      $this->_left_brace,
      $value,
      $this->_right_brace,
    );
  }

  public function hasInitializers(): bool {
    return !$this->_initializers->isMissing();
  }

  /**
   * @return NodeList<AnonymousFunction> | NodeList<ArrayCreationExpression> |
   * NodeList<ArrayIntrinsicExpression> | NodeList<IContainer> |
   * NodeList<IExpression> | NodeList<CastExpression> |
   * NodeList<CollectionLiteralExpression> | NodeList<ElementInitializer> |
   * NodeList<FunctionCallExpression> | NodeList<LambdaExpression> |
   * NodeList<LiteralExpression> | NodeList<ObjectCreationExpression> |
   * NodeList<ScopeResolutionExpression> | NodeList<ShapeExpression> |
   * NodeList<SubscriptExpression> | NodeList<NameToken> |
   * NodeList<TupleExpression> | NodeList<VariableExpression> |
   * NodeList<VarrayIntrinsicExpression> | null
   */
  public function getInitializers(): ?NodeList<Node> {
    if ($this->_initializers->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(NodeList::class, $this->_initializers);
  }

  /**
   * @return NodeList<AnonymousFunction> | NodeList<ArrayCreationExpression> |
   * NodeList<ArrayIntrinsicExpression> | NodeList<IContainer> |
   * NodeList<IExpression> | NodeList<CastExpression> |
   * NodeList<CollectionLiteralExpression> | NodeList<ElementInitializer> |
   * NodeList<FunctionCallExpression> | NodeList<LambdaExpression> |
   * NodeList<LiteralExpression> | NodeList<ObjectCreationExpression> |
   * NodeList<ScopeResolutionExpression> | NodeList<ShapeExpression> |
   * NodeList<SubscriptExpression> | NodeList<NameToken> |
   * NodeList<TupleExpression> | NodeList<VariableExpression> |
   * NodeList<VarrayIntrinsicExpression>
   */
  public function getInitializersx(): NodeList<Node> {
    return TypeAssert\not_null($this->getInitializers());
  }

  public function getRightBraceUNTYPED(): Node {
    return $this->_right_brace;
  }

  public function withRightBrace(Node $value): this {
    if ($value === $this->_right_brace) {
      return $this;
    }
    return new static(
      $this->_name,
      $this->_left_brace,
      $this->_initializers,
      $value,
    );
  }

  public function hasRightBrace(): bool {
    return !$this->_right_brace->isMissing();
  }

  /**
   * @return RightBraceToken
   */
  public function getRightBrace(): RightBraceToken {
    return TypeAssert\instance_of(RightBraceToken::class, $this->_right_brace);
  }

  /**
   * @return RightBraceToken
   */
  public function getRightBracex(): RightBraceToken {
    return $this->getRightBrace();
  }
}
