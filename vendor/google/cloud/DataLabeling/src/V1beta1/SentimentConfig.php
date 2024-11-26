<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/human_annotation_config.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for setting up sentiments.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.SentimentConfig</code>
 */
class SentimentConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * If set to true, contributors will have the option to select sentiment of
     * the label they selected, to mark it as negative or positive label. Default
     * is false.
     *
     * Generated from protobuf field <code>bool enable_label_sentiment_selection = 1;</code>
     */
    private $enable_label_sentiment_selection = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_label_sentiment_selection
     *           If set to true, contributors will have the option to select sentiment of
     *           the label they selected, to mark it as negative or positive label. Default
     *           is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\HumanAnnotationConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * If set to true, contributors will have the option to select sentiment of
     * the label they selected, to mark it as negative or positive label. Default
     * is false.
     *
     * Generated from protobuf field <code>bool enable_label_sentiment_selection = 1;</code>
     * @return bool
     */
    public function getEnableLabelSentimentSelection()
    {
        return $this->enable_label_sentiment_selection;
    }

    /**
     * If set to true, contributors will have the option to select sentiment of
     * the label they selected, to mark it as negative or positive label. Default
     * is false.
     *
     * Generated from protobuf field <code>bool enable_label_sentiment_selection = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableLabelSentimentSelection($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_label_sentiment_selection = $var;

        return $this;
    }

}

