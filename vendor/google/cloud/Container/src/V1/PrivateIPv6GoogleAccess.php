<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use UnexpectedValueException;

/**
 * PrivateIPv6GoogleAccess controls whether and how the pods can communicate
 * with Google Services through gRPC over IPv6.
 *
 * Protobuf type <code>google.container.v1.PrivateIPv6GoogleAccess</code>
 */
class PrivateIPv6GoogleAccess
{
    /**
     * Default value. Same as DISABLED
     *
     * Generated from protobuf enum <code>PRIVATE_IPV6_GOOGLE_ACCESS_UNSPECIFIED = 0;</code>
     */
    const PRIVATE_IPV6_GOOGLE_ACCESS_UNSPECIFIED = 0;
    /**
     * No private access to or from Google Services
     *
     * Generated from protobuf enum <code>PRIVATE_IPV6_GOOGLE_ACCESS_DISABLED = 1;</code>
     */
    const PRIVATE_IPV6_GOOGLE_ACCESS_DISABLED = 1;
    /**
     * Enables private IPv6 access to Google Services from GKE
     *
     * Generated from protobuf enum <code>PRIVATE_IPV6_GOOGLE_ACCESS_TO_GOOGLE = 2;</code>
     */
    const PRIVATE_IPV6_GOOGLE_ACCESS_TO_GOOGLE = 2;
    /**
     * Enables priate IPv6 access to and from Google Services
     *
     * Generated from protobuf enum <code>PRIVATE_IPV6_GOOGLE_ACCESS_BIDIRECTIONAL = 3;</code>
     */
    const PRIVATE_IPV6_GOOGLE_ACCESS_BIDIRECTIONAL = 3;

    private static $valueToName = [
        self::PRIVATE_IPV6_GOOGLE_ACCESS_UNSPECIFIED => 'PRIVATE_IPV6_GOOGLE_ACCESS_UNSPECIFIED',
        self::PRIVATE_IPV6_GOOGLE_ACCESS_DISABLED => 'PRIVATE_IPV6_GOOGLE_ACCESS_DISABLED',
        self::PRIVATE_IPV6_GOOGLE_ACCESS_TO_GOOGLE => 'PRIVATE_IPV6_GOOGLE_ACCESS_TO_GOOGLE',
        self::PRIVATE_IPV6_GOOGLE_ACCESS_BIDIRECTIONAL => 'PRIVATE_IPV6_GOOGLE_ACCESS_BIDIRECTIONAL',
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

