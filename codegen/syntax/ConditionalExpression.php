<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<fce75924b583d6bcc6d2334a99083122>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ConditionalExpression extends EditableNode {

  public function __construct(
    private EditableNode $test,
    private QuestionToken $question,
    private ?EditableNode $consequence,
    private ?ColonToken $colon,
    private ?EditableNode $alternative,
  ) {
    parent::__construct('conditional_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $test = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['conditional_test'],
      $file,
      $offset,
      $source,
    );
    $offset += $test->getWidth();
    $question = QuestionToken::fromJSON(
      /* UNSAFE_EXPR */ $json['conditional_question'],
      $file,
      $offset,
      $source,
    );
    $offset += $question->getWidth();
    $consequence = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['conditional_consequence'],
      $file,
      $offset,
      $source,
    );
    $offset += $consequence->getWidth();
    $colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['conditional_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    $alternative = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['conditional_alternative'],
      $file,
      $offset,
      $source,
    );
    $offset += $alternative->getWidth();
    return new static($test, $question, $consequence, $colon, $alternative);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'test' => $this->test,
      'question' => $this->question,
      'consequence' => $this->consequence,
      'colon' => $this->colon,
      'alternative' => $this->alternative,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $test = $this->test->rewrite($rewriter, $parents);
    $question = $this->question->rewrite($rewriter, $parents);
    $consequence = $this->consequence?->rewrite($rewriter, $parents);
    $colon = $this->colon?->rewrite($rewriter, $parents);
    $alternative = $this->alternative?->rewrite($rewriter, $parents);
    if (
      $test === $this->test &&
      $question === $this->question &&
      $consequence === $this->consequence &&
      $colon === $this->colon &&
      $alternative === $this->alternative
    ) {
      return $this;
    }
    return new static($test, $question, $consequence, $colon, $alternative);
  }

  final public function getTestUNTYPED(): EditableNode {
    return $this->test;
  }

  public function withTest(EditableNode $value): this {
    if ($value === $this->test) {
      return $this;
    }
    return new static(
      $value,
      $this->question,
      $this->consequence,
      $this->colon,
      $this->alternative,
    );
  }

  public function hasTest(): bool {
    return $this->test !== null;
  }

  /**
   * @returns BinaryExpression | ConditionalExpression | EmptyExpression |
   * FunctionCallExpression | InstanceofExpression | IssetExpression |
   * LiteralExpression | MemberSelectionExpression | ParenthesizedExpression |
   * PrefixUnaryExpression | ScopeResolutionExpression | SubscriptExpression |
   * LessThanToken | NameToken | VariableExpression
   */
  public function getTest(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->test);
  }

  /**
   * @returns BinaryExpression | ConditionalExpression | EmptyExpression |
   * FunctionCallExpression | InstanceofExpression | IssetExpression |
   * LiteralExpression | MemberSelectionExpression | ParenthesizedExpression |
   * PrefixUnaryExpression | ScopeResolutionExpression | SubscriptExpression |
   * LessThanToken | NameToken | VariableExpression
   */
  public function getTestx(): EditableNode {
    return $this->getTest();
  }

  final public function getQuestionUNTYPED(): EditableNode {
    return $this->question;
  }

  public function withQuestion(QuestionToken $value): this {
    if ($value === $this->question) {
      return $this;
    }
    return new static(
      $this->test,
      $value,
      $this->consequence,
      $this->colon,
      $this->alternative,
    );
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

  final public function getConsequenceUNTYPED(): EditableNode {
    return $this->consequence;
  }

  public function withConsequence(?EditableNode $value): this {
    if ($value === $this->consequence) {
      return $this;
    }
    return new static(
      $this->test,
      $this->question,
      $value,
      $this->colon,
      $this->alternative,
    );
  }

  public function hasConsequence(): bool {
    return $this->consequence !== null;
  }

  /**
   * @returns ArrayCreationExpression | ArrayIntrinsicExpression |
   * BinaryExpression | CastExpression | CollectionLiteralExpression |
   * FunctionCallExpression | LambdaExpression | LiteralExpression |
   * MemberSelectionExpression | Missing | ObjectCreationExpression |
   * ParenthesizedExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression
   */
  public function getConsequence(): ?EditableNode {
    if ($this->consequence->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->consequence);
  }

  /**
   * @returns ArrayCreationExpression | ArrayIntrinsicExpression |
   * BinaryExpression | CastExpression | CollectionLiteralExpression |
   * FunctionCallExpression | LambdaExpression | LiteralExpression |
   * MemberSelectionExpression | ObjectCreationExpression |
   * ParenthesizedExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * VariableExpression
   */
  public function getConsequencex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->consequence);
  }

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(?ColonToken $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static(
      $this->test,
      $this->question,
      $this->consequence,
      $value,
      $this->alternative,
    );
  }

  public function hasColon(): bool {
    return $this->colon !== null;
  }

  /**
   * @returns Missing | ColonToken
   */
  public function getColon(): ?ColonToken {
    if ($this->colon->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(ColonToken::class, $this->colon);
  }

  /**
   * @returns ColonToken
   */
  public function getColonx(): ColonToken {
    return TypeAssert\instance_of(ColonToken::class, $this->colon);
  }

  final public function getAlternativeUNTYPED(): EditableNode {
    return $this->alternative;
  }

  public function withAlternative(?EditableNode $value): this {
    if ($value === $this->alternative) {
      return $this;
    }
    return new static(
      $this->test,
      $this->question,
      $this->consequence,
      $this->colon,
      $value,
    );
  }

  public function hasAlternative(): bool {
    return $this->alternative !== null;
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | BinaryExpression | CastExpression |
   * CollectionLiteralExpression | FunctionCallExpression | IssetExpression |
   * LambdaExpression | LiteralExpression | Missing | ObjectCreationExpression
   * | ParenthesizedExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * TupleExpression | VariableExpression
   */
  public function getAlternative(): ?EditableNode {
    if ($this->alternative->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->alternative);
  }

  /**
   * @returns AnonymousFunction | ArrayCreationExpression |
   * ArrayIntrinsicExpression | BinaryExpression | CastExpression |
   * CollectionLiteralExpression | FunctionCallExpression | IssetExpression |
   * LambdaExpression | LiteralExpression | ObjectCreationExpression |
   * ParenthesizedExpression | PrefixUnaryExpression |
   * ScopeResolutionExpression | SubscriptExpression | NameToken |
   * TupleExpression | VariableExpression
   */
  public function getAlternativex(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->alternative);
  }
}
