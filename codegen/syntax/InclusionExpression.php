<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<31f2811d5e55f69e6a67793d4eead79a>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class InclusionExpression extends EditableNode {

  public function __construct(
    private EditableToken $require,
    private EditableNode $filename,
  ) {
    parent::__construct('inclusion_expression');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $require = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['inclusion_require'],
      $file,
      $offset,
      $source,
    );
    $offset += $require->getWidth();
    $filename = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['inclusion_filename'],
      $file,
      $offset,
      $source,
    );
    $offset += $filename->getWidth();
    return new static($require, $filename);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'require' => $this->require,
      'filename' => $this->filename,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $require = $this->require->rewrite($rewriter, $parents);
    $filename = $this->filename->rewrite($rewriter, $parents);
    if ($require === $this->require && $filename === $this->filename) {
      return $this;
    }
    return new static($require, $filename);
  }

  final public function getRequireUNTYPED(): EditableNode {
    return $this->require;
  }

  public function withRequire(EditableToken $value): this {
    if ($value === $this->require) {
      return $this;
    }
    return new static($value, $this->filename);
  }

  public function hasRequire(): bool {
    return $this->require !== null;
  }

  /**
   * @returns IncludeToken | Include_onceToken | RequireToken |
   * Require_onceToken
   */
  public function getRequire(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->require);
  }

  /**
   * @returns IncludeToken | Include_onceToken | RequireToken |
   * Require_onceToken
   */
  public function getRequirex(): EditableToken {
    return $this->getRequire();
  }

  final public function getFilenameUNTYPED(): EditableNode {
    return $this->filename;
  }

  public function withFilename(EditableNode $value): this {
    if ($value === $this->filename) {
      return $this;
    }
    return new static($this->require, $value);
  }

  public function hasFilename(): bool {
    return $this->filename !== null;
  }

  /**
   * @returns BinaryExpression | LiteralExpression | ParenthesizedExpression |
   * SubscriptExpression | NameToken | VariableExpression
   */
  public function getFilename(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->filename);
  }

  /**
   * @returns BinaryExpression | LiteralExpression | ParenthesizedExpression |
   * SubscriptExpression | NameToken | VariableExpression
   */
  public function getFilenamex(): EditableNode {
    return $this->getFilename();
  }
}
