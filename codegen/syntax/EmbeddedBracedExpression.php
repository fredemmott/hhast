<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<cc3f653ae1f5dedce11e8ecce6125b8b>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class EmbeddedBracedExpression extends EditableNode {

  public function __construct(
    private EditableNode $leftBrace,
    private EditableNode $expression,
    private EditableNode $rightBrace,
  ) {
    parent::__construct('embedded_braced_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_brace = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['embedded_braced_expression_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['embedded_braced_expression_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    $right_brace = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['embedded_braced_expression_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    return new static($left_brace, $expression, $right_brace);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_brace' => $this->leftBrace,
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
    $expression = $this->expression->rewrite($rewriter, $parents);
    $right_brace = $this->rightBrace->rewrite($rewriter, $parents);
    if (
      $left_brace === $this->leftBrace &&
      $expression === $this->expression &&
      $right_brace === $this->rightBrace
    ) {
      return $this;
    }
    return new static($left_brace, $expression, $right_brace);
  }

  final public function getLeftBraceUNTYPED(): EditableNode {
    return $this->leftBrace;
  }

  public function withLeftBrace(EditableNode $value): this {
    if ($value === $this->leftBrace) {
      return $this;
    }
    return new static($value, $this->expression, $this->right_brace);
  }

  public function hasLeftBrace(): bool {
    return $this->leftBrace !== null;
  }

  /**
   * @returns unknown
   */
  public function getLeftBrace(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->leftBrace);
  }

  /**
   * @returns unknown
   */
  public function getLeftBracex(): EditableNode {
    return $this->getLeftBrace();
  }

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(EditableNode $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static($this->left_brace, $value, $this->right_brace);
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns unknown
   */
  public function getExpression(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  /**
   * @returns unknown
   */
  public function getExpressionx(): EditableNode {
    return $this->getExpression();
  }

  final public function getRightBraceUNTYPED(): EditableNode {
    return $this->rightBrace;
  }

  public function withRightBrace(EditableNode $value): this {
    if ($value === $this->rightBrace) {
      return $this;
    }
    return new static($this->left_brace, $this->expression, $value);
  }

  public function hasRightBrace(): bool {
    return $this->rightBrace !== null;
  }

  /**
   * @returns unknown
   */
  public function getRightBrace(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->rightBrace);
  }

  /**
   * @returns unknown
   */
  public function getRightBracex(): EditableNode {
    return $this->getRightBrace();
  }
}
