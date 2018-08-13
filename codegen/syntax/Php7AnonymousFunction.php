<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<f9c50c3b7c35bb34154f1c096963ec91>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class Php7AnonymousFunction extends EditableNode {

  public function __construct(
    private ?EditableNode $attributeSpec,
    private ?EditableNode $staticKeyword,
    private ?EditableNode $asyncKeyword,
    private ?EditableNode $coroutineKeyword,
    private FunctionToken $functionKeyword,
    private ?EditableNode $ampersand,
    private LeftParenToken $leftParen,
    private ?EditableNode $parameters,
    private RightParenToken $rightParen,
    private AnonymousFunctionUseClause $use,
    private ColonToken $colon,
    private SimpleTypeSpecifier $type,
    private CompoundStatement $body,
  ) {
    parent::__construct('php7_anonymous_function');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute_spec = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_attribute_spec'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute_spec->getWidth();
    $static_keyword = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_static_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $static_keyword->getWidth();
    $async_keyword = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_async_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $async_keyword->getWidth();
    $coroutine_keyword = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_coroutine_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $coroutine_keyword->getWidth();
    $function_keyword = FunctionToken::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_function_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $function_keyword->getWidth();
    $ampersand = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_ampersand'],
      $file,
      $offset,
      $source,
    );
    $offset += $ampersand->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $parameters = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_parameters'],
      $file,
      $offset,
      $source,
    );
    $offset += $parameters->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $use = AnonymousFunctionUseClause::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_use'],
      $file,
      $offset,
      $source,
    );
    $offset += $use->getWidth();
    $colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    $type = SimpleTypeSpecifier::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $body = CompoundStatement::fromJSON(
      /* UNSAFE_EXPR */ $json['php7_anonymous_body'],
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
      $use,
      $colon,
      $type,
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
      'use' => $this->use,
      'colon' => $this->colon,
      'type' => $this->type,
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
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $parameters = $this->parameters?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $use = $this->use->rewrite($rewriter, $parents);
    $colon = $this->colon->rewrite($rewriter, $parents);
    $type = $this->type->rewrite($rewriter, $parents);
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
      $use === $this->use &&
      $colon === $this->colon &&
      $type === $this->type &&
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
      $use,
      $colon,
      $type,
      $body,
    );
  }

  final public function getAttributeSpecUNTYPED(): EditableNode {
    return $this->attributeSpec;
  }

  public function withAttributeSpec(?EditableNode $value): this {
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
      $this->use,
      $this->colon,
      $this->type,
      $this->body,
    );
  }

  public function hasAttributeSpec(): bool {
    return $this->attributeSpec !== null;
  }

  /**
   * @returns Missing
   */
  public function getAttributeSpec(): ?EditableNode {
    if ($this->attributeSpec->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->attributeSpec);
  }

  /**
   * @returns
   */
  public function getAttributeSpecx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->attributeSpec);
  }

  final public function getStaticKeywordUNTYPED(): EditableNode {
    return $this->staticKeyword;
  }

  public function withStaticKeyword(?EditableNode $value): this {
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
      $this->use,
      $this->colon,
      $this->type,
      $this->body,
    );
  }

  public function hasStaticKeyword(): bool {
    return $this->staticKeyword !== null;
  }

  /**
   * @returns Missing
   */
  public function getStaticKeyword(): ?EditableNode {
    if ($this->staticKeyword->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->staticKeyword);
  }

  /**
   * @returns
   */
  public function getStaticKeywordx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->staticKeyword);
  }

  final public function getAsyncKeywordUNTYPED(): EditableNode {
    return $this->asyncKeyword;
  }

  public function withAsyncKeyword(?EditableNode $value): this {
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
      $this->use,
      $this->colon,
      $this->type,
      $this->body,
    );
  }

  public function hasAsyncKeyword(): bool {
    return $this->asyncKeyword !== null;
  }

  /**
   * @returns Missing
   */
  public function getAsyncKeyword(): ?EditableNode {
    if ($this->asyncKeyword->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->asyncKeyword);
  }

  /**
   * @returns
   */
  public function getAsyncKeywordx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->asyncKeyword);
  }

  final public function getCoroutineKeywordUNTYPED(): EditableNode {
    return $this->coroutineKeyword;
  }

  public function withCoroutineKeyword(?EditableNode $value): this {
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
      $this->use,
      $this->colon,
      $this->type,
      $this->body,
    );
  }

  public function hasCoroutineKeyword(): bool {
    return $this->coroutineKeyword !== null;
  }

  /**
   * @returns Missing
   */
  public function getCoroutineKeyword(): ?EditableNode {
    if ($this->coroutineKeyword->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->coroutineKeyword);
  }

  /**
   * @returns
   */
  public function getCoroutineKeywordx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->coroutineKeyword);
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
      $this->use,
      $this->colon,
      $this->type,
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

  public function withAmpersand(?EditableNode $value): this {
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
      $this->use,
      $this->colon,
      $this->type,
      $this->body,
    );
  }

  public function hasAmpersand(): bool {
    return $this->ampersand !== null;
  }

  /**
   * @returns Missing
   */
  public function getAmpersand(): ?EditableNode {
    if ($this->ampersand->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->ampersand);
  }

  /**
   * @returns
   */
  public function getAmpersandx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->ampersand);
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
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
      $this->use,
      $this->colon,
      $this->type,
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

  final public function getParametersUNTYPED(): EditableNode {
    return $this->parameters;
  }

  public function withParameters(?EditableNode $value): this {
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
      $this->use,
      $this->colon,
      $this->type,
      $this->body,
    );
  }

  public function hasParameters(): bool {
    return $this->parameters !== null;
  }

  /**
   * @returns Missing
   */
  public function getParameters(): ?EditableNode {
    if ($this->parameters->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->parameters);
  }

  /**
   * @returns
   */
  public function getParametersx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->parameters);
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(RightParenToken $value): this {
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
      $this->use,
      $this->colon,
      $this->type,
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

  final public function getUseUNTYPED(): EditableNode {
    return $this->use;
  }

  public function withUse(AnonymousFunctionUseClause $value): this {
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
      $value,
      $this->colon,
      $this->type,
      $this->body,
    );
  }

  public function hasUse(): bool {
    return $this->use !== null;
  }

  /**
   * @returns AnonymousFunctionUseClause
   */
  public function getUse(): AnonymousFunctionUseClause {
    return
      TypeAssert\instance_of(AnonymousFunctionUseClause::class, $this->use);
  }

  /**
   * @returns AnonymousFunctionUseClause
   */
  public function getUsex(): AnonymousFunctionUseClause {
    return $this->getUse();
  }

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(ColonToken $value): this {
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
      $this->use,
      $value,
      $this->type,
      $this->body,
    );
  }

  public function hasColon(): bool {
    return $this->colon !== null;
  }

  /**
   * @returns ColonToken
   */
  public function getColon(): ColonToken {
    return TypeAssert\instance_of(ColonToken::class, $this->colon);
  }

  /**
   * @returns ColonToken
   */
  public function getColonx(): ColonToken {
    return $this->getColon();
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(SimpleTypeSpecifier $value): this {
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
      $this->use,
      $this->colon,
      $value,
      $this->body,
    );
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns SimpleTypeSpecifier
   */
  public function getType(): SimpleTypeSpecifier {
    return TypeAssert\instance_of(SimpleTypeSpecifier::class, $this->type);
  }

  /**
   * @returns SimpleTypeSpecifier
   */
  public function getTypex(): SimpleTypeSpecifier {
    return $this->getType();
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
      $this->use,
      $this->colon,
      $this->type,
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
