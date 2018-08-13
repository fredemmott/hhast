<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<7693a84b5c9b0d46458fc742b5d83a18>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class EchoStatement extends EditableNode {

  public function __construct(
    private EchoToken $keyword,
    private EditableList<EditableNode> $expressions,
    private ?SemicolonToken $semicolon,
  ) {
    parent::__construct('echo_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = EchoToken::fromJSON(
      /* UNSAFE_EXPR */ $json['echo_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $expressions = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['echo_expressions'],
      $file,
      $offset,
      $source,
    );
    $offset += $expressions->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['echo_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $expressions, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'expressions' => $this->expressions,
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
    $expressions = $this->expressions->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon?->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $expressions === $this->expressions &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($keyword, $expressions, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(EchoToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->expressions, $this->semicolon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns EchoToken
   */
  public function getKeyword(): EchoToken {
    return TypeAssert\instance_of(EchoToken::class, $this->keyword);
  }

  /**
   * @returns EchoToken
   */
  public function getKeywordx(): EchoToken {
    return $this->getKeyword();
  }

  final public function getExpressionsUNTYPED(): EditableNode {
    return $this->expressions;
  }

  public function withExpressions(EditableList<EditableNode> $value): this {
    if ($value === $this->expressions) {
      return $this;
    }
    return new static($this->keyword, $value, $this->semicolon);
  }

  public function hasExpressions(): bool {
    return $this->expressions !== null;
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<BinaryExpression> |
   * EditableList<CastExpression> | EditableList<ConditionalExpression> |
   * EditableList<EmptyExpression> | EditableList<FunctionCallExpression> |
   * EditableList<IssetExpression> | EditableList<LiteralExpression> |
   * EditableList<MemberSelectionExpression> | EditableList<Missing> |
   * EditableList<ObjectCreationExpression> |
   * EditableList<ParenthesizedExpression> |
   * EditableList<PipeVariableExpression> |
   * EditableList<PostfixUnaryExpression> | EditableList<PrefixUnaryExpression>
   * | EditableList<QualifiedName> | EditableList<ScopeResolutionExpression> |
   * EditableList<SubscriptExpression> | EditableList<NameToken> |
   * EditableList<VariableExpression> | EditableList<XHPExpression>
   */
  public function getExpressions(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->expressions);
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<BinaryExpression> |
   * EditableList<CastExpression> | EditableList<ConditionalExpression> |
   * EditableList<EmptyExpression> | EditableList<FunctionCallExpression> |
   * EditableList<IssetExpression> | EditableList<LiteralExpression> |
   * EditableList<MemberSelectionExpression> | EditableList<Missing> |
   * EditableList<ObjectCreationExpression> |
   * EditableList<ParenthesizedExpression> |
   * EditableList<PipeVariableExpression> |
   * EditableList<PostfixUnaryExpression> | EditableList<PrefixUnaryExpression>
   * | EditableList<QualifiedName> | EditableList<ScopeResolutionExpression> |
   * EditableList<SubscriptExpression> | EditableList<NameToken> |
   * EditableList<VariableExpression> | EditableList<XHPExpression>
   */
  public function getExpressionsx(): EditableList<EditableNode> {
    return $this->getExpressions();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(?SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->keyword, $this->expressions, $value);
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
