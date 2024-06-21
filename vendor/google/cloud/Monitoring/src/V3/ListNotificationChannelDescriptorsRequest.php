<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/notification_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListNotificationChannelDescriptors` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListNotificationChannelDescriptorsRequest</code>
 */
class ListNotificationChannelDescriptorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The REST resource name of the parent from which to retrieve
     * the notification channel descriptors. The expected syntax is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     * Note that this
     * [names](https://cloud.google.com/monitoring/api/v3#project_name) the parent
     * container in which to look for the descriptors; to retrieve a single
     * descriptor by name, use the
     * [GetNotificationChannelDescriptor][google.monitoring.v3.NotificationChannelService.GetNotificationChannelDescriptor]
     * operation, instead.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The maximum number of results to return in a single response. If
     * not set to a positive number, a reasonable value will be chosen by the
     * service.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * If non-empty, `page_token` must contain a value returned as the
     * `next_page_token` in a previous response to request the next set
     * of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The REST resource name of the parent from which to retrieve
     *           the notification channel descriptors. The expected syntax is:
     *               projects/[PROJECT_ID_OR_NUMBER]
     *           Note that this
     *           [names](https://cloud.google.com/monitoring/api/v3#project_name) the parent
     *           container in which to look for the descriptors; to retrieve a single
     *           descriptor by name, use the
     *           [GetNotificationChannelDescriptor][google.monitoring.v3.NotificationChannelService.GetNotificationChannelDescriptor]
     *           operation, instead.
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
     * Required. The REST resource name of the parent from which to retrieve
     * the notification channel descriptors. The expected syntax is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     * Note that this
     * [names](https://cloud.google.com/monitoring/api/v3#project_name) the parent
     * container in which to look for the descriptors; to retrieve a single
     * descriptor by name, use the
     * [GetNotificationChannelDescriptor][google.monitoring.v3.NotificationChannelService.GetNotificationChannelDescriptor]
     * operation, instead.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The REST resource name of the parent from which to retrieve
     * the notification channel descriptors. The expected syntax is:
     *     projects/[PROJECT_ID_OR_NUMBER]
     * Note that this
     * [names](https://cloud.google.com/monitoring/api/v3#project_name) the parent
     * container in which to look for the descriptors; to retrieve a single
     * descriptor by name, use the
     * [GetNotificationChannelDescriptor][google.monitoring.v3.NotificationChannelService.GetNotificationChannelDescriptor]
     * operation, instead.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * The maximum number of results to return in a single response. If
     * not set to a positive number, a reasonable value will be chosen by the
     * service.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
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
     * Generated from protobuf field <code>int32 page_size = 2;</code>
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
     * Generated from protobuf field <code>string page_token = 3;</code>
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
     * Generated from protobuf field <code>string page_token = 3;</code>
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

