<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<2d046132aad19e0301b7193b8a871348>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class SwitchSection extends EditableNode {

  public function __construct(
    private EditableList<EditableNode> $labels,
    private ?EditableList<EditableNode> $statements,
    private ?SwitchFallthrough $fallthrough,
  ) {
    parent::__construct('switch_section');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $labels = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['switch_section_labels'],
      $file,
      $offset,
      $source,
    );
    $offset += $labels->getWidth();
    $statements = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['switch_section_statements'],
      $file,
      $offset,
      $source,
    );
    $offset += $statements->getWidth();
    $fallthrough = SwitchFallthrough::fromJSON(
      /* UNSAFE_EXPR */ $json['switch_section_fallthrough'],
      $file,
      $offset,
      $source,
    );
    $offset += $fallthrough->getWidth();
    return new static($labels, $statements, $fallthrough);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'labels' => $this->labels,
      'statements' => $this->statements,
      'fallthrough' => $this->fallthrough,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $labels = $this->labels->rewrite($rewriter, $parents);
    $statements = $this->statements?->rewrite($rewriter, $parents);
    $fallthrough = $this->fallthrough?->rewrite($rewriter, $parents);
    if (
      $labels === $this->labels &&
      $statements === $this->statements &&
      $fallthrough === $this->fallthrough
    ) {
      return $this;
    }
    return new static($labels, $statements, $fallthrough);
  }

  final public function getLabelsUNTYPED(): EditableNode {
    return $this->labels;
  }

  public function withLabels(EditableList<EditableNode> $value): this {
    if ($value === $this->labels) {
      return $this;
    }
    return new static($value, $this->statements, $this->fallthrough);
  }

  public function hasLabels(): bool {
    return $this->labels !== null;
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getLabels(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->labels);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getLabelsx(): EditableList<EditableNode> {
    return $this->getLabels();
  }

  final public function getStatementsUNTYPED(): EditableNode {
    return $this->statements;
  }

  public function withStatements(?EditableList<EditableNode> $value): this {
    if ($value === $this->statements) {
      return $this;
    }
    return new static($this->labels, $value, $this->fallthrough);
  }

  public function hasStatements(): bool {
    return $this->statements !== null;
  }

  /**
   * @returns EditableList<EditableNode> | Missing
   */
  public function getStatements(): ?EditableList<EditableNode> {
    if ($this->statements->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->statements);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getStatementsx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->statements);
  }

  final public function getFallthroughUNTYPED(): EditableNode {
    return $this->fallthrough;
  }

  public function withFallthrough(?SwitchFallthrough $value): this {
    if ($value === $this->fallthrough) {
      return $this;
    }
    return new static($this->labels, $this->statements, $value);
  }

  public function hasFallthrough(): bool {
    return $this->fallthrough !== null;
  }

  /**
   * @returns Missing | SwitchFallthrough
   */
  public function getFallthrough(): ?SwitchFallthrough {
    if ($this->fallthrough->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(SwitchFallthrough::class, $this->fallthrough);
  }

  /**
   * @returns SwitchFallthrough
   */
  public function getFallthroughx(): SwitchFallthrough {
    return TypeAssert\instance_of(SwitchFallthrough::class, $this->fallthrough);
  }
}
