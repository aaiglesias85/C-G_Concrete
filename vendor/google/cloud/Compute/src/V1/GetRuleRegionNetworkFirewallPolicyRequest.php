<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionNetworkFirewallPolicies.GetRule. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetRuleRegionNetworkFirewallPolicyRequest</code>
 */
class GetRuleRegionNetworkFirewallPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the firewall policy to which the queried rule belongs.
     *
     * Generated from protobuf field <code>string firewall_policy = 498173265 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $firewall_policy = '';
    /**
     * The priority of the rule to get from the firewall policy.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     */
    private $priority = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $firewall_policy
     *           Name of the firewall policy to which the queried rule belongs.
     *     @type int $priority
     *           The priority of the rule to get from the firewall policy.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region scoping this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the firewall policy to which the queried rule belongs.
     *
     * Generated from protobuf field <code>string firewall_policy = 498173265 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFirewallPolicy()
    {
        return $this->firewall_policy;
    }

    /**
     * Name of the firewall policy to which the queried rule belongs.
     *
     * Generated from protobuf field <code>string firewall_policy = 498173265 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFirewallPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->firewall_policy = $var;

        return $this;
    }

    /**
     * The priority of the rule to get from the firewall policy.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     * @return int
     */
    public function getPriority()
    {
        return isset($this->priority) ? $this->priority : 0;
    }

    public function hasPriority()
    {
        return isset($this->priority);
    }

    public function clearPriority()
    {
        unset($this->priority);
    }

    /**
     * The priority of the rule to get from the firewall policy.
     *
     * Generated from protobuf field <code>optional int32 priority = 445151652;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

