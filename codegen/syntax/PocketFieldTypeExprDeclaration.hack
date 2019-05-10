/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<f792a87fb1ecd2fb2507800d0f1fcf9e>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class PocketFieldTypeExprDeclaration extends EditableNode {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    self::class,
    EditableNode::class,
  ];

  private EditableNode $_case;
  private EditableNode $_type;
  private EditableNode $_name;
  private EditableNode $_semicolon;

  public function __construct(
    EditableNode $case,
    EditableNode $type,
    EditableNode $name,
    EditableNode $semicolon,
    ?__Private\SourceRef $source_ref = null,
  ) {
    $this->_case = $case;
    $this->_type = $type;
    $this->_name = $name;
    $this->_semicolon = $semicolon;
    parent::__construct('pocket_field_type_expr_declaration', $source_ref);
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $initial_offset,
    string $source,
  ): this {
    $offset = $initial_offset;
    $case = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['pocket_field_type_expr_case'],
      $file,
      $offset,
      $source,
    );
    $offset += $case->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['pocket_field_type_expr_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['pocket_field_type_expr_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $semicolon = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['pocket_field_type_expr_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    $source_ref = shape(
      'file' => $file,
      'source' => $source,
      'offset' => $initial_offset,
      'width' => $offset - $initial_offset,
    );
    return new static($case, $type, $name, $semicolon, $source_ref);
  }

  <<__Override>>
  public function getChildren(): dict<string, EditableNode> {
    return dict[
      'case' => $this->_case,
      'type' => $this->_type,
      'name' => $this->_name,
      'semicolon' => $this->_semicolon,
    ];
  }

  <<__Override>>
  public function rewriteChildren(
    self::TRewriter $rewriter,
    vec<EditableNode> $parents = vec[],
  ): this {
    $parents[] = $this;
    $case = $rewriter($this->_case, $parents);
    $type = $rewriter($this->_type, $parents);
    $name = $rewriter($this->_name, $parents);
    $semicolon = $rewriter($this->_semicolon, $parents);
    if (
      $case === $this->_case &&
      $type === $this->_type &&
      $name === $this->_name &&
      $semicolon === $this->_semicolon
    ) {
      return $this;
    }
    return new static($case, $type, $name, $semicolon);
  }

  public function getCaseUNTYPED(): EditableNode {
    return $this->_case;
  }

  public function withCase(EditableNode $value): this {
    if ($value === $this->_case) {
      return $this;
    }
    return new static($value, $this->_type, $this->_name, $this->_semicolon);
  }

  public function hasCase(): bool {
    return !$this->_case->isMissing();
  }

  /**
   * @return unknown
   */
  public function getCase(): EditableNode {
    return $this->_case;
  }

  /**
   * @return unknown
   */
  public function getCasex(): EditableNode {
    return $this->getCase();
  }

  public function getTypeUNTYPED(): EditableNode {
    return $this->_type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->_type) {
      return $this;
    }
    return new static($this->_case, $value, $this->_name, $this->_semicolon);
  }

  public function hasType(): bool {
    return !$this->_type->isMissing();
  }

  /**
   * @return unknown
   */
  public function getType(): EditableNode {
    return $this->_type;
  }

  /**
   * @return unknown
   */
  public function getTypex(): EditableNode {
    return $this->getType();
  }

  public function getNameUNTYPED(): EditableNode {
    return $this->_name;
  }

  public function withName(EditableNode $value): this {
    if ($value === $this->_name) {
      return $this;
    }
    return new static($this->_case, $this->_type, $value, $this->_semicolon);
  }

  public function hasName(): bool {
    return !$this->_name->isMissing();
  }

  /**
   * @return unknown
   */
  public function getName(): EditableNode {
    return $this->_name;
  }

  /**
   * @return unknown
   */
  public function getNamex(): EditableNode {
    return $this->getName();
  }

  public function getSemicolonUNTYPED(): EditableNode {
    return $this->_semicolon;
  }

  public function withSemicolon(EditableNode $value): this {
    if ($value === $this->_semicolon) {
      return $this;
    }
    return new static($this->_case, $this->_type, $this->_name, $value);
  }

  public function hasSemicolon(): bool {
    return !$this->_semicolon->isMissing();
  }

  /**
   * @return unknown
   */
  public function getSemicolon(): EditableNode {
    return $this->_semicolon;
  }

  /**
   * @return unknown
   */
  public function getSemicolonx(): EditableNode {
    return $this->getSemicolon();
  }
}
