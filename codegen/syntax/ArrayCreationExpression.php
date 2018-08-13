<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<5f3821798786d53b26dc9f3cd9f844ba>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ArrayCreationExpression extends EditableNode {

  public function __construct(
    private LeftBracketToken $leftBracket,
    private ?EditableList<EditableNode> $members,
    private RightBracketToken $rightBracket,
  ) {
    parent::__construct('array_creation_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_bracket = LeftBracketToken::fromJSON(
      /* UNSAFE_EXPR */ $json['array_creation_left_bracket'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_bracket->getWidth();
    $members = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['array_creation_members'],
      $file,
      $offset,
      $source,
    );
    $offset += $members->getWidth();
    $right_bracket = RightBracketToken::fromJSON(
      /* UNSAFE_EXPR */ $json['array_creation_right_bracket'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_bracket->getWidth();
    return new static($left_bracket, $members, $right_bracket);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_bracket' => $this->leftBracket,
      'members' => $this->members,
      'right_bracket' => $this->rightBracket,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $left_bracket = $this->leftBracket->rewrite($rewriter, $parents);
    $members = $this->members?->rewrite($rewriter, $parents);
    $right_bracket = $this->rightBracket->rewrite($rewriter, $parents);
    if (
      $left_bracket === $this->leftBracket &&
      $members === $this->members &&
      $right_bracket === $this->rightBracket
    ) {
      return $this;
    }
    return new static($left_bracket, $members, $right_bracket);
  }

  final public function getLeftBracketUNTYPED(): EditableNode {
    return $this->leftBracket;
  }

  public function withLeftBracket(LeftBracketToken $value): this {
    if ($value === $this->leftBracket) {
      return $this;
    }
    return new static($value, $this->members, $this->right_bracket);
  }

  public function hasLeftBracket(): bool {
    return $this->leftBracket !== null;
  }

  /**
   * @returns LeftBracketToken
   */
  public function getLeftBracket(): LeftBracketToken {
    return TypeAssert\instance_of(LeftBracketToken::class, $this->leftBracket);
  }

  /**
   * @returns LeftBracketToken
   */
  public function getLeftBracketx(): LeftBracketToken {
    return $this->getLeftBracket();
  }

  final public function getMembersUNTYPED(): EditableNode {
    return $this->members;
  }

  public function withMembers(?EditableList<EditableNode> $value): this {
    if ($value === $this->members) {
      return $this;
    }
    return new static($this->left_bracket, $value, $this->right_bracket);
  }

  public function hasMembers(): bool {
    return $this->members !== null;
  }

  /**
   * @returns EditableList<EditableNode> |
   * EditableList<ArrayCreationExpression> | EditableList<BinaryExpression> |
   * EditableList<ConditionalExpression> |
   * EditableList<DictionaryIntrinsicExpression> |
   * EditableList<ElementInitializer> | EditableList<FunctionCallExpression> |
   * EditableList<KeysetIntrinsicExpression> | EditableList<LiteralExpression>
   * | EditableList<ObjectCreationExpression> |
   * EditableList<PrefixUnaryExpression> |
   * EditableList<ScopeResolutionExpression> |
   * EditableList<SubscriptExpression> | EditableList<NameToken> |
   * EditableList<VariableExpression> | EditableList<VarrayIntrinsicExpression>
   * | EditableList<VectorIntrinsicExpression> | Missing
   */
  public function getMembers(): ?EditableList<EditableNode> {
    if ($this->members->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->members);
  }

  /**
   * @returns EditableList<EditableNode> |
   * EditableList<ArrayCreationExpression> | EditableList<BinaryExpression> |
   * EditableList<ConditionalExpression> |
   * EditableList<DictionaryIntrinsicExpression> |
   * EditableList<ElementInitializer> | EditableList<FunctionCallExpression> |
   * EditableList<KeysetIntrinsicExpression> | EditableList<LiteralExpression>
   * | EditableList<ObjectCreationExpression> |
   * EditableList<PrefixUnaryExpression> |
   * EditableList<ScopeResolutionExpression> |
   * EditableList<SubscriptExpression> | EditableList<NameToken> |
   * EditableList<VariableExpression> | EditableList<VarrayIntrinsicExpression>
   * | EditableList<VectorIntrinsicExpression>
   */
  public function getMembersx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->members);
  }

  final public function getRightBracketUNTYPED(): EditableNode {
    return $this->rightBracket;
  }

  public function withRightBracket(RightBracketToken $value): this {
    if ($value === $this->rightBracket) {
      return $this;
    }
    return new static($this->left_bracket, $this->members, $value);
  }

  public function hasRightBracket(): bool {
    return $this->rightBracket !== null;
  }

  /**
   * @returns RightBracketToken
   */
  public function getRightBracket(): RightBracketToken {
    return
      TypeAssert\instance_of(RightBracketToken::class, $this->rightBracket);
  }

  /**
   * @returns RightBracketToken
   */
  public function getRightBracketx(): RightBracketToken {
    return $this->getRightBracket();
  }
}
