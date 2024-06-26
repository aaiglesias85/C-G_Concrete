<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManagerStatus</code>
 */
class InstanceGroupManagerStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The URL of the Autoscaler that targets this instance group manager.
     *
     * Generated from protobuf field <code>optional string autoscaler = 517258967;</code>
     */
    private $autoscaler = null;
    /**
     * [Output Only] A bit indicating whether the managed instance group is in a stable state. A stable state means that: none of the instances in the managed instance group is currently undergoing any type of change (for example, creation, restart, or deletion); no future changes are scheduled for instances in the managed instance group; and the managed instance group itself is not being modified.
     *
     * Generated from protobuf field <code>optional bool is_stable = 108410864;</code>
     */
    private $is_stable = null;
    /**
     * [Output Only] Stateful status of the given Instance Group Manager.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceGroupManagerStatusStateful stateful = 244462412;</code>
     */
    private $stateful = null;
    /**
     * [Output Only] A status of consistency of Instances' versions with their target version specified by version field on Instance Group Manager.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceGroupManagerStatusVersionTarget version_target = 289386200;</code>
     */
    private $version_target = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $autoscaler
     *           [Output Only] The URL of the Autoscaler that targets this instance group manager.
     *     @type bool $is_stable
     *           [Output Only] A bit indicating whether the managed instance group is in a stable state. A stable state means that: none of the instances in the managed instance group is currently undergoing any type of change (for example, creation, restart, or deletion); no future changes are scheduled for instances in the managed instance group; and the managed instance group itself is not being modified.
     *     @type \Google\Cloud\Compute\V1\InstanceGroupManagerStatusStateful $stateful
     *           [Output Only] Stateful status of the given Instance Group Manager.
     *     @type \Google\Cloud\Compute\V1\InstanceGroupManagerStatusVersionTarget $version_target
     *           [Output Only] A status of consistency of Instances' versions with their target version specified by version field on Instance Group Manager.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The URL of the Autoscaler that targets this instance group manager.
     *
     * Generated from protobuf field <code>optional string autoscaler = 517258967;</code>
     * @return string
     */
    public function getAutoscaler()
    {
        return isset($this->autoscaler) ? $this->autoscaler : '';
    }

    public function hasAutoscaler()
    {
        return isset($this->autoscaler);
    }

    public function clearAutoscaler()
    {
        unset($this->autoscaler);
    }

    /**
     * [Output Only] The URL of the Autoscaler that targets this instance group manager.
     *
     * Generated from protobuf field <code>optional string autoscaler = 517258967;</code>
     * @param string $var
     * @return $this
     */
    public function setAutoscaler($var)
    {
        GPBUtil::checkString($var, True);
        $this->autoscaler = $var;

        return $this;
    }

    /**
     * [Output Only] A bit indicating whether the managed instance group is in a stable state. A stable state means that: none of the instances in the managed instance group is currently undergoing any type of change (for example, creation, restart, or deletion); no future changes are scheduled for instances in the managed instance group; and the managed instance group itself is not being modified.
     *
     * Generated from protobuf field <code>optional bool is_stable = 108410864;</code>
     * @return bool
     */
    public function getIsStable()
    {
        return isset($this->is_stable) ? $this->is_stable : false;
    }

    public function hasIsStable()
    {
        return isset($this->is_stable);
    }

    public function clearIsStable()
    {
        unset($this->is_stable);
    }

    /**
     * [Output Only] A bit indicating whether the managed instance group is in a stable state. A stable state means that: none of the instances in the managed instance group is currently undergoing any type of change (for example, creation, restart, or deletion); no future changes are scheduled for instances in the managed instance group; and the managed instance group itself is not being modified.
     *
     * Generated from protobuf field <code>optional bool is_stable = 108410864;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsStable($var)
    {
        GPBUtil::checkBool($var);
        $this->is_stable = $var;

        return $this;
    }

    /**
     * [Output Only] Stateful status of the given Instance Group Manager.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceGroupManagerStatusStateful stateful = 244462412;</code>
     * @return \Google\Cloud\Compute\V1\InstanceGroupManagerStatusStateful|null
     */
    public function getStateful()
    {
        return $this->stateful;
    }

    public function hasStateful()
    {
        return isset($this->stateful);
    }

    public function clearStateful()
    {
        unset($this->stateful);
    }

    /**
     * [Output Only] Stateful status of the given Instance Group Manager.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceGroupManagerStatusStateful stateful = 244462412;</code>
     * @param \Google\Cloud\Compute\V1\InstanceGroupManagerStatusStateful $var
     * @return $this
     */
    public function setStateful($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstanceGroupManagerStatusStateful::class);
        $this->stateful = $var;

        return $this;
    }

    /**
     * [Output Only] A status of consistency of Instances' versions with their target version specified by version field on Instance Group Manager.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceGroupManagerStatusVersionTarget version_target = 289386200;</code>
     * @return \Google\Cloud\Compute\V1\InstanceGroupManagerStatusVersionTarget|null
     */
    public function getVersionTarget()
    {
        return $this->version_target;
    }

    public function hasVersionTarget()
    {
        return isset($this->version_target);
    }

    public function clearVersionTarget()
    {
        unset($this->version_target);
    }

    /**
     * [Output Only] A status of consistency of Instances' versions with their target version specified by version field on Instance Group Manager.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceGroupManagerStatusVersionTarget version_target = 289386200;</code>
     * @param \Google\Cloud\Compute\V1\InstanceGroupManagerStatusVersionTarget $var
     * @return $this
     */
    public function setVersionTarget($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstanceGroupManagerStatusVersionTarget::class);
        $this->version_target = $var;

        return $this;
    }

}

