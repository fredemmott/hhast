<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<136569170122fcad078c0d1305bf6a6b>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class DefineExpression extends EditableNode {

  public function __construct(
    private DefineToken $keyword,
    private LeftParenToken $leftParen,
    private ?EditableList<EditableNode> $argumentList,
    private RightParenToken $rightParen,
  ) {
    parent::__construct('define_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = DefineToken::fromJSON(
      /* UNSAFE_EXPR */ $json['define_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['define_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $argument_list = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['define_argument_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $argument_list->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['define_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    return new static($keyword, $left_paren, $argument_list, $right_paren);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'argument_list' => $this->argumentList,
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
    $argument_list = $this->argumentList?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $argument_list === $this->argumentList &&
      $right_paren === $this->rightParen
    ) {
      return $this;
    }
    return new static($keyword, $left_paren, $argument_list, $right_paren);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(DefineToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->argument_list,
      $this->right_paren,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns DefineToken
   */
  public function getKeyword(): DefineToken {
    return TypeAssert\instance_of(DefineToken::class, $this->keyword);
  }

  /**
   * @returns DefineToken
   */
  public function getKeywordx(): DefineToken {
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
      $this->argument_list,
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

  final public function getArgumentListUNTYPED(): EditableNode {
    return $this->argumentList;
  }

  public function withArgumentList(?EditableList<EditableNode> $value): this {
    if ($value === $this->argumentList) {
      return $this;
    }
    return
      new static($this->keyword, $this->left_paren, $value, $this->right_paren);
  }

  public function hasArgumentList(): bool {
    return $this->argumentList !== null;
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<LiteralExpression> |
   * Missing
   */
  public function getArgumentList(): ?EditableList<EditableNode> {
    if ($this->argumentList->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->argumentList);
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<LiteralExpression>
   */
  public function getArgumentListx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->argumentList);
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
      $this->argument_list,
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
