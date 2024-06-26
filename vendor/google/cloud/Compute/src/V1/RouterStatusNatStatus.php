<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Status of a NAT contained in this router.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterStatusNatStatus</code>
 */
class RouterStatusNatStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of IPs auto-allocated for NAT. Example: ["1.1.1.1", "129.2.16.89"]
     *
     * Generated from protobuf field <code>repeated string auto_allocated_nat_ips = 510794246;</code>
     */
    private $auto_allocated_nat_ips;
    /**
     * A list of IPs auto-allocated for NAT that are in drain mode. Example: ["1.1.1.1", "179.12.26.133"].
     *
     * Generated from protobuf field <code>repeated string drain_auto_allocated_nat_ips = 309184557;</code>
     */
    private $drain_auto_allocated_nat_ips;
    /**
     * A list of IPs user-allocated for NAT that are in drain mode. Example: ["1.1.1.1", "179.12.26.133"].
     *
     * Generated from protobuf field <code>repeated string drain_user_allocated_nat_ips = 305268553;</code>
     */
    private $drain_user_allocated_nat_ips;
    /**
     * The number of extra IPs to allocate. This will be greater than 0 only if user-specified IPs are NOT enough to allow all configured VMs to use NAT. This value is meaningful only when auto-allocation of NAT IPs is *not* used.
     *
     * Generated from protobuf field <code>optional int32 min_extra_nat_ips_needed = 365786338;</code>
     */
    private $min_extra_nat_ips_needed = null;
    /**
     * Unique name of this NAT.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * Number of VM endpoints (i.e., Nics) that can use NAT.
     *
     * Generated from protobuf field <code>optional int32 num_vm_endpoints_with_nat_mappings = 512367468;</code>
     */
    private $num_vm_endpoints_with_nat_mappings = null;
    /**
     * Status of rules in this NAT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterStatusNatStatusNatRuleStatus rule_status = 140223125;</code>
     */
    private $rule_status;
    /**
     * A list of fully qualified URLs of reserved IP address resources.
     *
     * Generated from protobuf field <code>repeated string user_allocated_nat_ip_resources = 212776151;</code>
     */
    private $user_allocated_nat_ip_resources;
    /**
     * A list of IPs user-allocated for NAT. They will be raw IP strings like "179.12.26.133".
     *
     * Generated from protobuf field <code>repeated string user_allocated_nat_ips = 506878242;</code>
     */
    private $user_allocated_nat_ips;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $auto_allocated_nat_ips
     *           A list of IPs auto-allocated for NAT. Example: ["1.1.1.1", "129.2.16.89"]
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $drain_auto_allocated_nat_ips
     *           A list of IPs auto-allocated for NAT that are in drain mode. Example: ["1.1.1.1", "179.12.26.133"].
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $drain_user_allocated_nat_ips
     *           A list of IPs user-allocated for NAT that are in drain mode. Example: ["1.1.1.1", "179.12.26.133"].
     *     @type int $min_extra_nat_ips_needed
     *           The number of extra IPs to allocate. This will be greater than 0 only if user-specified IPs are NOT enough to allow all configured VMs to use NAT. This value is meaningful only when auto-allocation of NAT IPs is *not* used.
     *     @type string $name
     *           Unique name of this NAT.
     *     @type int $num_vm_endpoints_with_nat_mappings
     *           Number of VM endpoints (i.e., Nics) that can use NAT.
     *     @type \Google\Cloud\Compute\V1\RouterStatusNatStatusNatRuleStatus[]|\Google\Protobuf\Internal\RepeatedField $rule_status
     *           Status of rules in this NAT.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $user_allocated_nat_ip_resources
     *           A list of fully qualified URLs of reserved IP address resources.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $user_allocated_nat_ips
     *           A list of IPs user-allocated for NAT. They will be raw IP strings like "179.12.26.133".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of IPs auto-allocated for NAT. Example: ["1.1.1.1", "129.2.16.89"]
     *
     * Generated from protobuf field <code>repeated string auto_allocated_nat_ips = 510794246;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAutoAllocatedNatIps()
    {
        return $this->auto_allocated_nat_ips;
    }

    /**
     * A list of IPs auto-allocated for NAT. Example: ["1.1.1.1", "129.2.16.89"]
     *
     * Generated from protobuf field <code>repeated string auto_allocated_nat_ips = 510794246;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAutoAllocatedNatIps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->auto_allocated_nat_ips = $arr;

        return $this;
    }

    /**
     * A list of IPs auto-allocated for NAT that are in drain mode. Example: ["1.1.1.1", "179.12.26.133"].
     *
     * Generated from protobuf field <code>repeated string drain_auto_allocated_nat_ips = 309184557;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDrainAutoAllocatedNatIps()
    {
        return $this->drain_auto_allocated_nat_ips;
    }

    /**
     * A list of IPs auto-allocated for NAT that are in drain mode. Example: ["1.1.1.1", "179.12.26.133"].
     *
     * Generated from protobuf field <code>repeated string drain_auto_allocated_nat_ips = 309184557;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDrainAutoAllocatedNatIps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->drain_auto_allocated_nat_ips = $arr;

        return $this;
    }

    /**
     * A list of IPs user-allocated for NAT that are in drain mode. Example: ["1.1.1.1", "179.12.26.133"].
     *
     * Generated from protobuf field <code>repeated string drain_user_allocated_nat_ips = 305268553;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDrainUserAllocatedNatIps()
    {
        return $this->drain_user_allocated_nat_ips;
    }

    /**
     * A list of IPs user-allocated for NAT that are in drain mode. Example: ["1.1.1.1", "179.12.26.133"].
     *
     * Generated from protobuf field <code>repeated string drain_user_allocated_nat_ips = 305268553;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDrainUserAllocatedNatIps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->drain_user_allocated_nat_ips = $arr;

        return $this;
    }

    /**
     * The number of extra IPs to allocate. This will be greater than 0 only if user-specified IPs are NOT enough to allow all configured VMs to use NAT. This value is meaningful only when auto-allocation of NAT IPs is *not* used.
     *
     * Generated from protobuf field <code>optional int32 min_extra_nat_ips_needed = 365786338;</code>
     * @return int
     */
    public function getMinExtraNatIpsNeeded()
    {
        return isset($this->min_extra_nat_ips_needed) ? $this->min_extra_nat_ips_needed : 0;
    }

    public function hasMinExtraNatIpsNeeded()
    {
        return isset($this->min_extra_nat_ips_needed);
    }

    public function clearMinExtraNatIpsNeeded()
    {
        unset($this->min_extra_nat_ips_needed);
    }

    /**
     * The number of extra IPs to allocate. This will be greater than 0 only if user-specified IPs are NOT enough to allow all configured VMs to use NAT. This value is meaningful only when auto-allocation of NAT IPs is *not* used.
     *
     * Generated from protobuf field <code>optional int32 min_extra_nat_ips_needed = 365786338;</code>
     * @param int $var
     * @return $this
     */
    public function setMinExtraNatIpsNeeded($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_extra_nat_ips_needed = $var;

        return $this;
    }

    /**
     * Unique name of this NAT.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Unique name of this NAT.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
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
     * Number of VM endpoints (i.e., Nics) that can use NAT.
     *
     * Generated from protobuf field <code>optional int32 num_vm_endpoints_with_nat_mappings = 512367468;</code>
     * @return int
     */
    public function getNumVmEndpointsWithNatMappings()
    {
        return isset($this->num_vm_endpoints_with_nat_mappings) ? $this->num_vm_endpoints_with_nat_mappings : 0;
    }

    public function hasNumVmEndpointsWithNatMappings()
    {
        return isset($this->num_vm_endpoints_with_nat_mappings);
    }

    public function clearNumVmEndpointsWithNatMappings()
    {
        unset($this->num_vm_endpoints_with_nat_mappings);
    }

    /**
     * Number of VM endpoints (i.e., Nics) that can use NAT.
     *
     * Generated from protobuf field <code>optional int32 num_vm_endpoints_with_nat_mappings = 512367468;</code>
     * @param int $var
     * @return $this
     */
    public function setNumVmEndpointsWithNatMappings($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_vm_endpoints_with_nat_mappings = $var;

        return $this;
    }

    /**
     * Status of rules in this NAT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterStatusNatStatusNatRuleStatus rule_status = 140223125;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuleStatus()
    {
        return $this->rule_status;
    }

    /**
     * Status of rules in this NAT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterStatusNatStatusNatRuleStatus rule_status = 140223125;</code>
     * @param \Google\Cloud\Compute\V1\RouterStatusNatStatusNatRuleStatus[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuleStatus($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\RouterStatusNatStatusNatRuleStatus::class);
        $this->rule_status = $arr;

        return $this;
    }

    /**
     * A list of fully qualified URLs of reserved IP address resources.
     *
     * Generated from protobuf field <code>repeated string user_allocated_nat_ip_resources = 212776151;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserAllocatedNatIpResources()
    {
        return $this->user_allocated_nat_ip_resources;
    }

    /**
     * A list of fully qualified URLs of reserved IP address resources.
     *
     * Generated from protobuf field <code>repeated string user_allocated_nat_ip_resources = 212776151;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserAllocatedNatIpResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_allocated_nat_ip_resources = $arr;

        return $this;
    }

    /**
     * A list of IPs user-allocated for NAT. They will be raw IP strings like "179.12.26.133".
     *
     * Generated from protobuf field <code>repeated string user_allocated_nat_ips = 506878242;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserAllocatedNatIps()
    {
        return $this->user_allocated_nat_ips;
    }

    /**
     * A list of IPs user-allocated for NAT. They will be raw IP strings like "179.12.26.133".
     *
     * Generated from protobuf field <code>repeated string user_allocated_nat_ips = 506878242;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserAllocatedNatIps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_allocated_nat_ips = $arr;

        return $this;
    }

}

