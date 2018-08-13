<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<4a9e53dea0003e52e890190b9857bae1>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TryStatement extends EditableNode {

  public function __construct(
    private TryToken $keyword,
    private CompoundStatement $compoundStatement,
    private ?EditableList<EditableNode> $catchClauses,
    private ?FinallyClause $finallyClause,
  ) {
    parent::__construct('try_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = TryToken::fromJSON(
      /* UNSAFE_EXPR */ $json['try_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $compound_statement = CompoundStatement::fromJSON(
      /* UNSAFE_EXPR */ $json['try_compound_statement'],
      $file,
      $offset,
      $source,
    );
    $offset += $compound_statement->getWidth();
    $catch_clauses = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['try_catch_clauses'],
      $file,
      $offset,
      $source,
    );
    $offset += $catch_clauses->getWidth();
    $finally_clause = FinallyClause::fromJSON(
      /* UNSAFE_EXPR */ $json['try_finally_clause'],
      $file,
      $offset,
      $source,
    );
    $offset += $finally_clause->getWidth();
    return new static(
      $keyword,
      $compound_statement,
      $catch_clauses,
      $finally_clause,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'compound_statement' => $this->compoundStatement,
      'catch_clauses' => $this->catchClauses,
      'finally_clause' => $this->finallyClause,
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
    $compound_statement =
      $this->compoundStatement->rewrite($rewriter, $parents);
    $catch_clauses = $this->catchClauses?->rewrite($rewriter, $parents);
    $finally_clause = $this->finallyClause?->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $compound_statement === $this->compoundStatement &&
      $catch_clauses === $this->catchClauses &&
      $finally_clause === $this->finallyClause
    ) {
      return $this;
    }
    return new static(
      $keyword,
      $compound_statement,
      $catch_clauses,
      $finally_clause,
    );
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(TryToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->compound_statement,
      $this->catch_clauses,
      $this->finally_clause,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns TryToken
   */
  public function getKeyword(): TryToken {
    return TypeAssert\instance_of(TryToken::class, $this->keyword);
  }

  /**
   * @returns TryToken
   */
  public function getKeywordx(): TryToken {
    return $this->getKeyword();
  }

  final public function getCompoundStatementUNTYPED(): EditableNode {
    return $this->compoundStatement;
  }

  public function withCompoundStatement(CompoundStatement $value): this {
    if ($value === $this->compoundStatement) {
      return $this;
    }
    return new static(
      $this->keyword,
      $value,
      $this->catch_clauses,
      $this->finally_clause,
    );
  }

  public function hasCompoundStatement(): bool {
    return $this->compoundStatement !== null;
  }

  /**
   * @returns CompoundStatement
   */
  public function getCompoundStatement(): CompoundStatement {
    return TypeAssert\instance_of(
      CompoundStatement::class,
      $this->compoundStatement,
    );
  }

  /**
   * @returns CompoundStatement
   */
  public function getCompoundStatementx(): CompoundStatement {
    return $this->getCompoundStatement();
  }

  final public function getCatchClausesUNTYPED(): EditableNode {
    return $this->catchClauses;
  }

  public function withCatchClauses(?EditableList<EditableNode> $value): this {
    if ($value === $this->catchClauses) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->compound_statement,
      $value,
      $this->finally_clause,
    );
  }

  public function hasCatchClauses(): bool {
    return $this->catchClauses !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getCatchClauses(): ?EditableList<EditableNode> {
    if ($this->catchClauses->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->catchClauses);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getCatchClausesx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->catchClauses);
  }

  final public function getFinallyClauseUNTYPED(): EditableNode {
    return $this->finallyClause;
  }

  public function withFinallyClause(?FinallyClause $value): this {
    if ($value === $this->finallyClause) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->compound_statement,
      $this->catch_clauses,
      $value,
    );
  }

  public function hasFinallyClause(): bool {
    return $this->finallyClause !== null;
  }

  /**
   * @returns FinallyClause | Missing
   */
  public function getFinallyClause(): ?FinallyClause {
    if ($this->finallyClause->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(FinallyClause::class, $this->finallyClause);
  }

  /**
   * @returns FinallyClause
   */
  public function getFinallyClausex(): FinallyClause {
    return TypeAssert\instance_of(FinallyClause::class, $this->finallyClause);
  }
}
