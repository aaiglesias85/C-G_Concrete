<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/resources.proto

namespace Google\Cloud\SecretManager\V1\Replication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A replication policy that replicates the [Secret][google.cloud.secretmanager.v1.Secret] payload into the
 * locations specified in [Secret.replication.user_managed.replicas][]
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1.Replication.UserManaged</code>
 */
class UserManaged extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The list of Replicas for this [Secret][google.cloud.secretmanager.v1.Secret].
     * Cannot be empty.
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1.Replication.UserManaged.Replica replicas = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $replicas;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecretManager\V1\Replication\UserManaged\Replica[]|\Google\Protobuf\Internal\RepeatedField $replicas
     *           Required. The list of Replicas for this [Secret][google.cloud.secretmanager.v1.Secret].
     *           Cannot be empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The list of Replicas for this [Secret][google.cloud.secretmanager.v1.Secret].
     * Cannot be empty.
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1.Replication.UserManaged.Replica replicas = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplicas()
    {
        return $this->replicas;
    }

    /**
     * Required. The list of Replicas for this [Secret][google.cloud.secretmanager.v1.Secret].
     * Cannot be empty.
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1.Replication.UserManaged.Replica replicas = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecretManager\V1\Replication\UserManaged\Replica[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplicas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecretManager\V1\Replication\UserManaged\Replica::class);
        $this->replicas = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserManaged::class, \Google\Cloud\SecretManager\V1\Replication_UserManaged::class);

