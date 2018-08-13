<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<c98f7fa3e4764b95efd4258182388e7e>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class AlternateElseClause
  extends EditableNode
  implements IControlFlowStatement {

  public function __construct(
    private ElseToken $keyword,
    private ColonToken $colon,
    private EditableList<EditableNode> $statement,
  ) {
    parent::__construct('alternate_else_clause');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = ElseToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_else_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_else_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    $statement = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_else_statement'],
      $file,
      $offset,
      $source,
    );
    $offset += $statement->getWidth();
    return new static($keyword, $colon, $statement);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'colon' => $this->colon,
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
    $colon = $this->colon->rewrite($rewriter, $parents);
    $statement = $this->statement->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $colon === $this->colon &&
      $statement === $this->statement
    ) {
      return $this;
    }
    return new static($keyword, $colon, $statement);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(ElseToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->colon, $this->statement);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns ElseToken
   */
  public function getKeyword(): ElseToken {
    return TypeAssert\instance_of(ElseToken::class, $this->keyword);
  }

  /**
   * @returns ElseToken
   */
  public function getKeywordx(): ElseToken {
    return $this->getKeyword();
  }

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(ColonToken $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static($this->keyword, $value, $this->statement);
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
    return new static($this->keyword, $this->colon, $value);
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
}
