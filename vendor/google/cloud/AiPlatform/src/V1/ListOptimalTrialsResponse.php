<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vizier_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [VizierService.ListOptimalTrials][google.cloud.aiplatform.v1.VizierService.ListOptimalTrials].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListOptimalTrialsResponse</code>
 */
class ListOptimalTrialsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The pareto-optimal Trials for multiple objective Study or the
     * optimal trial for single objective Study. The definition of
     * pareto-optimal can be checked in wiki page.
     * https://en.wikipedia.org/wiki/Pareto_efficiency
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Trial optimal_trials = 1;</code>
     */
    private $optimal_trials;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Trial[]|\Google\Protobuf\Internal\RepeatedField $optimal_trials
     *           The pareto-optimal Trials for multiple objective Study or the
     *           optimal trial for single objective Study. The definition of
     *           pareto-optimal can be checked in wiki page.
     *           https://en.wikipedia.org/wiki/Pareto_efficiency
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VizierService::initOnce();
        parent::__construct($data);
    }

    /**
     * The pareto-optimal Trials for multiple objective Study or the
     * optimal trial for single objective Study. The definition of
     * pareto-optimal can be checked in wiki page.
     * https://en.wikipedia.org/wiki/Pareto_efficiency
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Trial optimal_trials = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptimalTrials()
    {
        return $this->optimal_trials;
    }

    /**
     * The pareto-optimal Trials for multiple objective Study or the
     * optimal trial for single objective Study. The definition of
     * pareto-optimal can be checked in wiki page.
     * https://en.wikipedia.org/wiki/Pareto_efficiency
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Trial optimal_trials = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\Trial[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOptimalTrials($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Trial::class);
        $this->optimal_trials = $arr;

        return $this;
    }

}

