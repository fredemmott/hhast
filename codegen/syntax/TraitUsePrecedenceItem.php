<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<8006e5d08de7cad69142832d361d2fdc>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TraitUsePrecedenceItem extends EditableNode {

  public function __construct(
    private ScopeResolutionExpression $name,
    private InsteadofToken $keyword,
    private EditableList<SimpleTypeSpecifier> $removedNames,
  ) {
    parent::__construct('trait_use_precedence_item');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $name = ScopeResolutionExpression::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_precedence_item_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $keyword = InsteadofToken::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_precedence_item_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $removed_names = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['trait_use_precedence_item_removed_names'],
      $file,
      $offset,
      $source,
    );
    $offset += $removed_names->getWidth();
    return new static($name, $keyword, $removed_names);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'name' => $this->name,
      'keyword' => $this->keyword,
      'removed_names' => $this->removedNames,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $name = $this->name->rewrite($rewriter, $parents);
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $removed_names = $this->removedNames->rewrite($rewriter, $parents);
    if (
      $name === $this->name &&
      $keyword === $this->keyword &&
      $removed_names === $this->removedNames
    ) {
      return $this;
    }
    return new static($name, $keyword, $removed_names);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(ScopeResolutionExpression $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($value, $this->keyword, $this->removed_names);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns ScopeResolutionExpression
   */
  public function getName(): ScopeResolutionExpression {
    return
      TypeAssert\instance_of(ScopeResolutionExpression::class, $this->name);
  }

  /**
   * @returns ScopeResolutionExpression
   */
  public function getNamex(): ScopeResolutionExpression {
    return $this->getName();
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(InsteadofToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($this->name, $value, $this->removed_names);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns InsteadofToken
   */
  public function getKeyword(): InsteadofToken {
    return TypeAssert\instance_of(InsteadofToken::class, $this->keyword);
  }

  /**
   * @returns InsteadofToken
   */
  public function getKeywordx(): InsteadofToken {
    return $this->getKeyword();
  }

  final public function getRemovedNamesUNTYPED(): EditableNode {
    return $this->removedNames;
  }

  public function withRemovedNames(
    EditableList<SimpleTypeSpecifier> $value,
  ): this {
    if ($value === $this->removedNames) {
      return $this;
    }
    return new static($this->name, $this->keyword, $value);
  }

  public function hasRemovedNames(): bool {
    return $this->removedNames !== null;
  }

  /**
   * @returns EditableList<SimpleTypeSpecifier>
   */
  public function getRemovedNames(): EditableList<SimpleTypeSpecifier> {
    return TypeAssert\instance_of(EditableList::class, $this->removedNames);
  }

  /**
   * @returns EditableList<SimpleTypeSpecifier>
   */
  public function getRemovedNamesx(): EditableList<SimpleTypeSpecifier> {
    return $this->getRemovedNames();
  }
}
