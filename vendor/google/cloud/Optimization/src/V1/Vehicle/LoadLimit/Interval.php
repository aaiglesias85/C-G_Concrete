<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\Vehicle\LoadLimit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Interval of acceptable load amounts.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.Vehicle.LoadLimit.Interval</code>
 */
class Interval extends \Google\Protobuf\Internal\Message
{
    /**
     * A minimum acceptable load. Must be ≥ 0.
     * If they're both specified, [min][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.min] must be ≤ [max][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.max].
     *
     * Generated from protobuf field <code>int64 min = 1;</code>
     */
    private $min = 0;
    /**
     * A maximum acceptable load. Must be ≥ 0. If unspecified, the maximum
     * load is unrestricted by this message.
     * If they're both specified, [min][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.min] must be ≤ [max][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.max].
     *
     * Generated from protobuf field <code>optional int64 max = 2;</code>
     */
    private $max = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $min
     *           A minimum acceptable load. Must be ≥ 0.
     *           If they're both specified, [min][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.min] must be ≤ [max][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.max].
     *     @type int|string $max
     *           A maximum acceptable load. Must be ≥ 0. If unspecified, the maximum
     *           load is unrestricted by this message.
     *           If they're both specified, [min][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.min] must be ≤ [max][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.max].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * A minimum acceptable load. Must be ≥ 0.
     * If they're both specified, [min][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.min] must be ≤ [max][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.max].
     *
     * Generated from protobuf field <code>int64 min = 1;</code>
     * @return int|string
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * A minimum acceptable load. Must be ≥ 0.
     * If they're both specified, [min][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.min] must be ≤ [max][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.max].
     *
     * Generated from protobuf field <code>int64 min = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkInt64($var);
        $this->min = $var;

        return $this;
    }

    /**
     * A maximum acceptable load. Must be ≥ 0. If unspecified, the maximum
     * load is unrestricted by this message.
     * If they're both specified, [min][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.min] must be ≤ [max][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.max].
     *
     * Generated from protobuf field <code>optional int64 max = 2;</code>
     * @return int|string
     */
    public function getMax()
    {
        return isset($this->max) ? $this->max : 0;
    }

    public function hasMax()
    {
        return isset($this->max);
    }

    public function clearMax()
    {
        unset($this->max);
    }

    /**
     * A maximum acceptable load. Must be ≥ 0. If unspecified, the maximum
     * load is unrestricted by this message.
     * If they're both specified, [min][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.min] must be ≤ [max][google.cloud.optimization.v1.Vehicle.LoadLimit.Interval.max].
     *
     * Generated from protobuf field <code>optional int64 max = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkInt64($var);
        $this->max = $var;

        return $this;
    }

}


