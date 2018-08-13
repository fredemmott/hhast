<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<2a8f270be7c2466e8da2b0cd97f9e387>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class WhereClause extends EditableNode {

  public function __construct(
    private WhereToken $keyword,
    private EditableList<WhereConstraint> $constraints,
  ) {
    parent::__construct('where_clause');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = WhereToken::fromJSON(
      /* UNSAFE_EXPR */ $json['where_clause_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $constraints = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['where_clause_constraints'],
      $file,
      $offset,
      $source,
    );
    $offset += $constraints->getWidth();
    return new static($keyword, $constraints);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'constraints' => $this->constraints,
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
    $constraints = $this->constraints->rewrite($rewriter, $parents);
    if ($keyword === $this->keyword && $constraints === $this->constraints) {
      return $this;
    }
    return new static($keyword, $constraints);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(WhereToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->constraints);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns WhereToken
   */
  public function getKeyword(): WhereToken {
    return TypeAssert\instance_of(WhereToken::class, $this->keyword);
  }

  /**
   * @returns WhereToken
   */
  public function getKeywordx(): WhereToken {
    return $this->getKeyword();
  }

  final public function getConstraintsUNTYPED(): EditableNode {
    return $this->constraints;
  }

  public function withConstraints(EditableList<WhereConstraint> $value): this {
    if ($value === $this->constraints) {
      return $this;
    }
    return new static($this->keyword, $value);
  }

  public function hasConstraints(): bool {
    return $this->constraints !== null;
  }

  /**
   * @returns EditableList<WhereConstraint>
   */
  public function getConstraints(): EditableList<WhereConstraint> {
    return TypeAssert\instance_of(EditableList::class, $this->constraints);
  }

  /**
   * @returns EditableList<WhereConstraint>
   */
  public function getConstraintsx(): EditableList<WhereConstraint> {
    return $this->getConstraints();
  }
}
