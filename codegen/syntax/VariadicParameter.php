<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<def77b3c8c5e450dcba7b63c6d16efef>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class VariadicParameter extends EditableNode {

  public function __construct(
    private ?EditableNode $callConvention,
    private ?EditableNode $type,
    private DotDotDotToken $ellipsis,
  ) {
    parent::__construct('variadic_parameter');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $call_convention = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['variadic_parameter_call_convention'],
      $file,
      $offset,
      $source,
    );
    $offset += $call_convention->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['variadic_parameter_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $ellipsis = DotDotDotToken::fromJSON(
      /* UNSAFE_EXPR */ $json['variadic_parameter_ellipsis'],
      $file,
      $offset,
      $source,
    );
    $offset += $ellipsis->getWidth();
    return new static($call_convention, $type, $ellipsis);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'call_convention' => $this->callConvention,
      'type' => $this->type,
      'ellipsis' => $this->ellipsis,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $call_convention = $this->callConvention?->rewrite($rewriter, $parents);
    $type = $this->type?->rewrite($rewriter, $parents);
    $ellipsis = $this->ellipsis->rewrite($rewriter, $parents);
    if (
      $call_convention === $this->callConvention &&
      $type === $this->type &&
      $ellipsis === $this->ellipsis
    ) {
      return $this;
    }
    return new static($call_convention, $type, $ellipsis);
  }

  final public function getCallConventionUNTYPED(): EditableNode {
    return $this->callConvention;
  }

  public function withCallConvention(?EditableNode $value): this {
    if ($value === $this->callConvention) {
      return $this;
    }
    return new static($value, $this->type, $this->ellipsis);
  }

  public function hasCallConvention(): bool {
    return $this->callConvention !== null;
  }

  /**
   * @returns Missing
   */
  public function getCallConvention(): ?EditableNode {
    if ($this->callConvention->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->callConvention);
  }

  /**
   * @returns
   */
  public function getCallConventionx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->callConvention);
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(?EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static($this->call_convention, $value, $this->ellipsis);
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns ClosureTypeSpecifier | Missing | SimpleTypeSpecifier |
   * TupleTypeSpecifier
   */
  public function getType(): ?EditableNode {
    if ($this->type->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns ClosureTypeSpecifier | SimpleTypeSpecifier | TupleTypeSpecifier
   */
  public function getTypex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  final public function getEllipsisUNTYPED(): EditableNode {
    return $this->ellipsis;
  }

  public function withEllipsis(DotDotDotToken $value): this {
    if ($value === $this->ellipsis) {
      return $this;
    }
    return new static($this->call_convention, $this->type, $value);
  }

  public function hasEllipsis(): bool {
    return $this->ellipsis !== null;
  }

  /**
   * @returns DotDotDotToken
   */
  public function getEllipsis(): DotDotDotToken {
    return TypeAssert\instance_of(DotDotDotToken::class, $this->ellipsis);
  }

  /**
   * @returns DotDotDotToken
   */
  public function getEllipsisx(): DotDotDotToken {
    return $this->getEllipsis();
  }
}
