<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<95d70b5dedbfd060575a747451011b1f>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class DecoratedExpression extends EditableNode {

  public function __construct(
    private EditableToken $decorator,
    private EditableNode $expression,
  ) {
    parent::__construct('decorated_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $decorator = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['decorated_expression_decorator'],
      $file,
      $offset,
      $source,
    );
    $offset += $decorator->getWidth();
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['decorated_expression_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    return new static($decorator, $expression);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'decorator' => $this->decorator,
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
    $decorator = $this->decorator->rewrite($rewriter, $parents);
    $expression = $this->expression->rewrite($rewriter, $parents);
    if ($decorator === $this->decorator && $expression === $this->expression) {
      return $this;
    }
    return new static($decorator, $expression);
  }

  final public function getDecoratorUNTYPED(): EditableNode {
    return $this->decorator;
  }

  public function withDecorator(EditableToken $value): this {
    if ($value === $this->decorator) {
      return $this;
    }
    return new static($value, $this->expression);
  }

  public function hasDecorator(): bool {
    return $this->decorator !== null;
  }

  /**
   * @returns AmpersandToken | DotDotDotToken | InoutToken
   */
  public function getDecorator(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->decorator);
  }

  /**
   * @returns AmpersandToken | DotDotDotToken | InoutToken
   */
  public function getDecoratorx(): EditableToken {
    return $this->getDecorator();
  }

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(EditableNode $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static($this->decorator, $value);
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns ArrayCreationExpression | ArrayIntrinsicExpression |
   * DecoratedExpression | FunctionCallExpression | ScopeResolutionExpression |
   * SubscriptExpression | VariableToken | VariableExpression
   */
  public function getExpression(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  /**
   * @returns ArrayCreationExpression | ArrayIntrinsicExpression |
   * DecoratedExpression | FunctionCallExpression | ScopeResolutionExpression |
   * SubscriptExpression | VariableToken | VariableExpression
   */
  public function getExpressionx(): EditableNode {
    return $this->getExpression();
  }
}
