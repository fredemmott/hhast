<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<877fd9ca9677c1a694c2eee86a38d5ff>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class CatchClause extends EditableNode {

  public function __construct(
    private CatchToken $keyword,
    private LeftParenToken $leftParen,
    private SimpleTypeSpecifier $type,
    private ?VariableToken $variable,
    private RightParenToken $rightParen,
    private CompoundStatement $body,
  ) {
    parent::__construct('catch_clause');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = CatchToken::fromJSON(
      /* UNSAFE_EXPR */ $json['catch_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['catch_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $type = SimpleTypeSpecifier::fromJSON(
      /* UNSAFE_EXPR */ $json['catch_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    $variable = VariableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['catch_variable'],
      $file,
      $offset,
      $source,
    );
    $offset += $variable->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['catch_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $body = CompoundStatement::fromJSON(
      /* UNSAFE_EXPR */ $json['catch_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return
      new static($keyword, $left_paren, $type, $variable, $right_paren, $body);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_paren' => $this->leftParen,
      'type' => $this->type,
      'variable' => $this->variable,
      'right_paren' => $this->rightParen,
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
    $left_paren = $this->leftParen->rewrite($rewriter, $parents);
    $type = $this->type->rewrite($rewriter, $parents);
    $variable = $this->variable?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_paren === $this->leftParen &&
      $type === $this->type &&
      $variable === $this->variable &&
      $right_paren === $this->rightParen &&
      $body === $this->body
    ) {
      return $this;
    }
    return
      new static($keyword, $left_paren, $type, $variable, $right_paren, $body);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(CatchToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->type,
      $this->variable,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns CatchToken
   */
  public function getKeyword(): CatchToken {
    return TypeAssert\instance_of(CatchToken::class, $this->keyword);
  }

  /**
   * @returns CatchToken
   */
  public function getKeywordx(): CatchToken {
    return $this->getKeyword();
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static(
      $this->keyword,
      $value,
      $this->type,
      $this->variable,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasLeftParen(): bool {
    return $this->leftParen !== null;
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParen(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParenx(): LeftParenToken {
    return $this->getLeftParen();
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(SimpleTypeSpecifier $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $value,
      $this->variable,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns SimpleTypeSpecifier
   */
  public function getType(): SimpleTypeSpecifier {
    return TypeAssert\instance_of(SimpleTypeSpecifier::class, $this->type);
  }

  /**
   * @returns SimpleTypeSpecifier
   */
  public function getTypex(): SimpleTypeSpecifier {
    return $this->getType();
  }

  final public function getVariableUNTYPED(): EditableNode {
    return $this->variable;
  }

  public function withVariable(?VariableToken $value): this {
    if ($value === $this->variable) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->type,
      $value,
      $this->right_paren,
      $this->body,
    );
  }

  public function hasVariable(): bool {
    return $this->variable !== null;
  }

  /**
   * @returns Missing | VariableToken
   */
  public function getVariable(): ?VariableToken {
    if ($this->variable->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(VariableToken::class, $this->variable);
  }

  /**
   * @returns VariableToken
   */
  public function getVariablex(): VariableToken {
    return TypeAssert\instance_of(VariableToken::class, $this->variable);
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->type,
      $this->variable,
      $value,
      $this->body,
    );
  }

  public function hasRightParen(): bool {
    return $this->rightParen !== null;
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParen(): RightParenToken {
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParenx(): RightParenToken {
    return $this->getRightParen();
  }

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(CompoundStatement $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static(
      $this->keyword,
      $this->left_paren,
      $this->type,
      $this->variable,
      $this->right_paren,
      $value,
    );
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
