<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Patch details for a VM instance. For more information about reviewing VM
 * instance details, see
 * [Listing all VM instance details for a specific patch
 * job](https://cloud.google.com/compute/docs/os-patch-management/manage-patch-jobs#list-instance-details).
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.PatchJobInstanceDetails</code>
 */
class PatchJobInstanceDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The instance name in the form `projects/&#42;&#47;zones/&#42;&#47;instances/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The unique identifier for the instance. This identifier is
     * defined by the server.
     *
     * Generated from protobuf field <code>string instance_system_id = 2;</code>
     */
    private $instance_system_id = '';
    /**
     * Current state of instance patch.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Instance.PatchState state = 3;</code>
     */
    private $state = 0;
    /**
     * If the patch fails, this field provides the reason.
     *
     * Generated from protobuf field <code>string failure_reason = 4;</code>
     */
    private $failure_reason = '';
    /**
     * The number of times the agent that the agent attempts to apply the patch.
     *
     * Generated from protobuf field <code>int64 attempt_count = 5;</code>
     */
    private $attempt_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The instance name in the form `projects/&#42;&#47;zones/&#42;&#47;instances/&#42;`
     *     @type string $instance_system_id
     *           The unique identifier for the instance. This identifier is
     *           defined by the server.
     *     @type int $state
     *           Current state of instance patch.
     *     @type string $failure_reason
     *           If the patch fails, this field provides the reason.
     *     @type int|string $attempt_count
     *           The number of times the agent that the agent attempts to apply the patch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * The instance name in the form `projects/&#42;&#47;zones/&#42;&#47;instances/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The instance name in the form `projects/&#42;&#47;zones/&#42;&#47;instances/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
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
     * The unique identifier for the instance. This identifier is
     * defined by the server.
     *
     * Generated from protobuf field <code>string instance_system_id = 2;</code>
     * @return string
     */
    public function getInstanceSystemId()
    {
        return $this->instance_system_id;
    }

    /**
     * The unique identifier for the instance. This identifier is
     * defined by the server.
     *
     * Generated from protobuf field <code>string instance_system_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceSystemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_system_id = $var;

        return $this;
    }

    /**
     * Current state of instance patch.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Instance.PatchState state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Current state of instance patch.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.Instance.PatchState state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\Instance\PatchState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * If the patch fails, this field provides the reason.
     *
     * Generated from protobuf field <code>string failure_reason = 4;</code>
     * @return string
     */
    public function getFailureReason()
    {
        return $this->failure_reason;
    }

    /**
     * If the patch fails, this field provides the reason.
     *
     * Generated from protobuf field <code>string failure_reason = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFailureReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_reason = $var;

        return $this;
    }

    /**
     * The number of times the agent that the agent attempts to apply the patch.
     *
     * Generated from protobuf field <code>int64 attempt_count = 5;</code>
     * @return int|string
     */
    public function getAttemptCount()
    {
        return $this->attempt_count;
    }

    /**
     * The number of times the agent that the agent attempts to apply the patch.
     *
     * Generated from protobuf field <code>int64 attempt_count = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAttemptCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->attempt_count = $var;

        return $this;
    }

}

