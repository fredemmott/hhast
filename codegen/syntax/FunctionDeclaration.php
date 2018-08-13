<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<c010e25fcf376b9c3b5799ebb0af055b>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class FunctionDeclaration
  extends EditableNode
  implements IFunctionishDeclaration {

  public function __construct(
    private ?AttributeSpecification $attributeSpec,
    private FunctionDeclarationHeader $declarationHeader,
    private CompoundStatement $body,
  ) {
    parent::__construct('function_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute_spec = AttributeSpecification::fromJSON(
      /* UNSAFE_EXPR */ $json['function_attribute_spec'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute_spec->getWidth();
    $declaration_header = FunctionDeclarationHeader::fromJSON(
      /* UNSAFE_EXPR */ $json['function_declaration_header'],
      $file,
      $offset,
      $source,
    );
    $offset += $declaration_header->getWidth();
    $body = CompoundStatement::fromJSON(
      /* UNSAFE_EXPR */ $json['function_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static($attribute_spec, $declaration_header, $body);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'attribute_spec' => $this->attributeSpec,
      'declaration_header' => $this->declarationHeader,
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
    $attribute_spec = $this->attributeSpec?->rewrite($rewriter, $parents);
    $declaration_header =
      $this->declarationHeader->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $attribute_spec === $this->attributeSpec &&
      $declaration_header === $this->declarationHeader &&
      $body === $this->body
    ) {
      return $this;
    }
    return new static($attribute_spec, $declaration_header, $body);
  }

  final public function getAttributeSpecUNTYPED(): EditableNode {
    return $this->attributeSpec;
  }

  public function withAttributeSpec(?AttributeSpecification $value): this {
    if ($value === $this->attributeSpec) {
      return $this;
    }
    return new static($value, $this->declaration_header, $this->body);
  }

  public function hasAttributeSpec(): bool {
    return $this->attributeSpec !== null;
  }

  /**
   * @returns AttributeSpecification | Missing
   */
  public function getAttributeSpec(): ?AttributeSpecification {
    if ($this->attributeSpec->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(
      AttributeSpecification::class,
      $this->attributeSpec,
    );
  }

  /**
   * @returns AttributeSpecification
   */
  public function getAttributeSpecx(): AttributeSpecification {
    return TypeAssert\instance_of(
      AttributeSpecification::class,
      $this->attributeSpec,
    );
  }

  final public function getDeclarationHeaderUNTYPED(): EditableNode {
    return $this->declarationHeader;
  }

  public function withDeclarationHeader(
    FunctionDeclarationHeader $value,
  ): this {
    if ($value === $this->declarationHeader) {
      return $this;
    }
    return new static($this->attribute_spec, $value, $this->body);
  }

  public function hasDeclarationHeader(): bool {
    return $this->declarationHeader !== null;
  }

  /**
   * @returns FunctionDeclarationHeader
   */
  public function getDeclarationHeader(): FunctionDeclarationHeader {
    return TypeAssert\instance_of(
      FunctionDeclarationHeader::class,
      $this->declarationHeader,
    );
  }

  /**
   * @returns FunctionDeclarationHeader
   */
  public function getDeclarationHeaderx(): FunctionDeclarationHeader {
    return $this->getDeclarationHeader();
  }

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(CompoundStatement $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static($this->attribute_spec, $this->declaration_header, $value);
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns CompoundStatement
   */
  public function getBody(): CompoundStatement {
    return TypeAssert\instance_of(CompoundStatement::class, $this->body);
  }

  /**
   * @returns CompoundStatement
   */
  public function getBodyx(): CompoundStatement {
    return $this->getBody();
  }
}
