<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<53b878937f7771ca5637ca4b98472317>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class PropertyDeclaration extends EditableNode {

  public function __construct(
    private ?AttributeSpecification $attributeSpec,
    private EditableNode $modifiers,
    private ?EditableNode $type,
    private EditableList<PropertyDeclarator> $declarators,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('property_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute_spec = AttributeSpecification::fromJSON(
      /* UNSAFE_EXPR */ $json['property_attribute_spec'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute_spec->getWidth();
    $modifiers = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['property_modifiers'],
      $file,
      $offset,
      $source,
    );
    $offset += $modifiers->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['property_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $declarators = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['property_declarators'],
      $file,
      $offset,
      $source,
    );
    $offset += $declarators->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['property_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return
      new static($attribute_spec, $modifiers, $type, $declarators, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'attribute_spec' => $this->attributeSpec,
      'modifiers' => $this->modifiers,
      'type' => $this->type,
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
    $attribute_spec = $this->attributeSpec?->rewrite($rewriter, $parents);
    $modifiers = $this->modifiers->rewrite($rewriter, $parents);
    $type = $this->type?->rewrite($rewriter, $parents);
    $declarators = $this->declarators->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $attribute_spec === $this->attributeSpec &&
      $modifiers === $this->modifiers &&
      $type === $this->type &&
      $declarators === $this->declarators &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return
      new static($attribute_spec, $modifiers, $type, $declarators, $semicolon);
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
      $this->modifiers,
      $this->type,
      $this->declarators,
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

  final public function getModifiersUNTYPED(): EditableNode {
    return $this->modifiers;
  }

  public function withModifiers(EditableNode $value): this {
    if ($value === $this->modifiers) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $value,
      $this->type,
      $this->declarators,
      $this->semicolon,
    );
  }

  public function hasModifiers(): bool {
    return $this->modifiers !== null;
  }

  /**
   * @returns EditableList<EditableNode> | VarToken
   */
  public function getModifiers(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->modifiers);
  }

  /**
   * @returns EditableList<EditableNode> | VarToken
   */
  public function getModifiersx(): EditableNode {
    return $this->getModifiers();
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(?EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->modifiers,
      $value,
      $this->declarators,
      $this->semicolon,
    );
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns ClosureTypeSpecifier | DarrayTypeSpecifier |
   * DictionaryTypeSpecifier | GenericTypeSpecifier | MapArrayTypeSpecifier |
   * Missing | NullableTypeSpecifier | SimpleTypeSpecifier | SoftTypeSpecifier
   * | TupleTypeSpecifier | TypeConstant | VarrayTypeSpecifier |
   * VectorArrayTypeSpecifier | VectorTypeSpecifier
   */
  public function getType(): ?EditableNode {
    if ($this->type->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns ClosureTypeSpecifier | DarrayTypeSpecifier |
   * DictionaryTypeSpecifier | GenericTypeSpecifier | MapArrayTypeSpecifier |
   * NullableTypeSpecifier | SimpleTypeSpecifier | SoftTypeSpecifier |
   * TupleTypeSpecifier | TypeConstant | VarrayTypeSpecifier |
   * VectorArrayTypeSpecifier | VectorTypeSpecifier
   */
  public function getTypex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  final public function getDeclaratorsUNTYPED(): EditableNode {
    return $this->declarators;
  }

  public function withDeclarators(
    EditableList<PropertyDeclarator> $value,
  ): this {
    if ($value === $this->declarators) {
      return $this;
    }
    return new static(
      $this->attribute_spec,
      $this->modifiers,
      $this->type,
      $value,
      $this->semicolon,
    );
  }

  public function hasDeclarators(): bool {
    return $this->declarators !== null;
  }

  /**
   * @returns EditableList<PropertyDeclarator>
   */
  public function getDeclarators(): EditableList<PropertyDeclarator> {
    return TypeAssert\instance_of(EditableList::class, $this->declarators);
  }

  /**
   * @returns EditableList<PropertyDeclarator>
   */
  public function getDeclaratorsx(): EditableList<PropertyDeclarator> {
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
      $this->attribute_spec,
      $this->modifiers,
      $this->type,
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
