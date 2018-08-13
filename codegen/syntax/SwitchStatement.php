<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<ffe483dfa6d15ef90c704a274a9b6af6>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class SwitchStatement
  extends EditableNode
  implements IControlFlowStatement {

  public function __construct(
    private SwitchToken $keyword,
    private LeftParenToken $leftParen,
    private EditableNode $expression,
    private RightParenToken $rightParen,
    private LeftBraceToken $leftBrace,
    private ?EditableList<EditableNode> $sections,
    private RightBraceToken $rightBrace,
  ) {
    parent::__construct('switch_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = SwitchToken::fromJSON(
      /* UNSAFE_EXPR */ $json['switch_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['switch_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['switch_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['switch_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $left_brace = LeftBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['switch_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $sections = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['switch_sections'],
      $file,
      $offset,
      $source,
    );
    $offset += $sections->getWidth();
    $right_brace = RightBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['switch_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    return new static(
      $keyword,
      $left_paren,
      $expression,
      $right_paren,
      $left_brace,
      $sections,
      $right_brace,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'expression' => $this->expression,
      'right_paren' => $this->rightParen,
      'left_brace' => $this->leftBrace,
      'sections' => $this->sections,
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
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $expression = $this->expression->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $left_brace = $this->leftBrace->rewrite($rewriter, $parents);
    $sections = $this->sections?->rewrite($rewriter, $parents);
    $right_brace = $this->rightBrace->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $expression === $this->expression &&
      $right_paren === $this->rightParen &&
      $left_brace === $this->leftBrace &&
      $sections === $this->sections &&
      $right_brace === $this->rightBrace
    ) {
      return $this;
    }
    return new static(
      $keyword,
      $left_paren,
      $expression,
      $right_paren,
      $left_brace,
      $sections,
      $right_brace,
    );
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(SwitchToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->expression,
      $this->right_paren,
      $this->left_brace,
      $this->sections,
      $this->right_brace,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns SwitchToken
   */
  public function getKeyword(): SwitchToken {
    return TypeAssert\instance_of(SwitchToken::class, $this->keyword);
  }

  /**
   * @returns SwitchToken
   */
  public function getKeywordx(): SwitchToken {
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
      $this->expression,
      $this->right_paren,
      $this->left_brace,
      $this->sections,
      $this->right_brace,
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

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(EditableNode $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $value,
      $this->right_paren,
      $this->left_brace,
      $this->sections,
      $this->right_brace,
    );
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns BinaryExpression | FunctionCallExpression | LiteralExpression |
   * MemberSelectionExpression | ObjectCreationExpression |
   * PrefixUnaryExpression | SubscriptExpression | VariableExpression
   */
  public function getExpression(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  /**
   * @returns BinaryExpression | FunctionCallExpression | LiteralExpression |
   * MemberSelectionExpression | ObjectCreationExpression |
   * PrefixUnaryExpression | SubscriptExpression | VariableExpression
   */
  public function getExpressionx(): EditableNode {
    return $this->getExpression();
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
      $this->expression,
      $value,
      $this->left_brace,
      $this->sections,
      $this->right_brace,
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

  final public function getLeftBraceUNTYPED(): EditableNode {
    return $this->leftBrace;
  }

  public function withLeftBrace(LeftBraceToken $value): this {
    if ($value === $this->leftBrace) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->expression,
      $this->right_paren,
      $value,
      $this->sections,
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

  final public function getSectionsUNTYPED(): EditableNode {
    return $this->sections;
  }

  public function withSections(?EditableList<EditableNode> $value): this {
    if ($value === $this->sections) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->expression,
      $this->right_paren,
      $this->left_brace,
      $value,
      $this->right_brace,
    );
  }

  public function hasSections(): bool {
    return $this->sections !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getSections(): ?EditableList<EditableNode> {
    if ($this->sections->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->sections);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getSectionsx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->sections);
  }

  final public function getRightBraceUNTYPED(): EditableNode {
    return $this->rightBrace;
  }

  public function withRightBrace(RightBraceToken $value): this {
    if ($value === $this->rightBrace) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->expression,
      $this->right_paren,
      $this->left_brace,
      $this->sections,
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
