<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<7cfefb3fbc9b3d816320816dd1f5e973>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class AwaitableCreationExpression extends EditableNode {

  public function __construct(
    private ?AttributeSpecification $attributeSpec,
    private AsyncToken $async,
    private ?EditableNode $coroutine,
    private CompoundStatement $compoundStatement,
  ) {
    parent::__construct('awaitable_creation_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute_spec = AttributeSpecification::fromJSON(
      /* UNSAFE_EXPR */ $json['awaitable_attribute_spec'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute_spec->getWidth();
    $async = AsyncToken::fromJSON(
      /* UNSAFE_EXPR */ $json['awaitable_async'],
      $file,
      $offset,
      $source,
    );
    $offset += $async->getWidth();
    $coroutine = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['awaitable_coroutine'],
      $file,
      $offset,
      $source,
    );
    $offset += $coroutine->getWidth();
    $compound_statement = CompoundStatement::fromJSON(
      /* UNSAFE_EXPR */ $json['awaitable_compound_statement'],
      $file,
      $offset,
      $source,
    );
    $offset += $compound_statement->getWidth();
    return new static($attribute_spec, $async, $coroutine, $compound_statement);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'attribute_spec' => $this->attributeSpec,
      'async' => $this->async,
      'coroutine' => $this->coroutine,
      'compound_statement' => $this->compoundStatement,
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
    $async = $this->async->rewrite($rewriter, $parents);
    $coroutine = $this->coroutine?->rewrite($rewriter, $parents);
    $compound_statement =
      $this->compoundStatement->rewrite($rewriter, $parents);
    if (
      $attribute_spec === $this->attributeSpec &&
      $async === $this->async &&
      $coroutine === $this->coroutine &&
      $compound_statement === $this->compoundStatement
    ) {
      return $this;
    }
    return new static($attribute_spec, $async, $coroutine, $compound_statement);
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
      $this->compound_statement,
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

  public function withAsync(AsyncToken $value): this {
    if ($value === $this->async) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $value,
      $this->coroutine,
      $this->compound_statement,
    );
  }

  public function hasAsync(): bool {
    return $this->async !== null;
  }

  /**
   * @returns AsyncToken
   */
  public function getAsync(): AsyncToken {
    return TypeAssert\instance_of(AsyncToken::class, $this->async);
  }

  /**
   * @returns AsyncToken
   */
  public function getAsyncx(): AsyncToken {
    return $this->getAsync();
  }

  final public function getCoroutineUNTYPED(): EditableNode {
    return $this->coroutine;
  }

  public function withCoroutine(?EditableNode $value): this {
    if ($value === $this->coroutine) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->async,
      $value,
      $this->compound_statement,
    );
  }

  public function hasCoroutine(): bool {
    return $this->coroutine !== null;
  }

  /**
   * @returns Missing
   */
  public function getCoroutine(): ?EditableNode {
    if ($this->coroutine->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->coroutine);
  }

  /**
   * @returns
   */
  public function getCoroutinex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->coroutine);
  }

  final public function getCompoundStatementUNTYPED(): EditableNode {
    return $this->compoundStatement;
  }

  public function withCompoundStatement(CompoundStatement $value): this {
    if ($value === $this->compoundStatement) {
      return $this;
    }
    return
      new static($this->attribute_spec, $this->async, $this->coroutine, $value);
  }

  public function hasCompoundStatement(): bool {
    return $this->compoundStatement !== null;
  }

  /**
   * @returns CompoundStatement
   */
  public function getCompoundStatement(): CompoundStatement {
    return TypeAssert\instance_of(
      CompoundStatement::class,
      $this->compoundStatement,
    );
  }

  /**
   * @returns CompoundStatement
   */
  public function getCompoundStatementx(): CompoundStatement {
    return $this->getCompoundStatement();
  }
}
