<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VM creation configuration message
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.VmCreationConfig</code>
 */
class VmCreationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. VM instance machine type to create.
     *
     * Generated from protobuf field <code>string vm_machine_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $vm_machine_type = '';
    /**
     * The Google Cloud Platform zone to create the VM in.
     *
     * Generated from protobuf field <code>string vm_zone = 2;</code>
     */
    private $vm_zone = '';
    /**
     * The subnet name the vm needs to be created in.
     *
     * Generated from protobuf field <code>string subnet = 3;</code>
     */
    private $subnet = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $vm_machine_type
     *           Required. VM instance machine type to create.
     *     @type string $vm_zone
     *           The Google Cloud Platform zone to create the VM in.
     *     @type string $subnet
     *           The subnet name the vm needs to be created in.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. VM instance machine type to create.
     *
     * Generated from protobuf field <code>string vm_machine_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVmMachineType()
    {
        return $this->vm_machine_type;
    }

    /**
     * Required. VM instance machine type to create.
     *
     * Generated from protobuf field <code>string vm_machine_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVmMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_machine_type = $var;

        return $this;
    }

    /**
     * The Google Cloud Platform zone to create the VM in.
     *
     * Generated from protobuf field <code>string vm_zone = 2;</code>
     * @return string
     */
    public function getVmZone()
    {
        return $this->vm_zone;
    }

    /**
     * The Google Cloud Platform zone to create the VM in.
     *
     * Generated from protobuf field <code>string vm_zone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVmZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_zone = $var;

        return $this;
    }

    /**
     * The subnet name the vm needs to be created in.
     *
     * Generated from protobuf field <code>string subnet = 3;</code>
     * @return string
     */
    public function getSubnet()
    {
        return $this->subnet;
    }

    /**
     * The subnet name the vm needs to be created in.
     *
     * Generated from protobuf field <code>string subnet = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnet($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnet = $var;

        return $this;
    }

}

