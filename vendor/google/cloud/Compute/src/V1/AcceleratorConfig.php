<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A specification of the type and number of accelerator cards attached to the instance.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AcceleratorConfig</code>
 */
class AcceleratorConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of the guest accelerator cards exposed to this instance.
     *
     * Generated from protobuf field <code>optional int32 accelerator_count = 504879675;</code>
     */
    private $accelerator_count = null;
    /**
     * Full or partial URL of the accelerator type resource to attach to this instance. For example: projects/my-project/zones/us-central1-c/acceleratorTypes/nvidia-tesla-p100 If you are creating an instance template, specify only the accelerator name. See GPUs on Compute Engine for a full list of accelerator types.
     *
     * Generated from protobuf field <code>optional string accelerator_type = 138031246;</code>
     */
    private $accelerator_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $accelerator_count
     *           The number of the guest accelerator cards exposed to this instance.
     *     @type string $accelerator_type
     *           Full or partial URL of the accelerator type resource to attach to this instance. For example: projects/my-project/zones/us-central1-c/acceleratorTypes/nvidia-tesla-p100 If you are creating an instance template, specify only the accelerator name. See GPUs on Compute Engine for a full list of accelerator types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of the guest accelerator cards exposed to this instance.
     *
     * Generated from protobuf field <code>optional int32 accelerator_count = 504879675;</code>
     * @return int
     */
    public function getAcceleratorCount()
    {
        return isset($this->accelerator_count) ? $this->accelerator_count : 0;
    }

    public function hasAcceleratorCount()
    {
        return isset($this->accelerator_count);
    }

    public function clearAcceleratorCount()
    {
        unset($this->accelerator_count);
    }

    /**
     * The number of the guest accelerator cards exposed to this instance.
     *
     * Generated from protobuf field <code>optional int32 accelerator_count = 504879675;</code>
     * @param int $var
     * @return $this
     */
    public function setAcceleratorCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->accelerator_count = $var;

        return $this;
    }

    /**
     * Full or partial URL of the accelerator type resource to attach to this instance. For example: projects/my-project/zones/us-central1-c/acceleratorTypes/nvidia-tesla-p100 If you are creating an instance template, specify only the accelerator name. See GPUs on Compute Engine for a full list of accelerator types.
     *
     * Generated from protobuf field <code>optional string accelerator_type = 138031246;</code>
     * @return string
     */
    public function getAcceleratorType()
    {
        return isset($this->accelerator_type) ? $this->accelerator_type : '';
    }

    public function hasAcceleratorType()
    {
        return isset($this->accelerator_type);
    }

    public function clearAcceleratorType()
    {
        unset($this->accelerator_type);
    }

    /**
     * Full or partial URL of the accelerator type resource to attach to this instance. For example: projects/my-project/zones/us-central1-c/acceleratorTypes/nvidia-tesla-p100 If you are creating an instance template, specify only the accelerator name. See GPUs on Compute Engine for a full list of accelerator types.
     *
     * Generated from protobuf field <code>optional string accelerator_type = 138031246;</code>
     * @param string $var
     * @return $this
     */
    public function setAcceleratorType($var)
    {
        GPBUtil::checkString($var, True);
        $this->accelerator_type = $var;

        return $this;
    }

}

