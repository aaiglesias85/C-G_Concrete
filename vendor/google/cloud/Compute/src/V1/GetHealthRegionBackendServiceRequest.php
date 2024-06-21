<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionBackendServices.GetHealth. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetHealthRegionBackendServiceRequest</code>
 */
class GetHealthRegionBackendServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the BackendService resource for which to get health.
     *
     * Generated from protobuf field <code>string backend_service = 306946058 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $backend_service = '';
    /**
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourceGroupReference resource_group_reference_resource = 112951123 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource_group_reference_resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backend_service
     *           Name of the BackendService resource for which to get health.
     *     @type string $project
     *     @type string $region
     *           Name of the region scoping this request.
     *     @type \Google\Cloud\Compute\V1\ResourceGroupReference $resource_group_reference_resource
     *           The body resource for this request
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the BackendService resource for which to get health.
     *
     * Generated from protobuf field <code>string backend_service = 306946058 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackendService()
    {
        return $this->backend_service;
    }

    /**
     * Name of the BackendService resource for which to get health.
     *
     * Generated from protobuf field <code>string backend_service = 306946058 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBackendService($var)
    {
        GPBUtil::checkString($var, True);
        $this->backend_service = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourceGroupReference resource_group_reference_resource = 112951123 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\ResourceGroupReference|null
     */
    public function getResourceGroupReferenceResource()
    {
        return $this->resource_group_reference_resource;
    }

    public function hasResourceGroupReferenceResource()
    {
        return isset($this->resource_group_reference_resource);
    }

    public function clearResourceGroupReferenceResource()
    {
        unset($this->resource_group_reference_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ResourceGroupReference resource_group_reference_resource = 112951123 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\ResourceGroupReference $var
     * @return $this
     */
    public function setResourceGroupReferenceResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ResourceGroupReference::class);
        $this->resource_group_reference_resource = $var;

        return $this;
    }

}

