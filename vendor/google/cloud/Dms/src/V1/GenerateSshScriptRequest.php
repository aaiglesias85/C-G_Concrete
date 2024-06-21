<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'GenerateSshScript' request.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.GenerateSshScriptRequest</code>
 */
class GenerateSshScriptRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the migration job resource to generate the SSH script.
     *
     * Generated from protobuf field <code>string migration_job = 1 [(.google.api.resource_reference) = {</code>
     */
    private $migration_job = '';
    /**
     * Required. Bastion VM Instance name to use or to create.
     *
     * Generated from protobuf field <code>string vm = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $vm = '';
    /**
     * The port that will be open on the bastion host
     *
     * Generated from protobuf field <code>int32 vm_port = 3;</code>
     */
    private $vm_port = 0;
    protected $vm_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $migration_job
     *           Name of the migration job resource to generate the SSH script.
     *     @type string $vm
     *           Required. Bastion VM Instance name to use or to create.
     *     @type \Google\Cloud\CloudDms\V1\VmCreationConfig $vm_creation_config
     *           The VM creation configuration
     *     @type \Google\Cloud\CloudDms\V1\VmSelectionConfig $vm_selection_config
     *           The VM selection configuration
     *     @type int $vm_port
     *           The port that will be open on the bastion host
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the migration job resource to generate the SSH script.
     *
     * Generated from protobuf field <code>string migration_job = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getMigrationJob()
    {
        return $this->migration_job;
    }

    /**
     * Name of the migration job resource to generate the SSH script.
     *
     * Generated from protobuf field <code>string migration_job = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setMigrationJob($var)
    {
        GPBUtil::checkString($var, True);
        $this->migration_job = $var;

        return $this;
    }

    /**
     * Required. Bastion VM Instance name to use or to create.
     *
     * Generated from protobuf field <code>string vm = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVm()
    {
        return $this->vm;
    }

    /**
     * Required. Bastion VM Instance name to use or to create.
     *
     * Generated from protobuf field <code>string vm = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVm($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm = $var;

        return $this;
    }

    /**
     * The VM creation configuration
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.VmCreationConfig vm_creation_config = 100;</code>
     * @return \Google\Cloud\CloudDms\V1\VmCreationConfig|null
     */
    public function getVmCreationConfig()
    {
        return $this->readOneof(100);
    }

    public function hasVmCreationConfig()
    {
        return $this->hasOneof(100);
    }

    /**
     * The VM creation configuration
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.VmCreationConfig vm_creation_config = 100;</code>
     * @param \Google\Cloud\CloudDms\V1\VmCreationConfig $var
     * @return $this
     */
    public function setVmCreationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\VmCreationConfig::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * The VM selection configuration
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.VmSelectionConfig vm_selection_config = 101;</code>
     * @return \Google\Cloud\CloudDms\V1\VmSelectionConfig|null
     */
    public function getVmSelectionConfig()
    {
        return $this->readOneof(101);
    }

    public function hasVmSelectionConfig()
    {
        return $this->hasOneof(101);
    }

    /**
     * The VM selection configuration
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.VmSelectionConfig vm_selection_config = 101;</code>
     * @param \Google\Cloud\CloudDms\V1\VmSelectionConfig $var
     * @return $this
     */
    public function setVmSelectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\VmSelectionConfig::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * The port that will be open on the bastion host
     *
     * Generated from protobuf field <code>int32 vm_port = 3;</code>
     * @return int
     */
    public function getVmPort()
    {
        return $this->vm_port;
    }

    /**
     * The port that will be open on the bastion host
     *
     * Generated from protobuf field <code>int32 vm_port = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setVmPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->vm_port = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getVmConfig()
    {
        return $this->whichOneof("vm_config");
    }

}

