<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response pivot report table corresponding to a pivot request.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.RunPivotReportResponse</code>
 */
class RunPivotReportResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Summarizes the columns and rows created by a pivot. Each pivot in the
     * request produces one header in the response. If we have a request like
     * this:
     *     "pivots": [{
     *       "fieldNames": ["country",
     *         "city"]
     *     },
     *     {
     *       "fieldNames": "eventName"
     *     }]
     * We will have the following `pivotHeaders` in the response:
     *     "pivotHeaders" : [{
     *       "dimensionHeaders": [{
     *         "dimensionValues": [
     *            { "value": "United Kingdom" },
     *            { "value": "London" }
     *          ]
     *       },
     *       {
     *         "dimensionValues": [
     *         { "value": "Japan" },
     *         { "value": "Osaka" }
     *         ]
     *       }]
     *     },
     *     {
     *       "dimensionHeaders": [{
     *         "dimensionValues": [{ "value": "session_start" }]
     *       },
     *       {
     *         "dimensionValues": [{ "value": "scroll" }]
     *       }]
     *     }]
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.PivotHeader pivot_headers = 1;</code>
     */
    private $pivot_headers;
    /**
     * Describes dimension columns. The number of DimensionHeaders and ordering of
     * DimensionHeaders matches the dimensions present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DimensionHeader dimension_headers = 7;</code>
     */
    private $dimension_headers;
    /**
     * Describes metric columns. The number of MetricHeaders and ordering of
     * MetricHeaders matches the metrics present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricHeader metric_headers = 2;</code>
     */
    private $metric_headers;
    /**
     * Rows of dimension value combinations and metric values in the report.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row rows = 3;</code>
     */
    private $rows;
    /**
     * Aggregation of metric values. Can be totals, minimums, or maximums. The
     * returned aggregations are controlled by the metric_aggregations in the
     * pivot. The type of aggregation returned in each row is shown by the
     * dimension_values which are set to "RESERVED_<MetricAggregation>".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row aggregates = 4;</code>
     */
    private $aggregates;
    /**
     * Metadata for the report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.ResponseMetaData metadata = 5;</code>
     */
    private $metadata = null;
    /**
     * This Analytics Property's quota state including this request.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.PropertyQuota property_quota = 6;</code>
     */
    private $property_quota = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1alpha\PivotHeader[]|\Google\Protobuf\Internal\RepeatedField $pivot_headers
     *           Summarizes the columns and rows created by a pivot. Each pivot in the
     *           request produces one header in the response. If we have a request like
     *           this:
     *               "pivots": [{
     *                 "fieldNames": ["country",
     *                   "city"]
     *               },
     *               {
     *                 "fieldNames": "eventName"
     *               }]
     *           We will have the following `pivotHeaders` in the response:
     *               "pivotHeaders" : [{
     *                 "dimensionHeaders": [{
     *                   "dimensionValues": [
     *                      { "value": "United Kingdom" },
     *                      { "value": "London" }
     *                    ]
     *                 },
     *                 {
     *                   "dimensionValues": [
     *                   { "value": "Japan" },
     *                   { "value": "Osaka" }
     *                   ]
     *                 }]
     *               },
     *               {
     *                 "dimensionHeaders": [{
     *                   "dimensionValues": [{ "value": "session_start" }]
     *                 },
     *                 {
     *                   "dimensionValues": [{ "value": "scroll" }]
     *                 }]
     *               }]
     *     @type \Google\Analytics\Data\V1alpha\DimensionHeader[]|\Google\Protobuf\Internal\RepeatedField $dimension_headers
     *           Describes dimension columns. The number of DimensionHeaders and ordering of
     *           DimensionHeaders matches the dimensions present in rows.
     *     @type \Google\Analytics\Data\V1alpha\MetricHeader[]|\Google\Protobuf\Internal\RepeatedField $metric_headers
     *           Describes metric columns. The number of MetricHeaders and ordering of
     *           MetricHeaders matches the metrics present in rows.
     *     @type \Google\Analytics\Data\V1alpha\Row[]|\Google\Protobuf\Internal\RepeatedField $rows
     *           Rows of dimension value combinations and metric values in the report.
     *     @type \Google\Analytics\Data\V1alpha\Row[]|\Google\Protobuf\Internal\RepeatedField $aggregates
     *           Aggregation of metric values. Can be totals, minimums, or maximums. The
     *           returned aggregations are controlled by the metric_aggregations in the
     *           pivot. The type of aggregation returned in each row is shown by the
     *           dimension_values which are set to "RESERVED_<MetricAggregation>".
     *     @type \Google\Analytics\Data\V1alpha\ResponseMetaData $metadata
     *           Metadata for the report.
     *     @type \Google\Analytics\Data\V1alpha\PropertyQuota $property_quota
     *           This Analytics Property's quota state including this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Summarizes the columns and rows created by a pivot. Each pivot in the
     * request produces one header in the response. If we have a request like
     * this:
     *     "pivots": [{
     *       "fieldNames": ["country",
     *         "city"]
     *     },
     *     {
     *       "fieldNames": "eventName"
     *     }]
     * We will have the following `pivotHeaders` in the response:
     *     "pivotHeaders" : [{
     *       "dimensionHeaders": [{
     *         "dimensionValues": [
     *            { "value": "United Kingdom" },
     *            { "value": "London" }
     *          ]
     *       },
     *       {
     *         "dimensionValues": [
     *         { "value": "Japan" },
     *         { "value": "Osaka" }
     *         ]
     *       }]
     *     },
     *     {
     *       "dimensionHeaders": [{
     *         "dimensionValues": [{ "value": "session_start" }]
     *       },
     *       {
     *         "dimensionValues": [{ "value": "scroll" }]
     *       }]
     *     }]
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.PivotHeader pivot_headers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPivotHeaders()
    {
        return $this->pivot_headers;
    }

    /**
     * Summarizes the columns and rows created by a pivot. Each pivot in the
     * request produces one header in the response. If we have a request like
     * this:
     *     "pivots": [{
     *       "fieldNames": ["country",
     *         "city"]
     *     },
     *     {
     *       "fieldNames": "eventName"
     *     }]
     * We will have the following `pivotHeaders` in the response:
     *     "pivotHeaders" : [{
     *       "dimensionHeaders": [{
     *         "dimensionValues": [
     *            { "value": "United Kingdom" },
     *            { "value": "London" }
     *          ]
     *       },
     *       {
     *         "dimensionValues": [
     *         { "value": "Japan" },
     *         { "value": "Osaka" }
     *         ]
     *       }]
     *     },
     *     {
     *       "dimensionHeaders": [{
     *         "dimensionValues": [{ "value": "session_start" }]
     *       },
     *       {
     *         "dimensionValues": [{ "value": "scroll" }]
     *       }]
     *     }]
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.PivotHeader pivot_headers = 1;</code>
     * @param \Google\Analytics\Data\V1alpha\PivotHeader[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPivotHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\PivotHeader::class);
        $this->pivot_headers = $arr;

        return $this;
    }

    /**
     * Describes dimension columns. The number of DimensionHeaders and ordering of
     * DimensionHeaders matches the dimensions present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DimensionHeader dimension_headers = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensionHeaders()
    {
        return $this->dimension_headers;
    }

    /**
     * Describes dimension columns. The number of DimensionHeaders and ordering of
     * DimensionHeaders matches the dimensions present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DimensionHeader dimension_headers = 7;</code>
     * @param \Google\Analytics\Data\V1alpha\DimensionHeader[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensionHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\DimensionHeader::class);
        $this->dimension_headers = $arr;

        return $this;
    }

    /**
     * Describes metric columns. The number of MetricHeaders and ordering of
     * MetricHeaders matches the metrics present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricHeader metric_headers = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricHeaders()
    {
        return $this->metric_headers;
    }

    /**
     * Describes metric columns. The number of MetricHeaders and ordering of
     * MetricHeaders matches the metrics present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricHeader metric_headers = 2;</code>
     * @param \Google\Analytics\Data\V1alpha\MetricHeader[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\MetricHeader::class);
        $this->metric_headers = $arr;

        return $this;
    }

    /**
     * Rows of dimension value combinations and metric values in the report.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row rows = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Rows of dimension value combinations and metric values in the report.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row rows = 3;</code>
     * @param \Google\Analytics\Data\V1alpha\Row[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\Row::class);
        $this->rows = $arr;

        return $this;
    }

    /**
     * Aggregation of metric values. Can be totals, minimums, or maximums. The
     * returned aggregations are controlled by the metric_aggregations in the
     * pivot. The type of aggregation returned in each row is shown by the
     * dimension_values which are set to "RESERVED_<MetricAggregation>".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row aggregates = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAggregates()
    {
        return $this->aggregates;
    }

    /**
     * Aggregation of metric values. Can be totals, minimums, or maximums. The
     * returned aggregations are controlled by the metric_aggregations in the
     * pivot. The type of aggregation returned in each row is shown by the
     * dimension_values which are set to "RESERVED_<MetricAggregation>".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row aggregates = 4;</code>
     * @param \Google\Analytics\Data\V1alpha\Row[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAggregates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\Row::class);
        $this->aggregates = $arr;

        return $this;
    }

    /**
     * Metadata for the report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.ResponseMetaData metadata = 5;</code>
     * @return \Google\Analytics\Data\V1alpha\ResponseMetaData|null
     */
    public function getMetadata()
    {
        return isset($this->metadata) ? $this->metadata : null;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Metadata for the report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.ResponseMetaData metadata = 5;</code>
     * @param \Google\Analytics\Data\V1alpha\ResponseMetaData $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\ResponseMetaData::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * This Analytics Property's quota state including this request.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.PropertyQuota property_quota = 6;</code>
     * @return \Google\Analytics\Data\V1alpha\PropertyQuota|null
     */
    public function getPropertyQuota()
    {
        return isset($this->property_quota) ? $this->property_quota : null;
    }

    public function hasPropertyQuota()
    {
        return isset($this->property_quota);
    }

    public function clearPropertyQuota()
    {
        unset($this->property_quota);
    }

    /**
     * This Analytics Property's quota state including this request.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.PropertyQuota property_quota = 6;</code>
     * @param \Google\Analytics\Data\V1alpha\PropertyQuota $var
     * @return $this
     */
    public function setPropertyQuota($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\PropertyQuota::class);
        $this->property_quota = $var;

        return $this;
    }

}

