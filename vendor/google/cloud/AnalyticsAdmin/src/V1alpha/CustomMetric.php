<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A definition for a custom metric.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.CustomMetric</code>
 */
class CustomMetric extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name for this CustomMetric resource.
     * Format: properties/{property}/customMetrics/{customMetric}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. Immutable. Tagging name for this custom metric.
     * If this is an event-scoped metric, then this is the event parameter
     * name.
     * May only contain alphanumeric and underscore charactes, starting with a
     * letter. Max length of 40 characters for event-scoped metrics.
     *
     * Generated from protobuf field <code>string parameter_name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $parameter_name = '';
    /**
     * Required. Display name for this custom metric as shown in the Analytics UI.
     * Max length of 82 characters, alphanumeric plus space and underscore
     * starting with a letter. Legacy system-generated display names may contain
     * square brackets, but updates to this field will never permit square
     * brackets.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Optional. Description for this custom dimension.
     * Max length of 150 characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Required. The type for the custom metric's value.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric.MeasurementUnit measurement_unit = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $measurement_unit = 0;
    /**
     * Required. Immutable. The scope of this custom metric.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric.MetricScope scope = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $scope = 0;
    /**
     * Optional. Types of restricted data that this metric may contain. Required for metrics
     * with CURRENCY measurement unit. Must be empty for metrics with a
     * non-CURRENCY measurement unit.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CustomMetric.RestrictedMetricType restricted_metric_type = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $restricted_metric_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name for this CustomMetric resource.
     *           Format: properties/{property}/customMetrics/{customMetric}
     *     @type string $parameter_name
     *           Required. Immutable. Tagging name for this custom metric.
     *           If this is an event-scoped metric, then this is the event parameter
     *           name.
     *           May only contain alphanumeric and underscore charactes, starting with a
     *           letter. Max length of 40 characters for event-scoped metrics.
     *     @type string $display_name
     *           Required. Display name for this custom metric as shown in the Analytics UI.
     *           Max length of 82 characters, alphanumeric plus space and underscore
     *           starting with a letter. Legacy system-generated display names may contain
     *           square brackets, but updates to this field will never permit square
     *           brackets.
     *     @type string $description
     *           Optional. Description for this custom dimension.
     *           Max length of 150 characters.
     *     @type int $measurement_unit
     *           Required. The type for the custom metric's value.
     *     @type int $scope
     *           Required. Immutable. The scope of this custom metric.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $restricted_metric_type
     *           Optional. Types of restricted data that this metric may contain. Required for metrics
     *           with CURRENCY measurement unit. Must be empty for metrics with a
     *           non-CURRENCY measurement unit.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name for this CustomMetric resource.
     * Format: properties/{property}/customMetrics/{customMetric}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name for this CustomMetric resource.
     * Format: properties/{property}/customMetrics/{customMetric}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Immutable. Tagging name for this custom metric.
     * If this is an event-scoped metric, then this is the event parameter
     * name.
     * May only contain alphanumeric and underscore charactes, starting with a
     * letter. Max length of 40 characters for event-scoped metrics.
     *
     * Generated from protobuf field <code>string parameter_name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getParameterName()
    {
        return $this->parameter_name;
    }

    /**
     * Required. Immutable. Tagging name for this custom metric.
     * If this is an event-scoped metric, then this is the event parameter
     * name.
     * May only contain alphanumeric and underscore charactes, starting with a
     * letter. Max length of 40 characters for event-scoped metrics.
     *
     * Generated from protobuf field <code>string parameter_name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setParameterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->parameter_name = $var;

        return $this;
    }

    /**
     * Required. Display name for this custom metric as shown in the Analytics UI.
     * Max length of 82 characters, alphanumeric plus space and underscore
     * starting with a letter. Legacy system-generated display names may contain
     * square brackets, but updates to this field will never permit square
     * brackets.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Display name for this custom metric as shown in the Analytics UI.
     * Max length of 82 characters, alphanumeric plus space and underscore
     * starting with a letter. Legacy system-generated display names may contain
     * square brackets, but updates to this field will never permit square
     * brackets.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. Description for this custom dimension.
     * Max length of 150 characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description for this custom dimension.
     * Max length of 150 characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. The type for the custom metric's value.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric.MeasurementUnit measurement_unit = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMeasurementUnit()
    {
        return $this->measurement_unit;
    }

    /**
     * Required. The type for the custom metric's value.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric.MeasurementUnit measurement_unit = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMeasurementUnit($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1alpha\CustomMetric\MeasurementUnit::class);
        $this->measurement_unit = $var;

        return $this;
    }

    /**
     * Required. Immutable. The scope of this custom metric.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric.MetricScope scope = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Required. Immutable. The scope of this custom metric.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric.MetricScope scope = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1alpha\CustomMetric\MetricScope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * Optional. Types of restricted data that this metric may contain. Required for metrics
     * with CURRENCY measurement unit. Must be empty for metrics with a
     * non-CURRENCY measurement unit.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CustomMetric.RestrictedMetricType restricted_metric_type = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRestrictedMetricType()
    {
        return $this->restricted_metric_type;
    }

    /**
     * Optional. Types of restricted data that this metric may contain. Required for metrics
     * with CURRENCY measurement unit. Must be empty for metrics with a
     * non-CURRENCY measurement unit.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.CustomMetric.RestrictedMetricType restricted_metric_type = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRestrictedMetricType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Analytics\Admin\V1alpha\CustomMetric\RestrictedMetricType::class);
        $this->restricted_metric_type = $arr;

        return $this;
    }

}

