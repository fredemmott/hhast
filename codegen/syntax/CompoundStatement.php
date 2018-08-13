<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<14cdd3d0bf0e3c388b2d792fefe49684>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class CompoundStatement extends EditableNode {

  public function __construct(
    private ?LeftBraceToken $leftBrace,
    private ?EditableList<EditableNode> $statements,
    private ?RightBraceToken $rightBrace,
  ) {
    parent::__construct('compound_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_brace = LeftBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['compound_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $statements = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['compound_statements'],
      $file,
      $offset,
      $source,
    );
    $offset += $statements->getWidth();
    $right_brace = RightBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['compound_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    return new static($left_brace, $statements, $right_brace);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_brace' => $this->leftBrace,
      'statements' => $this->statements,
      'right_brace' => $this->rightBrace,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $left_brace = $this->leftBrace?->rewrite($rewriter, $parents);
    $statements = $this->statements?->rewrite($rewriter, $parents);
    $right_brace = $this->rightBrace?->rewrite($rewriter, $parents);
    if (
      $left_brace === $this->leftBrace &&
      $statements === $this->statements &&
      $right_brace === $this->rightBrace
    ) {
      return $this;
    }
    return new static($left_brace, $statements, $right_brace);
  }

  final public function getLeftBraceUNTYPED(): EditableNode {
    return $this->leftBrace;
  }

  public function withLeftBrace(?LeftBraceToken $value): this {
    if ($value === $this->leftBrace) {
      return $this;
    }
    return new static($value, $this->statements, $this->right_brace);
  }

  public function hasLeftBrace(): bool {
    return $this->leftBrace !== null;
  }

  /**
   * @returns Missing | LeftBraceToken
   */
  public function getLeftBrace(): ?LeftBraceToken {
    if ($this->leftBrace->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(LeftBraceToken::class, $this->leftBrace);
  }

  /**
   * @returns LeftBraceToken
   */
  public function getLeftBracex(): LeftBraceToken {
    return TypeAssert\instance_of(LeftBraceToken::class, $this->leftBrace);
  }

  final public function getStatementsUNTYPED(): EditableNode {
    return $this->statements;
  }

  public function withStatements(?EditableList<EditableNode> $value): this {
    if ($value === $this->statements) {
      return $this;
    }
    return new static($this->left_brace, $value, $this->right_brace);
  }

  public function hasStatements(): bool {
    return $this->statements !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getStatements(): ?EditableList<EditableNode> {
    if ($this->statements->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->statements);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getStatementsx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->statements);
  }

  final public function getRightBraceUNTYPED(): EditableNode {
    return $this->rightBrace;
  }

  public function withRightBrace(?RightBraceToken $value): this {
    if ($value === $this->rightBrace) {
      return $this;
    }
    return new static($this->left_brace, $this->statements, $value);
  }

  public function hasRightBrace(): bool {
    return $this->rightBrace !== null;
  }

  /**
   * @returns Missing | RightBraceToken
   */
  public function getRightBrace(): ?RightBraceToken {
    if ($this->rightBrace->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(RightBraceToken::class, $this->rightBrace);
  }

  /**
   * @returns RightBraceToken
   */
  public function getRightBracex(): RightBraceToken {
    return TypeAssert\instance_of(RightBraceToken::class, $this->rightBrace);
  }
}
