<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<ab6e25311ad058e4a20ece9952a5c818>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class Enumerator extends EditableNode {

  public function __construct(
    private NameToken $name,
    private EqualToken $equal,
    private EditableNode $value,
    private SemicolonToken $semicolon,
  ) {
    parent::__construct('enumerator');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $name = NameToken::fromJSON(
      /* UNSAFE_EXPR */ $json['enumerator_name'],
      $file,
      $offset,
      $source,
    );
    $offset += $name->getWidth();
    $equal = EqualToken::fromJSON(
      /* UNSAFE_EXPR */ $json['enumerator_equal'],
      $file,
      $offset,
      $source,
    );
    $offset += $equal->getWidth();
    $value = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['enumerator_value'],
      $file,
      $offset,
      $source,
    );
    $offset += $value->getWidth();
    $semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['enumerator_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $semicolon->getWidth();
    return new static($name, $equal, $value, $semicolon);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'name' => $this->name,
      'equal' => $this->equal,
      'value' => $this->value,
      'semicolon' => $this->semicolon,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $name = $this->name->rewrite($rewriter, $parents);
    $equal = $this->equal->rewrite($rewriter, $parents);
    $value = $this->value->rewrite($rewriter, $parents);
    $semicolon = $this->semicolon->rewrite($rewriter, $parents);
    if (
      $name === $this->name &&
      $equal === $this->equal &&
      $value === $this->value &&
      $semicolon === $this->semicolon
    ) {
      return $this;
    }
    return new static($name, $equal, $value, $semicolon);
  }

  final public function getNameUNTYPED(): EditableNode {
    return $this->name;
  }

  public function withName(NameToken $value): this {
    if ($value === $this->name) {
      return $this;
    }
    return new static($value, $this->equal, $this->value, $this->semicolon);
  }

  public function hasName(): bool {
    return $this->name !== null;
  }

  /**
   * @returns NameToken
   */
  public function getName(): NameToken {
    return TypeAssert\instance_of(NameToken::class, $this->name);
  }

  /**
   * @returns NameToken
   */
  public function getNamex(): NameToken {
    return $this->getName();
  }

  final public function getEqualUNTYPED(): EditableNode {
    return $this->equal;
  }

  public function withEqual(EqualToken $value): this {
    if ($value === $this->equal) {
      return $this;
    }
    return new static($this->name, $value, $this->value, $this->semicolon);
  }

  public function hasEqual(): bool {
    return $this->equal !== null;
  }

  /**
   * @returns EqualToken
   */
  public function getEqual(): EqualToken {
    return TypeAssert\instance_of(EqualToken::class, $this->equal);
  }

  /**
   * @returns EqualToken
   */
  public function getEqualx(): EqualToken {
    return $this->getEqual();
  }

  final public function getValueUNTYPED(): EditableNode {
    return $this->value;
  }

  public function withValue(EditableNode $value): this {
    if ($value === $this->value) {
      return $this;
    }
    return new static($this->name, $this->equal, $value, $this->semicolon);
  }

  public function hasValue(): bool {
    return $this->value !== null;
  }

  /**
   * @returns BinaryExpression | FunctionCallExpression | LiteralExpression |
   * ObjectCreationExpression | ScopeResolutionExpression | NameToken |
   * VariableExpression
   */
  public function getValue(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->value);
  }

  /**
   * @returns BinaryExpression | FunctionCallExpression | LiteralExpression |
   * ObjectCreationExpression | ScopeResolutionExpression | NameToken |
   * VariableExpression
   */
  public function getValuex(): EditableNode {
    return $this->getValue();
  }

  final public function getSemicolonUNTYPED(): EditableNode {
    return $this->semicolon;
  }

  public function withSemicolon(SemicolonToken $value): this {
    if ($value === $this->semicolon) {
      return $this;
    }
    return new static($this->name, $this->equal, $this->value, $value);
  }

  public function hasSemicolon(): bool {
    return $this->semicolon !== null;
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolon(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->semicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolonx(): SemicolonToken {
    return $this->getSemicolon();
  }
}
