<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for SecurityPolicies.AddRule. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AddRuleSecurityPolicyRequest</code>
 */
class AddRuleSecurityPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * Name of the security policy to update.
     *
     * Generated from protobuf field <code>string security_policy = 171082513 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $security_policy = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRule security_policy_rule_resource = 402693443 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $security_policy_rule_resource = null;
    /**
     * If true, the request will not be committed.
     *
     * Generated from protobuf field <code>optional bool validate_only = 242744629;</code>
     */
    private $validate_only = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $security_policy
     *           Name of the security policy to update.
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRule $security_policy_rule_resource
     *           The body resource for this request
     *     @type bool $validate_only
     *           If true, the request will not be committed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
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
     * Name of the security policy to update.
     *
     * Generated from protobuf field <code>string security_policy = 171082513 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSecurityPolicy()
    {
        return $this->security_policy;
    }

    /**
     * Name of the security policy to update.
     *
     * Generated from protobuf field <code>string security_policy = 171082513 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSecurityPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->security_policy = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRule security_policy_rule_resource = 402693443 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRule|null
     */
    public function getSecurityPolicyRuleResource()
    {
        return $this->security_policy_rule_resource;
    }

    public function hasSecurityPolicyRuleResource()
    {
        return isset($this->security_policy_rule_resource);
    }

    public function clearSecurityPolicyRuleResource()
    {
        unset($this->security_policy_rule_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyRule security_policy_rule_resource = 402693443 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRule $var
     * @return $this
     */
    public function setSecurityPolicyRuleResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRule::class);
        $this->security_policy_rule_resource = $var;

        return $this;
    }

    /**
     * If true, the request will not be committed.
     *
     * Generated from protobuf field <code>optional bool validate_only = 242744629;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return isset($this->validate_only) ? $this->validate_only : false;
    }

    public function hasValidateOnly()
    {
        return isset($this->validate_only);
    }

    public function clearValidateOnly()
    {
        unset($this->validate_only);
    }

    /**
     * If true, the request will not be committed.
     *
     * Generated from protobuf field <code>optional bool validate_only = 242744629;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

