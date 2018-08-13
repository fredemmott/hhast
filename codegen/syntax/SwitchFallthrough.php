<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<732d810dddc17efbb1444f1a9ffc295a>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class SwitchFallthrough extends EditableNode {

  public function __construct(
    private ?EditableNode $keyword,
    private ?EditableNode $semicolon,
  ) {
    parent::__construct('switch_fallthrough');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['fallthrough_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $semicolon = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['fallthrough_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'semicolon' => $this->semicolon,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->keyword?->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon?->rewrite($rewriter, $parents);
    if ($keyword === $this->keyword && $semicolon === $this->semicolon) {
      return $this;
    }
    return new static($keyword, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(?EditableNode $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->semicolon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns Missing
   */
  public function getKeyword(): ?EditableNode {
    if ($this->keyword->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->keyword);
  }

  /**
   * @returns
   */
  public function getKeywordx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->keyword);
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(?EditableNode $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->keyword, $value);
  }

  public function hasSemicolon(): bool {
    return $this->semicolon !== null;
  }

  /**
   * @returns Missing
   */
  public function getSemicolon(): ?EditableNode {
    if ($this->semicolon->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->semicolon);
  }

  /**
   * @returns
   */
  public function getSemicolonx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->semicolon);
  }
}
