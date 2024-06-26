<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of etcd encryption.
 *
 * Generated from protobuf message <code>google.container.v1.DatabaseEncryption</code>
 */
class DatabaseEncryption extends \Google\Protobuf\Internal\Message
{
    /**
     * Denotes the state of etcd encryption.
     *
     * Generated from protobuf field <code>.google.container.v1.DatabaseEncryption.State state = 2;</code>
     */
    private $state = 0;
    /**
     * Name of CloudKMS key to use for the encryption of secrets in etcd.
     * Ex. projects/my-project/locations/global/keyRings/my-ring/cryptoKeys/my-key
     *
     * Generated from protobuf field <code>string key_name = 1;</code>
     */
    private $key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Denotes the state of etcd encryption.
     *     @type string $key_name
     *           Name of CloudKMS key to use for the encryption of secrets in etcd.
     *           Ex. projects/my-project/locations/global/keyRings/my-ring/cryptoKeys/my-key
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Denotes the state of etcd encryption.
     *
     * Generated from protobuf field <code>.google.container.v1.DatabaseEncryption.State state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Denotes the state of etcd encryption.
     *
     * Generated from protobuf field <code>.google.container.v1.DatabaseEncryption.State state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\DatabaseEncryption\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Name of CloudKMS key to use for the encryption of secrets in etcd.
     * Ex. projects/my-project/locations/global/keyRings/my-ring/cryptoKeys/my-key
     *
     * Generated from protobuf field <code>string key_name = 1;</code>
     * @return string
     */
    public function getKeyName()
    {
        return $this->key_name;
    }

    /**
     * Name of CloudKMS key to use for the encryption of secrets in etcd.
     * Ex. projects/my-project/locations/global/keyRings/my-ring/cryptoKeys/my-key
     *
     * Generated from protobuf field <code>string key_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_name = $var;

        return $this;
    }

}

