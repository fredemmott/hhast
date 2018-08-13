<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<8b805bbe3ff2110bcfba1628ecffcd9b>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ReturnStatement extends EditableNode {

  public function __construct(
    private ReturnToken $keyword,
    private ?EditableNode $expression,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('return_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = ReturnToken::fromJSON(
      /* UNSAFE_EXPR */ $json['return_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['return_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['return_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $expression, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
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
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $expression = $this->expression?->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $expression === $this->expression &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($keyword, $expression, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(ReturnToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->expression, $this->semicolon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns ReturnToken
   */
  public function getKeyword(): ReturnToken {
    return TypeAssert\instance_of(ReturnToken::class, $this->keyword);
  }

  /**
   * @returns ReturnToken
   */
  public function getKeywordx(): ReturnToken {
    return $this->getKeyword();
  }

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(?EditableNode $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static($this->keyword, $value, $this->semicolon);
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | AwaitableCreationExpression | BinaryExpression
   * | CastExpression | CollectionLiteralExpression | ConditionalExpression |
   * DarrayIntrinsicExpression | DictionaryIntrinsicExpression | EvalExpression
   * | FunctionCallExpression | FunctionCallWithTypeArgumentsExpression |
   * InstanceofExpression | IssetExpression | KeysetIntrinsicExpression |
   * LambdaExpression | LiteralExpression | MemberSelectionExpression | Missing
   * | ObjectCreationExpression | ParenthesizedExpression |
   * PostfixUnaryExpression | PrefixUnaryExpression | QualifiedName |
   * SafeMemberSelectionExpression | ScopeResolutionExpression |
   * ShapeExpression | SubscriptExpression | NameToken | TupleExpression |
   * VariableExpression | VarrayIntrinsicExpression | VectorIntrinsicExpression
   * | XHPExpression | YieldFromExpression
   */
  public function getExpression(): ?EditableNode {
    if ($this->expression->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | AwaitableCreationExpression | BinaryExpression
   * | CastExpression | CollectionLiteralExpression | ConditionalExpression |
   * DarrayIntrinsicExpression | DictionaryIntrinsicExpression | EvalExpression
   * | FunctionCallExpression | FunctionCallWithTypeArgumentsExpression |
   * InstanceofExpression | IssetExpression | KeysetIntrinsicExpression |
   * LambdaExpression | LiteralExpression | MemberSelectionExpression |
   * ObjectCreationExpression | ParenthesizedExpression |
   * PostfixUnaryExpression | PrefixUnaryExpression | QualifiedName |
   * SafeMemberSelectionExpression | ScopeResolutionExpression |
   * ShapeExpression | SubscriptExpression | NameToken | TupleExpression |
   * VariableExpression | VarrayIntrinsicExpression | VectorIntrinsicExpression
   * | XHPExpression | YieldFromExpression
   */
  public function getExpressionx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->keyword, $this->expression, $value);
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
