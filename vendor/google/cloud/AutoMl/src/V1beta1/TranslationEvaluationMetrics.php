<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/translation.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Evaluation metrics for the dataset.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.TranslationEvaluationMetrics</code>
 */
class TranslationEvaluationMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. BLEU score.
     *
     * Generated from protobuf field <code>double bleu_score = 1;</code>
     */
    private $bleu_score = 0.0;
    /**
     * Output only. BLEU score for base model.
     *
     * Generated from protobuf field <code>double base_bleu_score = 2;</code>
     */
    private $base_bleu_score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $bleu_score
     *           Output only. BLEU score.
     *     @type float $base_bleu_score
     *           Output only. BLEU score for base model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Translation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. BLEU score.
     *
     * Generated from protobuf field <code>double bleu_score = 1;</code>
     * @return float
     */
    public function getBleuScore()
    {
        return $this->bleu_score;
    }

    /**
     * Output only. BLEU score.
     *
     * Generated from protobuf field <code>double bleu_score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setBleuScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->bleu_score = $var;

        return $this;
    }

    /**
     * Output only. BLEU score for base model.
     *
     * Generated from protobuf field <code>double base_bleu_score = 2;</code>
     * @return float
     */
    public function getBaseBleuScore()
    {
        return $this->base_bleu_score;
    }

    /**
     * Output only. BLEU score for base model.
     *
     * Generated from protobuf field <code>double base_bleu_score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setBaseBleuScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->base_bleu_score = $var;

        return $this;
    }

}

