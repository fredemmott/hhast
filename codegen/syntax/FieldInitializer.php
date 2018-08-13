<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<523f5ab41fb4b3f93000877bad6a8c24>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class FieldInitializer extends EditableNode {

  public function __construct(
    private EditableNode $name,
    private EqualGreaterThanToken $arrow,
    private EditableNode $value,
  ) {
    parent::__construct('field_initializer');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['field_initializer_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $arrow = EqualGreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['field_initializer_arrow'],
      $file,
      $offset,
      $source,
    );
    $offset += $arrow->getWidth();
    $value = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['field_initializer_value'],
      $file,
      $offset,
      $source,
    );
    $offset += $value->getWidth();
    return new static($name, $arrow, $value);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'name' => $this->name,
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
    $name = $this->name->rewrite($rewriter, $parents);
    $arrow = $this->arrow->rewrite($rewriter, $parents);
    $value = $this->value->rewrite($rewriter, $parents);
    if (
      $name === $this->name &&
      $arrow === $this->arrow &&
      $value === $this->value
    ) {
      return $this;
    }
    return new static($name, $arrow, $value);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(EditableNode $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($value, $this->arrow, $this->value);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns LiteralExpression | ScopeResolutionExpression | QuestionToken |
   * NameToken | VariableExpression
   */
  public function getName(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  /**
   * @returns LiteralExpression | ScopeResolutionExpression | QuestionToken |
   * NameToken | VariableExpression
   */
  public function getNamex(): EditableNode {
    return $this->getName();
  }

  final public function getArrowUNTYPED(): EditableNode {
    return $this->arrow;
  }

  public function withArrow(EqualGreaterThanToken $value): this {
    if ($value === $this->arrow) {
      return $this;
    }
    return new static($this->name, $value, $this->value);
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
    return new static($this->name, $this->arrow, $value);
  }

  public function hasValue(): bool {
    return $this->value !== null;
  }

  /**
   * @returns ArrayIntrinsicExpression | BinaryExpression | LambdaExpression |
   * LiteralExpression | ObjectCreationExpression | ScopeResolutionExpression |
   * SubscriptExpression | NameToken | VariableExpression |
   * VectorIntrinsicExpression
   */
  public function getValue(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->value);
  }

  /**
   * @returns ArrayIntrinsicExpression | BinaryExpression | LambdaExpression |
   * LiteralExpression | ObjectCreationExpression | ScopeResolutionExpression |
   * SubscriptExpression | NameToken | VariableExpression |
   * VectorIntrinsicExpression
   */
  public function getValuex(): EditableNode {
    return $this->getValue();
  }
}
