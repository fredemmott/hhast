<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<290932accb04150b913e6ebd87785996>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPClose extends EditableNode {

  public function __construct(
    private EditableToken $leftAngle,
    private ?XHPElementNameToken $name,
    private ?GreaterThanToken $rightAngle,
  ) {
    parent::__construct('xhp_close');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_angle = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_close_left_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_angle->getWidth();
    $name = XHPElementNameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_close_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $right_angle = GreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_close_right_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_angle->getWidth();
    return new static($left_angle, $name, $right_angle);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_angle' => $this->leftAngle,
      'name' => $this->name,
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
    $left_angle = $this->leftAngle->rewrite($rewriter, $parents);
    $name = $this->name?->rewrite($rewriter, $parents);
    $right_angle = $this->rightAngle?->rewrite($rewriter, $parents);
    if (
      $left_angle === $this->leftAngle &&
      $name === $this->name &&
      $right_angle === $this->rightAngle
    ) {
      return $this;
    }
    return new static($left_angle, $name, $right_angle);
  }

  final public function getLeftAngleUNTYPED(): EditableNode {
    return $this->leftAngle;
  }

  public function withLeftAngle(EditableToken $value): this {
    if ($value === $this->leftAngle) {
      return $this;
    }
    return new static($value, $this->name, $this->right_angle);
  }

  public function hasLeftAngle(): bool {
    return $this->leftAngle !== null;
  }

  /**
   * @returns LessThanSlashToken | EndOfFileToken
   */
  public function getLeftAngle(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->leftAngle);
  }

  /**
   * @returns LessThanSlashToken | EndOfFileToken
   */
  public function getLeftAnglex(): EditableToken {
    return $this->getLeftAngle();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(?XHPElementNameToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($this->left_angle, $value, $this->right_angle);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns Missing | XHPElementNameToken
   */
  public function getName(): ?XHPElementNameToken {
    if ($this->name->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(XHPElementNameToken::class, $this->name);
  }

  /**
   * @returns XHPElementNameToken
   */
  public function getNamex(): XHPElementNameToken {
    return TypeAssert\instance_of(XHPElementNameToken::class, $this->name);
  }

  final public function getRightAngleUNTYPED(): EditableNode {
    return $this->rightAngle;
  }

  public function withRightAngle(?GreaterThanToken $value): this {
    if ($value === $this->rightAngle) {
      return $this;
    }
    return new static($this->left_angle, $this->name, $value);
  }

  public function hasRightAngle(): bool {
    return $this->rightAngle !== null;
  }

  /**
   * @returns Missing | GreaterThanToken
   */
  public function getRightAngle(): ?GreaterThanToken {
    if ($this->rightAngle->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(GreaterThanToken::class, $this->rightAngle);
  }

  /**
   * @returns GreaterThanToken
   */
  public function getRightAnglex(): GreaterThanToken {
    return TypeAssert\instance_of(GreaterThanToken::class, $this->rightAngle);
  }
}
