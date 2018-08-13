<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<6dcd0e4e1fd19131cec7f7fda107e69f>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class FunctionCallWithTypeArgumentsExpression extends EditableNode {

  public function __construct(
    private EditableNode $receiver,
    private TypeArguments $typeArgs,
    private ?LeftParenToken $leftParen,
    private ?EditableList<EditableNode> $argumentList,
    private ?RightParenToken $rightParen,
  ) {
    parent::__construct('function_call_with_type_arguments_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $receiver = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['function_call_with_type_arguments_receiver'],
      $file,
      $offset,
      $source,
    );
    $offset += $receiver->getWidth();
    $type_args = TypeArguments::fromJSON(
      /* UNSAFE_EXPR */ $json['function_call_with_type_arguments_type_args'],
      $file,
      $offset,
      $source,
    );
    $offset += $type_args->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['function_call_with_type_arguments_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $argument_list = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['function_call_with_type_arguments_argument_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $argument_list->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['function_call_with_type_arguments_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    return new static(
      $receiver,
      $type_args,
      $left_paren,
      $argument_list,
      $right_paren,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'receiver' => $this->receiver,
      'type_args' => $this->typeArgs,
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
    $type_args = $this->typeArgs->rewrite($rewriter, $parents);
    $left_paren = $this->leftParen?->rewrite($rewriter, $parents);
    $argument_list = $this->argumentList?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen?->rewrite($rewriter, $parents);
    if (
      $receiver === $this->receiver &&
      $type_args === $this->typeArgs &&
      $left_paren === $this->leftParen &&
      $argument_list === $this->argumentList &&
      $right_paren === $this->rightParen
    ) {
      return $this;
    }
    return new static(
      $receiver,
      $type_args,
      $left_paren,
      $argument_list,
      $right_paren,
    );
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
      $this->type_args,
      $this->left_paren,
      $this->argument_list,
      $this->right_paren,
    );
  }

  public function hasReceiver(): bool {
    return $this->receiver !== null;
  }

  /**
   * @returns MemberSelectionExpression | ScopeResolutionExpression | NameToken
   */
  public function getReceiver(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->receiver);
  }

  /**
   * @returns MemberSelectionExpression | ScopeResolutionExpression | NameToken
   */
  public function getReceiverx(): EditableNode {
    return $this->getReceiver();
  }

  final public function getTypeArgsUNTYPED(): EditableNode {
    return $this->typeArgs;
  }

  public function withTypeArgs(TypeArguments $value): this {
    if ($value === $this->typeArgs) {
      return $this;
    }
    return new static(
      $this->receiver,
      $value,
      $this->left_paren,
      $this->argument_list,
      $this->right_paren,
    );
  }

  public function hasTypeArgs(): bool {
    return $this->typeArgs !== null;
  }

  /**
   * @returns TypeArguments
   */
  public function getTypeArgs(): TypeArguments {
    return TypeAssert\instance_of(TypeArguments::class, $this->typeArgs);
  }

  /**
   * @returns TypeArguments
   */
  public function getTypeArgsx(): TypeArguments {
    return $this->getTypeArgs();
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(?LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static(
      $this->receiver,
      $this->type_args,
      $value,
      $this->argument_list,
      $this->right_paren,
    );
  }

  public function hasLeftParen(): bool {
    return $this->leftParen !== null;
  }

  /**
   * @returns Missing | LeftParenToken
   */
  public function getLeftParen(): ?LeftParenToken {
    if ($this->leftParen->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParenx(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
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
      $this->type_args,
      $this->left_paren,
      $value,
      $this->right_paren,
    );
  }

  public function hasArgumentList(): bool {
    return $this->argumentList !== null;
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<LiteralExpression> |
   * EditableList<EqualToken> | EditableList<VariableExpression> | Missing
   */
  public function getArgumentList(): ?EditableList<EditableNode> {
    if ($this->argumentList->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->argumentList);
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<LiteralExpression> |
   * EditableList<EqualToken> | EditableList<VariableExpression>
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
      $this->type_args,
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
