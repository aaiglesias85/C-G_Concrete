<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/serviceusage/v1/serviceusage.proto

namespace Google\Cloud\ServiceUsage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the `DisableService` method.
 * This response message is assigned to the `response` field of the returned
 * Operation when that operation is done.
 *
 * Generated from protobuf message <code>google.api.serviceusage.v1.DisableServiceResponse</code>
 */
class DisableServiceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The new state of the service after disabling.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.Service service = 1;</code>
     */
    private $service = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ServiceUsage\V1\Service $service
     *           The new state of the service after disabling.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Serviceusage\V1\Serviceusage::initOnce();
        parent::__construct($data);
    }

    /**
     * The new state of the service after disabling.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.Service service = 1;</code>
     * @return \Google\Cloud\ServiceUsage\V1\Service|null
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
     * The new state of the service after disabling.
     *
     * Generated from protobuf field <code>.google.api.serviceusage.v1.Service service = 1;</code>
     * @param \Google\Cloud\ServiceUsage\V1\Service $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ServiceUsage\V1\Service::class);
        $this->service = $var;

        return $this;
    }

}

