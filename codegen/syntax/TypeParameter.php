<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<282a1472d91fe7ca9575b75543cf5e85>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TypeParameter extends EditableNode {

  public function __construct(
    private ?EditableToken $variance,
    private NameToken $name,
    private ?EditableList<EditableNode> $constraints,
  ) {
    parent::__construct('type_parameter');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $variance = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_variance'],
      $file,
      $offset,
      $source,
    );
    $offset += $variance->getWidth();
    $name = NameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $constraints = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['type_constraints'],
      $file,
      $offset,
      $source,
    );
    $offset += $constraints->getWidth();
    return new static($variance, $name, $constraints);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'variance' => $this->variance,
      'name' => $this->name,
      'constraints' => $this->constraints,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $variance = $this->variance?->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    $constraints = $this->constraints?->rewrite($rewriter, $parents);
    if (
      $variance === $this->variance &&
      $name === $this->name &&
      $constraints === $this->constraints
    ) {
      return $this;
    }
    return new static($variance, $name, $constraints);
  }

  final public function getVarianceUNTYPED(): EditableNode {
    return $this->variance;
  }

  public function withVariance(?EditableToken $value): this {
    if ($value === $this->variance) {
      return $this;
    }
    return new static($value, $this->name, $this->constraints);
  }

  public function hasVariance(): bool {
    return $this->variance !== null;
  }

  /**
   * @returns Missing | PlusToken | MinusToken
   */
  public function getVariance(): ?EditableToken {
    if ($this->variance->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableToken::class, $this->variance);
  }

  /**
   * @returns PlusToken | MinusToken
   */
  public function getVariancex(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->variance);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(NameToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($this->variance, $value, $this->constraints);
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

  final public function getConstraintsUNTYPED(): EditableNode {
    return $this->constraints;
  }

  public function withConstraints(?EditableList<EditableNode> $value): this {
    if ($value === $this->constraints) {
      return $this;
    }
    return new static($this->variance, $this->name, $value);
  }

  public function hasConstraints(): bool {
    return $this->constraints !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getConstraints(): ?EditableList<EditableNode> {
    if ($this->constraints->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->constraints);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getConstraintsx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->constraints);
  }
}
