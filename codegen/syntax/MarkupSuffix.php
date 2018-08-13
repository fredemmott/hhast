<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<834ecdb8a48e1d6fb328b018b538c559>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class MarkupSuffix extends EditableNode {

  public function __construct(
    private LessThanQuestionToken $lessThanQuestion,
    private ?EditableToken $name,
  ) {
    parent::__construct('markup_suffix');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $less_than_question = LessThanQuestionToken::fromJSON(
      /* UNSAFE_EXPR */ $json['markup_suffix_less_than_question'],
      $file,
      $offset,
      $source,
    );
    $offset += $less_than_question->getWidth();
    $name = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['markup_suffix_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    return new static($less_than_question, $name);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'less_than_question' => $this->lessThanQuestion,
      'name' => $this->name,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $less_than_question = $this->lessThanQuestion->rewrite($rewriter, $parents);
    $name = $this->name?->rewrite($rewriter, $parents);
    if (
      $less_than_question === $this->lessThanQuestion && $name === $this->name
    ) {
      return $this;
    }
    return new static($less_than_question, $name);
  }

  final public function getLessThanQuestionUNTYPED(): EditableNode {
    return $this->lessThanQuestion;
  }

  public function withLessThanQuestion(LessThanQuestionToken $value): this {
    if ($value === $this->lessThanQuestion) {
      return $this;
    }
    return new static($value, $this->name);
  }

  public function hasLessThanQuestion(): bool {
    return $this->lessThanQuestion !== null;
  }

  /**
   * @returns LessThanQuestionToken
   */
  public function getLessThanQuestion(): LessThanQuestionToken {
    return TypeAssert\instance_of(
      LessThanQuestionToken::class,
      $this->lessThanQuestion,
    );
  }

  /**
   * @returns LessThanQuestionToken
   */
  public function getLessThanQuestionx(): LessThanQuestionToken {
    return $this->getLessThanQuestion();
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(?EditableToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($this->less_than_question, $value);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns Missing | EqualToken | NameToken
   */
  public function getName(): ?EditableToken {
    if ($this->name->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableToken::class, $this->name);
  }

  /**
   * @returns EqualToken | NameToken
   */
  public function getNamex(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->name);
  }
}
