<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<20222a23c661b85af27474e724140672>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ScopeResolutionExpression extends EditableNode {

  public function __construct(
    private EditableNode $qualifier,
    private ColonColonToken $operator,
    private EditableNode $name,
  ) {
    parent::__construct('scope_resolution_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $qualifier = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['scope_resolution_qualifier'],
      $file,
      $offset,
      $source,
    );
    $offset += $qualifier->getWidth();
    $operator = ColonColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['scope_resolution_operator'],
      $file,
      $offset,
      $source,
    );
    $offset += $operator->getWidth();
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['scope_resolution_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    return new static($qualifier, $operator, $name);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'qualifier' => $this->qualifier,
      'operator' => $this->operator,
      'name' => $this->name,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $qualifier = $this->qualifier->rewrite($rewriter, $parents);
    $operator = $this->operator->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    if (
      $qualifier === $this->qualifier &&
      $operator === $this->operator &&
      $name === $this->name
    ) {
      return $this;
    }
    return new static($qualifier, $operator, $name);
  }

  final public function getQualifierUNTYPED(): EditableNode {
    return $this->qualifier;
  }

  public function withQualifier(EditableNode $value): this {
    if ($value === $this->qualifier) {
      return $this;
    }
    return new static($value, $this->operator, $this->name);
  }

  public function hasQualifier(): bool {
    return $this->qualifier !== null;
  }

  /**
   * @returns FunctionCallExpression | GenericTypeSpecifier | LiteralExpression
   * | ParenthesizedExpression | PipeVariableExpression | PrefixUnaryExpression
   * | QualifiedName | ScopeResolutionExpression | SimpleTypeSpecifier |
   * XHPClassNameToken | NameToken | ParentToken | SelfToken | StaticToken |
   * VariableExpression
   */
  public function getQualifier(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->qualifier);
  }

  /**
   * @returns FunctionCallExpression | GenericTypeSpecifier | LiteralExpression
   * | ParenthesizedExpression | PipeVariableExpression | PrefixUnaryExpression
   * | QualifiedName | ScopeResolutionExpression | SimpleTypeSpecifier |
   * XHPClassNameToken | NameToken | ParentToken | SelfToken | StaticToken |
   * VariableExpression
   */
  public function getQualifierx(): EditableNode {
    return $this->getQualifier();
  }

  final public function getOperatorUNTYPED(): EditableNode {
    return $this->operator;
  }

  public function withOperator(ColonColonToken $value): this {
    if ($value === $this->operator) {
      return $this;
    }
    return new static($this->qualifier, $value, $this->name);
  }

  public function hasOperator(): bool {
    return $this->operator !== null;
  }

  /**
   * @returns ColonColonToken
   */
  public function getOperator(): ColonColonToken {
    return TypeAssert\instance_of(ColonColonToken::class, $this->operator);
  }

  /**
   * @returns ColonColonToken
   */
  public function getOperatorx(): ColonColonToken {
    return $this->getOperator();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(EditableNode $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($this->qualifier, $this->operator, $value);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns BracedExpression | PrefixUnaryExpression | ClassToken | NameToken
   * | VariableToken
   */
  public function getName(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  /**
   * @returns BracedExpression | PrefixUnaryExpression | ClassToken | NameToken
   * | VariableToken
   */
  public function getNamex(): EditableNode {
    return $this->getName();
  }
}
