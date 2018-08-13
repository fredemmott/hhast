<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<8fc264788c83033ac7c0e17c517cfdcc>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class CollectionLiteralExpression extends EditableNode {

  public function __construct(
    private EditableNode $name,
    private LeftBraceToken $leftBrace,
    private ?EditableList<EditableNode> $initializers,
    private ?RightBraceToken $rightBrace,
  ) {
    parent::__construct('collection_literal_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['collection_literal_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $left_brace = LeftBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['collection_literal_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $initializers = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['collection_literal_initializers'],
      $file,
      $offset,
      $source,
    );
    $offset += $initializers->getWidth();
    $right_brace = RightBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['collection_literal_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    return new static($name, $left_brace, $initializers, $right_brace);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'name' => $this->name,
      'left_brace' => $this->leftBrace,
      'initializers' => $this->initializers,
      'right_brace' => $this->rightBrace,
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
    $left_brace = $this->leftBrace->rewrite($rewriter, $parents);
    $initializers = $this->initializers?->rewrite($rewriter, $parents);
    $right_brace = $this->rightBrace?->rewrite($rewriter, $parents);
    if (
      $name === $this->name &&
      $left_brace === $this->leftBrace &&
      $initializers === $this->initializers &&
      $right_brace === $this->rightBrace
    ) {
      return $this;
    }
    return new static($name, $left_brace, $initializers, $right_brace);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(EditableNode $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static(
      $value,
      $this->left_brace,
      $this->initializers,
      $this->right_brace,
    );
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns GenericTypeSpecifier | SimpleTypeSpecifier
   */
  public function getName(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  /**
   * @returns GenericTypeSpecifier | SimpleTypeSpecifier
   */
  public function getNamex(): EditableNode {
    return $this->getName();
  }

  final public function getLeftBraceUNTYPED(): EditableNode {
    return $this->leftBrace;
  }

  public function withLeftBrace(LeftBraceToken $value): this {
    if ($value === $this->leftBrace) {
      return $this;
    }
    return
      new static($this->name, $value, $this->initializers, $this->right_brace);
  }

  public function hasLeftBrace(): bool {
    return $this->leftBrace !== null;
  }

  /**
   * @returns LeftBraceToken
   */
  public function getLeftBrace(): LeftBraceToken {
    return TypeAssert\instance_of(LeftBraceToken::class, $this->leftBrace);
  }

  /**
   * @returns LeftBraceToken
   */
  public function getLeftBracex(): LeftBraceToken {
    return $this->getLeftBrace();
  }

  final public function getInitializersUNTYPED(): EditableNode {
    return $this->initializers;
  }

  public function withInitializers(?EditableList<EditableNode> $value): this {
    if ($value === $this->initializers) {
      return $this;
    }
    return
      new static($this->name, $this->left_brace, $value, $this->right_brace);
  }

  public function hasInitializers(): bool {
    return $this->initializers !== null;
  }

  /**
   * @returns EditableList<AnonymousFunction> |
   * EditableList<ArrayCreationExpression> |
   * EditableList<ArrayIntrinsicExpression> | EditableList<EditableNode> |
   * EditableList<CastExpression> | EditableList<CollectionLiteralExpression> |
   * EditableList<ElementInitializer> | EditableList<FunctionCallExpression> |
   * EditableList<LambdaExpression> | EditableList<LiteralExpression> |
   * EditableList<ObjectCreationExpression> |
   * EditableList<ScopeResolutionExpression> |
   * EditableList<SubscriptExpression> | EditableList<NameToken> |
   * EditableList<TupleExpression> | EditableList<VariableExpression> |
   * EditableList<VarrayIntrinsicExpression> | Missing
   */
  public function getInitializers(): ?EditableList<EditableNode> {
    if ($this->initializers->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->initializers);
  }

  /**
   * @returns EditableList<AnonymousFunction> |
   * EditableList<ArrayCreationExpression> |
   * EditableList<ArrayIntrinsicExpression> | EditableList<EditableNode> |
   * EditableList<CastExpression> | EditableList<CollectionLiteralExpression> |
   * EditableList<ElementInitializer> | EditableList<FunctionCallExpression> |
   * EditableList<LambdaExpression> | EditableList<LiteralExpression> |
   * EditableList<ObjectCreationExpression> |
   * EditableList<ScopeResolutionExpression> |
   * EditableList<SubscriptExpression> | EditableList<NameToken> |
   * EditableList<TupleExpression> | EditableList<VariableExpression> |
   * EditableList<VarrayIntrinsicExpression>
   */
  public function getInitializersx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->initializers);
  }

  final public function getRightBraceUNTYPED(): EditableNode {
    return $this->rightBrace;
  }

  public function withRightBrace(?RightBraceToken $value): this {
    if ($value === $this->rightBrace) {
      return $this;
    }
    return
      new static($this->name, $this->left_brace, $this->initializers, $value);
  }

  public function hasRightBrace(): bool {
    return $this->rightBrace !== null;
  }

  /**
   * @returns Missing | RightBraceToken
   */
  public function getRightBrace(): ?RightBraceToken {
    if ($this->rightBrace->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(RightBraceToken::class, $this->rightBrace);
  }

  /**
   * @returns RightBraceToken
   */
  public function getRightBracex(): RightBraceToken {
    return TypeAssert\instance_of(RightBraceToken::class, $this->rightBrace);
  }
}
