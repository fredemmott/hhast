<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<b571d05c13f74a584b7d6a05dafaed17>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ConstDeclaration extends EditableNode {

  public function __construct(
    private ?EditableToken $visibility,
    private ?AbstractToken $abstract,
    private ConstToken $keyword,
    private ?EditableNode $typeSpecifier,
    private EditableList<ConstantDeclarator> $declarators,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('const_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $visibility = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['const_visibility'],
      $file,
      $offset,
      $source,
    );
    $offset += $visibility->getWidth();
    $abstract = AbstractToken::fromJSON(
      /* UNSAFE_EXPR */ $json['const_abstract'],
      $file,
      $offset,
      $source,
    );
    $offset += $abstract->getWidth();
    $keyword = ConstToken::fromJSON(
      /* UNSAFE_EXPR */ $json['const_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $type_specifier = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['const_type_specifier'],
      $file,
      $offset,
      $source,
    );
    $offset += $type_specifier->getWidth();
    $declarators = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['const_declarators'],
      $file,
      $offset,
      $source,
    );
    $offset += $declarators->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['const_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static(
      $visibility,
      $abstract,
      $keyword,
      $type_specifier,
      $declarators,
      $semicolon,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'visibility' => $this->visibility,
      'abstract' => $this->abstract,
      'keyword' => $this->keyword,
      'type_specifier' => $this->typeSpecifier,
      'declarators' => $this->declarators,
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
    $visibility = $this->visibility?->rewrite($rewriter, $parents);
    $abstract = $this->abstract?->rewrite($rewriter, $parents);
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $type_specifier = $this->typeSpecifier?->rewrite($rewriter, $parents);
    $declarators = $this->declarators->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $visibility === $this->visibility &&
      $abstract === $this->abstract &&
      $keyword === $this->keyword &&
      $type_specifier === $this->typeSpecifier &&
      $declarators === $this->declarators &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static(
      $visibility,
      $abstract,
      $keyword,
      $type_specifier,
      $declarators,
      $semicolon,
    );
  }

  final public function getVisibilityUNTYPED(): EditableNode {
    return $this->visibility;
  }

  public function withVisibility(?EditableToken $value): this {
    if ($value === $this->visibility) {
      return $this;
    }
    return new static(
      $value,
      $this->abstract,
      $this->keyword,
      $this->type_specifier,
      $this->declarators,
      $this->semicolon,
    );
  }

  public function hasVisibility(): bool {
    return $this->visibility !== null;
  }

  /**
   * @returns Missing | ProtectedToken | PublicToken
   */
  public function getVisibility(): ?EditableToken {
    if ($this->visibility->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableToken::class, $this->visibility);
  }

  /**
   * @returns ProtectedToken | PublicToken
   */
  public function getVisibilityx(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->visibility);
  }

  final public function getAbstractUNTYPED(): EditableNode {
    return $this->abstract;
  }

  public function withAbstract(?AbstractToken $value): this {
    if ($value === $this->abstract) {
      return $this;
    }
    return new static(
      $this->visibility,
      $value,
      $this->keyword,
      $this->type_specifier,
      $this->declarators,
      $this->semicolon,
    );
  }

  public function hasAbstract(): bool {
    return $this->abstract !== null;
  }

  /**
   * @returns Missing | AbstractToken
   */
  public function getAbstract(): ?AbstractToken {
    if ($this->abstract->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(AbstractToken::class, $this->abstract);
  }

  /**
   * @returns AbstractToken
   */
  public function getAbstractx(): AbstractToken {
    return TypeAssert\instance_of(AbstractToken::class, $this->abstract);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(ConstToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $this->visibility,
      $this->abstract,
      $value,
      $this->type_specifier,
      $this->declarators,
      $this->semicolon,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns ConstToken
   */
  public function getKeyword(): ConstToken {
    return TypeAssert\instance_of(ConstToken::class, $this->keyword);
  }

  /**
   * @returns ConstToken
   */
  public function getKeywordx(): ConstToken {
    return $this->getKeyword();
  }

  final public function getTypeSpecifierUNTYPED(): EditableNode {
    return $this->typeSpecifier;
  }

  public function withTypeSpecifier(?EditableNode $value): this {
    if ($value === $this->typeSpecifier) {
      return $this;
    }
    return new static(
      $this->visibility,
      $this->abstract,
      $this->keyword,
      $value,
      $this->declarators,
      $this->semicolon,
    );
  }

  public function hasTypeSpecifier(): bool {
    return $this->typeSpecifier !== null;
  }

  /**
   * @returns ClassnameTypeSpecifier | GenericTypeSpecifier |
   * KeysetTypeSpecifier | Missing | NullableTypeSpecifier |
   * SimpleTypeSpecifier | TypeConstant | VectorTypeSpecifier
   */
  public function getTypeSpecifier(): ?EditableNode {
    if ($this->typeSpecifier->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->typeSpecifier);
  }

  /**
   * @returns ClassnameTypeSpecifier | GenericTypeSpecifier |
   * KeysetTypeSpecifier | NullableTypeSpecifier | SimpleTypeSpecifier |
   * TypeConstant | VectorTypeSpecifier
   */
  public function getTypeSpecifierx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->typeSpecifier);
  }

  final public function getDeclaratorsUNTYPED(): EditableNode {
    return $this->declarators;
  }

  public function withDeclarators(
    EditableList<ConstantDeclarator> $value,
  ): this {
    if ($value === $this->declarators) {
      return $this;
    }
    return new static(
      $this->visibility,
      $this->abstract,
      $this->keyword,
      $this->type_specifier,
      $value,
      $this->semicolon,
    );
  }

  public function hasDeclarators(): bool {
    return $this->declarators !== null;
  }

  /**
   * @returns EditableList<ConstantDeclarator>
   */
  public function getDeclarators(): EditableList<ConstantDeclarator> {
    return TypeAssert\instance_of(EditableList::class, $this->declarators);
  }

  /**
   * @returns EditableList<ConstantDeclarator>
   */
  public function getDeclaratorsx(): EditableList<ConstantDeclarator> {
    return $this->getDeclarators();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static(
      $this->visibility,
      $this->abstract,
      $this->keyword,
      $this->type_specifier,
      $this->declarators,
      $value,
    );
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
