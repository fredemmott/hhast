<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<8fcdad3731f4412b2e10e3d82edf3d93>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class SoftTypeSpecifier extends EditableNode {

  public function __construct(private AtToken $at, private EditableNode $type) {
    parent::__construct('soft_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $at = AtToken::fromJSON(
      /* UNSAFE_EXPR */ $json['soft_at'],
      $file,
      $offset,
      $source,
    );
    $offset += $at->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['soft_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    return new static($at, $type);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'at' => $this->at,
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
    $at = $this->at->rewrite($rewriter, $parents);
    $type = $this->type->rewrite($rewriter, $parents);
    if ($at === $this->at && $type === $this->type) {
      return $this;
    }
    return new static($at, $type);
  }

  final public function getAtUNTYPED(): EditableNode {
    return $this->at;
  }

  public function withAt(AtToken $value): this {
    if ($value === $this->at) {
      return $this;
    }
    return new static($value, $this->type);
  }

  public function hasAt(): bool {
    return $this->at !== null;
  }

  /**
   * @returns AtToken
   */
  public function getAt(): AtToken {
    return TypeAssert\instance_of(AtToken::class, $this->at);
  }

  /**
   * @returns AtToken
   */
  public function getAtx(): AtToken {
    return $this->getAt();
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static($this->at, $value);
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns ClosureTypeSpecifier | GenericTypeSpecifier |
   * MapArrayTypeSpecifier | NullableTypeSpecifier | SimpleTypeSpecifier |
   * TupleTypeSpecifier
   */
  public function getType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns ClosureTypeSpecifier | GenericTypeSpecifier |
   * MapArrayTypeSpecifier | NullableTypeSpecifier | SimpleTypeSpecifier |
   * TupleTypeSpecifier
   */
  public function getTypex(): EditableNode {
    return $this->getType();
  }
}
