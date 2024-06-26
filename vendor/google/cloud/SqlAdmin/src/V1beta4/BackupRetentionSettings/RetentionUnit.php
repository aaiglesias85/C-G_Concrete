<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4\BackupRetentionSettings;

use UnexpectedValueException;

/**
 * The units that retained_backups specifies, we only support COUNT.
 *
 * Protobuf type <code>google.cloud.sql.v1beta4.BackupRetentionSettings.RetentionUnit</code>
 */
class RetentionUnit
{
    /**
     * Backup retention unit is unspecified, will be treated as COUNT.
     *
     * Generated from protobuf enum <code>RETENTION_UNIT_UNSPECIFIED = 0;</code>
     */
    const RETENTION_UNIT_UNSPECIFIED = 0;
    /**
     * Retention will be by count, eg. "retain the most recent 7 backups".
     *
     * Generated from protobuf enum <code>COUNT = 1;</code>
     */
    const COUNT = 1;

    private static $valueToName = [
        self::RETENTION_UNIT_UNSPECIFIED => 'RETENTION_UNIT_UNSPECIFIED',
        self::COUNT => 'COUNT',
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


