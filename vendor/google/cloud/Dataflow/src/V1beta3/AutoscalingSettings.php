<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/environment.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for WorkerPool autoscaling.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.AutoscalingSettings</code>
 */
class AutoscalingSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * The algorithm to use for autoscaling.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.AutoscalingAlgorithm algorithm = 1;</code>
     */
    private $algorithm = 0;
    /**
     * The maximum number of workers to cap scaling at.
     *
     * Generated from protobuf field <code>int32 max_num_workers = 2;</code>
     */
    private $max_num_workers = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $algorithm
     *           The algorithm to use for autoscaling.
     *     @type int $max_num_workers
     *           The maximum number of workers to cap scaling at.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * The algorithm to use for autoscaling.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.AutoscalingAlgorithm algorithm = 1;</code>
     * @return int
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * The algorithm to use for autoscaling.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.AutoscalingAlgorithm algorithm = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\AutoscalingAlgorithm::class);
        $this->algorithm = $var;

        return $this;
    }

    /**
     * The maximum number of workers to cap scaling at.
     *
     * Generated from protobuf field <code>int32 max_num_workers = 2;</code>
     * @return int
     */
    public function getMaxNumWorkers()
    {
        return $this->max_num_workers;
    }

    /**
     * The maximum number of workers to cap scaling at.
     *
     * Generated from protobuf field <code>int32 max_num_workers = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxNumWorkers($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_num_workers = $var;

        return $this;
    }

}

