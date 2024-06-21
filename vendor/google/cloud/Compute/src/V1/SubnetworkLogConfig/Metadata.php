<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SubnetworkLogConfig;

use UnexpectedValueException;

/**
 * Can only be specified if VPC flow logs for this subnetwork is enabled. Configures whether all, none or a subset of metadata fields should be added to the reported VPC flow logs. Default is EXCLUDE_ALL_METADATA.
 *
 * Protobuf type <code>google.cloud.compute.v1.SubnetworkLogConfig.Metadata</code>
 */
class Metadata
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_METADATA = 0;</code>
     */
    const UNDEFINED_METADATA = 0;
    /**
     * Generated from protobuf enum <code>CUSTOM_METADATA = 62450749;</code>
     */
    const CUSTOM_METADATA = 62450749;
    /**
     * Generated from protobuf enum <code>EXCLUDE_ALL_METADATA = 334519954;</code>
     */
    const EXCLUDE_ALL_METADATA = 334519954;
    /**
     * Generated from protobuf enum <code>INCLUDE_ALL_METADATA = 164619908;</code>
     */
    const INCLUDE_ALL_METADATA = 164619908;

    private static $valueToName = [
        self::UNDEFINED_METADATA => 'UNDEFINED_METADATA',
        self::CUSTOM_METADATA => 'CUSTOM_METADATA',
        self::EXCLUDE_ALL_METADATA => 'EXCLUDE_ALL_METADATA',
        self::INCLUDE_ALL_METADATA => 'INCLUDE_ALL_METADATA',
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


