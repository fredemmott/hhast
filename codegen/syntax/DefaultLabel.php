<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<bab41cd968b13b9160502b7c2f2d55af>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class DefaultLabel extends EditableNode {

  public function __construct(
    private DefaultToken $keyword,
    private EditableToken $colon,
  ) {
    parent::__construct('default_label');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = DefaultToken::fromJSON(
      /* UNSAFE_EXPR */ $json['default_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $colon = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['default_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    return new static($keyword, $colon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'colon' => $this->colon,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $colon = $this->colon->rewrite($rewriter, $parents);
    if ($keyword === $this->keyword && $colon === $this->colon) {
      return $this;
    }
    return new static($keyword, $colon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(DefaultToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->colon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns DefaultToken
   */
  public function getKeyword(): DefaultToken {
    return TypeAssert\instance_of(DefaultToken::class, $this->keyword);
  }

  /**
   * @returns DefaultToken
   */
  public function getKeywordx(): DefaultToken {
    return $this->getKeyword();
  }

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(EditableToken $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static($this->keyword, $value);
  }

  public function hasColon(): bool {
    return $this->colon !== null;
  }

  /**
   * @returns ColonToken | SemicolonToken
   */
  public function getColon(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->colon);
  }

  /**
   * @returns ColonToken | SemicolonToken
   */
  public function getColonx(): EditableToken {
    return $this->getColon();
  }
}
