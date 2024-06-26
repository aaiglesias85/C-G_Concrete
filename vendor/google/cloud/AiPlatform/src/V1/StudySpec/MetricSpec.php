<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/study.proto

namespace Google\Cloud\AIPlatform\V1\StudySpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a metric to optimize.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.StudySpec.MetricSpec</code>
 */
class MetricSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the metric. Must not contain whitespaces and must be unique
     * amongst all MetricSpecs.
     *
     * Generated from protobuf field <code>string metric_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $metric_id = '';
    /**
     * Required. The optimization goal of the metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.MetricSpec.GoalType goal = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $goal = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $metric_id
     *           Required. The ID of the metric. Must not contain whitespaces and must be unique
     *           amongst all MetricSpecs.
     *     @type int $goal
     *           Required. The optimization goal of the metric.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Study::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the metric. Must not contain whitespaces and must be unique
     * amongst all MetricSpecs.
     *
     * Generated from protobuf field <code>string metric_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMetricId()
    {
        return $this->metric_id;
    }

    /**
     * Required. The ID of the metric. Must not contain whitespaces and must be unique
     * amongst all MetricSpecs.
     *
     * Generated from protobuf field <code>string metric_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMetricId($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_id = $var;

        return $this;
    }

    /**
     * Required. The optimization goal of the metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.MetricSpec.GoalType goal = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Required. The optimization goal of the metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.StudySpec.MetricSpec.GoalType goal = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setGoal($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\StudySpec\MetricSpec\GoalType::class);
        $this->goal = $var;

        return $this;
    }

}


