<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<36cb7a8af0139db2565de56684ae8302>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TypeConstant extends EditableNode {

  public function __construct(
    private EditableNode $leftType,
    private ColonColonToken $separator,
    private NameToken $rightType,
  ) {
    parent::__construct('type_constant');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['type_constant_left_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_type->getWidth();
    $separator = ColonColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_constant_separator'],
      $file,
      $offset,
      $source,
    );
    $offset += $separator->getWidth();
    $right_type = NameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_constant_right_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_type->getWidth();
    return new static($left_type, $separator, $right_type);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_type' => $this->leftType,
      'separator' => $this->separator,
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
    $separator = $this->separator->rewrite($rewriter, $parents);
    $right_type = $this->rightType->rewrite($rewriter, $parents);
    if (
      $left_type === $this->leftType &&
      $separator === $this->separator &&
      $right_type === $this->rightType
    ) {
      return $this;
    }
    return new static($left_type, $separator, $right_type);
  }

  final public function getLeftTypeUNTYPED(): EditableNode {
    return $this->leftType;
  }

  public function withLeftType(EditableNode $value): this {
    if ($value === $this->leftType) {
      return $this;
    }
    return new static($value, $this->separator, $this->right_type);
  }

  public function hasLeftType(): bool {
    return $this->leftType !== null;
  }

  /**
   * @returns NameToken | ParentToken | SelfToken | ThisToken | TypeConstant
   */
  public function getLeftType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->leftType);
  }

  /**
   * @returns NameToken | ParentToken | SelfToken | ThisToken | TypeConstant
   */
  public function getLeftTypex(): EditableNode {
    return $this->getLeftType();
  }

  final public function getSeparatorUNTYPED(): EditableNode {
    return $this->separator;
  }

  public function withSeparator(ColonColonToken $value): this {
    if ($value === $this->separator) {
      return $this;
    }
    return new static($this->left_type, $value, $this->right_type);
  }

  public function hasSeparator(): bool {
    return $this->separator !== null;
  }

  /**
   * @returns ColonColonToken
   */
  public function getSeparator(): ColonColonToken {
    return TypeAssert\instance_of(ColonColonToken::class, $this->separator);
  }

  /**
   * @returns ColonColonToken
   */
  public function getSeparatorx(): ColonColonToken {
    return $this->getSeparator();
  }

  final public function getRightTypeUNTYPED(): EditableNode {
    return $this->rightType;
  }

  public function withRightType(NameToken $value): this {
    if ($value === $this->rightType) {
      return $this;
    }
    return new static($this->left_type, $this->separator, $value);
  }

  public function hasRightType(): bool {
    return $this->rightType !== null;
  }

  /**
   * @returns NameToken
   */
  public function getRightType(): NameToken {
    return TypeAssert\instance_of(NameToken::class, $this->rightType);
  }

  /**
   * @returns NameToken
   */
  public function getRightTypex(): NameToken {
    return $this->getRightType();
  }
}
