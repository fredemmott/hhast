<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<6b157683d92661f454f132bd04324d43>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TypeConstDeclaration extends EditableNode {

  public function __construct(
    private ?AbstractToken $abstract,
    private ConstToken $keyword,
    private TypeToken $typeKeyword,
    private NameToken $name,
    private ?EditableNode $typeParameters,
    private ?TypeConstraint $typeConstraint,
    private ?EqualToken $equal,
    private ?EditableNode $typeSpecifier,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('type_const_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $abstract = AbstractToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_abstract'],
      $file,
      $offset,
      $source,
    );
    $offset += $abstract->getWidth();
    $keyword = ConstToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $type_keyword = TypeToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_type_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $type_keyword->getWidth();
    $name = NameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $type_parameters = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_type_parameters'],
      $file,
      $offset,
      $source,
    );
    $offset += $type_parameters->getWidth();
    $type_constraint = TypeConstraint::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_type_constraint'],
      $file,
      $offset,
      $source,
    );
    $offset += $type_constraint->getWidth();
    $equal = EqualToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_equal'],
      $file,
      $offset,
      $source,
    );
    $offset += $equal->getWidth();
    $type_specifier = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_type_specifier'],
      $file,
      $offset,
      $source,
    );
    $offset += $type_specifier->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_const_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static(
      $abstract,
      $keyword,
      $type_keyword,
      $name,
      $type_parameters,
      $type_constraint,
      $equal,
      $type_specifier,
      $semicolon,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'abstract' => $this->abstract,
      'keyword' => $this->keyword,
      'type_keyword' => $this->typeKeyword,
      'name' => $this->name,
      'type_parameters' => $this->typeParameters,
      'type_constraint' => $this->typeConstraint,
      'equal' => $this->equal,
      'type_specifier' => $this->typeSpecifier,
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
    $abstract = $this->abstract?->rewrite($rewriter, $parents);
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $type_keyword = $this->typeKeyword->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    $type_parameters = $this->typeParameters?->rewrite($rewriter, $parents);
    $type_constraint = $this->typeConstraint?->rewrite($rewriter, $parents);
    $equal = $this->equal?->rewrite($rewriter, $parents);
    $type_specifier = $this->typeSpecifier?->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $abstract === $this->abstract &&
      $keyword === $this->keyword &&
      $type_keyword === $this->typeKeyword &&
      $name === $this->name &&
      $type_parameters === $this->typeParameters &&
      $type_constraint === $this->typeConstraint &&
      $equal === $this->equal &&
      $type_specifier === $this->typeSpecifier &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static(
      $abstract,
      $keyword,
      $type_keyword,
      $name,
      $type_parameters,
      $type_constraint,
      $equal,
      $type_specifier,
      $semicolon,
    );
  }

  final public function getAbstractUNTYPED(): EditableNode {
    return $this->abstract;
  }

  public function withAbstract(?AbstractToken $value): this {
    if ($value === $this->abstract) {
      return $this;
    }
    return new static(
      $value,
      $this->keyword,
      $this->type_keyword,
      $this->name,
      $this->type_parameters,
      $this->type_constraint,
      $this->equal,
      $this->type_specifier,
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
      $this->abstract,
      $value,
      $this->type_keyword,
      $this->name,
      $this->type_parameters,
      $this->type_constraint,
      $this->equal,
      $this->type_specifier,
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

  final public function getTypeKeywordUNTYPED(): EditableNode {
    return $this->typeKeyword;
  }

  public function withTypeKeyword(TypeToken $value): this {
    if ($value === $this->typeKeyword) {
      return $this;
    }
    return new static(
      $this->abstract,
      $this->keyword,
      $value,
      $this->name,
      $this->type_parameters,
      $this->type_constraint,
      $this->equal,
      $this->type_specifier,
      $this->semicolon,
    );
  }

  public function hasTypeKeyword(): bool {
    return $this->typeKeyword !== null;
  }

  /**
   * @returns TypeToken
   */
  public function getTypeKeyword(): TypeToken {
    return TypeAssert\instance_of(TypeToken::class, $this->typeKeyword);
  }

  /**
   * @returns TypeToken
   */
  public function getTypeKeywordx(): TypeToken {
    return $this->getTypeKeyword();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(NameToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static(
      $this->abstract,
      $this->keyword,
      $this->type_keyword,
      $value,
      $this->type_parameters,
      $this->type_constraint,
      $this->equal,
      $this->type_specifier,
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

  final public function getTypeParametersUNTYPED(): EditableNode {
    return $this->typeParameters;
  }

  public function withTypeParameters(?EditableNode $value): this {
    if ($value === $this->typeParameters) {
      return $this;
    }
    return new static(
      $this->abstract,
      $this->keyword,
      $this->type_keyword,
      $this->name,
      $value,
      $this->type_constraint,
      $this->equal,
      $this->type_specifier,
      $this->semicolon,
    );
  }

  public function hasTypeParameters(): bool {
    return $this->typeParameters !== null;
  }

  /**
   * @returns Missing
   */
  public function getTypeParameters(): ?EditableNode {
    if ($this->typeParameters->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->typeParameters);
  }

  /**
   * @returns
   */
  public function getTypeParametersx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->typeParameters);
  }

  final public function getTypeConstraintUNTYPED(): EditableNode {
    return $this->typeConstraint;
  }

  public function withTypeConstraint(?TypeConstraint $value): this {
    if ($value === $this->typeConstraint) {
      return $this;
    }
    return new static(
      $this->abstract,
      $this->keyword,
      $this->type_keyword,
      $this->name,
      $this->type_parameters,
      $value,
      $this->equal,
      $this->type_specifier,
      $this->semicolon,
    );
  }

  public function hasTypeConstraint(): bool {
    return $this->typeConstraint !== null;
  }

  /**
   * @returns Missing | TypeConstraint
   */
  public function getTypeConstraint(): ?TypeConstraint {
    if ($this->typeConstraint->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(TypeConstraint::class, $this->typeConstraint);
  }

  /**
   * @returns TypeConstraint
   */
  public function getTypeConstraintx(): TypeConstraint {
    return TypeAssert\instance_of(TypeConstraint::class, $this->typeConstraint);
  }

  final public function getEqualUNTYPED(): EditableNode {
    return $this->equal;
  }

  public function withEqual(?EqualToken $value): this {
    if ($value === $this->equal) {
      return $this;
    }
    return new static(
      $this->abstract,
      $this->keyword,
      $this->type_keyword,
      $this->name,
      $this->type_parameters,
      $this->type_constraint,
      $value,
      $this->type_specifier,
      $this->semicolon,
    );
  }

  public function hasEqual(): bool {
    return $this->equal !== null;
  }

  /**
   * @returns Missing | EqualToken
   */
  public function getEqual(): ?EqualToken {
    if ($this->equal->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EqualToken::class, $this->equal);
  }

  /**
   * @returns EqualToken
   */
  public function getEqualx(): EqualToken {
    return TypeAssert\instance_of(EqualToken::class, $this->equal);
  }

  final public function getTypeSpecifierUNTYPED(): EditableNode {
    return $this->typeSpecifier;
  }

  public function withTypeSpecifier(?EditableNode $value): this {
    if ($value === $this->typeSpecifier) {
      return $this;
    }
    return new static(
      $this->abstract,
      $this->keyword,
      $this->type_keyword,
      $this->name,
      $this->type_parameters,
      $this->type_constraint,
      $this->equal,
      $value,
      $this->semicolon,
    );
  }

  public function hasTypeSpecifier(): bool {
    return $this->typeSpecifier !== null;
  }

  /**
   * @returns ClosureTypeSpecifier | DictionaryTypeSpecifier |
   * GenericTypeSpecifier | KeysetTypeSpecifier | Missing |
   * NullableTypeSpecifier | ShapeTypeSpecifier | SimpleTypeSpecifier |
   * TupleTypeSpecifier | TypeConstant | VectorTypeSpecifier
   */
  public function getTypeSpecifier(): ?EditableNode {
    if ($this->typeSpecifier->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->typeSpecifier);
  }

  /**
   * @returns ClosureTypeSpecifier | DictionaryTypeSpecifier |
   * GenericTypeSpecifier | KeysetTypeSpecifier | NullableTypeSpecifier |
   * ShapeTypeSpecifier | SimpleTypeSpecifier | TupleTypeSpecifier |
   * TypeConstant | VectorTypeSpecifier
   */
  public function getTypeSpecifierx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->typeSpecifier);
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static(
      $this->abstract,
      $this->keyword,
      $this->type_keyword,
      $this->name,
      $this->type_parameters,
      $this->type_constraint,
      $this->equal,
      $this->type_specifier,
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
