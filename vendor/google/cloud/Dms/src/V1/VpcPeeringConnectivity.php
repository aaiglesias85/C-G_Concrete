<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The details of the VPC where the source database is located in Google Cloud.
 * We will use this information to set up the VPC peering connection between
 * Cloud SQL and this VPC.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.VpcPeeringConnectivity</code>
 */
class VpcPeeringConnectivity extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the VPC network to peer with the Cloud SQL private network.
     *
     * Generated from protobuf field <code>string vpc = 1;</code>
     */
    private $vpc = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $vpc
     *           The name of the VPC network to peer with the Cloud SQL private network.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ClouddmsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the VPC network to peer with the Cloud SQL private network.
     *
     * Generated from protobuf field <code>string vpc = 1;</code>
     * @return string
     */
    public function getVpc()
    {
        return $this->vpc;
    }

    /**
     * The name of the VPC network to peer with the Cloud SQL private network.
     *
     * Generated from protobuf field <code>string vpc = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVpc($var)
    {
        GPBUtil::checkString($var, True);
        $this->vpc = $var;

        return $this;
    }

}

