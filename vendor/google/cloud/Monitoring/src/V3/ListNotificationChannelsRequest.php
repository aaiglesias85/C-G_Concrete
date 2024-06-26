<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/notification_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListNotificationChannels` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListNotificationChannelsRequest</code>
 */
class ListNotificationChannelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name) on
     * which to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     * This names the container
     * in which to look for the notification channels; it does not name a
     * specific channel. To query a specific channel by REST resource name, use
     * the
     * [`GetNotificationChannel`][google.monitoring.v3.NotificationChannelService.GetNotificationChannel]
     * operation.
     *
     * Generated from protobuf field <code>string name = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * If provided, this field specifies the criteria that must be met by
     * notification channels to be included in the response.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string filter = 6;</code>
     */
    private $filter = '';
    /**
     * A comma-separated list of fields by which to sort the result. Supports
     * the same set of fields as in `filter`. Entries can be prefixed with
     * a minus sign to sort in descending rather than ascending order.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string order_by = 7;</code>
     */
    private $order_by = '';
    /**
     * The maximum number of results to return in a single response. If
     * not set to a positive number, a reasonable value will be chosen by the
     * service.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * If non-empty, `page_token` must contain a value returned as the
     * `next_page_token` in a previous response to request the next set
     * of results.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name) on
     *           which to execute the request. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]
     *           This names the container
     *           in which to look for the notification channels; it does not name a
     *           specific channel. To query a specific channel by REST resource name, use
     *           the
     *           [`GetNotificationChannel`][google.monitoring.v3.NotificationChannelService.GetNotificationChannel]
     *           operation.
     *     @type string $filter
     *           If provided, this field specifies the criteria that must be met by
     *           notification channels to be included in the response.
     *           For more details, see [sorting and
     *           filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *     @type string $order_by
     *           A comma-separated list of fields by which to sort the result. Supports
     *           the same set of fields as in `filter`. Entries can be prefixed with
     *           a minus sign to sort in descending rather than ascending order.
     *           For more details, see [sorting and
     *           filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *     @type int $page_size
     *           The maximum number of results to return in a single response. If
     *           not set to a positive number, a reasonable value will be chosen by the
     *           service.
     *     @type string $page_token
     *           If non-empty, `page_token` must contain a value returned as the
     *           `next_page_token` in a previous response to request the next set
     *           of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\NotificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name) on
     * which to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     * This names the container
     * in which to look for the notification channels; it does not name a
     * specific channel. To query a specific channel by REST resource name, use
     * the
     * [`GetNotificationChannel`][google.monitoring.v3.NotificationChannelService.GetNotificationChannel]
     * operation.
     *
     * Generated from protobuf field <code>string name = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name) on
     * which to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     * This names the container
     * in which to look for the notification channels; it does not name a
     * specific channel. To query a specific channel by REST resource name, use
     * the
     * [`GetNotificationChannel`][google.monitoring.v3.NotificationChannelService.GetNotificationChannel]
     * operation.
     *
     * Generated from protobuf field <code>string name = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * If provided, this field specifies the criteria that must be met by
     * notification channels to be included in the response.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string filter = 6;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * If provided, this field specifies the criteria that must be met by
     * notification channels to be included in the response.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string filter = 6;</code>
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
     * A comma-separated list of fields by which to sort the result. Supports
     * the same set of fields as in `filter`. Entries can be prefixed with
     * a minus sign to sort in descending rather than ascending order.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string order_by = 7;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * A comma-separated list of fields by which to sort the result. Supports
     * the same set of fields as in `filter`. Entries can be prefixed with
     * a minus sign to sort in descending rather than ascending order.
     * For more details, see [sorting and
     * filtering](https://cloud.google.com/monitoring/api/v3/sorting-and-filtering).
     *
     * Generated from protobuf field <code>string order_by = 7;</code>
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
     * The maximum number of results to return in a single response. If
     * not set to a positive number, a reasonable value will be chosen by the
     * service.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of results to return in a single response. If
     * not set to a positive number, a reasonable value will be chosen by the
     * service.
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
     * If non-empty, `page_token` must contain a value returned as the
     * `next_page_token` in a previous response to request the next set
     * of results.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If non-empty, `page_token` must contain a value returned as the
     * `next_page_token` in a previous response to request the next set
     * of results.
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

}

