<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<2a51d2f5dbe54d40857bac8e9c68c093>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class CaseLabel extends EditableNode {

  public function __construct(
    private CaseToken $keyword,
    private EditableNode $expression,
    private EditableToken $colon,
  ) {
    parent::__construct('case_label');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = CaseToken::fromJSON(
      /* UNSAFE_EXPR */ $json['case_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['case_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    $colon = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['case_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    return new static($keyword, $expression, $colon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'expression' => $this->expression,
      'colon' => $this->colon,
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
    $expression = $this->expression->rewrite($rewriter, $parents);
    $colon = $this->colon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $expression === $this->expression &&
      $colon === $this->colon
    ) {
      return $this;
    }
    return new static($keyword, $expression, $colon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(CaseToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->expression, $this->colon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns CaseToken
   */
  public function getKeyword(): CaseToken {
    return TypeAssert\instance_of(CaseToken::class, $this->keyword);
  }

  /**
   * @returns CaseToken
   */
  public function getKeywordx(): CaseToken {
    return $this->getKeyword();
  }

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(EditableNode $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static($this->keyword, $value, $this->colon);
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns ArrayIntrinsicExpression | FunctionCallExpression |
   * InstanceofExpression | LiteralExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | NameToken | VariableExpression
   */
  public function getExpression(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  /**
   * @returns ArrayIntrinsicExpression | FunctionCallExpression |
   * InstanceofExpression | LiteralExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | NameToken | VariableExpression
   */
  public function getExpressionx(): EditableNode {
    return $this->getExpression();
  }

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(EditableToken $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static($this->keyword, $this->expression, $value);
  }

  public function hasColon(): bool {
    return $this->colon !== null;
  }

  /**
   * @returns ColonToken | SemicolonToken
   */
  public function getColon(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->colon);
  }

  /**
   * @returns ColonToken | SemicolonToken
   */
  public function getColonx(): EditableToken {
    return $this->getColon();
  }
}
