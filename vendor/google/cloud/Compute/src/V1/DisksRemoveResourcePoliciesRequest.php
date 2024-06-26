<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.DisksRemoveResourcePoliciesRequest</code>
 */
class DisksRemoveResourcePoliciesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource policies to be removed from this disk.
     *
     * Generated from protobuf field <code>repeated string resource_policies = 22220385;</code>
     */
    private $resource_policies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $resource_policies
     *           Resource policies to be removed from this disk.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource policies to be removed from this disk.
     *
     * Generated from protobuf field <code>repeated string resource_policies = 22220385;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourcePolicies()
    {
        return $this->resource_policies;
    }

    /**
     * Resource policies to be removed from this disk.
     *
     * Generated from protobuf field <code>repeated string resource_policies = 22220385;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourcePolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_policies = $arr;

        return $this;
    }

}

