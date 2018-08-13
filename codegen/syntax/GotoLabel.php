<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<ce425a48f36fa89f94d673654487399e>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class GotoLabel extends EditableNode {

  public function __construct(
    private NameToken $name,
    private ColonToken $colon,
  ) {
    parent::__construct('goto_label');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $name = NameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['goto_label_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['goto_label_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    return new static($name, $colon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'name' => $this->name,
      'colon' => $this->colon,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $name = $this->name->rewrite($rewriter, $parents);
    $colon = $this->colon->rewrite($rewriter, $parents);
    if ($name === $this->name && $colon === $this->colon) {
      return $this;
    }
    return new static($name, $colon);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(NameToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($value, $this->colon);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns NameToken
   */
  public function getName(): NameToken {
    return TypeAssert\instance_of(NameToken::class, $this->name);
  }

  /**
   * @returns NameToken
   */
  public function getNamex(): NameToken {
    return $this->getName();
  }

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(ColonToken $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static($this->name, $value);
  }

  public function hasColon(): bool {
    return $this->colon !== null;
  }

  /**
   * @returns ColonToken
   */
  public function getColon(): ColonToken {
    return TypeAssert\instance_of(ColonToken::class, $this->colon);
  }

  /**
   * @returns ColonToken
   */
  public function getColonx(): ColonToken {
    return $this->getColon();
  }
}
