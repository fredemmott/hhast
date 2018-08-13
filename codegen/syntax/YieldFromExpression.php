<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<0620b27b71fb98b88d919f854561e679>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class YieldFromExpression extends EditableNode {

  public function __construct(
    private YieldToken $yieldKeyword,
    private FromToken $fromKeyword,
    private EditableNode $operand,
  ) {
    parent::__construct('yield_from_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $yield_keyword = YieldToken::fromJSON(
      /* UNSAFE_EXPR */ $json['yield_from_yield_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $yield_keyword->getWidth();
    $from_keyword = FromToken::fromJSON(
      /* UNSAFE_EXPR */ $json['yield_from_from_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $from_keyword->getWidth();
    $operand = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['yield_from_operand'],
      $file,
      $offset,
      $source,
    );
    $offset += $operand->getWidth();
    return new static($yield_keyword, $from_keyword, $operand);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'yield_keyword' => $this->yieldKeyword,
      'from_keyword' => $this->fromKeyword,
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
    $yield_keyword = $this->yieldKeyword->rewrite($rewriter, $parents);
    $from_keyword = $this->fromKeyword->rewrite($rewriter, $parents);
    $operand = $this->operand->rewrite($rewriter, $parents);
    if (
      $yield_keyword === $this->yieldKeyword &&
      $from_keyword === $this->fromKeyword &&
      $operand === $this->operand
    ) {
      return $this;
    }
    return new static($yield_keyword, $from_keyword, $operand);
  }

  final public function getYieldKeywordUNTYPED(): EditableNode {
    return $this->yieldKeyword;
  }

  public function withYieldKeyword(YieldToken $value): this {
    if ($value === $this->yieldKeyword) {
      return $this;
    }
    return new static($value, $this->from_keyword, $this->operand);
  }

  public function hasYieldKeyword(): bool {
    return $this->yieldKeyword !== null;
  }

  /**
   * @returns YieldToken
   */
  public function getYieldKeyword(): YieldToken {
    return TypeAssert\instance_of(YieldToken::class, $this->yieldKeyword);
  }

  /**
   * @returns YieldToken
   */
  public function getYieldKeywordx(): YieldToken {
    return $this->getYieldKeyword();
  }

  final public function getFromKeywordUNTYPED(): EditableNode {
    return $this->fromKeyword;
  }

  public function withFromKeyword(FromToken $value): this {
    if ($value === $this->fromKeyword) {
      return $this;
    }
    return new static($this->yield_keyword, $value, $this->operand);
  }

  public function hasFromKeyword(): bool {
    return $this->fromKeyword !== null;
  }

  /**
   * @returns FromToken
   */
  public function getFromKeyword(): FromToken {
    return TypeAssert\instance_of(FromToken::class, $this->fromKeyword);
  }

  /**
   * @returns FromToken
   */
  public function getFromKeywordx(): FromToken {
    return $this->getFromKeyword();
  }

  final public function getOperandUNTYPED(): EditableNode {
    return $this->operand;
  }

  public function withOperand(EditableNode $value): this {
    if ($value === $this->operand) {
      return $this;
    }
    return new static($this->yield_keyword, $this->from_keyword, $value);
  }

  public function hasOperand(): bool {
    return $this->operand !== null;
  }

  /**
   * @returns ArrayCreationExpression | FunctionCallExpression |
   * LiteralExpression | ParenthesizedExpression | VariableExpression
   */
  public function getOperand(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->operand);
  }

  /**
   * @returns ArrayCreationExpression | FunctionCallExpression |
   * LiteralExpression | ParenthesizedExpression | VariableExpression
   */
  public function getOperandx(): EditableNode {
    return $this->getOperand();
  }
}
