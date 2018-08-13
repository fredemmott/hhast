<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<fd0724b39cab101b73d66e989d110c4b>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

<<__ConsistentConstruct>>
final class SimpleTypeSpecifier extends EditableNode {

  public function __construct(private EditableNode $specifier) {
    parent::__construct('simple_type_specifier');
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    string $file,
    int $offset,
    string $source,
  ): this {
    $specifier = EditableNode::fromJSON(
      /* UNSAFE_EXPR */ $json['simple_type_specifier'],
      $file,
      $offset,
      $source,
    );
    $offset += $specifier->getWidth();
    return new static($specifier);
  }

  <<__Override>>
  public function getChildren(): dict<string, ?EditableNode> {
    return dict[
      'specifier' => $this->specifier,
    ];
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?vec<EditableNode> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $specifier = $this->specifier->rewrite($rewriter, $parents);
    if ($specifier === $this->specifier) {
      return $this;
    }
    return new static($specifier);
  }

  final public function getSpecifierUNTYPED(): EditableNode {
    return $this->specifier;
  }

  public function withSpecifier(EditableNode $value): this {
    if ($value === $this->specifier) {
      return $this;
    }
    return new static($value);
  }

  public function hasSpecifier(): bool {
    return $this->specifier !== null;
  }

  /**
   * @returns QualifiedName | XHPClassNameToken | ConstructToken | ArrayToken |
   * ArraykeyToken | BoolToken | BooleanToken | DarrayToken | DictToken |
   * DoubleToken | FloatToken | IntToken | IntegerToken | KeysetToken |
   * MixedToken | NameToken | NoreturnToken | NumToken | ObjectToken |
   * ParentToken | RealToken | ResourceToken | SelfToken | StringToken |
   * ThisToken | VarToken | VarrayToken | VecToken | VoidToken
   */
  public function getSpecifier(): EditableNode {
    return TypeAssert\instance_of(EditableNode::class, $this->specifier);
  }

  /**
   * @returns QualifiedName | XHPClassNameToken | ConstructToken | ArrayToken |
   * ArraykeyToken | BoolToken | BooleanToken | DarrayToken | DictToken |
   * DoubleToken | FloatToken | IntToken | IntegerToken | KeysetToken |
   * MixedToken | NameToken | NoreturnToken | NumToken | ObjectToken |
   * ParentToken | RealToken | ResourceToken | SelfToken | StringToken |
   * ThisToken | VarToken | VarrayToken | VecToken | VoidToken
   */
  public function getSpecifierx(): EditableNode {
    return $this->getSpecifier();
  }
}
