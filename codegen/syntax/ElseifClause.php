<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<5d771aa032227737500df17bc1f62e0d>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ElseifClause extends EditableNode implements IControlFlowStatement {

  public function __construct(
    private ElseifToken $keyword,
    private LeftParenToken $leftParen,
    private EditableNode $condition,
    private RightParenToken $rightParen,
    private EditableNode $statement,
  ) {
    parent::__construct('elseif_clause');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = ElseifToken::fromJSON(
      /* UNSAFE_EXPR */ $json['elseif_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['elseif_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $condition = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['elseif_condition'],
      $file,
      $offset,
      $source,
    );
    $offset += $condition->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['elseif_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $statement = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['elseif_statement'],
      $file,
      $offset,
      $source,
    );
    $offset += $statement->getWidth();
    return
      new static($keyword, $left_paren, $condition, $right_paren, $statement);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'condition' => $this->condition,
      'right_paren' => $this->rightParen,
      'statement' => $this->statement,
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
    $statement = $this->statement->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $condition === $this->condition &&
      $right_paren === $this->rightParen &&
      $statement === $this->statement
    ) {
      return $this;
    }
    return
      new static($keyword, $left_paren, $condition, $right_paren, $statement);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(ElseifToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->statement,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns ElseifToken
   */
  public function getKeyword(): ElseifToken {
    return TypeAssert\instance_of(ElseifToken::class, $this->keyword);
  }

  /**
   * @returns ElseifToken
   */
  public function getKeywordx(): ElseifToken {
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
      $this->statement,
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
      $this->statement,
    );
  }

  public function hasCondition(): bool {
    return $this->condition !== null;
  }

  /**
   * @returns BinaryExpression | FunctionCallExpression | LiteralExpression |
   * VariableExpression
   */
  public function getCondition(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->condition);
  }

  /**
   * @returns BinaryExpression | FunctionCallExpression | LiteralExpression |
   * VariableExpression
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
      $this->statement,
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

  final public function getStatementUNTYPED(): EditableNode {
    return $this->statement;
  }

  public function withStatement(EditableNode $value): this {
    if ($value === $this->statement) {
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

  public function hasStatement(): bool {
    return $this->statement !== null;
  }

  /**
   * @returns CompoundStatement | ExpressionStatement
   */
  public function getStatement(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->statement);
  }

  /**
   * @returns CompoundStatement | ExpressionStatement
   */
  public function getStatementx(): EditableNode {
    return $this->getStatement();
  }
}
