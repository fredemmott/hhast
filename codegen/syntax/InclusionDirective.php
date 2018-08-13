<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<a397e0f068240e0fa4bd084b97fe4868>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class InclusionDirective extends EditableNode {

  public function __construct(
    private InclusionExpression $expression,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('inclusion_directive');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $expression = InclusionExpression::fromJSON(
      /* UNSAFE_EXPR */ $json['inclusion_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['inclusion_semicolon'],
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
    $expression = $this->expression->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if ($expression === $this->expression && $semicolon === $this->semicolon) {
      return $this;
    }
    return new static($expression, $semicolon);
  }

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(InclusionExpression $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static($value, $this->semicolon);
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns InclusionExpression
   */
  public function getExpression(): InclusionExpression {
    return
      TypeAssert\instance_of(InclusionExpression::class, $this->expression);
  }

  /**
   * @returns InclusionExpression
   */
  public function getExpressionx(): InclusionExpression {
    return $this->getExpression();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->expression, $value);
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
