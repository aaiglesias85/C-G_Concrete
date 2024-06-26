<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/resources.proto

namespace Google\Cloud\SecretManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The replication status of a [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1.ReplicationStatus</code>
 */
class ReplicationStatus extends \Google\Protobuf\Internal\Message
{
    protected $replication_status;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecretManager\V1\ReplicationStatus\AutomaticStatus $automatic
     *           Describes the replication status of a [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] with
     *           automatic replication.
     *           Only populated if the parent [Secret][google.cloud.secretmanager.v1.Secret] has an automatic replication
     *           policy.
     *     @type \Google\Cloud\SecretManager\V1\ReplicationStatus\UserManagedStatus $user_managed
     *           Describes the replication status of a [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] with
     *           user-managed replication.
     *           Only populated if the parent [Secret][google.cloud.secretmanager.v1.Secret] has a user-managed replication
     *           policy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Describes the replication status of a [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] with
     * automatic replication.
     * Only populated if the parent [Secret][google.cloud.secretmanager.v1.Secret] has an automatic replication
     * policy.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.ReplicationStatus.AutomaticStatus automatic = 1;</code>
     * @return \Google\Cloud\SecretManager\V1\ReplicationStatus\AutomaticStatus|null
     */
    public function getAutomatic()
    {
        return $this->readOneof(1);
    }

    public function hasAutomatic()
    {
        return $this->hasOneof(1);
    }

    /**
     * Describes the replication status of a [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] with
     * automatic replication.
     * Only populated if the parent [Secret][google.cloud.secretmanager.v1.Secret] has an automatic replication
     * policy.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.ReplicationStatus.AutomaticStatus automatic = 1;</code>
     * @param \Google\Cloud\SecretManager\V1\ReplicationStatus\AutomaticStatus $var
     * @return $this
     */
    public function setAutomatic($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1\ReplicationStatus\AutomaticStatus::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Describes the replication status of a [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] with
     * user-managed replication.
     * Only populated if the parent [Secret][google.cloud.secretmanager.v1.Secret] has a user-managed replication
     * policy.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.ReplicationStatus.UserManagedStatus user_managed = 2;</code>
     * @return \Google\Cloud\SecretManager\V1\ReplicationStatus\UserManagedStatus|null
     */
    public function getUserManaged()
    {
        return $this->readOneof(2);
    }

    public function hasUserManaged()
    {
        return $this->hasOneof(2);
    }

    /**
     * Describes the replication status of a [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] with
     * user-managed replication.
     * Only populated if the parent [Secret][google.cloud.secretmanager.v1.Secret] has a user-managed replication
     * policy.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.ReplicationStatus.UserManagedStatus user_managed = 2;</code>
     * @param \Google\Cloud\SecretManager\V1\ReplicationStatus\UserManagedStatus $var
     * @return $this
     */
    public function setUserManaged($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1\ReplicationStatus\UserManagedStatus::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getReplicationStatus()
    {
        return $this->whichOneof("replication_status");
    }

}

