<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<6a007ac01df825ecfe4102edcf801217>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ObjectCreationExpression extends EditableNode {

  public function __construct(
    private NewToken $newKeyword,
    private EditableNode $object,
  ) {
    parent::__construct('object_creation_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $new_keyword = NewToken::fromJSON(
      /* UNSAFE_EXPR */ $json['object_creation_new_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $new_keyword->getWidth();
    $object = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['object_creation_object'],
      $file,
      $offset,
      $source,
    );
    $offset += $object->getWidth();
    return new static($new_keyword, $object);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'new_keyword' => $this->newKeyword,
      'object' => $this->object,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $new_keyword = $this->newKeyword->rewrite($rewriter, $parents);
    $object = $this->object->rewrite($rewriter, $parents);
    if ($new_keyword === $this->newKeyword && $object === $this->object) {
      return $this;
    }
    return new static($new_keyword, $object);
  }

  final public function getNewKeywordUNTYPED(): EditableNode {
    return $this->newKeyword;
  }

  public function withNewKeyword(NewToken $value): this {
    if ($value === $this->newKeyword) {
      return $this;
    }
    return new static($value, $this->object);
  }

  public function hasNewKeyword(): bool {
    return $this->newKeyword !== null;
  }

  /**
   * @returns NewToken
   */
  public function getNewKeyword(): NewToken {
    return TypeAssert\instance_of(NewToken::class, $this->newKeyword);
  }

  /**
   * @returns NewToken
   */
  public function getNewKeywordx(): NewToken {
    return $this->getNewKeyword();
  }

  final public function getObjectUNTYPED(): EditableNode {
    return $this->object;
  }

  public function withObject(EditableNode $value): this {
    if ($value === $this->object) {
      return $this;
    }
    return new static($this->new_keyword, $value);
  }

  public function hasObject(): bool {
    return $this->object !== null;
  }

  /**
   * @returns AnonymousClass | ConstructorCall
   */
  public function getObject(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->object);
  }

  /**
   * @returns AnonymousClass | ConstructorCall
   */
  public function getObjectx(): EditableNode {
    return $this->getObject();
  }
}
