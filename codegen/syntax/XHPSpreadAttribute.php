<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<86fd32e10e0416f8e97ec12fd96e0059>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPSpreadAttribute extends EditableNode {

  public function __construct(
    private LeftBraceToken $leftBrace,
    private DotDotDotToken $spreadOperator,
    private EditableNode $expression,
    private RightBraceToken $rightBrace,
  ) {
    parent::__construct('xhp_spread_attribute');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_brace = LeftBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_spread_attribute_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $spread_operator = DotDotDotToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_spread_attribute_spread_operator'],
      $file,
      $offset,
      $source,
    );
    $offset += $spread_operator->getWidth();
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_spread_attribute_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    $right_brace = RightBraceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_spread_attribute_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    return new static($left_brace, $spread_operator, $expression, $right_brace);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_brace' => $this->leftBrace,
      'spread_operator' => $this->spreadOperator,
      'expression' => $this->expression,
      'right_brace' => $this->rightBrace,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $left_brace = $this->leftBrace->rewrite($rewriter, $parents);
    $spread_operator = $this->spreadOperator->rewrite($rewriter, $parents);
    $expression = $this->expression->rewrite($rewriter, $parents);
    $right_brace = $this->rightBrace->rewrite($rewriter, $parents);
    if (
      $left_brace === $this->leftBrace &&
      $spread_operator === $this->spreadOperator &&
      $expression === $this->expression &&
      $right_brace === $this->rightBrace
    ) {
      return $this;
    }
    return new static($left_brace, $spread_operator, $expression, $right_brace);
  }

  final public function getLeftBraceUNTYPED(): EditableNode {
    return $this->leftBrace;
  }

  public function withLeftBrace(LeftBraceToken $value): this {
    if ($value === $this->leftBrace) {
      return $this;
    }
    return new static(
      $value,
      $this->spread_operator,
      $this->expression,
      $this->right_brace,
    );
  }

  public function hasLeftBrace(): bool {
    return $this->leftBrace !== null;
  }

  /**
   * @returns LeftBraceToken
   */
  public function getLeftBrace(): LeftBraceToken {
    return TypeAssert\instance_of(LeftBraceToken::class, $this->leftBrace);
  }

  /**
   * @returns LeftBraceToken
   */
  public function getLeftBracex(): LeftBraceToken {
    return $this->getLeftBrace();
  }

  final public function getSpreadOperatorUNTYPED(): EditableNode {
    return $this->spreadOperator;
  }

  public function withSpreadOperator(DotDotDotToken $value): this {
    if ($value === $this->spreadOperator) {
      return $this;
    }
    return new static(
      $this->left_brace,
      $value,
      $this->expression,
      $this->right_brace,
    );
  }

  public function hasSpreadOperator(): bool {
    return $this->spreadOperator !== null;
  }

  /**
   * @returns DotDotDotToken
   */
  public function getSpreadOperator(): DotDotDotToken {
    return TypeAssert\instance_of(DotDotDotToken::class, $this->spreadOperator);
  }

  /**
   * @returns DotDotDotToken
   */
  public function getSpreadOperatorx(): DotDotDotToken {
    return $this->getSpreadOperator();
  }

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(EditableNode $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static(
      $this->left_brace,
      $this->spread_operator,
      $value,
      $this->right_brace,
    );
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns VariableExpression | XHPExpression
   */
  public function getExpression(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  /**
   * @returns VariableExpression | XHPExpression
   */
  public function getExpressionx(): EditableNode {
    return $this->getExpression();
  }

  final public function getRightBraceUNTYPED(): EditableNode {
    return $this->rightBrace;
  }

  public function withRightBrace(RightBraceToken $value): this {
    if ($value === $this->rightBrace) {
      return $this;
    }
    return new static(
      $this->left_brace,
      $this->spread_operator,
      $this->expression,
      $value,
    );
  }

  public function hasRightBrace(): bool {
    return $this->rightBrace !== null;
  }

  /**
   * @returns RightBraceToken
   */
  public function getRightBrace(): RightBraceToken {
    return TypeAssert\instance_of(RightBraceToken::class, $this->rightBrace);
  }

  /**
   * @returns RightBraceToken
   */
  public function getRightBracex(): RightBraceToken {
    return $this->getRightBrace();
  }
}
