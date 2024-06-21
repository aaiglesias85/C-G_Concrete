<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/batches.proto

namespace Google\Cloud\Dataproc\V1\Batch;

use UnexpectedValueException;

/**
 * The batch state.
 *
 * Protobuf type <code>google.cloud.dataproc.v1.Batch.State</code>
 */
class State
{
    /**
     * The batch state is unknown.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The batch is created before running.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * The batch is running.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * The batch is cancelling.
     *
     * Generated from protobuf enum <code>CANCELLING = 3;</code>
     */
    const CANCELLING = 3;
    /**
     * The batch cancellation was successful.
     *
     * Generated from protobuf enum <code>CANCELLED = 4;</code>
     */
    const CANCELLED = 4;
    /**
     * The batch completed successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 5;</code>
     */
    const SUCCEEDED = 5;
    /**
     * The batch is no longer running due to an error.
     *
     * Generated from protobuf enum <code>FAILED = 6;</code>
     */
    const FAILED = 6;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::RUNNING => 'RUNNING',
        self::CANCELLING => 'CANCELLING',
        self::CANCELLED => 'CANCELLED',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
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
class_alias(State::class, \Google\Cloud\Dataproc\V1\Batch_State::class);

