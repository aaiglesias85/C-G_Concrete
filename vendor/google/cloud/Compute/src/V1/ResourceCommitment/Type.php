<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\ResourceCommitment;

use UnexpectedValueException;

/**
 * Type of resource for which this commitment applies. Possible values are VCPU and MEMORY
 *
 * Protobuf type <code>google.cloud.compute.v1.ResourceCommitment.Type</code>
 */
class Type
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_TYPE = 0;</code>
     */
    const UNDEFINED_TYPE = 0;
    /**
     * Generated from protobuf enum <code>ACCELERATOR = 429815371;</code>
     */
    const ACCELERATOR = 429815371;
    /**
     * Generated from protobuf enum <code>LOCAL_SSD = 508934896;</code>
     */
    const LOCAL_SSD = 508934896;
    /**
     * Generated from protobuf enum <code>MEMORY = 123056385;</code>
     */
    const MEMORY = 123056385;
    /**
     * Generated from protobuf enum <code>UNSPECIFIED = 526786327;</code>
     */
    const UNSPECIFIED = 526786327;
    /**
     * Generated from protobuf enum <code>VCPU = 2628978;</code>
     */
    const VCPU = 2628978;

    private static $valueToName = [
        self::UNDEFINED_TYPE => 'UNDEFINED_TYPE',
        self::ACCELERATOR => 'ACCELERATOR',
        self::LOCAL_SSD => 'LOCAL_SSD',
        self::MEMORY => 'MEMORY',
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::VCPU => 'VCPU',
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


