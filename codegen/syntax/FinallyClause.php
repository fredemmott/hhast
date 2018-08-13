<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<d0e62e9aba96d167f51aa023463c250d>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class FinallyClause extends EditableNode {

  public function __construct(
    private FinallyToken $keyword,
    private CompoundStatement $body,
  ) {
    parent::__construct('finally_clause');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = FinallyToken::fromJSON(
      /* UNSAFE_EXPR */ $json['finally_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $body = CompoundStatement::fromJSON(
      /* UNSAFE_EXPR */ $json['finally_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static($keyword, $body);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
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
    $body = $this->body->rewrite($rewriter, $parents);
    if ($keyword === $this->keyword && $body === $this->body) {
      return $this;
    }
    return new static($keyword, $body);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(FinallyToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->body);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns FinallyToken
   */
  public function getKeyword(): FinallyToken {
    return TypeAssert\instance_of(FinallyToken::class, $this->keyword);
  }

  /**
   * @returns FinallyToken
   */
  public function getKeywordx(): FinallyToken {
    return $this->getKeyword();
  }

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(CompoundStatement $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static($this->keyword, $value);
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns CompoundStatement
   */
  public function getBody(): CompoundStatement {
    return TypeAssert\instance_of(CompoundStatement::class, $this->body);
  }

  /**
   * @returns CompoundStatement
   */
  public function getBodyx(): CompoundStatement {
    return $this->getBody();
  }
}
