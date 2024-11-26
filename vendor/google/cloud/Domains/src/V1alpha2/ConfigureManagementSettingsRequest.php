<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1alpha2/domains.proto

namespace Google\Cloud\Domains\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ConfigureManagementSettings` method.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1alpha2.ConfigureManagementSettingsRequest</code>
 */
class ConfigureManagementSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the `Registration` whose management settings are being updated,
     * in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     *
     * Generated from protobuf field <code>string registration = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $registration = '';
    /**
     * Fields of the `ManagementSettings` to update.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1alpha2.ManagementSettings management_settings = 2;</code>
     */
    private $management_settings = null;
    /**
     * Required. The field mask describing which fields to update as a comma-separated list.
     * For example, if only the transfer lock is being updated, the `update_mask`
     * is `"transfer_lock_state"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $registration
     *           Required. The name of the `Registration` whose management settings are being updated,
     *           in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     *     @type \Google\Cloud\Domains\V1alpha2\ManagementSettings $management_settings
     *           Fields of the `ManagementSettings` to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The field mask describing which fields to update as a comma-separated list.
     *           For example, if only the transfer lock is being updated, the `update_mask`
     *           is `"transfer_lock_state"`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1Alpha2\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the `Registration` whose management settings are being updated,
     * in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     *
     * Generated from protobuf field <code>string registration = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * Required. The name of the `Registration` whose management settings are being updated,
     * in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     *
     * Generated from protobuf field <code>string registration = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRegistration($var)
    {
        GPBUtil::checkString($var, True);
        $this->registration = $var;

        return $this;
    }

    /**
     * Fields of the `ManagementSettings` to update.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1alpha2.ManagementSettings management_settings = 2;</code>
     * @return \Google\Cloud\Domains\V1alpha2\ManagementSettings|null
     */
    public function getManagementSettings()
    {
        return $this->management_settings;
    }

    public function hasManagementSettings()
    {
        return isset($this->management_settings);
    }

    public function clearManagementSettings()
    {
        unset($this->management_settings);
    }

    /**
     * Fields of the `ManagementSettings` to update.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1alpha2.ManagementSettings management_settings = 2;</code>
     * @param \Google\Cloud\Domains\V1alpha2\ManagementSettings $var
     * @return $this
     */
    public function setManagementSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Domains\V1alpha2\ManagementSettings::class);
        $this->management_settings = $var;

        return $this;
    }

    /**
     * Required. The field mask describing which fields to update as a comma-separated list.
     * For example, if only the transfer lock is being updated, the `update_mask`
     * is `"transfer_lock_state"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The field mask describing which fields to update as a comma-separated list.
     * For example, if only the transfer lock is being updated, the `update_mask`
     * is `"transfer_lock_state"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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

