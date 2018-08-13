<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<9d7d83d1120c65ef1efe8078650abdfd>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class BinaryExpression extends EditableNode {

  public function __construct(
    private EditableNode $leftOperand,
    private EditableToken $operator,
    private ?EditableNode $rightOperand,
  ) {
    parent::__construct('binary_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_operand = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['binary_left_operand'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_operand->getWidth();
    $operator = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['binary_operator'],
      $file,
      $offset,
      $source,
    );
    $offset += $operator->getWidth();
    $right_operand = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['binary_right_operand'],
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
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | AsExpression | BinaryExpression |
   * CastExpression | CollectionLiteralExpression | DarrayIntrinsicExpression |
   * DictionaryIntrinsicExpression | EmptyExpression | FunctionCallExpression |
   * InstanceofExpression | IssetExpression | KeysetIntrinsicExpression |
   * ListExpression | LiteralExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression |
   * PipeVariableExpression | PostfixUnaryExpression | PrefixUnaryExpression |
   * QualifiedName | ScopeResolutionExpression | SubscriptExpression |
   * RightParenToken | NameToken | VariableExpression |
   * VarrayIntrinsicExpression | VectorIntrinsicExpression
   */
  public function getLeftOperand(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->leftOperand);
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | AsExpression | BinaryExpression |
   * CastExpression | CollectionLiteralExpression | DarrayIntrinsicExpression |
   * DictionaryIntrinsicExpression | EmptyExpression | FunctionCallExpression |
   * InstanceofExpression | IssetExpression | KeysetIntrinsicExpression |
   * ListExpression | LiteralExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression |
   * PipeVariableExpression | PostfixUnaryExpression | PrefixUnaryExpression |
   * QualifiedName | ScopeResolutionExpression | SubscriptExpression |
   * RightParenToken | NameToken | VariableExpression |
   * VarrayIntrinsicExpression | VectorIntrinsicExpression
   */
  public function getLeftOperandx(): EditableNode {
    return $this->getLeftOperand();
  }

  final public function getOperatorUNTYPED(): EditableNode {
    return $this->operator;
  }

  public function withOperator(EditableToken $value): this {
    if ($value === $this->operator) {
      return $this;
    }
    return new static($this->left_operand, $value, $this->right_operand);
  }

  public function hasOperator(): bool {
    return $this->operator !== null;
  }

  /**
   * @returns ExclamationEqualToken | ExclamationEqualEqualToken | PercentToken
   * | PercentEqualToken | AmpersandToken | AmpersandAmpersandToken |
   * AmpersandEqualToken | StarToken | StarStarToken | StarStarEqualToken |
   * StarEqualToken | PlusToken | PlusEqualToken | MinusToken | MinusEqualToken
   * | DotToken | DotEqualToken | SlashToken | SlashEqualToken | LessThanToken
   * | LessThanLessThanToken | LessThanLessThanEqualToken | LessThanEqualToken
   * | LessThanEqualGreaterThanToken | LessThanGreaterThanToken | EqualToken |
   * EqualEqualToken | EqualEqualEqualToken | GreaterThanToken |
   * GreaterThanEqualToken | GreaterThanGreaterThanToken |
   * GreaterThanGreaterThanEqualToken | QuestionColonToken |
   * QuestionQuestionToken | CaratToken | CaratEqualToken | AndToken | OrToken
   * | XorToken | BarToken | BarEqualToken | BarGreaterThanToken | BarBarToken
   */
  public function getOperator(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->operator);
  }

  /**
   * @returns ExclamationEqualToken | ExclamationEqualEqualToken | PercentToken
   * | PercentEqualToken | AmpersandToken | AmpersandAmpersandToken |
   * AmpersandEqualToken | StarToken | StarStarToken | StarStarEqualToken |
   * StarEqualToken | PlusToken | PlusEqualToken | MinusToken | MinusEqualToken
   * | DotToken | DotEqualToken | SlashToken | SlashEqualToken | LessThanToken
   * | LessThanLessThanToken | LessThanLessThanEqualToken | LessThanEqualToken
   * | LessThanEqualGreaterThanToken | LessThanGreaterThanToken | EqualToken |
   * EqualEqualToken | EqualEqualEqualToken | GreaterThanToken |
   * GreaterThanEqualToken | GreaterThanGreaterThanToken |
   * GreaterThanGreaterThanEqualToken | QuestionColonToken |
   * QuestionQuestionToken | CaratToken | CaratEqualToken | AndToken | OrToken
   * | XorToken | BarToken | BarEqualToken | BarGreaterThanToken | BarBarToken
   */
  public function getOperatorx(): EditableToken {
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
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | AwaitableCreationExpression | BinaryExpression
   * | CastExpression | CollectionLiteralExpression | ConditionalExpression |
   * DarrayIntrinsicExpression | DictionaryIntrinsicExpression |
   * EmptyExpression | EvalExpression | FunctionCallExpression |
   * FunctionCallWithTypeArgumentsExpression | InclusionExpression |
   * InstanceofExpression | IssetExpression | KeysetIntrinsicExpression |
   * LambdaExpression | LiteralExpression | MemberSelectionExpression | Missing
   * | NullableAsExpression | ObjectCreationExpression |
   * ParenthesizedExpression | Php7AnonymousFunction | PipeVariableExpression |
   * PostfixUnaryExpression | PrefixUnaryExpression | QualifiedName |
   * SafeMemberSelectionExpression | ScopeResolutionExpression |
   * ShapeExpression | SubscriptExpression | QuestionToken | EndOfFileToken |
   * NameToken | TupleExpression | VariableExpression |
   * VarrayIntrinsicExpression | VectorIntrinsicExpression | XHPExpression |
   * YieldExpression | YieldFromExpression
   */
  public function getRightOperand(): ?EditableNode {
    if ($this->rightOperand->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->rightOperand);
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | AwaitableCreationExpression | BinaryExpression
   * | CastExpression | CollectionLiteralExpression | ConditionalExpression |
   * DarrayIntrinsicExpression | DictionaryIntrinsicExpression |
   * EmptyExpression | EvalExpression | FunctionCallExpression |
   * FunctionCallWithTypeArgumentsExpression | InclusionExpression |
   * InstanceofExpression | IssetExpression | KeysetIntrinsicExpression |
   * LambdaExpression | LiteralExpression | MemberSelectionExpression |
   * NullableAsExpression | ObjectCreationExpression | ParenthesizedExpression
   * | Php7AnonymousFunction | PipeVariableExpression | PostfixUnaryExpression
   * | PrefixUnaryExpression | QualifiedName | SafeMemberSelectionExpression |
   * ScopeResolutionExpression | ShapeExpression | SubscriptExpression |
   * QuestionToken | EndOfFileToken | NameToken | TupleExpression |
   * VariableExpression | VarrayIntrinsicExpression | VectorIntrinsicExpression
   * | XHPExpression | YieldExpression | YieldFromExpression
   */
  public function getRightOperandx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->rightOperand);
  }
}
