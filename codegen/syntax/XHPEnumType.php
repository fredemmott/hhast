<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<1e79dced7d2ac4e089221a0a6a5784a2>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPEnumType extends EditableNode {

  public function __construct(
    private ?EditableNode $optional,
    private EnumToken $keyword,
    private LeftBraceToken $leftBrace,
    private EditableList<LiteralExpression> $values,
    private RightBraceToken $rightBrace,
  ) {
    parent::__construct('xhp_enum_type');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $optional = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_enum_optional'],
      $file,
      $offset,
      $source,
    );
    $offset += $optional->getWidth();
    $keyword = EnumToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_enum_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_brace = LeftBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_enum_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $values = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_enum_values'],
      $file,
      $offset,
      $source,
    );
    $offset += $values->getWidth();
    $right_brace = RightBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_enum_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    return new static($optional, $keyword, $left_brace, $values, $right_brace);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'optional' => $this->optional,
      'keyword' => $this->keyword,
      'left_brace' => $this->leftBrace,
      'values' => $this->values,
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
    $optional = $this->optional?->rewrite($rewriter, $parents);
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $left_brace = $this->leftBrace->rewrite($rewriter, $parents);
    $values = $this->values->rewrite($rewriter, $parents);
    $right_brace = $this->rightBrace->rewrite($rewriter, $parents);
    if (
      $optional === $this->optional &&
      $keyword === $this->keyword &&
      $left_brace === $this->leftBrace &&
      $values === $this->values &&
      $right_brace === $this->rightBrace
    ) {
      return $this;
    }
    return new static($optional, $keyword, $left_brace, $values, $right_brace);
  }

  final public function getOptionalUNTYPED(): EditableNode {
    return $this->optional;
  }

  public function withOptional(?EditableNode $value): this {
    if ($value === $this->optional) {
      return $this;
    }
    return new static(
      $value,
      $this->keyword,
      $this->left_brace,
      $this->values,
      $this->right_brace,
    );
  }

  public function hasOptional(): bool {
    return $this->optional !== null;
  }

  /**
   * @returns Missing
   */
  public function getOptional(): ?EditableNode {
    if ($this->optional->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->optional);
  }

  /**
   * @returns
   */
  public function getOptionalx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->optional);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(EnumToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $this->optional,
      $value,
      $this->left_brace,
      $this->values,
      $this->right_brace,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns EnumToken
   */
  public function getKeyword(): EnumToken {
    return TypeAssert\instance_of(EnumToken::class, $this->keyword);
  }

  /**
   * @returns EnumToken
   */
  public function getKeywordx(): EnumToken {
    return $this->getKeyword();
  }

  final public function getLeftBraceUNTYPED(): EditableNode {
    return $this->leftBrace;
  }

  public function withLeftBrace(LeftBraceToken $value): this {
    if ($value === $this->leftBrace) {
      return $this;
    }
    return new static(
      $this->optional,
      $this->keyword,
      $value,
      $this->values,
      $this->right_brace,
    );
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

  final public function getValuesUNTYPED(): EditableNode {
    return $this->values;
  }

  public function withValues(EditableList<LiteralExpression> $value): this {
    if ($value === $this->values) {
      return $this;
    }
    return new static(
      $this->optional,
      $this->keyword,
      $this->left_brace,
      $value,
      $this->right_brace,
    );
  }

  public function hasValues(): bool {
    return $this->values !== null;
  }

  /**
   * @returns EditableList<LiteralExpression>
   */
  public function getValues(): EditableList<LiteralExpression> {
    return TypeAssert\instance_of(EditableList::class, $this->values);
  }

  /**
   * @returns EditableList<LiteralExpression>
   */
  public function getValuesx(): EditableList<LiteralExpression> {
    return $this->getValues();
  }

  final public function getRightBraceUNTYPED(): EditableNode {
    return $this->rightBrace;
  }

  public function withRightBrace(RightBraceToken $value): this {
    if ($value === $this->rightBrace) {
      return $this;
    }
    return new static(
      $this->optional,
      $this->keyword,
      $this->left_brace,
      $this->values,
      $value,
    );
  }

  public function hasRightBrace(): bool {
    return $this->rightBrace !== null;
  }

  /**
   * @returns RightBraceToken
   */
  public function getRightBrace(): RightBraceToken {
    return TypeAssert\instance_of(RightBraceToken::class, $this->rightBrace);
  }

  /**
   * @returns RightBraceToken
   */
  public function getRightBracex(): RightBraceToken {
    return $this->getRightBrace();
  }
}
