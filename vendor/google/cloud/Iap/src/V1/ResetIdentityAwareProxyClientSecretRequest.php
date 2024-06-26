<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to ResetIdentityAwareProxyClientSecret.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.ResetIdentityAwareProxyClientSecretRequest</code>
 */
class ResetIdentityAwareProxyClientSecretRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the Identity Aware Proxy client to that will have its
     * secret reset. In the following format:
     * projects/{project_number/id}/brands/{brand}/identityAwareProxyClients/{client_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the Identity Aware Proxy client to that will have its
     *           secret reset. In the following format:
     *           projects/{project_number/id}/brands/{brand}/identityAwareProxyClients/{client_id}.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the Identity Aware Proxy client to that will have its
     * secret reset. In the following format:
     * projects/{project_number/id}/brands/{brand}/identityAwareProxyClients/{client_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the Identity Aware Proxy client to that will have its
     * secret reset. In the following format:
     * projects/{project_number/id}/brands/{brand}/identityAwareProxyClients/{client_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

