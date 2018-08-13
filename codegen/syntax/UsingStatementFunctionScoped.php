<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<1f8c0557d3caff16f0b96a4aa3f17f61>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class UsingStatementFunctionScoped extends EditableNode {

  public function __construct(
    private ?AwaitToken $awaitKeyword,
    private UsingToken $usingKeyword,
    private EditableNode $expression,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('using_statement_function_scoped');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $await_keyword = AwaitToken::fromJSON(
      /* UNSAFE_EXPR */ $json['using_function_await_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $await_keyword->getWidth();
    $using_keyword = UsingToken::fromJSON(
      /* UNSAFE_EXPR */ $json['using_function_using_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $using_keyword->getWidth();
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['using_function_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['using_function_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($await_keyword, $using_keyword, $expression, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'await_keyword' => $this->awaitKeyword,
      'using_keyword' => $this->usingKeyword,
      'expression' => $this->expression,
      'semicolon' => $this->semicolon,
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
    $expression = $this->expression->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $await_keyword === $this->awaitKeyword &&
      $using_keyword === $this->usingKeyword &&
      $expression === $this->expression &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($await_keyword, $using_keyword, $expression, $semicolon);
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
      $this->expression,
      $this->semicolon,
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
      $this->expression,
      $this->semicolon,
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

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(EditableNode $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static(
      $this->await_keyword,
      $this->using_keyword,
      $value,
      $this->semicolon,
    );
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns BinaryExpression | LambdaExpression | ObjectCreationExpression |
   * ParenthesizedExpression | PrefixUnaryExpression | VariableExpression
   */
  public function getExpression(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  /**
   * @returns BinaryExpression | LambdaExpression | ObjectCreationExpression |
   * ParenthesizedExpression | PrefixUnaryExpression | VariableExpression
   */
  public function getExpressionx(): EditableNode {
    return $this->getExpression();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static(
      $this->await_keyword,
      $this->using_keyword,
      $this->expression,
      $value,
    );
  }

  public function hasSemicolon(): bool {
    return $this->semicolon !== null;
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolon(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->semicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolonx(): SemicolonToken {
    return $this->getSemicolon();
  }
}
