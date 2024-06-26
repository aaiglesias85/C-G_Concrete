<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1;

use UnexpectedValueException;

/**
 * The database engine types.
 *
 * Protobuf type <code>google.cloud.clouddms.v1.DatabaseEngine</code>
 */
class DatabaseEngine
{
    /**
     * The source database engine of the migration job is unknown.
     *
     * Generated from protobuf enum <code>DATABASE_ENGINE_UNSPECIFIED = 0;</code>
     */
    const DATABASE_ENGINE_UNSPECIFIED = 0;
    /**
     * The source engine is MySQL.
     *
     * Generated from protobuf enum <code>MYSQL = 1;</code>
     */
    const MYSQL = 1;
    /**
     * The source engine is PostgreSQL.
     *
     * Generated from protobuf enum <code>POSTGRESQL = 2;</code>
     */
    const POSTGRESQL = 2;

    private static $valueToName = [
        self::DATABASE_ENGINE_UNSPECIFIED => 'DATABASE_ENGINE_UNSPECIFIED',
        self::MYSQL => 'MYSQL',
        self::POSTGRESQL => 'POSTGRESQL',
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

