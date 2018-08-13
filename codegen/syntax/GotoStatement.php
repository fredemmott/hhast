<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<5cc33db88081c6056cabdd8943e8e477>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class GotoStatement extends EditableNode {

  public function __construct(
    private GotoToken $keyword,
    private NameToken $labelName,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('goto_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = GotoToken::fromJSON(
      /* UNSAFE_EXPR */ $json['goto_statement_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $label_name = NameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['goto_statement_label_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $label_name->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['goto_statement_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $label_name, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'label_name' => $this->labelName,
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
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $label_name = $this->labelName->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $label_name === $this->labelName &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($keyword, $label_name, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(GotoToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->label_name, $this->semicolon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns GotoToken
   */
  public function getKeyword(): GotoToken {
    return TypeAssert\instance_of(GotoToken::class, $this->keyword);
  }

  /**
   * @returns GotoToken
   */
  public function getKeywordx(): GotoToken {
    return $this->getKeyword();
  }

  final public function getLabelNameUNTYPED(): EditableNode {
    return $this->labelName;
  }

  public function withLabelName(NameToken $value): this {
    if ($value === $this->labelName) {
      return $this;
    }
    return new static($this->keyword, $value, $this->semicolon);
  }

  public function hasLabelName(): bool {
    return $this->labelName !== null;
  }

  /**
   * @returns NameToken
   */
  public function getLabelName(): NameToken {
    return TypeAssert\instance_of(NameToken::class, $this->labelName);
  }

  /**
   * @returns NameToken
   */
  public function getLabelNamex(): NameToken {
    return $this->getLabelName();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->keyword, $this->label_name, $value);
  }

  public function hasSemicolon(): bool {
    return $this->semicolon !== null;
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolon(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->semicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolonx(): SemicolonToken {
    return $this->getSemicolon();
  }
}
