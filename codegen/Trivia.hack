/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<e2b4b64f2c0513ed414dd4fb9bb9a7bd>>
 */
namespace Facebook\HHAST;

final class AfterHaltCompiler extends EditableTrivia {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    AfterHaltCompiler::class,
    EditableNode::class,
    EditableTrivia::class,
  ];

  public function __construct(
    string $text,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct('after_halt_compiler', $text, $source_ref);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class DelimitedComment extends EditableTrivia implements IComment {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    DelimitedComment::class,
    EditableNode::class,
    EditableTrivia::class,
    IComment::class,
  ];

  public function __construct(
    string $text,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct('delimited_comment', $text, $source_ref);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class EndOfLine extends EditableTrivia {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    EndOfLine::class,
    EditableNode::class,
    EditableTrivia::class,
  ];

  public function __construct(
    string $text,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct('end_of_line', $text, $source_ref);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class ExtraTokenError extends EditableTrivia {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    ExtraTokenError::class,
    EditableNode::class,
    EditableTrivia::class,
  ];

  public function __construct(
    string $text,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct('extra_token_error', $text, $source_ref);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class FallThrough extends EditableTrivia {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    FallThrough::class,
    EditableNode::class,
    EditableTrivia::class,
  ];

  public function __construct(
    string $text,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct('fall_through', $text, $source_ref);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class FixMe extends EditableTrivia {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    FixMe::class,
    EditableNode::class,
    EditableTrivia::class,
  ];

  public function __construct(
    string $text,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct('fix_me', $text, $source_ref);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class IgnoreError extends EditableTrivia {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    IgnoreError::class,
    EditableNode::class,
    EditableTrivia::class,
  ];

  public function __construct(
    string $text,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct('ignore_error', $text, $source_ref);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class SingleLineComment extends EditableTrivia implements IComment {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    SingleLineComment::class,
    EditableNode::class,
    EditableTrivia::class,
    IComment::class,
  ];

  public function __construct(
    string $text,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct('single_line_comment', $text, $source_ref);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class Unsafe extends EditableTrivia {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    Unsafe::class,
    EditableNode::class,
    EditableTrivia::class,
  ];

  public function __construct(
    string $text,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct('unsafe', $text, $source_ref);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class UnsafeExpression extends EditableTrivia {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    UnsafeExpression::class,
    EditableNode::class,
    EditableTrivia::class,
  ];

  public function __construct(
    string $text,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct('unsafe_expression', $text, $source_ref);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}

final class WhiteSpace extends EditableTrivia {

  const keyset<classname<EditableNode>> INTERFACES = keyset[
    WhiteSpace::class,
    EditableNode::class,
    EditableTrivia::class,
  ];

  public function __construct(
    string $text,
    ?__Private\SourceRef $source_ref = null,
  ) {
    parent::__construct('whitespace', $text, $source_ref);
  }

  public function withText(string $text): this {
    if ($text === $this->getText()) {
      return $this;
    }
    return new self($text);
  }
}
