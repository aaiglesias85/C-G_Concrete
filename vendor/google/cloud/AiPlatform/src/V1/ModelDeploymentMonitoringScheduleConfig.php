<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_deployment_monitoring_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The config for scheduling monitoring job.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ModelDeploymentMonitoringScheduleConfig</code>
 */
class ModelDeploymentMonitoringScheduleConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The model monitoring job scheduling interval. It will be rounded up to next
     * full hour. This defines how often the monitoring jobs are triggered.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration monitor_interval = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $monitor_interval = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $monitor_interval
     *           Required. The model monitoring job scheduling interval. It will be rounded up to next
     *           full hour. This defines how often the monitoring jobs are triggered.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelDeploymentMonitoringJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The model monitoring job scheduling interval. It will be rounded up to next
     * full hour. This defines how often the monitoring jobs are triggered.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration monitor_interval = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMonitorInterval()
    {
        return $this->monitor_interval;
    }

    public function hasMonitorInterval()
    {
        return isset($this->monitor_interval);
    }

    public function clearMonitorInterval()
    {
        unset($this->monitor_interval);
    }

    /**
     * Required. The model monitoring job scheduling interval. It will be rounded up to next
     * full hour. This defines how often the monitoring jobs are triggered.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration monitor_interval = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMonitorInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->monitor_interval = $var;

        return $this;
    }

}

