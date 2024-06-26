<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A descriptive representation of submitted pipeline as well as the executed
 * form.  This data is provided by the Dataflow service for ease of visualizing
 * the pipeline and interpreting Dataflow provided metrics.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.PipelineDescription</code>
 */
class PipelineDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * Description of each transform in the pipeline and collections between them.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.TransformSummary original_pipeline_transform = 1;</code>
     */
    private $original_pipeline_transform;
    /**
     * Description of each stage of execution of the pipeline.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary execution_pipeline_stage = 2;</code>
     */
    private $execution_pipeline_stage;
    /**
     * Pipeline level display data.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.DisplayData display_data = 3;</code>
     */
    private $display_data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataflow\V1beta3\TransformSummary[]|\Google\Protobuf\Internal\RepeatedField $original_pipeline_transform
     *           Description of each transform in the pipeline and collections between them.
     *     @type \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary[]|\Google\Protobuf\Internal\RepeatedField $execution_pipeline_stage
     *           Description of each stage of execution of the pipeline.
     *     @type \Google\Cloud\Dataflow\V1beta3\DisplayData[]|\Google\Protobuf\Internal\RepeatedField $display_data
     *           Pipeline level display data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Description of each transform in the pipeline and collections between them.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.TransformSummary original_pipeline_transform = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOriginalPipelineTransform()
    {
        return $this->original_pipeline_transform;
    }

    /**
     * Description of each transform in the pipeline and collections between them.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.TransformSummary original_pipeline_transform = 1;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\TransformSummary[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOriginalPipelineTransform($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\TransformSummary::class);
        $this->original_pipeline_transform = $arr;

        return $this;
    }

    /**
     * Description of each stage of execution of the pipeline.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary execution_pipeline_stage = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExecutionPipelineStage()
    {
        return $this->execution_pipeline_stage;
    }

    /**
     * Description of each stage of execution of the pipeline.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.ExecutionStageSummary execution_pipeline_stage = 2;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExecutionPipelineStage($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary::class);
        $this->execution_pipeline_stage = $arr;

        return $this;
    }

    /**
     * Pipeline level display data.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.DisplayData display_data = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisplayData()
    {
        return $this->display_data;
    }

    /**
     * Pipeline level display data.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.DisplayData display_data = 3;</code>
     * @param \Google\Cloud\Dataflow\V1beta3\DisplayData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisplayData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\DisplayData::class);
        $this->display_data = $arr;

        return $this;
    }

}

