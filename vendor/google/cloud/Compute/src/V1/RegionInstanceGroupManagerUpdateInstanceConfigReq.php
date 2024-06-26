<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RegionInstanceGroupManagers.updatePerInstanceConfigs
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RegionInstanceGroupManagerUpdateInstanceConfigReq</code>
 */
class RegionInstanceGroupManagerUpdateInstanceConfigReq extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of per-instance configurations to insert or patch on this managed instance group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PerInstanceConfig per_instance_configs = 526265001;</code>
     */
    private $per_instance_configs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\PerInstanceConfig[]|\Google\Protobuf\Internal\RepeatedField $per_instance_configs
     *           The list of per-instance configurations to insert or patch on this managed instance group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of per-instance configurations to insert or patch on this managed instance group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PerInstanceConfig per_instance_configs = 526265001;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPerInstanceConfigs()
    {
        return $this->per_instance_configs;
    }

    /**
     * The list of per-instance configurations to insert or patch on this managed instance group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.PerInstanceConfig per_instance_configs = 526265001;</code>
     * @param \Google\Cloud\Compute\V1\PerInstanceConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPerInstanceConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\PerInstanceConfig::class);
        $this->per_instance_configs = $arr;

        return $this;
    }

}

