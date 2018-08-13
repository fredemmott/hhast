<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<785b879eee8b9ab95e4268ddc03e9c98>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class GlobalStatement extends EditableNode {

  public function __construct(
    private GlobalToken $keyword,
    private EditableList<EditableNode> $variables,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('global_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = GlobalToken::fromJSON(
      /* UNSAFE_EXPR */ $json['global_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $variables = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['global_variables'],
      $file,
      $offset,
      $source,
    );
    $offset += $variables->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['global_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($keyword, $variables, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'variables' => $this->variables,
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
    $variables = $this->variables->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $variables === $this->variables &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($keyword, $variables, $semicolon);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(GlobalToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->variables, $this->semicolon);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns GlobalToken
   */
  public function getKeyword(): GlobalToken {
    return TypeAssert\instance_of(GlobalToken::class, $this->keyword);
  }

  /**
   * @returns GlobalToken
   */
  public function getKeywordx(): GlobalToken {
    return $this->getKeyword();
  }

  final public function getVariablesUNTYPED(): EditableNode {
    return $this->variables;
  }

  public function withVariables(EditableList<EditableNode> $value): this {
    if ($value === $this->variables) {
      return $this;
    }
    return new static($this->keyword, $value, $this->semicolon);
  }

  public function hasVariables(): bool {
    return $this->variables !== null;
  }

  /**
   * @returns EditableList<PrefixUnaryExpression> | EditableList<VariableToken>
   */
  public function getVariables(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->variables);
  }

  /**
   * @returns EditableList<PrefixUnaryExpression> | EditableList<VariableToken>
   */
  public function getVariablesx(): EditableList<EditableNode> {
    return $this->getVariables();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->keyword, $this->variables, $value);
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
