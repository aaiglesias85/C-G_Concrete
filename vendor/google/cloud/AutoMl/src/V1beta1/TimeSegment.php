<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/temporal.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A time period inside of an example that has a time dimension (e.g. video).
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.TimeSegment</code>
 */
class TimeSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * Start of the time segment (inclusive), represented as the duration since
     * the example start.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 1;</code>
     */
    private $start_time_offset = null;
    /**
     * End of the time segment (exclusive), represented as the duration since the
     * example start.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 2;</code>
     */
    private $end_time_offset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $start_time_offset
     *           Start of the time segment (inclusive), represented as the duration since
     *           the example start.
     *     @type \Google\Protobuf\Duration $end_time_offset
     *           End of the time segment (exclusive), represented as the duration since the
     *           example start.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Temporal::initOnce();
        parent::__construct($data);
    }

    /**
     * Start of the time segment (inclusive), represented as the duration since
     * the example start.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStartTimeOffset()
    {
        return $this->start_time_offset;
    }

    public function hasStartTimeOffset()
    {
        return isset($this->start_time_offset);
    }

    public function clearStartTimeOffset()
    {
        unset($this->start_time_offset);
    }

    /**
     * Start of the time segment (inclusive), represented as the duration since
     * the example start.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_time_offset = $var;

        return $this;
    }

    /**
     * End of the time segment (exclusive), represented as the duration since the
     * example start.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getEndTimeOffset()
    {
        return $this->end_time_offset;
    }

    public function hasEndTimeOffset()
    {
        return isset($this->end_time_offset);
    }

    public function clearEndTimeOffset()
    {
        unset($this->end_time_offset);
    }

    /**
     * End of the time segment (exclusive), represented as the duration since the
     * example start.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time_offset = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEndTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->end_time_offset = $var;

        return $this;
    }

}

