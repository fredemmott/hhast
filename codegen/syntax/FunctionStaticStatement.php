<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<18707ecf63d7fdc5fa6dee60d5bc26f9>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class FunctionStaticStatement extends EditableNode {

  public function __construct(
    private StaticToken $staticKeyword,
    private EditableList<StaticDeclarator> $declarations,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('function_static_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $static_keyword = StaticToken::fromJSON(
      /* UNSAFE_EXPR */ $json['static_static_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $static_keyword->getWidth();
    $declarations = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['static_declarations'],
      $file,
      $offset,
      $source,
    );
    $offset += $declarations->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['static_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($static_keyword, $declarations, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'static_keyword' => $this->staticKeyword,
      'declarations' => $this->declarations,
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
    $static_keyword = $this->staticKeyword->rewrite($rewriter, $parents);
    $declarations = $this->declarations->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $static_keyword === $this->staticKeyword &&
      $declarations === $this->declarations &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($static_keyword, $declarations, $semicolon);
  }

  final public function getStaticKeywordUNTYPED(): EditableNode {
    return $this->staticKeyword;
  }

  public function withStaticKeyword(StaticToken $value): this {
    if ($value === $this->staticKeyword) {
      return $this;
    }
    return new static($value, $this->declarations, $this->semicolon);
  }

  public function hasStaticKeyword(): bool {
    return $this->staticKeyword !== null;
  }

  /**
   * @returns StaticToken
   */
  public function getStaticKeyword(): StaticToken {
    return TypeAssert\instance_of(StaticToken::class, $this->staticKeyword);
  }

  /**
   * @returns StaticToken
   */
  public function getStaticKeywordx(): StaticToken {
    return $this->getStaticKeyword();
  }

  final public function getDeclarationsUNTYPED(): EditableNode {
    return $this->declarations;
  }

  public function withDeclarations(
    EditableList<StaticDeclarator> $value,
  ): this {
    if ($value === $this->declarations) {
      return $this;
    }
    return new static($this->static_keyword, $value, $this->semicolon);
  }

  public function hasDeclarations(): bool {
    return $this->declarations !== null;
  }

  /**
   * @returns EditableList<StaticDeclarator>
   */
  public function getDeclarations(): EditableList<StaticDeclarator> {
    return TypeAssert\instance_of(EditableList::class, $this->declarations);
  }

  /**
   * @returns EditableList<StaticDeclarator>
   */
  public function getDeclarationsx(): EditableList<StaticDeclarator> {
    return $this->getDeclarations();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->static_keyword, $this->declarations, $value);
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
