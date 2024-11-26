<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Errors</code>
 */
class Errors extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The error type identifier for this error.
     *
     * Generated from protobuf field <code>optional string code = 3059181;</code>
     */
    private $code = null;
    /**
     * [Output Only] Indicates the field in the request that caused the error. This property is optional.
     *
     * Generated from protobuf field <code>optional string location = 290430901;</code>
     */
    private $location = null;
    /**
     * [Output Only] An optional, human-readable error message.
     *
     * Generated from protobuf field <code>optional string message = 418054151;</code>
     */
    private $message = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     *           [Output Only] The error type identifier for this error.
     *     @type string $location
     *           [Output Only] Indicates the field in the request that caused the error. This property is optional.
     *     @type string $message
     *           [Output Only] An optional, human-readable error message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The error type identifier for this error.
     *
     * Generated from protobuf field <code>optional string code = 3059181;</code>
     * @return string
     */
    public function getCode()
    {
        return isset($this->code) ? $this->code : '';
    }

    public function hasCode()
    {
        return isset($this->code);
    }

    public function clearCode()
    {
        unset($this->code);
    }

    /**
     * [Output Only] The error type identifier for this error.
     *
     * Generated from protobuf field <code>optional string code = 3059181;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * [Output Only] Indicates the field in the request that caused the error. This property is optional.
     *
     * Generated from protobuf field <code>optional string location = 290430901;</code>
     * @return string
     */
    public function getLocation()
    {
        return isset($this->location) ? $this->location : '';
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * [Output Only] Indicates the field in the request that caused the error. This property is optional.
     *
     * Generated from protobuf field <code>optional string location = 290430901;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * [Output Only] An optional, human-readable error message.
     *
     * Generated from protobuf field <code>optional string message = 418054151;</code>
     * @return string
     */
    public function getMessage()
    {
        return isset($this->message) ? $this->message : '';
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * [Output Only] An optional, human-readable error message.
     *
     * Generated from protobuf field <code>optional string message = 418054151;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

