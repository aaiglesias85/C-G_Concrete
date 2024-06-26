<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\ExchangedPeeringRoute;

use UnexpectedValueException;

/**
 * The type of the peering route.
 *
 * Protobuf type <code>google.cloud.compute.v1.ExchangedPeeringRoute.Type</code>
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
     * For routes exported from local network.
     *
     * Generated from protobuf enum <code>DYNAMIC_PEERING_ROUTE = 469794858;</code>
     */
    const DYNAMIC_PEERING_ROUTE = 469794858;
    /**
     * The peering route.
     *
     * Generated from protobuf enum <code>STATIC_PEERING_ROUTE = 473407545;</code>
     */
    const STATIC_PEERING_ROUTE = 473407545;
    /**
     * The peering route corresponding to subnetwork range.
     *
     * Generated from protobuf enum <code>SUBNET_PEERING_ROUTE = 465782504;</code>
     */
    const SUBNET_PEERING_ROUTE = 465782504;

    private static $valueToName = [
        self::UNDEFINED_TYPE => 'UNDEFINED_TYPE',
        self::DYNAMIC_PEERING_ROUTE => 'DYNAMIC_PEERING_ROUTE',
        self::STATIC_PEERING_ROUTE => 'STATIC_PEERING_ROUTE',
        self::SUBNET_PEERING_ROUTE => 'SUBNET_PEERING_ROUTE',
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


