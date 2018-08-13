<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<43986b7e0b57909bf876aa6b8e8df8f9>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class RequireClause extends EditableNode {

  public function __construct(
    private RequireToken $keyword,
    private EditableToken $kind,
    private EditableNode $name,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('require_clause');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = RequireToken::fromJSON(
      /* UNSAFE_EXPR */ $json['require_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $kind = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['require_kind'],
      $file,
      $offset,
      $source,
    );
    $offset += $kind->getWidth();
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['require_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['require_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $kind, $name, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'kind' => $this->kind,
      'name' => $this->name,
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
    $kind = $this->kind->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $kind === $this->kind &&
      $name === $this->name &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($keyword, $kind, $name, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(RequireToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->kind, $this->name, $this->semicolon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns RequireToken
   */
  public function getKeyword(): RequireToken {
    return TypeAssert\instance_of(RequireToken::class, $this->keyword);
  }

  /**
   * @returns RequireToken
   */
  public function getKeywordx(): RequireToken {
    return $this->getKeyword();
  }

  final public function getKindUNTYPED(): EditableNode {
    return $this->kind;
  }

  public function withKind(EditableToken $value): this {
    if ($value === $this->kind) {
      return $this;
    }
    return new static($this->keyword, $value, $this->name, $this->semicolon);
  }

  public function hasKind(): bool {
    return $this->kind !== null;
  }

  /**
   * @returns ExtendsToken | ImplementsToken
   */
  public function getKind(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->kind);
  }

  /**
   * @returns ExtendsToken | ImplementsToken
   */
  public function getKindx(): EditableToken {
    return $this->getKind();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(EditableNode $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($this->keyword, $this->kind, $value, $this->semicolon);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns GenericTypeSpecifier | SimpleTypeSpecifier
   */
  public function getName(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  /**
   * @returns GenericTypeSpecifier | SimpleTypeSpecifier
   */
  public function getNamex(): EditableNode {
    return $this->getName();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->keyword, $this->kind, $this->name, $value);
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
