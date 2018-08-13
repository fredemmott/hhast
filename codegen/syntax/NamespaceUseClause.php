<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<f47b08756687b1a10da576c35f5ca921>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class NamespaceUseClause extends EditableNode {

  public function __construct(
    private ?EditableToken $clauseKind,
    private EditableNode $name,
    private ?AsToken $as,
    private ?NameToken $alias,
  ) {
    parent::__construct('namespace_use_clause');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $clause_kind = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_use_clause_kind'],
      $file,
      $offset,
      $source,
    );
    $offset += $clause_kind->getWidth();
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_use_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $as = AsToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_use_as'],
      $file,
      $offset,
      $source,
    );
    $offset += $as->getWidth();
    $alias = NameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_use_alias'],
      $file,
      $offset,
      $source,
    );
    $offset += $alias->getWidth();
    return new static($clause_kind, $name, $as, $alias);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'clause_kind' => $this->clauseKind,
      'name' => $this->name,
      'as' => $this->as,
      'alias' => $this->alias,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $clause_kind = $this->clauseKind?->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    $as = $this->as?->rewrite($rewriter, $parents);
    $alias = $this->alias?->rewrite($rewriter, $parents);
    if (
      $clause_kind === $this->clauseKind &&
      $name === $this->name &&
      $as === $this->as &&
      $alias === $this->alias
    ) {
      return $this;
    }
    return new static($clause_kind, $name, $as, $alias);
  }

  final public function getClauseKindUNTYPED(): EditableNode {
    return $this->clauseKind;
  }

  public function withClauseKind(?EditableToken $value): this {
    if ($value === $this->clauseKind) {
      return $this;
    }
    return new static($value, $this->name, $this->as, $this->alias);
  }

  public function hasClauseKind(): bool {
    return $this->clauseKind !== null;
  }

  /**
   * @returns Missing | ConstToken | FunctionToken
   */
  public function getClauseKind(): ?EditableToken {
    if ($this->clauseKind->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableToken::class, $this->clauseKind);
  }

  /**
   * @returns ConstToken | FunctionToken
   */
  public function getClauseKindx(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->clauseKind);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(EditableNode $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($this->clause_kind, $value, $this->as, $this->alias);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns QualifiedName | NameToken
   */
  public function getName(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  /**
   * @returns QualifiedName | NameToken
   */
  public function getNamex(): EditableNode {
    return $this->getName();
  }

  final public function getAsUNTYPED(): EditableNode {
    return $this->as;
  }

  public function withAs(?AsToken $value): this {
    if ($value === $this->as) {
      return $this;
    }
    return new static($this->clause_kind, $this->name, $value, $this->alias);
  }

  public function hasAs(): bool {
    return $this->as !== null;
  }

  /**
   * @returns Missing | AsToken
   */
  public function getAs(): ?AsToken {
    if ($this->as->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(AsToken::class, $this->as);
  }

  /**
   * @returns AsToken
   */
  public function getAsx(): AsToken {
    return TypeAssert\instance_of(AsToken::class, $this->as);
  }

  final public function getAliasUNTYPED(): EditableNode {
    return $this->alias;
  }

  public function withAlias(?NameToken $value): this {
    if ($value === $this->alias) {
      return $this;
    }
    return new static($this->clause_kind, $this->name, $this->as, $value);
  }

  public function hasAlias(): bool {
    return $this->alias !== null;
  }

  /**
   * @returns Missing | NameToken
   */
  public function getAlias(): ?NameToken {
    if ($this->alias->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(NameToken::class, $this->alias);
  }

  /**
   * @returns NameToken
   */
  public function getAliasx(): NameToken {
    return TypeAssert\instance_of(NameToken::class, $this->alias);
  }
}
