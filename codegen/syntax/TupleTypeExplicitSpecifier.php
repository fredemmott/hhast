<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<f3b2bb916ea025cf9f2fd52adce789ee>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TupleTypeExplicitSpecifier extends EditableNode {

  public function __construct(
    private EditableNode $keyword,
    private EditableNode $leftAngle,
    private EditableNode $types,
    private EditableNode $rightAngle,
  ) {
    parent::__construct('tuple_type_explicit_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['tuple_type_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_angle = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['tuple_type_left_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_angle->getWidth();
    $types = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['tuple_type_types'],
      $file,
      $offset,
      $source,
    );
    $offset += $types->getWidth();
    $right_angle = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['tuple_type_right_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_angle->getWidth();
    return new static($keyword, $left_angle, $types, $right_angle);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_angle' => $this->leftAngle,
      'types' => $this->types,
      'right_angle' => $this->rightAngle,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $left_angle = $this->leftAngle->rewrite($rewriter, $parents);
    $types = $this->types->rewrite($rewriter, $parents);
    $right_angle = $this->rightAngle->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_angle === $this->leftAngle &&
      $types === $this->types &&
      $right_angle === $this->rightAngle
    ) {
      return $this;
    }
    return new static($keyword, $left_angle, $types, $right_angle);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(EditableNode $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return
      new static($value, $this->left_angle, $this->types, $this->right_angle);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns unknown
   */
  public function getKeyword(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->keyword);
  }

  /**
   * @returns unknown
   */
  public function getKeywordx(): EditableNode {
    return $this->getKeyword();
  }

  final public function getLeftAngleUNTYPED(): EditableNode {
    return $this->leftAngle;
  }

  public function withLeftAngle(EditableNode $value): this {
    if ($value === $this->leftAngle) {
      return $this;
    }
    return new static($this->keyword, $value, $this->types, $this->right_angle);
  }

  public function hasLeftAngle(): bool {
    return $this->leftAngle !== null;
  }

  /**
   * @returns unknown
   */
  public function getLeftAngle(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->leftAngle);
  }

  /**
   * @returns unknown
   */
  public function getLeftAnglex(): EditableNode {
    return $this->getLeftAngle();
  }

  final public function getTypesUNTYPED(): EditableNode {
    return $this->types;
  }

  public function withTypes(EditableNode $value): this {
    if ($value === $this->types) {
      return $this;
    }
    return
      new static($this->keyword, $this->left_angle, $value, $this->right_angle);
  }

  public function hasTypes(): bool {
    return $this->types !== null;
  }

  /**
   * @returns unknown
   */
  public function getTypes(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->types);
  }

  /**
   * @returns unknown
   */
  public function getTypesx(): EditableNode {
    return $this->getTypes();
  }

  final public function getRightAngleUNTYPED(): EditableNode {
    return $this->rightAngle;
  }

  public function withRightAngle(EditableNode $value): this {
    if ($value === $this->rightAngle) {
      return $this;
    }
    return new static($this->keyword, $this->left_angle, $this->types, $value);
  }

  public function hasRightAngle(): bool {
    return $this->rightAngle !== null;
  }

  /**
   * @returns unknown
   */
  public function getRightAngle(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->rightAngle);
  }

  /**
   * @returns unknown
   */
  public function getRightAnglex(): EditableNode {
    return $this->getRightAngle();
  }
}
