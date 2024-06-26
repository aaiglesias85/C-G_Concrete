<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/orgpolicy.proto

namespace Google\Cloud\OrgPolicy\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a Cloud Organization `PolicySpec` which is used to specify
 * `Constraints` for configurations of Cloud Platform resources.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.PolicySpec</code>
 */
class PolicySpec extends \Google\Protobuf\Internal\Message
{
    /**
     * An opaque tag indicating the current version of the `Policy`, used for
     * concurrency control.
     * This field is ignored if used in a `CreatePolicy` request.
     * When the `Policy` is returned from either a `GetPolicy` or a
     * `ListPolicies` request, this `etag` indicates the version of the
     * current `Policy` to use when executing a read-modify-write loop.
     * When the `Policy` is returned from a `GetEffectivePolicy` request, the
     * `etag` will be unset.
     *
     * Generated from protobuf field <code>string etag = 1;</code>
     */
    private $etag = '';
    /**
     * Output only. The time stamp this was previously updated. This
     * represents the last time a call to `CreatePolicy` or `UpdatePolicy` was
     * made for that `Policy`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Up to 10 PolicyRules are allowed.
     * In Policies for boolean constraints, the following requirements apply:
     *   - There must be one and only one PolicyRule where condition is unset.
     *   - BooleanPolicyRules with conditions must set `enforced` to the opposite
     *     of the PolicyRule without a condition.
     *   - During policy evaluation, PolicyRules with conditions that are
     *     true for a target resource take precedence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.orgpolicy.v2.PolicySpec.PolicyRule rules = 3;</code>
     */
    private $rules;
    /**
     * Determines the inheritance behavior for this `Policy`.
     * If `inherit_from_parent` is true, PolicyRules set higher up in the
     * hierarchy (up to the closest root) are inherited and present in the
     * effective policy. If it is false, then no rules are inherited, and this
     * Policy becomes the new root for evaluation.
     * This field can be set only for Policies which configure list constraints.
     *
     * Generated from protobuf field <code>bool inherit_from_parent = 4;</code>
     */
    private $inherit_from_parent = false;
    /**
     * Ignores policies set above this resource and restores the
     * `constraint_default` enforcement behavior of the specific `Constraint` at
     * this resource.
     * This field can be set in policies for either list or boolean
     * constraints. If set, `rules` must be empty and `inherit_from_parent`
     * must be set to false.
     *
     * Generated from protobuf field <code>bool reset = 5;</code>
     */
    private $reset = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $etag
     *           An opaque tag indicating the current version of the `Policy`, used for
     *           concurrency control.
     *           This field is ignored if used in a `CreatePolicy` request.
     *           When the `Policy` is returned from either a `GetPolicy` or a
     *           `ListPolicies` request, this `etag` indicates the version of the
     *           current `Policy` to use when executing a read-modify-write loop.
     *           When the `Policy` is returned from a `GetEffectivePolicy` request, the
     *           `etag` will be unset.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time stamp this was previously updated. This
     *           represents the last time a call to `CreatePolicy` or `UpdatePolicy` was
     *           made for that `Policy`.
     *     @type \Google\Cloud\OrgPolicy\V2\PolicySpec\PolicyRule[]|\Google\Protobuf\Internal\RepeatedField $rules
     *           Up to 10 PolicyRules are allowed.
     *           In Policies for boolean constraints, the following requirements apply:
     *             - There must be one and only one PolicyRule where condition is unset.
     *             - BooleanPolicyRules with conditions must set `enforced` to the opposite
     *               of the PolicyRule without a condition.
     *             - During policy evaluation, PolicyRules with conditions that are
     *               true for a target resource take precedence.
     *     @type bool $inherit_from_parent
     *           Determines the inheritance behavior for this `Policy`.
     *           If `inherit_from_parent` is true, PolicyRules set higher up in the
     *           hierarchy (up to the closest root) are inherited and present in the
     *           effective policy. If it is false, then no rules are inherited, and this
     *           Policy becomes the new root for evaluation.
     *           This field can be set only for Policies which configure list constraints.
     *     @type bool $reset
     *           Ignores policies set above this resource and restores the
     *           `constraint_default` enforcement behavior of the specific `Constraint` at
     *           this resource.
     *           This field can be set in policies for either list or boolean
     *           constraints. If set, `rules` must be empty and `inherit_from_parent`
     *           must be set to false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * An opaque tag indicating the current version of the `Policy`, used for
     * concurrency control.
     * This field is ignored if used in a `CreatePolicy` request.
     * When the `Policy` is returned from either a `GetPolicy` or a
     * `ListPolicies` request, this `etag` indicates the version of the
     * current `Policy` to use when executing a read-modify-write loop.
     * When the `Policy` is returned from a `GetEffectivePolicy` request, the
     * `etag` will be unset.
     *
     * Generated from protobuf field <code>string etag = 1;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * An opaque tag indicating the current version of the `Policy`, used for
     * concurrency control.
     * This field is ignored if used in a `CreatePolicy` request.
     * When the `Policy` is returned from either a `GetPolicy` or a
     * `ListPolicies` request, this `etag` indicates the version of the
     * current `Policy` to use when executing a read-modify-write loop.
     * When the `Policy` is returned from a `GetEffectivePolicy` request, the
     * `etag` will be unset.
     *
     * Generated from protobuf field <code>string etag = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. The time stamp this was previously updated. This
     * represents the last time a call to `CreatePolicy` or `UpdatePolicy` was
     * made for that `Policy`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time stamp this was previously updated. This
     * represents the last time a call to `CreatePolicy` or `UpdatePolicy` was
     * made for that `Policy`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Up to 10 PolicyRules are allowed.
     * In Policies for boolean constraints, the following requirements apply:
     *   - There must be one and only one PolicyRule where condition is unset.
     *   - BooleanPolicyRules with conditions must set `enforced` to the opposite
     *     of the PolicyRule without a condition.
     *   - During policy evaluation, PolicyRules with conditions that are
     *     true for a target resource take precedence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.orgpolicy.v2.PolicySpec.PolicyRule rules = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Up to 10 PolicyRules are allowed.
     * In Policies for boolean constraints, the following requirements apply:
     *   - There must be one and only one PolicyRule where condition is unset.
     *   - BooleanPolicyRules with conditions must set `enforced` to the opposite
     *     of the PolicyRule without a condition.
     *   - During policy evaluation, PolicyRules with conditions that are
     *     true for a target resource take precedence.
     *
     * Generated from protobuf field <code>repeated .google.cloud.orgpolicy.v2.PolicySpec.PolicyRule rules = 3;</code>
     * @param \Google\Cloud\OrgPolicy\V2\PolicySpec\PolicyRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OrgPolicy\V2\PolicySpec\PolicyRule::class);
        $this->rules = $arr;

        return $this;
    }

    /**
     * Determines the inheritance behavior for this `Policy`.
     * If `inherit_from_parent` is true, PolicyRules set higher up in the
     * hierarchy (up to the closest root) are inherited and present in the
     * effective policy. If it is false, then no rules are inherited, and this
     * Policy becomes the new root for evaluation.
     * This field can be set only for Policies which configure list constraints.
     *
     * Generated from protobuf field <code>bool inherit_from_parent = 4;</code>
     * @return bool
     */
    public function getInheritFromParent()
    {
        return $this->inherit_from_parent;
    }

    /**
     * Determines the inheritance behavior for this `Policy`.
     * If `inherit_from_parent` is true, PolicyRules set higher up in the
     * hierarchy (up to the closest root) are inherited and present in the
     * effective policy. If it is false, then no rules are inherited, and this
     * Policy becomes the new root for evaluation.
     * This field can be set only for Policies which configure list constraints.
     *
     * Generated from protobuf field <code>bool inherit_from_parent = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setInheritFromParent($var)
    {
        GPBUtil::checkBool($var);
        $this->inherit_from_parent = $var;

        return $this;
    }

    /**
     * Ignores policies set above this resource and restores the
     * `constraint_default` enforcement behavior of the specific `Constraint` at
     * this resource.
     * This field can be set in policies for either list or boolean
     * constraints. If set, `rules` must be empty and `inherit_from_parent`
     * must be set to false.
     *
     * Generated from protobuf field <code>bool reset = 5;</code>
     * @return bool
     */
    public function getReset()
    {
        return $this->reset;
    }

    /**
     * Ignores policies set above this resource and restores the
     * `constraint_default` enforcement behavior of the specific `Constraint` at
     * this resource.
     * This field can be set in policies for either list or boolean
     * constraints. If set, `rules` must be empty and `inherit_from_parent`
     * must be set to false.
     *
     * Generated from protobuf field <code>bool reset = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setReset($var)
    {
        GPBUtil::checkBool($var);
        $this->reset = $var;

        return $this;
    }

}

