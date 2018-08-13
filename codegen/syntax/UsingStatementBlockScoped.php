<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<8915e22eb33d04f595e52000d2bda283>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class UsingStatementBlockScoped extends EditableNode {

  public function __construct(
    private ?AwaitToken $awaitKeyword,
    private UsingToken $usingKeyword,
    private LeftParenToken $leftParen,
    private EditableList<EditableNode> $expressions,
    private RightParenToken $rightParen,
    private CompoundStatement $body,
  ) {
    parent::__construct('using_statement_block_scoped');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $await_keyword = AwaitToken::fromJSON(
      /* UNSAFE_EXPR */ $json['using_block_await_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $await_keyword->getWidth();
    $using_keyword = UsingToken::fromJSON(
      /* UNSAFE_EXPR */ $json['using_block_using_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $using_keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['using_block_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $expressions = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['using_block_expressions'],
      $file,
      $offset,
      $source,
    );
    $offset += $expressions->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['using_block_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $body = CompoundStatement::fromJSON(
      /* UNSAFE_EXPR */ $json['using_block_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static(
      $await_keyword,
      $using_keyword,
      $left_paren,
      $expressions,
      $right_paren,
      $body,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'await_keyword' => $this->awaitKeyword,
      'using_keyword' => $this->usingKeyword,
      'left_paren' => $this->leftParen,
      'expressions' => $this->expressions,
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
    $await_keyword = $this->awaitKeyword?->rewrite($rewriter, $parents);
    $using_keyword = $this->usingKeyword->rewrite($rewriter, $parents);
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $expressions = $this->expressions->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $await_keyword === $this->awaitKeyword &&
      $using_keyword === $this->usingKeyword &&
      $left_paren === $this->leftParen &&
      $expressions === $this->expressions &&
      $right_paren === $this->rightParen &&
      $body === $this->body
    ) {
      return $this;
    }
    return new static(
      $await_keyword,
      $using_keyword,
      $left_paren,
      $expressions,
      $right_paren,
      $body,
    );
  }

  final public function getAwaitKeywordUNTYPED(): EditableNode {
    return $this->awaitKeyword;
  }

  public function withAwaitKeyword(?AwaitToken $value): this {
    if ($value === $this->awaitKeyword) {
      return $this;
    }
    return new static(
      $value,
      $this->using_keyword,
      $this->left_paren,
      $this->expressions,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasAwaitKeyword(): bool {
    return $this->awaitKeyword !== null;
  }

  /**
   * @returns Missing | AwaitToken
   */
  public function getAwaitKeyword(): ?AwaitToken {
    if ($this->awaitKeyword->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(AwaitToken::class, $this->awaitKeyword);
  }

  /**
   * @returns AwaitToken
   */
  public function getAwaitKeywordx(): AwaitToken {
    return TypeAssert\instance_of(AwaitToken::class, $this->awaitKeyword);
  }

  final public function getUsingKeywordUNTYPED(): EditableNode {
    return $this->usingKeyword;
  }

  public function withUsingKeyword(UsingToken $value): this {
    if ($value === $this->usingKeyword) {
      return $this;
    }
    return new static(
      $this->await_keyword,
      $value,
      $this->left_paren,
      $this->expressions,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasUsingKeyword(): bool {
    return $this->usingKeyword !== null;
  }

  /**
   * @returns UsingToken
   */
  public function getUsingKeyword(): UsingToken {
    return TypeAssert\instance_of(UsingToken::class, $this->usingKeyword);
  }

  /**
   * @returns UsingToken
   */
  public function getUsingKeywordx(): UsingToken {
    return $this->getUsingKeyword();
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static(
      $this->await_keyword,
      $this->using_keyword,
      $value,
      $this->expressions,
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

  final public function getExpressionsUNTYPED(): EditableNode {
    return $this->expressions;
  }

  public function withExpressions(EditableList<EditableNode> $value): this {
    if ($value === $this->expressions) {
      return $this;
    }
    return new static(
      $this->await_keyword,
      $this->using_keyword,
      $this->left_paren,
      $value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasExpressions(): bool {
    return $this->expressions !== null;
  }

  /**
   * @returns EditableList<AnonymousFunction> | EditableList<BinaryExpression>
   * | EditableList<LambdaExpression> | EditableList<LiteralExpression> |
   * EditableList<ObjectCreationExpression> | EditableList<EditableNode> |
   * EditableList<PrefixUnaryExpression> | EditableList<VariableExpression>
   */
  public function getExpressions(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->expressions);
  }

  /**
   * @returns EditableList<AnonymousFunction> | EditableList<BinaryExpression>
   * | EditableList<LambdaExpression> | EditableList<LiteralExpression> |
   * EditableList<ObjectCreationExpression> | EditableList<EditableNode> |
   * EditableList<PrefixUnaryExpression> | EditableList<VariableExpression>
   */
  public function getExpressionsx(): EditableList<EditableNode> {
    return $this->getExpressions();
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static(
      $this->await_keyword,
      $this->using_keyword,
      $this->left_paren,
      $this->expressions,
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

  public function withBody(CompoundStatement $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static(
      $this->await_keyword,
      $this->using_keyword,
      $this->left_paren,
      $this->expressions,
      $this->right_paren,
      $value,
    );
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns CompoundStatement
   */
  public function getBody(): CompoundStatement {
    return TypeAssert\instance_of(CompoundStatement::class, $this->body);
  }

  /**
   * @returns CompoundStatement
   */
  public function getBodyx(): CompoundStatement {
    return $this->getBody();
  }
}
