<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4\DatabaseInstance;

use UnexpectedValueException;

/**
 * The current serving state of the database instance.
 *
 * Protobuf type <code>google.cloud.sql.v1beta4.DatabaseInstance.SqlInstanceState</code>
 */
class SqlInstanceState
{
    /**
     * The state of the instance is unknown.
     *
     * Generated from protobuf enum <code>SQL_INSTANCE_STATE_UNSPECIFIED = 0;</code>
     */
    const SQL_INSTANCE_STATE_UNSPECIFIED = 0;
    /**
     * The instance is running, or has been stopped by owner.
     *
     * Generated from protobuf enum <code>RUNNABLE = 1;</code>
     */
    const RUNNABLE = 1;
    /**
     * The instance is not available, for example due to problems with billing.
     *
     * Generated from protobuf enum <code>SUSPENDED = 2;</code>
     */
    const SUSPENDED = 2;
    /**
     * The instance is being deleted.
     *
     * Generated from protobuf enum <code>PENDING_DELETE = 3;</code>
     */
    const PENDING_DELETE = 3;
    /**
     * The instance is being created.
     *
     * Generated from protobuf enum <code>PENDING_CREATE = 4;</code>
     */
    const PENDING_CREATE = 4;
    /**
     * The instance is down for maintenance.
     *
     * Generated from protobuf enum <code>MAINTENANCE = 5;</code>
     */
    const MAINTENANCE = 5;
    /**
     * The creation of the instance failed or a fatal error occurred during
     * maintenance.
     *
     * Generated from protobuf enum <code>FAILED = 6;</code>
     */
    const FAILED = 6;
    /**
     * Deprecated
     *
     * Generated from protobuf enum <code>ONLINE_MAINTENANCE = 7 [deprecated = true];</code>
     */
    const ONLINE_MAINTENANCE = 7;

    private static $valueToName = [
        self::SQL_INSTANCE_STATE_UNSPECIFIED => 'SQL_INSTANCE_STATE_UNSPECIFIED',
        self::RUNNABLE => 'RUNNABLE',
        self::SUSPENDED => 'SUSPENDED',
        self::PENDING_DELETE => 'PENDING_DELETE',
        self::PENDING_CREATE => 'PENDING_CREATE',
        self::MAINTENANCE => 'MAINTENANCE',
        self::FAILED => 'FAILED',
        self::ONLINE_MAINTENANCE => 'ONLINE_MAINTENANCE',
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


