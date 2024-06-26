<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/serviceusage/v1/serviceusage.proto

namespace Google\Cloud\ServiceUsage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the `BatchEnableServices` method.
 * This response message is assigned to the `response` field of the returned
 * Operation when that operation is done.
 *
 * Generated from protobuf message <code>google.api.serviceusage.v1.BatchEnableServicesResponse</code>
 */
class BatchEnableServicesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The new state of the services after enabling.
     *
     * Generated from protobuf field <code>repeated .google.api.serviceusage.v1.Service services = 1;</code>
     */
    private $services;
    /**
     * If allow_partial_success is true, and one or more services could not be
     * enabled, this field contains the details about each failure.
     *
     * Generated from protobuf field <code>repeated .google.api.serviceusage.v1.BatchEnableServicesResponse.EnableFailure failures = 2;</code>
     */
    private $failures;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ServiceUsage\V1\Service[]|\Google\Protobuf\Internal\RepeatedField $services
     *           The new state of the services after enabling.
     *     @type \Google\Cloud\ServiceUsage\V1\BatchEnableServicesResponse\EnableFailure[]|\Google\Protobuf\Internal\RepeatedField $failures
     *           If allow_partial_success is true, and one or more services could not be
     *           enabled, this field contains the details about each failure.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Serviceusage\V1\Serviceusage::initOnce();
        parent::__construct($data);
    }

    /**
     * The new state of the services after enabling.
     *
     * Generated from protobuf field <code>repeated .google.api.serviceusage.v1.Service services = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * The new state of the services after enabling.
     *
     * Generated from protobuf field <code>repeated .google.api.serviceusage.v1.Service services = 1;</code>
     * @param \Google\Cloud\ServiceUsage\V1\Service[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ServiceUsage\V1\Service::class);
        $this->services = $arr;

        return $this;
    }

    /**
     * If allow_partial_success is true, and one or more services could not be
     * enabled, this field contains the details about each failure.
     *
     * Generated from protobuf field <code>repeated .google.api.serviceusage.v1.BatchEnableServicesResponse.EnableFailure failures = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFailures()
    {
        return $this->failures;
    }

    /**
     * If allow_partial_success is true, and one or more services could not be
     * enabled, this field contains the details about each failure.
     *
     * Generated from protobuf field <code>repeated .google.api.serviceusage.v1.BatchEnableServicesResponse.EnableFailure failures = 2;</code>
     * @param \Google\Cloud\ServiceUsage\V1\BatchEnableServicesResponse\EnableFailure[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFailures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ServiceUsage\V1\BatchEnableServicesResponse\EnableFailure::class);
        $this->failures = $arr;

        return $this;
    }

}

