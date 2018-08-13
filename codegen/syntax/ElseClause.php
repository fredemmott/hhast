<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<58df8e4c2c636cca9645dc3daa216b09>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ElseClause extends EditableNode implements IControlFlowStatement {

  public function __construct(
    private ElseToken $keyword,
    private EditableNode $statement,
  ) {
    parent::__construct('else_clause');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = ElseToken::fromJSON(
      /* UNSAFE_EXPR */ $json['else_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $statement = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['else_statement'],
      $file,
      $offset,
      $source,
    );
    $offset += $statement->getWidth();
    return new static($keyword, $statement);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
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
    $statement = $this->statement->rewrite($rewriter, $parents);
    if ($keyword === $this->keyword && $statement === $this->statement) {
      return $this;
    }
    return new static($keyword, $statement);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(ElseToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->statement);
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

  final public function getStatementUNTYPED(): EditableNode {
    return $this->statement;
  }

  public function withStatement(EditableNode $value): this {
    if ($value === $this->statement) {
      return $this;
    }
    return new static($this->keyword, $value);
  }

  public function hasStatement(): bool {
    return $this->statement !== null;
  }

  /**
   * @returns CompoundStatement | EchoStatement | ExpressionStatement |
   * IfStatement | ReturnStatement
   */
  public function getStatement(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->statement);
  }

  /**
   * @returns CompoundStatement | EchoStatement | ExpressionStatement |
   * IfStatement | ReturnStatement
   */
  public function getStatementx(): EditableNode {
    return $this->getStatement();
  }
}
