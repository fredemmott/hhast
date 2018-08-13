<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<d50b80e61d9964ca0469048dc93603db>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class LiteralExpression extends EditableNode {

  public function __construct(private EditableNode $expression) {
    parent::__construct('literal_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['literal_expression'],
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
