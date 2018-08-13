<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<e557e28042bfd262baa1488aaf197bf8>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class AlternateSwitchStatement
  extends EditableNode
  implements IControlFlowStatement {

  public function __construct(
    private SwitchToken $keyword,
    private LeftParenToken $leftParen,
    private EditableNode $expression,
    private RightParenToken $rightParen,
    private ColonToken $openingColon,
    private EditableList<EditableNode> $sections,
    private EndswitchToken $closingEndswitch,
    private SemicolonToken $closingSemicolon,
  ) {
    parent::__construct('alternate_switch_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = SwitchToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_switch_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_switch_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_switch_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_switch_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $opening_colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_switch_opening_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $opening_colon->getWidth();
    $sections = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_switch_sections'],
      $file,
      $offset,
      $source,
    );
    $offset += $sections->getWidth();
    $closing_endswitch = EndswitchToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_switch_closing_endswitch'],
      $file,
      $offset,
      $source,
    );
    $offset += $closing_endswitch->getWidth();
    $closing_semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_switch_closing_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $closing_semicolon->getWidth();
    return new static(
      $keyword,
      $left_paren,
      $expression,
      $right_paren,
      $opening_colon,
      $sections,
      $closing_endswitch,
      $closing_semicolon,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'expression' => $this->expression,
      'right_paren' => $this->rightParen,
      'opening_colon' => $this->openingColon,
      'sections' => $this->sections,
      'closing_endswitch' => $this->closingEndswitch,
      'closing_semicolon' => $this->closingSemicolon,
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
    $opening_colon = $this->openingColon->rewrite($rewriter, $parents);
    $sections = $this->sections->rewrite($rewriter, $parents);
    $closing_endswitch = $this->closingEndswitch->rewrite($rewriter, $parents);
    $closing_semicolon = $this->closingSemicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $expression === $this->expression &&
      $right_paren === $this->rightParen &&
      $opening_colon === $this->openingColon &&
      $sections === $this->sections &&
      $closing_endswitch === $this->closingEndswitch &&
      $closing_semicolon === $this->closingSemicolon
    ) {
      return $this;
    }
    return new static(
      $keyword,
      $left_paren,
      $expression,
      $right_paren,
      $opening_colon,
      $sections,
      $closing_endswitch,
      $closing_semicolon,
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
      $this->opening_colon,
      $this->sections,
      $this->closing_endswitch,
      $this->closing_semicolon,
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
      $this->opening_colon,
      $this->sections,
      $this->closing_endswitch,
      $this->closing_semicolon,
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
      $this->opening_colon,
      $this->sections,
      $this->closing_endswitch,
      $this->closing_semicolon,
    );
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns LiteralExpression | VariableExpression
   */
  public function getExpression(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  /**
   * @returns LiteralExpression | VariableExpression
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
      $this->opening_colon,
      $this->sections,
      $this->closing_endswitch,
      $this->closing_semicolon,
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

  final public function getOpeningColonUNTYPED(): EditableNode {
    return $this->openingColon;
  }

  public function withOpeningColon(ColonToken $value): this {
    if ($value === $this->openingColon) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->expression,
      $this->right_paren,
      $value,
      $this->sections,
      $this->closing_endswitch,
      $this->closing_semicolon,
    );
  }

  public function hasOpeningColon(): bool {
    return $this->openingColon !== null;
  }

  /**
   * @returns ColonToken
   */
  public function getOpeningColon(): ColonToken {
    return TypeAssert\instance_of(ColonToken::class, $this->openingColon);
  }

  /**
   * @returns ColonToken
   */
  public function getOpeningColonx(): ColonToken {
    return $this->getOpeningColon();
  }

  final public function getSectionsUNTYPED(): EditableNode {
    return $this->sections;
  }

  public function withSections(EditableList<EditableNode> $value): this {
    if ($value === $this->sections) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->expression,
      $this->right_paren,
      $this->opening_colon,
      $value,
      $this->closing_endswitch,
      $this->closing_semicolon,
    );
  }

  public function hasSections(): bool {
    return $this->sections !== null;
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getSections(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->sections);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getSectionsx(): EditableList<EditableNode> {
    return $this->getSections();
  }

  final public function getClosingEndswitchUNTYPED(): EditableNode {
    return $this->closingEndswitch;
  }

  public function withClosingEndswitch(EndswitchToken $value): this {
    if ($value === $this->closingEndswitch) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->expression,
      $this->right_paren,
      $this->opening_colon,
      $this->sections,
      $value,
      $this->closing_semicolon,
    );
  }

  public function hasClosingEndswitch(): bool {
    return $this->closingEndswitch !== null;
  }

  /**
   * @returns EndswitchToken
   */
  public function getClosingEndswitch(): EndswitchToken {
    return
      TypeAssert\instance_of(EndswitchToken::class, $this->closingEndswitch);
  }

  /**
   * @returns EndswitchToken
   */
  public function getClosingEndswitchx(): EndswitchToken {
    return $this->getClosingEndswitch();
  }

  final public function getClosingSemicolonUNTYPED(): EditableNode {
    return $this->closingSemicolon;
  }

  public function withClosingSemicolon(SemicolonToken $value): this {
    if ($value === $this->closingSemicolon) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->expression,
      $this->right_paren,
      $this->opening_colon,
      $this->sections,
      $this->closing_endswitch,
      $value,
    );
  }

  public function hasClosingSemicolon(): bool {
    return $this->closingSemicolon !== null;
  }

  /**
   * @returns SemicolonToken
   */
  public function getClosingSemicolon(): SemicolonToken {
    return
      TypeAssert\instance_of(SemicolonToken::class, $this->closingSemicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getClosingSemicolonx(): SemicolonToken {
    return $this->getClosingSemicolon();
  }
}
