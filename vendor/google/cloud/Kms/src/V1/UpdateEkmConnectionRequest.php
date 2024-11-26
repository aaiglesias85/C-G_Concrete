<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/ekm_service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeyManagementService.UpdateEkmConnection][].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.UpdateEkmConnectionRequest</code>
 */
class UpdateEkmConnectionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. [EkmConnection][google.cloud.kms.v1.EkmConnection] with updated
     * values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.EkmConnection ekm_connection = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ekm_connection = null;
    /**
     * Required. List of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Kms\V1\EkmConnection $ekm_connection
     *           Required. [EkmConnection][google.cloud.kms.v1.EkmConnection] with updated
     *           values.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. List of fields to be updated in this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\EkmService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. [EkmConnection][google.cloud.kms.v1.EkmConnection] with updated
     * values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.EkmConnection ekm_connection = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Kms\V1\EkmConnection|null
     */
    public function getEkmConnection()
    {
        return $this->ekm_connection;
    }

    public function hasEkmConnection()
    {
        return isset($this->ekm_connection);
    }

    public function clearEkmConnection()
    {
        unset($this->ekm_connection);
    }

    /**
     * Required. [EkmConnection][google.cloud.kms.v1.EkmConnection] with updated
     * values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.EkmConnection ekm_connection = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Kms\V1\EkmConnection $var
     * @return $this
     */
    public function setEkmConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\EkmConnection::class);
        $this->ekm_connection = $var;

        return $this;
    }

    /**
     * Required. List of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. List of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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

