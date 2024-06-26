<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_monitoring.proto

namespace Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The config for integrating with Vertex Explainable AI. Only applicable if
 * the Model has explanation_spec populated.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.ExplanationConfig</code>
 */
class ExplanationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * If want to analyze the Vertex Explainable AI feature attribute scores or
     * not. If set to true, Vertex AI will log the feature attributions from
     * explain response and do the skew/drift detection for them.
     *
     * Generated from protobuf field <code>bool enable_feature_attributes = 1;</code>
     */
    private $enable_feature_attributes = false;
    /**
     * Predictions generated by the BatchPredictionJob using baseline dataset.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.ExplanationConfig.ExplanationBaseline explanation_baseline = 2;</code>
     */
    private $explanation_baseline = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_feature_attributes
     *           If want to analyze the Vertex Explainable AI feature attribute scores or
     *           not. If set to true, Vertex AI will log the feature attributions from
     *           explain response and do the skew/drift detection for them.
     *     @type \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\ExplanationConfig\ExplanationBaseline $explanation_baseline
     *           Predictions generated by the BatchPredictionJob using baseline dataset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * If want to analyze the Vertex Explainable AI feature attribute scores or
     * not. If set to true, Vertex AI will log the feature attributions from
     * explain response and do the skew/drift detection for them.
     *
     * Generated from protobuf field <code>bool enable_feature_attributes = 1;</code>
     * @return bool
     */
    public function getEnableFeatureAttributes()
    {
        return $this->enable_feature_attributes;
    }

    /**
     * If want to analyze the Vertex Explainable AI feature attribute scores or
     * not. If set to true, Vertex AI will log the feature attributions from
     * explain response and do the skew/drift detection for them.
     *
     * Generated from protobuf field <code>bool enable_feature_attributes = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableFeatureAttributes($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_feature_attributes = $var;

        return $this;
    }

    /**
     * Predictions generated by the BatchPredictionJob using baseline dataset.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.ExplanationConfig.ExplanationBaseline explanation_baseline = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\ExplanationConfig\ExplanationBaseline|null
     */
    public function getExplanationBaseline()
    {
        return $this->explanation_baseline;
    }

    public function hasExplanationBaseline()
    {
        return isset($this->explanation_baseline);
    }

    public function clearExplanationBaseline()
    {
        unset($this->explanation_baseline);
    }

    /**
     * Predictions generated by the BatchPredictionJob using baseline dataset.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.ExplanationConfig.ExplanationBaseline explanation_baseline = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\ExplanationConfig\ExplanationBaseline $var
     * @return $this
     */
    public function setExplanationBaseline($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\ExplanationConfig\ExplanationBaseline::class);
        $this->explanation_baseline = $var;

        return $this;
    }

}


