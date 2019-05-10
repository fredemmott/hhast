/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<b810458ef6b5aa2c1ca388869c1dd250>>
 */
namespace Facebook\HHAST;

final class Require_onceToken extends EditableTokenWithVariableText {

  const string KIND = 'require_once';
  const keyset<classname<EditableNode>> INTERFACES = keyset[
    self::class,
    EditableNode::class,
    EditableToken::class,
  ];

  public function __construct(
    EditableNode $leading,
    EditableNode $trailing,
    string $token_text = 'require_once',
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
