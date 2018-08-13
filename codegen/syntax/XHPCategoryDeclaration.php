<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<8b10e4d492a44dbd469e47a827370428>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPCategoryDeclaration extends EditableNode {

  public function __construct(
    private CategoryToken $keyword,
    private EditableList<XHPCategoryNameToken> $categories,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('xhp_category_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = CategoryToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_category_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $categories = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_category_categories'],
      $file,
      $offset,
      $source,
    );
    $offset += $categories->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_category_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $categories, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'categories' => $this->categories,
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
    $categories = $this->categories->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $categories === $this->categories &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($keyword, $categories, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(CategoryToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->categories, $this->semicolon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns CategoryToken
   */
  public function getKeyword(): CategoryToken {
    return TypeAssert\instance_of(CategoryToken::class, $this->keyword);
  }

  /**
   * @returns CategoryToken
   */
  public function getKeywordx(): CategoryToken {
    return $this->getKeyword();
  }

  final public function getCategoriesUNTYPED(): EditableNode {
    return $this->categories;
  }

  public function withCategories(
    EditableList<XHPCategoryNameToken> $value,
  ): this {
    if ($value === $this->categories) {
      return $this;
    }
    return new static($this->keyword, $value, $this->semicolon);
  }

  public function hasCategories(): bool {
    return $this->categories !== null;
  }

  /**
   * @returns EditableList<XHPCategoryNameToken>
   */
  public function getCategories(): EditableList<XHPCategoryNameToken> {
    return TypeAssert\instance_of(EditableList::class, $this->categories);
  }

  /**
   * @returns EditableList<XHPCategoryNameToken>
   */
  public function getCategoriesx(): EditableList<XHPCategoryNameToken> {
    return $this->getCategories();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->keyword, $this->categories, $value);
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
