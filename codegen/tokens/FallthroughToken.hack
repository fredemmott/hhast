/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<ae0c775dac0717007a38ca0102a31ed4>>
 */
namespace Facebook\HHAST;

final class FallthroughToken extends EditableTokenWithVariableText {

  const string KIND = 'fallthrough';
  const keyset<classname<EditableNode>> INTERFACES = keyset[
    self::class,
    EditableNode::class,
    EditableToken::class,
  ];

  public function __construct(
    EditableNode $leading,
    EditableNode $trailing,
    string $token_text = 'fallthrough',
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct($leading, $trailing, $token_text, $source_ref);
  }

  public function hasLeading(): bool {
    return !$this->getLeading()->isMissing();
  }

  <<__Override>>
  public function withLeading(EditableNode $value): this {
    if ($value === $this->getLeading()) {
      return $this;
    }
    return new self($value, $this->getTrailing());
  }

  public function hasTrailing(): bool {
    return !$this->getTrailing()->isMissing();
  }

  <<__Override>>
  public function withTrailing(EditableNode $value): this {
    if ($value === $this->getTrailing()) {
      return $this;
    }
    return new self($this->getLeading(), $value);
  }

  <<__Override>>
  public function rewriteChildren(
    self::TRewriter $rewriter,
    vec<EditableNode> $parents = vec[],
  ): this {
    $parents[] = $this;
    $leading = $rewriter($this->getLeading(), $parents);
    $trailing = $rewriter($this->getTrailing(), $parents);
    if (
      $leading === $this->getLeading() && $trailing === $this->getTrailing()
    ) {
      return $this;
    }
    return new self($leading, $trailing);
  }
}
