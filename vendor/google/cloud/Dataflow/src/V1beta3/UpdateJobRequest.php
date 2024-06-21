<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to update a Cloud Dataflow job.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.UpdateJobRequest</code>
 */
class UpdateJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the Cloud Platform project that the job belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The job ID.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     */
    private $job_id = '';
    /**
     * The updated job.
     * Only the job state is updatable; other fields will be ignored.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.Job job = 3;</code>
     */
    private $job = null;
    /**
     * The [regional endpoint]
     * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     * contains this job.
     *
     * Generated from protobuf field <code>string location = 4;</code>
     */
    private $location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           The ID of the Cloud Platform project that the job belongs to.
     *     @type string $job_id
     *           The job ID.
     *     @type \Google\Cloud\Dataflow\V1beta3\Job $job
     *           The updated job.
     *           Only the job state is updatable; other fields will be ignored.
     *     @type string $location
     *           The [regional endpoint]
     *           (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     *           contains this job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the Cloud Platform project that the job belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The ID of the Cloud Platform project that the job belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The job ID.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * The job ID.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
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
     * The updated job.
     * Only the job state is updatable; other fields will be ignored.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.Job job = 3;</code>
     * @return \Google\Cloud\Dataflow\V1beta3\Job|null
     */
    public function getJob()
    {
        return $this->job;
    }

    public function hasJob()
    {
        return isset($this->job);
    }

    public function clearJob()
    {
        unset($this->job);
    }

    /**
     * The updated job.
     * Only the job state is updatable; other fields will be ignored.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.Job job = 3;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataflow\V1beta3\Job::class);
        $this->job = $var;

        return $this;
    }

    /**
     * The [regional endpoint]
     * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     * contains this job.
     *
     * Generated from protobuf field <code>string location = 4;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The [regional endpoint]
     * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     * contains this job.
     *
     * Generated from protobuf field <code>string location = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

}

