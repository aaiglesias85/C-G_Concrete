<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The status of a cluster and its instances.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ClusterStatus</code>
 */
class ClusterStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The cluster's state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterStatus.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Optional. Output only. Details of cluster's state.
     *
     * Generated from protobuf field <code>string detail = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $detail = '';
    /**
     * Output only. Time when this state was entered (see JSON representation of
     * [Timestamp](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state_start_time = null;
    /**
     * Output only. Additional state information that includes
     * status reported by the agent.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterStatus.Substate substate = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $substate = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Output only. The cluster's state.
     *     @type string $detail
     *           Optional. Output only. Details of cluster's state.
     *     @type \Google\Protobuf\Timestamp $state_start_time
     *           Output only. Time when this state was entered (see JSON representation of
     *           [Timestamp](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *     @type int $substate
     *           Output only. Additional state information that includes
     *           status reported by the agent.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The cluster's state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterStatus.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The cluster's state.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterStatus.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1\ClusterStatus\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. Output only. Details of cluster's state.
     *
     * Generated from protobuf field <code>string detail = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Optional. Output only. Details of cluster's state.
     *
     * Generated from protobuf field <code>string detail = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->detail = $var;

        return $this;
    }

    /**
     * Output only. Time when this state was entered (see JSON representation of
     * [Timestamp](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStateStartTime()
    {
        return $this->state_start_time;
    }

    public function hasStateStartTime()
    {
        return isset($this->state_start_time);
    }

    public function clearStateStartTime()
    {
        unset($this->state_start_time);
    }

    /**
     * Output only. Time when this state was entered (see JSON representation of
     * [Timestamp](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStateStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->state_start_time = $var;

        return $this;
    }

    /**
     * Output only. Additional state information that includes
     * status reported by the agent.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterStatus.Substate substate = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSubstate()
    {
        return $this->substate;
    }

    /**
     * Output only. Additional state information that includes
     * status reported by the agent.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterStatus.Substate substate = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSubstate($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1\ClusterStatus\Substate::class);
        $this->substate = $var;

        return $this;
    }

}

