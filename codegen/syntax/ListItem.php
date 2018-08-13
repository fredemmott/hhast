<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<7f5726ace552f9e2df1a6fa6a1ffa309>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ListItem extends EditableNode {

  public function __construct(
    private ?EditableNode $item,
    private ?EditableToken $separator,
  ) {
    parent::__construct('list_item');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $item = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['list_item'],
      $file,
      $offset,
      $source,
    );
    $offset += $item->getWidth();
    $separator = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['list_separator'],
      $file,
      $offset,
      $source,
    );
    $offset += $separator->getWidth();
    return new static($item, $separator);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'item' => $this->item,
      'separator' => $this->separator,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $item = $this->item?->rewrite($rewriter, $parents);
    $separator = $this->separator?->rewrite($rewriter, $parents);
    if ($item === $this->item && $separator === $this->separator) {
      return $this;
    }
    return new static($item, $separator);
  }

  final public function getItemUNTYPED(): EditableNode {
    return $this->item;
  }

  public function withItem(?EditableNode $value): this {
    if ($value === $this->item) {
      return $this;
    }
    return new static($value, $this->separator);
  }

  public function hasItem(): bool {
    return $this->item !== null;
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | Attribute | AwaitableCreationExpression |
   * BinaryExpression | CastExpression | ClassnameTypeSpecifier |
   * ClosureParameterTypeSpecifier | ClosureTypeSpecifier |
   * CollectionLiteralExpression | ConditionalExpression | ConstantDeclarator |
   * DarrayIntrinsicExpression | DecoratedExpression | DefineExpression |
   * DictionaryIntrinsicExpression | DictionaryTypeSpecifier |
   * ElementInitializer | EmptyExpression | EvalExpression | FieldInitializer |
   * FieldSpecifier | FunctionCallExpression | GenericTypeSpecifier |
   * InclusionExpression | InstanceofExpression | IssetExpression |
   * KeysetIntrinsicExpression | LambdaExpression | ListExpression |
   * LiteralExpression | MapArrayTypeSpecifier | MemberSelectionExpression |
   * Missing | NamespaceUseClause | NullableTypeSpecifier |
   * ObjectCreationExpression | ParameterDeclaration | ParenthesizedExpression
   * | PipeVariableExpression | PostfixUnaryExpression | PrefixUnaryExpression
   * | PropertyDeclarator | QualifiedName | SafeMemberSelectionExpression |
   * ScopeResolutionExpression | ShapeExpression | ShapeTypeSpecifier |
   * SimpleTypeSpecifier | StaticDeclarator | SubscriptExpression | EqualToken
   * | XHPCategoryNameToken | NameToken | NoreturnToken | VariableToken |
   * TraitUseAliasItem | TraitUsePrecedenceItem | TupleExpression |
   * TupleTypeSpecifier | TypeConstant | TypeParameter | VariableExpression |
   * VariadicParameter | VarrayIntrinsicExpression | VarrayTypeSpecifier |
   * VectorArrayTypeSpecifier | VectorIntrinsicExpression | VectorTypeSpecifier
   * | WhereConstraint | XHPClassAttribute | XHPExpression |
   * XHPSimpleClassAttribute
   */
  public function getItem(): ?EditableNode {
    if ($this->item->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->item);
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | Attribute | AwaitableCreationExpression |
   * BinaryExpression | CastExpression | ClassnameTypeSpecifier |
   * ClosureParameterTypeSpecifier | ClosureTypeSpecifier |
   * CollectionLiteralExpression | ConditionalExpression | ConstantDeclarator |
   * DarrayIntrinsicExpression | DecoratedExpression | DefineExpression |
   * DictionaryIntrinsicExpression | DictionaryTypeSpecifier |
   * ElementInitializer | EmptyExpression | EvalExpression | FieldInitializer |
   * FieldSpecifier | FunctionCallExpression | GenericTypeSpecifier |
   * InclusionExpression | InstanceofExpression | IssetExpression |
   * KeysetIntrinsicExpression | LambdaExpression | ListExpression |
   * LiteralExpression | MapArrayTypeSpecifier | MemberSelectionExpression |
   * NamespaceUseClause | NullableTypeSpecifier | ObjectCreationExpression |
   * ParameterDeclaration | ParenthesizedExpression | PipeVariableExpression |
   * PostfixUnaryExpression | PrefixUnaryExpression | PropertyDeclarator |
   * QualifiedName | SafeMemberSelectionExpression | ScopeResolutionExpression
   * | ShapeExpression | ShapeTypeSpecifier | SimpleTypeSpecifier |
   * StaticDeclarator | SubscriptExpression | EqualToken | XHPCategoryNameToken
   * | NameToken | NoreturnToken | VariableToken | TraitUseAliasItem |
   * TraitUsePrecedenceItem | TupleExpression | TupleTypeSpecifier |
   * TypeConstant | TypeParameter | VariableExpression | VariadicParameter |
   * VarrayIntrinsicExpression | VarrayTypeSpecifier | VectorArrayTypeSpecifier
   * | VectorIntrinsicExpression | VectorTypeSpecifier | WhereConstraint |
   * XHPClassAttribute | XHPExpression | XHPSimpleClassAttribute
   */
  public function getItemx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->item);
  }

  final public function getSeparatorUNTYPED(): EditableNode {
    return $this->separator;
  }

  public function withSeparator(?EditableToken $value): this {
    if ($value === $this->separator) {
      return $this;
    }
    return new static($this->item, $value);
  }

  public function hasSeparator(): bool {
    return $this->separator !== null;
  }

  /**
   * @returns Missing | CommaToken | SemicolonToken | BackslashToken
   */
  public function getSeparator(): ?EditableToken {
    if ($this->separator->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableToken::class, $this->separator);
  }

  /**
   * @returns CommaToken | SemicolonToken | BackslashToken
   */
  public function getSeparatorx(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->separator);
  }
}
