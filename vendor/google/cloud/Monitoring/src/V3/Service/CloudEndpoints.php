<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3\Service;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud Endpoints service. Learn more at https://cloud.google.com/endpoints.
 *
 * Generated from protobuf message <code>google.monitoring.v3.Service.CloudEndpoints</code>
 */
class CloudEndpoints extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the Cloud Endpoints service underlying this service.
     * Corresponds to the `service` resource label in the `api` monitored
     * resource: https://cloud.google.com/monitoring/api/resources#tag_api
     *
     * Generated from protobuf field <code>string service = 1;</code>
     */
    private $service = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           The name of the Cloud Endpoints service underlying this service.
     *           Corresponds to the `service` resource label in the `api` monitored
     *           resource: https://cloud.google.com/monitoring/api/resources#tag_api
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the Cloud Endpoints service underlying this service.
     * Corresponds to the `service` resource label in the `api` monitored
     * resource: https://cloud.google.com/monitoring/api/resources#tag_api
     *
     * Generated from protobuf field <code>string service = 1;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * The name of the Cloud Endpoints service underlying this service.
     * Corresponds to the `service` resource label in the `api` monitored
     * resource: https://cloud.google.com/monitoring/api/resources#tag_api
     *
     * Generated from protobuf field <code>string service = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudEndpoints::class, \Google\Cloud\Monitoring\V3\Service_CloudEndpoints::class);

