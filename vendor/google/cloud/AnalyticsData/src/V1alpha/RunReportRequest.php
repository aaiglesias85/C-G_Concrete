<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to generate a report.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.RunReportRequest</code>
 */
class RunReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A property whose events are tracked. Within a batch request, this entity
     * should either be unspecified or consistent with the batch-level entity.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.Entity entity = 1;</code>
     */
    private $entity = null;
    /**
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Dimension dimensions = 2;</code>
     */
    private $dimensions;
    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Metric metrics = 3;</code>
     */
    private $metrics;
    /**
     * Date ranges of data to read. If multiple date ranges are requested, each
     * response row will contain a zero based date range index. If two date
     * ranges overlap, the event data for the overlapping days is included in the
     * response rows for both date ranges. In a cohort request, this `dateRanges`
     * must be unspecified.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DateRange date_ranges = 4;</code>
     */
    private $date_ranges;
    /**
     * The row count of the start row. The first row is counted as row 0.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 5;</code>
     */
    private $offset = 0;
    /**
     * The number of rows to return. If unspecified, 10 rows are returned. If
     * -1, all rows are returned.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 6;</code>
     */
    private $limit = 0;
    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricAggregation metric_aggregations = 7;</code>
     */
    private $metric_aggregations;
    /**
     * The filter clause of dimensions. Dimensions must be requested to be used in
     * this filter. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression dimension_filter = 8;</code>
     */
    private $dimension_filter = null;
    /**
     * The filter clause of metrics. Applied at post aggregation phase, similar to
     * SQL having-clause. Metrics must be requested to be used in this filter.
     * Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression metric_filter = 9;</code>
     */
    private $metric_filter = null;
    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.OrderBy order_bys = 10;</code>
     */
    private $order_bys;
    /**
     * A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     * If the field is empty, the report uses the entity's default currency.
     *
     * Generated from protobuf field <code>string currency_code = 11;</code>
     */
    private $currency_code = '';
    /**
     * Cohort group associated with this request. If there is a cohort group
     * in the request the 'cohort' dimension must be present.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortSpec cohort_spec = 12;</code>
     */
    private $cohort_spec = null;
    /**
     * If false or unspecified, each row with all metrics equal to 0 will not be
     * returned. If true, these rows will be returned if they are not separately
     * removed by a filter.
     *
     * Generated from protobuf field <code>bool keep_empty_rows = 13;</code>
     */
    private $keep_empty_rows = false;
    /**
     * Toggles whether to return the current state of this Analytics Property's
     * quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 14;</code>
     */
    private $return_property_quota = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1alpha\Entity $entity
     *           A property whose events are tracked. Within a batch request, this entity
     *           should either be unspecified or consistent with the batch-level entity.
     *     @type \Google\Analytics\Data\V1alpha\Dimension[]|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           The dimensions requested and displayed.
     *     @type \Google\Analytics\Data\V1alpha\Metric[]|\Google\Protobuf\Internal\RepeatedField $metrics
     *           The metrics requested and displayed.
     *     @type \Google\Analytics\Data\V1alpha\DateRange[]|\Google\Protobuf\Internal\RepeatedField $date_ranges
     *           Date ranges of data to read. If multiple date ranges are requested, each
     *           response row will contain a zero based date range index. If two date
     *           ranges overlap, the event data for the overlapping days is included in the
     *           response rows for both date ranges. In a cohort request, this `dateRanges`
     *           must be unspecified.
     *     @type int|string $offset
     *           The row count of the start row. The first row is counted as row 0.
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *     @type int|string $limit
     *           The number of rows to return. If unspecified, 10 rows are returned. If
     *           -1, all rows are returned.
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $metric_aggregations
     *           Aggregation of metrics. Aggregated metric values will be shown in rows
     *           where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *     @type \Google\Analytics\Data\V1alpha\FilterExpression $dimension_filter
     *           The filter clause of dimensions. Dimensions must be requested to be used in
     *           this filter. Metrics cannot be used in this filter.
     *     @type \Google\Analytics\Data\V1alpha\FilterExpression $metric_filter
     *           The filter clause of metrics. Applied at post aggregation phase, similar to
     *           SQL having-clause. Metrics must be requested to be used in this filter.
     *           Dimensions cannot be used in this filter.
     *     @type \Google\Analytics\Data\V1alpha\OrderBy[]|\Google\Protobuf\Internal\RepeatedField $order_bys
     *           Specifies how rows are ordered in the response.
     *     @type string $currency_code
     *           A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     *           If the field is empty, the report uses the entity's default currency.
     *     @type \Google\Analytics\Data\V1alpha\CohortSpec $cohort_spec
     *           Cohort group associated with this request. If there is a cohort group
     *           in the request the 'cohort' dimension must be present.
     *     @type bool $keep_empty_rows
     *           If false or unspecified, each row with all metrics equal to 0 will not be
     *           returned. If true, these rows will be returned if they are not separately
     *           removed by a filter.
     *     @type bool $return_property_quota
     *           Toggles whether to return the current state of this Analytics Property's
     *           quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * A property whose events are tracked. Within a batch request, this entity
     * should either be unspecified or consistent with the batch-level entity.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.Entity entity = 1;</code>
     * @return \Google\Analytics\Data\V1alpha\Entity|null
     */
    public function getEntity()
    {
        return isset($this->entity) ? $this->entity : null;
    }

    public function hasEntity()
    {
        return isset($this->entity);
    }

    public function clearEntity()
    {
        unset($this->entity);
    }

    /**
     * A property whose events are tracked. Within a batch request, this entity
     * should either be unspecified or consistent with the batch-level entity.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.Entity entity = 1;</code>
     * @param \Google\Analytics\Data\V1alpha\Entity $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\Entity::class);
        $this->entity = $var;

        return $this;
    }

    /**
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Dimension dimensions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Dimension dimensions = 2;</code>
     * @param \Google\Analytics\Data\V1alpha\Dimension[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\Dimension::class);
        $this->dimensions = $arr;

        return $this;
    }

    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Metric metrics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Metric metrics = 3;</code>
     * @param \Google\Analytics\Data\V1alpha\Metric[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\Metric::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Date ranges of data to read. If multiple date ranges are requested, each
     * response row will contain a zero based date range index. If two date
     * ranges overlap, the event data for the overlapping days is included in the
     * response rows for both date ranges. In a cohort request, this `dateRanges`
     * must be unspecified.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DateRange date_ranges = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDateRanges()
    {
        return $this->date_ranges;
    }

    /**
     * Date ranges of data to read. If multiple date ranges are requested, each
     * response row will contain a zero based date range index. If two date
     * ranges overlap, the event data for the overlapping days is included in the
     * response rows for both date ranges. In a cohort request, this `dateRanges`
     * must be unspecified.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DateRange date_ranges = 4;</code>
     * @param \Google\Analytics\Data\V1alpha\DateRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDateRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\DateRange::class);
        $this->date_ranges = $arr;

        return $this;
    }

    /**
     * The row count of the start row. The first row is counted as row 0.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 5;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * The row count of the start row. The first row is counted as row 0.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * The number of rows to return. If unspecified, 10 rows are returned. If
     * -1, all rows are returned.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 6;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * The number of rows to return. If unspecified, 10 rows are returned. If
     * -1, all rows are returned.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricAggregation metric_aggregations = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricAggregations()
    {
        return $this->metric_aggregations;
    }

    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricAggregation metric_aggregations = 7;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricAggregations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Analytics\Data\V1alpha\MetricAggregation::class);
        $this->metric_aggregations = $arr;

        return $this;
    }

    /**
     * The filter clause of dimensions. Dimensions must be requested to be used in
     * this filter. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression dimension_filter = 8;</code>
     * @return \Google\Analytics\Data\V1alpha\FilterExpression|null
     */
    public function getDimensionFilter()
    {
        return isset($this->dimension_filter) ? $this->dimension_filter : null;
    }

    public function hasDimensionFilter()
    {
        return isset($this->dimension_filter);
    }

    public function clearDimensionFilter()
    {
        unset($this->dimension_filter);
    }

    /**
     * The filter clause of dimensions. Dimensions must be requested to be used in
     * this filter. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression dimension_filter = 8;</code>
     * @param \Google\Analytics\Data\V1alpha\FilterExpression $var
     * @return $this
     */
    public function setDimensionFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\FilterExpression::class);
        $this->dimension_filter = $var;

        return $this;
    }

    /**
     * The filter clause of metrics. Applied at post aggregation phase, similar to
     * SQL having-clause. Metrics must be requested to be used in this filter.
     * Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression metric_filter = 9;</code>
     * @return \Google\Analytics\Data\V1alpha\FilterExpression|null
     */
    public function getMetricFilter()
    {
        return isset($this->metric_filter) ? $this->metric_filter : null;
    }

    public function hasMetricFilter()
    {
        return isset($this->metric_filter);
    }

    public function clearMetricFilter()
    {
        unset($this->metric_filter);
    }

    /**
     * The filter clause of metrics. Applied at post aggregation phase, similar to
     * SQL having-clause. Metrics must be requested to be used in this filter.
     * Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression metric_filter = 9;</code>
     * @param \Google\Analytics\Data\V1alpha\FilterExpression $var
     * @return $this
     */
    public function setMetricFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\FilterExpression::class);
        $this->metric_filter = $var;

        return $this;
    }

    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.OrderBy order_bys = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrderBys()
    {
        return $this->order_bys;
    }

    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.OrderBy order_bys = 10;</code>
     * @param \Google\Analytics\Data\V1alpha\OrderBy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrderBys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\OrderBy::class);
        $this->order_bys = $arr;

        return $this;
    }

    /**
     * A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     * If the field is empty, the report uses the entity's default currency.
     *
     * Generated from protobuf field <code>string currency_code = 11;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     * If the field is empty, the report uses the entity's default currency.
     *
     * Generated from protobuf field <code>string currency_code = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Cohort group associated with this request. If there is a cohort group
     * in the request the 'cohort' dimension must be present.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortSpec cohort_spec = 12;</code>
     * @return \Google\Analytics\Data\V1alpha\CohortSpec|null
     */
    public function getCohortSpec()
    {
        return isset($this->cohort_spec) ? $this->cohort_spec : null;
    }

    public function hasCohortSpec()
    {
        return isset($this->cohort_spec);
    }

    public function clearCohortSpec()
    {
        unset($this->cohort_spec);
    }

    /**
     * Cohort group associated with this request. If there is a cohort group
     * in the request the 'cohort' dimension must be present.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortSpec cohort_spec = 12;</code>
     * @param \Google\Analytics\Data\V1alpha\CohortSpec $var
     * @return $this
     */
    public function setCohortSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\CohortSpec::class);
        $this->cohort_spec = $var;

        return $this;
    }

    /**
     * If false or unspecified, each row with all metrics equal to 0 will not be
     * returned. If true, these rows will be returned if they are not separately
     * removed by a filter.
     *
     * Generated from protobuf field <code>bool keep_empty_rows = 13;</code>
     * @return bool
     */
    public function getKeepEmptyRows()
    {
        return $this->keep_empty_rows;
    }

    /**
     * If false or unspecified, each row with all metrics equal to 0 will not be
     * returned. If true, these rows will be returned if they are not separately
     * removed by a filter.
     *
     * Generated from protobuf field <code>bool keep_empty_rows = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setKeepEmptyRows($var)
    {
        GPBUtil::checkBool($var);
        $this->keep_empty_rows = $var;

        return $this;
    }

    /**
     * Toggles whether to return the current state of this Analytics Property's
     * quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 14;</code>
     * @return bool
     */
    public function getReturnPropertyQuota()
    {
        return $this->return_property_quota;
    }

    /**
     * Toggles whether to return the current state of this Analytics Property's
     * quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnPropertyQuota($var)
    {
        GPBUtil::checkBool($var);
        $this->return_property_quota = $var;

        return $this;
    }

}

