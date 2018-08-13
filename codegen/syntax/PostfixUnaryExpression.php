<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<292c3e9817bc4a3f52aa68d1a02d3250>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class PostfixUnaryExpression extends EditableNode {

  public function __construct(
    private EditableNode $operand,
    private EditableToken $operator,
  ) {
    parent::__construct('postfix_unary_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $operand = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['postfix_unary_operand'],
      $file,
      $offset,
      $source,
    );
    $offset += $operand->getWidth();
    $operator = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['postfix_unary_operator'],
      $file,
      $offset,
      $source,
    );
    $offset += $operator->getWidth();
    return new static($operand, $operator);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'operand' => $this->operand,
      'operator' => $this->operator,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $operand = $this->operand->rewrite($rewriter, $parents);
    $operator = $this->operator->rewrite($rewriter, $parents);
    if ($operand === $this->operand && $operator === $this->operator) {
      return $this;
    }
    return new static($operand, $operator);
  }

  final public function getOperandUNTYPED(): EditableNode {
    return $this->operand;
  }

  public function withOperand(EditableNode $value): this {
    if ($value === $this->operand) {
      return $this;
    }
    return new static($value, $this->operator);
  }

  public function hasOperand(): bool {
    return $this->operand !== null;
  }

  /**
   * @returns MemberSelectionExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | VariableExpression
   */
  public function getOperand(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->operand);
  }

  /**
   * @returns MemberSelectionExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | VariableExpression
   */
  public function getOperandx(): EditableNode {
    return $this->getOperand();
  }

  final public function getOperatorUNTYPED(): EditableNode {
    return $this->operator;
  }

  public function withOperator(EditableToken $value): this {
    if ($value === $this->operator) {
      return $this;
    }
    return new static($this->operand, $value);
  }

  public function hasOperator(): bool {
    return $this->operator !== null;
  }

  /**
   * @returns PlusPlusToken | MinusMinusToken
   */
  public function getOperator(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->operator);
  }

  /**
   * @returns PlusPlusToken | MinusMinusToken
   */
  public function getOperatorx(): EditableToken {
    return $this->getOperator();
  }
}
