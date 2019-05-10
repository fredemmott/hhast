/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<d7173b77ec14ca728a1c0940ddf6c05b>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class AlternateElseClause
  extends EditableNode
  implements IControlFlowStatement {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    self::class,
    EditableNode::class,
    IControlFlowStatement::class,
  ];

  private EditableNode $_keyword;
  private EditableNode $_colon;
  private EditableNode $_statement;

  public function __construct(
    EditableNode $keyword,
    EditableNode $colon,
    EditableNode $statement,
    ?__Private\SourceRef $source_ref = null,
  ) {
    $this->_keyword = $keyword;
    $this->_colon = $colon;
    $this->_statement = $statement;
    parent::__construct('alternate_else_clause', $source_ref);
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $initial_offset,
    string $source,
  ): this {
    $offset = $initial_offset;
    $keyword = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_else_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $colon = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_else_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    $statement = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_else_statement'],
      $file,
      $offset,
      $source,
    );
    $offset += $statement->getWidth();
    $source_ref = shape(
      'file' => $file,
      'source' => $source,
      'offset' => $initial_offset,
      'width' => $offset - $initial_offset,
    );
    return new static($keyword, $colon, $statement, $source_ref);
  }

  <<__Override>>
  public function getChildren(): dict<string, EditableNode> {
    return dict[
      'keyword' => $this->_keyword,
      'colon' => $this->_colon,
      'statement' => $this->_statement,
    ];
  }

  <<__Override>>
  public function rewriteChildren(
    self::TRewriter $rewriter,
    vec<EditableNode> $parents = vec[],
  ): this {
    $parents[] = $this;
    $keyword = $rewriter($this->_keyword, $parents);
    $colon = $rewriter($this->_colon, $parents);
    $statement = $rewriter($this->_statement, $parents);
    if (
      $keyword === $this->_keyword &&
      $colon === $this->_colon &&
      $statement === $this->_statement
    ) {
      return $this;
    }
    return new static($keyword, $colon, $statement);
  }

  public function getKeywordUNTYPED(): EditableNode {
    return $this->_keyword;
  }

  public function withKeyword(EditableNode $value): this {
    if ($value === $this->_keyword) {
      return $this;
    }
    return new static($value, $this->_colon, $this->_statement);
  }

  public function hasKeyword(): bool {
    return !$this->_keyword->isMissing();
  }

  /**
   * @return ElseToken
   */
  public function getKeyword(): ElseToken {
    return TypeAssert\instance_of(ElseToken::class, $this->_keyword);
  }

  /**
   * @return ElseToken
   */
  public function getKeywordx(): ElseToken {
    return $this->getKeyword();
  }

  public function getColonUNTYPED(): EditableNode {
    return $this->_colon;
  }

  public function withColon(EditableNode $value): this {
    if ($value === $this->_colon) {
      return $this;
    }
    return new static($this->_keyword, $value, $this->_statement);
  }

  public function hasColon(): bool {
    return !$this->_colon->isMissing();
  }

  /**
   * @return ColonToken
   */
  public function getColon(): ColonToken {
    return TypeAssert\instance_of(ColonToken::class, $this->_colon);
  }

  /**
   * @return ColonToken
   */
  public function getColonx(): ColonToken {
    return $this->getColon();
  }

  public function getStatementUNTYPED(): EditableNode {
    return $this->_statement;
  }

  public function withStatement(EditableNode $value): this {
    if ($value === $this->_statement) {
      return $this;
    }
    return new static($this->_keyword, $this->_colon, $value);
  }

  public function hasStatement(): bool {
    return !$this->_statement->isMissing();
  }

  /**
   * @return EditableList<EditableNode>
   */
  public function getStatement(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->_statement);
  }

  /**
   * @return EditableList<EditableNode>
   */
  public function getStatementx(): EditableList<EditableNode> {
    return $this->getStatement();
  }
}
