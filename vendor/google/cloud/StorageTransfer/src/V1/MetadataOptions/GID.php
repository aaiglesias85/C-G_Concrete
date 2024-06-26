<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1\MetadataOptions;

use UnexpectedValueException;

/**
 * Options for handling file GID attribute.
 *
 * Protobuf type <code>google.storagetransfer.v1.MetadataOptions.GID</code>
 */
class GID
{
    /**
     * GID behavior is unspecified.
     *
     * Generated from protobuf enum <code>GID_UNSPECIFIED = 0;</code>
     */
    const GID_UNSPECIFIED = 0;
    /**
     * Do not preserve GID during a transfer job.
     *
     * Generated from protobuf enum <code>GID_SKIP = 1;</code>
     */
    const GID_SKIP = 1;
    /**
     * Preserve GID during a transfer job.
     *
     * Generated from protobuf enum <code>GID_NUMBER = 2;</code>
     */
    const GID_NUMBER = 2;

    private static $valueToName = [
        self::GID_UNSPECIFIED => 'GID_UNSPECIFIED',
        self::GID_SKIP => 'GID_SKIP',
        self::GID_NUMBER => 'GID_NUMBER',
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


