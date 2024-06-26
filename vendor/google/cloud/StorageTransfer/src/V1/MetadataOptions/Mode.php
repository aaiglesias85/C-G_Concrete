<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1\MetadataOptions;

use UnexpectedValueException;

/**
 * Options for handling file mode attribute.
 *
 * Protobuf type <code>google.storagetransfer.v1.MetadataOptions.Mode</code>
 */
class Mode
{
    /**
     * Mode behavior is unspecified.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * Do not preserve mode during a transfer job.
     *
     * Generated from protobuf enum <code>MODE_SKIP = 1;</code>
     */
    const MODE_SKIP = 1;
    /**
     * Preserve mode during a transfer job.
     *
     * Generated from protobuf enum <code>MODE_PRESERVE = 2;</code>
     */
    const MODE_PRESERVE = 2;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::MODE_SKIP => 'MODE_SKIP',
        self::MODE_PRESERVE => 'MODE_PRESERVE',
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


