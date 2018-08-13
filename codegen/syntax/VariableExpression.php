<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<1b5812e0e725d120301da9253bca4217>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class VariableExpression extends EditableNode {

  public function __construct(private EditableNode $expression) {
    parent::__construct('variable_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['variable_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    return new static($expression);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'expression' => $this->expression,
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
    if ($expression === $this->expression) {
      return $this;
    }
    return new static($expression);
  }

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(EditableNode $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static($value);
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
}
