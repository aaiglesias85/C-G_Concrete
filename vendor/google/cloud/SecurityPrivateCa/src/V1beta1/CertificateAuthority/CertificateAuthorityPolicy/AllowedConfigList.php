<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedConfigList</code>
 */
class AllowedConfigList extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. All [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]
     * must match at least one listed [ReusableConfigWrapper][google.cloud.security.privateca.v1beta1.ReusableConfigWrapper]. If a
     * [ReusableConfigWrapper][google.cloud.security.privateca.v1beta1.ReusableConfigWrapper] has an empty field, any value will be
     * allowed for that field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.ReusableConfigWrapper allowed_config_values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $allowed_config_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigWrapper[]|\Google\Protobuf\Internal\RepeatedField $allowed_config_values
     *           Required. All [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]
     *           must match at least one listed [ReusableConfigWrapper][google.cloud.security.privateca.v1beta1.ReusableConfigWrapper]. If a
     *           [ReusableConfigWrapper][google.cloud.security.privateca.v1beta1.ReusableConfigWrapper] has an empty field, any value will be
     *           allowed for that field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. All [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]
     * must match at least one listed [ReusableConfigWrapper][google.cloud.security.privateca.v1beta1.ReusableConfigWrapper]. If a
     * [ReusableConfigWrapper][google.cloud.security.privateca.v1beta1.ReusableConfigWrapper] has an empty field, any value will be
     * allowed for that field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.ReusableConfigWrapper allowed_config_values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedConfigValues()
    {
        return $this->allowed_config_values;
    }

    /**
     * Required. All [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]
     * must match at least one listed [ReusableConfigWrapper][google.cloud.security.privateca.v1beta1.ReusableConfigWrapper]. If a
     * [ReusableConfigWrapper][google.cloud.security.privateca.v1beta1.ReusableConfigWrapper] has an empty field, any value will be
     * allowed for that field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.ReusableConfigWrapper allowed_config_values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigWrapper[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedConfigValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigWrapper::class);
        $this->allowed_config_values = $arr;

        return $this;
    }

}


