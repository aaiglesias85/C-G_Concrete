<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/common.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The schedule of a recurring or one time event. The event's time span is
 * specified by start_time and end_time. If the scheduled event's timespan is
 * larger than the cron_spec + cron_job_duration, the event will be recurring.
 * If only cron_spec + cron_job_duration are specified, the event is effective
 * starting at the local time specified by cron_spec, and is recurring.
 * ```
 * start_time|-------[cron job]-------[cron job]-------[cron job]---|end_time
 * cron job: cron spec start time + duration
 * ```
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.Schedule</code>
 */
class Schedule extends \Google\Protobuf\Internal\Message
{
    /**
     * The start time of the event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    private $start_time = null;
    /**
     * The end time of the event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * The duration for the cron job event. The duration of the event is effective
     * after the cron job's start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cron_job_duration = 3;</code>
     */
    private $cron_job_duration = null;
    /**
     * The cron definition of the scheduled event. See
     * https://en.wikipedia.org/wiki/Cron. Cron spec specifies the local time as
     * defined by the realm.
     *
     * Generated from protobuf field <code>string cron_spec = 4;</code>
     */
    private $cron_spec = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The start time of the event.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The end time of the event.
     *     @type \Google\Protobuf\Duration $cron_job_duration
     *           The duration for the cron job event. The duration of the event is effective
     *           after the cron job's start time.
     *     @type string $cron_spec
     *           The cron definition of the scheduled event. See
     *           https://en.wikipedia.org/wiki/Cron. Cron spec specifies the local time as
     *           defined by the realm.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The start time of the event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
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
     * The start time of the event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The end time of the event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The end time of the event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * The duration for the cron job event. The duration of the event is effective
     * after the cron job's start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cron_job_duration = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getCronJobDuration()
    {
        return $this->cron_job_duration;
    }

    public function hasCronJobDuration()
    {
        return isset($this->cron_job_duration);
    }

    public function clearCronJobDuration()
    {
        unset($this->cron_job_duration);
    }

    /**
     * The duration for the cron job event. The duration of the event is effective
     * after the cron job's start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cron_job_duration = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setCronJobDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->cron_job_duration = $var;

        return $this;
    }

    /**
     * The cron definition of the scheduled event. See
     * https://en.wikipedia.org/wiki/Cron. Cron spec specifies the local time as
     * defined by the realm.
     *
     * Generated from protobuf field <code>string cron_spec = 4;</code>
     * @return string
     */
    public function getCronSpec()
    {
        return $this->cron_spec;
    }

    /**
     * The cron definition of the scheduled event. See
     * https://en.wikipedia.org/wiki/Cron. Cron spec specifies the local time as
     * defined by the realm.
     *
     * Generated from protobuf field <code>string cron_spec = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCronSpec($var)
    {
        GPBUtil::checkString($var, True);
        $this->cron_spec = $var;

        return $this;
    }

}

