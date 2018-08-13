<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<9895a30e8ab8884955ebc0bf65f1242c>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class FieldSpecifier extends EditableNode {

  public function __construct(
    private ?QuestionToken $question,
    private EditableNode $name,
    private EqualGreaterThanToken $arrow,
    private EditableNode $type,
  ) {
    parent::__construct('field_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $question = QuestionToken::fromJSON(
      /* UNSAFE_EXPR */ $json['field_question'],
      $file,
      $offset,
      $source,
    );
    $offset += $question->getWidth();
    $name = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['field_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $arrow = EqualGreaterThanToken::fromJSON(
      /* UNSAFE_EXPR */ $json['field_arrow'],
      $file,
      $offset,
      $source,
    );
    $offset += $arrow->getWidth();
    $type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['field_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $type->getWidth();
    return new static($question, $name, $arrow, $type);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'question' => $this->question,
      'name' => $this->name,
      'arrow' => $this->arrow,
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
    $question = $this->question?->rewrite($rewriter, $parents);
    $name = $this->name->rewrite($rewriter, $parents);
    $arrow = $this->arrow->rewrite($rewriter, $parents);
    $type = $this->type->rewrite($rewriter, $parents);
    if (
      $question === $this->question &&
      $name === $this->name &&
      $arrow === $this->arrow &&
      $type === $this->type
    ) {
      return $this;
    }
    return new static($question, $name, $arrow, $type);
  }

  final public function getQuestionUNTYPED(): EditableNode {
    return $this->question;
  }

  public function withQuestion(?QuestionToken $value): this {
    if ($value === $this->question) {
      return $this;
    }
    return new static($value, $this->name, $this->arrow, $this->type);
  }

  public function hasQuestion(): bool {
    return $this->question !== null;
  }

  /**
   * @returns Missing | QuestionToken
   */
  public function getQuestion(): ?QuestionToken {
    if ($this->question->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(QuestionToken::class, $this->question);
  }

  /**
   * @returns QuestionToken
   */
  public function getQuestionx(): QuestionToken {
    return TypeAssert\instance_of(QuestionToken::class, $this->question);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(EditableNode $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($this->question, $value, $this->arrow, $this->type);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns LiteralExpression | ScopeResolutionExpression
   */
  public function getName(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->name);
  }

  /**
   * @returns LiteralExpression | ScopeResolutionExpression
   */
  public function getNamex(): EditableNode {
    return $this->getName();
  }

  final public function getArrowUNTYPED(): EditableNode {
    return $this->arrow;
  }

  public function withArrow(EqualGreaterThanToken $value): this {
    if ($value === $this->arrow) {
      return $this;
    }
    return new static($this->question, $this->name, $value, $this->type);
  }

  public function hasArrow(): bool {
    return $this->arrow !== null;
  }

  /**
   * @returns EqualGreaterThanToken
   */
  public function getArrow(): EqualGreaterThanToken {
    return TypeAssert\instance_of(EqualGreaterThanToken::class, $this->arrow);
  }

  /**
   * @returns EqualGreaterThanToken
   */
  public function getArrowx(): EqualGreaterThanToken {
    return $this->getArrow();
  }

  final public function getTypeUNTYPED(): EditableNode {
    return $this->type;
  }

  public function withType(EditableNode $value): this {
    if ($value === $this->type) {
      return $this;
    }
    return new static($this->question, $this->name, $this->arrow, $value);
  }

  public function hasType(): bool {
    return $this->type !== null;
  }

  /**
   * @returns ClosureTypeSpecifier | GenericTypeSpecifier |
   * NullableTypeSpecifier | ShapeTypeSpecifier | SimpleTypeSpecifier |
   * TypeConstant
   */
  public function getType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->type);
  }

  /**
   * @returns ClosureTypeSpecifier | GenericTypeSpecifier |
   * NullableTypeSpecifier | ShapeTypeSpecifier | SimpleTypeSpecifier |
   * TypeConstant
   */
  public function getTypex(): EditableNode {
    return $this->getType();
  }
}
