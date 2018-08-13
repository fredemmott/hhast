<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<54ad46f11d6e15130cecbcf19c30af2e>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ClosureTypeSpecifier extends EditableNode {

  public function __construct(
    private LeftParenToken $outerLeftParen,
    private ?CoroutineToken $coroutine,
    private FunctionToken $functionKeyword,
    private LeftParenToken $innerLeftParen,
    private ?EditableList<EditableNode> $parameterList,
    private RightParenToken $innerRightParen,
    private ColonToken $colon,
    private EditableNode $returnType,
    private RightParenToken $outerRightParen,
  ) {
    parent::__construct('closure_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $outer_left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['closure_outer_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $outer_left_paren->getWidth();
    $coroutine = CoroutineToken::fromJSON(
      /* UNSAFE_EXPR */ $json['closure_coroutine'],
      $file,
      $offset,
      $source,
    );
    $offset += $coroutine->getWidth();
    $function_keyword = FunctionToken::fromJSON(
      /* UNSAFE_EXPR */ $json['closure_function_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $function_keyword->getWidth();
    $inner_left_paren = LeftParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['closure_inner_left_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $inner_left_paren->getWidth();
    $parameter_list = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['closure_parameter_list'],
      $file,
      $offset,
      $source,
    );
    $offset += $parameter_list->getWidth();
    $inner_right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['closure_inner_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $inner_right_paren->getWidth();
    $colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['closure_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $colon->getWidth();
    $return_type = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['closure_return_type'],
      $file,
      $offset,
      $source,
    );
    $offset += $return_type->getWidth();
    $outer_right_paren = RightParenToken::fromJSON(
      /* UNSAFE_EXPR */ $json['closure_outer_right_paren'],
      $file,
      $offset,
      $source,
    );
    $offset += $outer_right_paren->getWidth();
    return new static(
      $outer_left_paren,
      $coroutine,
      $function_keyword,
      $inner_left_paren,
      $parameter_list,
      $inner_right_paren,
      $colon,
      $return_type,
      $outer_right_paren,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'outer_left_paren' => $this->outerLeftParen,
      'coroutine' => $this->coroutine,
      'function_keyword' => $this->functionKeyword,
      'inner_left_paren' => $this->innerLeftParen,
      'parameter_list' => $this->parameterList,
      'inner_right_paren' => $this->innerRightParen,
      'colon' => $this->colon,
      'return_type' => $this->returnType,
      'outer_right_paren' => $this->outerRightParen,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $outer_left_paren = $this->outerLeftParen->rewrite($rewriter, $parents);
    $coroutine = $this->coroutine?->rewrite($rewriter, $parents);
    $function_keyword = $this->functionKeyword->rewrite($rewriter, $parents);
    $inner_left_paren = $this->innerLeftParen->rewrite($rewriter, $parents);
    $parameter_list = $this->parameterList?->rewrite($rewriter, $parents);
    $inner_right_paren = $this->innerRightParen->rewrite($rewriter, $parents);
    $colon = $this->colon->rewrite($rewriter, $parents);
    $return_type = $this->returnType->rewrite($rewriter, $parents);
    $outer_right_paren = $this->outerRightParen->rewrite($rewriter, $parents);
    if (
      $outer_left_paren === $this->outerLeftParen &&
      $coroutine === $this->coroutine &&
      $function_keyword === $this->functionKeyword &&
      $inner_left_paren === $this->innerLeftParen &&
      $parameter_list === $this->parameterList &&
      $inner_right_paren === $this->innerRightParen &&
      $colon === $this->colon &&
      $return_type === $this->returnType &&
      $outer_right_paren === $this->outerRightParen
    ) {
      return $this;
    }
    return new static(
      $outer_left_paren,
      $coroutine,
      $function_keyword,
      $inner_left_paren,
      $parameter_list,
      $inner_right_paren,
      $colon,
      $return_type,
      $outer_right_paren,
    );
  }

  final public function getOuterLeftParenUNTYPED(): EditableNode {
    return $this->outerLeftParen;
  }

  public function withOuterLeftParen(LeftParenToken $value): this {
    if ($value === $this->outerLeftParen) {
      return $this;
    }
    return new static(
      $value,
      $this->coroutine,
      $this->function_keyword,
      $this->inner_left_paren,
      $this->parameter_list,
      $this->inner_right_paren,
      $this->colon,
      $this->return_type,
      $this->outer_right_paren,
    );
  }

  public function hasOuterLeftParen(): bool {
    return $this->outerLeftParen !== null;
  }

  /**
   * @returns LeftParenToken
   */
  public function getOuterLeftParen(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->outerLeftParen);
  }

  /**
   * @returns LeftParenToken
   */
  public function getOuterLeftParenx(): LeftParenToken {
    return $this->getOuterLeftParen();
  }

  final public function getCoroutineUNTYPED(): EditableNode {
    return $this->coroutine;
  }

  public function withCoroutine(?CoroutineToken $value): this {
    if ($value === $this->coroutine) {
      return $this;
    }
    return new static(
      $this->outer_left_paren,
      $value,
      $this->function_keyword,
      $this->inner_left_paren,
      $this->parameter_list,
      $this->inner_right_paren,
      $this->colon,
      $this->return_type,
      $this->outer_right_paren,
    );
  }

  public function hasCoroutine(): bool {
    return $this->coroutine !== null;
  }

  /**
   * @returns Missing | CoroutineToken
   */
  public function getCoroutine(): ?CoroutineToken {
    if ($this->coroutine->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(CoroutineToken::class, $this->coroutine);
  }

  /**
   * @returns CoroutineToken
   */
  public function getCoroutinex(): CoroutineToken {
    return TypeAssert\instance_of(CoroutineToken::class, $this->coroutine);
  }

  final public function getFunctionKeywordUNTYPED(): EditableNode {
    return $this->functionKeyword;
  }

  public function withFunctionKeyword(FunctionToken $value): this {
    if ($value === $this->functionKeyword) {
      return $this;
    }
    return new static(
      $this->outer_left_paren,
      $this->coroutine,
      $value,
      $this->inner_left_paren,
      $this->parameter_list,
      $this->inner_right_paren,
      $this->colon,
      $this->return_type,
      $this->outer_right_paren,
    );
  }

  public function hasFunctionKeyword(): bool {
    return $this->functionKeyword !== null;
  }

  /**
   * @returns FunctionToken
   */
  public function getFunctionKeyword(): FunctionToken {
    return TypeAssert\instance_of(FunctionToken::class, $this->functionKeyword);
  }

  /**
   * @returns FunctionToken
   */
  public function getFunctionKeywordx(): FunctionToken {
    return $this->getFunctionKeyword();
  }

  final public function getInnerLeftParenUNTYPED(): EditableNode {
    return $this->innerLeftParen;
  }

  public function withInnerLeftParen(LeftParenToken $value): this {
    if ($value === $this->innerLeftParen) {
      return $this;
    }
    return new static(
      $this->outer_left_paren,
      $this->coroutine,
      $this->function_keyword,
      $value,
      $this->parameter_list,
      $this->inner_right_paren,
      $this->colon,
      $this->return_type,
      $this->outer_right_paren,
    );
  }

  public function hasInnerLeftParen(): bool {
    return $this->innerLeftParen !== null;
  }

  /**
   * @returns LeftParenToken
   */
  public function getInnerLeftParen(): LeftParenToken {
    return TypeAssert\instance_of(LeftParenToken::class, $this->innerLeftParen);
  }

  /**
   * @returns LeftParenToken
   */
  public function getInnerLeftParenx(): LeftParenToken {
    return $this->getInnerLeftParen();
  }

  final public function getParameterListUNTYPED(): EditableNode {
    return $this->parameterList;
  }

  public function withParameterList(?EditableList<EditableNode> $value): this {
    if ($value === $this->parameterList) {
      return $this;
    }
    return new static(
      $this->outer_left_paren,
      $this->coroutine,
      $this->function_keyword,
      $this->inner_left_paren,
      $value,
      $this->inner_right_paren,
      $this->colon,
      $this->return_type,
      $this->outer_right_paren,
    );
  }

  public function hasParameterList(): bool {
    return $this->parameterList !== null;
  }

  /**
   * @returns EditableList<ClosureParameterTypeSpecifier> |
   * EditableList<EditableNode> | EditableList<VariadicParameter> | Missing
   */
  public function getParameterList(): ?EditableList<EditableNode> {
    if ($this->parameterList->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->parameterList);
  }

  /**
   * @returns EditableList<ClosureParameterTypeSpecifier> |
   * EditableList<EditableNode> | EditableList<VariadicParameter>
   */
  public function getParameterListx(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->parameterList);
  }

  final public function getInnerRightParenUNTYPED(): EditableNode {
    return $this->innerRightParen;
  }

  public function withInnerRightParen(RightParenToken $value): this {
    if ($value === $this->innerRightParen) {
      return $this;
    }
    return new static(
      $this->outer_left_paren,
      $this->coroutine,
      $this->function_keyword,
      $this->inner_left_paren,
      $this->parameter_list,
      $value,
      $this->colon,
      $this->return_type,
      $this->outer_right_paren,
    );
  }

  public function hasInnerRightParen(): bool {
    return $this->innerRightParen !== null;
  }

  /**
   * @returns RightParenToken
   */
  public function getInnerRightParen(): RightParenToken {
    return
      TypeAssert\instance_of(RightParenToken::class, $this->innerRightParen);
  }

  /**
   * @returns RightParenToken
   */
  public function getInnerRightParenx(): RightParenToken {
    return $this->getInnerRightParen();
  }

  final public function getColonUNTYPED(): EditableNode {
    return $this->colon;
  }

  public function withColon(ColonToken $value): this {
    if ($value === $this->colon) {
      return $this;
    }
    return new static(
      $this->outer_left_paren,
      $this->coroutine,
      $this->function_keyword,
      $this->inner_left_paren,
      $this->parameter_list,
      $this->inner_right_paren,
      $value,
      $this->return_type,
      $this->outer_right_paren,
    );
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

  final public function getReturnTypeUNTYPED(): EditableNode {
    return $this->returnType;
  }

  public function withReturnType(EditableNode $value): this {
    if ($value === $this->returnType) {
      return $this;
    }
    return new static(
      $this->outer_left_paren,
      $this->coroutine,
      $this->function_keyword,
      $this->inner_left_paren,
      $this->parameter_list,
      $this->inner_right_paren,
      $this->colon,
      $value,
      $this->outer_right_paren,
    );
  }

  public function hasReturnType(): bool {
    return $this->returnType !== null;
  }

  /**
   * @returns ClosureTypeSpecifier | GenericTypeSpecifier |
   * NullableTypeSpecifier | SimpleTypeSpecifier
   */
  public function getReturnType(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->returnType);
  }

  /**
   * @returns ClosureTypeSpecifier | GenericTypeSpecifier |
   * NullableTypeSpecifier | SimpleTypeSpecifier
   */
  public function getReturnTypex(): EditableNode {
    return $this->getReturnType();
  }

  final public function getOuterRightParenUNTYPED(): EditableNode {
    return $this->outerRightParen;
  }

  public function withOuterRightParen(RightParenToken $value): this {
    if ($value === $this->outerRightParen) {
      return $this;
    }
    return new static(
      $this->outer_left_paren,
      $this->coroutine,
      $this->function_keyword,
      $this->inner_left_paren,
      $this->parameter_list,
      $this->inner_right_paren,
      $this->colon,
      $this->return_type,
      $value,
    );
  }

  public function hasOuterRightParen(): bool {
    return $this->outerRightParen !== null;
  }

  /**
   * @returns RightParenToken
   */
  public function getOuterRightParen(): RightParenToken {
    return
      TypeAssert\instance_of(RightParenToken::class, $this->outerRightParen);
  }

  /**
   * @returns RightParenToken
   */
  public function getOuterRightParenx(): RightParenToken {
    return $this->getOuterRightParen();
  }
}
