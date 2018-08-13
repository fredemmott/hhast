<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<cfd0e76e9149fd5a6d0eac8395c32ecc>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class SimpleInitializer extends EditableNode {

  public function __construct(
    private EqualToken $equal,
    private EditableNode $value,
  ) {
    parent::__construct('simple_initializer');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $equal = EqualToken::fromJSON(
      /* UNSAFE_EXPR */ $json['simple_initializer_equal'],
      $file,
      $offset,
      $source,
    );
    $offset += $equal->getWidth();
    $value = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['simple_initializer_value'],
      $file,
      $offset,
      $source,
    );
    $offset += $value->getWidth();
    return new static($equal, $value);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'equal' => $this->equal,
      'value' => $this->value,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $equal = $this->equal->rewrite($rewriter, $parents);
    $value = $this->value->rewrite($rewriter, $parents);
    if ($equal === $this->equal && $value === $this->value) {
      return $this;
    }
    return new static($equal, $value);
  }

  final public function getEqualUNTYPED(): EditableNode {
    return $this->equal;
  }

  public function withEqual(EqualToken $value): this {
    if ($value === $this->equal) {
      return $this;
    }
    return new static($value, $this->value);
  }

  public function hasEqual(): bool {
    return $this->equal !== null;
  }

  /**
   * @returns EqualToken
   */
  public function getEqual(): EqualToken {
    return TypeAssert\instance_of(EqualToken::class, $this->equal);
  }

  /**
   * @returns EqualToken
   */
  public function getEqualx(): EqualToken {
    return $this->getEqual();
  }

  final public function getValueUNTYPED(): EditableNode {
    return $this->value;
  }

  public function withValue(EditableNode $value): this {
    if ($value === $this->value) {
      return $this;
    }
    return new static($this->equal, $value);
  }

  public function hasValue(): bool {
    return $this->value !== null;
  }

  /**
   * @returns ArrayCreationExpression | ArrayIntrinsicExpression |
   * BinaryExpression | CollectionLiteralExpression | ConditionalExpression |
   * DarrayIntrinsicExpression | DictionaryIntrinsicExpression |
   * FunctionCallExpression | KeysetIntrinsicExpression | LiteralExpression |
   * ParenthesizedExpression | PrefixUnaryExpression | QualifiedName |
   * ScopeResolutionExpression | ShapeExpression | SubscriptExpression |
   * NameToken | TupleExpression | VariableExpression |
   * VarrayIntrinsicExpression | VectorIntrinsicExpression | XHPExpression
   */
  public function getValue(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->value);
  }

  /**
   * @returns ArrayCreationExpression | ArrayIntrinsicExpression |
   * BinaryExpression | CollectionLiteralExpression | ConditionalExpression |
   * DarrayIntrinsicExpression | DictionaryIntrinsicExpression |
   * FunctionCallExpression | KeysetIntrinsicExpression | LiteralExpression |
   * ParenthesizedExpression | PrefixUnaryExpression | QualifiedName |
   * ScopeResolutionExpression | ShapeExpression | SubscriptExpression |
   * NameToken | TupleExpression | VariableExpression |
   * VarrayIntrinsicExpression | VectorIntrinsicExpression | XHPExpression
   */
  public function getValuex(): EditableNode {
    return $this->getValue();
  }
}
