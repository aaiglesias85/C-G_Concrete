<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/executions/v1beta/executions.proto

namespace Google\Cloud\Workflows\Executions\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the
 * [CreateExecution][google.cloud.workflows.executions.v1beta.Executions.CreateExecution]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.workflows.executions.v1beta.CreateExecutionRequest</code>
 */
class CreateExecutionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the workflow for which an execution should be created.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
     * The latest revision of the workflow will be used.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. Execution to be created.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.executions.v1beta.Execution execution = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $execution = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the workflow for which an execution should be created.
     *           Format: projects/{project}/locations/{location}/workflows/{workflow}
     *           The latest revision of the workflow will be used.
     *     @type \Google\Cloud\Workflows\Executions\V1beta\Execution $execution
     *           Required. Execution to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Workflows\Executions\V1Beta\Executions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the workflow for which an execution should be created.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
     * The latest revision of the workflow will be used.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the workflow for which an execution should be created.
     * Format: projects/{project}/locations/{location}/workflows/{workflow}
     * The latest revision of the workflow will be used.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Execution to be created.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.executions.v1beta.Execution execution = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Workflows\Executions\V1beta\Execution|null
     */
    public function getExecution()
    {
        return $this->execution;
    }

    public function hasExecution()
    {
        return isset($this->execution);
    }

    public function clearExecution()
    {
        unset($this->execution);
    }

    /**
     * Required. Execution to be created.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.executions.v1beta.Execution execution = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Workflows\Executions\V1beta\Execution $var
     * @return $this
     */
    public function setExecution($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Workflows\Executions\V1beta\Execution::class);
        $this->execution = $var;

        return $this;
    }

}

