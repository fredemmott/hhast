<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<6f5e12fd7b379119f0b68fbfd22d7d83>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ExpressionStatement extends EditableNode {

  public function __construct(
    private ?EditableNode $expression,
    private ?SemicolonToken $semicolon,
  ) {
    parent::__construct('expression_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['expression_statement_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['expression_statement_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($expression, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
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
    $expression = $this->expression?->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon?->rewrite($rewriter, $parents);
    if ($expression === $this->expression && $semicolon === $this->semicolon) {
      return $this;
    }
    return new static($expression, $semicolon);
  }

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(?EditableNode $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static($value, $this->semicolon);
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns AnonymousFunction | AsExpression | BinaryExpression |
   * CastExpression | CollectionLiteralExpression | ConditionalExpression |
   * DarrayIntrinsicExpression | DefineExpression | EmptyExpression |
   * EvalExpression | FunctionCallExpression |
   * FunctionCallWithTypeArgumentsExpression | HaltCompilerExpression |
   * InclusionExpression | InstanceofExpression | IssetExpression |
   * LambdaExpression | LiteralExpression | MemberSelectionExpression | Missing
   * | ObjectCreationExpression | ParenthesizedExpression |
   * PostfixUnaryExpression | PrefixUnaryExpression | QualifiedName |
   * SafeMemberSelectionExpression | ScopeResolutionExpression |
   * SubscriptExpression | RightParenToken | CommaToken | ColonToken |
   * EqualEqualEqualToken | QuestionToken | NameToken | RightBraceToken |
   * VariableExpression | VarrayIntrinsicExpression | XHPExpression |
   * YieldExpression | YieldFromExpression
   */
  public function getExpression(): ?EditableNode {
    if ($this->expression->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  /**
   * @returns AnonymousFunction | AsExpression | BinaryExpression |
   * CastExpression | CollectionLiteralExpression | ConditionalExpression |
   * DarrayIntrinsicExpression | DefineExpression | EmptyExpression |
   * EvalExpression | FunctionCallExpression |
   * FunctionCallWithTypeArgumentsExpression | HaltCompilerExpression |
   * InclusionExpression | InstanceofExpression | IssetExpression |
   * LambdaExpression | LiteralExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression |
   * PostfixUnaryExpression | PrefixUnaryExpression | QualifiedName |
   * SafeMemberSelectionExpression | ScopeResolutionExpression |
   * SubscriptExpression | RightParenToken | CommaToken | ColonToken |
   * EqualEqualEqualToken | QuestionToken | NameToken | RightBraceToken |
   * VariableExpression | VarrayIntrinsicExpression | XHPExpression |
   * YieldExpression | YieldFromExpression
   */
  public function getExpressionx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(?SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->expression, $value);
  }

  public function hasSemicolon(): bool {
    return $this->semicolon !== null;
  }

  /**
   * @returns Missing | SemicolonToken
   */
  public function getSemicolon(): ?SemicolonToken {
    if ($this->semicolon->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(SemicolonToken::class, $this->semicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolonx(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->semicolon);
  }
}
