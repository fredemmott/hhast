<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<579ed42fa450044c61ec22e42ad7055b>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class EnumDeclaration extends EditableNode {

  public function __construct(
    private ?AttributeSpecification $attributeSpec,
    private EnumToken $keyword,
    private NameToken $name,
    private ColonToken $colon,
    private EditableNode $base,
    private ?TypeConstraint $type,
    private LeftBraceToken $leftBrace,
    private ?EditableList<EditableNode> $enumerators,
    private RightBraceToken $rightBrace,
  ) {
    parent::__construct('enum_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute_spec = AttributeSpecification::fromJSON(
      /* UNSAFE_EXPR */ $json['enum_attribute_spec'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute_spec->getWidth();
    $keyword = EnumToken::fromJSON(
      /* UNSAFE_EXPR */ $json['enum_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $name = NameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['enum_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['enum_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    $base = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['enum_base'],
      $file,
      $offset,
      $source,
    );
    $offset += $base->getWidth();
    $type = TypeConstraint::fromJSON(
      /* UNSAFE_EXPR */ $json['enum_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $left_brace = LeftBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['enum_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $enumerators = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['enum_enumerators'],
      $file,
      $offset,
      $source,
    );
    $offset += $enumerators->getWidth();
    $right_brace = RightBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['enum_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    return new static(
      $attribute_spec,
      $keyword,
      $name,
      $colon,
      $base,
      $type,
      $left_brace,
      $enumerators,
      $right_brace,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'attribute_spec' => $this->attributeSpec,
      'keyword' => $this->keyword,
      'name' => $this->name,
      'colon' => $this->colon,
      'base' => $this->base,
      'type' => $this->type,
      'left_brace' => $this->leftBrace,
      'enumerators' => $this->enumerators,
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
    $attribute_spec = $this->attributeSpec?->rewrite($rewriter, $parents);
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    $colon = $this->colon->rewrite($rewriter, $parents);
    $base = $this->base->rewrite($rewriter, $parents);
    $type = $this->type?->rewrite($rewriter, $parents);
    $left_brace = $this->leftBrace->rewrite($rewriter, $parents);
    $enumerators = $this->enumerators?->rewrite($rewriter, $parents);
    $right_brace = $this->rightBrace->rewrite($rewriter, $parents);
    if (
      $attribute_spec === $this->attributeSpec &&
      $keyword === $this->keyword &&
      $name === $this->name &&
      $colon === $this->colon &&
      $base === $this->base &&
      $type === $this->type &&
      $left_brace === $this->leftBrace &&
      $enumerators === $this->enumerators &&
      $right_brace === $this->rightBrace
    ) {
      return $this;
    }
    return new static(
      $attribute_spec,
      $keyword,
      $name,
      $colon,
      $base,
      $type,
      $left_brace,
      $enumerators,
      $right_brace,
    );
  }

  final public function getAttributeSpecUNTYPED(): EditableNode {
    return $this->attributeSpec;
  }

  public function withAttributeSpec(?AttributeSpecification $value): this {
    if ($value === $this->attributeSpec) {
      return $this;
    }
    return new static(
      $value,
      $this->keyword,
      $this->name,
      $this->colon,
      $this->base,
      $this->type,
      $this->left_brace,
      $this->enumerators,
      $this->right_brace,
    );
  }

  public function hasAttributeSpec(): bool {
    return $this->attributeSpec !== null;
  }

  /**
   * @returns AttributeSpecification | Missing
   */
  public function getAttributeSpec(): ?AttributeSpecification {
    if ($this->attributeSpec->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(
      AttributeSpecification::class,
      $this->attributeSpec,
    );
  }

  /**
   * @returns AttributeSpecification
   */
  public function getAttributeSpecx(): AttributeSpecification {
    return TypeAssert\instance_of(
      AttributeSpecification::class,
      $this->attributeSpec,
    );
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(EnumToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $value,
      $this->name,
      $this->colon,
      $this->base,
      $this->type,
      $this->left_brace,
      $this->enumerators,
      $this->right_brace,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns EnumToken
   */
  public function getKeyword(): EnumToken {
    return TypeAssert\instance_of(EnumToken::class, $this->keyword);
  }

  /**
   * @returns EnumToken
   */
  public function getKeywordx(): EnumToken {
    return $this->getKeyword();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(NameToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $value,
      $this->colon,
      $this->base,
      $this->type,
      $this->left_brace,
      $this->enumerators,
      $this->right_brace,
    );
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns NameToken
   */
  public function getName(): NameToken {
    return TypeAssert\instance_of(NameToken::class, $this->name);
  }

  /**
   * @returns NameToken
   */
  public function getNamex(): NameToken {
    return $this->getName();
  }

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(ColonToken $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $this->name,
      $value,
      $this->base,
      $this->type,
      $this->left_brace,
      $this->enumerators,
      $this->right_brace,
    );
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

  final public function getBaseUNTYPED(): EditableNode {
    return $this->base;
  }

  public function withBase(EditableNode $value): this {
    if ($value === $this->base) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $this->name,
      $this->colon,
      $value,
      $this->type,
      $this->left_brace,
      $this->enumerators,
      $this->right_brace,
    );
  }

  public function hasBase(): bool {
    return $this->base !== null;
  }

  /**
   * @returns ClassnameTypeSpecifier | GenericTypeSpecifier |
   * SimpleTypeSpecifier
   */
  public function getBase(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->base);
  }

  /**
   * @returns ClassnameTypeSpecifier | GenericTypeSpecifier |
   * SimpleTypeSpecifier
   */
  public function getBasex(): EditableNode {
    return $this->getBase();
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(?TypeConstraint $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $this->name,
      $this->colon,
      $this->base,
      $value,
      $this->left_brace,
      $this->enumerators,
      $this->right_brace,
    );
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns Missing | TypeConstraint
   */
  public function getType(): ?TypeConstraint {
    if ($this->type->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(TypeConstraint::class, $this->type);
  }

  /**
   * @returns TypeConstraint
   */
  public function getTypex(): TypeConstraint {
    return TypeAssert\instance_of(TypeConstraint::class, $this->type);
  }

  final public function getLeftBraceUNTYPED(): EditableNode {
    return $this->leftBrace;
  }

  public function withLeftBrace(LeftBraceToken $value): this {
    if ($value === $this->leftBrace) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $this->name,
      $this->colon,
      $this->base,
      $this->type,
      $value,
      $this->enumerators,
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

  final public function getEnumeratorsUNTYPED(): EditableNode {
    return $this->enumerators;
  }

  public function withEnumerators(?EditableList<EditableNode> $value): this {
    if ($value === $this->enumerators) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $this->name,
      $this->colon,
      $this->base,
      $this->type,
      $this->left_brace,
      $value,
      $this->right_brace,
    );
  }

  public function hasEnumerators(): bool {
    return $this->enumerators !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getEnumerators(): ?EditableList<EditableNode> {
    if ($this->enumerators->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->enumerators);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getEnumeratorsx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->enumerators);
  }

  final public function getRightBraceUNTYPED(): EditableNode {
    return $this->rightBrace;
  }

  public function withRightBrace(RightBraceToken $value): this {
    if ($value === $this->rightBrace) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $this->name,
      $this->colon,
      $this->base,
      $this->type,
      $this->left_brace,
      $this->enumerators,
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
