/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<4f5d89363e23fb8962465f77ae65de58>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class PocketAtomExpression
  extends EditableNode
  implements ILambdaBody, IExpression {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    self::class,
    EditableNode::class,
    ILambdaBody::class,
    IExpression::class,
  ];

  private EditableNode $_glyph;
  private EditableNode $_expression;

  public function __construct(
    EditableNode $glyph,
    EditableNode $expression,
    ?__Private\SourceRef $source_ref = null,
  ) {
    $this->_glyph = $glyph;
    $this->_expression = $expression;
    parent::__construct('pocket_atom_expression', $source_ref);
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $initial_offset,
    string $source,
  ): this {
    $offset = $initial_offset;
    $glyph = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['pocket_atom_glyph'],
      $file,
      $offset,
      $source,
    );
    $offset += $glyph->getWidth();
    $expression = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['pocket_atom_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    $source_ref = shape(
      'file' => $file,
      'source' => $source,
      'offset' => $initial_offset,
      'width' => $offset - $initial_offset,
    );
    return new static($glyph, $expression, $source_ref);
  }

  <<__Override>>
  public function getChildren(): dict<string, EditableNode> {
    return dict[
      'glyph' => $this->_glyph,
      'expression' => $this->_expression,
    ];
  }

  <<__Override>>
  public function rewriteChildren(
    self::TRewriter $rewriter,
    vec<EditableNode> $parents = vec[],
  ): this {
    $parents[] = $this;
    $glyph = $rewriter($this->_glyph, $parents);
    $expression = $rewriter($this->_expression, $parents);
    if ($glyph === $this->_glyph && $expression === $this->_expression) {
      return $this;
    }
    return new static($glyph, $expression);
  }

  public function getGlyphUNTYPED(): EditableNode {
    return $this->_glyph;
  }

  public function withGlyph(EditableNode $value): this {
    if ($value === $this->_glyph) {
      return $this;
    }
    return new static($value, $this->_expression);
  }

  public function hasGlyph(): bool {
    return !$this->_glyph->isMissing();
  }

  /**
   * @return unknown
   */
  public function getGlyph(): EditableNode {
    return $this->_glyph;
  }

  /**
   * @return unknown
   */
  public function getGlyphx(): EditableNode {
    return $this->getGlyph();
  }

  public function getExpressionUNTYPED(): EditableNode {
    return $this->_expression;
  }

  public function withExpression(EditableNode $value): this {
    if ($value === $this->_expression) {
      return $this;
    }
    return new static($this->_glyph, $value);
  }

  public function hasExpression(): bool {
    return !$this->_expression->isMissing();
  }

  /**
   * @return unknown
   */
  public function getExpression(): EditableNode {
    return $this->_expression;
  }

  /**
   * @return unknown
   */
  public function getExpressionx(): EditableNode {
    return $this->getExpression();
  }
}
