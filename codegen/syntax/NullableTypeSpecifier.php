<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<7664df092db9bb6bb7d61c7df0364259>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class NullableTypeSpecifier extends EditableNode {

  public function __construct(
    private QuestionToken $question,
    private EditableNode $type,
  ) {
    parent::__construct('nullable_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $question = QuestionToken::fromJSON(
      /* UNSAFE_EXPR */ $json['nullable_question'],
      $file,
      $offset,
      $source,
    );
    $offset += $question->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['nullable_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    return new static($question, $type);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'question' => $this->question,
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
    $question = $this->question->rewrite($rewriter, $parents);
    $type = $this->type->rewrite($rewriter, $parents);
    if ($question === $this->question && $type === $this->type) {
      return $this;
    }
    return new static($question, $type);
  }

  final public function getQuestionUNTYPED(): EditableNode {
    return $this->question;
  }

  public function withQuestion(QuestionToken $value): this {
    if ($value === $this->question) {
      return $this;
    }
    return new static($value, $this->type);
  }

  public function hasQuestion(): bool {
    return $this->question !== null;
  }

  /**
   * @returns QuestionToken
   */
  public function getQuestion(): QuestionToken {
    return TypeAssert\instance_of(QuestionToken::class, $this->question);
  }

  /**
   * @returns QuestionToken
   */
  public function getQuestionx(): QuestionToken {
    return $this->getQuestion();
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static($this->question, $value);
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns ClosureTypeSpecifier | DictionaryTypeSpecifier |
   * GenericTypeSpecifier | KeysetTypeSpecifier | MapArrayTypeSpecifier |
   * ShapeTypeSpecifier | SimpleTypeSpecifier | TupleTypeSpecifier |
   * TypeConstant | VectorArrayTypeSpecifier | VectorTypeSpecifier
   */
  public function getType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns ClosureTypeSpecifier | DictionaryTypeSpecifier |
   * GenericTypeSpecifier | KeysetTypeSpecifier | MapArrayTypeSpecifier |
   * ShapeTypeSpecifier | SimpleTypeSpecifier | TupleTypeSpecifier |
   * TypeConstant | VectorArrayTypeSpecifier | VectorTypeSpecifier
   */
  public function getTypex(): EditableNode {
    return $this->getType();
  }
}
