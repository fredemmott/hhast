<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<977582aafff2a0aae9fadd0394cefe8b>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class LambdaSignature extends EditableNode {

  public function __construct(
    private LeftParenToken $leftParen,
    private ?EditableList<EditableNode> $parameters,
    private RightParenToken $rightParen,
    private ?ColonToken $colon,
    private ?EditableNode $type,
  ) {
    parent::__construct('lambda_signature');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['lambda_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $parameters = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['lambda_parameters'],
      $file,
      $offset,
      $source,
    );
    $offset += $parameters->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['lambda_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['lambda_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['lambda_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    return new static($left_paren, $parameters, $right_paren, $colon, $type);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_paren' => $this->leftParen,
      'parameters' => $this->parameters,
      'right_paren' => $this->rightParen,
      'colon' => $this->colon,
      'type' => $this->type,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $parameters = $this->parameters?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $colon = $this->colon?->rewrite($rewriter, $parents);
    $type = $this->type?->rewrite($rewriter, $parents);
    if (
      $left_paren === $this->leftParen &&
      $parameters === $this->parameters &&
      $right_paren === $this->rightParen &&
      $colon === $this->colon &&
      $type === $this->type
    ) {
      return $this;
    }
    return new static($left_paren, $parameters, $right_paren, $colon, $type);
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static(
      $value,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $this->type,
    );
  }

  public function hasLeftParen(): bool {
    return $this->leftParen !== null;
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParen(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParenx(): LeftParenToken {
    return $this->getLeftParen();
  }

  final public function getParametersUNTYPED(): EditableNode {
    return $this->parameters;
  }

  public function withParameters(?EditableList<EditableNode> $value): this {
    if ($value === $this->parameters) {
      return $this;
    }
    return new static(
      $this->left_paren,
      $value,
      $this->right_paren,
      $this->colon,
      $this->type,
    );
  }

  public function hasParameters(): bool {
    return $this->parameters !== null;
  }

  /**
   * @returns EditableList<ParameterDeclaration> | EditableList<EditableNode> |
   * EditableList<VariadicParameter> | Missing
   */
  public function getParameters(): ?EditableList<EditableNode> {
    if ($this->parameters->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->parameters);
  }

  /**
   * @returns EditableList<ParameterDeclaration> | EditableList<EditableNode> |
   * EditableList<VariadicParameter>
   */
  public function getParametersx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->parameters);
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static(
      $this->left_paren,
      $this->parameters,
      $value,
      $this->colon,
      $this->type,
    );
  }

  public function hasRightParen(): bool {
    return $this->rightParen !== null;
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParen(): RightParenToken {
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParenx(): RightParenToken {
    return $this->getRightParen();
  }

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(?ColonToken $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static(
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $value,
      $this->type,
    );
  }

  public function hasColon(): bool {
    return $this->colon !== null;
  }

  /**
   * @returns Missing | ColonToken
   */
  public function getColon(): ?ColonToken {
    if ($this->colon->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(ColonToken::class, $this->colon);
  }

  /**
   * @returns ColonToken
   */
  public function getColonx(): ColonToken {
    return TypeAssert\instance_of(ColonToken::class, $this->colon);
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(?EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static(
      $this->left_paren,
      $this->parameters,
      $this->right_paren,
      $this->colon,
      $value,
    );
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns ClosureTypeSpecifier | GenericTypeSpecifier | Missing |
   * SimpleTypeSpecifier
   */
  public function getType(): ?EditableNode {
    if ($this->type->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns ClosureTypeSpecifier | GenericTypeSpecifier | SimpleTypeSpecifier
   */
  public function getTypex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }
}
