<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<7d3d3f56f2067c566793708f19fd571b>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPExpression extends EditableNode {

  public function __construct(
    private XHPOpen $open,
    private ?EditableList<EditableNode> $body,
    private ?XHPClose $close,
  ) {
    parent::__construct('xhp_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $open = XHPOpen::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_open'],
      $file,
      $offset,
      $source,
    );
    $offset += $open->getWidth();
    $body = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    $close = XHPClose::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_close'],
      $file,
      $offset,
      $source,
    );
    $offset += $close->getWidth();
    return new static($open, $body, $close);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'open' => $this->open,
      'body' => $this->body,
      'close' => $this->close,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $open = $this->open->rewrite($rewriter, $parents);
    $body = $this->body?->rewrite($rewriter, $parents);
    $close = $this->close?->rewrite($rewriter, $parents);
    if (
      $open === $this->open && $body === $this->body && $close === $this->close
    ) {
      return $this;
    }
    return new static($open, $body, $close);
  }

  final public function getOpenUNTYPED(): EditableNode {
    return $this->open;
  }

  public function withOpen(XHPOpen $value): this {
    if ($value === $this->open) {
      return $this;
    }
    return new static($value, $this->body, $this->close);
  }

  public function hasOpen(): bool {
    return $this->open !== null;
  }

  /**
   * @returns XHPOpen
   */
  public function getOpen(): XHPOpen {
    return TypeAssert\instance_of(XHPOpen::class, $this->open);
  }

  /**
   * @returns XHPOpen
   */
  public function getOpenx(): XHPOpen {
    return $this->getOpen();
  }

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(?EditableList<EditableNode> $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static($this->open, $value, $this->close);
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getBody(): ?EditableList<EditableNode> {
    if ($this->body->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->body);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getBodyx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->body);
  }

  final public function getCloseUNTYPED(): EditableNode {
    return $this->close;
  }

  public function withClose(?XHPClose $value): this {
    if ($value === $this->close) {
      return $this;
    }
    return new static($this->open, $this->body, $value);
  }

  public function hasClose(): bool {
    return $this->close !== null;
  }

  /**
   * @returns Missing | XHPClose
   */
  public function getClose(): ?XHPClose {
    if ($this->close->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(XHPClose::class, $this->close);
  }

  /**
   * @returns XHPClose
   */
  public function getClosex(): XHPClose {
    return TypeAssert\instance_of(XHPClose::class, $this->close);
  }
}
