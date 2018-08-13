<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<df7b0cde9c05eab52fed5bb9352c37b6>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ElementInitializer extends EditableNode {

  public function __construct(
    private EditableNode $key,
    private EqualGreaterThanToken $arrow,
    private EditableNode $value,
  ) {
    parent::__construct('element_initializer');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $key = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['element_key'],
      $file,
      $offset,
      $source,
    );
    $offset += $key->getWidth();
    $arrow = EqualGreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['element_arrow'],
      $file,
      $offset,
      $source,
    );
    $offset += $arrow->getWidth();
    $value = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['element_value'],
      $file,
      $offset,
      $source,
    );
    $offset += $value->getWidth();
    return new static($key, $arrow, $value);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'key' => $this->key,
      'arrow' => $this->arrow,
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
    $key = $this->key->rewrite($rewriter, $parents);
    $arrow = $this->arrow->rewrite($rewriter, $parents);
    $value = $this->value->rewrite($rewriter, $parents);
    if (
      $key === $this->key && $arrow === $this->arrow && $value === $this->value
    ) {
      return $this;
    }
    return new static($key, $arrow, $value);
  }

  final public function getKeyUNTYPED(): EditableNode {
    return $this->key;
  }

  public function withKey(EditableNode $value): this {
    if ($value === $this->key) {
      return $this;
    }
    return new static($value, $this->arrow, $this->value);
  }

  public function hasKey(): bool {
    return $this->key !== null;
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | BinaryExpression | CastExpression |
   * CollectionLiteralExpression | DictionaryIntrinsicExpression |
   * FunctionCallExpression | KeysetIntrinsicExpression | LiteralExpression |
   * ObjectCreationExpression | ParenthesizedExpression | PrefixUnaryExpression
   * | QualifiedName | ScopeResolutionExpression | NameToken |
   * VariableExpression | VectorIntrinsicExpression
   */
  public function getKey(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->key);
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | BinaryExpression | CastExpression |
   * CollectionLiteralExpression | DictionaryIntrinsicExpression |
   * FunctionCallExpression | KeysetIntrinsicExpression | LiteralExpression |
   * ObjectCreationExpression | ParenthesizedExpression | PrefixUnaryExpression
   * | QualifiedName | ScopeResolutionExpression | NameToken |
   * VariableExpression | VectorIntrinsicExpression
   */
  public function getKeyx(): EditableNode {
    return $this->getKey();
  }

  final public function getArrowUNTYPED(): EditableNode {
    return $this->arrow;
  }

  public function withArrow(EqualGreaterThanToken $value): this {
    if ($value === $this->arrow) {
      return $this;
    }
    return new static($this->key, $value, $this->value);
  }

  public function hasArrow(): bool {
    return $this->arrow !== null;
  }

  /**
   * @returns EqualGreaterThanToken
   */
  public function getArrow(): EqualGreaterThanToken {
    return TypeAssert\instance_of(EqualGreaterThanToken::class, $this->arrow);
  }

  /**
   * @returns EqualGreaterThanToken
   */
  public function getArrowx(): EqualGreaterThanToken {
    return $this->getArrow();
  }

  final public function getValueUNTYPED(): EditableNode {
    return $this->value;
  }

  public function withValue(EditableNode $value): this {
    if ($value === $this->value) {
      return $this;
    }
    return new static($this->key, $this->arrow, $value);
  }

  public function hasValue(): bool {
    return $this->value !== null;
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | BinaryExpression | CastExpression |
   * CollectionLiteralExpression | ConditionalExpression |
   * DarrayIntrinsicExpression | DictionaryIntrinsicExpression |
   * FunctionCallExpression | IssetExpression | KeysetIntrinsicExpression |
   * LiteralExpression | MemberSelectionExpression | ObjectCreationExpression |
   * ParenthesizedExpression | PrefixUnaryExpression | QualifiedName |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * TupleExpression | VariableExpression | VarrayIntrinsicExpression |
   * VectorIntrinsicExpression
   */
  public function getValue(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->value);
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | BinaryExpression | CastExpression |
   * CollectionLiteralExpression | ConditionalExpression |
   * DarrayIntrinsicExpression | DictionaryIntrinsicExpression |
   * FunctionCallExpression | IssetExpression | KeysetIntrinsicExpression |
   * LiteralExpression | MemberSelectionExpression | ObjectCreationExpression |
   * ParenthesizedExpression | PrefixUnaryExpression | QualifiedName |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * TupleExpression | VariableExpression | VarrayIntrinsicExpression |
   * VectorIntrinsicExpression
   */
  public function getValuex(): EditableNode {
    return $this->getValue();
  }
}
