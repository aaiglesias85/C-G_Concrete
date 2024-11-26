<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/model.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * API proto representing a trained machine learning model.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.Model</code>
 */
class Model extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the model.
     * Format: `projects/{project_id}/locations/{location_id}/models/{model_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The name of the model to show in the interface. The name can be
     * up to 32 characters long and can consist only of ASCII Latin letters A-Z
     * and a-z, underscores
     * (_), and ASCII digits 0-9. It must start with a letter.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Required. The resource ID of the dataset used to create the model. The dataset must
     * come from the same ancestor project and location.
     *
     * Generated from protobuf field <code>string dataset_id = 3;</code>
     */
    private $dataset_id = '';
    /**
     * Output only. Timestamp when the model training finished  and can be used for prediction.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
     */
    private $create_time = null;
    /**
     * Output only. Timestamp when this model was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11;</code>
     */
    private $update_time = null;
    /**
     * Output only. Deployment state of the model. A model can only serve
     * prediction requests after it gets deployed.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Model.DeploymentState deployment_state = 8;</code>
     */
    private $deployment_state = 0;
    /**
     * Used to perform a consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 10;</code>
     */
    private $etag = '';
    /**
     * Optional. The labels with user-defined metadata to organize your model.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 34;</code>
     */
    private $labels;
    protected $model_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1\TranslationModelMetadata $translation_model_metadata
     *           Metadata for translation models.
     *     @type \Google\Cloud\AutoMl\V1\ImageClassificationModelMetadata $image_classification_model_metadata
     *           Metadata for image classification models.
     *     @type \Google\Cloud\AutoMl\V1\TextClassificationModelMetadata $text_classification_model_metadata
     *           Metadata for text classification models.
     *     @type \Google\Cloud\AutoMl\V1\ImageObjectDetectionModelMetadata $image_object_detection_model_metadata
     *           Metadata for image object detection models.
     *     @type \Google\Cloud\AutoMl\V1\TextExtractionModelMetadata $text_extraction_model_metadata
     *           Metadata for text extraction models.
     *     @type \Google\Cloud\AutoMl\V1\TextSentimentModelMetadata $text_sentiment_model_metadata
     *           Metadata for text sentiment models.
     *     @type string $name
     *           Output only. Resource name of the model.
     *           Format: `projects/{project_id}/locations/{location_id}/models/{model_id}`
     *     @type string $display_name
     *           Required. The name of the model to show in the interface. The name can be
     *           up to 32 characters long and can consist only of ASCII Latin letters A-Z
     *           and a-z, underscores
     *           (_), and ASCII digits 0-9. It must start with a letter.
     *     @type string $dataset_id
     *           Required. The resource ID of the dataset used to create the model. The dataset must
     *           come from the same ancestor project and location.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when the model training finished  and can be used for prediction.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this model was last updated.
     *     @type int $deployment_state
     *           Output only. Deployment state of the model. A model can only serve
     *           prediction requests after it gets deployed.
     *     @type string $etag
     *           Used to perform a consistent read-modify-write updates. If not set, a blind
     *           "overwrite" update happens.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata to organize your model.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           Label values are optional. Label keys must start with a letter.
     *           See https://goo.gl/xmQnxf for more information on and examples of labels.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Model::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata for translation models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TranslationModelMetadata translation_model_metadata = 15;</code>
     * @return \Google\Cloud\AutoMl\V1\TranslationModelMetadata|null
     */
    public function getTranslationModelMetadata()
    {
        return $this->readOneof(15);
    }

    public function hasTranslationModelMetadata()
    {
        return $this->hasOneof(15);
    }

    /**
     * Metadata for translation models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TranslationModelMetadata translation_model_metadata = 15;</code>
     * @param \Google\Cloud\AutoMl\V1\TranslationModelMetadata $var
     * @return $this
     */
    public function setTranslationModelMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\TranslationModelMetadata::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Metadata for image classification models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.ImageClassificationModelMetadata image_classification_model_metadata = 13;</code>
     * @return \Google\Cloud\AutoMl\V1\ImageClassificationModelMetadata|null
     */
    public function getImageClassificationModelMetadata()
    {
        return $this->readOneof(13);
    }

    public function hasImageClassificationModelMetadata()
    {
        return $this->hasOneof(13);
    }

    /**
     * Metadata for image classification models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.ImageClassificationModelMetadata image_classification_model_metadata = 13;</code>
     * @param \Google\Cloud\AutoMl\V1\ImageClassificationModelMetadata $var
     * @return $this
     */
    public function setImageClassificationModelMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\ImageClassificationModelMetadata::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Metadata for text classification models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextClassificationModelMetadata text_classification_model_metadata = 14;</code>
     * @return \Google\Cloud\AutoMl\V1\TextClassificationModelMetadata|null
     */
    public function getTextClassificationModelMetadata()
    {
        return $this->readOneof(14);
    }

    public function hasTextClassificationModelMetadata()
    {
        return $this->hasOneof(14);
    }

    /**
     * Metadata for text classification models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextClassificationModelMetadata text_classification_model_metadata = 14;</code>
     * @param \Google\Cloud\AutoMl\V1\TextClassificationModelMetadata $var
     * @return $this
     */
    public function setTextClassificationModelMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\TextClassificationModelMetadata::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Metadata for image object detection models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.ImageObjectDetectionModelMetadata image_object_detection_model_metadata = 20;</code>
     * @return \Google\Cloud\AutoMl\V1\ImageObjectDetectionModelMetadata|null
     */
    public function getImageObjectDetectionModelMetadata()
    {
        return $this->readOneof(20);
    }

    public function hasImageObjectDetectionModelMetadata()
    {
        return $this->hasOneof(20);
    }

    /**
     * Metadata for image object detection models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.ImageObjectDetectionModelMetadata image_object_detection_model_metadata = 20;</code>
     * @param \Google\Cloud\AutoMl\V1\ImageObjectDetectionModelMetadata $var
     * @return $this
     */
    public function setImageObjectDetectionModelMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\ImageObjectDetectionModelMetadata::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * Metadata for text extraction models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextExtractionModelMetadata text_extraction_model_metadata = 19;</code>
     * @return \Google\Cloud\AutoMl\V1\TextExtractionModelMetadata|null
     */
    public function getTextExtractionModelMetadata()
    {
        return $this->readOneof(19);
    }

    public function hasTextExtractionModelMetadata()
    {
        return $this->hasOneof(19);
    }

    /**
     * Metadata for text extraction models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextExtractionModelMetadata text_extraction_model_metadata = 19;</code>
     * @param \Google\Cloud\AutoMl\V1\TextExtractionModelMetadata $var
     * @return $this
     */
    public function setTextExtractionModelMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\TextExtractionModelMetadata::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Metadata for text sentiment models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSentimentModelMetadata text_sentiment_model_metadata = 22;</code>
     * @return \Google\Cloud\AutoMl\V1\TextSentimentModelMetadata|null
     */
    public function getTextSentimentModelMetadata()
    {
        return $this->readOneof(22);
    }

    public function hasTextSentimentModelMetadata()
    {
        return $this->hasOneof(22);
    }

    /**
     * Metadata for text sentiment models.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.TextSentimentModelMetadata text_sentiment_model_metadata = 22;</code>
     * @param \Google\Cloud\AutoMl\V1\TextSentimentModelMetadata $var
     * @return $this
     */
    public function setTextSentimentModelMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\TextSentimentModelMetadata::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * Output only. Resource name of the model.
     * Format: `projects/{project_id}/locations/{location_id}/models/{model_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the model.
     * Format: `projects/{project_id}/locations/{location_id}/models/{model_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. The name of the model to show in the interface. The name can be
     * up to 32 characters long and can consist only of ASCII Latin letters A-Z
     * and a-z, underscores
     * (_), and ASCII digits 0-9. It must start with a letter.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The name of the model to show in the interface. The name can be
     * up to 32 characters long and can consist only of ASCII Latin letters A-Z
     * and a-z, underscores
     * (_), and ASCII digits 0-9. It must start with a letter.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. The resource ID of the dataset used to create the model. The dataset must
     * come from the same ancestor project and location.
     *
     * Generated from protobuf field <code>string dataset_id = 3;</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * Required. The resource ID of the dataset used to create the model. The dataset must
     * come from the same ancestor project and location.
     *
     * Generated from protobuf field <code>string dataset_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when the model training finished  and can be used for prediction.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp when the model training finished  and can be used for prediction.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this model was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp when this model was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. Deployment state of the model. A model can only serve
     * prediction requests after it gets deployed.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Model.DeploymentState deployment_state = 8;</code>
     * @return int
     */
    public function getDeploymentState()
    {
        return $this->deployment_state;
    }

    /**
     * Output only. Deployment state of the model. A model can only serve
     * prediction requests after it gets deployed.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.Model.DeploymentState deployment_state = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setDeploymentState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AutoMl\V1\Model\DeploymentState::class);
        $this->deployment_state = $var;

        return $this;
    }

    /**
     * Used to perform a consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 10;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Used to perform a consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. The labels with user-defined metadata to organize your model.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 34;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata to organize your model.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 34;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getModelMetadata()
    {
        return $this->whichOneof("model_metadata");
    }

}

