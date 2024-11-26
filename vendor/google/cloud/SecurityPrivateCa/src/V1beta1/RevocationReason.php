<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1;

use UnexpectedValueException;

/**
 * A [RevocationReason][google.cloud.security.privateca.v1beta1.RevocationReason] indicates whether a [Certificate][google.cloud.security.privateca.v1beta1.Certificate] has been revoked,
 * and the reason for revocation. These correspond to standard revocation
 * reasons from RFC 5280. Note that the enum labels and values in this
 * definition are not the same ASN.1 values defined in RFC 5280. These values
 * will be translated to the correct ASN.1 values when a CRL is created.
 *
 * Protobuf type <code>google.cloud.security.privateca.v1beta1.RevocationReason</code>
 */
class RevocationReason
{
    /**
     * Default unspecified value. This value does indicate that a [Certificate][google.cloud.security.privateca.v1beta1.Certificate]
     * has been revoked, but that a reason has not been recorded.
     *
     * Generated from protobuf enum <code>REVOCATION_REASON_UNSPECIFIED = 0;</code>
     */
    const REVOCATION_REASON_UNSPECIFIED = 0;
    /**
     * Key material for this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] may have leaked.
     *
     * Generated from protobuf enum <code>KEY_COMPROMISE = 1;</code>
     */
    const KEY_COMPROMISE = 1;
    /**
     * The key material for a certificate authority in the issuing path may have
     * leaked.
     *
     * Generated from protobuf enum <code>CERTIFICATE_AUTHORITY_COMPROMISE = 2;</code>
     */
    const CERTIFICATE_AUTHORITY_COMPROMISE = 2;
    /**
     * The subject or other attributes in this [Certificate][google.cloud.security.privateca.v1beta1.Certificate] have changed.
     *
     * Generated from protobuf enum <code>AFFILIATION_CHANGED = 3;</code>
     */
    const AFFILIATION_CHANGED = 3;
    /**
     * This [Certificate][google.cloud.security.privateca.v1beta1.Certificate] has been superseded.
     *
     * Generated from protobuf enum <code>SUPERSEDED = 4;</code>
     */
    const SUPERSEDED = 4;
    /**
     * This [Certificate][google.cloud.security.privateca.v1beta1.Certificate] or entities in the issuing path have ceased to
     * operate.
     *
     * Generated from protobuf enum <code>CESSATION_OF_OPERATION = 5;</code>
     */
    const CESSATION_OF_OPERATION = 5;
    /**
     * This [Certificate][google.cloud.security.privateca.v1beta1.Certificate] should not be considered valid, it is expected that it
     * may become valid in the future.
     *
     * Generated from protobuf enum <code>CERTIFICATE_HOLD = 6;</code>
     */
    const CERTIFICATE_HOLD = 6;
    /**
     * This [Certificate][google.cloud.security.privateca.v1beta1.Certificate] no longer has permission to assert the listed
     * attributes.
     *
     * Generated from protobuf enum <code>PRIVILEGE_WITHDRAWN = 7;</code>
     */
    const PRIVILEGE_WITHDRAWN = 7;
    /**
     * The authority which determines appropriate attributes for a [Certificate][google.cloud.security.privateca.v1beta1.Certificate]
     * may have been compromised.
     *
     * Generated from protobuf enum <code>ATTRIBUTE_AUTHORITY_COMPROMISE = 8;</code>
     */
    const ATTRIBUTE_AUTHORITY_COMPROMISE = 8;

    private static $valueToName = [
        self::REVOCATION_REASON_UNSPECIFIED => 'REVOCATION_REASON_UNSPECIFIED',
        self::KEY_COMPROMISE => 'KEY_COMPROMISE',
        self::CERTIFICATE_AUTHORITY_COMPROMISE => 'CERTIFICATE_AUTHORITY_COMPROMISE',
        self::AFFILIATION_CHANGED => 'AFFILIATION_CHANGED',
        self::SUPERSEDED => 'SUPERSEDED',
        self::CESSATION_OF_OPERATION => 'CESSATION_OF_OPERATION',
        self::CERTIFICATE_HOLD => 'CERTIFICATE_HOLD',
        self::PRIVILEGE_WITHDRAWN => 'PRIVILEGE_WITHDRAWN',
        self::ATTRIBUTE_AUTHORITY_COMPROMISE => 'ATTRIBUTE_AUTHORITY_COMPROMISE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

