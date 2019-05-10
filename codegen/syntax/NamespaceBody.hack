/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<3659a8222fa0c427d4701e4ff45a5d8e>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class NamespaceBody extends EditableNode implements INamespaceBody {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    self::class,
    EditableNode::class,
    INamespaceBody::class,
  ];

  private EditableNode $_left_brace;
  private EditableNode $_declarations;
  private EditableNode $_right_brace;

  public function __construct(
    EditableNode $left_brace,
    EditableNode $declarations,
    EditableNode $right_brace,
    ?__Private\SourceRef $source_ref = null,
  ) {
    $this->_left_brace = $left_brace;
    $this->_declarations = $declarations;
    $this->_right_brace = $right_brace;
    parent::__construct('namespace_body', $source_ref);
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $initial_offset,
    string $source,
  ): this {
    $offset = $initial_offset;
    $left_brace = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_left_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_brace->getWidth();
    $declarations = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_declarations'],
      $file,
      $offset,
      $source,
    );
    $offset += $declarations->getWidth();
    $right_brace = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_right_brace'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_brace->getWidth();
    $source_ref = shape(
      'file' => $file,
      'source' => $source,
      'offset' => $initial_offset,
      'width' => $offset - $initial_offset,
    );
    return new static($left_brace, $declarations, $right_brace, $source_ref);
  }

  <<__Override>>
  public function getChildren(): dict<string, EditableNode> {
    return dict[
      'left_brace' => $this->_left_brace,
      'declarations' => $this->_declarations,
      'right_brace' => $this->_right_brace,
    ];
  }

  <<__Override>>
  public function rewriteChildren(
    self::TRewriter $rewriter,
    vec<EditableNode> $parents = vec[],
  ): this {
    $parents[] = $this;
    $left_brace = $rewriter($this->_left_brace, $parents);
    $declarations = $rewriter($this->_declarations, $parents);
    $right_brace = $rewriter($this->_right_brace, $parents);
    if (
      $left_brace === $this->_left_brace &&
      $declarations === $this->_declarations &&
      $right_brace === $this->_right_brace
    ) {
      return $this;
    }
    return new static($left_brace, $declarations, $right_brace);
  }

  public function getLeftBraceUNTYPED(): EditableNode {
    return $this->_left_brace;
  }

  public function withLeftBrace(EditableNode $value): this {
    if ($value === $this->_left_brace) {
      return $this;
    }
    return new static($value, $this->_declarations, $this->_right_brace);
  }

  public function hasLeftBrace(): bool {
    return !$this->_left_brace->isMissing();
  }

  /**
   * @return LeftBraceToken
   */
  public function getLeftBrace(): LeftBraceToken {
    return TypeAssert\instance_of(LeftBraceToken::class, $this->_left_brace);
  }

  /**
   * @return LeftBraceToken
   */
  public function getLeftBracex(): LeftBraceToken {
    return $this->getLeftBrace();
  }

  public function getDeclarationsUNTYPED(): EditableNode {
    return $this->_declarations;
  }

  public function withDeclarations(EditableNode $value): this {
    if ($value === $this->_declarations) {
      return $this;
    }
    return new static($this->_left_brace, $value, $this->_right_brace);
  }

  public function hasDeclarations(): bool {
    return !$this->_declarations->isMissing();
  }

  /**
   * @return EditableList<EditableNode> | null
   */
  public function getDeclarations(): ?EditableList<EditableNode> {
    if ($this->_declarations->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->_declarations);
  }

  /**
   * @return EditableList<EditableNode>
   */
  public function getDeclarationsx(): EditableList<EditableNode> {
    return TypeAssert\not_null($this->getDeclarations());
  }

  public function getRightBraceUNTYPED(): EditableNode {
    return $this->_right_brace;
  }

  public function withRightBrace(EditableNode $value): this {
    if ($value === $this->_right_brace) {
      return $this;
    }
    return new static($this->_left_brace, $this->_declarations, $value);
  }

  public function hasRightBrace(): bool {
    return !$this->_right_brace->isMissing();
  }

  /**
   * @return RightBraceToken
   */
  public function getRightBrace(): RightBraceToken {
    return TypeAssert\instance_of(RightBraceToken::class, $this->_right_brace);
  }

  /**
   * @return RightBraceToken
   */
  public function getRightBracex(): RightBraceToken {
    return $this->getRightBrace();
  }
}
