/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<949e590bcce0ae65488fd45835ea7593>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class EmbeddedSubscriptExpression
  extends EditableNode
  implements ILambdaBody, IExpression {

  private EditableNode $_receiver;
  private EditableNode $_left_bracket;
  private EditableNode $_index;
  private EditableNode $_right_bracket;

  public function __construct(
    EditableNode $receiver,
    EditableNode $left_bracket,
    EditableNode $index,
    EditableNode $right_bracket,
    ?__Private\SourceRef $source_ref = null,
  ) {
    $this->_receiver = $receiver;
    $this->_left_bracket = $left_bracket;
    $this->_index = $index;
    $this->_right_bracket = $right_bracket;
    parent::__construct('embedded_subscript_expression', $source_ref);
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $initial_offset,
    string $source,
  ): this {
    $offset = $initial_offset;
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
    $source_ref = shape(
      'file' => $file,
      'source' => $source,
      'offset' => $initial_offset,
      'width' => $offset - $initial_offset,
    );
    return new static(
      $receiver,
      $left_bracket,
      $index,
      $right_bracket,
      $source_ref,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, EditableNode> {
    return dict[
      'receiver' => $this->_receiver,
      'left_bracket' => $this->_left_bracket,
      'index' => $this->_index,
      'right_bracket' => $this->_right_bracket,
    ];
  }

  <<__Override>>
  public function rewriteChildren(
    self::TRewriter $rewriter,
    vec<EditableNode> $parents = vec[],
  ): this {
    $parents[] = $this;
    $receiver = $rewriter($this->_receiver, $parents);
    $left_bracket = $rewriter($this->_left_bracket, $parents);
    $index = $rewriter($this->_index, $parents);
    $right_bracket = $rewriter($this->_right_bracket, $parents);
    if (
      $receiver === $this->_receiver &&
      $left_bracket === $this->_left_bracket &&
      $index === $this->_index &&
      $right_bracket === $this->_right_bracket
    ) {
      return $this;
    }
    return new static($receiver, $left_bracket, $index, $right_bracket);
  }

  public function getReceiverUNTYPED(): EditableNode {
    return $this->_receiver;
  }

  public function withReceiver(EditableNode $value): this {
    if ($value === $this->_receiver) {
      return $this;
    }
    return new static(
      $value,
      $this->_left_bracket,
      $this->_index,
      $this->_right_bracket,
    );
  }

  public function hasReceiver(): bool {
    return !$this->_receiver->isMissing();
  }

  /**
   * @return unknown
   */
  public function getReceiver(): EditableNode {
    return $this->_receiver;
  }

  /**
   * @return unknown
   */
  public function getReceiverx(): EditableNode {
    return $this->getReceiver();
  }

  public function getLeftBracketUNTYPED(): EditableNode {
    return $this->_left_bracket;
  }

  public function withLeftBracket(EditableNode $value): this {
    if ($value === $this->_left_bracket) {
      return $this;
    }
    return new static(
      $this->_receiver,
      $value,
      $this->_index,
      $this->_right_bracket,
    );
  }

  public function hasLeftBracket(): bool {
    return !$this->_left_bracket->isMissing();
  }

  /**
   * @return unknown
   */
  public function getLeftBracket(): EditableNode {
    return $this->_left_bracket;
  }

  /**
   * @return unknown
   */
  public function getLeftBracketx(): EditableNode {
    return $this->getLeftBracket();
  }

  public function getIndexUNTYPED(): EditableNode {
    return $this->_index;
  }

  public function withIndex(EditableNode $value): this {
    if ($value === $this->_index) {
      return $this;
    }
    return new static(
      $this->_receiver,
      $this->_left_bracket,
      $value,
      $this->_right_bracket,
    );
  }

  public function hasIndex(): bool {
    return !$this->_index->isMissing();
  }

  /**
   * @return unknown
   */
  public function getIndex(): EditableNode {
    return $this->_index;
  }

  /**
   * @return unknown
   */
  public function getIndexx(): EditableNode {
    return $this->getIndex();
  }

  public function getRightBracketUNTYPED(): EditableNode {
    return $this->_right_bracket;
  }

  public function withRightBracket(EditableNode $value): this {
    if ($value === $this->_right_bracket) {
      return $this;
    }
    return new static(
      $this->_receiver,
      $this->_left_bracket,
      $this->_index,
      $value,
    );
  }

  public function hasRightBracket(): bool {
    return !$this->_right_bracket->isMissing();
  }

  /**
   * @return unknown
   */
  public function getRightBracket(): EditableNode {
    return $this->_right_bracket;
  }

  /**
   * @return unknown
   */
  public function getRightBracketx(): EditableNode {
    return $this->getRightBracket();
  }
}
