<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<6d5ac6ef0f9dde8dcbfd905af7405a9a>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class AlternateIfStatement extends EditableNode {

  public function __construct(
    private IfToken $keyword,
    private LeftParenToken $leftParen,
    private EditableNode $condition,
    private RightParenToken $rightParen,
    private ColonToken $colon,
    private EditableList<EditableNode> $statement,
    private ?EditableNode $elseifClauses,
    private ?AlternateElseClause $elseClause,
    private EndifToken $endifKeyword,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('alternate_if_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = IfToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_if_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_if_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $condition = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_if_condition'],
      $file,
      $offset,
      $source,
    );
    $offset += $condition->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_if_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_if_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    $statement = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_if_statement'],
      $file,
      $offset,
      $source,
    );
    $offset += $statement->getWidth();
    $elseif_clauses = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_if_elseif_clauses'],
      $file,
      $offset,
      $source,
    );
    $offset += $elseif_clauses->getWidth();
    $else_clause = AlternateElseClause::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_if_else_clause'],
      $file,
      $offset,
      $source,
    );
    $offset += $else_clause->getWidth();
    $endif_keyword = EndifToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_if_endif_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $endif_keyword->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_if_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static(
      $keyword,
      $left_paren,
      $condition,
      $right_paren,
      $colon,
      $statement,
      $elseif_clauses,
      $else_clause,
      $endif_keyword,
      $semicolon,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'condition' => $this->condition,
      'right_paren' => $this->rightParen,
      'colon' => $this->colon,
      'statement' => $this->statement,
      'elseif_clauses' => $this->elseifClauses,
      'else_clause' => $this->elseClause,
      'endif_keyword' => $this->endifKeyword,
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
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $condition = $this->condition->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $colon = $this->colon->rewrite($rewriter, $parents);
    $statement = $this->statement->rewrite($rewriter, $parents);
    $elseif_clauses = $this->elseifClauses?->rewrite($rewriter, $parents);
    $else_clause = $this->elseClause?->rewrite($rewriter, $parents);
    $endif_keyword = $this->endifKeyword->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $condition === $this->condition &&
      $right_paren === $this->rightParen &&
      $colon === $this->colon &&
      $statement === $this->statement &&
      $elseif_clauses === $this->elseifClauses &&
      $else_clause === $this->elseClause &&
      $endif_keyword === $this->endifKeyword &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static(
      $keyword,
      $left_paren,
      $condition,
      $right_paren,
      $colon,
      $statement,
      $elseif_clauses,
      $else_clause,
      $endif_keyword,
      $semicolon,
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
      $this->colon,
      $this->statement,
      $this->elseif_clauses,
      $this->else_clause,
      $this->endif_keyword,
      $this->semicolon,
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
      $this->colon,
      $this->statement,
      $this->elseif_clauses,
      $this->else_clause,
      $this->endif_keyword,
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
      $this->left_paren,
      $value,
      $this->right_paren,
      $this->colon,
      $this->statement,
      $this->elseif_clauses,
      $this->else_clause,
      $this->endif_keyword,
      $this->semicolon,
    );
  }

  public function hasCondition(): bool {
    return $this->condition !== null;
  }

  /**
   * @returns BinaryExpression | LiteralExpression | VariableExpression
   */
  public function getCondition(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->condition);
  }

  /**
   * @returns BinaryExpression | LiteralExpression | VariableExpression
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
      $this->colon,
      $this->statement,
      $this->elseif_clauses,
      $this->else_clause,
      $this->endif_keyword,
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

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(ColonToken $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $value,
      $this->statement,
      $this->elseif_clauses,
      $this->else_clause,
      $this->endif_keyword,
      $this->semicolon,
    );
  }

  public function hasColon(): bool {
    return $this->colon !== null;
  }

  /**
   * @returns ColonToken
   */
  public function getColon(): ColonToken {
    return TypeAssert\instance_of(ColonToken::class, $this->colon);
  }

  /**
   * @returns ColonToken
   */
  public function getColonx(): ColonToken {
    return $this->getColon();
  }

  final public function getStatementUNTYPED(): EditableNode {
    return $this->statement;
  }

  public function withStatement(EditableList<EditableNode> $value): this {
    if ($value === $this->statement) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->colon,
      $value,
      $this->elseif_clauses,
      $this->else_clause,
      $this->endif_keyword,
      $this->semicolon,
    );
  }

  public function hasStatement(): bool {
    return $this->statement !== null;
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getStatement(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->statement);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getStatementx(): EditableList<EditableNode> {
    return $this->getStatement();
  }

  final public function getElseifClausesUNTYPED(): EditableNode {
    return $this->elseifClauses;
  }

  public function withElseifClauses(?EditableNode $value): this {
    if ($value === $this->elseifClauses) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->colon,
      $this->statement,
      $value,
      $this->else_clause,
      $this->endif_keyword,
      $this->semicolon,
    );
  }

  public function hasElseifClauses(): bool {
    return $this->elseifClauses !== null;
  }

  /**
   * @returns Missing
   */
  public function getElseifClauses(): ?EditableNode {
    if ($this->elseifClauses->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->elseifClauses);
  }

  /**
   * @returns
   */
  public function getElseifClausesx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->elseifClauses);
  }

  final public function getElseClauseUNTYPED(): EditableNode {
    return $this->elseClause;
  }

  public function withElseClause(?AlternateElseClause $value): this {
    if ($value === $this->elseClause) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->colon,
      $this->statement,
      $this->elseif_clauses,
      $value,
      $this->endif_keyword,
      $this->semicolon,
    );
  }

  public function hasElseClause(): bool {
    return $this->elseClause !== null;
  }

  /**
   * @returns AlternateElseClause | Missing
   */
  public function getElseClause(): ?AlternateElseClause {
    if ($this->elseClause->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(AlternateElseClause::class, $this->elseClause);
  }

  /**
   * @returns AlternateElseClause
   */
  public function getElseClausex(): AlternateElseClause {
    return
      TypeAssert\instance_of(AlternateElseClause::class, $this->elseClause);
  }

  final public function getEndifKeywordUNTYPED(): EditableNode {
    return $this->endifKeyword;
  }

  public function withEndifKeyword(EndifToken $value): this {
    if ($value === $this->endifKeyword) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->colon,
      $this->statement,
      $this->elseif_clauses,
      $this->else_clause,
      $value,
      $this->semicolon,
    );
  }

  public function hasEndifKeyword(): bool {
    return $this->endifKeyword !== null;
  }

  /**
   * @returns EndifToken
   */
  public function getEndifKeyword(): EndifToken {
    return TypeAssert\instance_of(EndifToken::class, $this->endifKeyword);
  }

  /**
   * @returns EndifToken
   */
  public function getEndifKeywordx(): EndifToken {
    return $this->getEndifKeyword();
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
      $this->left_paren,
      $this->condition,
      $this->right_paren,
      $this->colon,
      $this->statement,
      $this->elseif_clauses,
      $this->else_clause,
      $this->endif_keyword,
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
