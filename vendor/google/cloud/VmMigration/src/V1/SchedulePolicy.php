<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A policy for scheduling replications.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.SchedulePolicy</code>
 */
class SchedulePolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The idle duration between replication stages.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_duration = 1;</code>
     */
    private $idle_duration = null;
    /**
     * A flag to indicate whether to skip OS adaptation during the replication
     * sync. OS adaptation is a process where the VM's operating system undergoes
     * changes and adaptations to fully function on Compute Engine.
     *
     * Generated from protobuf field <code>bool skip_os_adaptation = 2;</code>
     */
    private $skip_os_adaptation = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $idle_duration
     *           The idle duration between replication stages.
     *     @type bool $skip_os_adaptation
     *           A flag to indicate whether to skip OS adaptation during the replication
     *           sync. OS adaptation is a process where the VM's operating system undergoes
     *           changes and adaptations to fully function on Compute Engine.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * The idle duration between replication stages.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_duration = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getIdleDuration()
    {
        return $this->idle_duration;
    }

    public function hasIdleDuration()
    {
        return isset($this->idle_duration);
    }

    public function clearIdleDuration()
    {
        unset($this->idle_duration);
    }

    /**
     * The idle duration between replication stages.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setIdleDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->idle_duration = $var;

        return $this;
    }

    /**
     * A flag to indicate whether to skip OS adaptation during the replication
     * sync. OS adaptation is a process where the VM's operating system undergoes
     * changes and adaptations to fully function on Compute Engine.
     *
     * Generated from protobuf field <code>bool skip_os_adaptation = 2;</code>
     * @return bool
     */
    public function getSkipOsAdaptation()
    {
        return $this->skip_os_adaptation;
    }

    /**
     * A flag to indicate whether to skip OS adaptation during the replication
     * sync. OS adaptation is a process where the VM's operating system undergoes
     * changes and adaptations to fully function on Compute Engine.
     *
     * Generated from protobuf field <code>bool skip_os_adaptation = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipOsAdaptation($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_os_adaptation = $var;

        return $this;
    }

}

