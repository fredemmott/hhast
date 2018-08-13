<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<40bfb938eab621291d354b84746b1c98>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ShapeTypeSpecifier extends EditableNode {

  public function __construct(
    private ShapeToken $keyword,
    private LeftParenToken $leftParen,
    private ?EditableList<FieldSpecifier> $fields,
    private ?DotDotDotToken $ellipsis,
    private RightParenToken $rightParen,
  ) {
    parent::__construct('shape_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = ShapeToken::fromJSON(
      /* UNSAFE_EXPR */ $json['shape_type_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['shape_type_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $fields = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['shape_type_fields'],
      $file,
      $offset,
      $source,
    );
    $offset += $fields->getWidth();
    $ellipsis = DotDotDotToken::fromJSON(
      /* UNSAFE_EXPR */ $json['shape_type_ellipsis'],
      $file,
      $offset,
      $source,
    );
    $offset += $ellipsis->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['shape_type_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    return new static($keyword, $left_paren, $fields, $ellipsis, $right_paren);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'fields' => $this->fields,
      'ellipsis' => $this->ellipsis,
      'right_paren' => $this->rightParen,
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
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $fields = $this->fields?->rewrite($rewriter, $parents);
    $ellipsis = $this->ellipsis?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $fields === $this->fields &&
      $ellipsis === $this->ellipsis &&
      $right_paren === $this->rightParen
    ) {
      return $this;
    }
    return new static($keyword, $left_paren, $fields, $ellipsis, $right_paren);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(ShapeToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->fields,
      $this->ellipsis,
      $this->right_paren,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns ShapeToken
   */
  public function getKeyword(): ShapeToken {
    return TypeAssert\instance_of(ShapeToken::class, $this->keyword);
  }

  /**
   * @returns ShapeToken
   */
  public function getKeywordx(): ShapeToken {
    return $this->getKeyword();
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static(
      $this->keyword,
      $value,
      $this->fields,
      $this->ellipsis,
      $this->right_paren,
    );
  }

  public function hasLeftParen(): bool {
    return $this->leftParen !== null;
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParen(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParenx(): LeftParenToken {
    return $this->getLeftParen();
  }

  final public function getFieldsUNTYPED(): EditableNode {
    return $this->fields;
  }

  public function withFields(?EditableList<FieldSpecifier> $value): this {
    if ($value === $this->fields) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $value,
      $this->ellipsis,
      $this->right_paren,
    );
  }

  public function hasFields(): bool {
    return $this->fields !== null;
  }

  /**
   * @returns EditableList<FieldSpecifier> | Missing
   */
  public function getFields(): ?EditableList<FieldSpecifier> {
    if ($this->fields->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->fields);
  }

  /**
   * @returns EditableList<FieldSpecifier>
   */
  public function getFieldsx(): EditableList<FieldSpecifier> {
    return TypeAssert\instance_of(EditableList::class, $this->fields);
  }

  final public function getEllipsisUNTYPED(): EditableNode {
    return $this->ellipsis;
  }

  public function withEllipsis(?DotDotDotToken $value): this {
    if ($value === $this->ellipsis) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->fields,
      $value,
      $this->right_paren,
    );
  }

  public function hasEllipsis(): bool {
    return $this->ellipsis !== null;
  }

  /**
   * @returns Missing | DotDotDotToken
   */
  public function getEllipsis(): ?DotDotDotToken {
    if ($this->ellipsis->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(DotDotDotToken::class, $this->ellipsis);
  }

  /**
   * @returns DotDotDotToken
   */
  public function getEllipsisx(): DotDotDotToken {
    return TypeAssert\instance_of(DotDotDotToken::class, $this->ellipsis);
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->fields,
      $this->ellipsis,
      $value,
    );
  }

  public function hasRightParen(): bool {
    return $this->rightParen !== null;
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParen(): RightParenToken {
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParenx(): RightParenToken {
    return $this->getRightParen();
  }
}
