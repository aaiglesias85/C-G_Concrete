<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/tasks.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A job represents an instance of a task.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Job</code>
 */
class Job extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative resource name of the job, of the form:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/tasks/{task_id}/jobs/{job_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Output only. System generated globally unique ID for the job.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uid = '';
    /**
     * Output only. The time when the job was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $start_time = null;
    /**
     * Output only. The time when the job ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $end_time = null;
    /**
     * Output only. Execution state for the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The number of times the job has been retried (excluding the
     * initial attempt).
     *
     * Generated from protobuf field <code>uint32 retry_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $retry_count = 0;
    /**
     * Output only. The underlying service running a job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job.Service service = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $service = 0;
    /**
     * Output only. The full resource name for the job run under a particular service.
     *
     * Generated from protobuf field <code>string service_job = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $service_job = '';
    /**
     * Output only. Additional information about the current state.
     *
     * Generated from protobuf field <code>string message = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The relative resource name of the job, of the form:
     *           `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/tasks/{task_id}/jobs/{job_id}`.
     *     @type string $uid
     *           Output only. System generated globally unique ID for the job.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. The time when the job was started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. The time when the job ended.
     *     @type int $state
     *           Output only. Execution state for the job.
     *     @type int $retry_count
     *           Output only. The number of times the job has been retried (excluding the
     *           initial attempt).
     *     @type int $service
     *           Output only. The underlying service running a job.
     *     @type string $service_job
     *           Output only. The full resource name for the job run under a particular service.
     *     @type string $message
     *           Output only. Additional information about the current state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Tasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative resource name of the job, of the form:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/tasks/{task_id}/jobs/{job_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The relative resource name of the job, of the form:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/tasks/{task_id}/jobs/{job_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. System generated globally unique ID for the job.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System generated globally unique ID for the job.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The time when the job was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the job was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the job ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. The time when the job ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. Execution state for the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Execution state for the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\Job\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The number of times the job has been retried (excluding the
     * initial attempt).
     *
     * Generated from protobuf field <code>uint32 retry_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRetryCount()
    {
        return $this->retry_count;
    }

    /**
     * Output only. The number of times the job has been retried (excluding the
     * initial attempt).
     *
     * Generated from protobuf field <code>uint32 retry_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRetryCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->retry_count = $var;

        return $this;
    }

    /**
     * Output only. The underlying service running a job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job.Service service = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Output only. The underlying service running a job.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Job.Service service = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\Job\Service::class);
        $this->service = $var;

        return $this;
    }

    /**
     * Output only. The full resource name for the job run under a particular service.
     *
     * Generated from protobuf field <code>string service_job = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getServiceJob()
    {
        return $this->service_job;
    }

    /**
     * Output only. The full resource name for the job run under a particular service.
     *
     * Generated from protobuf field <code>string service_job = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceJob($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_job = $var;

        return $this;
    }

    /**
     * Output only. Additional information about the current state.
     *
     * Generated from protobuf field <code>string message = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Output only. Additional information about the current state.
     *
     * Generated from protobuf field <code>string message = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

