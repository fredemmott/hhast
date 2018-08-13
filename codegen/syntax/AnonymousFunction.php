<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<738d8c97e7b491651beb1f4315763ff2>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class AnonymousFunction extends EditableNode {

  public function __construct(
    private ?AttributeSpecification $attributeSpec,
    private ?StaticToken $staticKeyword,
    private ?AsyncToken $asyncKeyword,
    private ?CoroutineToken $coroutineKeyword,
    private FunctionToken $functionKeyword,
    private ?AmpersandToken $ampersand,
    private ?LeftParenToken $leftParen,
    private ?EditableList<EditableNode> $parameters,
    private ?RightParenToken $rightParen,
    private ?ColonToken $colon,
    private ?EditableNode $type,
    private ?AnonymousFunctionUseClause $use,
    private CompoundStatement $body,
  ) {
    parent::__construct('anonymous_function');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute_spec = AttributeSpecification::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_attribute_spec'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute_spec->getWidth();
    $static_keyword = StaticToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_static_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $static_keyword->getWidth();
    $async_keyword = AsyncToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_async_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $async_keyword->getWidth();
    $coroutine_keyword = CoroutineToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_coroutine_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $coroutine_keyword->getWidth();
    $function_keyword = FunctionToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_function_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $function_keyword->getWidth();
    $ampersand = AmpersandToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_ampersand'],
      $file,
      $offset,
      $source,
    );
    $offset += $ampersand->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $parameters = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_parameters'],
      $file,
      $offset,
      $source,
    );
    $offset += $parameters->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $use = AnonymousFunctionUseClause::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_use'],
      $file,
      $offset,
      $source,
    );
    $offset += $use->getWidth();
    $body = CompoundStatement::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static(
      $attribute_spec,
      $static_keyword,
      $async_keyword,
      $coroutine_keyword,
      $function_keyword,
      $ampersand,
      $left_paren,
      $parameters,
      $right_paren,
      $colon,
      $type,
      $use,
      $body,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'attribute_spec' => $this->attributeSpec,
      'static_keyword' => $this->staticKeyword,
      'async_keyword' => $this->asyncKeyword,
      'coroutine_keyword' => $this->coroutineKeyword,
      'function_keyword' => $this->functionKeyword,
      'ampersand' => $this->ampersand,
      'left_paren' => $this->leftParen,
      'parameters' => $this->parameters,
      'right_paren' => $this->rightParen,
      'colon' => $this->colon,
      'type' => $this->type,
      'use' => $this->use,
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
    $attribute_spec = $this->attributeSpec?->rewrite($rewriter, $parents);
    $static_keyword = $this->staticKeyword?->rewrite($rewriter, $parents);
    $async_keyword = $this->asyncKeyword?->rewrite($rewriter, $parents);
    $coroutine_keyword = $this->coroutineKeyword?->rewrite($rewriter, $parents);
    $function_keyword = $this->functionKeyword->rewrite($rewriter, $parents);
    $ampersand = $this->ampersand?->rewrite($rewriter, $parents);
    $left_paren = $this->leftParen?->rewrite($rewriter, $parents);
    $parameters = $this->parameters?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen?->rewrite($rewriter, $parents);
    $colon = $this->colon?->rewrite($rewriter, $parents);
    $type = $this->type?->rewrite($rewriter, $parents);
    $use = $this->use?->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $attribute_spec === $this->attributeSpec &&
      $static_keyword === $this->staticKeyword &&
      $async_keyword === $this->asyncKeyword &&
      $coroutine_keyword === $this->coroutineKeyword &&
      $function_keyword === $this->functionKeyword &&
      $ampersand === $this->ampersand &&
      $left_paren === $this->leftParen &&
      $parameters === $this->parameters &&
      $right_paren === $this->rightParen &&
      $colon === $this->colon &&
      $type === $this->type &&
      $use === $this->use &&
      $body === $this->body
    ) {
      return $this;
    }
    return new static(
      $attribute_spec,
      $static_keyword,
      $async_keyword,
      $coroutine_keyword,
      $function_keyword,
      $ampersand,
      $left_paren,
      $parameters,
      $right_paren,
      $colon,
      $type,
      $use,
      $body,
    );
  }

  final public function getAttributeSpecUNTYPED(): EditableNode {
    return $this->attributeSpec;
  }

  public function withAttributeSpec(?AttributeSpecification $value): this {
    if ($value === $this->attributeSpec) {
      return $this;
    }
    return new static(
      $value,
      $this->static_keyword,
      $this->async_keyword,
      $this->coroutine_keyword,
      $this->function_keyword,
      $this->ampersand,
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->use,
      $this->body,
    );
  }

  public function hasAttributeSpec(): bool {
    return $this->attributeSpec !== null;
  }

  /**
   * @returns AttributeSpecification | Missing
   */
  public function getAttributeSpec(): ?AttributeSpecification {
    if ($this->attributeSpec->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(
      AttributeSpecification::class,
      $this->attributeSpec,
    );
  }

  /**
   * @returns AttributeSpecification
   */
  public function getAttributeSpecx(): AttributeSpecification {
    return TypeAssert\instance_of(
      AttributeSpecification::class,
      $this->attributeSpec,
    );
  }

  final public function getStaticKeywordUNTYPED(): EditableNode {
    return $this->staticKeyword;
  }

  public function withStaticKeyword(?StaticToken $value): this {
    if ($value === $this->staticKeyword) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $value,
      $this->async_keyword,
      $this->coroutine_keyword,
      $this->function_keyword,
      $this->ampersand,
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->use,
      $this->body,
    );
  }

  public function hasStaticKeyword(): bool {
    return $this->staticKeyword !== null;
  }

  /**
   * @returns Missing | StaticToken
   */
  public function getStaticKeyword(): ?StaticToken {
    if ($this->staticKeyword->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(StaticToken::class, $this->staticKeyword);
  }

  /**
   * @returns StaticToken
   */
  public function getStaticKeywordx(): StaticToken {
    return TypeAssert\instance_of(StaticToken::class, $this->staticKeyword);
  }

  final public function getAsyncKeywordUNTYPED(): EditableNode {
    return $this->asyncKeyword;
  }

  public function withAsyncKeyword(?AsyncToken $value): this {
    if ($value === $this->asyncKeyword) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->static_keyword,
      $value,
      $this->coroutine_keyword,
      $this->function_keyword,
      $this->ampersand,
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->use,
      $this->body,
    );
  }

  public function hasAsyncKeyword(): bool {
    return $this->asyncKeyword !== null;
  }

  /**
   * @returns Missing | AsyncToken
   */
  public function getAsyncKeyword(): ?AsyncToken {
    if ($this->asyncKeyword->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(AsyncToken::class, $this->asyncKeyword);
  }

  /**
   * @returns AsyncToken
   */
  public function getAsyncKeywordx(): AsyncToken {
    return TypeAssert\instance_of(AsyncToken::class, $this->asyncKeyword);
  }

  final public function getCoroutineKeywordUNTYPED(): EditableNode {
    return $this->coroutineKeyword;
  }

  public function withCoroutineKeyword(?CoroutineToken $value): this {
    if ($value === $this->coroutineKeyword) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->static_keyword,
      $this->async_keyword,
      $value,
      $this->function_keyword,
      $this->ampersand,
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->use,
      $this->body,
    );
  }

  public function hasCoroutineKeyword(): bool {
    return $this->coroutineKeyword !== null;
  }

  /**
   * @returns Missing | CoroutineToken
   */
  public function getCoroutineKeyword(): ?CoroutineToken {
    if ($this->coroutineKeyword->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(CoroutineToken::class, $this->coroutineKeyword);
  }

  /**
   * @returns CoroutineToken
   */
  public function getCoroutineKeywordx(): CoroutineToken {
    return
      TypeAssert\instance_of(CoroutineToken::class, $this->coroutineKeyword);
  }

  final public function getFunctionKeywordUNTYPED(): EditableNode {
    return $this->functionKeyword;
  }

  public function withFunctionKeyword(FunctionToken $value): this {
    if ($value === $this->functionKeyword) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->static_keyword,
      $this->async_keyword,
      $this->coroutine_keyword,
      $value,
      $this->ampersand,
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->use,
      $this->body,
    );
  }

  public function hasFunctionKeyword(): bool {
    return $this->functionKeyword !== null;
  }

  /**
   * @returns FunctionToken
   */
  public function getFunctionKeyword(): FunctionToken {
    return TypeAssert\instance_of(FunctionToken::class, $this->functionKeyword);
  }

  /**
   * @returns FunctionToken
   */
  public function getFunctionKeywordx(): FunctionToken {
    return $this->getFunctionKeyword();
  }

  final public function getAmpersandUNTYPED(): EditableNode {
    return $this->ampersand;
  }

  public function withAmpersand(?AmpersandToken $value): this {
    if ($value === $this->ampersand) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->static_keyword,
      $this->async_keyword,
      $this->coroutine_keyword,
      $this->function_keyword,
      $value,
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->use,
      $this->body,
    );
  }

  public function hasAmpersand(): bool {
    return $this->ampersand !== null;
  }

  /**
   * @returns Missing | AmpersandToken
   */
  public function getAmpersand(): ?AmpersandToken {
    if ($this->ampersand->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(AmpersandToken::class, $this->ampersand);
  }

  /**
   * @returns AmpersandToken
   */
  public function getAmpersandx(): AmpersandToken {
    return TypeAssert\instance_of(AmpersandToken::class, $this->ampersand);
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(?LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->static_keyword,
      $this->async_keyword,
      $this->coroutine_keyword,
      $this->function_keyword,
      $this->ampersand,
      $value,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->use,
      $this->body,
    );
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

  final public function getParametersUNTYPED(): EditableNode {
    return $this->parameters;
  }

  public function withParameters(?EditableList<EditableNode> $value): this {
    if ($value === $this->parameters) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->static_keyword,
      $this->async_keyword,
      $this->coroutine_keyword,
      $this->function_keyword,
      $this->ampersand,
      $this->left_paren,
      $value,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->use,
      $this->body,
    );
  }

  public function hasParameters(): bool {
    return $this->parameters !== null;
  }

  /**
   * @returns EditableList<ParameterDeclaration> |
   * EditableList<VariadicParameter> | Missing
   */
  public function getParameters(): ?EditableList<EditableNode> {
    if ($this->parameters->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->parameters);
  }

  /**
   * @returns EditableList<ParameterDeclaration> |
   * EditableList<VariadicParameter>
   */
  public function getParametersx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->parameters);
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(?RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->static_keyword,
      $this->async_keyword,
      $this->coroutine_keyword,
      $this->function_keyword,
      $this->ampersand,
      $this->left_paren,
      $this->parameters,
      $value,
      $this->colon,
      $this->type,
      $this->use,
      $this->body,
    );
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

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(?ColonToken $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->static_keyword,
      $this->async_keyword,
      $this->coroutine_keyword,
      $this->function_keyword,
      $this->ampersand,
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $value,
      $this->type,
      $this->use,
      $this->body,
    );
  }

  public function hasColon(): bool {
    return $this->colon !== null;
  }

  /**
   * @returns Missing | ColonToken
   */
  public function getColon(): ?ColonToken {
    if ($this->colon->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(ColonToken::class, $this->colon);
  }

  /**
   * @returns ColonToken
   */
  public function getColonx(): ColonToken {
    return TypeAssert\instance_of(ColonToken::class, $this->colon);
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(?EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->static_keyword,
      $this->async_keyword,
      $this->coroutine_keyword,
      $this->function_keyword,
      $this->ampersand,
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $value,
      $this->use,
      $this->body,
    );
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns ClosureTypeSpecifier | GenericTypeSpecifier |
   * MapArrayTypeSpecifier | Missing | NullableTypeSpecifier |
   * SimpleTypeSpecifier | SoftTypeSpecifier | TupleTypeSpecifier |
   * VectorArrayTypeSpecifier
   */
  public function getType(): ?EditableNode {
    if ($this->type->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns ClosureTypeSpecifier | GenericTypeSpecifier |
   * MapArrayTypeSpecifier | NullableTypeSpecifier | SimpleTypeSpecifier |
   * SoftTypeSpecifier | TupleTypeSpecifier | VectorArrayTypeSpecifier
   */
  public function getTypex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  final public function getUseUNTYPED(): EditableNode {
    return $this->use;
  }

  public function withUse(?AnonymousFunctionUseClause $value): this {
    if ($value === $this->use) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->static_keyword,
      $this->async_keyword,
      $this->coroutine_keyword,
      $this->function_keyword,
      $this->ampersand,
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $this->type,
      $value,
      $this->body,
    );
  }

  public function hasUse(): bool {
    return $this->use !== null;
  }

  /**
   * @returns AnonymousFunctionUseClause | Missing
   */
  public function getUse(): ?AnonymousFunctionUseClause {
    if ($this->use->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(AnonymousFunctionUseClause::class, $this->use);
  }

  /**
   * @returns AnonymousFunctionUseClause
   */
  public function getUsex(): AnonymousFunctionUseClause {
    return
      TypeAssert\instance_of(AnonymousFunctionUseClause::class, $this->use);
  }

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(CompoundStatement $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->static_keyword,
      $this->async_keyword,
      $this->coroutine_keyword,
      $this->function_keyword,
      $this->ampersand,
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->use,
      $value,
    );
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns CompoundStatement
   */
  public function getBody(): CompoundStatement {
    return TypeAssert\instance_of(CompoundStatement::class, $this->body);
  }

  /**
   * @returns CompoundStatement
   */
  public function getBodyx(): CompoundStatement {
    return $this->getBody();
  }
}
