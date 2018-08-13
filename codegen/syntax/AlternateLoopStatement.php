<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<81ceaeea3510d4c1b863d99c7c072181>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
abstract class AlternateLoopStatementGeneratedBase
  extends EditableNode
  implements IControlFlowStatement, ILoopStatement {

  public function __construct(
    private ColonToken $openingColon,
    private EditableList<EditableNode> $statements,
    private EditableToken $closingKeyword,
    private SemicolonToken $closingSemicolon,
  ) {
    parent::__construct('alternate_loop_statement');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $opening_colon = ColonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_loop_opening_colon'],
      $file,
      $offset,
      $source,
    );
    $offset += $opening_colon->getWidth();
    $statements = EditableList::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_loop_statements'],
      $file,
      $offset,
      $source,
    );
    $offset += $statements->getWidth();
    $closing_keyword = EditableToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_loop_closing_keyword'],
      $file,
      $offset,
      $source,
    );
    $offset += $closing_keyword->getWidth();
    $closing_semicolon = SemicolonToken::fromJSON(
      /* UNSAFE_EXPR */ $json['alternate_loop_closing_semicolon'],
      $file,
      $offset,
      $source,
    );
    $offset += $closing_semicolon->getWidth();
    return new static(
      $opening_colon,
      $statements,
      $closing_keyword,
      $closing_semicolon,
    );
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'opening_colon' => $this->openingColon,
      'statements' => $this->statements,
      'closing_keyword' => $this->closingKeyword,
      'closing_semicolon' => $this->closingSemicolon,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $opening_colon = $this->openingColon->rewrite($rewriter, $parents);
    $statements = $this->statements->rewrite($rewriter, $parents);
    $closing_keyword = $this->closingKeyword->rewrite($rewriter, $parents);
    $closing_semicolon = $this->closingSemicolon->rewrite($rewriter, $parents);
    if (
      $opening_colon === $this->openingColon &&
      $statements === $this->statements &&
      $closing_keyword === $this->closingKeyword &&
      $closing_semicolon === $this->closingSemicolon
    ) {
      return $this;
    }
    return new static(
      $opening_colon,
      $statements,
      $closing_keyword,
      $closing_semicolon,
    );
  }

  final public function getOpeningColonUNTYPED(): EditableNode {
    return $this->openingColon;
  }

  public function withOpeningColon(ColonToken $value): this {
    if ($value === $this->openingColon) {
      return $this;
    }
    return new static(
      $value,
      $this->statements,
      $this->closing_keyword,
      $this->closing_semicolon,
    );
  }

  public function hasOpeningColon(): bool {
    return $this->openingColon !== null;
  }

  /**
   * @returns ColonToken
   */
  public function getOpeningColon(): ColonToken {
    return TypeAssert\instance_of(ColonToken::class, $this->openingColon);
  }

  /**
   * @returns ColonToken
   */
  public function getOpeningColonx(): ColonToken {
    return $this->getOpeningColon();
  }

  final public function getStatementsUNTYPED(): EditableNode {
    return $this->statements;
  }

  public function withStatements(EditableList<EditableNode> $value): this {
    if ($value === $this->statements) {
      return $this;
    }
    return new static(
      $this->opening_colon,
      $value,
      $this->closing_keyword,
      $this->closing_semicolon,
    );
  }

  public function hasStatements(): bool {
    return $this->statements !== null;
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getStatements(): EditableList<EditableNode> {
    return TypeAssert\instance_of(EditableList::class, $this->statements);
  }

  /**
   * @returns EditableList<EditableNode>
   */
  public function getStatementsx(): EditableList<EditableNode> {
    return $this->getStatements();
  }

  final public function getClosingKeywordUNTYPED(): EditableNode {
    return $this->closingKeyword;
  }

  public function withClosingKeyword(EditableToken $value): this {
    if ($value === $this->closingKeyword) {
      return $this;
    }
    return new static(
      $this->opening_colon,
      $this->statements,
      $value,
      $this->closing_semicolon,
    );
  }

  public function hasClosingKeyword(): bool {
    return $this->closingKeyword !== null;
  }

  /**
   * @returns EnddeclareToken | EndforToken | EndforeachToken | EndwhileToken
   */
  public function getClosingKeyword(): EditableToken {
    return TypeAssert\instance_of(EditableToken::class, $this->closingKeyword);
  }

  /**
   * @returns EnddeclareToken | EndforToken | EndforeachToken | EndwhileToken
   */
  public function getClosingKeywordx(): EditableToken {
    return $this->getClosingKeyword();
  }

  final public function getClosingSemicolonUNTYPED(): EditableNode {
    return $this->closingSemicolon;
  }

  public function withClosingSemicolon(SemicolonToken $value): this {
    if ($value === $this->closingSemicolon) {
      return $this;
    }
    return new static(
      $this->opening_colon,
      $this->statements,
      $this->closing_keyword,
      $value,
    );
  }

  public function hasClosingSemicolon(): bool {
    return $this->closingSemicolon !== null;
  }

  /**
   * @returns SemicolonToken
   */
  public function getClosingSemicolon(): SemicolonToken {
    return
      TypeAssert\instance_of(SemicolonToken::class, $this->closingSemicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getClosingSemicolonx(): SemicolonToken {
    return $this->getClosingSemicolon();
  }
}
