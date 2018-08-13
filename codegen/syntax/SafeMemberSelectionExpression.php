<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<4c0826c9f72f3f2ecfd759f08069164a>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class SafeMemberSelectionExpression extends EditableNode {

  public function __construct(
    private EditableNode $object,
    private QuestionMinusGreaterThanToken $operator,
    private EditableNode $name,
  ) {
    parent::__construct('safe_member_selection_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $object = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['safe_member_object'],
      $file,
      $offset,
      $source,
    );
    $offset += $object->getWidth();
    $operator = QuestionMinusGreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['safe_member_operator'],
      $file,
      $offset,
      $source,
    );
    $offset += $operator->getWidth();
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['safe_member_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    return new static($object, $operator, $name);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'object' => $this->object,
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
    $object = $this->object->rewrite($rewriter, $parents);
    $operator = $this->operator->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    if (
      $object === $this->object &&
      $operator === $this->operator &&
      $name === $this->name
    ) {
      return $this;
    }
    return new static($object, $operator, $name);
  }

  final public function getObjectUNTYPED(): EditableNode {
    return $this->object;
  }

  public function withObject(EditableNode $value): this {
    if ($value === $this->object) {
      return $this;
    }
    return new static($value, $this->operator, $this->name);
  }

  public function hasObject(): bool {
    return $this->object !== null;
  }

  /**
   * @returns FunctionCallExpression | MemberSelectionExpression |
   * PrefixUnaryExpression | SafeMemberSelectionExpression |
   * ScopeResolutionExpression | VariableExpression
   */
  public function getObject(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->object);
  }

  /**
   * @returns FunctionCallExpression | MemberSelectionExpression |
   * PrefixUnaryExpression | SafeMemberSelectionExpression |
   * ScopeResolutionExpression | VariableExpression
   */
  public function getObjectx(): EditableNode {
    return $this->getObject();
  }

  final public function getOperatorUNTYPED(): EditableNode {
    return $this->operator;
  }

  public function withOperator(QuestionMinusGreaterThanToken $value): this {
    if ($value === $this->operator) {
      return $this;
    }
    return new static($this->object, $value, $this->name);
  }

  public function hasOperator(): bool {
    return $this->operator !== null;
  }

  /**
   * @returns QuestionMinusGreaterThanToken
   */
  public function getOperator(): QuestionMinusGreaterThanToken {
    return TypeAssert\instance_of(
      QuestionMinusGreaterThanToken::class,
      $this->operator,
    );
  }

  /**
   * @returns QuestionMinusGreaterThanToken
   */
  public function getOperatorx(): QuestionMinusGreaterThanToken {
    return $this->getOperator();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(EditableNode $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($this->object, $this->operator, $value);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns PrefixUnaryExpression | XHPClassNameToken | NameToken
   */
  public function getName(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  /**
   * @returns PrefixUnaryExpression | XHPClassNameToken | NameToken
   */
  public function getNamex(): EditableNode {
    return $this->getName();
  }
}
