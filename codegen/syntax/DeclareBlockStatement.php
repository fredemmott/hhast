<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<3ffe032544d49894615e776648080395>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class DeclareBlockStatement extends EditableNode {

  public function __construct(
    private DeclareToken $keyword,
    private LeftParenToken $leftParen,
    private BinaryExpression $expression,
    private RightParenToken $rightParen,
    private EditableNode $body,
  ) {
    parent::__construct('declare_block_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = DeclareToken::fromJSON(
      /* UNSAFE_EXPR */ $json['declare_block_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['declare_block_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $expression = BinaryExpression::fromJSON(
      /* UNSAFE_EXPR */ $json['declare_block_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['declare_block_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $body = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['declare_block_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static($keyword, $left_paren, $expression, $right_paren, $body);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'expression' => $this->expression,
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
    $expression = $this->expression->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $expression === $this->expression &&
      $right_paren === $this->rightParen &&
      $body === $this->body
    ) {
      return $this;
    }
    return new static($keyword, $left_paren, $expression, $right_paren, $body);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(DeclareToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->expression,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns DeclareToken
   */
  public function getKeyword(): DeclareToken {
    return TypeAssert\instance_of(DeclareToken::class, $this->keyword);
  }

  /**
   * @returns DeclareToken
   */
  public function getKeywordx(): DeclareToken {
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

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(BinaryExpression $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns BinaryExpression
   */
  public function getExpression(): BinaryExpression {
    return TypeAssert\instance_of(BinaryExpression::class, $this->expression);
  }

  /**
   * @returns BinaryExpression
   */
  public function getExpressionx(): BinaryExpression {
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
      $this->expression,
      $this->right_paren,
      $value,
    );
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns AlternateLoopStatement | CompoundStatement
   */
  public function getBody(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->body);
  }

  /**
   * @returns AlternateLoopStatement | CompoundStatement
   */
  public function getBodyx(): EditableNode {
    return $this->getBody();
  }
}
