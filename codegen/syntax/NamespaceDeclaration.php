<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<81ecc87d8c86155cf7d2ca1a56ad93c1>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
abstract class NamespaceDeclarationGeneratedBase extends EditableNode {

  public function __construct(
    private NamespaceToken $keyword,
    private ?EditableNode $name,
    private EditableNode $body,
  ) {
    parent::__construct('namespace_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = NamespaceToken::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $body = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['namespace_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static($keyword, $name, $body);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'name' => $this->name,
      'body' => $this->body,
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
    $name = $this->name?->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $name === $this->name &&
      $body === $this->body
    ) {
      return $this;
    }
    return new static($keyword, $name, $body);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(NamespaceToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->name, $this->body);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns NamespaceToken
   */
  public function getKeyword(): NamespaceToken {
    return TypeAssert\instance_of(NamespaceToken::class, $this->keyword);
  }

  /**
   * @returns NamespaceToken
   */
  public function getKeywordx(): NamespaceToken {
    return $this->getKeyword();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(?EditableNode $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($this->keyword, $value, $this->body);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns Missing | QualifiedName | NameToken
   */
  public function getName(): ?EditableNode {
    if ($this->name->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  /**
   * @returns QualifiedName | NameToken
   */
  public function getNamex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(EditableNode $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static($this->keyword, $this->name, $value);
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns NamespaceBody | NamespaceEmptyBody
   */
  public function getBody(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->body);
  }

  /**
   * @returns NamespaceBody | NamespaceEmptyBody
   */
  public function getBodyx(): EditableNode {
    return $this->getBody();
  }
}
