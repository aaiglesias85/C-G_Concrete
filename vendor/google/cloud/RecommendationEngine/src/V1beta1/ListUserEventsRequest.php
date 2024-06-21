<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/user_event_service.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListUserEvents method.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.ListUserEventsRequest</code>
 */
class ListUserEventsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent eventStore resource name, such as
     * `projects/&#42;&#47;locations/&#42;&#47;catalogs/default_catalog/eventStores/default_event_store`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. Maximum number of results to return per page. If zero, the
     * service will choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. The previous ListUserEventsResponse.next_page_token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. Filtering expression to specify restrictions over
     * returned events. This is a sequence of terms, where each term applies some
     * kind of a restriction to the returned user events. Use this expression to
     * restrict results to a specific time range, or filter events by eventType.
     *    eg: eventTime > "2012-04-23T18:25:43.511Z" eventsMissingCatalogItems
     *    eventTime<"2012-04-23T18:25:43.511Z" eventType=search
     *   We expect only 3 types of fields:
     *    * eventTime: this can be specified a maximum of 2 times, once with a
     *      less than operator and once with a greater than operator. The
     *      eventTime restrict should result in one contiguous valid eventTime
     *      range.
     *    * eventType: only 1 eventType restriction can be specified.
     *    * eventsMissingCatalogItems: specififying this will restrict results
     *      to events for which catalog items were not found in the catalog. The
     *      default behavior is to return only those events for which catalog
     *      items were found.
     *   Some examples of valid filters expressions:
     *   * Example 1: eventTime > "2012-04-23T18:25:43.511Z"
     *             eventTime < "2012-04-23T18:30:43.511Z"
     *   * Example 2: eventTime > "2012-04-23T18:25:43.511Z"
     *             eventType = detail-page-view
     *   * Example 3: eventsMissingCatalogItems
     *             eventType = search eventTime < "2018-04-23T18:30:43.511Z"
     *   * Example 4: eventTime > "2012-04-23T18:25:43.511Z"
     *   * Example 5: eventType = search
     *   * Example 6: eventsMissingCatalogItems
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent eventStore resource name, such as
     *           `projects/&#42;&#47;locations/&#42;&#47;catalogs/default_catalog/eventStores/default_event_store`.
     *     @type int $page_size
     *           Optional. Maximum number of results to return per page. If zero, the
     *           service will choose a reasonable default.
     *     @type string $page_token
     *           Optional. The previous ListUserEventsResponse.next_page_token.
     *     @type string $filter
     *           Optional. Filtering expression to specify restrictions over
     *           returned events. This is a sequence of terms, where each term applies some
     *           kind of a restriction to the returned user events. Use this expression to
     *           restrict results to a specific time range, or filter events by eventType.
     *              eg: eventTime > "2012-04-23T18:25:43.511Z" eventsMissingCatalogItems
     *              eventTime<"2012-04-23T18:25:43.511Z" eventType=search
     *             We expect only 3 types of fields:
     *              * eventTime: this can be specified a maximum of 2 times, once with a
     *                less than operator and once with a greater than operator. The
     *                eventTime restrict should result in one contiguous valid eventTime
     *                range.
     *              * eventType: only 1 eventType restriction can be specified.
     *              * eventsMissingCatalogItems: specififying this will restrict results
     *                to events for which catalog items were not found in the catalog. The
     *                default behavior is to return only those events for which catalog
     *                items were found.
     *             Some examples of valid filters expressions:
     *             * Example 1: eventTime > "2012-04-23T18:25:43.511Z"
     *                       eventTime < "2012-04-23T18:30:43.511Z"
     *             * Example 2: eventTime > "2012-04-23T18:25:43.511Z"
     *                       eventType = detail-page-view
     *             * Example 3: eventsMissingCatalogItems
     *                       eventType = search eventTime < "2018-04-23T18:30:43.511Z"
     *             * Example 4: eventTime > "2012-04-23T18:25:43.511Z"
     *             * Example 5: eventType = search
     *             * Example 6: eventsMissingCatalogItems
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\UserEventService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent eventStore resource name, such as
     * `projects/&#42;&#47;locations/&#42;&#47;catalogs/default_catalog/eventStores/default_event_store`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent eventStore resource name, such as
     * `projects/&#42;&#47;locations/&#42;&#47;catalogs/default_catalog/eventStores/default_event_store`.
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
     * Optional. Maximum number of results to return per page. If zero, the
     * service will choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Maximum number of results to return per page. If zero, the
     * service will choose a reasonable default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The previous ListUserEventsResponse.next_page_token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The previous ListUserEventsResponse.next_page_token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Filtering expression to specify restrictions over
     * returned events. This is a sequence of terms, where each term applies some
     * kind of a restriction to the returned user events. Use this expression to
     * restrict results to a specific time range, or filter events by eventType.
     *    eg: eventTime > "2012-04-23T18:25:43.511Z" eventsMissingCatalogItems
     *    eventTime<"2012-04-23T18:25:43.511Z" eventType=search
     *   We expect only 3 types of fields:
     *    * eventTime: this can be specified a maximum of 2 times, once with a
     *      less than operator and once with a greater than operator. The
     *      eventTime restrict should result in one contiguous valid eventTime
     *      range.
     *    * eventType: only 1 eventType restriction can be specified.
     *    * eventsMissingCatalogItems: specififying this will restrict results
     *      to events for which catalog items were not found in the catalog. The
     *      default behavior is to return only those events for which catalog
     *      items were found.
     *   Some examples of valid filters expressions:
     *   * Example 1: eventTime > "2012-04-23T18:25:43.511Z"
     *             eventTime < "2012-04-23T18:30:43.511Z"
     *   * Example 2: eventTime > "2012-04-23T18:25:43.511Z"
     *             eventType = detail-page-view
     *   * Example 3: eventsMissingCatalogItems
     *             eventType = search eventTime < "2018-04-23T18:30:43.511Z"
     *   * Example 4: eventTime > "2012-04-23T18:25:43.511Z"
     *   * Example 5: eventType = search
     *   * Example 6: eventsMissingCatalogItems
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Filtering expression to specify restrictions over
     * returned events. This is a sequence of terms, where each term applies some
     * kind of a restriction to the returned user events. Use this expression to
     * restrict results to a specific time range, or filter events by eventType.
     *    eg: eventTime > "2012-04-23T18:25:43.511Z" eventsMissingCatalogItems
     *    eventTime<"2012-04-23T18:25:43.511Z" eventType=search
     *   We expect only 3 types of fields:
     *    * eventTime: this can be specified a maximum of 2 times, once with a
     *      less than operator and once with a greater than operator. The
     *      eventTime restrict should result in one contiguous valid eventTime
     *      range.
     *    * eventType: only 1 eventType restriction can be specified.
     *    * eventsMissingCatalogItems: specififying this will restrict results
     *      to events for which catalog items were not found in the catalog. The
     *      default behavior is to return only those events for which catalog
     *      items were found.
     *   Some examples of valid filters expressions:
     *   * Example 1: eventTime > "2012-04-23T18:25:43.511Z"
     *             eventTime < "2012-04-23T18:30:43.511Z"
     *   * Example 2: eventTime > "2012-04-23T18:25:43.511Z"
     *             eventType = detail-page-view
     *   * Example 3: eventsMissingCatalogItems
     *             eventType = search eventTime < "2018-04-23T18:30:43.511Z"
     *   * Example 4: eventTime > "2012-04-23T18:25:43.511Z"
     *   * Example 5: eventType = search
     *   * Example 6: eventsMissingCatalogItems
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

