<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/metrics.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to get information about a particular execution stage of a job.
 * Currently only tracked for Batch jobs.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.GetStageExecutionDetailsRequest</code>
 */
class GetStageExecutionDetailsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A project id.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The job to get execution details for.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     */
    private $job_id = '';
    /**
     * The [regional endpoint]
     * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     * contains the job specified by job_id.
     *
     * Generated from protobuf field <code>string location = 3;</code>
     */
    private $location = '';
    /**
     * The stage for which to fetch information.
     *
     * Generated from protobuf field <code>string stage_id = 4;</code>
     */
    private $stage_id = '';
    /**
     * If specified, determines the maximum number of work items to
     * return.  If unspecified, the service may choose an appropriate
     * default, or may return an arbitrarily large number of results.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     */
    private $page_size = 0;
    /**
     * If supplied, this should be the value of next_page_token returned
     * by an earlier call. This will cause the next page of results to
     * be returned.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     */
    private $page_token = '';
    /**
     * Lower time bound of work items to include, by start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     */
    private $start_time = null;
    /**
     * Upper time bound of work items to include, by start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8;</code>
     */
    private $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           A project id.
     *     @type string $job_id
     *           The job to get execution details for.
     *     @type string $location
     *           The [regional endpoint]
     *           (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     *           contains the job specified by job_id.
     *     @type string $stage_id
     *           The stage for which to fetch information.
     *     @type int $page_size
     *           If specified, determines the maximum number of work items to
     *           return.  If unspecified, the service may choose an appropriate
     *           default, or may return an arbitrarily large number of results.
     *     @type string $page_token
     *           If supplied, this should be the value of next_page_token returned
     *           by an earlier call. This will cause the next page of results to
     *           be returned.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Lower time bound of work items to include, by start time.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Upper time bound of work items to include, by start time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Metrics::initOnce();
        parent::__construct($data);
    }

    /**
     * A project id.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * A project id.
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
     * The job to get execution details for.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * The job to get execution details for.
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
     * The [regional endpoint]
     * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     * contains the job specified by job_id.
     *
     * Generated from protobuf field <code>string location = 3;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The [regional endpoint]
     * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     * contains the job specified by job_id.
     *
     * Generated from protobuf field <code>string location = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * The stage for which to fetch information.
     *
     * Generated from protobuf field <code>string stage_id = 4;</code>
     * @return string
     */
    public function getStageId()
    {
        return $this->stage_id;
    }

    /**
     * The stage for which to fetch information.
     *
     * Generated from protobuf field <code>string stage_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stage_id = $var;

        return $this;
    }

    /**
     * If specified, determines the maximum number of work items to
     * return.  If unspecified, the service may choose an appropriate
     * default, or may return an arbitrarily large number of results.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * If specified, determines the maximum number of work items to
     * return.  If unspecified, the service may choose an appropriate
     * default, or may return an arbitrarily large number of results.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If supplied, this should be the value of next_page_token returned
     * by an earlier call. This will cause the next page of results to
     * be returned.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If supplied, this should be the value of next_page_token returned
     * by an earlier call. This will cause the next page of results to
     * be returned.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Lower time bound of work items to include, by start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
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
     * Lower time bound of work items to include, by start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
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
     * Upper time bound of work items to include, by start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8;</code>
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
     * Upper time bound of work items to include, by start time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

