<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<a1ffd6e78e9bf187e2b7e0c066344223>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class LambdaExpression extends EditableNode {

  public function __construct(
    private ?AttributeSpecification $attributeSpec,
    private ?AsyncToken $async,
    private ?CoroutineToken $coroutine,
    private EditableNode $signature,
    private EqualEqualGreaterThanToken $arrow,
    private EditableNode $body,
  ) {
    parent::__construct('lambda_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute_spec = AttributeSpecification::fromJSON(
      /* UNSAFE_EXPR */ $json['lambda_attribute_spec'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute_spec->getWidth();
    $async = AsyncToken::fromJSON(
      /* UNSAFE_EXPR */ $json['lambda_async'],
      $file,
      $offset,
      $source,
    );
    $offset += $async->getWidth();
    $coroutine = CoroutineToken::fromJSON(
      /* UNSAFE_EXPR */ $json['lambda_coroutine'],
      $file,
      $offset,
      $source,
    );
    $offset += $coroutine->getWidth();
    $signature = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['lambda_signature'],
      $file,
      $offset,
      $source,
    );
    $offset += $signature->getWidth();
    $arrow = EqualEqualGreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['lambda_arrow'],
      $file,
      $offset,
      $source,
    );
    $offset += $arrow->getWidth();
    $body = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['lambda_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static(
      $attribute_spec,
      $async,
      $coroutine,
      $signature,
      $arrow,
      $body,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'attribute_spec' => $this->attributeSpec,
      'async' => $this->async,
      'coroutine' => $this->coroutine,
      'signature' => $this->signature,
      'arrow' => $this->arrow,
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
    $async = $this->async?->rewrite($rewriter, $parents);
    $coroutine = $this->coroutine?->rewrite($rewriter, $parents);
    $signature = $this->signature->rewrite($rewriter, $parents);
    $arrow = $this->arrow->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $attribute_spec === $this->attributeSpec &&
      $async === $this->async &&
      $coroutine === $this->coroutine &&
      $signature === $this->signature &&
      $arrow === $this->arrow &&
      $body === $this->body
    ) {
      return $this;
    }
    return new static(
      $attribute_spec,
      $async,
      $coroutine,
      $signature,
      $arrow,
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
      $this->async,
      $this->coroutine,
      $this->signature,
      $this->arrow,
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

  final public function getAsyncUNTYPED(): EditableNode {
    return $this->async;
  }

  public function withAsync(?AsyncToken $value): this {
    if ($value === $this->async) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $value,
      $this->coroutine,
      $this->signature,
      $this->arrow,
      $this->body,
    );
  }

  public function hasAsync(): bool {
    return $this->async !== null;
  }

  /**
   * @returns Missing | AsyncToken
   */
  public function getAsync(): ?AsyncToken {
    if ($this->async->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(AsyncToken::class, $this->async);
  }

  /**
   * @returns AsyncToken
   */
  public function getAsyncx(): AsyncToken {
    return TypeAssert\instance_of(AsyncToken::class, $this->async);
  }

  final public function getCoroutineUNTYPED(): EditableNode {
    return $this->coroutine;
  }

  public function withCoroutine(?CoroutineToken $value): this {
    if ($value === $this->coroutine) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->async,
      $value,
      $this->signature,
      $this->arrow,
      $this->body,
    );
  }

  public function hasCoroutine(): bool {
    return $this->coroutine !== null;
  }

  /**
   * @returns Missing | CoroutineToken
   */
  public function getCoroutine(): ?CoroutineToken {
    if ($this->coroutine->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(CoroutineToken::class, $this->coroutine);
  }

  /**
   * @returns CoroutineToken
   */
  public function getCoroutinex(): CoroutineToken {
    return TypeAssert\instance_of(CoroutineToken::class, $this->coroutine);
  }

  final public function getSignatureUNTYPED(): EditableNode {
    return $this->signature;
  }

  public function withSignature(EditableNode $value): this {
    if ($value === $this->signature) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->async,
      $this->coroutine,
      $value,
      $this->arrow,
      $this->body,
    );
  }

  public function hasSignature(): bool {
    return $this->signature !== null;
  }

  /**
   * @returns LambdaSignature | VariableToken
   */
  public function getSignature(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->signature);
  }

  /**
   * @returns LambdaSignature | VariableToken
   */
  public function getSignaturex(): EditableNode {
    return $this->getSignature();
  }

  final public function getArrowUNTYPED(): EditableNode {
    return $this->arrow;
  }

  public function withArrow(EqualEqualGreaterThanToken $value): this {
    if ($value === $this->arrow) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->async,
      $this->coroutine,
      $this->signature,
      $value,
      $this->body,
    );
  }

  public function hasArrow(): bool {
    return $this->arrow !== null;
  }

  /**
   * @returns EqualEqualGreaterThanToken
   */
  public function getArrow(): EqualEqualGreaterThanToken {
    return
      TypeAssert\instance_of(EqualEqualGreaterThanToken::class, $this->arrow);
  }

  /**
   * @returns EqualEqualGreaterThanToken
   */
  public function getArrowx(): EqualEqualGreaterThanToken {
    return $this->getArrow();
  }

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(EditableNode $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->async,
      $this->coroutine,
      $this->signature,
      $this->arrow,
      $value,
    );
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns ArrayIntrinsicExpression | BinaryExpression | CastExpression |
   * CompoundStatement | ConditionalExpression | FunctionCallExpression |
   * LambdaExpression | LiteralExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression | PrefixUnaryExpression
   * | SubscriptExpression | VariableExpression
   */
  public function getBody(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->body);
  }

  /**
   * @returns ArrayIntrinsicExpression | BinaryExpression | CastExpression |
   * CompoundStatement | ConditionalExpression | FunctionCallExpression |
   * LambdaExpression | LiteralExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression | PrefixUnaryExpression
   * | SubscriptExpression | VariableExpression
   */
  public function getBodyx(): EditableNode {
    return $this->getBody();
  }
}
