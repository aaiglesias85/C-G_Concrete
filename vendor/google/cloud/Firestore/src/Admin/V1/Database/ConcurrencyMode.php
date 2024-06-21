<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/database.proto

namespace Google\Cloud\Firestore\Admin\V1\Database;

use UnexpectedValueException;

/**
 * The type of concurrency control mode for transactions.
 *
 * Protobuf type <code>google.firestore.admin.v1.Database.ConcurrencyMode</code>
 */
class ConcurrencyMode
{
    /**
     * Not used.
     *
     * Generated from protobuf enum <code>CONCURRENCY_MODE_UNSPECIFIED = 0;</code>
     */
    const CONCURRENCY_MODE_UNSPECIFIED = 0;
    /**
     * Use optimistic concurrency control by default. This mode is available
     * for Cloud Firestore databases.
     *
     * Generated from protobuf enum <code>OPTIMISTIC = 1;</code>
     */
    const OPTIMISTIC = 1;
    /**
     * Use pessimistic concurrency control by default. This mode is available
     * for Cloud Firestore databases.
     * This is the default setting for Cloud Firestore.
     *
     * Generated from protobuf enum <code>PESSIMISTIC = 2;</code>
     */
    const PESSIMISTIC = 2;
    /**
     * Use optimistic concurrency control with entity groups by default.
     * This is the only available mode for Cloud Datastore.
     * This mode is also available for Cloud Firestore with Datastore Mode but
     * is not recommended.
     *
     * Generated from protobuf enum <code>OPTIMISTIC_WITH_ENTITY_GROUPS = 3;</code>
     */
    const OPTIMISTIC_WITH_ENTITY_GROUPS = 3;

    private static $valueToName = [
        self::CONCURRENCY_MODE_UNSPECIFIED => 'CONCURRENCY_MODE_UNSPECIFIED',
        self::OPTIMISTIC => 'OPTIMISTIC',
        self::PESSIMISTIC => 'PESSIMISTIC',
        self::OPTIMISTIC_WITH_ENTITY_GROUPS => 'OPTIMISTIC_WITH_ENTITY_GROUPS',
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
class_alias(ConcurrencyMode::class, \Google\Cloud\Firestore\Admin\V1\Database_ConcurrencyMode::class);

