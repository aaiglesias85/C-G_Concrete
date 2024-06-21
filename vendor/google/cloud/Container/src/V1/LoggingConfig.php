<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LoggingConfig is cluster logging configuration.
 *
 * Generated from protobuf message <code>google.container.v1.LoggingConfig</code>
 */
class LoggingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Logging components configuration
     *
     * Generated from protobuf field <code>.google.container.v1.LoggingComponentConfig component_config = 1;</code>
     */
    private $component_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Container\V1\LoggingComponentConfig $component_config
     *           Logging components configuration
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Logging components configuration
     *
     * Generated from protobuf field <code>.google.container.v1.LoggingComponentConfig component_config = 1;</code>
     * @return \Google\Cloud\Container\V1\LoggingComponentConfig|null
     */
    public function getComponentConfig()
    {
        return $this->component_config;
    }

    public function hasComponentConfig()
    {
        return isset($this->component_config);
    }

    public function clearComponentConfig()
    {
        unset($this->component_config);
    }

    /**
     * Logging components configuration
     *
     * Generated from protobuf field <code>.google.container.v1.LoggingComponentConfig component_config = 1;</code>
     * @param \Google\Cloud\Container\V1\LoggingComponentConfig $var
     * @return $this
     */
    public function setComponentConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\LoggingComponentConfig::class);
        $this->component_config = $var;

        return $this;
    }

}

