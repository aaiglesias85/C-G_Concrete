<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A descriptor for the labels and points in a time series.
 *
 * Generated from protobuf message <code>google.monitoring.v3.TimeSeriesDescriptor</code>
 */
class TimeSeriesDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * Descriptors for the labels.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor label_descriptors = 1;</code>
     */
    private $label_descriptors;
    /**
     * Descriptors for the point data value columns.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.TimeSeriesDescriptor.ValueDescriptor point_descriptors = 5;</code>
     */
    private $point_descriptors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\LabelDescriptor[]|\Google\Protobuf\Internal\RepeatedField $label_descriptors
     *           Descriptors for the labels.
     *     @type \Google\Cloud\Monitoring\V3\TimeSeriesDescriptor\ValueDescriptor[]|\Google\Protobuf\Internal\RepeatedField $point_descriptors
     *           Descriptors for the point data value columns.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Metric::initOnce();
        parent::__construct($data);
    }

    /**
     * Descriptors for the labels.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor label_descriptors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabelDescriptors()
    {
        return $this->label_descriptors;
    }

    /**
     * Descriptors for the labels.
     *
     * Generated from protobuf field <code>repeated .google.api.LabelDescriptor label_descriptors = 1;</code>
     * @param \Google\Api\LabelDescriptor[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabelDescriptors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\LabelDescriptor::class);
        $this->label_descriptors = $arr;

        return $this;
    }

    /**
     * Descriptors for the point data value columns.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.TimeSeriesDescriptor.ValueDescriptor point_descriptors = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPointDescriptors()
    {
        return $this->point_descriptors;
    }

    /**
     * Descriptors for the point data value columns.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.TimeSeriesDescriptor.ValueDescriptor point_descriptors = 5;</code>
     * @param \Google\Cloud\Monitoring\V3\TimeSeriesDescriptor\ValueDescriptor[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPointDescriptors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\TimeSeriesDescriptor\ValueDescriptor::class);
        $this->point_descriptors = $arr;

        return $this;
    }

}

