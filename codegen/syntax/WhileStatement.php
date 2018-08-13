<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<370a1feaa43aa42394003aa9d38140a2>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class WhileStatement
  extends EditableNode
  implements IControlFlowStatement, ILoopStatement {

  public function __construct(
    private WhileToken $keyword,
    private LeftParenToken $leftParen,
    private EditableNode $condition,
    private RightParenToken $rightParen,
    private EditableNode $body,
  ) {
    parent::__construct('while_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = WhileToken::fromJSON(
      /* UNSAFE_EXPR */ $json['while_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['while_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $condition = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['while_condition'],
      $file,
      $offset,
      $source,
    );
    $offset += $condition->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['while_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $body = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['while_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static($keyword, $left_paren, $condition, $right_paren, $body);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'condition' => $this->condition,
      'right_paren' => $this->rightParen,
      'body' => $this->body,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $condition = $this->condition->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $condition === $this->condition &&
      $right_paren === $this->rightParen &&
      $body === $this->body
    ) {
      return $this;
    }
    return new static($keyword, $left_paren, $condition, $right_paren, $body);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(WhileToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns WhileToken
   */
  public function getKeyword(): WhileToken {
    return TypeAssert\instance_of(WhileToken::class, $this->keyword);
  }

  /**
   * @returns WhileToken
   */
  public function getKeywordx(): WhileToken {
    return $this->getKeyword();
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static(
      $this->keyword,
      $value,
      $this->condition,
      $this->right_paren,
      $this->body,
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

  final public function getConditionUNTYPED(): EditableNode {
    return $this->condition;
  }

  public function withCondition(EditableNode $value): this {
    if ($value === $this->condition) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasCondition(): bool {
    return $this->condition !== null;
  }

  /**
   * @returns BinaryExpression | FunctionCallExpression | InstanceofExpression
   * | IssetExpression | LiteralExpression | ParenthesizedExpression |
   * PostfixUnaryExpression | PrefixUnaryExpression | VariableExpression
   */
  public function getCondition(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->condition);
  }

  /**
   * @returns BinaryExpression | FunctionCallExpression | InstanceofExpression
   * | IssetExpression | LiteralExpression | ParenthesizedExpression |
   * PostfixUnaryExpression | PrefixUnaryExpression | VariableExpression
   */
  public function getConditionx(): EditableNode {
    return $this->getCondition();
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->condition,
      $value,
      $this->body,
    );
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

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(EditableNode $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $value,
    );
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns AlternateLoopStatement | CompoundStatement | ContinueStatement |
   * EchoStatement | ExpressionStatement
   */
  public function getBody(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->body);
  }

  /**
   * @returns AlternateLoopStatement | CompoundStatement | ContinueStatement |
   * EchoStatement | ExpressionStatement
   */
  public function getBodyx(): EditableNode {
    return $this->getBody();
  }
}
