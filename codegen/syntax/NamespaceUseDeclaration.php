<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<3c93a5c71a8f40994366d67ff44a1188>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class NamespaceUseDeclaration
  extends EditableNode
  implements INamespaceUseDeclaration {

  public function __construct(
    private UseToken $keyword,
    private ?EditableToken $kind,
    private EditableList<NamespaceUseClause> $clauses,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('namespace_use_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = UseToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_use_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $kind = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_use_kind'],
      $file,
      $offset,
      $source,
    );
    $offset += $kind->getWidth();
    $clauses = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_use_clauses'],
      $file,
      $offset,
      $source,
    );
    $offset += $clauses->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_use_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $kind, $clauses, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'kind' => $this->kind,
      'clauses' => $this->clauses,
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
    $kind = $this->kind?->rewrite($rewriter, $parents);
    $clauses = $this->clauses->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $kind === $this->kind &&
      $clauses === $this->clauses &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($keyword, $kind, $clauses, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(UseToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->kind, $this->clauses, $this->semicolon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns UseToken
   */
  public function getKeyword(): UseToken {
    return TypeAssert\instance_of(UseToken::class, $this->keyword);
  }

  /**
   * @returns UseToken
   */
  public function getKeywordx(): UseToken {
    return $this->getKeyword();
  }

  final public function getKindUNTYPED(): EditableNode {
    return $this->kind;
  }

  public function withKind(?EditableToken $value): this {
    if ($value === $this->kind) {
      return $this;
    }
    return new static($this->keyword, $value, $this->clauses, $this->semicolon);
  }

  public function hasKind(): bool {
    return $this->kind !== null;
  }

  /**
   * @returns Missing | ConstToken | FunctionToken | NamespaceToken | TypeToken
   */
  public function getKind(): ?EditableToken {
    if ($this->kind->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableToken::class, $this->kind);
  }

  /**
   * @returns ConstToken | FunctionToken | NamespaceToken | TypeToken
   */
  public function getKindx(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->kind);
  }

  final public function getClausesUNTYPED(): EditableNode {
    return $this->clauses;
  }

  public function withClauses(EditableList<NamespaceUseClause> $value): this {
    if ($value === $this->clauses) {
      return $this;
    }
    return new static($this->keyword, $this->kind, $value, $this->semicolon);
  }

  public function hasClauses(): bool {
    return $this->clauses !== null;
  }

  /**
   * @returns EditableList<NamespaceUseClause>
   */
  public function getClauses(): EditableList<NamespaceUseClause> {
    return TypeAssert\instance_of(EditableList::class, $this->clauses);
  }

  /**
   * @returns EditableList<NamespaceUseClause>
   */
  public function getClausesx(): EditableList<NamespaceUseClause> {
    return $this->getClauses();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->keyword, $this->kind, $this->clauses, $value);
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
