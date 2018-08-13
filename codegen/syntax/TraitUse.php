<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<4acee5e77a6c9e837669e1049cacdba1>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TraitUse extends EditableNode {

  public function __construct(
    private UseToken $keyword,
    private EditableList<EditableNode> $names,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('trait_use');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = UseToken::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $names = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_names'],
      $file,
      $offset,
      $source,
    );
    $offset += $names->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $names, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'names' => $this->names,
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
    $names = $this->names->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $names === $this->names &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($keyword, $names, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(UseToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->names, $this->semicolon);
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

  public function withNames(EditableList<EditableNode> $value): this {
    if ($value === $this->names) {
      return $this;
    }
    return new static($this->keyword, $value, $this->semicolon);
  }

  public function hasNames(): bool {
    return $this->names !== null;
  }

  /**
   * @returns EditableList<GenericTypeSpecifier> | EditableList<EditableNode> |
   * EditableList<SimpleTypeSpecifier> | EditableList<NameToken>
   */
  public function getNames(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->names);
  }

  /**
   * @returns EditableList<GenericTypeSpecifier> | EditableList<EditableNode> |
   * EditableList<SimpleTypeSpecifier> | EditableList<NameToken>
   */
  public function getNamesx(): EditableList<EditableNode> {
    return $this->getNames();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->keyword, $this->names, $value);
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
