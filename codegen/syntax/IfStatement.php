<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<181aecda3fb6a7e48dbfd7c913ec7866>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class IfStatement extends EditableNode implements IControlFlowStatement {

  public function __construct(
    private IfToken $keyword,
    private LeftParenToken $leftParen,
    private EditableNode $condition,
    private RightParenToken $rightParen,
    private EditableNode $statement,
    private ?EditableList<EditableNode> $elseifClauses,
    private ?ElseClause $elseClause,
  ) {
    parent::__construct('if_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = IfToken::fromJSON(
      /* UNSAFE_EXPR */ $json['if_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['if_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $condition = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['if_condition'],
      $file,
      $offset,
      $source,
    );
    $offset += $condition->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['if_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $statement = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['if_statement'],
      $file,
      $offset,
      $source,
    );
    $offset += $statement->getWidth();
    $elseif_clauses = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['if_elseif_clauses'],
      $file,
      $offset,
      $source,
    );
    $offset += $elseif_clauses->getWidth();
    $else_clause = ElseClause::fromJSON(
      /* UNSAFE_EXPR */ $json['if_else_clause'],
      $file,
      $offset,
      $source,
    );
    $offset += $else_clause->getWidth();
    return new static(
      $keyword,
      $left_paren,
      $condition,
      $right_paren,
      $statement,
      $elseif_clauses,
      $else_clause,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'condition' => $this->condition,
      'right_paren' => $this->rightParen,
      'statement' => $this->statement,
      'elseif_clauses' => $this->elseifClauses,
      'else_clause' => $this->elseClause,
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
    $elseif_clauses = $this->elseifClauses?->rewrite($rewriter, $parents);
    $else_clause = $this->elseClause?->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $condition === $this->condition &&
      $right_paren === $this->rightParen &&
      $statement === $this->statement &&
      $elseif_clauses === $this->elseifClauses &&
      $else_clause === $this->elseClause
    ) {
      return $this;
    }
    return new static(
      $keyword,
      $left_paren,
      $condition,
      $right_paren,
      $statement,
      $elseif_clauses,
      $else_clause,
    );
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(IfToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->statement,
      $this->elseif_clauses,
      $this->else_clause,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns IfToken
   */
  public function getKeyword(): IfToken {
    return TypeAssert\instance_of(IfToken::class, $this->keyword);
  }

  /**
   * @returns IfToken
   */
  public function getKeywordx(): IfToken {
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
      $this->elseif_clauses,
      $this->else_clause,
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
      $this->elseif_clauses,
      $this->else_clause,
    );
  }

  public function hasCondition(): bool {
    return $this->condition !== null;
  }

  /**
   * @returns ArrayIntrinsicExpression | AsExpression | BinaryExpression |
   * CastExpression | EmptyExpression | FunctionCallExpression |
   * InstanceofExpression | IsExpression | IssetExpression | LiteralExpression
   * | MemberSelectionExpression | ParenthesizedExpression |
   * PrefixUnaryExpression | QualifiedName | ScopeResolutionExpression |
   * SubscriptExpression | NameToken | VariableExpression
   */
  public function getCondition(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->condition);
  }

  /**
   * @returns ArrayIntrinsicExpression | AsExpression | BinaryExpression |
   * CastExpression | EmptyExpression | FunctionCallExpression |
   * InstanceofExpression | IsExpression | IssetExpression | LiteralExpression
   * | MemberSelectionExpression | ParenthesizedExpression |
   * PrefixUnaryExpression | QualifiedName | ScopeResolutionExpression |
   * SubscriptExpression | NameToken | VariableExpression
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
      $this->elseif_clauses,
      $this->else_clause,
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
      $this->elseif_clauses,
      $this->else_clause,
    );
  }

  public function hasStatement(): bool {
    return $this->statement !== null;
  }

  /**
   * @returns BreakStatement | CompoundStatement | ContinueStatement |
   * EchoStatement | ExpressionStatement | GlobalStatement | GotoStatement |
   * ReturnStatement | ThrowStatement | UnsetStatement
   */
  public function getStatement(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->statement);
  }

  /**
   * @returns BreakStatement | CompoundStatement | ContinueStatement |
   * EchoStatement | ExpressionStatement | GlobalStatement | GotoStatement |
   * ReturnStatement | ThrowStatement | UnsetStatement
   */
  public function getStatementx(): EditableNode {
    return $this->getStatement();
  }

  final public function getElseifClausesUNTYPED(): EditableNode {
    return $this->elseifClauses;
  }

  public function withElseifClauses(?EditableList<EditableNode> $value): this {
    if ($value === $this->elseifClauses) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->statement,
      $value,
      $this->else_clause,
    );
  }

  public function hasElseifClauses(): bool {
    return $this->elseifClauses !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getElseifClauses(): ?EditableList<EditableNode> {
    if ($this->elseifClauses->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->elseifClauses);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getElseifClausesx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->elseifClauses);
  }

  final public function getElseClauseUNTYPED(): EditableNode {
    return $this->elseClause;
  }

  public function withElseClause(?ElseClause $value): this {
    if ($value === $this->elseClause) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->statement,
      $this->elseif_clauses,
      $value,
    );
  }

  public function hasElseClause(): bool {
    return $this->elseClause !== null;
  }

  /**
   * @returns ElseClause | Missing
   */
  public function getElseClause(): ?ElseClause {
    if ($this->elseClause->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(ElseClause::class, $this->elseClause);
  }

  /**
   * @returns ElseClause
   */
  public function getElseClausex(): ElseClause {
    return TypeAssert\instance_of(ElseClause::class, $this->elseClause);
  }
}
