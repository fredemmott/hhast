<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<aabd759fd2fa726e1119584aa2c2081b>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ConstantDeclarator extends EditableNode {

  public function __construct(
    private NameToken $name,
    private ?SimpleInitializer $initializer,
  ) {
    parent::__construct('constant_declarator');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $name = NameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['constant_declarator_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $initializer = SimpleInitializer::fromJSON(
      /* UNSAFE_EXPR */ $json['constant_declarator_initializer'],
      $file,
      $offset,
      $source,
    );
    $offset += $initializer->getWidth();
    return new static($name, $initializer);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'name' => $this->name,
      'initializer' => $this->initializer,
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
    $initializer = $this->initializer?->rewrite($rewriter, $parents);
    if ($name === $this->name && $initializer === $this->initializer) {
      return $this;
    }
    return new static($name, $initializer);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(NameToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($value, $this->initializer);
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

  final public function getInitializerUNTYPED(): EditableNode {
    return $this->initializer;
  }

  public function withInitializer(?SimpleInitializer $value): this {
    if ($value === $this->initializer) {
      return $this;
    }
    return new static($this->name, $value);
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
}
