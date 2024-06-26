<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SecurityPolicyReference</code>
 */
class SecurityPolicyReference extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string security_policy = 171082513;</code>
     */
    private $security_policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $security_policy
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string security_policy = 171082513;</code>
     * @return string
     */
    public function getSecurityPolicy()
    {
        return isset($this->security_policy) ? $this->security_policy : '';
    }

    public function hasSecurityPolicy()
    {
        return isset($this->security_policy);
    }

    public function clearSecurityPolicy()
    {
        unset($this->security_policy);
    }

    /**
     * Generated from protobuf field <code>optional string security_policy = 171082513;</code>
     * @param string $var
     * @return $this
     */
    public function setSecurityPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->security_policy = $var;

        return $this;
    }

}

