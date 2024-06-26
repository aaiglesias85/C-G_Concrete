<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/job_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [JobService.CreateDataLabelingJob][google.cloud.aiplatform.v1.JobService.CreateDataLabelingJob].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateDataLabelingJobRequest</code>
 */
class CreateDataLabelingJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent of the DataLabelingJob.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The DataLabelingJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DataLabelingJob data_labeling_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $data_labeling_job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent of the DataLabelingJob.
     *           Format: `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\AIPlatform\V1\DataLabelingJob $data_labeling_job
     *           Required. The DataLabelingJob to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent of the DataLabelingJob.
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
     * Required. The parent of the DataLabelingJob.
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
     * Required. The DataLabelingJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DataLabelingJob data_labeling_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\DataLabelingJob|null
     */
    public function getDataLabelingJob()
    {
        return $this->data_labeling_job;
    }

    public function hasDataLabelingJob()
    {
        return isset($this->data_labeling_job);
    }

    public function clearDataLabelingJob()
    {
        unset($this->data_labeling_job);
    }

    /**
     * Required. The DataLabelingJob to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DataLabelingJob data_labeling_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\DataLabelingJob $var
     * @return $this
     */
    public function setDataLabelingJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DataLabelingJob::class);
        $this->data_labeling_job = $var;

        return $this;
    }

}

