<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<0caefb88b551b9a5d573776254c79918>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class BreakStatement extends EditableNode {

  public function __construct(
    private BreakToken $keyword,
    private ?EditableNode $level,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('break_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = BreakToken::fromJSON(
      /* UNSAFE_EXPR */ $json['break_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $level = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['break_level'],
      $file,
      $offset,
      $source,
    );
    $offset += $level->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['break_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $level, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'level' => $this->level,
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
    $level = $this->level?->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $level === $this->level &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($keyword, $level, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(BreakToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->level, $this->semicolon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns BreakToken
   */
  public function getKeyword(): BreakToken {
    return TypeAssert\instance_of(BreakToken::class, $this->keyword);
  }

  /**
   * @returns BreakToken
   */
  public function getKeywordx(): BreakToken {
    return $this->getKeyword();
  }

  final public function getLevelUNTYPED(): EditableNode {
    return $this->level;
  }

  public function withLevel(?EditableNode $value): this {
    if ($value === $this->level) {
      return $this;
    }
    return new static($this->keyword, $value, $this->semicolon);
  }

  public function hasLevel(): bool {
    return $this->level !== null;
  }

  /**
   * @returns LiteralExpression | Missing | VariableExpression
   */
  public function getLevel(): ?EditableNode {
    if ($this->level->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->level);
  }

  /**
   * @returns LiteralExpression | VariableExpression
   */
  public function getLevelx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->level);
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->keyword, $this->level, $value);
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
