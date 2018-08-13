<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<c4e5b208334b12bdc20a5bbf69c81d14>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class PrefixUnaryExpression extends EditableNode {

  public function __construct(
    private EditableToken $operator,
    private EditableNode $operand,
  ) {
    parent::__construct('prefix_unary_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $operator = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['prefix_unary_operator'],
      $file,
      $offset,
      $source,
    );
    $offset += $operator->getWidth();
    $operand = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['prefix_unary_operand'],
      $file,
      $offset,
      $source,
    );
    $offset += $operand->getWidth();
    return new static($operator, $operand);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'operator' => $this->operator,
      'operand' => $this->operand,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $operator = $this->operator->rewrite($rewriter, $parents);
    $operand = $this->operand->rewrite($rewriter, $parents);
    if ($operator === $this->operator && $operand === $this->operand) {
      return $this;
    }
    return new static($operator, $operand);
  }

  final public function getOperatorUNTYPED(): EditableNode {
    return $this->operator;
  }

  public function withOperator(EditableToken $value): this {
    if ($value === $this->operator) {
      return $this;
    }
    return new static($value, $this->operand);
  }

  public function hasOperator(): bool {
    return $this->operator !== null;
  }

  /**
   * @returns ExclamationToken | DollarToken | AmpersandToken | PlusToken |
   * PlusPlusToken | MinusToken | MinusMinusToken | AtToken | AwaitToken |
   * CloneToken | PrintToken | SuspendToken | TildeToken
   */
  public function getOperator(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->operator);
  }

  /**
   * @returns ExclamationToken | DollarToken | AmpersandToken | PlusToken |
   * PlusPlusToken | MinusToken | MinusMinusToken | AtToken | AwaitToken |
   * CloneToken | PrintToken | SuspendToken | TildeToken
   */
  public function getOperatorx(): EditableToken {
    return $this->getOperator();
  }

  final public function getOperandUNTYPED(): EditableNode {
    return $this->operand;
  }

  public function withOperand(EditableNode $value): this {
    if ($value === $this->operand) {
      return $this;
    }
    return new static($this->operator, $value);
  }

  public function hasOperand(): bool {
    return $this->operand !== null;
  }

  /**
   * @returns AnonymousFunction | ArrayIntrinsicExpression | BinaryExpression |
   * BracedExpression | CastExpression | ConditionalExpression |
   * DefineExpression | EmptyExpression | EvalExpression |
   * FunctionCallExpression | InclusionExpression | InstanceofExpression |
   * IssetExpression | LiteralExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression |
   * PipeVariableExpression | PostfixUnaryExpression | PrefixUnaryExpression |
   * SafeMemberSelectionExpression | ScopeResolutionExpression |
   * SubscriptExpression | EndOfFileToken | NameToken | VariableToken |
   * VariableExpression
   */
  public function getOperand(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->operand);
  }

  /**
   * @returns AnonymousFunction | ArrayIntrinsicExpression | BinaryExpression |
   * BracedExpression | CastExpression | ConditionalExpression |
   * DefineExpression | EmptyExpression | EvalExpression |
   * FunctionCallExpression | InclusionExpression | InstanceofExpression |
   * IssetExpression | LiteralExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression |
   * PipeVariableExpression | PostfixUnaryExpression | PrefixUnaryExpression |
   * SafeMemberSelectionExpression | ScopeResolutionExpression |
   * SubscriptExpression | EndOfFileToken | NameToken | VariableToken |
   * VariableExpression
   */
  public function getOperandx(): EditableNode {
    return $this->getOperand();
  }
}
