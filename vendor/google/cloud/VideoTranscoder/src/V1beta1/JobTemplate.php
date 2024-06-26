<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Transcoding job template resource.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.JobTemplate</code>
 */
class JobTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the job template.
     * Format:
     * `projects/{project}/locations/{location}/jobTemplates/{job_template}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The configuration for this template.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.JobConfig config = 2;</code>
     */
    private $config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the job template.
     *           Format:
     *           `projects/{project}/locations/{location}/jobTemplates/{job_template}`
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\JobConfig $config
     *           The configuration for this template.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the job template.
     * Format:
     * `projects/{project}/locations/{location}/jobTemplates/{job_template}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the job template.
     * Format:
     * `projects/{project}/locations/{location}/jobTemplates/{job_template}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The configuration for this template.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.JobConfig config = 2;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\JobConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * The configuration for this template.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.JobConfig config = 2;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\JobConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\JobConfig::class);
        $this->config = $var;

        return $this;
    }

}

