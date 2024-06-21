<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Report data for each row.
 * For example if RunReportRequest contains:
 * ```none
 * "dimensions": [
 *   {
 *     "name": "eventName"
 *   },
 *   {
 *     "name": "countryId"
 *   }
 * ],
 * "metrics": [
 *   {
 *     "name": "eventCount"
 *   }
 * ]
 * ```
 * One row with 'in_app_purchase' as the eventName, 'JP' as the countryId, and
 * 15 as the eventCount, would be:
 * ```none
 * "dimensionValues": [
 *   {
 *     "value": "in_app_purchase"
 *   },
 *   {
 *     "value": "JP"
 *   }
 * ],
 * "metricValues": [
 *   {
 *     "value": "15"
 *   }
 * ]
 * ```
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.Row</code>
 */
class Row extends \Google\Protobuf\Internal\Message
{
    /**
     * List of requested dimension values. In a PivotReport, dimension_values
     * are only listed for dimensions included in a pivot.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DimensionValue dimension_values = 1;</code>
     */
    private $dimension_values;
    /**
     * List of requested visible metric values.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricValue metric_values = 2;</code>
     */
    private $metric_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1alpha\DimensionValue[]|\Google\Protobuf\Internal\RepeatedField $dimension_values
     *           List of requested dimension values. In a PivotReport, dimension_values
     *           are only listed for dimensions included in a pivot.
     *     @type \Google\Analytics\Data\V1alpha\MetricValue[]|\Google\Protobuf\Internal\RepeatedField $metric_values
     *           List of requested visible metric values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * List of requested dimension values. In a PivotReport, dimension_values
     * are only listed for dimensions included in a pivot.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DimensionValue dimension_values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensionValues()
    {
        return $this->dimension_values;
    }

    /**
     * List of requested dimension values. In a PivotReport, dimension_values
     * are only listed for dimensions included in a pivot.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DimensionValue dimension_values = 1;</code>
     * @param \Google\Analytics\Data\V1alpha\DimensionValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensionValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\DimensionValue::class);
        $this->dimension_values = $arr;

        return $this;
    }

    /**
     * List of requested visible metric values.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricValue metric_values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricValues()
    {
        return $this->metric_values;
    }

    /**
     * List of requested visible metric values.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricValue metric_values = 2;</code>
     * @param \Google\Analytics\Data\V1alpha\MetricValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\MetricValue::class);
        $this->metric_values = $arr;

        return $this;
    }

}

