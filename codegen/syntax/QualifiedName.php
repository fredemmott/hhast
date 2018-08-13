<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<ac35e716e791868409f2f697c55909ee>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class QualifiedName extends EditableNode {

  public function __construct(private EditableList<EditableNode> $parts) {
    parent::__construct('qualified_name');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $parts = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['qualified_name_parts'],
      $file,
      $offset,
      $source,
    );
    $offset += $parts->getWidth();
    return new static($parts);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'parts' => $this->parts,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $parts = $this->parts->rewrite($rewriter, $parents);
    if ($parts === $this->parts) {
      return $this;
    }
    return new static($parts);
  }

  final public function getPartsUNTYPED(): EditableNode {
    return $this->parts;
  }

  public function withParts(EditableList<EditableNode> $value): this {
    if ($value === $this->parts) {
      return $this;
    }
    return new static($value);
  }

  public function hasParts(): bool {
    return $this->parts !== null;
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<NameToken>
   */
  public function getParts(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->parts);
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<NameToken>
   */
  public function getPartsx(): EditableList<EditableNode> {
    return $this->getParts();
  }
}
