<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1alpha2/domains.proto

namespace Google\Cloud\Domains\V1alpha2;

use UnexpectedValueException;

/**
 * Defines a set of possible contact privacy settings for a `Registration`.
 * [ICANN](https://icann.org/) maintains the WHOIS database, a publicly
 * accessible mapping from domain name to contact information, and requires that
 * each domain name have an entry. Choose from these options to control how much
 * information in your `ContactSettings` is published.
 *
 * Protobuf type <code>google.cloud.domains.v1alpha2.ContactPrivacy</code>
 */
class ContactPrivacy
{
    /**
     * The contact privacy settings are undefined.
     *
     * Generated from protobuf enum <code>CONTACT_PRIVACY_UNSPECIFIED = 0;</code>
     */
    const CONTACT_PRIVACY_UNSPECIFIED = 0;
    /**
     * All the data from `ContactSettings` is publicly available. When setting
     * this option, you must also provide a
     * `PUBLIC_CONTACT_DATA_ACKNOWLEDGEMENT` in the `contact_notices` field of the
     * request.
     *
     * Generated from protobuf enum <code>PUBLIC_CONTACT_DATA = 1;</code>
     */
    const PUBLIC_CONTACT_DATA = 1;
    /**
     * None of the data from `ContactSettings` is publicly available. Instead,
     * proxy contact data is published for your domain. Email sent to the proxy
     * email address is forwarded to the registrant's email address. Cloud Domains
     * provides this privacy proxy service at no additional cost.
     *
     * Generated from protobuf enum <code>PRIVATE_CONTACT_DATA = 2;</code>
     */
    const PRIVATE_CONTACT_DATA = 2;
    /**
     * Some data from `ContactSettings` is publicly available. The actual
     * information redacted depends on the domain. For details, see [the
     * registration privacy
     * article](https://support.google.com/domains/answer/3251242).
     *
     * Generated from protobuf enum <code>REDACTED_CONTACT_DATA = 3;</code>
     */
    const REDACTED_CONTACT_DATA = 3;

    private static $valueToName = [
        self::CONTACT_PRIVACY_UNSPECIFIED => 'CONTACT_PRIVACY_UNSPECIFIED',
        self::PUBLIC_CONTACT_DATA => 'PUBLIC_CONTACT_DATA',
        self::PRIVATE_CONTACT_DATA => 'PRIVATE_CONTACT_DATA',
        self::REDACTED_CONTACT_DATA => 'REDACTED_CONTACT_DATA',
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

