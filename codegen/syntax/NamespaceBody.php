<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<6ab1216c66ec83fedc6be3f7b819e3c9>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class NamespaceBody extends EditableNode {

  public function __construct(
    private LeftBraceToken $leftBrace,
    private ?EditableList<EditableNode> $declarations,
    private ?RightBraceToken $rightBrace,
  ) {
    parent::__construct('namespace_body');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_brace = LeftBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $declarations = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_declarations'],
      $file,
      $offset,
      $source,
    );
    $offset += $declarations->getWidth();
    $right_brace = RightBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    return new static($left_brace, $declarations, $right_brace);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_brace' => $this->leftBrace,
      'declarations' => $this->declarations,
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
    $left_brace = $this->leftBrace->rewrite($rewriter, $parents);
    $declarations = $this->declarations?->rewrite($rewriter, $parents);
    $right_brace = $this->rightBrace?->rewrite($rewriter, $parents);
    if (
      $left_brace === $this->leftBrace &&
      $declarations === $this->declarations &&
      $right_brace === $this->rightBrace
    ) {
      return $this;
    }
    return new static($left_brace, $declarations, $right_brace);
  }

  final public function getLeftBraceUNTYPED(): EditableNode {
    return $this->leftBrace;
  }

  public function withLeftBrace(LeftBraceToken $value): this {
    if ($value === $this->leftBrace) {
      return $this;
    }
    return new static($value, $this->declarations, $this->right_brace);
  }

  public function hasLeftBrace(): bool {
    return $this->leftBrace !== null;
  }

  /**
   * @returns LeftBraceToken
   */
  public function getLeftBrace(): LeftBraceToken {
    return TypeAssert\instance_of(LeftBraceToken::class, $this->leftBrace);
  }

  /**
   * @returns LeftBraceToken
   */
  public function getLeftBracex(): LeftBraceToken {
    return $this->getLeftBrace();
  }

  final public function getDeclarationsUNTYPED(): EditableNode {
    return $this->declarations;
  }

  public function withDeclarations(?EditableList<EditableNode> $value): this {
    if ($value === $this->declarations) {
      return $this;
    }
    return new static($this->left_brace, $value, $this->right_brace);
  }

  public function hasDeclarations(): bool {
    return $this->declarations !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getDeclarations(): ?EditableList<EditableNode> {
    if ($this->declarations->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->declarations);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getDeclarationsx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->declarations);
  }

  final public function getRightBraceUNTYPED(): EditableNode {
    return $this->rightBrace;
  }

  public function withRightBrace(?RightBraceToken $value): this {
    if ($value === $this->rightBrace) {
      return $this;
    }
    return new static($this->left_brace, $this->declarations, $value);
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
