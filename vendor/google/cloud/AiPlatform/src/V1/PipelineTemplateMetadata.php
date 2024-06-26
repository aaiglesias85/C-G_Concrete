<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Pipeline template metadata if [PipelineJob.template_uri][google.cloud.aiplatform.v1.PipelineJob.template_uri] is from supported
 * template registry. Currently, the only supported registry is Artifact
 * Registry.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PipelineTemplateMetadata</code>
 */
class PipelineTemplateMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The version_name in artifact registry.
     * Will always be presented in output if the [PipelineJob.template_uri][google.cloud.aiplatform.v1.PipelineJob.template_uri] is
     * from supported template registry.
     * Format is "sha256:abcdef123456...".
     *
     * Generated from protobuf field <code>string version = 3;</code>
     */
    private $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           The version_name in artifact registry.
     *           Will always be presented in output if the [PipelineJob.template_uri][google.cloud.aiplatform.v1.PipelineJob.template_uri] is
     *           from supported template registry.
     *           Format is "sha256:abcdef123456...".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineJob::initOnce();
        parent::__construct($data);
    }

    /**
     * The version_name in artifact registry.
     * Will always be presented in output if the [PipelineJob.template_uri][google.cloud.aiplatform.v1.PipelineJob.template_uri] is
     * from supported template registry.
     * Format is "sha256:abcdef123456...".
     *
     * Generated from protobuf field <code>string version = 3;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version_name in artifact registry.
     * Will always be presented in output if the [PipelineJob.template_uri][google.cloud.aiplatform.v1.PipelineJob.template_uri] is
     * from supported template registry.
     * Format is "sha256:abcdef123456...".
     *
     * Generated from protobuf field <code>string version = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

