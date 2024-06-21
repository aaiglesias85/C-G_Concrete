<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating a notification config.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1p1beta1.UpdateNotificationConfigRequest</code>
 */
class UpdateNotificationConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The notification config to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.NotificationConfig notification_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $notification_config = null;
    /**
     * The FieldMask to use when updating the notification config.
     * If empty all mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig $notification_config
     *           Required. The notification config to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The FieldMask to use when updating the notification config.
     *           If empty all mutable fields will be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The notification config to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.NotificationConfig notification_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig|null
     */
    public function getNotificationConfig()
    {
        return $this->notification_config;
    }

    public function hasNotificationConfig()
    {
        return isset($this->notification_config);
    }

    public function clearNotificationConfig()
    {
        unset($this->notification_config);
    }

    /**
     * Required. The notification config to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.NotificationConfig notification_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig $var
     * @return $this
     */
    public function setNotificationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1p1beta1\NotificationConfig::class);
        $this->notification_config = $var;

        return $this;
    }

    /**
     * The FieldMask to use when updating the notification config.
     * If empty all mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The FieldMask to use when updating the notification config.
     * If empty all mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

