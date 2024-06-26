<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Scheduler settings for standard environment.
 *
 * Generated from protobuf message <code>google.appengine.v1.StandardSchedulerSettings</code>
 */
class StandardSchedulerSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Target CPU utilization ratio to maintain when scaling.
     *
     * Generated from protobuf field <code>double target_cpu_utilization = 1;</code>
     */
    private $target_cpu_utilization = 0.0;
    /**
     * Target throughput utilization ratio to maintain when scaling
     *
     * Generated from protobuf field <code>double target_throughput_utilization = 2;</code>
     */
    private $target_throughput_utilization = 0.0;
    /**
     * Minimum number of instances to run for this version. Set to zero to disable
     * `min_instances` configuration.
     *
     * Generated from protobuf field <code>int32 min_instances = 3;</code>
     */
    private $min_instances = 0;
    /**
     * Maximum number of instances to run for this version. Set to zero to disable
     * `max_instances` configuration.
     *
     * Generated from protobuf field <code>int32 max_instances = 4;</code>
     */
    private $max_instances = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $target_cpu_utilization
     *           Target CPU utilization ratio to maintain when scaling.
     *     @type float $target_throughput_utilization
     *           Target throughput utilization ratio to maintain when scaling
     *     @type int $min_instances
     *           Minimum number of instances to run for this version. Set to zero to disable
     *           `min_instances` configuration.
     *     @type int $max_instances
     *           Maximum number of instances to run for this version. Set to zero to disable
     *           `max_instances` configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Target CPU utilization ratio to maintain when scaling.
     *
     * Generated from protobuf field <code>double target_cpu_utilization = 1;</code>
     * @return float
     */
    public function getTargetCpuUtilization()
    {
        return $this->target_cpu_utilization;
    }

    /**
     * Target CPU utilization ratio to maintain when scaling.
     *
     * Generated from protobuf field <code>double target_cpu_utilization = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setTargetCpuUtilization($var)
    {
        GPBUtil::checkDouble($var);
        $this->target_cpu_utilization = $var;

        return $this;
    }

    /**
     * Target throughput utilization ratio to maintain when scaling
     *
     * Generated from protobuf field <code>double target_throughput_utilization = 2;</code>
     * @return float
     */
    public function getTargetThroughputUtilization()
    {
        return $this->target_throughput_utilization;
    }

    /**
     * Target throughput utilization ratio to maintain when scaling
     *
     * Generated from protobuf field <code>double target_throughput_utilization = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setTargetThroughputUtilization($var)
    {
        GPBUtil::checkDouble($var);
        $this->target_throughput_utilization = $var;

        return $this;
    }

    /**
     * Minimum number of instances to run for this version. Set to zero to disable
     * `min_instances` configuration.
     *
     * Generated from protobuf field <code>int32 min_instances = 3;</code>
     * @return int
     */
    public function getMinInstances()
    {
        return $this->min_instances;
    }

    /**
     * Minimum number of instances to run for this version. Set to zero to disable
     * `min_instances` configuration.
     *
     * Generated from protobuf field <code>int32 min_instances = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMinInstances($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_instances = $var;

        return $this;
    }

    /**
     * Maximum number of instances to run for this version. Set to zero to disable
     * `max_instances` configuration.
     *
     * Generated from protobuf field <code>int32 max_instances = 4;</code>
     * @return int
     */
    public function getMaxInstances()
    {
        return $this->max_instances;
    }

    /**
     * Maximum number of instances to run for this version. Set to zero to disable
     * `max_instances` configuration.
     *
     * Generated from protobuf field <code>int32 max_instances = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxInstances($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_instances = $var;

        return $this;
    }

}

