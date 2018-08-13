<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<35dd3f31a92b2ff0f4bec4649262f68a>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ClassishDeclaration extends EditableNode {

  public function __construct(
    private ?AttributeSpecification $attribute,
    private ?EditableList<EditableNode> $modifiers,
    private EditableToken $keyword,
    private EditableToken $name,
    private ?TypeParameters $typeParameters,
    private ?ExtendsToken $extendsKeyword,
    private ?EditableList<EditableNode> $extendsList,
    private ?ImplementsToken $implementsKeyword,
    private ?EditableList<EditableNode> $implementsList,
    private ClassishBody $body,
  ) {
    parent::__construct('classish_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute = AttributeSpecification::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_attribute'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute->getWidth();
    $modifiers = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_modifiers'],
      $file,
      $offset,
      $source,
    );
    $offset += $modifiers->getWidth();
    $keyword = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $name = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $type_parameters = TypeParameters::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_type_parameters'],
      $file,
      $offset,
      $source,
    );
    $offset += $type_parameters->getWidth();
    $extends_keyword = ExtendsToken::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_extends_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $extends_keyword->getWidth();
    $extends_list = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_extends_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $extends_list->getWidth();
    $implements_keyword = ImplementsToken::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_implements_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $implements_keyword->getWidth();
    $implements_list = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_implements_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $implements_list->getWidth();
    $body = ClassishBody::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static(
      $attribute,
      $modifiers,
      $keyword,
      $name,
      $type_parameters,
      $extends_keyword,
      $extends_list,
      $implements_keyword,
      $implements_list,
      $body,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'attribute' => $this->attribute,
      'modifiers' => $this->modifiers,
      'keyword' => $this->keyword,
      'name' => $this->name,
      'type_parameters' => $this->typeParameters,
      'extends_keyword' => $this->extendsKeyword,
      'extends_list' => $this->extendsList,
      'implements_keyword' => $this->implementsKeyword,
      'implements_list' => $this->implementsList,
      'body' => $this->body,
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
    $modifiers = $this->modifiers?->rewrite($rewriter, $parents);
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    $type_parameters = $this->typeParameters?->rewrite($rewriter, $parents);
    $extends_keyword = $this->extendsKeyword?->rewrite($rewriter, $parents);
    $extends_list = $this->extendsList?->rewrite($rewriter, $parents);
    $implements_keyword =
      $this->implementsKeyword?->rewrite($rewriter, $parents);
    $implements_list = $this->implementsList?->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $attribute === $this->attribute &&
      $modifiers === $this->modifiers &&
      $keyword === $this->keyword &&
      $name === $this->name &&
      $type_parameters === $this->typeParameters &&
      $extends_keyword === $this->extendsKeyword &&
      $extends_list === $this->extendsList &&
      $implements_keyword === $this->implementsKeyword &&
      $implements_list === $this->implementsList &&
      $body === $this->body
    ) {
      return $this;
    }
    return new static(
      $attribute,
      $modifiers,
      $keyword,
      $name,
      $type_parameters,
      $extends_keyword,
      $extends_list,
      $implements_keyword,
      $implements_list,
      $body,
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
      $this->modifiers,
      $this->keyword,
      $this->name,
      $this->type_parameters,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
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

  final public function getModifiersUNTYPED(): EditableNode {
    return $this->modifiers;
  }

  public function withModifiers(?EditableList<EditableNode> $value): this {
    if ($value === $this->modifiers) {
      return $this;
    }
    return new static(
      $this->attribute,
      $value,
      $this->keyword,
      $this->name,
      $this->type_parameters,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasModifiers(): bool {
    return $this->modifiers !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getModifiers(): ?EditableList<EditableNode> {
    if ($this->modifiers->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->modifiers);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getModifiersx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->modifiers);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(EditableToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->modifiers,
      $value,
      $this->name,
      $this->type_parameters,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns ClassToken | InterfaceToken | TraitToken
   */
  public function getKeyword(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->keyword);
  }

  /**
   * @returns ClassToken | InterfaceToken | TraitToken
   */
  public function getKeywordx(): EditableToken {
    return $this->getKeyword();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(EditableToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->modifiers,
      $this->keyword,
      $value,
      $this->type_parameters,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns XHPClassNameToken | NameToken
   */
  public function getName(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->name);
  }

  /**
   * @returns XHPClassNameToken | NameToken
   */
  public function getNamex(): EditableToken {
    return $this->getName();
  }

  final public function getTypeParametersUNTYPED(): EditableNode {
    return $this->typeParameters;
  }

  public function withTypeParameters(?TypeParameters $value): this {
    if ($value === $this->typeParameters) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->modifiers,
      $this->keyword,
      $this->name,
      $value,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasTypeParameters(): bool {
    return $this->typeParameters !== null;
  }

  /**
   * @returns Missing | TypeParameters
   */
  public function getTypeParameters(): ?TypeParameters {
    if ($this->typeParameters->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(TypeParameters::class, $this->typeParameters);
  }

  /**
   * @returns TypeParameters
   */
  public function getTypeParametersx(): TypeParameters {
    return TypeAssert\instance_of(TypeParameters::class, $this->typeParameters);
  }

  final public function getExtendsKeywordUNTYPED(): EditableNode {
    return $this->extendsKeyword;
  }

  public function withExtendsKeyword(?ExtendsToken $value): this {
    if ($value === $this->extendsKeyword) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->modifiers,
      $this->keyword,
      $this->name,
      $this->type_parameters,
      $value,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasExtendsKeyword(): bool {
    return $this->extendsKeyword !== null;
  }

  /**
   * @returns Missing | ExtendsToken
   */
  public function getExtendsKeyword(): ?ExtendsToken {
    if ($this->extendsKeyword->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(ExtendsToken::class, $this->extendsKeyword);
  }

  /**
   * @returns ExtendsToken
   */
  public function getExtendsKeywordx(): ExtendsToken {
    return TypeAssert\instance_of(ExtendsToken::class, $this->extendsKeyword);
  }

  final public function getExtendsListUNTYPED(): EditableNode {
    return $this->extendsList;
  }

  public function withExtendsList(?EditableList<EditableNode> $value): this {
    if ($value === $this->extendsList) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->modifiers,
      $this->keyword,
      $this->name,
      $this->type_parameters,
      $this->extends_keyword,
      $value,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasExtendsList(): bool {
    return $this->extendsList !== null;
  }

  /**
   * @returns EditableList<GenericTypeSpecifier> | EditableList<EditableNode> |
   * EditableList<Missing> | EditableList<SimpleTypeSpecifier> | Missing
   */
  public function getExtendsList(): ?EditableList<EditableNode> {
    if ($this->extendsList->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->extendsList);
  }

  /**
   * @returns EditableList<GenericTypeSpecifier> | EditableList<EditableNode> |
   * EditableList<Missing> | EditableList<SimpleTypeSpecifier>
   */
  public function getExtendsListx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->extendsList);
  }

  final public function getImplementsKeywordUNTYPED(): EditableNode {
    return $this->implementsKeyword;
  }

  public function withImplementsKeyword(?ImplementsToken $value): this {
    if ($value === $this->implementsKeyword) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->modifiers,
      $this->keyword,
      $this->name,
      $this->type_parameters,
      $this->extends_keyword,
      $this->extends_list,
      $value,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasImplementsKeyword(): bool {
    return $this->implementsKeyword !== null;
  }

  /**
   * @returns Missing | ImplementsToken
   */
  public function getImplementsKeyword(): ?ImplementsToken {
    if ($this->implementsKeyword->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(ImplementsToken::class, $this->implementsKeyword);
  }

  /**
   * @returns ImplementsToken
   */
  public function getImplementsKeywordx(): ImplementsToken {
    return
      TypeAssert\instance_of(ImplementsToken::class, $this->implementsKeyword);
  }

  final public function getImplementsListUNTYPED(): EditableNode {
    return $this->implementsList;
  }

  public function withImplementsList(?EditableList<EditableNode> $value): this {
    if ($value === $this->implementsList) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->modifiers,
      $this->keyword,
      $this->name,
      $this->type_parameters,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $value,
      $this->body,
    );
  }

  public function hasImplementsList(): bool {
    return $this->implementsList !== null;
  }

  /**
   * @returns EditableList<GenericTypeSpecifier> | EditableList<EditableNode> |
   * EditableList<Missing> | EditableList<SimpleTypeSpecifier> | Missing
   */
  public function getImplementsList(): ?EditableList<EditableNode> {
    if ($this->implementsList->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->implementsList);
  }

  /**
   * @returns EditableList<GenericTypeSpecifier> | EditableList<EditableNode> |
   * EditableList<Missing> | EditableList<SimpleTypeSpecifier>
   */
  public function getImplementsListx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->implementsList);
  }

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(ClassishBody $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->modifiers,
      $this->keyword,
      $this->name,
      $this->type_parameters,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $value,
    );
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns ClassishBody
   */
  public function getBody(): ClassishBody {
    return TypeAssert\instance_of(ClassishBody::class, $this->body);
  }

  /**
   * @returns ClassishBody
   */
  public function getBodyx(): ClassishBody {
    return $this->getBody();
  }
}
