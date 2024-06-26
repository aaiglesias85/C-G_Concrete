<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1\MigrationError;

use UnexpectedValueException;

/**
 * Represents resource error codes.
 *
 * Protobuf type <code>google.cloud.vmmigration.v1.MigrationError.ErrorCode</code>
 */
class ErrorCode
{
    /**
     * Default value. This value is not used.
     *
     * Generated from protobuf enum <code>ERROR_CODE_UNSPECIFIED = 0;</code>
     */
    const ERROR_CODE_UNSPECIFIED = 0;
    /**
     * Migrate for Compute encountered an unknown error.
     *
     * Generated from protobuf enum <code>UNKNOWN_ERROR = 1;</code>
     */
    const UNKNOWN_ERROR = 1;
    /**
     * Migrate for Compute encountered an error while validating replication
     * source health.
     *
     * Generated from protobuf enum <code>SOURCE_VALIDATION_ERROR = 2;</code>
     */
    const SOURCE_VALIDATION_ERROR = 2;
    /**
     * Migrate for Compute encountered an error during source data operation.
     *
     * Generated from protobuf enum <code>SOURCE_REPLICATION_ERROR = 3;</code>
     */
    const SOURCE_REPLICATION_ERROR = 3;
    /**
     * Migrate for Compute encountered an error during target data operation.
     *
     * Generated from protobuf enum <code>TARGET_REPLICATION_ERROR = 4;</code>
     */
    const TARGET_REPLICATION_ERROR = 4;
    /**
     * Migrate for Compute encountered an error during OS adaptation.
     *
     * Generated from protobuf enum <code>OS_ADAPTATION_ERROR = 5;</code>
     */
    const OS_ADAPTATION_ERROR = 5;
    /**
     * Migrate for Compute encountered an error in clone operation.
     *
     * Generated from protobuf enum <code>CLONE_ERROR = 6;</code>
     */
    const CLONE_ERROR = 6;
    /**
     * Migrate for Compute encountered an error in cutover operation.
     *
     * Generated from protobuf enum <code>CUTOVER_ERROR = 7;</code>
     */
    const CUTOVER_ERROR = 7;
    /**
     * Migrate for Compute encountered an error during utilization report
     * creation.
     *
     * Generated from protobuf enum <code>UTILIZATION_REPORT_ERROR = 8;</code>
     */
    const UTILIZATION_REPORT_ERROR = 8;

    private static $valueToName = [
        self::ERROR_CODE_UNSPECIFIED => 'ERROR_CODE_UNSPECIFIED',
        self::UNKNOWN_ERROR => 'UNKNOWN_ERROR',
        self::SOURCE_VALIDATION_ERROR => 'SOURCE_VALIDATION_ERROR',
        self::SOURCE_REPLICATION_ERROR => 'SOURCE_REPLICATION_ERROR',
        self::TARGET_REPLICATION_ERROR => 'TARGET_REPLICATION_ERROR',
        self::OS_ADAPTATION_ERROR => 'OS_ADAPTATION_ERROR',
        self::CLONE_ERROR => 'CLONE_ERROR',
        self::CUTOVER_ERROR => 'CUTOVER_ERROR',
        self::UTILIZATION_REPORT_ERROR => 'UTILIZATION_REPORT_ERROR',
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


