<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<93c9e50e8399e9ab5517b4204519746c>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TraitUseAliasItem extends EditableNode {

  public function __construct(
    private EditableNode $aliasingName,
    private AsToken $keyword,
    private ?EditableList<EditableNode> $modifiers,
    private ?SimpleTypeSpecifier $aliasedName,
  ) {
    parent::__construct('trait_use_alias_item');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $aliasing_name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_alias_item_aliasing_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $aliasing_name->getWidth();
    $keyword = AsToken::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_alias_item_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $modifiers = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_alias_item_modifiers'],
      $file,
      $offset,
      $source,
    );
    $offset += $modifiers->getWidth();
    $aliased_name = SimpleTypeSpecifier::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_alias_item_aliased_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $aliased_name->getWidth();
    return new static($aliasing_name, $keyword, $modifiers, $aliased_name);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'aliasing_name' => $this->aliasingName,
      'keyword' => $this->keyword,
      'modifiers' => $this->modifiers,
      'aliased_name' => $this->aliasedName,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $aliasing_name = $this->aliasingName->rewrite($rewriter, $parents);
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $modifiers = $this->modifiers?->rewrite($rewriter, $parents);
    $aliased_name = $this->aliasedName?->rewrite($rewriter, $parents);
    if (
      $aliasing_name === $this->aliasingName &&
      $keyword === $this->keyword &&
      $modifiers === $this->modifiers &&
      $aliased_name === $this->aliasedName
    ) {
      return $this;
    }
    return new static($aliasing_name, $keyword, $modifiers, $aliased_name);
  }

  final public function getAliasingNameUNTYPED(): EditableNode {
    return $this->aliasingName;
  }

  public function withAliasingName(EditableNode $value): this {
    if ($value === $this->aliasingName) {
      return $this;
    }
    return
      new static($value, $this->keyword, $this->modifiers, $this->aliased_name);
  }

  public function hasAliasingName(): bool {
    return $this->aliasingName !== null;
  }

  /**
   * @returns ScopeResolutionExpression | SimpleTypeSpecifier
   */
  public function getAliasingName(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->aliasingName);
  }

  /**
   * @returns ScopeResolutionExpression | SimpleTypeSpecifier
   */
  public function getAliasingNamex(): EditableNode {
    return $this->getAliasingName();
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(AsToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $this->aliasing_name,
      $value,
      $this->modifiers,
      $this->aliased_name,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns AsToken
   */
  public function getKeyword(): AsToken {
    return TypeAssert\instance_of(AsToken::class, $this->keyword);
  }

  /**
   * @returns AsToken
   */
  public function getKeywordx(): AsToken {
    return $this->getKeyword();
  }

  final public function getModifiersUNTYPED(): EditableNode {
    return $this->modifiers;
  }

  public function withModifiers(?EditableList<EditableNode> $value): this {
    if ($value === $this->modifiers) {
      return $this;
    }
    return new static(
      $this->aliasing_name,
      $this->keyword,
      $value,
      $this->aliased_name,
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

  final public function getAliasedNameUNTYPED(): EditableNode {
    return $this->aliasedName;
  }

  public function withAliasedName(?SimpleTypeSpecifier $value): this {
    if ($value === $this->aliasedName) {
      return $this;
    }
    return new static(
      $this->aliasing_name,
      $this->keyword,
      $this->modifiers,
      $value,
    );
  }

  public function hasAliasedName(): bool {
    return $this->aliasedName !== null;
  }

  /**
   * @returns Missing | SimpleTypeSpecifier
   */
  public function getAliasedName(): ?SimpleTypeSpecifier {
    if ($this->aliasedName->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(SimpleTypeSpecifier::class, $this->aliasedName);
  }

  /**
   * @returns SimpleTypeSpecifier
   */
  public function getAliasedNamex(): SimpleTypeSpecifier {
    return
      TypeAssert\instance_of(SimpleTypeSpecifier::class, $this->aliasedName);
  }
}
