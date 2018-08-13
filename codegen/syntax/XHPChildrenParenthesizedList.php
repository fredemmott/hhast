<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<72494bf2047dad5b2288bb28aaaffe98>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPChildrenParenthesizedList extends EditableNode {

  public function __construct(
    private EditableNode $leftParen,
    private EditableNode $xhpChildren,
    private EditableNode $rightParen,
  ) {
    parent::__construct('xhp_children_parenthesized_list');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $left_paren = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_children_list_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $xhp_children = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_children_list_xhp_children'],
      $file,
      $offset,
      $source,
    );
    $offset += $xhp_children->getWidth();
    $right_paren = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_children_list_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    return new static($left_paren, $xhp_children, $right_paren);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'left_paren' => $this->leftParen,
      'xhp_children' => $this->xhpChildren,
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
    $xhp_children = $this->xhpChildren->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    if (
      $left_paren === $this->leftParen &&
      $xhp_children === $this->xhpChildren &&
      $right_paren === $this->rightParen
    ) {
      return $this;
    }
    return new static($left_paren, $xhp_children, $right_paren);
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(EditableNode $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static($value, $this->xhp_children, $this->right_paren);
  }

  public function hasLeftParen(): bool {
    return $this->leftParen !== null;
  }

  /**
   * @returns unknown
   */
  public function getLeftParen(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->leftParen);
  }

  /**
   * @returns unknown
   */
  public function getLeftParenx(): EditableNode {
    return $this->getLeftParen();
  }

  final public function getXhpChildrenUNTYPED(): EditableNode {
    return $this->xhpChildren;
  }

  public function withXhpChildren(EditableNode $value): this {
    if ($value === $this->xhpChildren) {
      return $this;
    }
    return new static($this->left_paren, $value, $this->right_paren);
  }

  public function hasXhpChildren(): bool {
    return $this->xhpChildren !== null;
  }

  /**
   * @returns unknown
   */
  public function getXhpChildren(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->xhpChildren);
  }

  /**
   * @returns unknown
   */
  public function getXhpChildrenx(): EditableNode {
    return $this->getXhpChildren();
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(EditableNode $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static($this->left_paren, $this->xhp_children, $value);
  }

  public function hasRightParen(): bool {
    return $this->rightParen !== null;
  }

  /**
   * @returns unknown
   */
  public function getRightParen(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->rightParen);
  }

  /**
   * @returns unknown
   */
  public function getRightParenx(): EditableNode {
    return $this->getRightParen();
  }
}
