/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<9d8ad648747fa05e937eb2626980d1d0>>
 */
namespace Facebook\HHAST;

final class SlashEqualToken extends EditableTokenWithFixedText {

  const string KIND = '/=';
  const keyset<classname<EditableNode>> INTERFACES = keyset[
    self::class,
    EditableNode::class,
    EditableToken::class,
  ];
  const string TEXT = '/=';

  public function __construct(
    EditableNode $leading,
    EditableNode $trailing,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct($leading, $trailing, $source_ref);
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
