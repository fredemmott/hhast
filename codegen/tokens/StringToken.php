<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<921f7de52afc9ba6672441ebbdc3c3ef>>
 */
namespace Facebook\HHAST;

final class StringToken extends EditableTokenWithVariableText {

  const string KIND = 'string';

  public function __construct(
    EditableNode $leading,
    EditableNode $trailing,
    string $token_text = 'string',
  ) {
    parent::__construct($leading, $trailing, $token_text);
  }

  public function hasLeading(): bool {
    return $this->_leading !== null;
  }

  <<__Override>>
  public function withLeading(EditableNode $value): this {
    if ($value === $this->getLeading()) {
      return $this;
    }
    return new self($value, $this->_leading);
  }

  public function hasTrailing(): bool {
    return $this->_trailing !== null;
  }

  <<__Override>>
  public function withTrailing(EditableNode $value): this {
    if ($value === $this->getTrailing()) {
      return $this;
    }
    return new self($this->_trailing, $value);
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
    if (
      $leading === $this->getLeading() && $trailing === $this->getTrailing()
    ) {
      return $this;
    }
    return new self($leading, $trailing);
  }
}
