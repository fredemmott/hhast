<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<3386ec29fba5086b1a72184901769dc8>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ClosureParameterTypeSpecifier extends EditableNode {

  public function __construct(
    private ?InoutToken $callConvention,
    private EditableNode $type,
  ) {
    parent::__construct('closure_parameter_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $call_convention = InoutToken::fromJSON(
      /* UNSAFE_EXPR */ $json['closure_parameter_call_convention'],
      $file,
      $offset,
      $source,
    );
    $offset += $call_convention->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['closure_parameter_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    return new static($call_convention, $type);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'call_convention' => $this->callConvention,
      'type' => $this->type,
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
    $type = $this->type->rewrite($rewriter, $parents);
    if ($call_convention === $this->callConvention && $type === $this->type) {
      return $this;
    }
    return new static($call_convention, $type);
  }

  final public function getCallConventionUNTYPED(): EditableNode {
    return $this->callConvention;
  }

  public function withCallConvention(?InoutToken $value): this {
    if ($value === $this->callConvention) {
      return $this;
    }
    return new static($value, $this->type);
  }

  public function hasCallConvention(): bool {
    return $this->callConvention !== null;
  }

  /**
   * @returns Missing | InoutToken
   */
  public function getCallConvention(): ?InoutToken {
    if ($this->callConvention->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(InoutToken::class, $this->callConvention);
  }

  /**
   * @returns InoutToken
   */
  public function getCallConventionx(): InoutToken {
    return TypeAssert\instance_of(InoutToken::class, $this->callConvention);
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static($this->call_convention, $value);
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns GenericTypeSpecifier | NullableTypeSpecifier |
   * SimpleTypeSpecifier | SoftTypeSpecifier | TupleTypeSpecifier | TypeConstant
   */
  public function getType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns GenericTypeSpecifier | NullableTypeSpecifier |
   * SimpleTypeSpecifier | SoftTypeSpecifier | TupleTypeSpecifier | TypeConstant
   */
  public function getTypex(): EditableNode {
    return $this->getType();
  }
}
