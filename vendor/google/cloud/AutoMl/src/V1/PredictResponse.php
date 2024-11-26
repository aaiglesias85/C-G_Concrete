<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/prediction_service.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [PredictionService.Predict][google.cloud.automl.v1.PredictionService.Predict].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.PredictResponse</code>
 */
class PredictResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Prediction result.
     * AutoML Translation and AutoML Natural Language Sentiment Analysis
     * return precisely one payload.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.AnnotationPayload payload = 1;</code>
     */
    private $payload;
    /**
     * The preprocessed example that AutoML actually makes prediction on.
     * Empty if AutoML does not preprocess the input example.
     * For AutoML Natural Language (Classification, Entity Extraction, and
     * Sentiment Analysis), if the input is a document, the recognized text is
     * returned in the
     * [document_text][google.cloud.automl.v1.Document.document_text]
     * property.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.ExamplePayload preprocessed_input = 3;</code>
     */
    private $preprocessed_input = null;
    /**
     * Additional domain-specific prediction response metadata.
     * AutoML Vision Object Detection
     * `max_bounding_box_count`
     * : (int64) The maximum number of bounding boxes to return per image.
     * AutoML Natural Language Sentiment Analysis
     * `sentiment_score`
     * : (float, deprecated) A value between -1 and 1,
     *   -1 maps to least positive sentiment, while 1 maps to the most positive
     *   one and the higher the score, the more positive the sentiment in the
     *   document is. Yet these values are relative to the training data, so
     *   e.g. if all data was positive then -1 is also positive (though
     *   the least).
     *   `sentiment_score` is not the same as "score" and "magnitude"
     *   from Sentiment Analysis in the Natural Language API.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 2;</code>
     */
    private $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1\AnnotationPayload[]|\Google\Protobuf\Internal\RepeatedField $payload
     *           Prediction result.
     *           AutoML Translation and AutoML Natural Language Sentiment Analysis
     *           return precisely one payload.
     *     @type \Google\Cloud\AutoMl\V1\ExamplePayload $preprocessed_input
     *           The preprocessed example that AutoML actually makes prediction on.
     *           Empty if AutoML does not preprocess the input example.
     *           For AutoML Natural Language (Classification, Entity Extraction, and
     *           Sentiment Analysis), if the input is a document, the recognized text is
     *           returned in the
     *           [document_text][google.cloud.automl.v1.Document.document_text]
     *           property.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Additional domain-specific prediction response metadata.
     *           AutoML Vision Object Detection
     *           `max_bounding_box_count`
     *           : (int64) The maximum number of bounding boxes to return per image.
     *           AutoML Natural Language Sentiment Analysis
     *           `sentiment_score`
     *           : (float, deprecated) A value between -1 and 1,
     *             -1 maps to least positive sentiment, while 1 maps to the most positive
     *             one and the higher the score, the more positive the sentiment in the
     *             document is. Yet these values are relative to the training data, so
     *             e.g. if all data was positive then -1 is also positive (though
     *             the least).
     *             `sentiment_score` is not the same as "score" and "magnitude"
     *             from Sentiment Analysis in the Natural Language API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Prediction result.
     * AutoML Translation and AutoML Natural Language Sentiment Analysis
     * return precisely one payload.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.AnnotationPayload payload = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Prediction result.
     * AutoML Translation and AutoML Natural Language Sentiment Analysis
     * return precisely one payload.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.AnnotationPayload payload = 1;</code>
     * @param \Google\Cloud\AutoMl\V1\AnnotationPayload[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPayload($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1\AnnotationPayload::class);
        $this->payload = $arr;

        return $this;
    }

    /**
     * The preprocessed example that AutoML actually makes prediction on.
     * Empty if AutoML does not preprocess the input example.
     * For AutoML Natural Language (Classification, Entity Extraction, and
     * Sentiment Analysis), if the input is a document, the recognized text is
     * returned in the
     * [document_text][google.cloud.automl.v1.Document.document_text]
     * property.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.ExamplePayload preprocessed_input = 3;</code>
     * @return \Google\Cloud\AutoMl\V1\ExamplePayload|null
     */
    public function getPreprocessedInput()
    {
        return $this->preprocessed_input;
    }

    public function hasPreprocessedInput()
    {
        return isset($this->preprocessed_input);
    }

    public function clearPreprocessedInput()
    {
        unset($this->preprocessed_input);
    }

    /**
     * The preprocessed example that AutoML actually makes prediction on.
     * Empty if AutoML does not preprocess the input example.
     * For AutoML Natural Language (Classification, Entity Extraction, and
     * Sentiment Analysis), if the input is a document, the recognized text is
     * returned in the
     * [document_text][google.cloud.automl.v1.Document.document_text]
     * property.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1.ExamplePayload preprocessed_input = 3;</code>
     * @param \Google\Cloud\AutoMl\V1\ExamplePayload $var
     * @return $this
     */
    public function setPreprocessedInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1\ExamplePayload::class);
        $this->preprocessed_input = $var;

        return $this;
    }

    /**
     * Additional domain-specific prediction response metadata.
     * AutoML Vision Object Detection
     * `max_bounding_box_count`
     * : (int64) The maximum number of bounding boxes to return per image.
     * AutoML Natural Language Sentiment Analysis
     * `sentiment_score`
     * : (float, deprecated) A value between -1 and 1,
     *   -1 maps to least positive sentiment, while 1 maps to the most positive
     *   one and the higher the score, the more positive the sentiment in the
     *   document is. Yet these values are relative to the training data, so
     *   e.g. if all data was positive then -1 is also positive (though
     *   the least).
     *   `sentiment_score` is not the same as "score" and "magnitude"
     *   from Sentiment Analysis in the Natural Language API.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Additional domain-specific prediction response metadata.
     * AutoML Vision Object Detection
     * `max_bounding_box_count`
     * : (int64) The maximum number of bounding boxes to return per image.
     * AutoML Natural Language Sentiment Analysis
     * `sentiment_score`
     * : (float, deprecated) A value between -1 and 1,
     *   -1 maps to least positive sentiment, while 1 maps to the most positive
     *   one and the higher the score, the more positive the sentiment in the
     *   document is. Yet these values are relative to the training data, so
     *   e.g. if all data was positive then -1 is also positive (though
     *   the least).
     *   `sentiment_score` is not the same as "score" and "magnitude"
     *   from Sentiment Analysis in the Natural Language API.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

}

