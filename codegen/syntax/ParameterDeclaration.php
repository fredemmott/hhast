<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<212da66214458f46a11b480ac7ed0fe0>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ParameterDeclaration extends EditableNode {

  public function __construct(
    private ?AttributeSpecification $attribute,
    private ?EditableToken $visibility,
    private ?InoutToken $callConvention,
    private ?EditableNode $type,
    private ?EditableNode $name,
    private ?SimpleInitializer $defaultValue,
  ) {
    parent::__construct('parameter_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute = AttributeSpecification::fromJSON(
      /* UNSAFE_EXPR */ $json['parameter_attribute'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute->getWidth();
    $visibility = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['parameter_visibility'],
      $file,
      $offset,
      $source,
    );
    $offset += $visibility->getWidth();
    $call_convention = InoutToken::fromJSON(
      /* UNSAFE_EXPR */ $json['parameter_call_convention'],
      $file,
      $offset,
      $source,
    );
    $offset += $call_convention->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['parameter_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['parameter_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $default_value = SimpleInitializer::fromJSON(
      /* UNSAFE_EXPR */ $json['parameter_default_value'],
      $file,
      $offset,
      $source,
    );
    $offset += $default_value->getWidth();
    return new static(
      $attribute,
      $visibility,
      $call_convention,
      $type,
      $name,
      $default_value,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'attribute' => $this->attribute,
      'visibility' => $this->visibility,
      'call_convention' => $this->callConvention,
      'type' => $this->type,
      'name' => $this->name,
      'default_value' => $this->defaultValue,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $attribute = $this->attribute?->rewrite($rewriter, $parents);
    $visibility = $this->visibility?->rewrite($rewriter, $parents);
    $call_convention = $this->callConvention?->rewrite($rewriter, $parents);
    $type = $this->type?->rewrite($rewriter, $parents);
    $name = $this->name?->rewrite($rewriter, $parents);
    $default_value = $this->defaultValue?->rewrite($rewriter, $parents);
    if (
      $attribute === $this->attribute &&
      $visibility === $this->visibility &&
      $call_convention === $this->callConvention &&
      $type === $this->type &&
      $name === $this->name &&
      $default_value === $this->defaultValue
    ) {
      return $this;
    }
    return new static(
      $attribute,
      $visibility,
      $call_convention,
      $type,
      $name,
      $default_value,
    );
  }

  final public function getAttributeUNTYPED(): EditableNode {
    return $this->attribute;
  }

  public function withAttribute(?AttributeSpecification $value): this {
    if ($value === $this->attribute) {
      return $this;
    }
    return new static(
      $value,
      $this->visibility,
      $this->call_convention,
      $this->type,
      $this->name,
      $this->default_value,
    );
  }

  public function hasAttribute(): bool {
    return $this->attribute !== null;
  }

  /**
   * @returns AttributeSpecification | Missing
   */
  public function getAttribute(): ?AttributeSpecification {
    if ($this->attribute->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(AttributeSpecification::class, $this->attribute);
  }

  /**
   * @returns AttributeSpecification
   */
  public function getAttributex(): AttributeSpecification {
    return
      TypeAssert\instance_of(AttributeSpecification::class, $this->attribute);
  }

  final public function getVisibilityUNTYPED(): EditableNode {
    return $this->visibility;
  }

  public function withVisibility(?EditableToken $value): this {
    if ($value === $this->visibility) {
      return $this;
    }
    return new static(
      $this->attribute,
      $value,
      $this->call_convention,
      $this->type,
      $this->name,
      $this->default_value,
    );
  }

  public function hasVisibility(): bool {
    return $this->visibility !== null;
  }

  /**
   * @returns Missing | PrivateToken | ProtectedToken | PublicToken
   */
  public function getVisibility(): ?EditableToken {
    if ($this->visibility->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableToken::class, $this->visibility);
  }

  /**
   * @returns PrivateToken | ProtectedToken | PublicToken
   */
  public function getVisibilityx(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->visibility);
  }

  final public function getCallConventionUNTYPED(): EditableNode {
    return $this->callConvention;
  }

  public function withCallConvention(?InoutToken $value): this {
    if ($value === $this->callConvention) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->visibility,
      $value,
      $this->type,
      $this->name,
      $this->default_value,
    );
  }

  public function hasCallConvention(): bool {
    return $this->callConvention !== null;
  }

  /**
   * @returns Missing | InoutToken
   */
  public function getCallConvention(): ?InoutToken {
    if ($this->callConvention->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(InoutToken::class, $this->callConvention);
  }

  /**
   * @returns InoutToken
   */
  public function getCallConventionx(): InoutToken {
    return TypeAssert\instance_of(InoutToken::class, $this->callConvention);
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(?EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->visibility,
      $this->call_convention,
      $value,
      $this->name,
      $this->default_value,
    );
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns ClassnameTypeSpecifier | ClosureTypeSpecifier |
   * DarrayTypeSpecifier | DictionaryTypeSpecifier | GenericTypeSpecifier |
   * KeysetTypeSpecifier | MapArrayTypeSpecifier | Missing |
   * NullableTypeSpecifier | ShapeTypeSpecifier | SimpleTypeSpecifier |
   * SoftTypeSpecifier | TupleTypeSpecifier | TypeConstant |
   * VarrayTypeSpecifier | VectorArrayTypeSpecifier | VectorTypeSpecifier
   */
  public function getType(): ?EditableNode {
    if ($this->type->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns ClassnameTypeSpecifier | ClosureTypeSpecifier |
   * DarrayTypeSpecifier | DictionaryTypeSpecifier | GenericTypeSpecifier |
   * KeysetTypeSpecifier | MapArrayTypeSpecifier | NullableTypeSpecifier |
   * ShapeTypeSpecifier | SimpleTypeSpecifier | SoftTypeSpecifier |
   * TupleTypeSpecifier | TypeConstant | VarrayTypeSpecifier |
   * VectorArrayTypeSpecifier | VectorTypeSpecifier
   */
  public function getTypex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(?EditableNode $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->visibility,
      $this->call_convention,
      $this->type,
      $value,
      $this->default_value,
    );
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns DecoratedExpression | Missing | VariableToken
   */
  public function getName(): ?EditableNode {
    if ($this->name->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  /**
   * @returns DecoratedExpression | VariableToken
   */
  public function getNamex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  final public function getDefaultValueUNTYPED(): EditableNode {
    return $this->defaultValue;
  }

  public function withDefaultValue(?SimpleInitializer $value): this {
    if ($value === $this->defaultValue) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->visibility,
      $this->call_convention,
      $this->type,
      $this->name,
      $value,
    );
  }

  public function hasDefaultValue(): bool {
    return $this->defaultValue !== null;
  }

  /**
   * @returns Missing | SimpleInitializer
   */
  public function getDefaultValue(): ?SimpleInitializer {
    if ($this->defaultValue->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(SimpleInitializer::class, $this->defaultValue);
  }

  /**
   * @returns SimpleInitializer
   */
  public function getDefaultValuex(): SimpleInitializer {
    return
      TypeAssert\instance_of(SimpleInitializer::class, $this->defaultValue);
  }
}
