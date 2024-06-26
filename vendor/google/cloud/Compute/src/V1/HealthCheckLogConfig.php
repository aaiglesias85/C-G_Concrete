<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of logging on a health check. If logging is enabled, logs will be exported to Stackdriver.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HealthCheckLogConfig</code>
 */
class HealthCheckLogConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates whether or not to export logs. This is false by default, which means no health check logging will be done.
     *
     * Generated from protobuf field <code>optional bool enable = 311764355;</code>
     */
    private $enable = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable
     *           Indicates whether or not to export logs. This is false by default, which means no health check logging will be done.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates whether or not to export logs. This is false by default, which means no health check logging will be done.
     *
     * Generated from protobuf field <code>optional bool enable = 311764355;</code>
     * @return bool
     */
    public function getEnable()
    {
        return isset($this->enable) ? $this->enable : false;
    }

    public function hasEnable()
    {
        return isset($this->enable);
    }

    public function clearEnable()
    {
        unset($this->enable);
    }

    /**
     * Indicates whether or not to export logs. This is false by default, which means no health check logging will be done.
     *
     * Generated from protobuf field <code>optional bool enable = 311764355;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnable($var)
    {
        GPBUtil::checkBool($var);
        $this->enable = $var;

        return $this;
    }

}

