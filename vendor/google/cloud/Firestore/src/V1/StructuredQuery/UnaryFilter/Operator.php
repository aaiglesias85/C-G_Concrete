<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/query.proto

namespace Google\Cloud\Firestore\V1\StructuredQuery\UnaryFilter;

use UnexpectedValueException;

/**
 * A unary operator.
 *
 * Protobuf type <code>google.firestore.v1.StructuredQuery.UnaryFilter.Operator</code>
 */
class Operator
{
    /**
     * Unspecified. This value must not be used.
     *
     * Generated from protobuf enum <code>OPERATOR_UNSPECIFIED = 0;</code>
     */
    const OPERATOR_UNSPECIFIED = 0;
    /**
     * The given `field` is equal to `NaN`.
     *
     * Generated from protobuf enum <code>IS_NAN = 2;</code>
     */
    const IS_NAN = 2;
    /**
     * The given `field` is equal to `NULL`.
     *
     * Generated from protobuf enum <code>IS_NULL = 3;</code>
     */
    const IS_NULL = 3;
    /**
     * The given `field` is not equal to `NaN`.
     * Requires:
     * * No other `NOT_EQUAL`, `NOT_IN`, `IS_NOT_NULL`, or `IS_NOT_NAN`.
     * * That `field` comes first in the `order_by`.
     *
     * Generated from protobuf enum <code>IS_NOT_NAN = 4;</code>
     */
    const IS_NOT_NAN = 4;
    /**
     * The given `field` is not equal to `NULL`.
     * Requires:
     * * A single `NOT_EQUAL`, `NOT_IN`, `IS_NOT_NULL`, or `IS_NOT_NAN`.
     * * That `field` comes first in the `order_by`.
     *
     * Generated from protobuf enum <code>IS_NOT_NULL = 5;</code>
     */
    const IS_NOT_NULL = 5;

    private static $valueToName = [
        self::OPERATOR_UNSPECIFIED => 'OPERATOR_UNSPECIFIED',
        self::IS_NAN => 'IS_NAN',
        self::IS_NULL => 'IS_NULL',
        self::IS_NOT_NAN => 'IS_NOT_NAN',
        self::IS_NOT_NULL => 'IS_NOT_NULL',
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
class_alias(Operator::class, \Google\Cloud\Firestore\V1\StructuredQuery_UnaryFilter_Operator::class);

