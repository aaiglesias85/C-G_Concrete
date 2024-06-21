<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_monitoring.proto

namespace Google\Cloud\AIPlatform\V1\SamplingStrategy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Requests are randomly selected.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SamplingStrategy.RandomSampleConfig</code>
 */
class RandomSampleConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Sample rate (0, 1]
     *
     * Generated from protobuf field <code>double sample_rate = 1;</code>
     */
    private $sample_rate = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $sample_rate
     *           Sample rate (0, 1]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Sample rate (0, 1]
     *
     * Generated from protobuf field <code>double sample_rate = 1;</code>
     * @return float
     */
    public function getSampleRate()
    {
        return $this->sample_rate;
    }

    /**
     * Sample rate (0, 1]
     *
     * Generated from protobuf field <code>double sample_rate = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setSampleRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->sample_rate = $var;

        return $this;
    }

}


