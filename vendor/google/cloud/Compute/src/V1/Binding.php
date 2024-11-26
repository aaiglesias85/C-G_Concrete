<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Associates `members`, or principals, with a `role`.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Binding</code>
 */
class Binding extends \Google\Protobuf\Internal\Message
{
    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>optional string binding_id = 441088277;</code>
     */
    private $binding_id = null;
    /**
     * The condition that is associated with this binding. If the condition evaluates to `true`, then this binding applies to the current request. If the condition evaluates to `false`, then this binding does not apply to the current request. However, a different role binding might grant the same role to one or more of the principals in this binding. To learn which resources support conditions in their IAM policies, see the [IAM documentation](https://cloud.google.com/iam/help/conditions/resource-policies).
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Expr condition = 212430107;</code>
     */
    private $condition = null;
    /**
     * Specifies the principals requesting access for a Google Cloud resource. `members` can have the following values: * `allUsers`: A special identifier that represents anyone who is on the internet; with or without a Google account. * `allAuthenticatedUsers`: A special identifier that represents anyone who is authenticated with a Google account or a service account. * `user:{emailid}`: An email address that represents a specific Google account. For example, `alice&#64;example.com` . * `serviceAccount:{emailid}`: An email address that represents a service account. For example, `my-other-app&#64;appspot.gserviceaccount.com`. * `group:{emailid}`: An email address that represents a Google group. For example, `admins&#64;example.com`. * `deleted:user:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a user that has been recently deleted. For example, `alice&#64;example.com?uid=123456789012345678901`. If the user is recovered, this value reverts to `user:{emailid}` and the recovered user retains the role in the binding. * `deleted:serviceAccount:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a service account that has been recently deleted. For example, `my-other-app&#64;appspot.gserviceaccount.com?uid=123456789012345678901`. If the service account is undeleted, this value reverts to `serviceAccount:{emailid}` and the undeleted service account retains the role in the binding. * `deleted:group:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a Google group that has been recently deleted. For example, `admins&#64;example.com?uid=123456789012345678901`. If the group is recovered, this value reverts to `group:{emailid}` and the recovered group retains the role in the binding. * `domain:{domain}`: The G Suite domain (primary) that represents all the users of that domain. For example, `google.com` or `example.com`. 
     *
     * Generated from protobuf field <code>repeated string members = 412010777;</code>
     */
    private $members;
    /**
     * Role that is assigned to the list of `members`, or principals. For example, `roles/viewer`, `roles/editor`, or `roles/owner`.
     *
     * Generated from protobuf field <code>optional string role = 3506294;</code>
     */
    private $role = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $binding_id
     *           This is deprecated and has no effect. Do not use.
     *     @type \Google\Cloud\Compute\V1\Expr $condition
     *           The condition that is associated with this binding. If the condition evaluates to `true`, then this binding applies to the current request. If the condition evaluates to `false`, then this binding does not apply to the current request. However, a different role binding might grant the same role to one or more of the principals in this binding. To learn which resources support conditions in their IAM policies, see the [IAM documentation](https://cloud.google.com/iam/help/conditions/resource-policies).
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $members
     *           Specifies the principals requesting access for a Google Cloud resource. `members` can have the following values: * `allUsers`: A special identifier that represents anyone who is on the internet; with or without a Google account. * `allAuthenticatedUsers`: A special identifier that represents anyone who is authenticated with a Google account or a service account. * `user:{emailid}`: An email address that represents a specific Google account. For example, `alice&#64;example.com` . * `serviceAccount:{emailid}`: An email address that represents a service account. For example, `my-other-app&#64;appspot.gserviceaccount.com`. * `group:{emailid}`: An email address that represents a Google group. For example, `admins&#64;example.com`. * `deleted:user:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a user that has been recently deleted. For example, `alice&#64;example.com?uid=123456789012345678901`. If the user is recovered, this value reverts to `user:{emailid}` and the recovered user retains the role in the binding. * `deleted:serviceAccount:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a service account that has been recently deleted. For example, `my-other-app&#64;appspot.gserviceaccount.com?uid=123456789012345678901`. If the service account is undeleted, this value reverts to `serviceAccount:{emailid}` and the undeleted service account retains the role in the binding. * `deleted:group:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a Google group that has been recently deleted. For example, `admins&#64;example.com?uid=123456789012345678901`. If the group is recovered, this value reverts to `group:{emailid}` and the recovered group retains the role in the binding. * `domain:{domain}`: The G Suite domain (primary) that represents all the users of that domain. For example, `google.com` or `example.com`. 
     *     @type string $role
     *           Role that is assigned to the list of `members`, or principals. For example, `roles/viewer`, `roles/editor`, or `roles/owner`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>optional string binding_id = 441088277;</code>
     * @return string
     */
    public function getBindingId()
    {
        return isset($this->binding_id) ? $this->binding_id : '';
    }

    public function hasBindingId()
    {
        return isset($this->binding_id);
    }

    public function clearBindingId()
    {
        unset($this->binding_id);
    }

    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>optional string binding_id = 441088277;</code>
     * @param string $var
     * @return $this
     */
    public function setBindingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->binding_id = $var;

        return $this;
    }

    /**
     * The condition that is associated with this binding. If the condition evaluates to `true`, then this binding applies to the current request. If the condition evaluates to `false`, then this binding does not apply to the current request. However, a different role binding might grant the same role to one or more of the principals in this binding. To learn which resources support conditions in their IAM policies, see the [IAM documentation](https://cloud.google.com/iam/help/conditions/resource-policies).
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Expr condition = 212430107;</code>
     * @return \Google\Cloud\Compute\V1\Expr|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    public function hasCondition()
    {
        return isset($this->condition);
    }

    public function clearCondition()
    {
        unset($this->condition);
    }

    /**
     * The condition that is associated with this binding. If the condition evaluates to `true`, then this binding applies to the current request. If the condition evaluates to `false`, then this binding does not apply to the current request. However, a different role binding might grant the same role to one or more of the principals in this binding. To learn which resources support conditions in their IAM policies, see the [IAM documentation](https://cloud.google.com/iam/help/conditions/resource-policies).
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Expr condition = 212430107;</code>
     * @param \Google\Cloud\Compute\V1\Expr $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Expr::class);
        $this->condition = $var;

        return $this;
    }

    /**
     * Specifies the principals requesting access for a Google Cloud resource. `members` can have the following values: * `allUsers`: A special identifier that represents anyone who is on the internet; with or without a Google account. * `allAuthenticatedUsers`: A special identifier that represents anyone who is authenticated with a Google account or a service account. * `user:{emailid}`: An email address that represents a specific Google account. For example, `alice&#64;example.com` . * `serviceAccount:{emailid}`: An email address that represents a service account. For example, `my-other-app&#64;appspot.gserviceaccount.com`. * `group:{emailid}`: An email address that represents a Google group. For example, `admins&#64;example.com`. * `deleted:user:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a user that has been recently deleted. For example, `alice&#64;example.com?uid=123456789012345678901`. If the user is recovered, this value reverts to `user:{emailid}` and the recovered user retains the role in the binding. * `deleted:serviceAccount:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a service account that has been recently deleted. For example, `my-other-app&#64;appspot.gserviceaccount.com?uid=123456789012345678901`. If the service account is undeleted, this value reverts to `serviceAccount:{emailid}` and the undeleted service account retains the role in the binding. * `deleted:group:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a Google group that has been recently deleted. For example, `admins&#64;example.com?uid=123456789012345678901`. If the group is recovered, this value reverts to `group:{emailid}` and the recovered group retains the role in the binding. * `domain:{domain}`: The G Suite domain (primary) that represents all the users of that domain. For example, `google.com` or `example.com`. 
     *
     * Generated from protobuf field <code>repeated string members = 412010777;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Specifies the principals requesting access for a Google Cloud resource. `members` can have the following values: * `allUsers`: A special identifier that represents anyone who is on the internet; with or without a Google account. * `allAuthenticatedUsers`: A special identifier that represents anyone who is authenticated with a Google account or a service account. * `user:{emailid}`: An email address that represents a specific Google account. For example, `alice&#64;example.com` . * `serviceAccount:{emailid}`: An email address that represents a service account. For example, `my-other-app&#64;appspot.gserviceaccount.com`. * `group:{emailid}`: An email address that represents a Google group. For example, `admins&#64;example.com`. * `deleted:user:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a user that has been recently deleted. For example, `alice&#64;example.com?uid=123456789012345678901`. If the user is recovered, this value reverts to `user:{emailid}` and the recovered user retains the role in the binding. * `deleted:serviceAccount:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a service account that has been recently deleted. For example, `my-other-app&#64;appspot.gserviceaccount.com?uid=123456789012345678901`. If the service account is undeleted, this value reverts to `serviceAccount:{emailid}` and the undeleted service account retains the role in the binding. * `deleted:group:{emailid}?uid={uniqueid}`: An email address (plus unique identifier) representing a Google group that has been recently deleted. For example, `admins&#64;example.com?uid=123456789012345678901`. If the group is recovered, this value reverts to `group:{emailid}` and the recovered group retains the role in the binding. * `domain:{domain}`: The G Suite domain (primary) that represents all the users of that domain. For example, `google.com` or `example.com`. 
     *
     * Generated from protobuf field <code>repeated string members = 412010777;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMembers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->members = $arr;

        return $this;
    }

    /**
     * Role that is assigned to the list of `members`, or principals. For example, `roles/viewer`, `roles/editor`, or `roles/owner`.
     *
     * Generated from protobuf field <code>optional string role = 3506294;</code>
     * @return string
     */
    public function getRole()
    {
        return isset($this->role) ? $this->role : '';
    }

    public function hasRole()
    {
        return isset($this->role);
    }

    public function clearRole()
    {
        unset($this->role);
    }

    /**
     * Role that is assigned to the list of `members`, or principals. For example, `roles/viewer`, `roles/editor`, or `roles/owner`.
     *
     * Generated from protobuf field <code>optional string role = 3506294;</code>
     * @param string $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkString($var, True);
        $this->role = $var;

        return $this;
    }

}

