<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<bd13b4f226c026cd5041cfe79c674bd7>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPRequired extends EditableNode {

  public function __construct(
    private AtToken $at,
    private RequiredToken $keyword,
  ) {
    parent::__construct('xhp_required');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $at = AtToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_required_at'],
      $file,
      $offset,
      $source,
    );
    $offset += $at->getWidth();
    $keyword = RequiredToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_required_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    return new static($at, $keyword);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'at' => $this->at,
      'keyword' => $this->keyword,
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
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    if ($at === $this->at && $keyword === $this->keyword) {
      return $this;
    }
    return new static($at, $keyword);
  }

  final public function getAtUNTYPED(): EditableNode {
    return $this->at;
  }

  public function withAt(AtToken $value): this {
    if ($value === $this->at) {
      return $this;
    }
    return new static($value, $this->keyword);
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

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(RequiredToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($this->at, $value);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns RequiredToken
   */
  public function getKeyword(): RequiredToken {
    return TypeAssert\instance_of(RequiredToken::class, $this->keyword);
  }

  /**
   * @returns RequiredToken
   */
  public function getKeywordx(): RequiredToken {
    return $this->getKeyword();
  }
}
