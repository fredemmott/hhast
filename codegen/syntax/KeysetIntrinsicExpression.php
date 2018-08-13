<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<41668f3bceb685641e2385dca152aeeb>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class KeysetIntrinsicExpression extends EditableNode {

  public function __construct(
    private KeysetToken $keyword,
    private ?EditableNode $explicitType,
    private LeftBracketToken $leftBracket,
    private ?EditableList<EditableNode> $members,
    private RightBracketToken $rightBracket,
  ) {
    parent::__construct('keyset_intrinsic_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = KeysetToken::fromJSON(
      /* UNSAFE_EXPR */ $json['keyset_intrinsic_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $explicit_type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['keyset_intrinsic_explicit_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $explicit_type->getWidth();
    $left_bracket = LeftBracketToken::fromJSON(
      /* UNSAFE_EXPR */ $json['keyset_intrinsic_left_bracket'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_bracket->getWidth();
    $members = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['keyset_intrinsic_members'],
      $file,
      $offset,
      $source,
    );
    $offset += $members->getWidth();
    $right_bracket = RightBracketToken::fromJSON(
      /* UNSAFE_EXPR */ $json['keyset_intrinsic_right_bracket'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_bracket->getWidth();
    return new static(
      $keyword,
      $explicit_type,
      $left_bracket,
      $members,
      $right_bracket,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'explicit_type' => $this->explicitType,
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
    $keyword = $this->keyword->rewrite($rewriter, $parents);
    $explicit_type = $this->explicitType?->rewrite($rewriter, $parents);
    $left_bracket = $this->leftBracket->rewrite($rewriter, $parents);
    $members = $this->members?->rewrite($rewriter, $parents);
    $right_bracket = $this->rightBracket->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $explicit_type === $this->explicitType &&
      $left_bracket === $this->leftBracket &&
      $members === $this->members &&
      $right_bracket === $this->rightBracket
    ) {
      return $this;
    }
    return new static(
      $keyword,
      $explicit_type,
      $left_bracket,
      $members,
      $right_bracket,
    );
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(KeysetToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->explicit_type,
      $this->left_bracket,
      $this->members,
      $this->right_bracket,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns KeysetToken
   */
  public function getKeyword(): KeysetToken {
    return TypeAssert\instance_of(KeysetToken::class, $this->keyword);
  }

  /**
   * @returns KeysetToken
   */
  public function getKeywordx(): KeysetToken {
    return $this->getKeyword();
  }

  final public function getExplicitTypeUNTYPED(): EditableNode {
    return $this->explicitType;
  }

  public function withExplicitType(?EditableNode $value): this {
    if ($value === $this->explicitType) {
      return $this;
    }
    return new static(
      $this->keyword,
      $value,
      $this->left_bracket,
      $this->members,
      $this->right_bracket,
    );
  }

  public function hasExplicitType(): bool {
    return $this->explicitType !== null;
  }

  /**
   * @returns Missing
   */
  public function getExplicitType(): ?EditableNode {
    if ($this->explicitType->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->explicitType);
  }

  /**
   * @returns
   */
  public function getExplicitTypex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->explicitType);
  }

  final public function getLeftBracketUNTYPED(): EditableNode {
    return $this->leftBracket;
  }

  public function withLeftBracket(LeftBracketToken $value): this {
    if ($value === $this->leftBracket) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->explicit_type,
      $value,
      $this->members,
      $this->right_bracket,
    );
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
    return new static(
      $this->keyword,
      $this->explicit_type,
      $this->left_bracket,
      $value,
      $this->right_bracket,
    );
  }

  public function hasMembers(): bool {
    return $this->members !== null;
  }

  /**
   * @returns EditableList<ArrayIntrinsicExpression> |
   * EditableList<EditableNode> | EditableList<CollectionLiteralExpression> |
   * EditableList<ConditionalExpression> |
   * EditableList<DictionaryIntrinsicExpression> |
   * EditableList<FunctionCallExpression> |
   * EditableList<KeysetIntrinsicExpression> | EditableList<LiteralExpression>
   * | EditableList<ObjectCreationExpression> |
   * EditableList<ScopeResolutionExpression> | EditableList<VariableExpression>
   * | EditableList<VectorIntrinsicExpression> | Missing
   */
  public function getMembers(): ?EditableList<EditableNode> {
    if ($this->members->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->members);
  }

  /**
   * @returns EditableList<ArrayIntrinsicExpression> |
   * EditableList<EditableNode> | EditableList<CollectionLiteralExpression> |
   * EditableList<ConditionalExpression> |
   * EditableList<DictionaryIntrinsicExpression> |
   * EditableList<FunctionCallExpression> |
   * EditableList<KeysetIntrinsicExpression> | EditableList<LiteralExpression>
   * | EditableList<ObjectCreationExpression> |
   * EditableList<ScopeResolutionExpression> | EditableList<VariableExpression>
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
    return new static(
      $this->keyword,
      $this->explicit_type,
      $this->left_bracket,
      $this->members,
      $value,
    );
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
