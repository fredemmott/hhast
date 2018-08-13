<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<a32b5e42d5a3829cb3d9c7af60a33978>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TraitUseConflictResolution extends EditableNode {

  public function __construct(
    private UseToken $keyword,
    private EditableList<SimpleTypeSpecifier> $names,
    private LeftBraceToken $leftBrace,
    private ?EditableList<EditableNode> $clauses,
    private RightBraceToken $rightBrace,
  ) {
    parent::__construct('trait_use_conflict_resolution');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = UseToken::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_conflict_resolution_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $names = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_conflict_resolution_names'],
      $file,
      $offset,
      $source,
    );
    $offset += $names->getWidth();
    $left_brace = LeftBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_conflict_resolution_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $clauses = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_conflict_resolution_clauses'],
      $file,
      $offset,
      $source,
    );
    $offset += $clauses->getWidth();
    $right_brace = RightBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_conflict_resolution_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    return new static($keyword, $names, $left_brace, $clauses, $right_brace);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'names' => $this->names,
      'left_brace' => $this->leftBrace,
      'clauses' => $this->clauses,
      'right_brace' => $this->rightBrace,
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
    $names = $this->names->rewrite($rewriter, $parents);
    $left_brace = $this->leftBrace->rewrite($rewriter, $parents);
    $clauses = $this->clauses?->rewrite($rewriter, $parents);
    $right_brace = $this->rightBrace->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $names === $this->names &&
      $left_brace === $this->leftBrace &&
      $clauses === $this->clauses &&
      $right_brace === $this->rightBrace
    ) {
      return $this;
    }
    return new static($keyword, $names, $left_brace, $clauses, $right_brace);
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
      $this->names,
      $this->left_brace,
      $this->clauses,
      $this->right_brace,
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

  final public function getNamesUNTYPED(): EditableNode {
    return $this->names;
  }

  public function withNames(EditableList<SimpleTypeSpecifier> $value): this {
    if ($value === $this->names) {
      return $this;
    }
    return new static(
      $this->keyword,
      $value,
      $this->left_brace,
      $this->clauses,
      $this->right_brace,
    );
  }

  public function hasNames(): bool {
    return $this->names !== null;
  }

  /**
   * @returns EditableList<SimpleTypeSpecifier>
   */
  public function getNames(): EditableList<SimpleTypeSpecifier> {
    return TypeAssert\instance_of(EditableList::class, $this->names);
  }

  /**
   * @returns EditableList<SimpleTypeSpecifier>
   */
  public function getNamesx(): EditableList<SimpleTypeSpecifier> {
    return $this->getNames();
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
      $this->names,
      $value,
      $this->clauses,
      $this->right_brace,
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

  public function withClauses(?EditableList<EditableNode> $value): this {
    if ($value === $this->clauses) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->names,
      $this->left_brace,
      $value,
      $this->right_brace,
    );
  }

  public function hasClauses(): bool {
    return $this->clauses !== null;
  }

  /**
   * @returns EditableList<TraitUseAliasItem> | EditableList<EditableNode> |
   * EditableList<TraitUsePrecedenceItem> | Missing
   */
  public function getClauses(): ?EditableList<EditableNode> {
    if ($this->clauses->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->clauses);
  }

  /**
   * @returns EditableList<TraitUseAliasItem> | EditableList<EditableNode> |
   * EditableList<TraitUsePrecedenceItem>
   */
  public function getClausesx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->clauses);
  }

  final public function getRightBraceUNTYPED(): EditableNode {
    return $this->rightBrace;
  }

  public function withRightBrace(RightBraceToken $value): this {
    if ($value === $this->rightBrace) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->names,
      $this->left_brace,
      $this->clauses,
      $value,
    );
  }

  public function hasRightBrace(): bool {
    return $this->rightBrace !== null;
  }

  /**
   * @returns RightBraceToken
   */
  public function getRightBrace(): RightBraceToken {
    return TypeAssert\instance_of(RightBraceToken::class, $this->rightBrace);
  }

  /**
   * @returns RightBraceToken
   */
  public function getRightBracex(): RightBraceToken {
    return $this->getRightBrace();
  }
}
