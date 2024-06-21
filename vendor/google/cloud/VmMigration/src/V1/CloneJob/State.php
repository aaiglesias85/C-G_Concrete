<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1\CloneJob;

use UnexpectedValueException;

/**
 * Possible states of the clone job.
 *
 * Protobuf type <code>google.cloud.vmmigration.v1.CloneJob.State</code>
 */
class State
{
    /**
     * The state is unknown. This is used for API compatibility only and is not
     * used by the system.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The clone job has not yet started.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * The clone job is active and running.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * The clone job finished with errors.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;
    /**
     * The clone job finished successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 4;</code>
     */
    const SUCCEEDED = 4;
    /**
     * The clone job was cancelled.
     *
     * Generated from protobuf enum <code>CANCELLED = 5;</code>
     */
    const CANCELLED = 5;
    /**
     * The clone job is being cancelled.
     *
     * Generated from protobuf enum <code>CANCELLING = 6;</code>
     */
    const CANCELLING = 6;
    /**
     * OS adaptation is running as part of the clone job to generate license.
     *
     * Generated from protobuf enum <code>ADAPTING_OS = 7;</code>
     */
    const ADAPTING_OS = 7;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::ACTIVE => 'ACTIVE',
        self::FAILED => 'FAILED',
        self::SUCCEEDED => 'SUCCEEDED',
        self::CANCELLED => 'CANCELLED',
        self::CANCELLING => 'CANCELLING',
        self::ADAPTING_OS => 'ADAPTING_OS',
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


