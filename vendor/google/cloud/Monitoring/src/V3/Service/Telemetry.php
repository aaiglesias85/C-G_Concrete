<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3\Service;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for how to query telemetry on a Service.
 *
 * Generated from protobuf message <code>google.monitoring.v3.Service.Telemetry</code>
 */
class Telemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * The full name of the resource that defines this service. Formatted as
     * described in https://cloud.google.com/apis/design/resource_names.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The full name of the resource that defines this service. Formatted as
     *           described in https://cloud.google.com/apis/design/resource_names.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The full name of the resource that defines this service. Formatted as
     * described in https://cloud.google.com/apis/design/resource_names.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The full name of the resource that defines this service. Formatted as
     * described in https://cloud.google.com/apis/design/resource_names.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Telemetry::class, \Google\Cloud\Monitoring\V3\Service_Telemetry::class);

