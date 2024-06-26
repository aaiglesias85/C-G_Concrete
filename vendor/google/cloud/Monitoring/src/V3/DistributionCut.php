<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A `DistributionCut` defines a `TimeSeries` and thresholds used for measuring
 * good service and total service. The `TimeSeries` must have `ValueType =
 * DISTRIBUTION` and `MetricKind = DELTA` or `MetricKind = CUMULATIVE`. The
 * computed `good_service` will be the estimated count of values in the
 * `Distribution` that fall within the specified `min` and `max`.
 *
 * Generated from protobuf message <code>google.monitoring.v3.DistributionCut</code>
 */
class DistributionCut extends \Google\Protobuf\Internal\Message
{
    /**
     * A [monitoring filter](https://cloud.google.com/monitoring/api/v3/filters)
     * specifying a `TimeSeries` aggregating values. Must have `ValueType =
     * DISTRIBUTION` and `MetricKind = DELTA` or `MetricKind = CUMULATIVE`.
     *
     * Generated from protobuf field <code>string distribution_filter = 4;</code>
     */
    private $distribution_filter = '';
    /**
     * Range of values considered "good." For a one-sided range, set one bound to
     * an infinite value.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Range range = 5;</code>
     */
    private $range = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $distribution_filter
     *           A [monitoring filter](https://cloud.google.com/monitoring/api/v3/filters)
     *           specifying a `TimeSeries` aggregating values. Must have `ValueType =
     *           DISTRIBUTION` and `MetricKind = DELTA` or `MetricKind = CUMULATIVE`.
     *     @type \Google\Cloud\Monitoring\V3\Range $range
     *           Range of values considered "good." For a one-sided range, set one bound to
     *           an infinite value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * A [monitoring filter](https://cloud.google.com/monitoring/api/v3/filters)
     * specifying a `TimeSeries` aggregating values. Must have `ValueType =
     * DISTRIBUTION` and `MetricKind = DELTA` or `MetricKind = CUMULATIVE`.
     *
     * Generated from protobuf field <code>string distribution_filter = 4;</code>
     * @return string
     */
    public function getDistributionFilter()
    {
        return $this->distribution_filter;
    }

    /**
     * A [monitoring filter](https://cloud.google.com/monitoring/api/v3/filters)
     * specifying a `TimeSeries` aggregating values. Must have `ValueType =
     * DISTRIBUTION` and `MetricKind = DELTA` or `MetricKind = CUMULATIVE`.
     *
     * Generated from protobuf field <code>string distribution_filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDistributionFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->distribution_filter = $var;

        return $this;
    }

    /**
     * Range of values considered "good." For a one-sided range, set one bound to
     * an infinite value.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Range range = 5;</code>
     * @return \Google\Cloud\Monitoring\V3\Range|null
     */
    public function getRange()
    {
        return $this->range;
    }

    public function hasRange()
    {
        return isset($this->range);
    }

    public function clearRange()
    {
        unset($this->range);
    }

    /**
     * Range of values considered "good." For a one-sided range, set one bound to
     * an infinite value.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Range range = 5;</code>
     * @param \Google\Cloud\Monitoring\V3\Range $var
     * @return $this
     */
    public function setRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\Range::class);
        $this->range = $var;

        return $this;
    }

}

