<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<62a3c70b949219b414f1810fa630b6df>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TupleTypeSpecifier extends EditableNode {

  public function __construct(
    private LeftParenToken $leftParen,
    private EditableList<EditableNode> $types,
    private RightParenToken $rightParen,
  ) {
    parent::__construct('tuple_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['tuple_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $types = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['tuple_types'],
      $file,
      $offset,
      $source,
    );
    $offset += $types->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['tuple_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    return new static($left_paren, $types, $right_paren);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_paren' => $this->leftParen,
      'types' => $this->types,
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
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $types = $this->types->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    if (
      $left_paren === $this->leftParen &&
      $types === $this->types &&
      $right_paren === $this->rightParen
    ) {
      return $this;
    }
    return new static($left_paren, $types, $right_paren);
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static($value, $this->types, $this->right_paren);
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

  final public function getTypesUNTYPED(): EditableNode {
    return $this->types;
  }

  public function withTypes(EditableList<EditableNode> $value): this {
    if ($value === $this->types) {
      return $this;
    }
    return new static($this->left_paren, $value, $this->right_paren);
  }

  public function hasTypes(): bool {
    return $this->types !== null;
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<SimpleTypeSpecifier> |
   * EditableList<VectorArrayTypeSpecifier> | EditableList<VectorTypeSpecifier>
   */
  public function getTypes(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->types);
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<SimpleTypeSpecifier> |
   * EditableList<VectorArrayTypeSpecifier> | EditableList<VectorTypeSpecifier>
   */
  public function getTypesx(): EditableList<EditableNode> {
    return $this->getTypes();
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static($this->left_paren, $this->types, $value);
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
