<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Time window specified for daily operations.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourcePolicyDailyCycle</code>
 */
class ResourcePolicyDailyCycle extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines a schedule with units measured in days. The value determines how many days pass between the start of each cycle.
     *
     * Generated from protobuf field <code>optional int32 days_in_cycle = 369790004;</code>
     */
    private $days_in_cycle = null;
    /**
     * [Output only] A predetermined duration for the window, automatically chosen to be the smallest possible in the given scenario.
     *
     * Generated from protobuf field <code>optional string duration = 155471252;</code>
     */
    private $duration = null;
    /**
     * Start time of the window. This must be in UTC format that resolves to one of 00:00, 04:00, 08:00, 12:00, 16:00, or 20:00. For example, both 13:00-5 and 08:00 are valid.
     *
     * Generated from protobuf field <code>optional string start_time = 37467274;</code>
     */
    private $start_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $days_in_cycle
     *           Defines a schedule with units measured in days. The value determines how many days pass between the start of each cycle.
     *     @type string $duration
     *           [Output only] A predetermined duration for the window, automatically chosen to be the smallest possible in the given scenario.
     *     @type string $start_time
     *           Start time of the window. This must be in UTC format that resolves to one of 00:00, 04:00, 08:00, 12:00, 16:00, or 20:00. For example, both 13:00-5 and 08:00 are valid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines a schedule with units measured in days. The value determines how many days pass between the start of each cycle.
     *
     * Generated from protobuf field <code>optional int32 days_in_cycle = 369790004;</code>
     * @return int
     */
    public function getDaysInCycle()
    {
        return isset($this->days_in_cycle) ? $this->days_in_cycle : 0;
    }

    public function hasDaysInCycle()
    {
        return isset($this->days_in_cycle);
    }

    public function clearDaysInCycle()
    {
        unset($this->days_in_cycle);
    }

    /**
     * Defines a schedule with units measured in days. The value determines how many days pass between the start of each cycle.
     *
     * Generated from protobuf field <code>optional int32 days_in_cycle = 369790004;</code>
     * @param int $var
     * @return $this
     */
    public function setDaysInCycle($var)
    {
        GPBUtil::checkInt32($var);
        $this->days_in_cycle = $var;

        return $this;
    }

    /**
     * [Output only] A predetermined duration for the window, automatically chosen to be the smallest possible in the given scenario.
     *
     * Generated from protobuf field <code>optional string duration = 155471252;</code>
     * @return string
     */
    public function getDuration()
    {
        return isset($this->duration) ? $this->duration : '';
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * [Output only] A predetermined duration for the window, automatically chosen to be the smallest possible in the given scenario.
     *
     * Generated from protobuf field <code>optional string duration = 155471252;</code>
     * @param string $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkString($var, True);
        $this->duration = $var;

        return $this;
    }

    /**
     * Start time of the window. This must be in UTC format that resolves to one of 00:00, 04:00, 08:00, 12:00, 16:00, or 20:00. For example, both 13:00-5 and 08:00 are valid.
     *
     * Generated from protobuf field <code>optional string start_time = 37467274;</code>
     * @return string
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : '';
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Start time of the window. This must be in UTC format that resolves to one of 00:00, 04:00, 08:00, 12:00, 16:00, or 20:00. For example, both 13:00-5 and 08:00 are valid.
     *
     * Generated from protobuf field <code>optional string start_time = 37467274;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_time = $var;

        return $this;
    }

}

