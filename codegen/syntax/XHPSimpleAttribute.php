<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<920f4286d82ae3d94ecb6cf8f5079e14>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPSimpleAttribute extends EditableNode {

  public function __construct(
    private XHPElementNameToken $name,
    private EqualToken $equal,
    private EditableNode $expression,
  ) {
    parent::__construct('xhp_simple_attribute');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $name = XHPElementNameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_simple_attribute_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $equal = EqualToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_simple_attribute_equal'],
      $file,
      $offset,
      $source,
    );
    $offset += $equal->getWidth();
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_simple_attribute_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    return new static($name, $equal, $expression);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'name' => $this->name,
      'equal' => $this->equal,
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
    $name = $this->name->rewrite($rewriter, $parents);
    $equal = $this->equal->rewrite($rewriter, $parents);
    $expression = $this->expression->rewrite($rewriter, $parents);
    if (
      $name === $this->name &&
      $equal === $this->equal &&
      $expression === $this->expression
    ) {
      return $this;
    }
    return new static($name, $equal, $expression);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(XHPElementNameToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($value, $this->equal, $this->expression);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns XHPElementNameToken
   */
  public function getName(): XHPElementNameToken {
    return TypeAssert\instance_of(XHPElementNameToken::class, $this->name);
  }

  /**
   * @returns XHPElementNameToken
   */
  public function getNamex(): XHPElementNameToken {
    return $this->getName();
  }

  final public function getEqualUNTYPED(): EditableNode {
    return $this->equal;
  }

  public function withEqual(EqualToken $value): this {
    if ($value === $this->equal) {
      return $this;
    }
    return new static($this->name, $value, $this->expression);
  }

  public function hasEqual(): bool {
    return $this->equal !== null;
  }

  /**
   * @returns EqualToken
   */
  public function getEqual(): EqualToken {
    return TypeAssert\instance_of(EqualToken::class, $this->equal);
  }

  /**
   * @returns EqualToken
   */
  public function getEqualx(): EqualToken {
    return $this->getEqual();
  }

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(EditableNode $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static($this->name, $this->equal, $value);
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns BracedExpression | XHPStringLiteralToken
   */
  public function getExpression(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->expression);
  }

  /**
   * @returns BracedExpression | XHPStringLiteralToken
   */
  public function getExpressionx(): EditableNode {
    return $this->getExpression();
  }
}
