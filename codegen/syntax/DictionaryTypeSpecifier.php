<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<b1eb0b47a38952fca035f1579ee9d345>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class DictionaryTypeSpecifier extends EditableNode {

  public function __construct(
    private DictToken $keyword,
    private LessThanToken $leftAngle,
    private EditableList<EditableNode> $members,
    private GreaterThanToken $rightAngle,
  ) {
    parent::__construct('dictionary_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = DictToken::fromJSON(
      /* UNSAFE_EXPR */ $json['dictionary_type_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $left_angle = LessThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['dictionary_type_left_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_angle->getWidth();
    $members = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['dictionary_type_members'],
      $file,
      $offset,
      $source,
    );
    $offset += $members->getWidth();
    $right_angle = GreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['dictionary_type_right_angle'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_angle->getWidth();
    return new static($keyword, $left_angle, $members, $right_angle);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'left_angle' => $this->leftAngle,
      'members' => $this->members,
      'right_angle' => $this->rightAngle,
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
    $left_angle = $this->leftAngle->rewrite($rewriter, $parents);
    $members = $this->members->rewrite($rewriter, $parents);
    $right_angle = $this->rightAngle->rewrite($rewriter, $parents);
    if (
      $keyword === $this->keyword &&
      $left_angle === $this->leftAngle &&
      $members === $this->members &&
      $right_angle === $this->rightAngle
    ) {
      return $this;
    }
    return new static($keyword, $left_angle, $members, $right_angle);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(DictToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return
      new static($value, $this->left_angle, $this->members, $this->right_angle);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns DictToken
   */
  public function getKeyword(): DictToken {
    return TypeAssert\instance_of(DictToken::class, $this->keyword);
  }

  /**
   * @returns DictToken
   */
  public function getKeywordx(): DictToken {
    return $this->getKeyword();
  }

  final public function getLeftAngleUNTYPED(): EditableNode {
    return $this->leftAngle;
  }

  public function withLeftAngle(LessThanToken $value): this {
    if ($value === $this->leftAngle) {
      return $this;
    }
    return
      new static($this->keyword, $value, $this->members, $this->right_angle);
  }

  public function hasLeftAngle(): bool {
    return $this->leftAngle !== null;
  }

  /**
   * @returns LessThanToken
   */
  public function getLeftAngle(): LessThanToken {
    return TypeAssert\instance_of(LessThanToken::class, $this->leftAngle);
  }

  /**
   * @returns LessThanToken
   */
  public function getLeftAnglex(): LessThanToken {
    return $this->getLeftAngle();
  }

  final public function getMembersUNTYPED(): EditableNode {
    return $this->members;
  }

  public function withMembers(EditableList<EditableNode> $value): this {
    if ($value === $this->members) {
      return $this;
    }
    return
      new static($this->keyword, $this->left_angle, $value, $this->right_angle);
  }

  public function hasMembers(): bool {
    return $this->members !== null;
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<SimpleTypeSpecifier>
   */
  public function getMembers(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->members);
  }

  /**
   * @returns EditableList<EditableNode> | EditableList<SimpleTypeSpecifier>
   */
  public function getMembersx(): EditableList<EditableNode> {
    return $this->getMembers();
  }

  final public function getRightAngleUNTYPED(): EditableNode {
    return $this->rightAngle;
  }

  public function withRightAngle(GreaterThanToken $value): this {
    if ($value === $this->rightAngle) {
      return $this;
    }
    return
      new static($this->keyword, $this->left_angle, $this->members, $value);
  }

  public function hasRightAngle(): bool {
    return $this->rightAngle !== null;
  }

  /**
   * @returns GreaterThanToken
   */
  public function getRightAngle(): GreaterThanToken {
    return TypeAssert\instance_of(GreaterThanToken::class, $this->rightAngle);
  }

  /**
   * @returns GreaterThanToken
   */
  public function getRightAnglex(): GreaterThanToken {
    return $this->getRightAngle();
  }
}
