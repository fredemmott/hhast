<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<fc50562ade6c7d1f5e298893dd284c6d>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class Script extends EditableNode {

  public function __construct(
    private EditableList<EditableNode> $declarations,
  ) {
    parent::__construct('script');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $declarations = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['script_declarations'],
      $file,
      $offset,
      $source,
    );
    $offset += $declarations->getWidth();
    return new static($declarations);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'declarations' => $this->declarations,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $declarations = $this->declarations->rewrite($rewriter, $parents);
    if ($declarations === $this->declarations) {
      return $this;
    }
    return new static($declarations);
  }

  final public function getDeclarationsUNTYPED(): EditableNode {
    return $this->declarations;
  }

  public function withDeclarations(EditableList<EditableNode> $value): this {
    if ($value === $this->declarations) {
      return $this;
    }
    return new static($value);
  }

  public function hasDeclarations(): bool {
    return $this->declarations !== null;
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getDeclarations(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->declarations);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getDeclarationsx(): EditableList<EditableNode> {
    return $this->getDeclarations();
  }
}
