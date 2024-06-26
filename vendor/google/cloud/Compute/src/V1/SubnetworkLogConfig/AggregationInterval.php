<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SubnetworkLogConfig;

use UnexpectedValueException;

/**
 * Can only be specified if VPC flow logging for this subnetwork is enabled. Toggles the aggregation interval for collecting flow logs. Increasing the interval time will reduce the amount of generated flow logs for long lasting connections. Default is an interval of 5 seconds per connection.
 *
 * Protobuf type <code>google.cloud.compute.v1.SubnetworkLogConfig.AggregationInterval</code>
 */
class AggregationInterval
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_AGGREGATION_INTERVAL = 0;</code>
     */
    const UNDEFINED_AGGREGATION_INTERVAL = 0;
    /**
     * Generated from protobuf enum <code>INTERVAL_10_MIN = 487155916;</code>
     */
    const INTERVAL_10_MIN = 487155916;
    /**
     * Generated from protobuf enum <code>INTERVAL_15_MIN = 491773521;</code>
     */
    const INTERVAL_15_MIN = 491773521;
    /**
     * Generated from protobuf enum <code>INTERVAL_1_MIN = 69052714;</code>
     */
    const INTERVAL_1_MIN = 69052714;
    /**
     * Generated from protobuf enum <code>INTERVAL_30_SEC = 7548937;</code>
     */
    const INTERVAL_30_SEC = 7548937;
    /**
     * Generated from protobuf enum <code>INTERVAL_5_MIN = 72746798;</code>
     */
    const INTERVAL_5_MIN = 72746798;
    /**
     * Generated from protobuf enum <code>INTERVAL_5_SEC = 72752429;</code>
     */
    const INTERVAL_5_SEC = 72752429;

    private static $valueToName = [
        self::UNDEFINED_AGGREGATION_INTERVAL => 'UNDEFINED_AGGREGATION_INTERVAL',
        self::INTERVAL_10_MIN => 'INTERVAL_10_MIN',
        self::INTERVAL_15_MIN => 'INTERVAL_15_MIN',
        self::INTERVAL_1_MIN => 'INTERVAL_1_MIN',
        self::INTERVAL_30_SEC => 'INTERVAL_30_SEC',
        self::INTERVAL_5_MIN => 'INTERVAL_5_MIN',
        self::INTERVAL_5_SEC => 'INTERVAL_5_SEC',
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


