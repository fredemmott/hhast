<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<a57cb15a33960121ffd33e5cd5334e27>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class EmbeddedSubscriptExpression extends EditableNode {

  public function __construct(
    private EditableNode $receiver,
    private EditableNode $leftBracket,
    private EditableNode $index,
    private EditableNode $rightBracket,
  ) {
    parent::__construct('embedded_subscript_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $receiver = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['embedded_subscript_receiver'],
      $file,
      $offset,
      $source,
    );
    $offset += $receiver->getWidth();
    $left_bracket = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['embedded_subscript_left_bracket'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_bracket->getWidth();
    $index = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['embedded_subscript_index'],
      $file,
      $offset,
      $source,
    );
    $offset += $index->getWidth();
    $right_bracket = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['embedded_subscript_right_bracket'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_bracket->getWidth();
    return new static($receiver, $left_bracket, $index, $right_bracket);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'receiver' => $this->receiver,
      'left_bracket' => $this->leftBracket,
      'index' => $this->index,
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
    $receiver = $this->receiver->rewrite($rewriter, $parents);
    $left_bracket = $this->leftBracket->rewrite($rewriter, $parents);
    $index = $this->index->rewrite($rewriter, $parents);
    $right_bracket = $this->rightBracket->rewrite($rewriter, $parents);
    if (
      $receiver === $this->receiver &&
      $left_bracket === $this->leftBracket &&
      $index === $this->index &&
      $right_bracket === $this->rightBracket
    ) {
      return $this;
    }
    return new static($receiver, $left_bracket, $index, $right_bracket);
  }

  final public function getReceiverUNTYPED(): EditableNode {
    return $this->receiver;
  }

  public function withReceiver(EditableNode $value): this {
    if ($value === $this->receiver) {
      return $this;
    }
    return new static(
      $value,
      $this->left_bracket,
      $this->index,
      $this->right_bracket,
    );
  }

  public function hasReceiver(): bool {
    return $this->receiver !== null;
  }

  /**
   * @returns unknown
   */
  public function getReceiver(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->receiver);
  }

  /**
   * @returns unknown
   */
  public function getReceiverx(): EditableNode {
    return $this->getReceiver();
  }

  final public function getLeftBracketUNTYPED(): EditableNode {
    return $this->leftBracket;
  }

  public function withLeftBracket(EditableNode $value): this {
    if ($value === $this->leftBracket) {
      return $this;
    }
    return
      new static($this->receiver, $value, $this->index, $this->right_bracket);
  }

  public function hasLeftBracket(): bool {
    return $this->leftBracket !== null;
  }

  /**
   * @returns unknown
   */
  public function getLeftBracket(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->leftBracket);
  }

  /**
   * @returns unknown
   */
  public function getLeftBracketx(): EditableNode {
    return $this->getLeftBracket();
  }

  final public function getIndexUNTYPED(): EditableNode {
    return $this->index;
  }

  public function withIndex(EditableNode $value): this {
    if ($value === $this->index) {
      return $this;
    }
    return new static(
      $this->receiver,
      $this->left_bracket,
      $value,
      $this->right_bracket,
    );
  }

  public function hasIndex(): bool {
    return $this->index !== null;
  }

  /**
   * @returns unknown
   */
  public function getIndex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->index);
  }

  /**
   * @returns unknown
   */
  public function getIndexx(): EditableNode {
    return $this->getIndex();
  }

  final public function getRightBracketUNTYPED(): EditableNode {
    return $this->rightBracket;
  }

  public function withRightBracket(EditableNode $value): this {
    if ($value === $this->rightBracket) {
      return $this;
    }
    return
      new static($this->receiver, $this->left_bracket, $this->index, $value);
  }

  public function hasRightBracket(): bool {
    return $this->rightBracket !== null;
  }

  /**
   * @returns unknown
   */
  public function getRightBracket(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->rightBracket);
  }

  /**
   * @returns unknown
   */
  public function getRightBracketx(): EditableNode {
    return $this->getRightBracket();
  }
}
