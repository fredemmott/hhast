<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<87cc896b6e2a77eb6b8d1173b09efa39>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class TypeConstraint extends EditableNode {

  public function __construct(
    private EditableToken $keyword,
    private EditableNode $type,
  ) {
    parent::__construct('type_constraint');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['constraint_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['constraint_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    return new static($keyword, $type);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'type' => $this->type,
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
    $type = $this->type->rewrite($rewriter, $parents);
    if ($keyword === $this->keyword && $type === $this->type) {
      return $this;
    }
    return new static($keyword, $type);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(EditableToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->type);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns AsToken | SuperToken
   */
  public function getKeyword(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->keyword);
  }

  /**
   * @returns AsToken | SuperToken
   */
  public function getKeywordx(): EditableToken {
    return $this->getKeyword();
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static($this->keyword, $value);
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns ClassnameTypeSpecifier | ClosureTypeSpecifier |
   * DictionaryTypeSpecifier | GenericTypeSpecifier | KeysetTypeSpecifier |
   * NullableTypeSpecifier | ShapeTypeSpecifier | SimpleTypeSpecifier |
   * TypeConstant | VectorArrayTypeSpecifier
   */
  public function getType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns ClassnameTypeSpecifier | ClosureTypeSpecifier |
   * DictionaryTypeSpecifier | GenericTypeSpecifier | KeysetTypeSpecifier |
   * NullableTypeSpecifier | ShapeTypeSpecifier | SimpleTypeSpecifier |
   * TypeConstant | VectorArrayTypeSpecifier
   */
  public function getTypex(): EditableNode {
    return $this->getType();
  }
}
