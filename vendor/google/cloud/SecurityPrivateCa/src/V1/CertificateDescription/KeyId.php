<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CertificateDescription;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A KeyId identifies a specific public key, usually by hashing the public
 * key.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.CertificateDescription.KeyId</code>
 */
class KeyId extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The value of this KeyId encoded in lowercase hexadecimal. This is most
     * likely the 160 bit SHA-1 hash of the public key.
     *
     * Generated from protobuf field <code>string key_id = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $key_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key_id
     *           Optional. The value of this KeyId encoded in lowercase hexadecimal. This is most
     *           likely the 160 bit SHA-1 hash of the public key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The value of this KeyId encoded in lowercase hexadecimal. This is most
     * likely the 160 bit SHA-1 hash of the public key.
     *
     * Generated from protobuf field <code>string key_id = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKeyId()
    {
        return $this->key_id;
    }

    /**
     * Optional. The value of this KeyId encoded in lowercase hexadecimal. This is most
     * likely the 160 bit SHA-1 hash of the public key.
     *
     * Generated from protobuf field <code>string key_id = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_id = $var;

        return $this;
    }

}


