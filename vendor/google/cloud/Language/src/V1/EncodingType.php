<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use UnexpectedValueException;

/**
 * Represents the text encoding that the caller uses to process the output.
 * Providing an `EncodingType` is recommended because the API provides the
 * beginning offsets for various outputs, such as tokens and mentions, and
 * languages that natively use different text encodings may access offsets
 * differently.
 *
 * Protobuf type <code>google.cloud.language.v1.EncodingType</code>
 */
class EncodingType
{
    /**
     * If `EncodingType` is not specified, encoding-dependent information (such as
     * `begin_offset`) will be set at `-1`.
     *
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * Encoding-dependent information (such as `begin_offset`) is calculated based
     * on the UTF-8 encoding of the input. C++ and Go are examples of languages
     * that use this encoding natively.
     *
     * Generated from protobuf enum <code>UTF8 = 1;</code>
     */
    const UTF8 = 1;
    /**
     * Encoding-dependent information (such as `begin_offset`) is calculated based
     * on the UTF-16 encoding of the input. Java and JavaScript are examples of
     * languages that use this encoding natively.
     *
     * Generated from protobuf enum <code>UTF16 = 2;</code>
     */
    const UTF16 = 2;
    /**
     * Encoding-dependent information (such as `begin_offset`) is calculated based
     * on the UTF-32 encoding of the input. Python is an example of a language
     * that uses this encoding natively.
     *
     * Generated from protobuf enum <code>UTF32 = 3;</code>
     */
    const UTF32 = 3;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::UTF8 => 'UTF8',
        self::UTF16 => 'UTF16',
        self::UTF32 => 'UTF32',
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

