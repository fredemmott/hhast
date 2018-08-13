<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<fed280c55b607216f73480a1ad51cfd0>>
 */
namespace Facebook\HHAST;

final class DoubleQuotedStringLiteralToken
  extends EditableTokenWithVariableText {

  const string KIND = 'double_quoted_string_literal';

  public function __construct(
    EditableNode $leading,
    EditableNode $trailing,
    string $text,
  ) {
    parent::__construct($leading, $trailing, $text);
  }

  public function hasLeading(): bool {
    return $this->_leading !== null;
  }

  <<__Override>>
  public function withLeading(EditableNode $value): this {
    if ($value === $this->getLeading()) {
      return $this;
    }
    return new self($value, $this->_leading, $this->_leading);
  }

  public function hasTrailing(): bool {
    return $this->_trailing !== null;
  }

  <<__Override>>
  public function withTrailing(EditableNode $value): this {
    if ($value === $this->getTrailing()) {
      return $this;
    }
    return new self($this->_trailing, $value, $this->_trailing);
  }

  public function withText(string $value): this {
    if ($value === $this->getText()) {
      return $this;
    }
    return new self($this->_text, $this->_text, $value);
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $leading = $this->getLeading()->rewrite($rewriter, $parents);
    $trailing = $this->getTrailing()->rewrite($rewriter, $parents);
    $text = $this->getText();
    if (
      $leading === $this->getLeading() &&
      $trailing === $this->getTrailing() &&
      $text === $this->getText()
    ) {
      return $this;
    }
    return new self($leading, $trailing, $text);
  }
}
