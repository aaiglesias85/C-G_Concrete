<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CertificateAuthority;

use UnexpectedValueException;

/**
 * The type of a [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority], indicating its issuing chain.
 *
 * Protobuf type <code>google.cloud.security.privateca.v1.CertificateAuthority.Type</code>
 */
class Type
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Self-signed CA.
     *
     * Generated from protobuf enum <code>SELF_SIGNED = 1;</code>
     */
    const SELF_SIGNED = 1;
    /**
     * Subordinate CA. Could be issued by a Private CA [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]
     * or an unmanaged CA.
     *
     * Generated from protobuf enum <code>SUBORDINATE = 2;</code>
     */
    const SUBORDINATE = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::SELF_SIGNED => 'SELF_SIGNED',
        self::SUBORDINATE => 'SUBORDINATE',
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


