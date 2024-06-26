<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstancesSetServiceAccountRequest</code>
 */
class InstancesSetServiceAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Email address of the service account.
     *
     * Generated from protobuf field <code>optional string email = 96619420;</code>
     */
    private $email = null;
    /**
     * The list of scopes to be made available for this service account.
     *
     * Generated from protobuf field <code>repeated string scopes = 165973151;</code>
     */
    private $scopes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *           Email address of the service account.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $scopes
     *           The list of scopes to be made available for this service account.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Email address of the service account.
     *
     * Generated from protobuf field <code>optional string email = 96619420;</code>
     * @return string
     */
    public function getEmail()
    {
        return isset($this->email) ? $this->email : '';
    }

    public function hasEmail()
    {
        return isset($this->email);
    }

    public function clearEmail()
    {
        unset($this->email);
    }

    /**
     * Email address of the service account.
     *
     * Generated from protobuf field <code>optional string email = 96619420;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * The list of scopes to be made available for this service account.
     *
     * Generated from protobuf field <code>repeated string scopes = 165973151;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * The list of scopes to be made available for this service account.
     *
     * Generated from protobuf field <code>repeated string scopes = 165973151;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scopes = $arr;

        return $this;
    }

}

