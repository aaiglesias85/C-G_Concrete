<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This is deprecated and has no effect. Do not use.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.LogConfigCounterOptionsCustomField</code>
 */
class LogConfigCounterOptionsCustomField extends \Google\Protobuf\Internal\Message
{
    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>optional string value = 111972721;</code>
     */
    private $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           This is deprecated and has no effect. Do not use.
     *     @type string $value
     *           This is deprecated and has no effect. Do not use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>optional string value = 111972721;</code>
     * @return string
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : '';
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>optional string value = 111972721;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

