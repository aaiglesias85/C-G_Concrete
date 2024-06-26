<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CloneJob describes the process of creating a clone of a
 * [MigratingVM][google.cloud.vmmigration.v1.MigratingVm] to the
 * requested target based on the latest successful uploaded snapshots.
 * While the migration cycles of a MigratingVm take place, it is possible to
 * verify the uploaded VM can be started in the cloud, by creating a clone. The
 * clone can be created without any downtime, and it is created using the latest
 * snapshots which are already in the cloud. The cloneJob is only responsible
 * for its work, not its products, which means once it is finished, it will
 * never touch the instance it created. It will only delete it in case of the
 * CloneJob being cancelled or upon failure to clone.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.CloneJob</code>
 */
class CloneJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The time the clone job was created (as an API call, not when it was
     * actually created in the target).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * The name of the clone.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';
    /**
     * Output only. State of the clone job.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.CloneJob.State state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The time the state was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state_time = null;
    /**
     * Output only. Provides details for the errors that led to the Clone Job's state.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $error = null;
    protected $target_vm_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VMMigration\V1\ComputeEngineTargetDetails $compute_engine_target_details
     *           Output only. Details of the target VM in Compute Engine.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the clone job was created (as an API call, not when it was
     *           actually created in the target).
     *     @type string $name
     *           The name of the clone.
     *     @type int $state
     *           Output only. State of the clone job.
     *     @type \Google\Protobuf\Timestamp $state_time
     *           Output only. The time the state was last updated.
     *     @type \Google\Rpc\Status $error
     *           Output only. Provides details for the errors that led to the Clone Job's state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Details of the target VM in Compute Engine.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineTargetDetails compute_engine_target_details = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\VMMigration\V1\ComputeEngineTargetDetails|null
     */
    public function getComputeEngineTargetDetails()
    {
        return $this->readOneof(20);
    }

    public function hasComputeEngineTargetDetails()
    {
        return $this->hasOneof(20);
    }

    /**
     * Output only. Details of the target VM in Compute Engine.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineTargetDetails compute_engine_target_details = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\VMMigration\V1\ComputeEngineTargetDetails $var
     * @return $this
     */
    public function setComputeEngineTargetDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\ComputeEngineTargetDetails::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * Output only. The time the clone job was created (as an API call, not when it was
     * actually created in the target).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the clone job was created (as an API call, not when it was
     * actually created in the target).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The name of the clone.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the clone.
     *
     * Generated from protobuf field <code>string name = 3;</code>
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
     * Output only. State of the clone job.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.CloneJob.State state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the clone job.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.CloneJob.State state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\CloneJob\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The time the state was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStateTime()
    {
        return $this->state_time;
    }

    public function hasStateTime()
    {
        return isset($this->state_time);
    }

    public function clearStateTime()
    {
        unset($this->state_time);
    }

    /**
     * Output only. The time the state was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->state_time = $var;

        return $this;
    }

    /**
     * Output only. Provides details for the errors that led to the Clone Job's state.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Output only. Provides details for the errors that led to the Clone Job's state.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetVmDetails()
    {
        return $this->whichOneof("target_vm_details");
    }

}

