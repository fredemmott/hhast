<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<d66ff724142ab7640ee285b037a28908>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class CastExpression extends EditableNode {

  public function __construct(
    private LeftParenToken $leftParen,
    private EditableToken $type,
    private RightParenToken $rightParen,
    private EditableNode $operand,
  ) {
    parent::__construct('cast_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['cast_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $type = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['cast_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['cast_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $operand = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['cast_operand'],
      $file,
      $offset,
      $source,
    );
    $offset += $operand->getWidth();
    return new static($left_paren, $type, $right_paren, $operand);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_paren' => $this->leftParen,
      'type' => $this->type,
      'right_paren' => $this->rightParen,
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
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $type = $this->type->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $operand = $this->operand->rewrite($rewriter, $parents);
    if (
      $left_paren === $this->leftParen &&
      $type === $this->type &&
      $right_paren === $this->rightParen &&
      $operand === $this->operand
    ) {
      return $this;
    }
    return new static($left_paren, $type, $right_paren, $operand);
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static($value, $this->type, $this->right_paren, $this->operand);
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

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(EditableToken $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return
      new static($this->left_paren, $value, $this->right_paren, $this->operand);
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns ArrayToken | BinaryToken | BoolToken | BooleanToken | DoubleToken
   * | FloatToken | IntToken | IntegerToken | ObjectToken | RealToken |
   * StringToken | UnsetToken
   */
  public function getType(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->type);
  }

  /**
   * @returns ArrayToken | BinaryToken | BoolToken | BooleanToken | DoubleToken
   * | FloatToken | IntToken | IntegerToken | ObjectToken | RealToken |
   * StringToken | UnsetToken
   */
  public function getTypex(): EditableToken {
    return $this->getType();
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static($this->left_paren, $this->type, $value, $this->operand);
  }

  public function hasRightParen(): bool {
    return $this->rightParen !== null;
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParen(): RightParenToken {
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParenx(): RightParenToken {
    return $this->getRightParen();
  }

  final public function getOperandUNTYPED(): EditableNode {
    return $this->operand;
  }

  public function withOperand(EditableNode $value): this {
    if ($value === $this->operand) {
      return $this;
    }
    return
      new static($this->left_paren, $this->type, $this->right_paren, $value);
  }

  public function hasOperand(): bool {
    return $this->operand !== null;
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | CastExpression | CollectionLiteralExpression |
   * DictionaryIntrinsicExpression | FunctionCallExpression |
   * KeysetIntrinsicExpression | LiteralExpression | MemberSelectionExpression
   * | ObjectCreationExpression | ParenthesizedExpression |
   * PostfixUnaryExpression | PrefixUnaryExpression | ScopeResolutionExpression
   * | SubscriptExpression | NameToken | VariableExpression |
   * VectorIntrinsicExpression | XHPExpression
   */
  public function getOperand(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->operand);
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | CastExpression | CollectionLiteralExpression |
   * DictionaryIntrinsicExpression | FunctionCallExpression |
   * KeysetIntrinsicExpression | LiteralExpression | MemberSelectionExpression
   * | ObjectCreationExpression | ParenthesizedExpression |
   * PostfixUnaryExpression | PrefixUnaryExpression | ScopeResolutionExpression
   * | SubscriptExpression | NameToken | VariableExpression |
   * VectorIntrinsicExpression | XHPExpression
   */
  public function getOperandx(): EditableNode {
    return $this->getOperand();
  }
}
