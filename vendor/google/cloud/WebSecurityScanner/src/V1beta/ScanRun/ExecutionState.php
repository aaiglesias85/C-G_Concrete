<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/scan_run.proto

namespace Google\Cloud\WebSecurityScanner\V1beta\ScanRun;

use UnexpectedValueException;

/**
 * Types of ScanRun execution state.
 *
 * Protobuf type <code>google.cloud.websecurityscanner.v1beta.ScanRun.ExecutionState</code>
 */
class ExecutionState
{
    /**
     * Represents an invalid state caused by internal server error. This value
     * should never be returned.
     *
     * Generated from protobuf enum <code>EXECUTION_STATE_UNSPECIFIED = 0;</code>
     */
    const EXECUTION_STATE_UNSPECIFIED = 0;
    /**
     * The scan is waiting in the queue.
     *
     * Generated from protobuf enum <code>QUEUED = 1;</code>
     */
    const QUEUED = 1;
    /**
     * The scan is in progress.
     *
     * Generated from protobuf enum <code>SCANNING = 2;</code>
     */
    const SCANNING = 2;
    /**
     * The scan is either finished or stopped by user.
     *
     * Generated from protobuf enum <code>FINISHED = 3;</code>
     */
    const FINISHED = 3;

    private static $valueToName = [
        self::EXECUTION_STATE_UNSPECIFIED => 'EXECUTION_STATE_UNSPECIFIED',
        self::QUEUED => 'QUEUED',
        self::SCANNING => 'SCANNING',
        self::FINISHED => 'FINISHED',
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


