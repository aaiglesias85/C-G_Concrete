<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/operation.proto

namespace Google\Cloud\Firestore\Admin\V1;

use UnexpectedValueException;

/**
 * Describes the state of the operation.
 *
 * Protobuf type <code>google.firestore.admin.v1.OperationState</code>
 */
class OperationState
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>OPERATION_STATE_UNSPECIFIED = 0;</code>
     */
    const OPERATION_STATE_UNSPECIFIED = 0;
    /**
     * Request is being prepared for processing.
     *
     * Generated from protobuf enum <code>INITIALIZING = 1;</code>
     */
    const INITIALIZING = 1;
    /**
     * Request is actively being processed.
     *
     * Generated from protobuf enum <code>PROCESSING = 2;</code>
     */
    const PROCESSING = 2;
    /**
     * Request is in the process of being cancelled after user called
     * google.longrunning.Operations.CancelOperation on the operation.
     *
     * Generated from protobuf enum <code>CANCELLING = 3;</code>
     */
    const CANCELLING = 3;
    /**
     * Request has been processed and is in its finalization stage.
     *
     * Generated from protobuf enum <code>FINALIZING = 4;</code>
     */
    const FINALIZING = 4;
    /**
     * Request has completed successfully.
     *
     * Generated from protobuf enum <code>SUCCESSFUL = 5;</code>
     */
    const SUCCESSFUL = 5;
    /**
     * Request has finished being processed, but encountered an error.
     *
     * Generated from protobuf enum <code>FAILED = 6;</code>
     */
    const FAILED = 6;
    /**
     * Request has finished being cancelled after user called
     * google.longrunning.Operations.CancelOperation.
     *
     * Generated from protobuf enum <code>CANCELLED = 7;</code>
     */
    const CANCELLED = 7;

    private static $valueToName = [
        self::OPERATION_STATE_UNSPECIFIED => 'OPERATION_STATE_UNSPECIFIED',
        self::INITIALIZING => 'INITIALIZING',
        self::PROCESSING => 'PROCESSING',
        self::CANCELLING => 'CANCELLING',
        self::FINALIZING => 'FINALIZING',
        self::SUCCESSFUL => 'SUCCESSFUL',
        self::FAILED => 'FAILED',
        self::CANCELLED => 'CANCELLED',
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

