/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<03bd22e2024cbfd3dff1256cf992259e>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TupleTypeExplicitSpecifier
  extends EditableNode
  implements ITypeSpecifier {

  private EditableNode $_keyword;
  private EditableNode $_left_angle;
  private EditableNode $_types;
  private EditableNode $_right_angle;

  public function __construct(
    EditableNode $keyword,
    EditableNode $left_angle,
    EditableNode $types,
    EditableNode $right_angle,
    ?__Private\SourceRef $source_ref = null,
  ) {
    $this->_keyword = $keyword;
    $this->_left_angle = $left_angle;
    $this->_types = $types;
    $this->_right_angle = $right_angle;
    parent::__construct('tuple_type_explicit_specifier', $source_ref);
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $initial_offset,
    string $source,
  ): this {
    $offset = $initial_offset;
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
    $source_ref = shape(
      'file' => $file,
      'source' => $source,
      'offset' => $initial_offset,
      'width' => $offset - $initial_offset,
    );
    return new static($keyword, $left_angle, $types, $right_angle, $source_ref);
  }

  <<__Override>>
  public function getChildren(): dict<string, EditableNode> {
    return dict[
      'keyword' => $this->_keyword,
      'left_angle' => $this->_left_angle,
      'types' => $this->_types,
      'right_angle' => $this->_right_angle,
    ];
  }

  <<__Override>>
  public function rewriteChildren(
    self::TRewriter $rewriter,
    vec<EditableNode> $parents = vec[],
  ): this {
    $parents[] = $this;
    $keyword = $rewriter($this->_keyword, $parents);
    $left_angle = $rewriter($this->_left_angle, $parents);
    $types = $rewriter($this->_types, $parents);
    $right_angle = $rewriter($this->_right_angle, $parents);
    if (
      $keyword === $this->_keyword &&
      $left_angle === $this->_left_angle &&
      $types === $this->_types &&
      $right_angle === $this->_right_angle
    ) {
      return $this;
    }
    return new static($keyword, $left_angle, $types, $right_angle);
  }

  public function getKeywordUNTYPED(): EditableNode {
    return $this->_keyword;
  }

  public function withKeyword(EditableNode $value): this {
    if ($value === $this->_keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->_left_angle,
      $this->_types,
      $this->_right_angle,
    );
  }

  public function hasKeyword(): bool {
    return !$this->_keyword->isMissing();
  }

  /**
   * @return unknown
   */
  public function getKeyword(): EditableNode {
    return $this->_keyword;
  }

  /**
   * @return unknown
   */
  public function getKeywordx(): EditableNode {
    return $this->getKeyword();
  }

  public function getLeftAngleUNTYPED(): EditableNode {
    return $this->_left_angle;
  }

  public function withLeftAngle(EditableNode $value): this {
    if ($value === $this->_left_angle) {
      return $this;
    }
    return new static(
      $this->_keyword,
      $value,
      $this->_types,
      $this->_right_angle,
    );
  }

  public function hasLeftAngle(): bool {
    return !$this->_left_angle->isMissing();
  }

  /**
   * @return unknown
   */
  public function getLeftAngle(): EditableNode {
    return $this->_left_angle;
  }

  /**
   * @return unknown
   */
  public function getLeftAnglex(): EditableNode {
    return $this->getLeftAngle();
  }

  public function getTypesUNTYPED(): EditableNode {
    return $this->_types;
  }

  public function withTypes(EditableNode $value): this {
    if ($value === $this->_types) {
      return $this;
    }
    return new static(
      $this->_keyword,
      $this->_left_angle,
      $value,
      $this->_right_angle,
    );
  }

  public function hasTypes(): bool {
    return !$this->_types->isMissing();
  }

  /**
   * @return unknown
   */
  public function getTypes(): EditableNode {
    return $this->_types;
  }

  /**
   * @return unknown
   */
  public function getTypesx(): EditableNode {
    return $this->getTypes();
  }

  public function getRightAngleUNTYPED(): EditableNode {
    return $this->_right_angle;
  }

  public function withRightAngle(EditableNode $value): this {
    if ($value === $this->_right_angle) {
      return $this;
    }
    return new static(
      $this->_keyword,
      $this->_left_angle,
      $this->_types,
      $value,
    );
  }

  public function hasRightAngle(): bool {
    return !$this->_right_angle->isMissing();
  }

  /**
   * @return unknown
   */
  public function getRightAngle(): EditableNode {
    return $this->_right_angle;
  }

  /**
   * @return unknown
   */
  public function getRightAnglex(): EditableNode {
    return $this->getRightAngle();
  }
}
