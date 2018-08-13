<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<fef4a083729cfea114a19a99de6fdb28>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class YieldExpression extends EditableNode {

  public function __construct(
    private YieldToken $keyword,
    private ?EditableNode $operand,
  ) {
    parent::__construct('yield_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $keyword = YieldToken::fromJSON(
      /* UNSAFE_EXPR */ $json['yield_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $keyword->getWidth();
    $operand = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['yield_operand'],
      $file,
      $offset,
      $source,
    );
    $offset += $operand->getWidth();
    return new static($keyword, $operand);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'keyword' => $this->keyword,
      'operand' => $this->operand,
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
    $operand = $this->operand?->rewrite($rewriter, $parents);
    if ($keyword === $this->keyword && $operand === $this->operand) {
      return $this;
    }
    return new static($keyword, $operand);
  }

  final public function getKeywordUNTYPED(): EditableNode {
    return $this->keyword;
  }

  public function withKeyword(YieldToken $value): this {
    if ($value === $this->keyword) {
      return $this;
    }
    return new static($value, $this->operand);
  }

  public function hasKeyword(): bool {
    return $this->keyword !== null;
  }

  /**
   * @returns YieldToken
   */
  public function getKeyword(): YieldToken {
    return TypeAssert\instance_of(YieldToken::class, $this->keyword);
  }

  /**
   * @returns YieldToken
   */
  public function getKeywordx(): YieldToken {
    return $this->getKeyword();
  }

  final public function getOperandUNTYPED(): EditableNode {
    return $this->operand;
  }

  public function withOperand(?EditableNode $value): this {
    if ($value === $this->operand) {
      return $this;
    }
    return new static($this->keyword, $value);
  }

  public function hasOperand(): bool {
    return $this->operand !== null;
  }

  /**
   * @returns AnonymousFunction | BinaryExpression | ElementInitializer |
   * FunctionCallExpression | LambdaExpression | LiteralExpression |
   * MemberSelectionExpression | Missing | ObjectCreationExpression |
   * ParenthesizedExpression | PostfixUnaryExpression | PrefixUnaryExpression |
   * SubscriptExpression | BreakToken | NameToken | TupleExpression |
   * VariableExpression
   */
  public function getOperand(): ?EditableNode {
    if ($this->operand->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableNode::class, $this->operand);
  }

  /**
   * @returns AnonymousFunction | BinaryExpression | ElementInitializer |
   * FunctionCallExpression | LambdaExpression | LiteralExpression |
   * MemberSelectionExpression | ObjectCreationExpression |
   * ParenthesizedExpression | PostfixUnaryExpression | PrefixUnaryExpression |
   * SubscriptExpression | BreakToken | NameToken | TupleExpression |
   * VariableExpression
   */
  public function getOperandx(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->operand);
  }
}
