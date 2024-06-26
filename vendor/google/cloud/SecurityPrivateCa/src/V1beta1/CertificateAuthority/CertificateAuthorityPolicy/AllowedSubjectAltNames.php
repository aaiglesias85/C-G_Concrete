<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [AllowedSubjectAltNames][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames] specifies the allowed values for
 * [SubjectAltNames][google.cloud.security.privateca.v1beta1.SubjectAltNames] by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] when issuing
 * [Certificates][google.cloud.security.privateca.v1beta1.Certificate].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames</code>
 */
class AllowedSubjectAltNames extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Contains valid, fully-qualified host names. Glob patterns are also
     * supported. To allow an explicit wildcard certificate, escape with
     * backlash (i.e. `\*`).
     * E.g. for globbed entries: `*bar.com` will allow `foo.bar.com`, but not
     * `*.bar.com`, unless the [allow_globbing_dns_wildcards][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames.allow_globbing_dns_wildcards] field is set.
     * E.g. for wildcard entries: `\*.bar.com` will allow `*.bar.com`, but not
     * `foo.bar.com`.
     *
     * Generated from protobuf field <code>repeated string allowed_dns_names = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allowed_dns_names;
    /**
     * Optional. Contains valid RFC 3986 URIs. Glob patterns are also supported. To
     * match across path seperators (i.e. '/') use the double star glob
     * pattern (i.e. '**').
     *
     * Generated from protobuf field <code>repeated string allowed_uris = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allowed_uris;
    /**
     * Optional. Contains valid RFC 2822 E-mail addresses. Glob patterns are also
     * supported.
     *
     * Generated from protobuf field <code>repeated string allowed_email_addresses = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allowed_email_addresses;
    /**
     * Optional. Contains valid 32-bit IPv4 addresses and subnet ranges or RFC 4291 IPv6
     * addresses and subnet ranges. Subnet ranges are specified using the
     * '/' notation (e.g. 10.0.0.0/8, 2001:700:300:1800::/64). Glob patterns
     * are supported only for ip address entries (i.e. not for subnet ranges).
     *
     * Generated from protobuf field <code>repeated string allowed_ips = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allowed_ips;
    /**
     * Optional. Specifies if glob patterns used for [allowed_dns_names][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames.allowed_dns_names] allows
     * wildcard certificates.
     *
     * Generated from protobuf field <code>bool allow_globbing_dns_wildcards = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allow_globbing_dns_wildcards = false;
    /**
     * Optional. Specifies if to allow custom X509Extension values.
     *
     * Generated from protobuf field <code>bool allow_custom_sans = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allow_custom_sans = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_dns_names
     *           Optional. Contains valid, fully-qualified host names. Glob patterns are also
     *           supported. To allow an explicit wildcard certificate, escape with
     *           backlash (i.e. `\*`).
     *           E.g. for globbed entries: `*bar.com` will allow `foo.bar.com`, but not
     *           `*.bar.com`, unless the [allow_globbing_dns_wildcards][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames.allow_globbing_dns_wildcards] field is set.
     *           E.g. for wildcard entries: `\*.bar.com` will allow `*.bar.com`, but not
     *           `foo.bar.com`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_uris
     *           Optional. Contains valid RFC 3986 URIs. Glob patterns are also supported. To
     *           match across path seperators (i.e. '/') use the double star glob
     *           pattern (i.e. '**').
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_email_addresses
     *           Optional. Contains valid RFC 2822 E-mail addresses. Glob patterns are also
     *           supported.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_ips
     *           Optional. Contains valid 32-bit IPv4 addresses and subnet ranges or RFC 4291 IPv6
     *           addresses and subnet ranges. Subnet ranges are specified using the
     *           '/' notation (e.g. 10.0.0.0/8, 2001:700:300:1800::/64). Glob patterns
     *           are supported only for ip address entries (i.e. not for subnet ranges).
     *     @type bool $allow_globbing_dns_wildcards
     *           Optional. Specifies if glob patterns used for [allowed_dns_names][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames.allowed_dns_names] allows
     *           wildcard certificates.
     *     @type bool $allow_custom_sans
     *           Optional. Specifies if to allow custom X509Extension values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Contains valid, fully-qualified host names. Glob patterns are also
     * supported. To allow an explicit wildcard certificate, escape with
     * backlash (i.e. `\*`).
     * E.g. for globbed entries: `*bar.com` will allow `foo.bar.com`, but not
     * `*.bar.com`, unless the [allow_globbing_dns_wildcards][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames.allow_globbing_dns_wildcards] field is set.
     * E.g. for wildcard entries: `\*.bar.com` will allow `*.bar.com`, but not
     * `foo.bar.com`.
     *
     * Generated from protobuf field <code>repeated string allowed_dns_names = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedDnsNames()
    {
        return $this->allowed_dns_names;
    }

    /**
     * Optional. Contains valid, fully-qualified host names. Glob patterns are also
     * supported. To allow an explicit wildcard certificate, escape with
     * backlash (i.e. `\*`).
     * E.g. for globbed entries: `*bar.com` will allow `foo.bar.com`, but not
     * `*.bar.com`, unless the [allow_globbing_dns_wildcards][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames.allow_globbing_dns_wildcards] field is set.
     * E.g. for wildcard entries: `\*.bar.com` will allow `*.bar.com`, but not
     * `foo.bar.com`.
     *
     * Generated from protobuf field <code>repeated string allowed_dns_names = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedDnsNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_dns_names = $arr;

        return $this;
    }

    /**
     * Optional. Contains valid RFC 3986 URIs. Glob patterns are also supported. To
     * match across path seperators (i.e. '/') use the double star glob
     * pattern (i.e. '**').
     *
     * Generated from protobuf field <code>repeated string allowed_uris = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedUris()
    {
        return $this->allowed_uris;
    }

    /**
     * Optional. Contains valid RFC 3986 URIs. Glob patterns are also supported. To
     * match across path seperators (i.e. '/') use the double star glob
     * pattern (i.e. '**').
     *
     * Generated from protobuf field <code>repeated string allowed_uris = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_uris = $arr;

        return $this;
    }

    /**
     * Optional. Contains valid RFC 2822 E-mail addresses. Glob patterns are also
     * supported.
     *
     * Generated from protobuf field <code>repeated string allowed_email_addresses = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedEmailAddresses()
    {
        return $this->allowed_email_addresses;
    }

    /**
     * Optional. Contains valid RFC 2822 E-mail addresses. Glob patterns are also
     * supported.
     *
     * Generated from protobuf field <code>repeated string allowed_email_addresses = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedEmailAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_email_addresses = $arr;

        return $this;
    }

    /**
     * Optional. Contains valid 32-bit IPv4 addresses and subnet ranges or RFC 4291 IPv6
     * addresses and subnet ranges. Subnet ranges are specified using the
     * '/' notation (e.g. 10.0.0.0/8, 2001:700:300:1800::/64). Glob patterns
     * are supported only for ip address entries (i.e. not for subnet ranges).
     *
     * Generated from protobuf field <code>repeated string allowed_ips = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedIps()
    {
        return $this->allowed_ips;
    }

    /**
     * Optional. Contains valid 32-bit IPv4 addresses and subnet ranges or RFC 4291 IPv6
     * addresses and subnet ranges. Subnet ranges are specified using the
     * '/' notation (e.g. 10.0.0.0/8, 2001:700:300:1800::/64). Glob patterns
     * are supported only for ip address entries (i.e. not for subnet ranges).
     *
     * Generated from protobuf field <code>repeated string allowed_ips = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedIps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_ips = $arr;

        return $this;
    }

    /**
     * Optional. Specifies if glob patterns used for [allowed_dns_names][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames.allowed_dns_names] allows
     * wildcard certificates.
     *
     * Generated from protobuf field <code>bool allow_globbing_dns_wildcards = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAllowGlobbingDnsWildcards()
    {
        return $this->allow_globbing_dns_wildcards;
    }

    /**
     * Optional. Specifies if glob patterns used for [allowed_dns_names][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames.allowed_dns_names] allows
     * wildcard certificates.
     *
     * Generated from protobuf field <code>bool allow_globbing_dns_wildcards = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowGlobbingDnsWildcards($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_globbing_dns_wildcards = $var;

        return $this;
    }

    /**
     * Optional. Specifies if to allow custom X509Extension values.
     *
     * Generated from protobuf field <code>bool allow_custom_sans = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAllowCustomSans()
    {
        return $this->allow_custom_sans;
    }

    /**
     * Optional. Specifies if to allow custom X509Extension values.
     *
     * Generated from protobuf field <code>bool allow_custom_sans = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowCustomSans($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_custom_sans = $var;

        return $this;
    }

}


