<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<06ba50f23b36ac6033ee9cde2efcedca>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class LetStatement extends EditableNode {

  public function __construct(
    private EditableNode $keyword,
    private EditableNode $name,
    private EditableNode $colon,
    private EditableNode $type,
    private EditableNode $initializer,
    private EditableNode $semicolon,
  ) {
    parent::__construct('let_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['let_statement_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['let_statement_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $colon = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['let_statement_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['let_statement_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $initializer = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['let_statement_initializer'],
      $file,
      $offset,
      $source,
    );
    $offset += $initializer->getWidth();
    $semicolon = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['let_statement_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $name, $colon, $type, $initializer, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'name' => $this->name,
      'colon' => $this->colon,
      'type' => $this->type,
      'initializer' => $this->initializer,
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
    $name = $this->name->rewrite($rewriter, $parents);
    $colon = $this->colon->rewrite($rewriter, $parents);
    $type = $this->type->rewrite($rewriter, $parents);
    $initializer = $this->initializer->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $name === $this->name &&
      $colon === $this->colon &&
      $type === $this->type &&
      $initializer === $this->initializer &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($keyword, $name, $colon, $type, $initializer, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(EditableNode $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->name,
      $this->colon,
      $this->type,
      $this->initializer,
      $this->semicolon,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns unknown
   */
  public function getKeyword(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->keyword);
  }

  /**
   * @returns unknown
   */
  public function getKeywordx(): EditableNode {
    return $this->getKeyword();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(EditableNode $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static(
      $this->keyword,
      $value,
      $this->colon,
      $this->type,
      $this->initializer,
      $this->semicolon,
    );
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns unknown
   */
  public function getName(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  /**
   * @returns unknown
   */
  public function getNamex(): EditableNode {
    return $this->getName();
  }

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(EditableNode $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->name,
      $value,
      $this->type,
      $this->initializer,
      $this->semicolon,
    );
  }

  public function hasColon(): bool {
    return $this->colon !== null;
  }

  /**
   * @returns unknown
   */
  public function getColon(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->colon);
  }

  /**
   * @returns unknown
   */
  public function getColonx(): EditableNode {
    return $this->getColon();
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->name,
      $this->colon,
      $value,
      $this->initializer,
      $this->semicolon,
    );
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns unknown
   */
  public function getType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns unknown
   */
  public function getTypex(): EditableNode {
    return $this->getType();
  }

  final public function getInitializerUNTYPED(): EditableNode {
    return $this->initializer;
  }

  public function withInitializer(EditableNode $value): this {
    if ($value === $this->initializer) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->name,
      $this->colon,
      $this->type,
      $value,
      $this->semicolon,
    );
  }

  public function hasInitializer(): bool {
    return $this->initializer !== null;
  }

  /**
   * @returns unknown
   */
  public function getInitializer(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->initializer);
  }

  /**
   * @returns unknown
   */
  public function getInitializerx(): EditableNode {
    return $this->getInitializer();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(EditableNode $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->name,
      $this->colon,
      $this->type,
      $this->initializer,
      $value,
    );
  }

  public function hasSemicolon(): bool {
    return $this->semicolon !== null;
  }

  /**
   * @returns unknown
   */
  public function getSemicolon(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->semicolon);
  }

  /**
   * @returns unknown
   */
  public function getSemicolonx(): EditableNode {
    return $this->getSemicolon();
  }
}
