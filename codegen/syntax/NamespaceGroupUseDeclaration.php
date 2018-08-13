<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<725efb3591c5f2000bd0b230213db2f1>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class NamespaceGroupUseDeclaration
  extends EditableNode
  implements INamespaceUseDeclaration {

  public function __construct(
    private UseToken $keyword,
    private ?EditableToken $kind,
    private QualifiedName $prefix,
    private LeftBraceToken $leftBrace,
    private EditableList<NamespaceUseClause> $clauses,
    private ?RightBraceToken $rightBrace,
    private ?SemicolonToken $semicolon,
  ) {
    parent::__construct('namespace_group_use_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = UseToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_group_use_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $kind = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_group_use_kind'],
      $file,
      $offset,
      $source,
    );
    $offset += $kind->getWidth();
    $prefix = QualifiedName::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_group_use_prefix'],
      $file,
      $offset,
      $source,
    );
    $offset += $prefix->getWidth();
    $left_brace = LeftBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_group_use_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $clauses = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_group_use_clauses'],
      $file,
      $offset,
      $source,
    );
    $offset += $clauses->getWidth();
    $right_brace = RightBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_group_use_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_group_use_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static(
      $keyword,
      $kind,
      $prefix,
      $left_brace,
      $clauses,
      $right_brace,
      $semicolon,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'kind' => $this->kind,
      'prefix' => $this->prefix,
      'left_brace' => $this->leftBrace,
      'clauses' => $this->clauses,
      'right_brace' => $this->rightBrace,
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
    $prefix = $this->prefix->rewrite($rewriter, $parents);
    $left_brace = $this->leftBrace->rewrite($rewriter, $parents);
    $clauses = $this->clauses->rewrite($rewriter, $parents);
    $right_brace = $this->rightBrace?->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon?->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $kind === $this->kind &&
      $prefix === $this->prefix &&
      $left_brace === $this->leftBrace &&
      $clauses === $this->clauses &&
      $right_brace === $this->rightBrace &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static(
      $keyword,
      $kind,
      $prefix,
      $left_brace,
      $clauses,
      $right_brace,
      $semicolon,
    );
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(UseToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->kind,
      $this->prefix,
      $this->left_brace,
      $this->clauses,
      $this->right_brace,
      $this->semicolon,
    );
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
    return new static(
      $this->keyword,
      $value,
      $this->prefix,
      $this->left_brace,
      $this->clauses,
      $this->right_brace,
      $this->semicolon,
    );
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

  final public function getPrefixUNTYPED(): EditableNode {
    return $this->prefix;
  }

  public function withPrefix(QualifiedName $value): this {
    if ($value === $this->prefix) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->kind,
      $value,
      $this->left_brace,
      $this->clauses,
      $this->right_brace,
      $this->semicolon,
    );
  }

  public function hasPrefix(): bool {
    return $this->prefix !== null;
  }

  /**
   * @returns QualifiedName
   */
  public function getPrefix(): QualifiedName {
    return TypeAssert\instance_of(QualifiedName::class, $this->prefix);
  }

  /**
   * @returns QualifiedName
   */
  public function getPrefixx(): QualifiedName {
    return $this->getPrefix();
  }

  final public function getLeftBraceUNTYPED(): EditableNode {
    return $this->leftBrace;
  }

  public function withLeftBrace(LeftBraceToken $value): this {
    if ($value === $this->leftBrace) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->kind,
      $this->prefix,
      $value,
      $this->clauses,
      $this->right_brace,
      $this->semicolon,
    );
  }

  public function hasLeftBrace(): bool {
    return $this->leftBrace !== null;
  }

  /**
   * @returns LeftBraceToken
   */
  public function getLeftBrace(): LeftBraceToken {
    return TypeAssert\instance_of(LeftBraceToken::class, $this->leftBrace);
  }

  /**
   * @returns LeftBraceToken
   */
  public function getLeftBracex(): LeftBraceToken {
    return $this->getLeftBrace();
  }

  final public function getClausesUNTYPED(): EditableNode {
    return $this->clauses;
  }

  public function withClauses(EditableList<NamespaceUseClause> $value): this {
    if ($value === $this->clauses) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->kind,
      $this->prefix,
      $this->left_brace,
      $value,
      $this->right_brace,
      $this->semicolon,
    );
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

  final public function getRightBraceUNTYPED(): EditableNode {
    return $this->rightBrace;
  }

  public function withRightBrace(?RightBraceToken $value): this {
    if ($value === $this->rightBrace) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->kind,
      $this->prefix,
      $this->left_brace,
      $this->clauses,
      $value,
      $this->semicolon,
    );
  }

  public function hasRightBrace(): bool {
    return $this->rightBrace !== null;
  }

  /**
   * @returns Missing | RightBraceToken
   */
  public function getRightBrace(): ?RightBraceToken {
    if ($this->rightBrace->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(RightBraceToken::class, $this->rightBrace);
  }

  /**
   * @returns RightBraceToken
   */
  public function getRightBracex(): RightBraceToken {
    return TypeAssert\instance_of(RightBraceToken::class, $this->rightBrace);
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(?SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->kind,
      $this->prefix,
      $this->left_brace,
      $this->clauses,
      $this->right_brace,
      $value,
    );
  }

  public function hasSemicolon(): bool {
    return $this->semicolon !== null;
  }

  /**
   * @returns Missing | SemicolonToken
   */
  public function getSemicolon(): ?SemicolonToken {
    if ($this->semicolon->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(SemicolonToken::class, $this->semicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolonx(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->semicolon);
  }
}
