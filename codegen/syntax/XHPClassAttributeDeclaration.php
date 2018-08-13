<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<47777ed774a5c72db93b909349820816>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class XHPClassAttributeDeclaration extends EditableNode {

  public function __construct(
    private AttributeToken $keyword,
    private EditableList<EditableNode> $attributes,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('xhp_class_attribute_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = AttributeToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_attribute_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $attributes = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_attribute_attributes'],
      $file,
      $offset,
      $source,
    );
    $offset += $attributes->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['xhp_attribute_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $attributes, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'attributes' => $this->attributes,
      'semicolon' => $this->semicolon,
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
    $attributes = $this->attributes->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $attributes === $this->attributes &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($keyword, $attributes, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(AttributeToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->attributes, $this->semicolon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns AttributeToken
   */
  public function getKeyword(): AttributeToken {
    return TypeAssert\instance_of(AttributeToken::class, $this->keyword);
  }

  /**
   * @returns AttributeToken
   */
  public function getKeywordx(): AttributeToken {
    return $this->getKeyword();
  }

  final public function getAttributesUNTYPED(): EditableNode {
    return $this->attributes;
  }

  public function withAttributes(EditableList<EditableNode> $value): this {
    if ($value === $this->attributes) {
      return $this;
    }
    return new static($this->keyword, $value, $this->semicolon);
  }

  public function hasAttributes(): bool {
    return $this->attributes !== null;
  }

  /**
   * @returns EditableList<XHPClassAttribute> | EditableList<EditableNode> |
   * EditableList<XHPSimpleClassAttribute>
   */
  public function getAttributes(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->attributes);
  }

  /**
   * @returns EditableList<XHPClassAttribute> | EditableList<EditableNode> |
   * EditableList<XHPSimpleClassAttribute>
   */
  public function getAttributesx(): EditableList<EditableNode> {
    return $this->getAttributes();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->keyword, $this->attributes, $value);
  }

  public function hasSemicolon(): bool {
    return $this->semicolon !== null;
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolon(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->semicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolonx(): SemicolonToken {
    return $this->getSemicolon();
  }
}
