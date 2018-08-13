<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<0487d53e5caf3dceb3ac9410f099dd21>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class AnonymousClass extends EditableNode {

  public function __construct(
    private ClassToken $classKeyword,
    private ?LeftParenToken $leftParen,
    private ?EditableList<EditableNode> $argumentList,
    private ?RightParenToken $rightParen,
    private ?ExtendsToken $extendsKeyword,
    private ?EditableList<SimpleTypeSpecifier> $extendsList,
    private ?ImplementsToken $implementsKeyword,
    private ?EditableList<SimpleTypeSpecifier> $implementsList,
    private ClassishBody $body,
  ) {
    parent::__construct('anonymous_class');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $class_keyword = ClassToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_class_class_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $class_keyword->getWidth();
    $left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_class_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $left_paren->getWidth();
    $argument_list = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_class_argument_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $argument_list->getWidth();
    $right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_class_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $right_paren->getWidth();
    $extends_keyword = ExtendsToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_class_extends_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $extends_keyword->getWidth();
    $extends_list = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_class_extends_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $extends_list->getWidth();
    $implements_keyword = ImplementsToken::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_class_implements_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $implements_keyword->getWidth();
    $implements_list = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_class_implements_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $implements_list->getWidth();
    $body = ClassishBody::fromJSON(
      /* UNSAFE_EXPR */ $json['anonymous_class_body'],
      $file,
      $offset,
      $source,
    );
    $offset += $body->getWidth();
    return new static(
      $class_keyword,
      $left_paren,
      $argument_list,
      $right_paren,
      $extends_keyword,
      $extends_list,
      $implements_keyword,
      $implements_list,
      $body,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'class_keyword' => $this->classKeyword,
      'left_paren' => $this->leftParen,
      'argument_list' => $this->argumentList,
      'right_paren' => $this->rightParen,
      'extends_keyword' => $this->extendsKeyword,
      'extends_list' => $this->extendsList,
      'implements_keyword' => $this->implementsKeyword,
      'implements_list' => $this->implementsList,
      'body' => $this->body,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $class_keyword = $this->classKeyword->rewrite($rewriter, $parents);
    $left_paren = $this->leftParen?->rewrite($rewriter, $parents);
    $argument_list = $this->argumentList?->rewrite($rewriter, $parents);
    $right_paren = $this->rightParen?->rewrite($rewriter, $parents);
    $extends_keyword = $this->extendsKeyword?->rewrite($rewriter, $parents);
    $extends_list = $this->extendsList?->rewrite($rewriter, $parents);
    $implements_keyword =
      $this->implementsKeyword?->rewrite($rewriter, $parents);
    $implements_list = $this->implementsList?->rewrite($rewriter, $parents);
    $body = $this->body->rewrite($rewriter, $parents);
    if (
      $class_keyword === $this->classKeyword &&
      $left_paren === $this->leftParen &&
      $argument_list === $this->argumentList &&
      $right_paren === $this->rightParen &&
      $extends_keyword === $this->extendsKeyword &&
      $extends_list === $this->extendsList &&
      $implements_keyword === $this->implementsKeyword &&
      $implements_list === $this->implementsList &&
      $body === $this->body
    ) {
      return $this;
    }
    return new static(
      $class_keyword,
      $left_paren,
      $argument_list,
      $right_paren,
      $extends_keyword,
      $extends_list,
      $implements_keyword,
      $implements_list,
      $body,
    );
  }

  final public function getClassKeywordUNTYPED(): EditableNode {
    return $this->classKeyword;
  }

  public function withClassKeyword(ClassToken $value): this {
    if ($value === $this->classKeyword) {
      return $this;
    }
    return new static(
      $value,
      $this->left_paren,
      $this->argument_list,
      $this->right_paren,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasClassKeyword(): bool {
    return $this->classKeyword !== null;
  }

  /**
   * @returns ClassToken
   */
  public function getClassKeyword(): ClassToken {
    return TypeAssert\instance_of(ClassToken::class, $this->classKeyword);
  }

  /**
   * @returns ClassToken
   */
  public function getClassKeywordx(): ClassToken {
    return $this->getClassKeyword();
  }

  final public function getLeftParenUNTYPED(): EditableNode {
    return $this->leftParen;
  }

  public function withLeftParen(?LeftParenToken $value): this {
    if ($value === $this->leftParen) {
      return $this;
    }
    return new static(
      $this->class_keyword,
      $value,
      $this->argument_list,
      $this->right_paren,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasLeftParen(): bool {
    return $this->leftParen !== null;
  }

  /**
   * @returns Missing | LeftParenToken
   */
  public function getLeftParen(): ?LeftParenToken {
    if ($this->leftParen->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  /**
   * @returns LeftParenToken
   */
  public function getLeftParenx(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->leftParen);
  }

  final public function getArgumentListUNTYPED(): EditableNode {
    return $this->argumentList;
  }

  public function withArgumentList(?EditableList<EditableNode> $value): this {
    if ($value === $this->argumentList) {
      return $this;
    }
    return new static(
      $this->class_keyword,
      $this->left_paren,
      $value,
      $this->right_paren,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasArgumentList(): bool {
    return $this->argumentList !== null;
  }

  /**
   * @returns EditableList<AnonymousFunction> | EditableList<LiteralExpression>
   * | EditableList<MemberSelectionExpression> |
   * EditableList<VariableExpression> | Missing
   */
  public function getArgumentList(): ?EditableList<EditableNode> {
    if ($this->argumentList->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->argumentList);
  }

  /**
   * @returns EditableList<AnonymousFunction> | EditableList<LiteralExpression>
   * | EditableList<MemberSelectionExpression> |
   * EditableList<VariableExpression>
   */
  public function getArgumentListx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->argumentList);
  }

  final public function getRightParenUNTYPED(): EditableNode {
    return $this->rightParen;
  }

  public function withRightParen(?RightParenToken $value): this {
    if ($value === $this->rightParen) {
      return $this;
    }
    return new static(
      $this->class_keyword,
      $this->left_paren,
      $this->argument_list,
      $value,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasRightParen(): bool {
    return $this->rightParen !== null;
  }

  /**
   * @returns Missing | RightParenToken
   */
  public function getRightParen(): ?RightParenToken {
    if ($this->rightParen->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }

  /**
   * @returns RightParenToken
   */
  public function getRightParenx(): RightParenToken {
    return TypeAssert\instance_of(RightParenToken::class, $this->rightParen);
  }

  final public function getExtendsKeywordUNTYPED(): EditableNode {
    return $this->extendsKeyword;
  }

  public function withExtendsKeyword(?ExtendsToken $value): this {
    if ($value === $this->extendsKeyword) {
      return $this;
    }
    return new static(
      $this->class_keyword,
      $this->left_paren,
      $this->argument_list,
      $this->right_paren,
      $value,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasExtendsKeyword(): bool {
    return $this->extendsKeyword !== null;
  }

  /**
   * @returns Missing | ExtendsToken
   */
  public function getExtendsKeyword(): ?ExtendsToken {
    if ($this->extendsKeyword->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(ExtendsToken::class, $this->extendsKeyword);
  }

  /**
   * @returns ExtendsToken
   */
  public function getExtendsKeywordx(): ExtendsToken {
    return TypeAssert\instance_of(ExtendsToken::class, $this->extendsKeyword);
  }

  final public function getExtendsListUNTYPED(): EditableNode {
    return $this->extendsList;
  }

  public function withExtendsList(
    ?EditableList<SimpleTypeSpecifier> $value,
  ): this {
    if ($value === $this->extendsList) {
      return $this;
    }
    return new static(
      $this->class_keyword,
      $this->left_paren,
      $this->argument_list,
      $this->right_paren,
      $this->extends_keyword,
      $value,
      $this->implements_keyword,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasExtendsList(): bool {
    return $this->extendsList !== null;
  }

  /**
   * @returns EditableList<SimpleTypeSpecifier> | Missing
   */
  public function getExtendsList(): ?EditableList<SimpleTypeSpecifier> {
    if ($this->extendsList->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->extendsList);
  }

  /**
   * @returns EditableList<SimpleTypeSpecifier>
   */
  public function getExtendsListx(): EditableList<SimpleTypeSpecifier> {
    return TypeAssert\instance_of(EditableList::class, $this->extendsList);
  }

  final public function getImplementsKeywordUNTYPED(): EditableNode {
    return $this->implementsKeyword;
  }

  public function withImplementsKeyword(?ImplementsToken $value): this {
    if ($value === $this->implementsKeyword) {
      return $this;
    }
    return new static(
      $this->class_keyword,
      $this->left_paren,
      $this->argument_list,
      $this->right_paren,
      $this->extends_keyword,
      $this->extends_list,
      $value,
      $this->implements_list,
      $this->body,
    );
  }

  public function hasImplementsKeyword(): bool {
    return $this->implementsKeyword !== null;
  }

  /**
   * @returns Missing | ImplementsToken
   */
  public function getImplementsKeyword(): ?ImplementsToken {
    if ($this->implementsKeyword->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(ImplementsToken::class, $this->implementsKeyword);
  }

  /**
   * @returns ImplementsToken
   */
  public function getImplementsKeywordx(): ImplementsToken {
    return
      TypeAssert\instance_of(ImplementsToken::class, $this->implementsKeyword);
  }

  final public function getImplementsListUNTYPED(): EditableNode {
    return $this->implementsList;
  }

  public function withImplementsList(
    ?EditableList<SimpleTypeSpecifier> $value,
  ): this {
    if ($value === $this->implementsList) {
      return $this;
    }
    return new static(
      $this->class_keyword,
      $this->left_paren,
      $this->argument_list,
      $this->right_paren,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $value,
      $this->body,
    );
  }

  public function hasImplementsList(): bool {
    return $this->implementsList !== null;
  }

  /**
   * @returns EditableList<SimpleTypeSpecifier> | Missing
   */
  public function getImplementsList(): ?EditableList<SimpleTypeSpecifier> {
    if ($this->implementsList->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->implementsList);
  }

  /**
   * @returns EditableList<SimpleTypeSpecifier>
   */
  public function getImplementsListx(): EditableList<SimpleTypeSpecifier> {
    return TypeAssert\instance_of(EditableList::class, $this->implementsList);
  }

  final public function getBodyUNTYPED(): EditableNode {
    return $this->body;
  }

  public function withBody(ClassishBody $value): this {
    if ($value === $this->body) {
      return $this;
    }
    return new static(
      $this->class_keyword,
      $this->left_paren,
      $this->argument_list,
      $this->right_paren,
      $this->extends_keyword,
      $this->extends_list,
      $this->implements_keyword,
      $this->implements_list,
      $value,
    );
  }

  public function hasBody(): bool {
    return $this->body !== null;
  }

  /**
   * @returns ClassishBody
   */
  public function getBody(): ClassishBody {
    return TypeAssert\instance_of(ClassishBody::class, $this->body);
  }

  /**
   * @returns ClassishBody
   */
  public function getBodyx(): ClassishBody {
    return $this->getBody();
  }
}
