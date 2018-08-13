<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<582a6423b970fdb750d0e35d09aef904>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class FunctionCallExpression extends EditableNode {

  public function __construct(
    private EditableNode $receiver,
    private LeftParenToken $leftParen,
    private ?EditableList<EditableNode> $argumentList,
    private ?RightParenToken $rightParen,
  ) {
    parent::__construct('function_call_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $receiver = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['function_call_receiver'],
      $file,
      $offset,
      $source,
    );
    $offset += $receiver->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['function_call_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $argument_list = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['function_call_argument_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $argument_list->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['function_call_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    return new static($receiver, $left_paren, $argument_list, $right_paren);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'receiver' => $this->receiver,
      'left_paren' => $this->leftParen,
      'argument_list' => $this->argumentList,
      'right_paren' => $this->rightParen,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $receiver = $this->receiver->rewrite($rewriter, $parents);
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $argument_list = $this->argumentList?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen?->rewrite($rewriter, $parents);
    if (
      $receiver === $this->receiver &&
      $left_paren === $this->leftParen &&
      $argument_list === $this->argumentList &&
      $right_paren === $this->rightParen
    ) {
      return $this;
    }
    return new static($receiver, $left_paren, $argument_list, $right_paren);
  }

  final public function getReceiverUNTYPED(): EditableNode {
    return $this->receiver;
  }

  public function withReceiver(EditableNode $value): this {
    if ($value === $this->receiver) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->argument_list,
      $this->right_paren,
    );
  }

  public function hasReceiver(): bool {
    return $this->receiver !== null;
  }

  /**
   * @returns ArrayCreationExpression | FunctionCallExpression |
   * LiteralExpression | MemberSelectionExpression | ParenthesizedExpression |
   * PrefixUnaryExpression | QualifiedName | SafeMemberSelectionExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression
   */
  public function getReceiver(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->receiver);
  }

  /**
   * @returns ArrayCreationExpression | FunctionCallExpression |
   * LiteralExpression | MemberSelectionExpression | ParenthesizedExpression |
   * PrefixUnaryExpression | QualifiedName | SafeMemberSelectionExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression
   */
  public function getReceiverx(): EditableNode {
    return $this->getReceiver();
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static(
      $this->receiver,
      $value,
      $this->argument_list,
      $this->right_paren,
    );
  }

  public function hasLeftParen(): bool {
    return $this->leftParen !== null;
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParen(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParenx(): LeftParenToken {
    return $this->getLeftParen();
  }

  final public function getArgumentListUNTYPED(): EditableNode {
    return $this->argumentList;
  }

  public function withArgumentList(?EditableList<EditableNode> $value): this {
    if ($value === $this->argumentList) {
      return $this;
    }
    return new static(
      $this->receiver,
      $this->left_paren,
      $value,
      $this->right_paren,
    );
  }

  public function hasArgumentList(): bool {
    return $this->argumentList !== null;
  }

  /**
   * @returns EditableList<AnonymousFunction> | EditableList<EditableNode> |
   * EditableList<ArrayCreationExpression> |
   * EditableList<ArrayIntrinsicExpression> |
   * EditableList<AwaitableCreationExpression> | EditableList<BinaryExpression>
   * | EditableList<CastExpression> | EditableList<CollectionLiteralExpression>
   * | EditableList<ConditionalExpression> |
   * EditableList<DarrayIntrinsicExpression> |
   * EditableList<DecoratedExpression> | EditableList<DefineExpression> |
   * EditableList<DictionaryIntrinsicExpression> |
   * EditableList<EmptyExpression> | EditableList<EvalExpression> |
   * EditableList<FunctionCallExpression> | EditableList<InclusionExpression> |
   * EditableList<InstanceofExpression> | EditableList<IssetExpression> |
   * EditableList<KeysetIntrinsicExpression> | EditableList<LambdaExpression> |
   * EditableList<LiteralExpression> | EditableList<MemberSelectionExpression>
   * | EditableList<ObjectCreationExpression> |
   * EditableList<ParenthesizedExpression> |
   * EditableList<PipeVariableExpression> |
   * EditableList<PostfixUnaryExpression> | EditableList<PrefixUnaryExpression>
   * | EditableList<QualifiedName> |
   * EditableList<SafeMemberSelectionExpression> |
   * EditableList<ScopeResolutionExpression> | EditableList<ShapeExpression> |
   * EditableList<SubscriptExpression> | EditableList<NameToken> |
   * EditableList<TupleExpression> | EditableList<VariableExpression> |
   * EditableList<VarrayIntrinsicExpression> |
   * EditableList<VectorIntrinsicExpression> | EditableList<XHPExpression> |
   * Missing
   */
  public function getArgumentList(): ?EditableList<EditableNode> {
    if ($this->argumentList->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->argumentList);
  }

  /**
   * @returns EditableList<AnonymousFunction> | EditableList<EditableNode> |
   * EditableList<ArrayCreationExpression> |
   * EditableList<ArrayIntrinsicExpression> |
   * EditableList<AwaitableCreationExpression> | EditableList<BinaryExpression>
   * | EditableList<CastExpression> | EditableList<CollectionLiteralExpression>
   * | EditableList<ConditionalExpression> |
   * EditableList<DarrayIntrinsicExpression> |
   * EditableList<DecoratedExpression> | EditableList<DefineExpression> |
   * EditableList<DictionaryIntrinsicExpression> |
   * EditableList<EmptyExpression> | EditableList<EvalExpression> |
   * EditableList<FunctionCallExpression> | EditableList<InclusionExpression> |
   * EditableList<InstanceofExpression> | EditableList<IssetExpression> |
   * EditableList<KeysetIntrinsicExpression> | EditableList<LambdaExpression> |
   * EditableList<LiteralExpression> | EditableList<MemberSelectionExpression>
   * | EditableList<ObjectCreationExpression> |
   * EditableList<ParenthesizedExpression> |
   * EditableList<PipeVariableExpression> |
   * EditableList<PostfixUnaryExpression> | EditableList<PrefixUnaryExpression>
   * | EditableList<QualifiedName> |
   * EditableList<SafeMemberSelectionExpression> |
   * EditableList<ScopeResolutionExpression> | EditableList<ShapeExpression> |
   * EditableList<SubscriptExpression> | EditableList<NameToken> |
   * EditableList<TupleExpression> | EditableList<VariableExpression> |
   * EditableList<VarrayIntrinsicExpression> |
   * EditableList<VectorIntrinsicExpression> | EditableList<XHPExpression>
   */
  public function getArgumentListx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->argumentList);
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(?RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static(
      $this->receiver,
      $this->left_paren,
      $this->argument_list,
      $value,
    );
  }

  public function hasRightParen(): bool {
    return $this->rightParen !== null;
  }

  /**
   * @returns Missing | RightParenToken
   */
  public function getRightParen(): ?RightParenToken {
    if ($this->rightParen->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParenx(): RightParenToken {
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }
}
