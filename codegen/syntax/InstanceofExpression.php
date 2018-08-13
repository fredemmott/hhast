<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<95fd768a6406cf21c96382678f9a2f95>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class InstanceofExpression extends EditableNode {

  public function __construct(
    private EditableNode $leftOperand,
    private InstanceofToken $operator,
    private ?EditableNode $rightOperand,
  ) {
    parent::__construct('instanceof_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_operand = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['instanceof_left_operand'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_operand->getWidth();
    $operator = InstanceofToken::fromJSON(
      /* UNSAFE_EXPR */ $json['instanceof_operator'],
      $file,
      $offset,
      $source,
    );
    $offset += $operator->getWidth();
    $right_operand = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['instanceof_right_operand'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_operand->getWidth();
    return new static($left_operand, $operator, $right_operand);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_operand' => $this->leftOperand,
      'operator' => $this->operator,
      'right_operand' => $this->rightOperand,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $left_operand = $this->leftOperand->rewrite($rewriter, $parents);
    $operator = $this->operator->rewrite($rewriter, $parents);
    $right_operand = $this->rightOperand?->rewrite($rewriter, $parents);
    if (
      $left_operand === $this->leftOperand &&
      $operator === $this->operator &&
      $right_operand === $this->rightOperand
    ) {
      return $this;
    }
    return new static($left_operand, $operator, $right_operand);
  }

  final public function getLeftOperandUNTYPED(): EditableNode {
    return $this->leftOperand;
  }

  public function withLeftOperand(EditableNode $value): this {
    if ($value === $this->leftOperand) {
      return $this;
    }
    return new static($value, $this->operator, $this->right_operand);
  }

  public function hasLeftOperand(): bool {
    return $this->leftOperand !== null;
  }

  /**
   * @returns AnonymousFunction | CastExpression | CollectionLiteralExpression
   * | FunctionCallExpression | LiteralExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression | PrefixUnaryExpression
   * | ScopeResolutionExpression | SubscriptExpression | VariableExpression
   */
  public function getLeftOperand(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->leftOperand);
  }

  /**
   * @returns AnonymousFunction | CastExpression | CollectionLiteralExpression
   * | FunctionCallExpression | LiteralExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression | PrefixUnaryExpression
   * | ScopeResolutionExpression | SubscriptExpression | VariableExpression
   */
  public function getLeftOperandx(): EditableNode {
    return $this->getLeftOperand();
  }

  final public function getOperatorUNTYPED(): EditableNode {
    return $this->operator;
  }

  public function withOperator(InstanceofToken $value): this {
    if ($value === $this->operator) {
      return $this;
    }
    return new static($this->left_operand, $value, $this->right_operand);
  }

  public function hasOperator(): bool {
    return $this->operator !== null;
  }

  /**
   * @returns InstanceofToken
   */
  public function getOperator(): InstanceofToken {
    return TypeAssert\instance_of(InstanceofToken::class, $this->operator);
  }

  /**
   * @returns InstanceofToken
   */
  public function getOperatorx(): InstanceofToken {
    return $this->getOperator();
  }

  final public function getRightOperandUNTYPED(): EditableNode {
    return $this->rightOperand;
  }

  public function withRightOperand(?EditableNode $value): this {
    if ($value === $this->rightOperand) {
      return $this;
    }
    return new static($this->left_operand, $this->operator, $value);
  }

  public function hasRightOperand(): bool {
    return $this->rightOperand !== null;
  }

  /**
   * @returns MemberSelectionExpression | Missing | ParenthesizedExpression |
   * QualifiedName | ScopeResolutionExpression | SubscriptExpression |
   * NameToken | VariableExpression
   */
  public function getRightOperand(): ?EditableNode {
    if ($this->rightOperand->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->rightOperand);
  }

  /**
   * @returns MemberSelectionExpression | ParenthesizedExpression |
   * QualifiedName | ScopeResolutionExpression | SubscriptExpression |
   * NameToken | VariableExpression
   */
  public function getRightOperandx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->rightOperand);
  }
}
