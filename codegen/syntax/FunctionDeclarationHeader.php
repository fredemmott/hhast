<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<0c69d8d4079f76d9178c154592727f9a>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class FunctionDeclarationHeader extends EditableNode {

  public function __construct(
    private ?EditableList<EditableNode> $modifiers,
    private ?FunctionToken $keyword,
    private ?AmpersandToken $ampersand,
    private EditableToken $name,
    private ?TypeParameters $typeParameterList,
    private ?LeftParenToken $leftParen,
    private ?EditableList<EditableNode> $parameterList,
    private ?RightParenToken $rightParen,
    private ?ColonToken $colon,
    private ?EditableNode $type,
    private ?WhereClause $whereClause,
  ) {
    parent::__construct('function_declaration_header');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $modifiers = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['function_modifiers'],
      $file,
      $offset,
      $source,
    );
    $offset += $modifiers->getWidth();
    $keyword = FunctionToken::fromJSON(
      /* UNSAFE_EXPR */ $json['function_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $ampersand = AmpersandToken::fromJSON(
      /* UNSAFE_EXPR */ $json['function_ampersand'],
      $file,
      $offset,
      $source,
    );
    $offset += $ampersand->getWidth();
    $name = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['function_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $type_parameter_list = TypeParameters::fromJSON(
      /* UNSAFE_EXPR */ $json['function_type_parameter_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $type_parameter_list->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['function_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $parameter_list = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['function_parameter_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $parameter_list->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['function_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['function_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['function_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $where_clause = WhereClause::fromJSON(
      /* UNSAFE_EXPR */ $json['function_where_clause'],
      $file,
      $offset,
      $source,
    );
    $offset += $where_clause->getWidth();
    return new static(
      $modifiers,
      $keyword,
      $ampersand,
      $name,
      $type_parameter_list,
      $left_paren,
      $parameter_list,
      $right_paren,
      $colon,
      $type,
      $where_clause,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'modifiers' => $this->modifiers,
      'keyword' => $this->keyword,
      'ampersand' => $this->ampersand,
      'name' => $this->name,
      'type_parameter_list' => $this->typeParameterList,
      'left_paren' => $this->leftParen,
      'parameter_list' => $this->parameterList,
      'right_paren' => $this->rightParen,
      'colon' => $this->colon,
      'type' => $this->type,
      'where_clause' => $this->whereClause,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $modifiers = $this->modifiers?->rewrite($rewriter, $parents);
    $keyword = $this->keyword?->rewrite($rewriter, $parents);
    $ampersand = $this->ampersand?->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    $type_parameter_list =
      $this->typeParameterList?->rewrite($rewriter, $parents);
    $left_paren = $this->leftParen?->rewrite($rewriter, $parents);
    $parameter_list = $this->parameterList?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen?->rewrite($rewriter, $parents);
    $colon = $this->colon?->rewrite($rewriter, $parents);
    $type = $this->type?->rewrite($rewriter, $parents);
    $where_clause = $this->whereClause?->rewrite($rewriter, $parents);
    if (
      $modifiers === $this->modifiers &&
      $keyword === $this->keyword &&
      $ampersand === $this->ampersand &&
      $name === $this->name &&
      $type_parameter_list === $this->typeParameterList &&
      $left_paren === $this->leftParen &&
      $parameter_list === $this->parameterList &&
      $right_paren === $this->rightParen &&
      $colon === $this->colon &&
      $type === $this->type &&
      $where_clause === $this->whereClause
    ) {
      return $this;
    }
    return new static(
      $modifiers,
      $keyword,
      $ampersand,
      $name,
      $type_parameter_list,
      $left_paren,
      $parameter_list,
      $right_paren,
      $colon,
      $type,
      $where_clause,
    );
  }

  final public function getModifiersUNTYPED(): EditableNode {
    return $this->modifiers;
  }

  public function withModifiers(?EditableList<EditableNode> $value): this {
    if ($value === $this->modifiers) {
      return $this;
    }
    return new static(
      $value,
      $this->keyword,
      $this->ampersand,
      $this->name,
      $this->type_parameter_list,
      $this->left_paren,
      $this->parameter_list,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->where_clause,
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

  public function withKeyword(?FunctionToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $this->modifiers,
      $value,
      $this->ampersand,
      $this->name,
      $this->type_parameter_list,
      $this->left_paren,
      $this->parameter_list,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->where_clause,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns Missing | FunctionToken
   */
  public function getKeyword(): ?FunctionToken {
    if ($this->keyword->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(FunctionToken::class, $this->keyword);
  }

  /**
   * @returns FunctionToken
   */
  public function getKeywordx(): FunctionToken {
    return TypeAssert\instance_of(FunctionToken::class, $this->keyword);
  }

  final public function getAmpersandUNTYPED(): EditableNode {
    return $this->ampersand;
  }

  public function withAmpersand(?AmpersandToken $value): this {
    if ($value === $this->ampersand) {
      return $this;
    }
    return new static(
      $this->modifiers,
      $this->keyword,
      $value,
      $this->name,
      $this->type_parameter_list,
      $this->left_paren,
      $this->parameter_list,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->where_clause,
    );
  }

  public function hasAmpersand(): bool {
    return $this->ampersand !== null;
  }

  /**
   * @returns Missing | AmpersandToken
   */
  public function getAmpersand(): ?AmpersandToken {
    if ($this->ampersand->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(AmpersandToken::class, $this->ampersand);
  }

  /**
   * @returns AmpersandToken
   */
  public function getAmpersandx(): AmpersandToken {
    return TypeAssert\instance_of(AmpersandToken::class, $this->ampersand);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(EditableToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static(
      $this->modifiers,
      $this->keyword,
      $this->ampersand,
      $value,
      $this->type_parameter_list,
      $this->left_paren,
      $this->parameter_list,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->where_clause,
    );
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns ConstructToken | DestructToken | NameToken
   */
  public function getName(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->name);
  }

  /**
   * @returns ConstructToken | DestructToken | NameToken
   */
  public function getNamex(): EditableToken {
    return $this->getName();
  }

  final public function getTypeParameterListUNTYPED(): EditableNode {
    return $this->typeParameterList;
  }

  public function withTypeParameterList(?TypeParameters $value): this {
    if ($value === $this->typeParameterList) {
      return $this;
    }
    return new static(
      $this->modifiers,
      $this->keyword,
      $this->ampersand,
      $this->name,
      $value,
      $this->left_paren,
      $this->parameter_list,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->where_clause,
    );
  }

  public function hasTypeParameterList(): bool {
    return $this->typeParameterList !== null;
  }

  /**
   * @returns Missing | TypeParameters
   */
  public function getTypeParameterList(): ?TypeParameters {
    if ($this->typeParameterList->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(TypeParameters::class, $this->typeParameterList);
  }

  /**
   * @returns TypeParameters
   */
  public function getTypeParameterListx(): TypeParameters {
    return
      TypeAssert\instance_of(TypeParameters::class, $this->typeParameterList);
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(?LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static(
      $this->modifiers,
      $this->keyword,
      $this->ampersand,
      $this->name,
      $this->type_parameter_list,
      $value,
      $this->parameter_list,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->where_clause,
    );
  }

  public function hasLeftParen(): bool {
    return $this->leftParen !== null;
  }

  /**
   * @returns Missing | LeftParenToken
   */
  public function getLeftParen(): ?LeftParenToken {
    if ($this->leftParen->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParenx(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  final public function getParameterListUNTYPED(): EditableNode {
    return $this->parameterList;
  }

  public function withParameterList(?EditableList<EditableNode> $value): this {
    if ($value === $this->parameterList) {
      return $this;
    }
    return new static(
      $this->modifiers,
      $this->keyword,
      $this->ampersand,
      $this->name,
      $this->type_parameter_list,
      $this->left_paren,
      $value,
      $this->right_paren,
      $this->colon,
      $this->type,
      $this->where_clause,
    );
  }

  public function hasParameterList(): bool {
    return $this->parameterList !== null;
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<ParameterDeclaration> |
   * EditableList<VariadicParameter> | Missing
   */
  public function getParameterList(): ?EditableList<EditableNode> {
    if ($this->parameterList->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->parameterList);
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<ParameterDeclaration> |
   * EditableList<VariadicParameter>
   */
  public function getParameterListx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->parameterList);
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(?RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static(
      $this->modifiers,
      $this->keyword,
      $this->ampersand,
      $this->name,
      $this->type_parameter_list,
      $this->left_paren,
      $this->parameter_list,
      $value,
      $this->colon,
      $this->type,
      $this->where_clause,
    );
  }

  public function hasRightParen(): bool {
    return $this->rightParen !== null;
  }

  /**
   * @returns Missing | RightParenToken
   */
  public function getRightParen(): ?RightParenToken {
    if ($this->rightParen->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParenx(): RightParenToken {
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(?ColonToken $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static(
      $this->modifiers,
      $this->keyword,
      $this->ampersand,
      $this->name,
      $this->type_parameter_list,
      $this->left_paren,
      $this->parameter_list,
      $this->right_paren,
      $value,
      $this->type,
      $this->where_clause,
    );
  }

  public function hasColon(): bool {
    return $this->colon !== null;
  }

  /**
   * @returns Missing | ColonToken
   */
  public function getColon(): ?ColonToken {
    if ($this->colon->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(ColonToken::class, $this->colon);
  }

  /**
   * @returns ColonToken
   */
  public function getColonx(): ColonToken {
    return TypeAssert\instance_of(ColonToken::class, $this->colon);
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(?EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static(
      $this->modifiers,
      $this->keyword,
      $this->ampersand,
      $this->name,
      $this->type_parameter_list,
      $this->left_paren,
      $this->parameter_list,
      $this->right_paren,
      $this->colon,
      $value,
      $this->where_clause,
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
   * SoftTypeSpecifier | NoreturnToken | TupleTypeSpecifier | TypeConstant |
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
   * NoreturnToken | TupleTypeSpecifier | TypeConstant | VarrayTypeSpecifier |
   * VectorArrayTypeSpecifier | VectorTypeSpecifier
   */
  public function getTypex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  final public function getWhereClauseUNTYPED(): EditableNode {
    return $this->whereClause;
  }

  public function withWhereClause(?WhereClause $value): this {
    if ($value === $this->whereClause) {
      return $this;
    }
    return new static(
      $this->modifiers,
      $this->keyword,
      $this->ampersand,
      $this->name,
      $this->type_parameter_list,
      $this->left_paren,
      $this->parameter_list,
      $this->right_paren,
      $this->colon,
      $this->type,
      $value,
    );
  }

  public function hasWhereClause(): bool {
    return $this->whereClause !== null;
  }

  /**
   * @returns Missing | WhereClause
   */
  public function getWhereClause(): ?WhereClause {
    if ($this->whereClause->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(WhereClause::class, $this->whereClause);
  }

  /**
   * @returns WhereClause
   */
  public function getWhereClausex(): WhereClause {
    return TypeAssert\instance_of(WhereClause::class, $this->whereClause);
  }
}
