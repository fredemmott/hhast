<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<e0ba6bb1049a720cfee07b28aff0f15d>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class DoStatement
  extends EditableNode
  implements IControlFlowStatement, ILoopStatement {

  public function __construct(
    private DoToken $keyword,
    private EditableNode $body,
    private WhileToken $whileKeyword,
    private LeftParenToken $leftParen,
    private EditableNode $condition,
    private RightParenToken $rightParen,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('do_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = DoToken::fromJSON(
      /* UNSAFE_EXPR */ $json['do_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $body = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['do_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    $while_keyword = WhileToken::fromJSON(
      /* UNSAFE_EXPR */ $json['do_while_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $while_keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['do_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $condition = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['do_condition'],
      $file,
      $offset,
      $source,
    );
    $offset += $condition->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['do_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['do_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static(
      $keyword,
      $body,
      $while_keyword,
      $left_paren,
      $condition,
      $right_paren,
      $semicolon,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'body' => $this->body,
      'while_keyword' => $this->whileKeyword,
      'left_paren' => $this->leftParen,
      'condition' => $this->condition,
      'right_paren' => $this->rightParen,
      'semicolon' => $this->semicolon,
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
    $body = $this->body->rewrite($rewriter, $parents);
    $while_keyword = $this->whileKeyword->rewrite($rewriter, $parents);
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $condition = $this->condition->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $body === $this->body &&
      $while_keyword === $this->whileKeyword &&
      $left_paren === $this->leftParen &&
      $condition === $this->condition &&
      $right_paren === $this->rightParen &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static(
      $keyword,
      $body,
      $while_keyword,
      $left_paren,
      $condition,
      $right_paren,
      $semicolon,
    );
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(DoToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->body,
      $this->while_keyword,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->semicolon,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns DoToken
   */
  public function getKeyword(): DoToken {
    return TypeAssert\instance_of(DoToken::class, $this->keyword);
  }

  /**
   * @returns DoToken
   */
  public function getKeywordx(): DoToken {
    return $this->getKeyword();
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
      $value,
      $this->while_keyword,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->semicolon,
    );
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns CompoundStatement | ExpressionStatement
   */
  public function getBody(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->body);
  }

  /**
   * @returns CompoundStatement | ExpressionStatement
   */
  public function getBodyx(): EditableNode {
    return $this->getBody();
  }

  final public function getWhileKeywordUNTYPED(): EditableNode {
    return $this->whileKeyword;
  }

  public function withWhileKeyword(WhileToken $value): this {
    if ($value === $this->whileKeyword) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->body,
      $value,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->semicolon,
    );
  }

  public function hasWhileKeyword(): bool {
    return $this->whileKeyword !== null;
  }

  /**
   * @returns WhileToken
   */
  public function getWhileKeyword(): WhileToken {
    return TypeAssert\instance_of(WhileToken::class, $this->whileKeyword);
  }

  /**
   * @returns WhileToken
   */
  public function getWhileKeywordx(): WhileToken {
    return $this->getWhileKeyword();
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
      $this->body,
      $this->while_keyword,
      $value,
      $this->condition,
      $this->right_paren,
      $this->semicolon,
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
      $this->body,
      $this->while_keyword,
      $this->left_paren,
      $value,
      $this->right_paren,
      $this->semicolon,
    );
  }

  public function hasCondition(): bool {
    return $this->condition !== null;
  }

  /**
   * @returns BinaryExpression | FunctionCallExpression | LiteralExpression |
   * PrefixUnaryExpression | SubscriptExpression | VariableExpression
   */
  public function getCondition(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->condition);
  }

  /**
   * @returns BinaryExpression | FunctionCallExpression | LiteralExpression |
   * PrefixUnaryExpression | SubscriptExpression | VariableExpression
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
      $this->body,
      $this->while_keyword,
      $this->left_paren,
      $this->condition,
      $value,
      $this->semicolon,
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

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->body,
      $this->while_keyword,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $value,
    );
  }

  public function hasSemicolon(): bool {
    return $this->semicolon !== null;
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolon(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->semicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolonx(): SemicolonToken {
    return $this->getSemicolon();
  }
}
