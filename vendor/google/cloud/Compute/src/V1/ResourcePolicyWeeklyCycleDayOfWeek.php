<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourcePolicyWeeklyCycleDayOfWeek</code>
 */
class ResourcePolicyWeeklyCycleDayOfWeek extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines a schedule that runs on specific days of the week. Specify one or more days. The following options are available: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY.
     * Check the Day enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string day = 99228;</code>
     */
    private $day = null;
    /**
     * [Output only] Duration of the time window, automatically chosen to be smallest possible in the given scenario.
     *
     * Generated from protobuf field <code>optional string duration = 155471252;</code>
     */
    private $duration = null;
    /**
     * Time within the window to start the operations. It must be in format "HH:MM", where HH : [00-23] and MM : [00-00] GMT.
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
     *     @type string $day
     *           Defines a schedule that runs on specific days of the week. Specify one or more days. The following options are available: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY.
     *           Check the Day enum for the list of possible values.
     *     @type string $duration
     *           [Output only] Duration of the time window, automatically chosen to be smallest possible in the given scenario.
     *     @type string $start_time
     *           Time within the window to start the operations. It must be in format "HH:MM", where HH : [00-23] and MM : [00-00] GMT.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines a schedule that runs on specific days of the week. Specify one or more days. The following options are available: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY.
     * Check the Day enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string day = 99228;</code>
     * @return string
     */
    public function getDay()
    {
        return isset($this->day) ? $this->day : '';
    }

    public function hasDay()
    {
        return isset($this->day);
    }

    public function clearDay()
    {
        unset($this->day);
    }

    /**
     * Defines a schedule that runs on specific days of the week. Specify one or more days. The following options are available: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY.
     * Check the Day enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string day = 99228;</code>
     * @param string $var
     * @return $this
     */
    public function setDay($var)
    {
        GPBUtil::checkString($var, True);
        $this->day = $var;

        return $this;
    }

    /**
     * [Output only] Duration of the time window, automatically chosen to be smallest possible in the given scenario.
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
     * [Output only] Duration of the time window, automatically chosen to be smallest possible in the given scenario.
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
     * Time within the window to start the operations. It must be in format "HH:MM", where HH : [00-23] and MM : [00-00] GMT.
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
     * Time within the window to start the operations. It must be in format "HH:MM", where HH : [00-23] and MM : [00-00] GMT.
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

