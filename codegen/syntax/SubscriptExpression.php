<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<29c509e8eedf712d2d98f97268430df0>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class SubscriptExpression extends EditableNode {

  public function __construct(
    private EditableNode $receiver,
    private EditableToken $leftBracket,
    private ?EditableNode $index,
    private ?EditableToken $rightBracket,
  ) {
    parent::__construct('subscript_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $receiver = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['subscript_receiver'],
      $file,
      $offset,
      $source,
    );
    $offset += $receiver->getWidth();
    $left_bracket = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['subscript_left_bracket'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_bracket->getWidth();
    $index = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['subscript_index'],
      $file,
      $offset,
      $source,
    );
    $offset += $index->getWidth();
    $right_bracket = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['subscript_right_bracket'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_bracket->getWidth();
    return new static($receiver, $left_bracket, $index, $right_bracket);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'receiver' => $this->receiver,
      'left_bracket' => $this->leftBracket,
      'index' => $this->index,
      'right_bracket' => $this->rightBracket,
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
    $left_bracket = $this->leftBracket->rewrite($rewriter, $parents);
    $index = $this->index?->rewrite($rewriter, $parents);
    $right_bracket = $this->rightBracket?->rewrite($rewriter, $parents);
    if (
      $receiver === $this->receiver &&
      $left_bracket === $this->leftBracket &&
      $index === $this->index &&
      $right_bracket === $this->rightBracket
    ) {
      return $this;
    }
    return new static($receiver, $left_bracket, $index, $right_bracket);
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
      $this->left_bracket,
      $this->index,
      $this->right_bracket,
    );
  }

  public function hasReceiver(): bool {
    return $this->receiver !== null;
  }

  /**
   * @returns ArrayCreationExpression | ArrayIntrinsicExpression |
   * FunctionCallExpression | LiteralExpression | MemberSelectionExpression |
   * ParenthesizedExpression | PrefixUnaryExpression |
   * SafeMemberSelectionExpression | ScopeResolutionExpression |
   * SubscriptExpression | RightParenToken | NameToken | VariableExpression
   */
  public function getReceiver(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->receiver);
  }

  /**
   * @returns ArrayCreationExpression | ArrayIntrinsicExpression |
   * FunctionCallExpression | LiteralExpression | MemberSelectionExpression |
   * ParenthesizedExpression | PrefixUnaryExpression |
   * SafeMemberSelectionExpression | ScopeResolutionExpression |
   * SubscriptExpression | RightParenToken | NameToken | VariableExpression
   */
  public function getReceiverx(): EditableNode {
    return $this->getReceiver();
  }

  final public function getLeftBracketUNTYPED(): EditableNode {
    return $this->leftBracket;
  }

  public function withLeftBracket(EditableToken $value): this {
    if ($value === $this->leftBracket) {
      return $this;
    }
    return
      new static($this->receiver, $value, $this->index, $this->right_bracket);
  }

  public function hasLeftBracket(): bool {
    return $this->leftBracket !== null;
  }

  /**
   * @returns LeftBracketToken | LeftBraceToken
   */
  public function getLeftBracket(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->leftBracket);
  }

  /**
   * @returns LeftBracketToken | LeftBraceToken
   */
  public function getLeftBracketx(): EditableToken {
    return $this->getLeftBracket();
  }

  final public function getIndexUNTYPED(): EditableNode {
    return $this->index;
  }

  public function withIndex(?EditableNode $value): this {
    if ($value === $this->index) {
      return $this;
    }
    return new static(
      $this->receiver,
      $this->left_bracket,
      $value,
      $this->right_bracket,
    );
  }

  public function hasIndex(): bool {
    return $this->index !== null;
  }

  /**
   * @returns AnonymousFunction | ArrayIntrinsicExpression | BinaryExpression |
   * CastExpression | FunctionCallExpression | LiteralExpression |
   * MemberSelectionExpression | Missing | ObjectCreationExpression |
   * ParenthesizedExpression | PostfixUnaryExpression | PrefixUnaryExpression |
   * SafeMemberSelectionExpression | ScopeResolutionExpression |
   * SubscriptExpression | NameToken | VariableExpression
   */
  public function getIndex(): ?EditableNode {
    if ($this->index->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->index);
  }

  /**
   * @returns AnonymousFunction | ArrayIntrinsicExpression | BinaryExpression |
   * CastExpression | FunctionCallExpression | LiteralExpression |
   * MemberSelectionExpression | ObjectCreationExpression |
   * ParenthesizedExpression | PostfixUnaryExpression | PrefixUnaryExpression |
   * SafeMemberSelectionExpression | ScopeResolutionExpression |
   * SubscriptExpression | NameToken | VariableExpression
   */
  public function getIndexx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->index);
  }

  final public function getRightBracketUNTYPED(): EditableNode {
    return $this->rightBracket;
  }

  public function withRightBracket(?EditableToken $value): this {
    if ($value === $this->rightBracket) {
      return $this;
    }
    return
      new static($this->receiver, $this->left_bracket, $this->index, $value);
  }

  public function hasRightBracket(): bool {
    return $this->rightBracket !== null;
  }

  /**
   * @returns Missing | RightBracketToken | RightBraceToken
   */
  public function getRightBracket(): ?EditableToken {
    if ($this->rightBracket->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableToken::class, $this->rightBracket);
  }

  /**
   * @returns RightBracketToken | RightBraceToken
   */
  public function getRightBracketx(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->rightBracket);
  }
}
