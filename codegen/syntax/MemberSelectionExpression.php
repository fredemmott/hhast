<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<2b095e93895361327d07095d4f770ae8>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class MemberSelectionExpression extends EditableNode {

  public function __construct(
    private EditableNode $object,
    private MinusGreaterThanToken $operator,
    private EditableNode $name,
  ) {
    parent::__construct('member_selection_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $object = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['member_object'],
      $file,
      $offset,
      $source,
    );
    $offset += $object->getWidth();
    $operator = MinusGreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['member_operator'],
      $file,
      $offset,
      $source,
    );
    $offset += $operator->getWidth();
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['member_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    return new static($object, $operator, $name);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'object' => $this->object,
      'operator' => $this->operator,
      'name' => $this->name,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $object = $this->object->rewrite($rewriter, $parents);
    $operator = $this->operator->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    if (
      $object === $this->object &&
      $operator === $this->operator &&
      $name === $this->name
    ) {
      return $this;
    }
    return new static($object, $operator, $name);
  }

  final public function getObjectUNTYPED(): EditableNode {
    return $this->object;
  }

  public function withObject(EditableNode $value): this {
    if ($value === $this->object) {
      return $this;
    }
    return new static($value, $this->operator, $this->name);
  }

  public function hasObject(): bool {
    return $this->object !== null;
  }

  /**
   * @returns FunctionCallExpression | MemberSelectionExpression |
   * ParenthesizedExpression | PipeVariableExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression
   */
  public function getObject(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->object);
  }

  /**
   * @returns FunctionCallExpression | MemberSelectionExpression |
   * ParenthesizedExpression | PipeVariableExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression
   */
  public function getObjectx(): EditableNode {
    return $this->getObject();
  }

  final public function getOperatorUNTYPED(): EditableNode {
    return $this->operator;
  }

  public function withOperator(MinusGreaterThanToken $value): this {
    if ($value === $this->operator) {
      return $this;
    }
    return new static($this->object, $value, $this->name);
  }

  public function hasOperator(): bool {
    return $this->operator !== null;
  }

  /**
   * @returns MinusGreaterThanToken
   */
  public function getOperator(): MinusGreaterThanToken {
    return
      TypeAssert\instance_of(MinusGreaterThanToken::class, $this->operator);
  }

  /**
   * @returns MinusGreaterThanToken
   */
  public function getOperatorx(): MinusGreaterThanToken {
    return $this->getOperator();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(EditableNode $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($this->object, $this->operator, $value);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns BracedExpression | PrefixUnaryExpression | XHPClassNameToken |
   * NameToken | VariableToken
   */
  public function getName(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  /**
   * @returns BracedExpression | PrefixUnaryExpression | XHPClassNameToken |
   * NameToken | VariableToken
   */
  public function getNamex(): EditableNode {
    return $this->getName();
  }
}
