<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<0e19a44207c7514fc4535b1c4dd280cf>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ClassishBody extends EditableNode {

  public function __construct(
    private LeftBraceToken $leftBrace,
    private ?EditableList<EditableNode> $elements,
    private ?RightBraceToken $rightBrace,
  ) {
    parent::__construct('classish_body');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_brace = LeftBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_body_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $elements = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_body_elements'],
      $file,
      $offset,
      $source,
    );
    $offset += $elements->getWidth();
    $right_brace = RightBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['classish_body_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    return new static($left_brace, $elements, $right_brace);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_brace' => $this->leftBrace,
      'elements' => $this->elements,
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
    $elements = $this->elements?->rewrite($rewriter, $parents);
    $right_brace = $this->rightBrace?->rewrite($rewriter, $parents);
    if (
      $left_brace === $this->leftBrace &&
      $elements === $this->elements &&
      $right_brace === $this->rightBrace
    ) {
      return $this;
    }
    return new static($left_brace, $elements, $right_brace);
  }

  final public function getLeftBraceUNTYPED(): EditableNode {
    return $this->leftBrace;
  }

  public function withLeftBrace(LeftBraceToken $value): this {
    if ($value === $this->leftBrace) {
      return $this;
    }
    return new static($value, $this->elements, $this->right_brace);
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

  final public function getElementsUNTYPED(): EditableNode {
    return $this->elements;
  }

  public function withElements(?EditableList<EditableNode> $value): this {
    if ($value === $this->elements) {
      return $this;
    }
    return new static($this->left_brace, $value, $this->right_brace);
  }

  public function hasElements(): bool {
    return $this->elements !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getElements(): ?EditableList<EditableNode> {
    if ($this->elements->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->elements);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getElementsx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->elements);
  }

  final public function getRightBraceUNTYPED(): EditableNode {
    return $this->rightBrace;
  }

  public function withRightBrace(?RightBraceToken $value): this {
    if ($value === $this->rightBrace) {
      return $this;
    }
    return new static($this->left_brace, $this->elements, $value);
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
