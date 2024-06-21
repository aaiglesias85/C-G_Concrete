<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/evaluation_job.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configures specific details of how a continuous evaluation job works. Provide
 * this configuration when you create an EvaluationJob.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.EvaluationJobConfig</code>
 */
class EvaluationJobConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Rquired. Details for the sampled prediction input. Within this
     * configuration, there are requirements for several fields:
     * * `dataType` must be one of `IMAGE`, `TEXT`, or `GENERAL_DATA`.
     * * `annotationType` must be one of `IMAGE_CLASSIFICATION_ANNOTATION`,
     *   `TEXT_CLASSIFICATION_ANNOTATION`, `GENERAL_CLASSIFICATION_ANNOTATION`,
     *   or `IMAGE_BOUNDING_BOX_ANNOTATION` (image object detection).
     * * If your machine learning model performs classification, you must specify
     *   `classificationMetadata.isMultiLabel`.
     * * You must specify `bigquerySource` (not `gcsSource`).
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.InputConfig input_config = 1;</code>
     */
    private $input_config = null;
    /**
     * Required. Details for calculating evaluation metrics and creating
     * [Evaulations][google.cloud.datalabeling.v1beta1.Evaluation]. If your model version performs image object
     * detection, you must specify the `boundingBoxEvaluationOptions` field within
     * this configuration. Otherwise, provide an empty object for this
     * configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationConfig evaluation_config = 2;</code>
     */
    private $evaluation_config = null;
    /**
     * Optional. Details for human annotation of your data. If you set
     * [labelMissingGroundTruth][google.cloud.datalabeling.v1beta1.EvaluationJob.label_missing_ground_truth] to
     * `true` for this evaluation job, then you must specify this field. If you
     * plan to provide your own ground truth labels, then omit this field.
     * Note that you must create an [Instruction][google.cloud.datalabeling.v1beta1.Instruction] resource before you can
     * specify this field. Provide the name of the instruction resource in the
     * `instruction` field within this configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig human_annotation_config = 3;</code>
     */
    private $human_annotation_config = null;
    /**
     * Required. Prediction keys that tell Data Labeling Service where to find the
     * data for evaluation in your BigQuery table. When the service samples
     * prediction input and output from your model version and saves it to
     * BigQuery, the data gets stored as JSON strings in the BigQuery table. These
     * keys tell Data Labeling Service how to parse the JSON.
     * You can provide the following entries in this field:
     * * `data_json_key`: the data key for prediction input. You must provide
     *   either this key or `reference_json_key`.
     * * `reference_json_key`: the data reference key for prediction input. You
     *   must provide either this key or `data_json_key`.
     * * `label_json_key`: the label key for prediction output. Required.
     * * `label_score_json_key`: the score key for prediction output. Required.
     * * `bounding_box_json_key`: the bounding box key for prediction output.
     *   Required if your model version perform image object detection.
     * Learn [how to configure prediction
     * keys](https://cloud.google.com/ml-engine/docs/continuous-evaluation/create-job#prediction-keys).
     *
     * Generated from protobuf field <code>map<string, string> bigquery_import_keys = 9;</code>
     */
    private $bigquery_import_keys;
    /**
     * Required. The maximum number of predictions to sample and save to BigQuery
     * during each [evaluation interval][google.cloud.datalabeling.v1beta1.EvaluationJob.schedule]. This limit
     * overrides `example_sample_percentage`: even if the service has not sampled
     * enough predictions to fulfill `example_sample_perecentage` during an
     * interval, it stops sampling predictions when it meets this limit.
     *
     * Generated from protobuf field <code>int32 example_count = 10;</code>
     */
    private $example_count = 0;
    /**
     * Required. Fraction of predictions to sample and save to BigQuery during
     * each [evaluation interval][google.cloud.datalabeling.v1beta1.EvaluationJob.schedule]. For example, 0.1 means
     * 10% of predictions served by your model version get saved to BigQuery.
     *
     * Generated from protobuf field <code>double example_sample_percentage = 11;</code>
     */
    private $example_sample_percentage = 0.0;
    /**
     * Optional. Configuration details for evaluation job alerts. Specify this
     * field if you want to receive email alerts if the evaluation job finds that
     * your predictions have low mean average precision during a run.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJobAlertConfig evaluation_job_alert_config = 13;</code>
     */
    private $evaluation_job_alert_config = null;
    protected $human_annotation_request_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\ImageClassificationConfig $image_classification_config
     *           Specify this field if your model version performs image classification or
     *           general classification.
     *           `annotationSpecSet` in this configuration must match
     *           [EvaluationJob.annotationSpecSet][google.cloud.datalabeling.v1beta1.EvaluationJob.annotation_spec_set].
     *           `allowMultiLabel` in this configuration must match
     *           `classificationMetadata.isMultiLabel` in [input_config][google.cloud.datalabeling.v1beta1.EvaluationJobConfig.input_config].
     *     @type \Google\Cloud\DataLabeling\V1beta1\BoundingPolyConfig $bounding_poly_config
     *           Specify this field if your model version performs image object detection
     *           (bounding box detection).
     *           `annotationSpecSet` in this configuration must match
     *           [EvaluationJob.annotationSpecSet][google.cloud.datalabeling.v1beta1.EvaluationJob.annotation_spec_set].
     *     @type \Google\Cloud\DataLabeling\V1beta1\TextClassificationConfig $text_classification_config
     *           Specify this field if your model version performs text classification.
     *           `annotationSpecSet` in this configuration must match
     *           [EvaluationJob.annotationSpecSet][google.cloud.datalabeling.v1beta1.EvaluationJob.annotation_spec_set].
     *           `allowMultiLabel` in this configuration must match
     *           `classificationMetadata.isMultiLabel` in [input_config][google.cloud.datalabeling.v1beta1.EvaluationJobConfig.input_config].
     *     @type \Google\Cloud\DataLabeling\V1beta1\InputConfig $input_config
     *           Rquired. Details for the sampled prediction input. Within this
     *           configuration, there are requirements for several fields:
     *           * `dataType` must be one of `IMAGE`, `TEXT`, or `GENERAL_DATA`.
     *           * `annotationType` must be one of `IMAGE_CLASSIFICATION_ANNOTATION`,
     *             `TEXT_CLASSIFICATION_ANNOTATION`, `GENERAL_CLASSIFICATION_ANNOTATION`,
     *             or `IMAGE_BOUNDING_BOX_ANNOTATION` (image object detection).
     *           * If your machine learning model performs classification, you must specify
     *             `classificationMetadata.isMultiLabel`.
     *           * You must specify `bigquerySource` (not `gcsSource`).
     *     @type \Google\Cloud\DataLabeling\V1beta1\EvaluationConfig $evaluation_config
     *           Required. Details for calculating evaluation metrics and creating
     *           [Evaulations][google.cloud.datalabeling.v1beta1.Evaluation]. If your model version performs image object
     *           detection, you must specify the `boundingBoxEvaluationOptions` field within
     *           this configuration. Otherwise, provide an empty object for this
     *           configuration.
     *     @type \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig $human_annotation_config
     *           Optional. Details for human annotation of your data. If you set
     *           [labelMissingGroundTruth][google.cloud.datalabeling.v1beta1.EvaluationJob.label_missing_ground_truth] to
     *           `true` for this evaluation job, then you must specify this field. If you
     *           plan to provide your own ground truth labels, then omit this field.
     *           Note that you must create an [Instruction][google.cloud.datalabeling.v1beta1.Instruction] resource before you can
     *           specify this field. Provide the name of the instruction resource in the
     *           `instruction` field within this configuration.
     *     @type array|\Google\Protobuf\Internal\MapField $bigquery_import_keys
     *           Required. Prediction keys that tell Data Labeling Service where to find the
     *           data for evaluation in your BigQuery table. When the service samples
     *           prediction input and output from your model version and saves it to
     *           BigQuery, the data gets stored as JSON strings in the BigQuery table. These
     *           keys tell Data Labeling Service how to parse the JSON.
     *           You can provide the following entries in this field:
     *           * `data_json_key`: the data key for prediction input. You must provide
     *             either this key or `reference_json_key`.
     *           * `reference_json_key`: the data reference key for prediction input. You
     *             must provide either this key or `data_json_key`.
     *           * `label_json_key`: the label key for prediction output. Required.
     *           * `label_score_json_key`: the score key for prediction output. Required.
     *           * `bounding_box_json_key`: the bounding box key for prediction output.
     *             Required if your model version perform image object detection.
     *           Learn [how to configure prediction
     *           keys](https://cloud.google.com/ml-engine/docs/continuous-evaluation/create-job#prediction-keys).
     *     @type int $example_count
     *           Required. The maximum number of predictions to sample and save to BigQuery
     *           during each [evaluation interval][google.cloud.datalabeling.v1beta1.EvaluationJob.schedule]. This limit
     *           overrides `example_sample_percentage`: even if the service has not sampled
     *           enough predictions to fulfill `example_sample_perecentage` during an
     *           interval, it stops sampling predictions when it meets this limit.
     *     @type float $example_sample_percentage
     *           Required. Fraction of predictions to sample and save to BigQuery during
     *           each [evaluation interval][google.cloud.datalabeling.v1beta1.EvaluationJob.schedule]. For example, 0.1 means
     *           10% of predictions served by your model version get saved to BigQuery.
     *     @type \Google\Cloud\DataLabeling\V1beta1\EvaluationJobAlertConfig $evaluation_job_alert_config
     *           Optional. Configuration details for evaluation job alerts. Specify this
     *           field if you want to receive email alerts if the evaluation job finds that
     *           your predictions have low mean average precision during a run.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\EvaluationJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Specify this field if your model version performs image classification or
     * general classification.
     * `annotationSpecSet` in this configuration must match
     * [EvaluationJob.annotationSpecSet][google.cloud.datalabeling.v1beta1.EvaluationJob.annotation_spec_set].
     * `allowMultiLabel` in this configuration must match
     * `classificationMetadata.isMultiLabel` in [input_config][google.cloud.datalabeling.v1beta1.EvaluationJobConfig.input_config].
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ImageClassificationConfig image_classification_config = 4;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\ImageClassificationConfig|null
     */
    public function getImageClassificationConfig()
    {
        return $this->readOneof(4);
    }

    public function hasImageClassificationConfig()
    {
        return $this->hasOneof(4);
    }

    /**
     * Specify this field if your model version performs image classification or
     * general classification.
     * `annotationSpecSet` in this configuration must match
     * [EvaluationJob.annotationSpecSet][google.cloud.datalabeling.v1beta1.EvaluationJob.annotation_spec_set].
     * `allowMultiLabel` in this configuration must match
     * `classificationMetadata.isMultiLabel` in [input_config][google.cloud.datalabeling.v1beta1.EvaluationJobConfig.input_config].
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ImageClassificationConfig image_classification_config = 4;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\ImageClassificationConfig $var
     * @return $this
     */
    public function setImageClassificationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\ImageClassificationConfig::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Specify this field if your model version performs image object detection
     * (bounding box detection).
     * `annotationSpecSet` in this configuration must match
     * [EvaluationJob.annotationSpecSet][google.cloud.datalabeling.v1beta1.EvaluationJob.annotation_spec_set].
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.BoundingPolyConfig bounding_poly_config = 5;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\BoundingPolyConfig|null
     */
    public function getBoundingPolyConfig()
    {
        return $this->readOneof(5);
    }

    public function hasBoundingPolyConfig()
    {
        return $this->hasOneof(5);
    }

    /**
     * Specify this field if your model version performs image object detection
     * (bounding box detection).
     * `annotationSpecSet` in this configuration must match
     * [EvaluationJob.annotationSpecSet][google.cloud.datalabeling.v1beta1.EvaluationJob.annotation_spec_set].
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.BoundingPolyConfig bounding_poly_config = 5;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\BoundingPolyConfig $var
     * @return $this
     */
    public function setBoundingPolyConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\BoundingPolyConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Specify this field if your model version performs text classification.
     * `annotationSpecSet` in this configuration must match
     * [EvaluationJob.annotationSpecSet][google.cloud.datalabeling.v1beta1.EvaluationJob.annotation_spec_set].
     * `allowMultiLabel` in this configuration must match
     * `classificationMetadata.isMultiLabel` in [input_config][google.cloud.datalabeling.v1beta1.EvaluationJobConfig.input_config].
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.TextClassificationConfig text_classification_config = 8;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\TextClassificationConfig|null
     */
    public function getTextClassificationConfig()
    {
        return $this->readOneof(8);
    }

    public function hasTextClassificationConfig()
    {
        return $this->hasOneof(8);
    }

    /**
     * Specify this field if your model version performs text classification.
     * `annotationSpecSet` in this configuration must match
     * [EvaluationJob.annotationSpecSet][google.cloud.datalabeling.v1beta1.EvaluationJob.annotation_spec_set].
     * `allowMultiLabel` in this configuration must match
     * `classificationMetadata.isMultiLabel` in [input_config][google.cloud.datalabeling.v1beta1.EvaluationJobConfig.input_config].
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.TextClassificationConfig text_classification_config = 8;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\TextClassificationConfig $var
     * @return $this
     */
    public function setTextClassificationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\TextClassificationConfig::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Rquired. Details for the sampled prediction input. Within this
     * configuration, there are requirements for several fields:
     * * `dataType` must be one of `IMAGE`, `TEXT`, or `GENERAL_DATA`.
     * * `annotationType` must be one of `IMAGE_CLASSIFICATION_ANNOTATION`,
     *   `TEXT_CLASSIFICATION_ANNOTATION`, `GENERAL_CLASSIFICATION_ANNOTATION`,
     *   or `IMAGE_BOUNDING_BOX_ANNOTATION` (image object detection).
     * * If your machine learning model performs classification, you must specify
     *   `classificationMetadata.isMultiLabel`.
     * * You must specify `bigquerySource` (not `gcsSource`).
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.InputConfig input_config = 1;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\InputConfig|null
     */
    public function getInputConfig()
    {
        return $this->input_config;
    }

    public function hasInputConfig()
    {
        return isset($this->input_config);
    }

    public function clearInputConfig()
    {
        unset($this->input_config);
    }

    /**
     * Rquired. Details for the sampled prediction input. Within this
     * configuration, there are requirements for several fields:
     * * `dataType` must be one of `IMAGE`, `TEXT`, or `GENERAL_DATA`.
     * * `annotationType` must be one of `IMAGE_CLASSIFICATION_ANNOTATION`,
     *   `TEXT_CLASSIFICATION_ANNOTATION`, `GENERAL_CLASSIFICATION_ANNOTATION`,
     *   or `IMAGE_BOUNDING_BOX_ANNOTATION` (image object detection).
     * * If your machine learning model performs classification, you must specify
     *   `classificationMetadata.isMultiLabel`.
     * * You must specify `bigquerySource` (not `gcsSource`).
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.InputConfig input_config = 1;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\InputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\InputConfig::class);
        $this->input_config = $var;

        return $this;
    }

    /**
     * Required. Details for calculating evaluation metrics and creating
     * [Evaulations][google.cloud.datalabeling.v1beta1.Evaluation]. If your model version performs image object
     * detection, you must specify the `boundingBoxEvaluationOptions` field within
     * this configuration. Otherwise, provide an empty object for this
     * configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationConfig evaluation_config = 2;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\EvaluationConfig|null
     */
    public function getEvaluationConfig()
    {
        return $this->evaluation_config;
    }

    public function hasEvaluationConfig()
    {
        return isset($this->evaluation_config);
    }

    public function clearEvaluationConfig()
    {
        unset($this->evaluation_config);
    }

    /**
     * Required. Details for calculating evaluation metrics and creating
     * [Evaulations][google.cloud.datalabeling.v1beta1.Evaluation]. If your model version performs image object
     * detection, you must specify the `boundingBoxEvaluationOptions` field within
     * this configuration. Otherwise, provide an empty object for this
     * configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationConfig evaluation_config = 2;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\EvaluationConfig $var
     * @return $this
     */
    public function setEvaluationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\EvaluationConfig::class);
        $this->evaluation_config = $var;

        return $this;
    }

    /**
     * Optional. Details for human annotation of your data. If you set
     * [labelMissingGroundTruth][google.cloud.datalabeling.v1beta1.EvaluationJob.label_missing_ground_truth] to
     * `true` for this evaluation job, then you must specify this field. If you
     * plan to provide your own ground truth labels, then omit this field.
     * Note that you must create an [Instruction][google.cloud.datalabeling.v1beta1.Instruction] resource before you can
     * specify this field. Provide the name of the instruction resource in the
     * `instruction` field within this configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig human_annotation_config = 3;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig|null
     */
    public function getHumanAnnotationConfig()
    {
        return $this->human_annotation_config;
    }

    public function hasHumanAnnotationConfig()
    {
        return isset($this->human_annotation_config);
    }

    public function clearHumanAnnotationConfig()
    {
        unset($this->human_annotation_config);
    }

    /**
     * Optional. Details for human annotation of your data. If you set
     * [labelMissingGroundTruth][google.cloud.datalabeling.v1beta1.EvaluationJob.label_missing_ground_truth] to
     * `true` for this evaluation job, then you must specify this field. If you
     * plan to provide your own ground truth labels, then omit this field.
     * Note that you must create an [Instruction][google.cloud.datalabeling.v1beta1.Instruction] resource before you can
     * specify this field. Provide the name of the instruction resource in the
     * `instruction` field within this configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig human_annotation_config = 3;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig $var
     * @return $this
     */
    public function setHumanAnnotationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig::class);
        $this->human_annotation_config = $var;

        return $this;
    }

    /**
     * Required. Prediction keys that tell Data Labeling Service where to find the
     * data for evaluation in your BigQuery table. When the service samples
     * prediction input and output from your model version and saves it to
     * BigQuery, the data gets stored as JSON strings in the BigQuery table. These
     * keys tell Data Labeling Service how to parse the JSON.
     * You can provide the following entries in this field:
     * * `data_json_key`: the data key for prediction input. You must provide
     *   either this key or `reference_json_key`.
     * * `reference_json_key`: the data reference key for prediction input. You
     *   must provide either this key or `data_json_key`.
     * * `label_json_key`: the label key for prediction output. Required.
     * * `label_score_json_key`: the score key for prediction output. Required.
     * * `bounding_box_json_key`: the bounding box key for prediction output.
     *   Required if your model version perform image object detection.
     * Learn [how to configure prediction
     * keys](https://cloud.google.com/ml-engine/docs/continuous-evaluation/create-job#prediction-keys).
     *
     * Generated from protobuf field <code>map<string, string> bigquery_import_keys = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getBigqueryImportKeys()
    {
        return $this->bigquery_import_keys;
    }

    /**
     * Required. Prediction keys that tell Data Labeling Service where to find the
     * data for evaluation in your BigQuery table. When the service samples
     * prediction input and output from your model version and saves it to
     * BigQuery, the data gets stored as JSON strings in the BigQuery table. These
     * keys tell Data Labeling Service how to parse the JSON.
     * You can provide the following entries in this field:
     * * `data_json_key`: the data key for prediction input. You must provide
     *   either this key or `reference_json_key`.
     * * `reference_json_key`: the data reference key for prediction input. You
     *   must provide either this key or `data_json_key`.
     * * `label_json_key`: the label key for prediction output. Required.
     * * `label_score_json_key`: the score key for prediction output. Required.
     * * `bounding_box_json_key`: the bounding box key for prediction output.
     *   Required if your model version perform image object detection.
     * Learn [how to configure prediction
     * keys](https://cloud.google.com/ml-engine/docs/continuous-evaluation/create-job#prediction-keys).
     *
     * Generated from protobuf field <code>map<string, string> bigquery_import_keys = 9;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setBigqueryImportKeys($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->bigquery_import_keys = $arr;

        return $this;
    }

    /**
     * Required. The maximum number of predictions to sample and save to BigQuery
     * during each [evaluation interval][google.cloud.datalabeling.v1beta1.EvaluationJob.schedule]. This limit
     * overrides `example_sample_percentage`: even if the service has not sampled
     * enough predictions to fulfill `example_sample_perecentage` during an
     * interval, it stops sampling predictions when it meets this limit.
     *
     * Generated from protobuf field <code>int32 example_count = 10;</code>
     * @return int
     */
    public function getExampleCount()
    {
        return $this->example_count;
    }

    /**
     * Required. The maximum number of predictions to sample and save to BigQuery
     * during each [evaluation interval][google.cloud.datalabeling.v1beta1.EvaluationJob.schedule]. This limit
     * overrides `example_sample_percentage`: even if the service has not sampled
     * enough predictions to fulfill `example_sample_perecentage` during an
     * interval, it stops sampling predictions when it meets this limit.
     *
     * Generated from protobuf field <code>int32 example_count = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setExampleCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->example_count = $var;

        return $this;
    }

    /**
     * Required. Fraction of predictions to sample and save to BigQuery during
     * each [evaluation interval][google.cloud.datalabeling.v1beta1.EvaluationJob.schedule]. For example, 0.1 means
     * 10% of predictions served by your model version get saved to BigQuery.
     *
     * Generated from protobuf field <code>double example_sample_percentage = 11;</code>
     * @return float
     */
    public function getExampleSamplePercentage()
    {
        return $this->example_sample_percentage;
    }

    /**
     * Required. Fraction of predictions to sample and save to BigQuery during
     * each [evaluation interval][google.cloud.datalabeling.v1beta1.EvaluationJob.schedule]. For example, 0.1 means
     * 10% of predictions served by your model version get saved to BigQuery.
     *
     * Generated from protobuf field <code>double example_sample_percentage = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setExampleSamplePercentage($var)
    {
        GPBUtil::checkDouble($var);
        $this->example_sample_percentage = $var;

        return $this;
    }

    /**
     * Optional. Configuration details for evaluation job alerts. Specify this
     * field if you want to receive email alerts if the evaluation job finds that
     * your predictions have low mean average precision during a run.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJobAlertConfig evaluation_job_alert_config = 13;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\EvaluationJobAlertConfig|null
     */
    public function getEvaluationJobAlertConfig()
    {
        return $this->evaluation_job_alert_config;
    }

    public function hasEvaluationJobAlertConfig()
    {
        return isset($this->evaluation_job_alert_config);
    }

    public function clearEvaluationJobAlertConfig()
    {
        unset($this->evaluation_job_alert_config);
    }

    /**
     * Optional. Configuration details for evaluation job alerts. Specify this
     * field if you want to receive email alerts if the evaluation job finds that
     * your predictions have low mean average precision during a run.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJobAlertConfig evaluation_job_alert_config = 13;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\EvaluationJobAlertConfig $var
     * @return $this
     */
    public function setEvaluationJobAlertConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\EvaluationJobAlertConfig::class);
        $this->evaluation_job_alert_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getHumanAnnotationRequestConfig()
    {
        return $this->whichOneof("human_annotation_request_config");
    }

}

