<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Job Operation metadata.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.JobMetadata</code>
 */
class JobMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The job id.
     *
     * Generated from protobuf field <code>string job_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $job_id = '';
    /**
     * Output only. Most recent job status.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobStatus status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $status = null;
    /**
     * Output only. Operation type.
     *
     * Generated from protobuf field <code>string operation_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $operation_type = '';
    /**
     * Output only. Job submission time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $start_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $job_id
     *           Output only. The job id.
     *     @type \Google\Cloud\Dataproc\V1\JobStatus $status
     *           Output only. Most recent job status.
     *     @type string $operation_type
     *           Output only. Operation type.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Job submission time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The job id.
     *
     * Generated from protobuf field <code>string job_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Output only. The job id.
     *
     * Generated from protobuf field <code>string job_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * Output only. Most recent job status.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobStatus status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataproc\V1\JobStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Output only. Most recent job status.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.JobStatus status = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataproc\V1\JobStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\JobStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. Operation type.
     *
     * Generated from protobuf field <code>string operation_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     * Output only. Operation type.
     *
     * Generated from protobuf field <code>string operation_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOperationType($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_type = $var;

        return $this;
    }

    /**
     * Output only. Job submission time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. Job submission time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

}

