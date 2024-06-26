<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\AccessConfig;

use UnexpectedValueException;

/**
 * The type of configuration. The default and only option is ONE_TO_ONE_NAT.
 *
 * Protobuf type <code>google.cloud.compute.v1.AccessConfig.Type</code>
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
     * Generated from protobuf enum <code>DIRECT_IPV6 = 4397213;</code>
     */
    const DIRECT_IPV6 = 4397213;
    /**
     * Generated from protobuf enum <code>ONE_TO_ONE_NAT = 84090205;</code>
     */
    const ONE_TO_ONE_NAT = 84090205;

    private static $valueToName = [
        self::UNDEFINED_TYPE => 'UNDEFINED_TYPE',
        self::DIRECT_IPV6 => 'DIRECT_IPV6',
        self::ONE_TO_ONE_NAT => 'ONE_TO_ONE_NAT',
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


