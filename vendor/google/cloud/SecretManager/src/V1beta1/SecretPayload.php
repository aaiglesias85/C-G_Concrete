<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secrets/v1beta1/resources.proto

namespace Google\Cloud\SecretManager\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A secret payload resource in the Secret Manager API. This contains the
 * sensitive secret data that is associated with a [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion].
 *
 * Generated from protobuf message <code>google.cloud.secrets.v1beta1.SecretPayload</code>
 */
class SecretPayload extends \Google\Protobuf\Internal\Message
{
    /**
     * The secret data. Must be no larger than 64KiB.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     */
    private $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *           The secret data. Must be no larger than 64KiB.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secrets\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The secret data. Must be no larger than 64KiB.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The secret data. Must be no larger than 64KiB.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

