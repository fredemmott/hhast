<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<d58b9023498aea8e664b18509ded4c98>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class ErrorSyntax extends EditableNode {

  public function __construct(private EditableToken $error) {
    parent::__construct('error');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $error = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['error_error'],
      $file,
      $offset,
      $source,
    );
    $offset += $error->getWidth();
    return new static($error);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'error' => $this->error,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $error = $this->error->rewrite($rewriter, $parents);
    if ($error === $this->error) {
      return $this;
    }
    return new static($error);
  }

  final public function getErrorUNTYPED(): EditableNode {
    return $this->error;
  }

  public function withError(EditableToken $value): this {
    if ($value === $this->error) {
      return $this;
    }
    return new static($value);
  }

  public function hasError(): bool {
    return $this->error !== null;
  }

  /**
   * @returns CommaToken | SemicolonToken | EqualToken | DecimalLiteralToken |
   * NameToken | SingleQuotedStringLiteralToken | VariableToken |
   * LeftBraceToken | RightBraceToken
   */
  public function getError(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->error);
  }

  /**
   * @returns CommaToken | SemicolonToken | EqualToken | DecimalLiteralToken |
   * NameToken | SingleQuotedStringLiteralToken | VariableToken |
   * LeftBraceToken | RightBraceToken
   */
  public function getErrorx(): EditableToken {
    return $this->getError();
  }
}
