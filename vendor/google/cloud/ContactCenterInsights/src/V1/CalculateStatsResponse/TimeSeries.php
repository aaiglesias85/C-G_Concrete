<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1\CalculateStatsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A time series representing conversations over time.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.CalculateStatsResponse.TimeSeries</code>
 */
class TimeSeries extends \Google\Protobuf\Internal\Message
{
    /**
     * The duration of each interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration interval_duration = 1;</code>
     */
    private $interval_duration = null;
    /**
     * An ordered list of intervals from earliest to latest, where each interval
     * represents the number of conversations that transpired during the time
     * window.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.CalculateStatsResponse.TimeSeries.Interval points = 2;</code>
     */
    private $points;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $interval_duration
     *           The duration of each interval.
     *     @type \Google\Cloud\ContactCenterInsights\V1\CalculateStatsResponse\TimeSeries\Interval[]|\Google\Protobuf\Internal\RepeatedField $points
     *           An ordered list of intervals from earliest to latest, where each interval
     *           represents the number of conversations that transpired during the time
     *           window.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * The duration of each interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration interval_duration = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getIntervalDuration()
    {
        return $this->interval_duration;
    }

    public function hasIntervalDuration()
    {
        return isset($this->interval_duration);
    }

    public function clearIntervalDuration()
    {
        unset($this->interval_duration);
    }

    /**
     * The duration of each interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration interval_duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setIntervalDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->interval_duration = $var;

        return $this;
    }

    /**
     * An ordered list of intervals from earliest to latest, where each interval
     * represents the number of conversations that transpired during the time
     * window.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.CalculateStatsResponse.TimeSeries.Interval points = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * An ordered list of intervals from earliest to latest, where each interval
     * represents the number of conversations that transpired during the time
     * window.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.CalculateStatsResponse.TimeSeries.Interval points = 2;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\CalculateStatsResponse\TimeSeries\Interval[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ContactCenterInsights\V1\CalculateStatsResponse\TimeSeries\Interval::class);
        $this->points = $arr;

        return $this;
    }

}


