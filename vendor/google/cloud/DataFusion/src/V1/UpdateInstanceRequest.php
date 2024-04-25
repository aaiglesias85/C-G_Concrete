<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datafusion/v1/datafusion.proto

namespace Google\Cloud\DataFusion\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating a Data Fusion instance.
 * Data Fusion allows updating the labels, options, and stack driver settings.
 * This is also used for CDF version upgrade.
 *
 * Generated from protobuf message <code>google.cloud.datafusion.v1.UpdateInstanceRequest</code>
 */
class UpdateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The instance resource that replaces the resource on the server. Currently,
     * Data Fusion only allows replacing labels, options, and stack driver
     * settings. All other fields will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Instance instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance = null;
    /**
     * Field mask is used to specify the fields that the update will overwrite
     * in an instance resource. The fields specified in the update_mask are
     * relative to the resource, not the full request.
     * A field will be overwritten if it is in the mask.
     * If the user does not provide a mask, all the supported fields (labels,
     * options, and version currently) will be overwritten.
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
     *     @type \Google\Cloud\DataFusion\V1\Instance $instance
     *           Required. The instance resource that replaces the resource on the server. Currently,
     *           Data Fusion only allows replacing labels, options, and stack driver
     *           settings. All other fields will be ignored.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Field mask is used to specify the fields that the update will overwrite
     *           in an instance resource. The fields specified in the update_mask are
     *           relative to the resource, not the full request.
     *           A field will be overwritten if it is in the mask.
     *           If the user does not provide a mask, all the supported fields (labels,
     *           options, and version currently) will be overwritten.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datafusion\V1\Datafusion::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The instance resource that replaces the resource on the server. Currently,
     * Data Fusion only allows replacing labels, options, and stack driver
     * settings. All other fields will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Instance instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataFusion\V1\Instance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Required. The instance resource that replaces the resource on the server. Currently,
     * Data Fusion only allows replacing labels, options, and stack driver
     * settings. All other fields will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Instance instance = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataFusion\V1\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataFusion\V1\Instance::class);
        $this->instance = $var;

        return $this;
    }

    /**
     * Field mask is used to specify the fields that the update will overwrite
     * in an instance resource. The fields specified in the update_mask are
     * relative to the resource, not the full request.
     * A field will be overwritten if it is in the mask.
     * If the user does not provide a mask, all the supported fields (labels,
     * options, and version currently) will be overwritten.
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
     * Field mask is used to specify the fields that the update will overwrite
     * in an instance resource. The fields specified in the update_mask are
     * relative to the resource, not the full request.
     * A field will be overwritten if it is in the mask.
     * If the user does not provide a mask, all the supported fields (labels,
     * options, and version currently) will be overwritten.
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

