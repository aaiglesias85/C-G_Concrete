<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1\DataSourceParameter;

use UnexpectedValueException;

/**
 * Parameter type.
 *
 * Protobuf type <code>google.cloud.bigquery.datatransfer.v1.DataSourceParameter.Type</code>
 */
class Type
{
    /**
     * Type unspecified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * String parameter.
     *
     * Generated from protobuf enum <code>STRING = 1;</code>
     */
    const STRING = 1;
    /**
     * Integer parameter (64-bits).
     * Will be serialized to json as string.
     *
     * Generated from protobuf enum <code>INTEGER = 2;</code>
     */
    const INTEGER = 2;
    /**
     * Double precision floating point parameter.
     *
     * Generated from protobuf enum <code>DOUBLE = 3;</code>
     */
    const DOUBLE = 3;
    /**
     * Boolean parameter.
     *
     * Generated from protobuf enum <code>BOOLEAN = 4;</code>
     */
    const BOOLEAN = 4;
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf enum <code>RECORD = 5;</code>
     */
    const RECORD = 5;
    /**
     * Page ID for a Google+ Page.
     *
     * Generated from protobuf enum <code>PLUS_PAGE = 6;</code>
     */
    const PLUS_PAGE = 6;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::STRING => 'STRING',
        self::INTEGER => 'INTEGER',
        self::DOUBLE => 'DOUBLE',
        self::BOOLEAN => 'BOOLEAN',
        self::RECORD => 'RECORD',
        self::PLUS_PAGE => 'PLUS_PAGE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\BigQuery\DataTransfer\V1\DataSourceParameter_Type::class);

