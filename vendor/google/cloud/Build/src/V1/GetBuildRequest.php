<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to get a build.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.GetBuildRequest</code>
 */
class GetBuildRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the `Build` to retrieve.
     * Format: `projects/{project}/locations/{location}/builds/{build}`
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project_id = '';
    /**
     * Required. ID of the build.
     *
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the `Build` to retrieve.
     *           Format: `projects/{project}/locations/{location}/builds/{build}`
     *     @type string $project_id
     *           Required. ID of the project.
     *     @type string $id
     *           Required. ID of the build.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the `Build` to retrieve.
     * Format: `projects/{project}/locations/{location}/builds/{build}`
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the `Build` to retrieve.
     * Format: `projects/{project}/locations/{location}/builds/{build}`
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.resource_reference) = {</code>
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
     * Required. ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. ID of the build.
     *
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Required. ID of the build.
     *
     * Generated from protobuf field <code>string id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

