<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkPerformanceConfig;

use UnexpectedValueException;

/**
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkPerformanceConfig.TotalEgressBandwidthTier</code>
 */
class TotalEgressBandwidthTier
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_TOTAL_EGRESS_BANDWIDTH_TIER = 0;</code>
     */
    const UNDEFINED_TOTAL_EGRESS_BANDWIDTH_TIER = 0;
    /**
     * Generated from protobuf enum <code>DEFAULT = 115302945;</code>
     */
    const PBDEFAULT = 115302945;
    /**
     * Generated from protobuf enum <code>TIER_1 = 326919444;</code>
     */
    const TIER_1 = 326919444;

    private static $valueToName = [
        self::UNDEFINED_TOTAL_EGRESS_BANDWIDTH_TIER => 'UNDEFINED_TOTAL_EGRESS_BANDWIDTH_TIER',
        self::PBDEFAULT => 'PBDEFAULT',
        self::TIER_1 => 'TIER_1',
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


