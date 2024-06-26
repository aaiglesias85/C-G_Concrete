<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MonitoringComponentConfig is cluster monitoring component configuration.
 *
 * Generated from protobuf message <code>google.container.v1.MonitoringComponentConfig</code>
 */
class MonitoringComponentConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Select components to collect metrics. An empty set would disable all
     * monitoring.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.MonitoringComponentConfig.Component enable_components = 1;</code>
     */
    private $enable_components;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $enable_components
     *           Select components to collect metrics. An empty set would disable all
     *           monitoring.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Select components to collect metrics. An empty set would disable all
     * monitoring.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.MonitoringComponentConfig.Component enable_components = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnableComponents()
    {
        return $this->enable_components;
    }

    /**
     * Select components to collect metrics. An empty set would disable all
     * monitoring.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.MonitoringComponentConfig.Component enable_components = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnableComponents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Container\V1\MonitoringComponentConfig\Component::class);
        $this->enable_components = $arr;

        return $this;
    }

}

