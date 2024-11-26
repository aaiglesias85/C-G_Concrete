<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1\ListTransferRunsRequest;

use UnexpectedValueException;

/**
 * Represents which runs should be pulled.
 *
 * Protobuf type <code>google.cloud.bigquery.datatransfer.v1.ListTransferRunsRequest.RunAttempt</code>
 */
class RunAttempt
{
    /**
     * All runs should be returned.
     *
     * Generated from protobuf enum <code>RUN_ATTEMPT_UNSPECIFIED = 0;</code>
     */
    const RUN_ATTEMPT_UNSPECIFIED = 0;
    /**
     * Only latest run per day should be returned.
     *
     * Generated from protobuf enum <code>LATEST = 1;</code>
     */
    const LATEST = 1;

    private static $valueToName = [
        self::RUN_ATTEMPT_UNSPECIFIED => 'RUN_ATTEMPT_UNSPECIFIED',
        self::LATEST => 'LATEST',
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
class_alias(RunAttempt::class, \Google\Cloud\BigQuery\DataTransfer\V1\ListTransferRunsRequest_RunAttempt::class);

