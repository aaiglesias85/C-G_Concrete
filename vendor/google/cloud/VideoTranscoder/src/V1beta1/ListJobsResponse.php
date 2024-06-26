<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/services.proto

namespace Google\Cloud\Video\Transcoder\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for `TranscoderService.ListJobs`.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.ListJobsResponse</code>
 */
class ListJobsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of jobs in the specified region.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.Job jobs = 1;</code>
     */
    private $jobs;
    /**
     * The pagination token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\Job[]|\Google\Protobuf\Internal\RepeatedField $jobs
     *           List of jobs in the specified region.
     *     @type string $next_page_token
     *           The pagination token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Services::initOnce();
        parent::__construct($data);
    }

    /**
     * List of jobs in the specified region.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.Job jobs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * List of jobs in the specified region.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.Job jobs = 1;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\Job[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1beta1\Job::class);
        $this->jobs = $arr;

        return $this;
    }

    /**
     * The pagination token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The pagination token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

