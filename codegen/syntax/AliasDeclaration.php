<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<0b40e75e76935e90e2368dfbfa53a3d2>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class AliasDeclaration extends EditableNode {

  public function __construct(
    private ?AttributeSpecification $attributeSpec,
    private EditableToken $keyword,
    private NameToken $name,
    private ?TypeParameters $genericParameter,
    private ?TypeConstraint $constraint,
    private EqualToken $equal,
    private EditableNode $type,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('alias_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute_spec = AttributeSpecification::fromJSON(
      /* UNSAFE_EXPR */ $json['alias_attribute_spec'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute_spec->getWidth();
    $keyword = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alias_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $name = NameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alias_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $generic_parameter = TypeParameters::fromJSON(
      /* UNSAFE_EXPR */ $json['alias_generic_parameter'],
      $file,
      $offset,
      $source,
    );
    $offset += $generic_parameter->getWidth();
    $constraint = TypeConstraint::fromJSON(
      /* UNSAFE_EXPR */ $json['alias_constraint'],
      $file,
      $offset,
      $source,
    );
    $offset += $constraint->getWidth();
    $equal = EqualToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alias_equal'],
      $file,
      $offset,
      $source,
    );
    $offset += $equal->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['alias_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alias_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static(
      $attribute_spec,
      $keyword,
      $name,
      $generic_parameter,
      $constraint,
      $equal,
      $type,
      $semicolon,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'attribute_spec' => $this->attributeSpec,
      'keyword' => $this->keyword,
      'name' => $this->name,
      'generic_parameter' => $this->genericParameter,
      'constraint' => $this->constraint,
      'equal' => $this->equal,
      'type' => $this->type,
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
    $attribute_spec = $this->attributeSpec?->rewrite($rewriter, $parents);
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    $generic_parameter = $this->genericParameter?->rewrite($rewriter, $parents);
    $constraint = $this->constraint?->rewrite($rewriter, $parents);
    $equal = $this->equal->rewrite($rewriter, $parents);
    $type = $this->type->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $attribute_spec === $this->attributeSpec &&
      $keyword === $this->keyword &&
      $name === $this->name &&
      $generic_parameter === $this->genericParameter &&
      $constraint === $this->constraint &&
      $equal === $this->equal &&
      $type === $this->type &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static(
      $attribute_spec,
      $keyword,
      $name,
      $generic_parameter,
      $constraint,
      $equal,
      $type,
      $semicolon,
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
      $this->generic_parameter,
      $this->constraint,
      $this->equal,
      $this->type,
      $this->semicolon,
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

  public function withKeyword(EditableToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $value,
      $this->name,
      $this->generic_parameter,
      $this->constraint,
      $this->equal,
      $this->type,
      $this->semicolon,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns NewtypeToken | TypeToken
   */
  public function getKeyword(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->keyword);
  }

  /**
   * @returns NewtypeToken | TypeToken
   */
  public function getKeywordx(): EditableToken {
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
      $this->generic_parameter,
      $this->constraint,
      $this->equal,
      $this->type,
      $this->semicolon,
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

  final public function getGenericParameterUNTYPED(): EditableNode {
    return $this->genericParameter;
  }

  public function withGenericParameter(?TypeParameters $value): this {
    if ($value === $this->genericParameter) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $this->name,
      $value,
      $this->constraint,
      $this->equal,
      $this->type,
      $this->semicolon,
    );
  }

  public function hasGenericParameter(): bool {
    return $this->genericParameter !== null;
  }

  /**
   * @returns Missing | TypeParameters
   */
  public function getGenericParameter(): ?TypeParameters {
    if ($this->genericParameter->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(TypeParameters::class, $this->genericParameter);
  }

  /**
   * @returns TypeParameters
   */
  public function getGenericParameterx(): TypeParameters {
    return
      TypeAssert\instance_of(TypeParameters::class, $this->genericParameter);
  }

  final public function getConstraintUNTYPED(): EditableNode {
    return $this->constraint;
  }

  public function withConstraint(?TypeConstraint $value): this {
    if ($value === $this->constraint) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $this->name,
      $this->generic_parameter,
      $value,
      $this->equal,
      $this->type,
      $this->semicolon,
    );
  }

  public function hasConstraint(): bool {
    return $this->constraint !== null;
  }

  /**
   * @returns Missing | TypeConstraint
   */
  public function getConstraint(): ?TypeConstraint {
    if ($this->constraint->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(TypeConstraint::class, $this->constraint);
  }

  /**
   * @returns TypeConstraint
   */
  public function getConstraintx(): TypeConstraint {
    return TypeAssert\instance_of(TypeConstraint::class, $this->constraint);
  }

  final public function getEqualUNTYPED(): EditableNode {
    return $this->equal;
  }

  public function withEqual(EqualToken $value): this {
    if ($value === $this->equal) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $this->name,
      $this->generic_parameter,
      $this->constraint,
      $value,
      $this->type,
      $this->semicolon,
    );
  }

  public function hasEqual(): bool {
    return $this->equal !== null;
  }

  /**
   * @returns EqualToken
   */
  public function getEqual(): EqualToken {
    return TypeAssert\instance_of(EqualToken::class, $this->equal);
  }

  /**
   * @returns EqualToken
   */
  public function getEqualx(): EqualToken {
    return $this->getEqual();
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $this->name,
      $this->generic_parameter,
      $this->constraint,
      $this->equal,
      $value,
      $this->semicolon,
    );
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns ClosureTypeSpecifier | DictionaryTypeSpecifier |
   * GenericTypeSpecifier | KeysetTypeSpecifier | MapArrayTypeSpecifier |
   * NullableTypeSpecifier | ShapeTypeSpecifier | SimpleTypeSpecifier |
   * TupleTypeSpecifier | VectorArrayTypeSpecifier | VectorTypeSpecifier
   */
  public function getType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns ClosureTypeSpecifier | DictionaryTypeSpecifier |
   * GenericTypeSpecifier | KeysetTypeSpecifier | MapArrayTypeSpecifier |
   * NullableTypeSpecifier | ShapeTypeSpecifier | SimpleTypeSpecifier |
   * TupleTypeSpecifier | VectorArrayTypeSpecifier | VectorTypeSpecifier
   */
  public function getTypex(): EditableNode {
    return $this->getType();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->keyword,
      $this->name,
      $this->generic_parameter,
      $this->constraint,
      $this->equal,
      $this->type,
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
