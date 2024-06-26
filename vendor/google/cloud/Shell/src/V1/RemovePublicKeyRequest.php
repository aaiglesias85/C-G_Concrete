<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/shell/v1/cloudshell.proto

namespace Google\Cloud\Shell\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [RemovePublicKey][google.cloud.shell.v1.CloudShellService.RemovePublicKey].
 *
 * Generated from protobuf message <code>google.cloud.shell.v1.RemovePublicKeyRequest</code>
 */
class RemovePublicKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Environment this key should be removed from, e.g.
     * `users/me/environments/default`.
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     */
    private $environment = '';
    /**
     * Key that should be removed from the environment.
     *
     * Generated from protobuf field <code>string key = 2;</code>
     */
    private $key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $environment
     *           Environment this key should be removed from, e.g.
     *           `users/me/environments/default`.
     *     @type string $key
     *           Key that should be removed from the environment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Shell\V1\Cloudshell::initOnce();
        parent::__construct($data);
    }

    /**
     * Environment this key should be removed from, e.g.
     * `users/me/environments/default`.
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Environment this key should be removed from, e.g.
     * `users/me/environments/default`.
     *
     * Generated from protobuf field <code>string environment = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkString($var, True);
        $this->environment = $var;

        return $this;
    }

    /**
     * Key that should be removed from the environment.
     *
     * Generated from protobuf field <code>string key = 2;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Key that should be removed from the environment.
     *
     * Generated from protobuf field <code>string key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

}

