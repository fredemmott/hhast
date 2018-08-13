<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<811a55c9edd2e4710eb97c6f978d1ae0>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ListExpression extends EditableNode {

  public function __construct(
    private ListToken $keyword,
    private LeftParenToken $leftParen,
    private ?EditableList<EditableNode> $members,
    private RightParenToken $rightParen,
  ) {
    parent::__construct('list_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = ListToken::fromJSON(
      /* UNSAFE_EXPR */ $json['list_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['list_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $members = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['list_members'],
      $file,
      $offset,
      $source,
    );
    $offset += $members->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['list_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    return new static($keyword, $left_paren, $members, $right_paren);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'members' => $this->members,
      'right_paren' => $this->rightParen,
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
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $members = $this->members?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $members === $this->members &&
      $right_paren === $this->rightParen
    ) {
      return $this;
    }
    return new static($keyword, $left_paren, $members, $right_paren);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(ListToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return
      new static($value, $this->left_paren, $this->members, $this->right_paren);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns ListToken
   */
  public function getKeyword(): ListToken {
    return TypeAssert\instance_of(ListToken::class, $this->keyword);
  }

  /**
   * @returns ListToken
   */
  public function getKeywordx(): ListToken {
    return $this->getKeyword();
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return
      new static($this->keyword, $value, $this->members, $this->right_paren);
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

  final public function getMembersUNTYPED(): EditableNode {
    return $this->members;
  }

  public function withMembers(?EditableList<EditableNode> $value): this {
    if ($value === $this->members) {
      return $this;
    }
    return
      new static($this->keyword, $this->left_paren, $value, $this->right_paren);
  }

  public function hasMembers(): bool {
    return $this->members !== null;
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<ListExpression> |
   * EditableList<MemberSelectionExpression> | EditableList<Missing> |
   * EditableList<SubscriptExpression> | EditableList<VariableExpression> |
   * Missing
   */
  public function getMembers(): ?EditableList<EditableNode> {
    if ($this->members->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->members);
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<ListExpression> |
   * EditableList<MemberSelectionExpression> | EditableList<Missing> |
   * EditableList<SubscriptExpression> | EditableList<VariableExpression>
   */
  public function getMembersx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->members);
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return
      new static($this->keyword, $this->left_paren, $this->members, $value);
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
}
