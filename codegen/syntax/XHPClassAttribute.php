<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<182631d23d26fa7f98214bad7e04de23>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPClassAttribute extends EditableNode {

  public function __construct(
    private EditableNode $type,
    private XHPElementNameToken $name,
    private ?SimpleInitializer $initializer,
    private ?XHPRequired $required,
  ) {
    parent::__construct('xhp_class_attribute');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_attribute_decl_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $name = XHPElementNameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_attribute_decl_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $initializer = SimpleInitializer::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_attribute_decl_initializer'],
      $file,
      $offset,
      $source,
    );
    $offset += $initializer->getWidth();
    $required = XHPRequired::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_attribute_decl_required'],
      $file,
      $offset,
      $source,
    );
    $offset += $required->getWidth();
    return new static($type, $name, $initializer, $required);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'type' => $this->type,
      'name' => $this->name,
      'initializer' => $this->initializer,
      'required' => $this->required,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $type = $this->type->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    $initializer = $this->initializer?->rewrite($rewriter, $parents);
    $required = $this->required?->rewrite($rewriter, $parents);
    if (
      $type === $this->type &&
      $name === $this->name &&
      $initializer === $this->initializer &&
      $required === $this->required
    ) {
      return $this;
    }
    return new static($type, $name, $initializer, $required);
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static($value, $this->name, $this->initializer, $this->required);
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns GenericTypeSpecifier | MapArrayTypeSpecifier |
   * NullableTypeSpecifier | SimpleTypeSpecifier | VectorArrayTypeSpecifier |
   * XHPEnumType
   */
  public function getType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns GenericTypeSpecifier | MapArrayTypeSpecifier |
   * NullableTypeSpecifier | SimpleTypeSpecifier | VectorArrayTypeSpecifier |
   * XHPEnumType
   */
  public function getTypex(): EditableNode {
    return $this->getType();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(XHPElementNameToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($this->type, $value, $this->initializer, $this->required);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns XHPElementNameToken
   */
  public function getName(): XHPElementNameToken {
    return TypeAssert\instance_of(XHPElementNameToken::class, $this->name);
  }

  /**
   * @returns XHPElementNameToken
   */
  public function getNamex(): XHPElementNameToken {
    return $this->getName();
  }

  final public function getInitializerUNTYPED(): EditableNode {
    return $this->initializer;
  }

  public function withInitializer(?SimpleInitializer $value): this {
    if ($value === $this->initializer) {
      return $this;
    }
    return new static($this->type, $this->name, $value, $this->required);
  }

  public function hasInitializer(): bool {
    return $this->initializer !== null;
  }

  /**
   * @returns Missing | SimpleInitializer
   */
  public function getInitializer(): ?SimpleInitializer {
    if ($this->initializer->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(SimpleInitializer::class, $this->initializer);
  }

  /**
   * @returns SimpleInitializer
   */
  public function getInitializerx(): SimpleInitializer {
    return TypeAssert\instance_of(SimpleInitializer::class, $this->initializer);
  }

  final public function getRequiredUNTYPED(): EditableNode {
    return $this->required;
  }

  public function withRequired(?XHPRequired $value): this {
    if ($value === $this->required) {
      return $this;
    }
    return new static($this->type, $this->name, $this->initializer, $value);
  }

  public function hasRequired(): bool {
    return $this->required !== null;
  }

  /**
   * @returns Missing | XHPRequired
   */
  public function getRequired(): ?XHPRequired {
    if ($this->required->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(XHPRequired::class, $this->required);
  }

  /**
   * @returns XHPRequired
   */
  public function getRequiredx(): XHPRequired {
    return TypeAssert\instance_of(XHPRequired::class, $this->required);
  }
}
