<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<79764cbb66f09e5ebf3464e14492fb34>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TypeParameters extends EditableNode {

  public function __construct(
    private LessThanToken $leftAngle,
    private EditableList<TypeParameter> $parameters,
    private GreaterThanToken $rightAngle,
  ) {
    parent::__construct('type_parameters');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_angle = LessThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_parameters_left_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_angle->getWidth();
    $parameters = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['type_parameters_parameters'],
      $file,
      $offset,
      $source,
    );
    $offset += $parameters->getWidth();
    $right_angle = GreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['type_parameters_right_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_angle->getWidth();
    return new static($left_angle, $parameters, $right_angle);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_angle' => $this->leftAngle,
      'parameters' => $this->parameters,
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
    $parameters = $this->parameters->rewrite($rewriter, $parents);
    $right_angle = $this->rightAngle->rewrite($rewriter, $parents);
    if (
      $left_angle === $this->leftAngle &&
      $parameters === $this->parameters &&
      $right_angle === $this->rightAngle
    ) {
      return $this;
    }
    return new static($left_angle, $parameters, $right_angle);
  }

  final public function getLeftAngleUNTYPED(): EditableNode {
    return $this->leftAngle;
  }

  public function withLeftAngle(LessThanToken $value): this {
    if ($value === $this->leftAngle) {
      return $this;
    }
    return new static($value, $this->parameters, $this->right_angle);
  }

  public function hasLeftAngle(): bool {
    return $this->leftAngle !== null;
  }

  /**
   * @returns LessThanToken
   */
  public function getLeftAngle(): LessThanToken {
    return TypeAssert\instance_of(LessThanToken::class, $this->leftAngle);
  }

  /**
   * @returns LessThanToken
   */
  public function getLeftAnglex(): LessThanToken {
    return $this->getLeftAngle();
  }

  final public function getParametersUNTYPED(): EditableNode {
    return $this->parameters;
  }

  public function withParameters(EditableList<TypeParameter> $value): this {
    if ($value === $this->parameters) {
      return $this;
    }
    return new static($this->left_angle, $value, $this->right_angle);
  }

  public function hasParameters(): bool {
    return $this->parameters !== null;
  }

  /**
   * @returns EditableList<TypeParameter>
   */
  public function getParameters(): EditableList<TypeParameter> {
    return TypeAssert\instance_of(EditableList::class, $this->parameters);
  }

  /**
   * @returns EditableList<TypeParameter>
   */
  public function getParametersx(): EditableList<TypeParameter> {
    return $this->getParameters();
  }

  final public function getRightAngleUNTYPED(): EditableNode {
    return $this->rightAngle;
  }

  public function withRightAngle(GreaterThanToken $value): this {
    if ($value === $this->rightAngle) {
      return $this;
    }
    return new static($this->left_angle, $this->parameters, $value);
  }

  public function hasRightAngle(): bool {
    return $this->rightAngle !== null;
  }

  /**
   * @returns GreaterThanToken
   */
  public function getRightAngle(): GreaterThanToken {
    return TypeAssert\instance_of(GreaterThanToken::class, $this->rightAngle);
  }

  /**
   * @returns GreaterThanToken
   */
  public function getRightAnglex(): GreaterThanToken {
    return $this->getRightAngle();
  }
}
