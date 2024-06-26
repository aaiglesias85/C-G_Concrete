<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1beta1/tls.proto

namespace Google\Cloud\NetworkSecurity\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification of the GRPC Endpoint.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1beta1.GrpcEndpoint</code>
 */
class GrpcEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The target URI of the gRPC endpoint. Only UDS path is supported, and
     * should start with “unix:”.
     *
     * Generated from protobuf field <code>string target_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $target_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $target_uri
     *           Required. The target URI of the gRPC endpoint. Only UDS path is supported, and
     *           should start with “unix:”.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1Beta1\Tls::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The target URI of the gRPC endpoint. Only UDS path is supported, and
     * should start with “unix:”.
     *
     * Generated from protobuf field <code>string target_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetUri()
    {
        return $this->target_uri;
    }

    /**
     * Required. The target URI of the gRPC endpoint. Only UDS path is supported, and
     * should start with “unix:”.
     *
     * Generated from protobuf field <code>string target_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_uri = $var;

        return $this;
    }

}

