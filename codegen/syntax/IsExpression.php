<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<808de192c23ca14f8929d81eda7380f7>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class IsExpression extends EditableNode {

  public function __construct(
    private VariableExpression $leftOperand,
    private IsToken $operator,
    private EditableNode $rightOperand,
  ) {
    parent::__construct('is_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_operand = VariableExpression::fromJSON(
      /* UNSAFE_EXPR */ $json['is_left_operand'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_operand->getWidth();
    $operator = IsToken::fromJSON(
      /* UNSAFE_EXPR */ $json['is_operator'],
      $file,
      $offset,
      $source,
    );
    $offset += $operator->getWidth();
    $right_operand = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['is_right_operand'],
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
    $right_operand = $this->rightOperand->rewrite($rewriter, $parents);
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

  public function withLeftOperand(VariableExpression $value): this {
    if ($value === $this->leftOperand) {
      return $this;
    }
    return new static($value, $this->operator, $this->right_operand);
  }

  public function hasLeftOperand(): bool {
    return $this->leftOperand !== null;
  }

  /**
   * @returns VariableExpression
   */
  public function getLeftOperand(): VariableExpression {
    return
      TypeAssert\instance_of(VariableExpression::class, $this->leftOperand);
  }

  /**
   * @returns VariableExpression
   */
  public function getLeftOperandx(): VariableExpression {
    return $this->getLeftOperand();
  }

  final public function getOperatorUNTYPED(): EditableNode {
    return $this->operator;
  }

  public function withOperator(IsToken $value): this {
    if ($value === $this->operator) {
      return $this;
    }
    return new static($this->left_operand, $value, $this->right_operand);
  }

  public function hasOperator(): bool {
    return $this->operator !== null;
  }

  /**
   * @returns IsToken
   */
  public function getOperator(): IsToken {
    return TypeAssert\instance_of(IsToken::class, $this->operator);
  }

  /**
   * @returns IsToken
   */
  public function getOperatorx(): IsToken {
    return $this->getOperator();
  }

  final public function getRightOperandUNTYPED(): EditableNode {
    return $this->rightOperand;
  }

  public function withRightOperand(EditableNode $value): this {
    if ($value === $this->rightOperand) {
      return $this;
    }
    return new static($this->left_operand, $this->operator, $value);
  }

  public function hasRightOperand(): bool {
    return $this->rightOperand !== null;
  }

  /**
   * @returns ClosureTypeSpecifier | DictionaryTypeSpecifier |
   * GenericTypeSpecifier | KeysetTypeSpecifier | NullableTypeSpecifier |
   * ShapeTypeSpecifier | SimpleTypeSpecifier | SoftTypeSpecifier |
   * TupleTypeSpecifier | TypeConstant | VectorTypeSpecifier
   */
  public function getRightOperand(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->rightOperand);
  }

  /**
   * @returns ClosureTypeSpecifier | DictionaryTypeSpecifier |
   * GenericTypeSpecifier | KeysetTypeSpecifier | NullableTypeSpecifier |
   * ShapeTypeSpecifier | SimpleTypeSpecifier | SoftTypeSpecifier |
   * TupleTypeSpecifier | TypeConstant | VectorTypeSpecifier
   */
  public function getRightOperandx(): EditableNode {
    return $this->getRightOperand();
  }
}
