<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/data_labeling_service.proto

namespace Google\Cloud\DataLabeling\V1beta1\SearchExampleComparisonsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Example comparisons comparing ground truth output and predictions for a
 * specific input.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.SearchExampleComparisonsResponse.ExampleComparison</code>
 */
class ExampleComparison extends \Google\Protobuf\Internal\Message
{
    /**
     * The ground truth output for the input.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.Example ground_truth_example = 1;</code>
     */
    private $ground_truth_example = null;
    /**
     * Predictions by the model for the input.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.Example model_created_examples = 2;</code>
     */
    private $model_created_examples;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\Example $ground_truth_example
     *           The ground truth output for the input.
     *     @type \Google\Cloud\DataLabeling\V1beta1\Example[]|\Google\Protobuf\Internal\RepeatedField $model_created_examples
     *           Predictions by the model for the input.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\DataLabelingService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ground truth output for the input.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.Example ground_truth_example = 1;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\Example|null
     */
    public function getGroundTruthExample()
    {
        return $this->ground_truth_example;
    }

    public function hasGroundTruthExample()
    {
        return isset($this->ground_truth_example);
    }

    public function clearGroundTruthExample()
    {
        unset($this->ground_truth_example);
    }

    /**
     * The ground truth output for the input.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.Example ground_truth_example = 1;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\Example $var
     * @return $this
     */
    public function setGroundTruthExample($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\Example::class);
        $this->ground_truth_example = $var;

        return $this;
    }

    /**
     * Predictions by the model for the input.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.Example model_created_examples = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModelCreatedExamples()
    {
        return $this->model_created_examples;
    }

    /**
     * Predictions by the model for the input.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.Example model_created_examples = 2;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\Example[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModelCreatedExamples($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataLabeling\V1beta1\Example::class);
        $this->model_created_examples = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExampleComparison::class, \Google\Cloud\DataLabeling\V1beta1\SearchExampleComparisonsResponse_ExampleComparison::class);

