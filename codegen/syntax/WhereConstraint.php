<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<49d7afda6e6b3fe04b0f01c08de22dbf>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class WhereConstraint extends EditableNode {

  public function __construct(
    private EditableNode $leftType,
    private EditableToken $operator,
    private EditableNode $rightType,
  ) {
    parent::__construct('where_constraint');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['where_constraint_left_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_type->getWidth();
    $operator = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['where_constraint_operator'],
      $file,
      $offset,
      $source,
    );
    $offset += $operator->getWidth();
    $right_type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['where_constraint_right_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_type->getWidth();
    return new static($left_type, $operator, $right_type);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_type' => $this->leftType,
      'operator' => $this->operator,
      'right_type' => $this->rightType,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $left_type = $this->leftType->rewrite($rewriter, $parents);
    $operator = $this->operator->rewrite($rewriter, $parents);
    $right_type = $this->rightType->rewrite($rewriter, $parents);
    if (
      $left_type === $this->leftType &&
      $operator === $this->operator &&
      $right_type === $this->rightType
    ) {
      return $this;
    }
    return new static($left_type, $operator, $right_type);
  }

  final public function getLeftTypeUNTYPED(): EditableNode {
    return $this->leftType;
  }

  public function withLeftType(EditableNode $value): this {
    if ($value === $this->leftType) {
      return $this;
    }
    return new static($value, $this->operator, $this->right_type);
  }

  public function hasLeftType(): bool {
    return $this->leftType !== null;
  }

  /**
   * @returns GenericTypeSpecifier | SimpleTypeSpecifier | TypeConstant
   */
  public function getLeftType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->leftType);
  }

  /**
   * @returns GenericTypeSpecifier | SimpleTypeSpecifier | TypeConstant
   */
  public function getLeftTypex(): EditableNode {
    return $this->getLeftType();
  }

  final public function getOperatorUNTYPED(): EditableNode {
    return $this->operator;
  }

  public function withOperator(EditableToken $value): this {
    if ($value === $this->operator) {
      return $this;
    }
    return new static($this->left_type, $value, $this->right_type);
  }

  public function hasOperator(): bool {
    return $this->operator !== null;
  }

  /**
   * @returns EqualToken | AsToken | SuperToken
   */
  public function getOperator(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->operator);
  }

  /**
   * @returns EqualToken | AsToken | SuperToken
   */
  public function getOperatorx(): EditableToken {
    return $this->getOperator();
  }

  final public function getRightTypeUNTYPED(): EditableNode {
    return $this->rightType;
  }

  public function withRightType(EditableNode $value): this {
    if ($value === $this->rightType) {
      return $this;
    }
    return new static($this->left_type, $this->operator, $value);
  }

  public function hasRightType(): bool {
    return $this->rightType !== null;
  }

  /**
   * @returns GenericTypeSpecifier | NullableTypeSpecifier |
   * SimpleTypeSpecifier | TypeConstant
   */
  public function getRightType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->rightType);
  }

  /**
   * @returns GenericTypeSpecifier | NullableTypeSpecifier |
   * SimpleTypeSpecifier | TypeConstant
   */
  public function getRightTypex(): EditableNode {
    return $this->getRightType();
  }
}
