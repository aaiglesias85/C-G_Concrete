<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page\Token\DetectedBreak;

use UnexpectedValueException;

/**
 * Enum to denote the type of break found.
 *
 * Protobuf type <code>google.cloud.documentai.v1.Document.Page.Token.DetectedBreak.Type</code>
 */
class Type
{
    /**
     * Unspecified break type.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * A single whitespace.
     *
     * Generated from protobuf enum <code>SPACE = 1;</code>
     */
    const SPACE = 1;
    /**
     * A wider whitespace.
     *
     * Generated from protobuf enum <code>WIDE_SPACE = 2;</code>
     */
    const WIDE_SPACE = 2;
    /**
     * A hyphen that indicates that a token has been split across lines.
     *
     * Generated from protobuf enum <code>HYPHEN = 3;</code>
     */
    const HYPHEN = 3;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::SPACE => 'SPACE',
        self::WIDE_SPACE => 'WIDE_SPACE',
        self::HYPHEN => 'HYPHEN',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


