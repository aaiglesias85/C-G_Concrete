<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Explains a metric.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.MetricMetadata</code>
 */
class MetricMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * A metric name. Useable in [Metric](#Metric)'s `name`. For example,
     * `eventCount`.
     *
     * Generated from protobuf field <code>string api_name = 1;</code>
     */
    private $api_name = '';
    /**
     * This metric's name within the Google Analytics user interface. For example,
     * `Event count`.
     *
     * Generated from protobuf field <code>string ui_name = 2;</code>
     */
    private $ui_name = '';
    /**
     * Description of how this metric is used and calculated.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Still usable but deprecated names for this metric. If populated, this
     * metric is available by either `apiName` or one of `deprecatedApiNames`
     * for a period of time. After the deprecation period, the metric will be
     * available only by `apiName`.
     *
     * Generated from protobuf field <code>repeated string deprecated_api_names = 4;</code>
     */
    private $deprecated_api_names;
    /**
     * The type of this metric.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.MetricType type = 5;</code>
     */
    private $type = 0;
    /**
     * The mathematical expression for this derived metric. Can be used in
     * [Metric](#Metric)'s `expression` field for equivalent reports. Most metrics
     * are not expressions, and for non-expressions, this field is empty.
     *
     * Generated from protobuf field <code>string expression = 6;</code>
     */
    private $expression = '';
    /**
     * True if the metric is a custom metric for this property.
     *
     * Generated from protobuf field <code>bool custom_definition = 7;</code>
     */
    private $custom_definition = false;
    /**
     * If reasons are specified, your access is blocked to this metric for this
     * property. API requests from you to this property for this metric will
     * succeed; however, the report will contain only zeros for this metric. API
     * requests with metric filters on blocked metrics will fail. If reasons are
     * empty, you have access to this metric.
     * To learn more, see [Access and data-restriction
     * management](https://support.google.com/analytics/answer/10851388).
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricMetadata.BlockedReason blocked_reasons = 8;</code>
     */
    private $blocked_reasons;
    /**
     * The display name of the category that this metrics belongs to. Similar
     * dimensions and metrics are categorized together.
     *
     * Generated from protobuf field <code>string category = 10;</code>
     */
    private $category = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $api_name
     *           A metric name. Useable in [Metric](#Metric)'s `name`. For example,
     *           `eventCount`.
     *     @type string $ui_name
     *           This metric's name within the Google Analytics user interface. For example,
     *           `Event count`.
     *     @type string $description
     *           Description of how this metric is used and calculated.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $deprecated_api_names
     *           Still usable but deprecated names for this metric. If populated, this
     *           metric is available by either `apiName` or one of `deprecatedApiNames`
     *           for a period of time. After the deprecation period, the metric will be
     *           available only by `apiName`.
     *     @type int $type
     *           The type of this metric.
     *     @type string $expression
     *           The mathematical expression for this derived metric. Can be used in
     *           [Metric](#Metric)'s `expression` field for equivalent reports. Most metrics
     *           are not expressions, and for non-expressions, this field is empty.
     *     @type bool $custom_definition
     *           True if the metric is a custom metric for this property.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $blocked_reasons
     *           If reasons are specified, your access is blocked to this metric for this
     *           property. API requests from you to this property for this metric will
     *           succeed; however, the report will contain only zeros for this metric. API
     *           requests with metric filters on blocked metrics will fail. If reasons are
     *           empty, you have access to this metric.
     *           To learn more, see [Access and data-restriction
     *           management](https://support.google.com/analytics/answer/10851388).
     *     @type string $category
     *           The display name of the category that this metrics belongs to. Similar
     *           dimensions and metrics are categorized together.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * A metric name. Useable in [Metric](#Metric)'s `name`. For example,
     * `eventCount`.
     *
     * Generated from protobuf field <code>string api_name = 1;</code>
     * @return string
     */
    public function getApiName()
    {
        return $this->api_name;
    }

    /**
     * A metric name. Useable in [Metric](#Metric)'s `name`. For example,
     * `eventCount`.
     *
     * Generated from protobuf field <code>string api_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApiName($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_name = $var;

        return $this;
    }

    /**
     * This metric's name within the Google Analytics user interface. For example,
     * `Event count`.
     *
     * Generated from protobuf field <code>string ui_name = 2;</code>
     * @return string
     */
    public function getUiName()
    {
        return $this->ui_name;
    }

    /**
     * This metric's name within the Google Analytics user interface. For example,
     * `Event count`.
     *
     * Generated from protobuf field <code>string ui_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUiName($var)
    {
        GPBUtil::checkString($var, True);
        $this->ui_name = $var;

        return $this;
    }

    /**
     * Description of how this metric is used and calculated.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of how this metric is used and calculated.
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * Still usable but deprecated names for this metric. If populated, this
     * metric is available by either `apiName` or one of `deprecatedApiNames`
     * for a period of time. After the deprecation period, the metric will be
     * available only by `apiName`.
     *
     * Generated from protobuf field <code>repeated string deprecated_api_names = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeprecatedApiNames()
    {
        return $this->deprecated_api_names;
    }

    /**
     * Still usable but deprecated names for this metric. If populated, this
     * metric is available by either `apiName` or one of `deprecatedApiNames`
     * for a period of time. After the deprecation period, the metric will be
     * available only by `apiName`.
     *
     * Generated from protobuf field <code>repeated string deprecated_api_names = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeprecatedApiNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->deprecated_api_names = $arr;

        return $this;
    }

    /**
     * The type of this metric.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.MetricType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of this metric.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.MetricType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Data\V1beta\MetricType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The mathematical expression for this derived metric. Can be used in
     * [Metric](#Metric)'s `expression` field for equivalent reports. Most metrics
     * are not expressions, and for non-expressions, this field is empty.
     *
     * Generated from protobuf field <code>string expression = 6;</code>
     * @return string
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * The mathematical expression for this derived metric. Can be used in
     * [Metric](#Metric)'s `expression` field for equivalent reports. Most metrics
     * are not expressions, and for non-expressions, this field is empty.
     *
     * Generated from protobuf field <code>string expression = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setExpression($var)
    {
        GPBUtil::checkString($var, True);
        $this->expression = $var;

        return $this;
    }

    /**
     * True if the metric is a custom metric for this property.
     *
     * Generated from protobuf field <code>bool custom_definition = 7;</code>
     * @return bool
     */
    public function getCustomDefinition()
    {
        return $this->custom_definition;
    }

    /**
     * True if the metric is a custom metric for this property.
     *
     * Generated from protobuf field <code>bool custom_definition = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setCustomDefinition($var)
    {
        GPBUtil::checkBool($var);
        $this->custom_definition = $var;

        return $this;
    }

    /**
     * If reasons are specified, your access is blocked to this metric for this
     * property. API requests from you to this property for this metric will
     * succeed; however, the report will contain only zeros for this metric. API
     * requests with metric filters on blocked metrics will fail. If reasons are
     * empty, you have access to this metric.
     * To learn more, see [Access and data-restriction
     * management](https://support.google.com/analytics/answer/10851388).
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricMetadata.BlockedReason blocked_reasons = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlockedReasons()
    {
        return $this->blocked_reasons;
    }

    /**
     * If reasons are specified, your access is blocked to this metric for this
     * property. API requests from you to this property for this metric will
     * succeed; however, the report will contain only zeros for this metric. API
     * requests with metric filters on blocked metrics will fail. If reasons are
     * empty, you have access to this metric.
     * To learn more, see [Access and data-restriction
     * management](https://support.google.com/analytics/answer/10851388).
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricMetadata.BlockedReason blocked_reasons = 8;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlockedReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Analytics\Data\V1beta\MetricMetadata\BlockedReason::class);
        $this->blocked_reasons = $arr;

        return $this;
    }

    /**
     * The display name of the category that this metrics belongs to. Similar
     * dimensions and metrics are categorized together.
     *
     * Generated from protobuf field <code>string category = 10;</code>
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The display name of the category that this metrics belongs to. Similar
     * dimensions and metrics are categorized together.
     *
     * Generated from protobuf field <code>string category = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->category = $var;

        return $this;
    }

}

