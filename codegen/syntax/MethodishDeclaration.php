<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<6b39b7e1d27b4bf4e2d542784c9c6780>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class MethodishDeclaration
  extends EditableNode
  implements IFunctionishDeclaration {

  public function __construct(
    private ?AttributeSpecification $attribute,
    private FunctionDeclarationHeader $functionDeclHeader,
    private ?CompoundStatement $functionBody,
    private ?SemicolonToken $semicolon,
  ) {
    parent::__construct('methodish_declaration');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $attribute = AttributeSpecification::fromJSON(
      /* UNSAFE_EXPR */ $json['methodish_attribute'],
      $file,
      $offset,
      $source,
    );
    $offset += $attribute->getWidth();
    $function_decl_header = FunctionDeclarationHeader::fromJSON(
      /* UNSAFE_EXPR */ $json['methodish_function_decl_header'],
      $file,
      $offset,
      $source,
    );
    $offset += $function_decl_header->getWidth();
    $function_body = CompoundStatement::fromJSON(
      /* UNSAFE_EXPR */ $json['methodish_function_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $function_body->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['methodish_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return
      new static($attribute, $function_decl_header, $function_body, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'attribute' => $this->attribute,
      'function_decl_header' => $this->functionDeclHeader,
      'function_body' => $this->functionBody,
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
    $attribute = $this->attribute?->rewrite($rewriter, $parents);
    $function_decl_header =
      $this->functionDeclHeader->rewrite($rewriter, $parents);
    $function_body = $this->functionBody?->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon?->rewrite($rewriter, $parents);
    if (
      $attribute === $this->attribute &&
      $function_decl_header === $this->functionDeclHeader &&
      $function_body === $this->functionBody &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return
      new static($attribute, $function_decl_header, $function_body, $semicolon);
  }

  final public function getAttributeUNTYPED(): EditableNode {
    return $this->attribute;
  }

  public function withAttribute(?AttributeSpecification $value): this {
    if ($value === $this->attribute) {
      return $this;
    }
    return new static(
      $value,
      $this->function_decl_header,
      $this->function_body,
      $this->semicolon,
    );
  }

  public function hasAttribute(): bool {
    return $this->attribute !== null;
  }

  /**
   * @returns AttributeSpecification | Missing
   */
  public function getAttribute(): ?AttributeSpecification {
    if ($this->attribute->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(AttributeSpecification::class, $this->attribute);
  }

  /**
   * @returns AttributeSpecification
   */
  public function getAttributex(): AttributeSpecification {
    return
      TypeAssert\instance_of(AttributeSpecification::class, $this->attribute);
  }

  final public function getFunctionDeclHeaderUNTYPED(): EditableNode {
    return $this->functionDeclHeader;
  }

  public function withFunctionDeclHeader(
    FunctionDeclarationHeader $value,
  ): this {
    if ($value === $this->functionDeclHeader) {
      return $this;
    }
    return new static(
      $this->attribute,
      $value,
      $this->function_body,
      $this->semicolon,
    );
  }

  public function hasFunctionDeclHeader(): bool {
    return $this->functionDeclHeader !== null;
  }

  /**
   * @returns FunctionDeclarationHeader
   */
  public function getFunctionDeclHeader(): FunctionDeclarationHeader {
    return TypeAssert\instance_of(
      FunctionDeclarationHeader::class,
      $this->functionDeclHeader,
    );
  }

  /**
   * @returns FunctionDeclarationHeader
   */
  public function getFunctionDeclHeaderx(): FunctionDeclarationHeader {
    return $this->getFunctionDeclHeader();
  }

  final public function getFunctionBodyUNTYPED(): EditableNode {
    return $this->functionBody;
  }

  public function withFunctionBody(?CompoundStatement $value): this {
    if ($value === $this->functionBody) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->function_decl_header,
      $value,
      $this->semicolon,
    );
  }

  public function hasFunctionBody(): bool {
    return $this->functionBody !== null;
  }

  /**
   * @returns CompoundStatement | Missing
   */
  public function getFunctionBody(): ?CompoundStatement {
    if ($this->functionBody->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(CompoundStatement::class, $this->functionBody);
  }

  /**
   * @returns CompoundStatement
   */
  public function getFunctionBodyx(): CompoundStatement {
    return
      TypeAssert\instance_of(CompoundStatement::class, $this->functionBody);
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(?SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static(
      $this->attribute,
      $this->function_decl_header,
      $this->function_body,
      $value,
    );
  }

  public function hasSemicolon(): bool {
    return $this->semicolon !== null;
  }

  /**
   * @returns Missing | SemicolonToken
   */
  public function getSemicolon(): ?SemicolonToken {
    if ($this->semicolon->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(SemicolonToken::class, $this->semicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolonx(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->semicolon);
  }
}
