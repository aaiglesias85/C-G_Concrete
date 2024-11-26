<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/assets.proto

namespace Google\Cloud\Asset\V1\IamPolicyAnalysisResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The identities and group edges.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicyAnalysisResult.IdentityList</code>
 */
class IdentityList extends \Google\Protobuf\Internal\Message
{
    /**
     * Only the identities that match one of the following conditions will be
     * presented:
     * - The identity_selector, if it is specified in request;
     * - Otherwise, identities reachable from the policy binding's members.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.IamPolicyAnalysisResult.Identity identities = 1;</code>
     */
    private $identities;
    /**
     * Group identity edges of the graph starting from the binding's
     * group members to any node of the [identities][google.cloud.asset.v1.IamPolicyAnalysisResult.IdentityList.identities]. The [Edge.source_node][google.cloud.asset.v1.IamPolicyAnalysisResult.Edge.source_node]
     * contains a group, such as `group:parent&#64;google.com`. The
     * [Edge.target_node][google.cloud.asset.v1.IamPolicyAnalysisResult.Edge.target_node] contains a member of the group,
     * such as `group:child&#64;google.com` or `user:foo&#64;google.com`.
     * This field is present only if the output_group_edges option is enabled in
     * request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.IamPolicyAnalysisResult.Edge group_edges = 2;</code>
     */
    private $group_edges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\Identity[]|\Google\Protobuf\Internal\RepeatedField $identities
     *           Only the identities that match one of the following conditions will be
     *           presented:
     *           - The identity_selector, if it is specified in request;
     *           - Otherwise, identities reachable from the policy binding's members.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\Edge[]|\Google\Protobuf\Internal\RepeatedField $group_edges
     *           Group identity edges of the graph starting from the binding's
     *           group members to any node of the [identities][google.cloud.asset.v1.IamPolicyAnalysisResult.IdentityList.identities]. The [Edge.source_node][google.cloud.asset.v1.IamPolicyAnalysisResult.Edge.source_node]
     *           contains a group, such as `group:parent&#64;google.com`. The
     *           [Edge.target_node][google.cloud.asset.v1.IamPolicyAnalysisResult.Edge.target_node] contains a member of the group,
     *           such as `group:child&#64;google.com` or `user:foo&#64;google.com`.
     *           This field is present only if the output_group_edges option is enabled in
     *           request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * Only the identities that match one of the following conditions will be
     * presented:
     * - The identity_selector, if it is specified in request;
     * - Otherwise, identities reachable from the policy binding's members.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.IamPolicyAnalysisResult.Identity identities = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdentities()
    {
        return $this->identities;
    }

    /**
     * Only the identities that match one of the following conditions will be
     * presented:
     * - The identity_selector, if it is specified in request;
     * - Otherwise, identities reachable from the policy binding's members.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.IamPolicyAnalysisResult.Identity identities = 1;</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\Identity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdentities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\Identity::class);
        $this->identities = $arr;

        return $this;
    }

    /**
     * Group identity edges of the graph starting from the binding's
     * group members to any node of the [identities][google.cloud.asset.v1.IamPolicyAnalysisResult.IdentityList.identities]. The [Edge.source_node][google.cloud.asset.v1.IamPolicyAnalysisResult.Edge.source_node]
     * contains a group, such as `group:parent&#64;google.com`. The
     * [Edge.target_node][google.cloud.asset.v1.IamPolicyAnalysisResult.Edge.target_node] contains a member of the group,
     * such as `group:child&#64;google.com` or `user:foo&#64;google.com`.
     * This field is present only if the output_group_edges option is enabled in
     * request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.IamPolicyAnalysisResult.Edge group_edges = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupEdges()
    {
        return $this->group_edges;
    }

    /**
     * Group identity edges of the graph starting from the binding's
     * group members to any node of the [identities][google.cloud.asset.v1.IamPolicyAnalysisResult.IdentityList.identities]. The [Edge.source_node][google.cloud.asset.v1.IamPolicyAnalysisResult.Edge.source_node]
     * contains a group, such as `group:parent&#64;google.com`. The
     * [Edge.target_node][google.cloud.asset.v1.IamPolicyAnalysisResult.Edge.target_node] contains a member of the group,
     * such as `group:child&#64;google.com` or `user:foo&#64;google.com`.
     * This field is present only if the output_group_edges option is enabled in
     * request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.IamPolicyAnalysisResult.Edge group_edges = 2;</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\Edge[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupEdges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1\IamPolicyAnalysisResult\Edge::class);
        $this->group_edges = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IdentityList::class, \Google\Cloud\Asset\V1\IamPolicyAnalysisResult_IdentityList::class);

