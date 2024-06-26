<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v1/orgpolicy.proto

namespace Google\Cloud\OrgPolicy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a Cloud Organization `Policy` which is used to specify `Constraints`
 * for configurations of Cloud Platform resources.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v1.Policy</code>
 */
class Policy extends \Google\Protobuf\Internal\Message
{
    /**
     * Version of the `Policy`. Default version is 0;
     *
     * Generated from protobuf field <code>int32 version = 1;</code>
     */
    private $version = 0;
    /**
     * The name of the `Constraint` the `Policy` is configuring, for example,
     * `constraints/serviceuser.services`.
     * Immutable after creation.
     *
     * Generated from protobuf field <code>string constraint = 2;</code>
     */
    private $constraint = '';
    /**
     * An opaque tag indicating the current version of the `Policy`, used for
     * concurrency control.
     * When the `Policy` is returned from either a `GetPolicy` or a
     * `ListOrgPolicy` request, this `etag` indicates the version of the current
     * `Policy` to use when executing a read-modify-write loop.
     * When the `Policy` is returned from a `GetEffectivePolicy` request, the
     * `etag` will be unset.
     * When the `Policy` is used in a `SetOrgPolicy` method, use the `etag` value
     * that was returned from a `GetOrgPolicy` request as part of a
     * read-modify-write loop for concurrency control. Not setting the `etag`in a
     * `SetOrgPolicy` request will result in an unconditional write of the
     * `Policy`.
     *
     * Generated from protobuf field <code>bytes etag = 3;</code>
     */
    private $etag = '';
    /**
     * The time stamp the `Policy` was previously updated. This is set by the
     * server, not specified by the caller, and represents the last time a call to
     * `SetOrgPolicy` was made for that `Policy`. Any value set by the client will
     * be ignored.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     */
    private $update_time = null;
    protected $policy_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $version
     *           Version of the `Policy`. Default version is 0;
     *     @type string $constraint
     *           The name of the `Constraint` the `Policy` is configuring, for example,
     *           `constraints/serviceuser.services`.
     *           Immutable after creation.
     *     @type string $etag
     *           An opaque tag indicating the current version of the `Policy`, used for
     *           concurrency control.
     *           When the `Policy` is returned from either a `GetPolicy` or a
     *           `ListOrgPolicy` request, this `etag` indicates the version of the current
     *           `Policy` to use when executing a read-modify-write loop.
     *           When the `Policy` is returned from a `GetEffectivePolicy` request, the
     *           `etag` will be unset.
     *           When the `Policy` is used in a `SetOrgPolicy` method, use the `etag` value
     *           that was returned from a `GetOrgPolicy` request as part of a
     *           read-modify-write loop for concurrency control. Not setting the `etag`in a
     *           `SetOrgPolicy` request will result in an unconditional write of the
     *           `Policy`.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The time stamp the `Policy` was previously updated. This is set by the
     *           server, not specified by the caller, and represents the last time a call to
     *           `SetOrgPolicy` was made for that `Policy`. Any value set by the client will
     *           be ignored.
     *     @type \Google\Cloud\OrgPolicy\V1\Policy\ListPolicy $list_policy
     *           List of values either allowed or disallowed.
     *     @type \Google\Cloud\OrgPolicy\V1\Policy\BooleanPolicy $boolean_policy
     *           For boolean `Constraints`, whether to enforce the `Constraint` or not.
     *     @type \Google\Cloud\OrgPolicy\V1\Policy\RestoreDefault $restore_default
     *           Restores the default behavior of the constraint; independent of
     *           `Constraint` type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V1\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Version of the `Policy`. Default version is 0;
     *
     * Generated from protobuf field <code>int32 version = 1;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Version of the `Policy`. Default version is 0;
     *
     * Generated from protobuf field <code>int32 version = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * The name of the `Constraint` the `Policy` is configuring, for example,
     * `constraints/serviceuser.services`.
     * Immutable after creation.
     *
     * Generated from protobuf field <code>string constraint = 2;</code>
     * @return string
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * The name of the `Constraint` the `Policy` is configuring, for example,
     * `constraints/serviceuser.services`.
     * Immutable after creation.
     *
     * Generated from protobuf field <code>string constraint = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setConstraint($var)
    {
        GPBUtil::checkString($var, True);
        $this->constraint = $var;

        return $this;
    }

    /**
     * An opaque tag indicating the current version of the `Policy`, used for
     * concurrency control.
     * When the `Policy` is returned from either a `GetPolicy` or a
     * `ListOrgPolicy` request, this `etag` indicates the version of the current
     * `Policy` to use when executing a read-modify-write loop.
     * When the `Policy` is returned from a `GetEffectivePolicy` request, the
     * `etag` will be unset.
     * When the `Policy` is used in a `SetOrgPolicy` method, use the `etag` value
     * that was returned from a `GetOrgPolicy` request as part of a
     * read-modify-write loop for concurrency control. Not setting the `etag`in a
     * `SetOrgPolicy` request will result in an unconditional write of the
     * `Policy`.
     *
     * Generated from protobuf field <code>bytes etag = 3;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * An opaque tag indicating the current version of the `Policy`, used for
     * concurrency control.
     * When the `Policy` is returned from either a `GetPolicy` or a
     * `ListOrgPolicy` request, this `etag` indicates the version of the current
     * `Policy` to use when executing a read-modify-write loop.
     * When the `Policy` is returned from a `GetEffectivePolicy` request, the
     * `etag` will be unset.
     * When the `Policy` is used in a `SetOrgPolicy` method, use the `etag` value
     * that was returned from a `GetOrgPolicy` request as part of a
     * read-modify-write loop for concurrency control. Not setting the `etag`in a
     * `SetOrgPolicy` request will result in an unconditional write of the
     * `Policy`.
     *
     * Generated from protobuf field <code>bytes etag = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, False);
        $this->etag = $var;

        return $this;
    }

    /**
     * The time stamp the `Policy` was previously updated. This is set by the
     * server, not specified by the caller, and represents the last time a call to
     * `SetOrgPolicy` was made for that `Policy`. Any value set by the client will
     * be ignored.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * The time stamp the `Policy` was previously updated. This is set by the
     * server, not specified by the caller, and represents the last time a call to
     * `SetOrgPolicy` was made for that `Policy`. Any value set by the client will
     * be ignored.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4;</code>
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
     * List of values either allowed or disallowed.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v1.Policy.ListPolicy list_policy = 5;</code>
     * @return \Google\Cloud\OrgPolicy\V1\Policy\ListPolicy
     */
    public function getListPolicy()
    {
        return $this->readOneof(5);
    }

    /**
     * List of values either allowed or disallowed.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v1.Policy.ListPolicy list_policy = 5;</code>
     * @param \Google\Cloud\OrgPolicy\V1\Policy\ListPolicy $var
     * @return $this
     */
    public function setListPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OrgPolicy\V1\Policy_ListPolicy::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * For boolean `Constraints`, whether to enforce the `Constraint` or not.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v1.Policy.BooleanPolicy boolean_policy = 6;</code>
     * @return \Google\Cloud\OrgPolicy\V1\Policy\BooleanPolicy
     */
    public function getBooleanPolicy()
    {
        return $this->readOneof(6);
    }

    /**
     * For boolean `Constraints`, whether to enforce the `Constraint` or not.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v1.Policy.BooleanPolicy boolean_policy = 6;</code>
     * @param \Google\Cloud\OrgPolicy\V1\Policy\BooleanPolicy $var
     * @return $this
     */
    public function setBooleanPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OrgPolicy\V1\Policy_BooleanPolicy::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Restores the default behavior of the constraint; independent of
     * `Constraint` type.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v1.Policy.RestoreDefault restore_default = 7;</code>
     * @return \Google\Cloud\OrgPolicy\V1\Policy\RestoreDefault
     */
    public function getRestoreDefault()
    {
        return $this->readOneof(7);
    }

    /**
     * Restores the default behavior of the constraint; independent of
     * `Constraint` type.
     *
     * Generated from protobuf field <code>.google.cloud.orgpolicy.v1.Policy.RestoreDefault restore_default = 7;</code>
     * @param \Google\Cloud\OrgPolicy\V1\Policy\RestoreDefault $var
     * @return $this
     */
    public function setRestoreDefault($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OrgPolicy\V1\Policy_RestoreDefault::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPolicyType()
    {
        return $this->whichOneof("policy_type");
    }

}

