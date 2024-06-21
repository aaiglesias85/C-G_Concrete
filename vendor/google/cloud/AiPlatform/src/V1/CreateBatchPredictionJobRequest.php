<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/job_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [JobService.CreateBatchPredictionJob][google.cloud.aiplatform.v1.JobService.CreateBatchPredictionJob].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateBatchPredictionJobRequest</code>
 */
class CreateBatchPredictionJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to create the BatchPredictionJob in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The BatchPredictionJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BatchPredictionJob batch_prediction_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $batch_prediction_job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to create the BatchPredictionJob in.
     *           Format: `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\AIPlatform\V1\BatchPredictionJob $batch_prediction_job
     *           Required. The BatchPredictionJob to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to create the BatchPredictionJob in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to create the BatchPredictionJob in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The BatchPredictionJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BatchPredictionJob batch_prediction_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\BatchPredictionJob|null
     */
    public function getBatchPredictionJob()
    {
        return $this->batch_prediction_job;
    }

    public function hasBatchPredictionJob()
    {
        return isset($this->batch_prediction_job);
    }

    public function clearBatchPredictionJob()
    {
        unset($this->batch_prediction_job);
    }

    /**
     * Required. The BatchPredictionJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BatchPredictionJob batch_prediction_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\BatchPredictionJob $var
     * @return $this
     */
    public function setBatchPredictionJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\BatchPredictionJob::class);
        $this->batch_prediction_job = $var;

        return $this;
    }

}

