<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/eventarc.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the UpdateChannel method.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.UpdateChannelRequest</code>
 */
class UpdateChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The channel to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.Channel channel = 1;</code>
     */
    private $channel = null;
    /**
     * The fields to be updated; only fields explicitly provided are updated.
     * If no field mask is provided, all provided fields in the request are
     * updated. To update all fields, provide a field mask of "*".
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;
    /**
     * Required. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Eventarc\V1\Channel $channel
     *           The channel to be updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The fields to be updated; only fields explicitly provided are updated.
     *           If no field mask is provided, all provided fields in the request are
     *           updated. To update all fields, provide a field mask of "*".
     *     @type bool $validate_only
     *           Required. If set, validate the request and preview the review, but do not
     *           post it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Eventarc::initOnce();
        parent::__construct($data);
    }

    /**
     * The channel to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.Channel channel = 1;</code>
     * @return \Google\Cloud\Eventarc\V1\Channel|null
     */
    public function getChannel()
    {
        return $this->channel;
    }

    public function hasChannel()
    {
        return isset($this->channel);
    }

    public function clearChannel()
    {
        unset($this->channel);
    }

    /**
     * The channel to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.Channel channel = 1;</code>
     * @param \Google\Cloud\Eventarc\V1\Channel $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Eventarc\V1\Channel::class);
        $this->channel = $var;

        return $this;
    }

    /**
     * The fields to be updated; only fields explicitly provided are updated.
     * If no field mask is provided, all provided fields in the request are
     * updated. To update all fields, provide a field mask of "*".
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
     * The fields to be updated; only fields explicitly provided are updated.
     * If no field mask is provided, all provided fields in the request are
     * updated. To update all fields, provide a field mask of "*".
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

    /**
     * Required. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Required. If set, validate the request and preview the review, but do not
     * post it.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

