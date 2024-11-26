<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InstanceGroupManagerUpdatePolicy;

use UnexpectedValueException;

/**
 * The instance redistribution policy for regional managed instance groups. Valid values are: - PROACTIVE (default): The group attempts to maintain an even distribution of VM instances across zones in the region. - NONE: For non-autoscaled groups, proactive redistribution is disabled.
 * Additional supported values which may be not listed in the enum directly due to technical reasons:
 * NONE
 * PROACTIVE
 *
 * Protobuf type <code>google.cloud.compute.v1.InstanceGroupManagerUpdatePolicy.InstanceRedistributionType</code>
 */
class InstanceRedistributionType
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_INSTANCE_REDISTRIBUTION_TYPE = 0;</code>
     */
    const UNDEFINED_INSTANCE_REDISTRIBUTION_TYPE = 0;

    private static $valueToName = [
        self::UNDEFINED_INSTANCE_REDISTRIBUTION_TYPE => 'UNDEFINED_INSTANCE_REDISTRIBUTION_TYPE',
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


