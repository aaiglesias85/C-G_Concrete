<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information about how a particular
 * [google.dataflow.v1beta3.Step][google.dataflow.v1beta3.Step] will be executed.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.JobExecutionStageInfo</code>
 */
class JobExecutionStageInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The steps associated with the execution stage.
     * Note that stages may have several steps, and that a given step
     * might be run by more than one stage.
     *
     * Generated from protobuf field <code>repeated string step_name = 1;</code>
     */
    private $step_name;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $step_name
     *           The steps associated with the execution stage.
     *           Note that stages may have several steps, and that a given step
     *           might be run by more than one stage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * The steps associated with the execution stage.
     * Note that stages may have several steps, and that a given step
     * might be run by more than one stage.
     *
     * Generated from protobuf field <code>repeated string step_name = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStepName()
    {
        return $this->step_name;
    }

    /**
     * The steps associated with the execution stage.
     * Note that stages may have several steps, and that a given step
     * might be run by more than one stage.
     *
     * Generated from protobuf field <code>repeated string step_name = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStepName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->step_name = $arr;

        return $this;
    }

}

