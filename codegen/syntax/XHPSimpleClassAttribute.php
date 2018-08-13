<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<3e5965d907e47b77d83d334eddff0466>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPSimpleClassAttribute extends EditableNode {

  public function __construct(private SimpleTypeSpecifier $type) {
    parent::__construct('xhp_simple_class_attribute');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $type = SimpleTypeSpecifier::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_simple_class_attribute_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    return new static($type);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
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
    $type = $this->type->rewrite($rewriter, $parents);
    if ($type === $this->type) {
      return $this;
    }
    return new static($type);
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(SimpleTypeSpecifier $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static($value);
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns SimpleTypeSpecifier
   */
  public function getType(): SimpleTypeSpecifier {
    return TypeAssert\instance_of(SimpleTypeSpecifier::class, $this->type);
  }

  /**
   * @returns SimpleTypeSpecifier
   */
  public function getTypex(): SimpleTypeSpecifier {
    return $this->getType();
  }
}
