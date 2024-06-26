<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v1/iam_policy.proto

namespace Google\Cloud\Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `SetIamPolicy` method.
 *
 * Generated from protobuf message <code>google.iam.v1.SetIamPolicyRequest</code>
 */
class SetIamPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * REQUIRED: The resource for which the policy is being specified.
     * See the operation documentation for the appropriate value for this field.
     *
     * Generated from protobuf field <code>string resource = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $resource = '';
    /**
     * REQUIRED: The complete policy to be applied to the `resource`. The size of
     * the policy is limited to a few 10s of KB. An empty policy is a
     * valid policy but certain Cloud Platform services (such as Projects)
     * might reject them.
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy policy = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource
     *           REQUIRED: The resource for which the policy is being specified.
     *           See the operation documentation for the appropriate value for this field.
     *     @type \Google\Cloud\Iam\V1\Policy $policy
     *           REQUIRED: The complete policy to be applied to the `resource`. The size of
     *           the policy is limited to a few 10s of KB. An empty policy is a
     *           valid policy but certain Cloud Platform services (such as Projects)
     *           might reject them.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * REQUIRED: The resource for which the policy is being specified.
     * See the operation documentation for the appropriate value for this field.
     *
     * Generated from protobuf field <code>string resource = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * REQUIRED: The resource for which the policy is being specified.
     * See the operation documentation for the appropriate value for this field.
     *
     * Generated from protobuf field <code>string resource = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * REQUIRED: The complete policy to be applied to the `resource`. The size of
     * the policy is limited to a few 10s of KB. An empty policy is a
     * valid policy but certain Cloud Platform services (such as Projects)
     * might reject them.
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy policy = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Iam\V1\Policy
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * REQUIRED: The complete policy to be applied to the `resource`. The size of
     * the policy is limited to a few 10s of KB. An empty policy is a
     * valid policy but certain Cloud Platform services (such as Projects)
     * might reject them.
     *
     * Generated from protobuf field <code>.google.iam.v1.Policy policy = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Iam\V1\Policy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iam\V1\Policy::class);
        $this->policy = $var;

        return $this;
    }

}

