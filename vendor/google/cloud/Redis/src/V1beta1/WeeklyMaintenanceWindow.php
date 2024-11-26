<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1beta1/cloud_redis.proto

namespace Google\Cloud\Redis\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Time window in which disruptive maintenance updates occur. Non-disruptive
 * updates can occur inside or outside this window.
 *
 * Generated from protobuf message <code>google.cloud.redis.v1beta1.WeeklyMaintenanceWindow</code>
 */
class WeeklyMaintenanceWindow extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The day of week that maintenance updates occur.
     *
     * Generated from protobuf field <code>.google.type.DayOfWeek day = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $day = 0;
    /**
     * Required. Start time of the window in UTC time.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $start_time = null;
    /**
     * Output only. Duration of the maintenance window. The current window is fixed at 1 hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $day
     *           Required. The day of week that maintenance updates occur.
     *     @type \Google\Type\TimeOfDay $start_time
     *           Required. Start time of the window in UTC time.
     *     @type \Google\Protobuf\Duration $duration
     *           Output only. Duration of the maintenance window. The current window is fixed at 1 hour.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\V1Beta1\CloudRedis::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The day of week that maintenance updates occur.
     *
     * Generated from protobuf field <code>.google.type.DayOfWeek day = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Required. The day of week that maintenance updates occur.
     *
     * Generated from protobuf field <code>.google.type.DayOfWeek day = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setDay($var)
    {
        GPBUtil::checkEnum($var, \Google\Type\DayOfWeek::class);
        $this->day = $var;

        return $this;
    }

    /**
     * Required. Start time of the window in UTC time.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Type\TimeOfDay|null
     */
    public function getStartTime()
    {
        return $this->start_time;
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
     * Required. Start time of the window in UTC time.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Type\TimeOfDay $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\TimeOfDay::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Duration of the maintenance window. The current window is fixed at 1 hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
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
     * Output only. Duration of the maintenance window. The current window is fixed at 1 hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

}

