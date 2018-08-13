<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<3f539417949e9242fda0b2d97bdb4f12>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ForStatement
  extends EditableNode
  implements IControlFlowStatement, ILoopStatement {

  public function __construct(
    private ForToken $keyword,
    private LeftParenToken $leftParen,
    private ?EditableList<EditableNode> $initializer,
    private SemicolonToken $firstSemicolon,
    private ?EditableList<EditableNode> $control,
    private SemicolonToken $secondSemicolon,
    private ?EditableList<EditableNode> $endOfLoop,
    private RightParenToken $rightParen,
    private EditableNode $body,
  ) {
    parent::__construct('for_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = ForToken::fromJSON(
      /* UNSAFE_EXPR */ $json['for_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['for_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $initializer = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['for_initializer'],
      $file,
      $offset,
      $source,
    );
    $offset += $initializer->getWidth();
    $first_semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['for_first_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $first_semicolon->getWidth();
    $control = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['for_control'],
      $file,
      $offset,
      $source,
    );
    $offset += $control->getWidth();
    $second_semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['for_second_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $second_semicolon->getWidth();
    $end_of_loop = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['for_end_of_loop'],
      $file,
      $offset,
      $source,
    );
    $offset += $end_of_loop->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['for_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $body = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['for_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static(
      $keyword,
      $left_paren,
      $initializer,
      $first_semicolon,
      $control,
      $second_semicolon,
      $end_of_loop,
      $right_paren,
      $body,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'initializer' => $this->initializer,
      'first_semicolon' => $this->firstSemicolon,
      'control' => $this->control,
      'second_semicolon' => $this->secondSemicolon,
      'end_of_loop' => $this->endOfLoop,
      'right_paren' => $this->rightParen,
      'body' => $this->body,
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
    $initializer = $this->initializer?->rewrite($rewriter, $parents);
    $first_semicolon = $this->firstSemicolon->rewrite($rewriter, $parents);
    $control = $this->control?->rewrite($rewriter, $parents);
    $second_semicolon = $this->secondSemicolon->rewrite($rewriter, $parents);
    $end_of_loop = $this->endOfLoop?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $initializer === $this->initializer &&
      $first_semicolon === $this->firstSemicolon &&
      $control === $this->control &&
      $second_semicolon === $this->secondSemicolon &&
      $end_of_loop === $this->endOfLoop &&
      $right_paren === $this->rightParen &&
      $body === $this->body
    ) {
      return $this;
    }
    return new static(
      $keyword,
      $left_paren,
      $initializer,
      $first_semicolon,
      $control,
      $second_semicolon,
      $end_of_loop,
      $right_paren,
      $body,
    );
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(ForToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->initializer,
      $this->first_semicolon,
      $this->control,
      $this->second_semicolon,
      $this->end_of_loop,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns ForToken
   */
  public function getKeyword(): ForToken {
    return TypeAssert\instance_of(ForToken::class, $this->keyword);
  }

  /**
   * @returns ForToken
   */
  public function getKeywordx(): ForToken {
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
      $this->initializer,
      $this->first_semicolon,
      $this->control,
      $this->second_semicolon,
      $this->end_of_loop,
      $this->right_paren,
      $this->body,
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

  final public function getInitializerUNTYPED(): EditableNode {
    return $this->initializer;
  }

  public function withInitializer(?EditableList<EditableNode> $value): this {
    if ($value === $this->initializer) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $value,
      $this->first_semicolon,
      $this->control,
      $this->second_semicolon,
      $this->end_of_loop,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasInitializer(): bool {
    return $this->initializer !== null;
  }

  /**
   * @returns EditableList<BinaryExpression> |
   * EditableList<FunctionCallExpression> | EditableList<LiteralExpression> |
   * Missing
   */
  public function getInitializer(): ?EditableList<EditableNode> {
    if ($this->initializer->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->initializer);
  }

  /**
   * @returns EditableList<BinaryExpression> |
   * EditableList<FunctionCallExpression> | EditableList<LiteralExpression>
   */
  public function getInitializerx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->initializer);
  }

  final public function getFirstSemicolonUNTYPED(): EditableNode {
    return $this->firstSemicolon;
  }

  public function withFirstSemicolon(SemicolonToken $value): this {
    if ($value === $this->firstSemicolon) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->initializer,
      $value,
      $this->control,
      $this->second_semicolon,
      $this->end_of_loop,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasFirstSemicolon(): bool {
    return $this->firstSemicolon !== null;
  }

  /**
   * @returns SemicolonToken
   */
  public function getFirstSemicolon(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->firstSemicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getFirstSemicolonx(): SemicolonToken {
    return $this->getFirstSemicolon();
  }

  final public function getControlUNTYPED(): EditableNode {
    return $this->control;
  }

  public function withControl(?EditableList<EditableNode> $value): this {
    if ($value === $this->control) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->initializer,
      $this->first_semicolon,
      $value,
      $this->second_semicolon,
      $this->end_of_loop,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasControl(): bool {
    return $this->control !== null;
  }

  /**
   * @returns EditableList<BinaryExpression> | EditableList<EditableNode> |
   * EditableList<ConditionalExpression> | EditableList<FunctionCallExpression>
   * | EditableList<PrefixUnaryExpression> | EditableList<VariableExpression> |
   * Missing
   */
  public function getControl(): ?EditableList<EditableNode> {
    if ($this->control->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->control);
  }

  /**
   * @returns EditableList<BinaryExpression> | EditableList<EditableNode> |
   * EditableList<ConditionalExpression> | EditableList<FunctionCallExpression>
   * | EditableList<PrefixUnaryExpression> | EditableList<VariableExpression>
   */
  public function getControlx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->control);
  }

  final public function getSecondSemicolonUNTYPED(): EditableNode {
    return $this->secondSemicolon;
  }

  public function withSecondSemicolon(SemicolonToken $value): this {
    if ($value === $this->secondSemicolon) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->initializer,
      $this->first_semicolon,
      $this->control,
      $value,
      $this->end_of_loop,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasSecondSemicolon(): bool {
    return $this->secondSemicolon !== null;
  }

  /**
   * @returns SemicolonToken
   */
  public function getSecondSemicolon(): SemicolonToken {
    return
      TypeAssert\instance_of(SemicolonToken::class, $this->secondSemicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getSecondSemicolonx(): SemicolonToken {
    return $this->getSecondSemicolon();
  }

  final public function getEndOfLoopUNTYPED(): EditableNode {
    return $this->endOfLoop;
  }

  public function withEndOfLoop(?EditableList<EditableNode> $value): this {
    if ($value === $this->endOfLoop) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->initializer,
      $this->first_semicolon,
      $this->control,
      $this->second_semicolon,
      $value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasEndOfLoop(): bool {
    return $this->endOfLoop !== null;
  }

  /**
   * @returns EditableList<BinaryExpression> |
   * EditableList<FunctionCallExpression> |
   * EditableList<PostfixUnaryExpression> | EditableList<PrefixUnaryExpression>
   * | Missing
   */
  public function getEndOfLoop(): ?EditableList<EditableNode> {
    if ($this->endOfLoop->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->endOfLoop);
  }

  /**
   * @returns EditableList<BinaryExpression> |
   * EditableList<FunctionCallExpression> |
   * EditableList<PostfixUnaryExpression> | EditableList<PrefixUnaryExpression>
   */
  public function getEndOfLoopx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->endOfLoop);
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
      $this->initializer,
      $this->first_semicolon,
      $this->control,
      $this->second_semicolon,
      $this->end_of_loop,
      $value,
      $this->body,
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

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(EditableNode $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->initializer,
      $this->first_semicolon,
      $this->control,
      $this->second_semicolon,
      $this->end_of_loop,
      $this->right_paren,
      $value,
    );
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns AlternateLoopStatement | CompoundStatement | EchoStatement |
   * ExpressionStatement | ForStatement | UnsetStatement
   */
  public function getBody(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->body);
  }

  /**
   * @returns AlternateLoopStatement | CompoundStatement | EchoStatement |
   * ExpressionStatement | ForStatement | UnsetStatement
   */
  public function getBodyx(): EditableNode {
    return $this->getBody();
  }
}
