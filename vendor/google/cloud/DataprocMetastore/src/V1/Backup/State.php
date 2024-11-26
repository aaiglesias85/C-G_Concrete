<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1/metastore.proto

namespace Google\Cloud\Metastore\V1\Backup;

use UnexpectedValueException;

/**
 * The current state of the backup.
 *
 * Protobuf type <code>google.cloud.metastore.v1.Backup.State</code>
 */
class State
{
    /**
     * The state of the backup is unknown.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The backup is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The backup is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 2;</code>
     */
    const DELETING = 2;
    /**
     * The backup is active and ready to use.
     *
     * Generated from protobuf enum <code>ACTIVE = 3;</code>
     */
    const ACTIVE = 3;
    /**
     * The backup failed.
     *
     * Generated from protobuf enum <code>FAILED = 4;</code>
     */
    const FAILED = 4;
    /**
     * The backup is being restored.
     *
     * Generated from protobuf enum <code>RESTORING = 5;</code>
     */
    const RESTORING = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::DELETING => 'DELETING',
        self::ACTIVE => 'ACTIVE',
        self::FAILED => 'FAILED',
        self::RESTORING => 'RESTORING',
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
class_alias(State::class, \Google\Cloud\Metastore\V1\Backup_State::class);

