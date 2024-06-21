<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/classification.proto

namespace Google\Cloud\AutoMl\V1\ClassificationEvaluationMetrics\ConfusionMatrix;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output only. A row in the confusion matrix.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.ClassificationEvaluationMetrics.ConfusionMatrix.Row</code>
 */
class Row extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Value of the specific cell in the confusion matrix.
     * The number of values each row has (i.e. the length of the row) is equal
     * to the length of the `annotation_spec_id` field or, if that one is not
     * populated, length of the [display_name][google.cloud.automl.v1.ClassificationEvaluationMetrics.ConfusionMatrix.display_name] field.
     *
     * Generated from protobuf field <code>repeated int32 example_count = 1;</code>
     */
    private $example_count;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $example_count
     *           Output only. Value of the specific cell in the confusion matrix.
     *           The number of values each row has (i.e. the length of the row) is equal
     *           to the length of the `annotation_spec_id` field or, if that one is not
     *           populated, length of the [display_name][google.cloud.automl.v1.ClassificationEvaluationMetrics.ConfusionMatrix.display_name] field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Classification::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Value of the specific cell in the confusion matrix.
     * The number of values each row has (i.e. the length of the row) is equal
     * to the length of the `annotation_spec_id` field or, if that one is not
     * populated, length of the [display_name][google.cloud.automl.v1.ClassificationEvaluationMetrics.ConfusionMatrix.display_name] field.
     *
     * Generated from protobuf field <code>repeated int32 example_count = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExampleCount()
    {
        return $this->example_count;
    }

    /**
     * Output only. Value of the specific cell in the confusion matrix.
     * The number of values each row has (i.e. the length of the row) is equal
     * to the length of the `annotation_spec_id` field or, if that one is not
     * populated, length of the [display_name][google.cloud.automl.v1.ClassificationEvaluationMetrics.ConfusionMatrix.display_name] field.
     *
     * Generated from protobuf field <code>repeated int32 example_count = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExampleCount($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->example_count = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Row::class, \Google\Cloud\AutoMl\V1\ClassificationEvaluationMetrics_ConfusionMatrix_Row::class);

