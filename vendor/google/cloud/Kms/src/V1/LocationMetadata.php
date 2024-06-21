<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud KMS metadata for the given
 * [google.cloud.location.Location][google.cloud.location.Location].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.LocationMetadata</code>
 */
class LocationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates whether [CryptoKeys][google.cloud.kms.v1.CryptoKey] with
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] can be created in this
     * location.
     *
     * Generated from protobuf field <code>bool hsm_available = 1;</code>
     */
    private $hsm_available = false;
    /**
     * Indicates whether [CryptoKeys][google.cloud.kms.v1.CryptoKey] with
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL] can be created in
     * this location.
     *
     * Generated from protobuf field <code>bool ekm_available = 2;</code>
     */
    private $ekm_available = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $hsm_available
     *           Indicates whether [CryptoKeys][google.cloud.kms.v1.CryptoKey] with
     *           [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]
     *           [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] can be created in this
     *           location.
     *     @type bool $ekm_available
     *           Indicates whether [CryptoKeys][google.cloud.kms.v1.CryptoKey] with
     *           [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]
     *           [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL] can be created in
     *           this location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates whether [CryptoKeys][google.cloud.kms.v1.CryptoKey] with
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] can be created in this
     * location.
     *
     * Generated from protobuf field <code>bool hsm_available = 1;</code>
     * @return bool
     */
    public function getHsmAvailable()
    {
        return $this->hsm_available;
    }

    /**
     * Indicates whether [CryptoKeys][google.cloud.kms.v1.CryptoKey] with
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM] can be created in this
     * location.
     *
     * Generated from protobuf field <code>bool hsm_available = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setHsmAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->hsm_available = $var;

        return $this;
    }

    /**
     * Indicates whether [CryptoKeys][google.cloud.kms.v1.CryptoKey] with
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL] can be created in
     * this location.
     *
     * Generated from protobuf field <code>bool ekm_available = 2;</code>
     * @return bool
     */
    public function getEkmAvailable()
    {
        return $this->ekm_available;
    }

    /**
     * Indicates whether [CryptoKeys][google.cloud.kms.v1.CryptoKey] with
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersionTemplate.protection_level]
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL] can be created in
     * this location.
     *
     * Generated from protobuf field <code>bool ekm_available = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEkmAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->ekm_available = $var;

        return $this;
    }

}

