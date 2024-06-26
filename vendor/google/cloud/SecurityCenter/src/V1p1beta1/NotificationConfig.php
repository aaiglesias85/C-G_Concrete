<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/notification_config.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Security Command Center notification configs.
 * A notification config is a Security Command Center resource that contains the
 * configuration to send notifications for create/update events of findings,
 * assets and etc.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1p1beta1.NotificationConfig</code>
 */
class NotificationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The relative resource name of this notification config. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/{organization_id}/notificationConfigs/notify_public_bucket".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The description of the notification config (max of 1024 characters).
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * The type of events the config is for, e.g. FINDING.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.NotificationConfig.EventType event_type = 3;</code>
     */
    private $event_type = 0;
    /**
     * The Pub/Sub topic to send notifications to. Its format is
     * "projects/[project_id]/topics/[topic]".
     *
     * Generated from protobuf field <code>string pubsub_topic = 4 [(.google.api.resource_reference) = {</code>
     */
    private $pubsub_topic = '';
    /**
     * Output only. The service account that needs "pubsub.topics.publish"
     * permission to publish to the Pub/Sub topic.
     *
     * Generated from protobuf field <code>string service_account = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $service_account = '';
    protected $notify_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The relative resource name of this notification config. See:
     *           https://cloud.google.com/apis/design/resource_names#relative_resource_name
     *           Example:
     *           "organizations/{organization_id}/notificationConfigs/notify_public_bucket".
     *     @type string $description
     *           The description of the notification config (max of 1024 characters).
     *     @type int $event_type
     *           The type of events the config is for, e.g. FINDING.
     *     @type string $pubsub_topic
     *           The Pub/Sub topic to send notifications to. Its format is
     *           "projects/[project_id]/topics/[topic]".
     *     @type string $service_account
     *           Output only. The service account that needs "pubsub.topics.publish"
     *           permission to publish to the Pub/Sub topic.
     *     @type \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig\StreamingConfig $streaming_config
     *           The config for triggering streaming-based notifications.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\NotificationConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * The relative resource name of this notification config. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/{organization_id}/notificationConfigs/notify_public_bucket".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The relative resource name of this notification config. See:
     * https://cloud.google.com/apis/design/resource_names#relative_resource_name
     * Example:
     * "organizations/{organization_id}/notificationConfigs/notify_public_bucket".
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The description of the notification config (max of 1024 characters).
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the notification config (max of 1024 characters).
     *
     * Generated from protobuf field <code>string description = 2;</code>
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
     * The type of events the config is for, e.g. FINDING.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.NotificationConfig.EventType event_type = 3;</code>
     * @return int
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * The type of events the config is for, e.g. FINDING.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.NotificationConfig.EventType event_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig\EventType::class);
        $this->event_type = $var;

        return $this;
    }

    /**
     * The Pub/Sub topic to send notifications to. Its format is
     * "projects/[project_id]/topics/[topic]".
     *
     * Generated from protobuf field <code>string pubsub_topic = 4 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getPubsubTopic()
    {
        return $this->pubsub_topic;
    }

    /**
     * The Pub/Sub topic to send notifications to. Its format is
     * "projects/[project_id]/topics/[topic]".
     *
     * Generated from protobuf field <code>string pubsub_topic = 4 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPubsubTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->pubsub_topic = $var;

        return $this;
    }

    /**
     * Output only. The service account that needs "pubsub.topics.publish"
     * permission to publish to the Pub/Sub topic.
     *
     * Generated from protobuf field <code>string service_account = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Output only. The service account that needs "pubsub.topics.publish"
     * permission to publish to the Pub/Sub topic.
     *
     * Generated from protobuf field <code>string service_account = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * The config for triggering streaming-based notifications.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.NotificationConfig.StreamingConfig streaming_config = 6;</code>
     * @return \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig\StreamingConfig|null
     */
    public function getStreamingConfig()
    {
        return $this->readOneof(6);
    }

    public function hasStreamingConfig()
    {
        return $this->hasOneof(6);
    }

    /**
     * The config for triggering streaming-based notifications.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.NotificationConfig.StreamingConfig streaming_config = 6;</code>
     * @param \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig\StreamingConfig $var
     * @return $this
     */
    public function setStreamingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig\StreamingConfig::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getNotifyConfig()
    {
        return $this->whichOneof("notify_config");
    }

}

