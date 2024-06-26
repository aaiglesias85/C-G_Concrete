<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/v1beta/workflows.proto

namespace Google\Cloud\Workflows\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the
 * [DeleteWorkflow][google.cloud.workflows.v1beta.Workflows.DeleteWorkflow]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.workflows.v1beta.DeleteWorkflowRequest</code>
 */
class DeleteWorkflowRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the workflow to be deleted.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the workflow to be deleted.
     *           Format: projects/{project}/locations/{location}/workflows/{workflow}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Workflows\V1Beta\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the workflow to be deleted.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the workflow to be deleted.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

