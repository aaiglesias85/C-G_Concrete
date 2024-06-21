<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1/registration_service.proto

namespace Google\Cloud\ServiceDirectory\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [RegistrationService.UpdateService][google.cloud.servicedirectory.v1.RegistrationService.UpdateService].
 *
 * Generated from protobuf message <code>google.cloud.servicedirectory.v1.UpdateServiceRequest</code>
 */
class UpdateServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The updated service.
     *
     * Generated from protobuf field <code>.google.cloud.servicedirectory.v1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service = null;
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
     *     @type \Google\Cloud\ServiceDirectory\V1\Service $service
     *           Required. The updated service.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. List of fields to be updated in this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicedirectory\V1\RegistrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The updated service.
     *
     * Generated from protobuf field <code>.google.cloud.servicedirectory.v1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ServiceDirectory\V1\Service|null
     */
    public function getService()
    {
        return $this->service;
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * Required. The updated service.
     *
     * Generated from protobuf field <code>.google.cloud.servicedirectory.v1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ServiceDirectory\V1\Service $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ServiceDirectory\V1\Service::class);
        $this->service = $var;

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

