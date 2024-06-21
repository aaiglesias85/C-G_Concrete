<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [FeaturestoreService.ListFeatures][google.cloud.aiplatform.v1.FeaturestoreService.ListFeatures].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListFeaturesRequest</code>
 */
class ListFeaturesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to list Features.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Lists the Features that match the filter expression. The following
     * filters are supported:
     * * `value_type`: Supports = and != comparisons.
     * * `create_time`: Supports =, !=, <, >, >=, and <= comparisons. Values must
     * be in RFC 3339 format.
     * * `update_time`: Supports =, !=, <, >, >=, and <= comparisons. Values must
     * be in RFC 3339 format.
     * * `labels`: Supports key-value equality as well as key presence.
     * Examples:
     * * `value_type = DOUBLE` --> Features whose type is DOUBLE.
     * * `create_time > \"2020-01-31T15:30:00.000000Z\" OR
     *      update_time > \"2020-01-31T15:30:00.000000Z\"` --> EntityTypes created
     *      or updated after 2020-01-31T15:30:00.000000Z.
     * * `labels.active = yes AND labels.env = prod` --> Features having both
     *     (active: yes) and (env: prod) labels.
     * * `labels.env: *` --> Any Feature which has a label with 'env' as the
     *   key.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * The maximum number of Features to return. The service may return fewer
     * than this value. If unspecified, at most 1000 Features will be returned.
     * The maximum value is 1000; any value greater than 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * A page token, received from a previous
     * [FeaturestoreService.ListFeatures][google.cloud.aiplatform.v1.FeaturestoreService.ListFeatures] call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [FeaturestoreService.ListFeatures][google.cloud.aiplatform.v1.FeaturestoreService.ListFeatures] must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported fields:
     *   * `feature_id`
     *   * `value_type`
     *   * `create_time`
     *   * `update_time`
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    private $order_by = '';
    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 6;</code>
     */
    private $read_mask = null;
    /**
     * If set, return the most recent [ListFeaturesRequest.latest_stats_count][google.cloud.aiplatform.v1.ListFeaturesRequest.latest_stats_count]
     * of stats for each Feature in response. Valid value is [0, 10]. If number of
     * stats exists < [ListFeaturesRequest.latest_stats_count][google.cloud.aiplatform.v1.ListFeaturesRequest.latest_stats_count], return all
     * existing stats.
     *
     * Generated from protobuf field <code>int32 latest_stats_count = 7;</code>
     */
    private $latest_stats_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to list Features.
     *           Format:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *     @type string $filter
     *           Lists the Features that match the filter expression. The following
     *           filters are supported:
     *           * `value_type`: Supports = and != comparisons.
     *           * `create_time`: Supports =, !=, <, >, >=, and <= comparisons. Values must
     *           be in RFC 3339 format.
     *           * `update_time`: Supports =, !=, <, >, >=, and <= comparisons. Values must
     *           be in RFC 3339 format.
     *           * `labels`: Supports key-value equality as well as key presence.
     *           Examples:
     *           * `value_type = DOUBLE` --> Features whose type is DOUBLE.
     *           * `create_time > \"2020-01-31T15:30:00.000000Z\" OR
     *                update_time > \"2020-01-31T15:30:00.000000Z\"` --> EntityTypes created
     *                or updated after 2020-01-31T15:30:00.000000Z.
     *           * `labels.active = yes AND labels.env = prod` --> Features having both
     *               (active: yes) and (env: prod) labels.
     *           * `labels.env: *` --> Any Feature which has a label with 'env' as the
     *             key.
     *     @type int $page_size
     *           The maximum number of Features to return. The service may return fewer
     *           than this value. If unspecified, at most 1000 Features will be returned.
     *           The maximum value is 1000; any value greater than 1000 will be coerced to
     *           1000.
     *     @type string $page_token
     *           A page token, received from a previous
     *           [FeaturestoreService.ListFeatures][google.cloud.aiplatform.v1.FeaturestoreService.ListFeatures] call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           [FeaturestoreService.ListFeatures][google.cloud.aiplatform.v1.FeaturestoreService.ListFeatures] must
     *           match the call that provided the page token.
     *     @type string $order_by
     *           A comma-separated list of fields to order by, sorted in ascending order.
     *           Use "desc" after a field name for descending.
     *           Supported fields:
     *             * `feature_id`
     *             * `value_type`
     *             * `create_time`
     *             * `update_time`
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Mask specifying which fields to read.
     *     @type int $latest_stats_count
     *           If set, return the most recent [ListFeaturesRequest.latest_stats_count][google.cloud.aiplatform.v1.ListFeaturesRequest.latest_stats_count]
     *           of stats for each Feature in response. Valid value is [0, 10]. If number of
     *           stats exists < [ListFeaturesRequest.latest_stats_count][google.cloud.aiplatform.v1.ListFeaturesRequest.latest_stats_count], return all
     *           existing stats.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to list Features.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to list Features.
     * Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Lists the Features that match the filter expression. The following
     * filters are supported:
     * * `value_type`: Supports = and != comparisons.
     * * `create_time`: Supports =, !=, <, >, >=, and <= comparisons. Values must
     * be in RFC 3339 format.
     * * `update_time`: Supports =, !=, <, >, >=, and <= comparisons. Values must
     * be in RFC 3339 format.
     * * `labels`: Supports key-value equality as well as key presence.
     * Examples:
     * * `value_type = DOUBLE` --> Features whose type is DOUBLE.
     * * `create_time > \"2020-01-31T15:30:00.000000Z\" OR
     *      update_time > \"2020-01-31T15:30:00.000000Z\"` --> EntityTypes created
     *      or updated after 2020-01-31T15:30:00.000000Z.
     * * `labels.active = yes AND labels.env = prod` --> Features having both
     *     (active: yes) and (env: prod) labels.
     * * `labels.env: *` --> Any Feature which has a label with 'env' as the
     *   key.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Lists the Features that match the filter expression. The following
     * filters are supported:
     * * `value_type`: Supports = and != comparisons.
     * * `create_time`: Supports =, !=, <, >, >=, and <= comparisons. Values must
     * be in RFC 3339 format.
     * * `update_time`: Supports =, !=, <, >, >=, and <= comparisons. Values must
     * be in RFC 3339 format.
     * * `labels`: Supports key-value equality as well as key presence.
     * Examples:
     * * `value_type = DOUBLE` --> Features whose type is DOUBLE.
     * * `create_time > \"2020-01-31T15:30:00.000000Z\" OR
     *      update_time > \"2020-01-31T15:30:00.000000Z\"` --> EntityTypes created
     *      or updated after 2020-01-31T15:30:00.000000Z.
     * * `labels.active = yes AND labels.env = prod` --> Features having both
     *     (active: yes) and (env: prod) labels.
     * * `labels.env: *` --> Any Feature which has a label with 'env' as the
     *   key.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The maximum number of Features to return. The service may return fewer
     * than this value. If unspecified, at most 1000 Features will be returned.
     * The maximum value is 1000; any value greater than 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of Features to return. The service may return fewer
     * than this value. If unspecified, at most 1000 Features will be returned.
     * The maximum value is 1000; any value greater than 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous
     * [FeaturestoreService.ListFeatures][google.cloud.aiplatform.v1.FeaturestoreService.ListFeatures] call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [FeaturestoreService.ListFeatures][google.cloud.aiplatform.v1.FeaturestoreService.ListFeatures] must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous
     * [FeaturestoreService.ListFeatures][google.cloud.aiplatform.v1.FeaturestoreService.ListFeatures] call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * [FeaturestoreService.ListFeatures][google.cloud.aiplatform.v1.FeaturestoreService.ListFeatures] must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported fields:
     *   * `feature_id`
     *   * `value_type`
     *   * `create_time`
     *   * `update_time`
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported fields:
     *   * `feature_id`
     *   * `value_type`
     *   * `create_time`
     *   * `update_time`
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 6;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 6;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

    /**
     * If set, return the most recent [ListFeaturesRequest.latest_stats_count][google.cloud.aiplatform.v1.ListFeaturesRequest.latest_stats_count]
     * of stats for each Feature in response. Valid value is [0, 10]. If number of
     * stats exists < [ListFeaturesRequest.latest_stats_count][google.cloud.aiplatform.v1.ListFeaturesRequest.latest_stats_count], return all
     * existing stats.
     *
     * Generated from protobuf field <code>int32 latest_stats_count = 7;</code>
     * @return int
     */
    public function getLatestStatsCount()
    {
        return $this->latest_stats_count;
    }

    /**
     * If set, return the most recent [ListFeaturesRequest.latest_stats_count][google.cloud.aiplatform.v1.ListFeaturesRequest.latest_stats_count]
     * of stats for each Feature in response. Valid value is [0, 10]. If number of
     * stats exists < [ListFeaturesRequest.latest_stats_count][google.cloud.aiplatform.v1.ListFeaturesRequest.latest_stats_count], return all
     * existing stats.
     *
     * Generated from protobuf field <code>int32 latest_stats_count = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLatestStatsCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->latest_stats_count = $var;

        return $this;
    }

}

