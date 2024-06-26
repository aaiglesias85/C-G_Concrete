<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/projects.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to the
 * [CreateProject][google.cloud.resourcemanager.v3.Projects.CreateProject]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.CreateProjectRequest</code>
 */
class CreateProjectRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Project to create.
     * Project ID is required. If the requested ID is unavailable, the request
     * fails.
     * If the `parent` field is set, the `resourcemanager.projects.create`
     * permission is checked on the parent resource. If no parent is set and
     * the authorization credentials belong to an Organziation, the parent
     * will be set to that Organization.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.Project project = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ResourceManager\V3\Project $project
     *           Required. The Project to create.
     *           Project ID is required. If the requested ID is unavailable, the request
     *           fails.
     *           If the `parent` field is set, the `resourcemanager.projects.create`
     *           permission is checked on the parent resource. If no parent is set and
     *           the authorization credentials belong to an Organziation, the parent
     *           will be set to that Organization.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\Projects::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Project to create.
     * Project ID is required. If the requested ID is unavailable, the request
     * fails.
     * If the `parent` field is set, the `resourcemanager.projects.create`
     * permission is checked on the parent resource. If no parent is set and
     * the authorization credentials belong to an Organziation, the parent
     * will be set to that Organization.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.Project project = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ResourceManager\V3\Project|null
     */
    public function getProject()
    {
        return $this->project;
    }

    public function hasProject()
    {
        return isset($this->project);
    }

    public function clearProject()
    {
        unset($this->project);
    }

    /**
     * Required. The Project to create.
     * Project ID is required. If the requested ID is unavailable, the request
     * fails.
     * If the `parent` field is set, the `resourcemanager.projects.create`
     * permission is checked on the parent resource. If no parent is set and
     * the authorization credentials belong to an Organziation, the parent
     * will be set to that Organization.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.Project project = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ResourceManager\V3\Project $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ResourceManager\V3\Project::class);
        $this->project = $var;

        return $this;
    }

}

