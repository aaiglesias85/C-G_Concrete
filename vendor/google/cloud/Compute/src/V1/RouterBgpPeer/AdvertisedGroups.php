<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\RouterBgpPeer;

use UnexpectedValueException;

/**
 *
 * Protobuf type <code>google.cloud.compute.v1.RouterBgpPeer.AdvertisedGroups</code>
 */
class AdvertisedGroups
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ADVERTISED_GROUPS = 0;</code>
     */
    const UNDEFINED_ADVERTISED_GROUPS = 0;
    /**
     * Advertise all available subnets (including peer VPC subnets).
     *
     * Generated from protobuf enum <code>ALL_SUBNETS = 3622872;</code>
     */
    const ALL_SUBNETS = 3622872;

    private static $valueToName = [
        self::UNDEFINED_ADVERTISED_GROUPS => 'UNDEFINED_ADVERTISED_GROUPS',
        self::ALL_SUBNETS => 'ALL_SUBNETS',
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


