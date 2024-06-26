<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupsScopedList</code>
 */
class InstanceGroupsScopedList extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The list of instance groups that are contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InstanceGroup instance_groups = 366469310;</code>
     */
    private $instance_groups;
    /**
     * [Output Only] An informational warning that replaces the list of instance groups when the list is empty.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     */
    private $warning = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\InstanceGroup[]|\Google\Protobuf\Internal\RepeatedField $instance_groups
     *           [Output Only] The list of instance groups that are contained in this scope.
     *     @type \Google\Cloud\Compute\V1\Warning $warning
     *           [Output Only] An informational warning that replaces the list of instance groups when the list is empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The list of instance groups that are contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InstanceGroup instance_groups = 366469310;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstanceGroups()
    {
        return $this->instance_groups;
    }

    /**
     * [Output Only] The list of instance groups that are contained in this scope.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InstanceGroup instance_groups = 366469310;</code>
     * @param \Google\Cloud\Compute\V1\InstanceGroup[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstanceGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\InstanceGroup::class);
        $this->instance_groups = $arr;

        return $this;
    }

    /**
     * [Output Only] An informational warning that replaces the list of instance groups when the list is empty.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @return \Google\Cloud\Compute\V1\Warning|null
     */
    public function getWarning()
    {
        return $this->warning;
    }

    public function hasWarning()
    {
        return isset($this->warning);
    }

    public function clearWarning()
    {
        unset($this->warning);
    }

    /**
     * [Output Only] An informational warning that replaces the list of instance groups when the list is empty.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @param \Google\Cloud\Compute\V1\Warning $var
     * @return $this
     */
    public function setWarning($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Warning::class);
        $this->warning = $var;

        return $this;
    }

}

