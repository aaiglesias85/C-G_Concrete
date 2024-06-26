<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GlobalNetworkEndpointGroupsAttachEndpointsRequest</code>
 */
class GlobalNetworkEndpointGroupsAttachEndpointsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of network endpoints to be attached.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkEndpoint network_endpoints = 149850285;</code>
     */
    private $network_endpoints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\NetworkEndpoint[]|\Google\Protobuf\Internal\RepeatedField $network_endpoints
     *           The list of network endpoints to be attached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of network endpoints to be attached.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkEndpoint network_endpoints = 149850285;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkEndpoints()
    {
        return $this->network_endpoints;
    }

    /**
     * The list of network endpoints to be attached.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkEndpoint network_endpoints = 149850285;</code>
     * @param \Google\Cloud\Compute\V1\NetworkEndpoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkEndpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\NetworkEndpoint::class);
        $this->network_endpoints = $arr;

        return $this;
    }

}

