<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SecurityPoliciesWafConfig</code>
 */
class SecurityPoliciesWafConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.PreconfiguredWafSet waf_rules = 74899924;</code>
     */
    private $waf_rules = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\PreconfiguredWafSet $waf_rules
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.PreconfiguredWafSet waf_rules = 74899924;</code>
     * @return \Google\Cloud\Compute\V1\PreconfiguredWafSet|null
     */
    public function getWafRules()
    {
        return $this->waf_rules;
    }

    public function hasWafRules()
    {
        return isset($this->waf_rules);
    }

    public function clearWafRules()
    {
        unset($this->waf_rules);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.PreconfiguredWafSet waf_rules = 74899924;</code>
     * @param \Google\Cloud\Compute\V1\PreconfiguredWafSet $var
     * @return $this
     */
    public function setWafRules($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\PreconfiguredWafSet::class);
        $this->waf_rules = $var;

        return $this;
    }

}

