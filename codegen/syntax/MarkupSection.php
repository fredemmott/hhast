<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<2e219122e17af0f76cb049e251a38472>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class MarkupSection extends EditableNode {

  public function __construct(
    private ?QuestionGreaterThanToken $prefix,
    private ?MarkupToken $text,
    private ?MarkupSuffix $suffix,
    private ?ExpressionStatement $expression,
  ) {
    parent::__construct('markup_section');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $prefix = QuestionGreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['markup_prefix'],
      $file,
      $offset,
      $source,
    );
    $offset += $prefix->getWidth();
    $text = MarkupToken::fromJSON(
      /* UNSAFE_EXPR */ $json['markup_text'],
      $file,
      $offset,
      $source,
    );
    $offset += $text->getWidth();
    $suffix = MarkupSuffix::fromJSON(
      /* UNSAFE_EXPR */ $json['markup_suffix'],
      $file,
      $offset,
      $source,
    );
    $offset += $suffix->getWidth();
    $expression = ExpressionStatement::fromJSON(
      /* UNSAFE_EXPR */ $json['markup_expression'],
      $file,
      $offset,
      $source,
    );
    $offset += $expression->getWidth();
    return new static($prefix, $text, $suffix, $expression);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'prefix' => $this->prefix,
      'text' => $this->text,
      'suffix' => $this->suffix,
      'expression' => $this->expression,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $prefix = $this->prefix?->rewrite($rewriter, $parents);
    $text = $this->text?->rewrite($rewriter, $parents);
    $suffix = $this->suffix?->rewrite($rewriter, $parents);
    $expression = $this->expression?->rewrite($rewriter, $parents);
    if (
      $prefix === $this->prefix &&
      $text === $this->text &&
      $suffix === $this->suffix &&
      $expression === $this->expression
    ) {
      return $this;
    }
    return new static($prefix, $text, $suffix, $expression);
  }

  final public function getPrefixUNTYPED(): EditableNode {
    return $this->prefix;
  }

  public function withPrefix(?QuestionGreaterThanToken $value): this {
    if ($value === $this->prefix) {
      return $this;
    }
    return new static($value, $this->text, $this->suffix, $this->expression);
  }

  public function hasPrefix(): bool {
    return $this->prefix !== null;
  }

  /**
   * @returns Missing | QuestionGreaterThanToken
   */
  public function getPrefix(): ?QuestionGreaterThanToken {
    if ($this->prefix->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(QuestionGreaterThanToken::class, $this->prefix);
  }

  /**
   * @returns QuestionGreaterThanToken
   */
  public function getPrefixx(): QuestionGreaterThanToken {
    return
      TypeAssert\instance_of(QuestionGreaterThanToken::class, $this->prefix);
  }

  final public function getTextUNTYPED(): EditableNode {
    return $this->text;
  }

  public function withText(?MarkupToken $value): this {
    if ($value === $this->text) {
      return $this;
    }
    return new static($this->prefix, $value, $this->suffix, $this->expression);
  }

  public function hasText(): bool {
    return $this->text !== null;
  }

  /**
   * @returns Missing | MarkupToken
   */
  public function getText(): ?MarkupToken {
    if ($this->text->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(MarkupToken::class, $this->text);
  }

  /**
   * @returns MarkupToken
   */
  public function getTextx(): MarkupToken {
    return TypeAssert\instance_of(MarkupToken::class, $this->text);
  }

  final public function getSuffixUNTYPED(): EditableNode {
    return $this->suffix;
  }

  public function withSuffix(?MarkupSuffix $value): this {
    if ($value === $this->suffix) {
      return $this;
    }
    return new static($this->prefix, $this->text, $value, $this->expression);
  }

  public function hasSuffix(): bool {
    return $this->suffix !== null;
  }

  /**
   * @returns MarkupSuffix | Missing
   */
  public function getSuffix(): ?MarkupSuffix {
    if ($this->suffix->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(MarkupSuffix::class, $this->suffix);
  }

  /**
   * @returns MarkupSuffix
   */
  public function getSuffixx(): MarkupSuffix {
    return TypeAssert\instance_of(MarkupSuffix::class, $this->suffix);
  }

  final public function getExpressionUNTYPED(): EditableNode {
    return $this->expression;
  }

  public function withExpression(?ExpressionStatement $value): this {
    if ($value === $this->expression) {
      return $this;
    }
    return new static($this->prefix, $this->text, $this->suffix, $value);
  }

  public function hasExpression(): bool {
    return $this->expression !== null;
  }

  /**
   * @returns ExpressionStatement | Missing
   */
  public function getExpression(): ?ExpressionStatement {
    if ($this->expression->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(ExpressionStatement::class, $this->expression);
  }

  /**
   * @returns ExpressionStatement
   */
  public function getExpressionx(): ExpressionStatement {
    return
      TypeAssert\instance_of(ExpressionStatement::class, $this->expression);
  }
}
