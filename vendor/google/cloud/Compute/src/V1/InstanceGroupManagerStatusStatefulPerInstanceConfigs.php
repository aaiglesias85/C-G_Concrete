<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManagerStatusStatefulPerInstanceConfigs</code>
 */
class InstanceGroupManagerStatusStatefulPerInstanceConfigs extends \Google\Protobuf\Internal\Message
{
    /**
     * A bit indicating if all of the group's per-instance configurations (listed in the output of a listPerInstanceConfigs API call) have status EFFECTIVE or there are no per-instance-configs.
     *
     * Generated from protobuf field <code>optional bool all_effective = 516540553;</code>
     */
    private $all_effective = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $all_effective
     *           A bit indicating if all of the group's per-instance configurations (listed in the output of a listPerInstanceConfigs API call) have status EFFECTIVE or there are no per-instance-configs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A bit indicating if all of the group's per-instance configurations (listed in the output of a listPerInstanceConfigs API call) have status EFFECTIVE or there are no per-instance-configs.
     *
     * Generated from protobuf field <code>optional bool all_effective = 516540553;</code>
     * @return bool
     */
    public function getAllEffective()
    {
        return isset($this->all_effective) ? $this->all_effective : false;
    }

    public function hasAllEffective()
    {
        return isset($this->all_effective);
    }

    public function clearAllEffective()
    {
        unset($this->all_effective);
    }

    /**
     * A bit indicating if all of the group's per-instance configurations (listed in the output of a listPerInstanceConfigs API call) have status EFFECTIVE or there are no per-instance-configs.
     *
     * Generated from protobuf field <code>optional bool all_effective = 516540553;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllEffective($var)
    {
        GPBUtil::checkBool($var);
        $this->all_effective = $var;

        return $this;
    }

}

