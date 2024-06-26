<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SecurityPolicyRuleRateLimitOptions;

use UnexpectedValueException;

/**
 * Determines the key to enforce the rate_limit_threshold on. Possible values are: - ALL: A single rate limit threshold is applied to all the requests matching this rule. This is the default value if this field 'enforce_on_key' is not configured. - IP: The source IP address of the request is the key. Each IP has this limit enforced separately. - HTTP_HEADER: The value of the HTTP header whose name is configured under "enforce_on_key_name". The key value is truncated to the first 128 bytes of the header value. If no such header is present in the request, the key type defaults to ALL. - XFF_IP: The first IP address (i.e. the originating client IP address) specified in the list of IPs under X-Forwarded-For HTTP header. If no such header is present or the value is not a valid IP, the key defaults to the source IP address of the request i.e. key type IP. - HTTP_COOKIE: The value of the HTTP cookie whose name is configured under "enforce_on_key_name". The key value is truncated to the first 128 bytes of the cookie value. If no such cookie is present in the request, the key type defaults to ALL. 
 *
 * Protobuf type <code>google.cloud.compute.v1.SecurityPolicyRuleRateLimitOptions.EnforceOnKey</code>
 */
class EnforceOnKey
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ENFORCE_ON_KEY = 0;</code>
     */
    const UNDEFINED_ENFORCE_ON_KEY = 0;
    /**
     * Generated from protobuf enum <code>ALL = 64897;</code>
     */
    const ALL = 64897;
    /**
     * Generated from protobuf enum <code>HTTP_COOKIE = 494981627;</code>
     */
    const HTTP_COOKIE = 494981627;
    /**
     * Generated from protobuf enum <code>HTTP_HEADER = 91597348;</code>
     */
    const HTTP_HEADER = 91597348;
    /**
     * Generated from protobuf enum <code>IP = 2343;</code>
     */
    const IP = 2343;
    /**
     * Generated from protobuf enum <code>XFF_IP = 438707118;</code>
     */
    const XFF_IP = 438707118;

    private static $valueToName = [
        self::UNDEFINED_ENFORCE_ON_KEY => 'UNDEFINED_ENFORCE_ON_KEY',
        self::ALL => 'ALL',
        self::HTTP_COOKIE => 'HTTP_COOKIE',
        self::HTTP_HEADER => 'HTTP_HEADER',
        self::IP => 'IP',
        self::XFF_IP => 'XFF_IP',
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


