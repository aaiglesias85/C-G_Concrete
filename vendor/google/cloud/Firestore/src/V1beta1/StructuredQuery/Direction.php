<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/query.proto

namespace Google\Cloud\Firestore\V1beta1\StructuredQuery;

use UnexpectedValueException;

/**
 * A sort direction.
 *
 * Protobuf type <code>google.firestore.v1beta1.StructuredQuery.Direction</code>
 */
class Direction
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>DIRECTION_UNSPECIFIED = 0;</code>
     */
    const DIRECTION_UNSPECIFIED = 0;
    /**
     * Ascending.
     *
     * Generated from protobuf enum <code>ASCENDING = 1;</code>
     */
    const ASCENDING = 1;
    /**
     * Descending.
     *
     * Generated from protobuf enum <code>DESCENDING = 2;</code>
     */
    const DESCENDING = 2;

    private static $valueToName = [
        self::DIRECTION_UNSPECIFIED => 'DIRECTION_UNSPECIFIED',
        self::ASCENDING => 'ASCENDING',
        self::DESCENDING => 'DESCENDING',
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
class_alias(Direction::class, \Google\Cloud\Firestore\V1beta1\StructuredQuery_Direction::class);

