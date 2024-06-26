<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1/migration.proto

namespace Google\Cloud\Datastore\Admin\V1;

use UnexpectedValueException;

/**
 * States for a migration.
 *
 * Protobuf type <code>google.datastore.admin.v1.MigrationState</code>
 */
class MigrationState
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>MIGRATION_STATE_UNSPECIFIED = 0;</code>
     */
    const MIGRATION_STATE_UNSPECIFIED = 0;
    /**
     * The migration is running.
     *
     * Generated from protobuf enum <code>RUNNING = 1;</code>
     */
    const RUNNING = 1;
    /**
     * The migration is paused.
     *
     * Generated from protobuf enum <code>PAUSED = 2;</code>
     */
    const PAUSED = 2;
    /**
     * The migration is complete.
     *
     * Generated from protobuf enum <code>COMPLETE = 3;</code>
     */
    const COMPLETE = 3;

    private static $valueToName = [
        self::MIGRATION_STATE_UNSPECIFIED => 'MIGRATION_STATE_UNSPECIFIED',
        self::RUNNING => 'RUNNING',
        self::PAUSED => 'PAUSED',
        self::COMPLETE => 'COMPLETE',
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

