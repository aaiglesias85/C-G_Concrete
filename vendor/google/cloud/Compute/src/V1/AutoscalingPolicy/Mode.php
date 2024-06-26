<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\AutoscalingPolicy;

use UnexpectedValueException;

/**
 * Defines operating mode for this policy.
 *
 * Protobuf type <code>google.cloud.compute.v1.AutoscalingPolicy.Mode</code>
 */
class Mode
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_MODE = 0;</code>
     */
    const UNDEFINED_MODE = 0;
    /**
     * Do not automatically scale the MIG in or out. The recommended_size field contains the size of MIG that would be set if the actuation mode was enabled.
     *
     * Generated from protobuf enum <code>OFF = 78159;</code>
     */
    const OFF = 78159;
    /**
     * Automatically scale the MIG in and out according to the policy.
     *
     * Generated from protobuf enum <code>ON = 2527;</code>
     */
    const ON = 2527;
    /**
     * Automatically create VMs according to the policy, but do not scale the MIG in.
     *
     * Generated from protobuf enum <code>ONLY_SCALE_OUT = 152713670;</code>
     */
    const ONLY_SCALE_OUT = 152713670;
    /**
     * Automatically create VMs according to the policy, but do not scale the MIG in.
     *
     * Generated from protobuf enum <code>ONLY_UP = 478095374;</code>
     */
    const ONLY_UP = 478095374;

    private static $valueToName = [
        self::UNDEFINED_MODE => 'UNDEFINED_MODE',
        self::OFF => 'OFF',
        self::ON => 'ON',
        self::ONLY_SCALE_OUT => 'ONLY_SCALE_OUT',
        self::ONLY_UP => 'ONLY_UP',
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


