<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Cloud\AppEngine\V1;

use UnexpectedValueException;

/**
 * Methods to enforce security (HTTPS) on a URL.
 *
 * Protobuf type <code>google.appengine.v1.SecurityLevel</code>
 */
class SecurityLevel
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>SECURE_UNSPECIFIED = 0;</code>
     */
    const SECURE_UNSPECIFIED = 0;
    /**
     * Both HTTP and HTTPS requests with URLs that match the handler succeed
     * without redirects. The application can examine the request to determine
     * which protocol was used, and respond accordingly.
     *
     * Generated from protobuf enum <code>SECURE_DEFAULT = 0;</code>
     */
    const SECURE_DEFAULT = 0;
    /**
     * Requests for a URL that match this handler that use HTTPS are automatically
     * redirected to the HTTP equivalent URL.
     *
     * Generated from protobuf enum <code>SECURE_NEVER = 1;</code>
     */
    const SECURE_NEVER = 1;
    /**
     * Both HTTP and HTTPS requests with URLs that match the handler succeed
     * without redirects. The application can examine the request to determine
     * which protocol was used and respond accordingly.
     *
     * Generated from protobuf enum <code>SECURE_OPTIONAL = 2;</code>
     */
    const SECURE_OPTIONAL = 2;
    /**
     * Requests for a URL that match this handler that do not use HTTPS are
     * automatically redirected to the HTTPS URL with the same path. Query
     * parameters are reserved for the redirect.
     *
     * Generated from protobuf enum <code>SECURE_ALWAYS = 3;</code>
     */
    const SECURE_ALWAYS = 3;

    private static $valueToName = [
        self::SECURE_UNSPECIFIED => 'SECURE_UNSPECIFIED',
        self::SECURE_DEFAULT => 'SECURE_DEFAULT',
        self::SECURE_NEVER => 'SECURE_NEVER',
        self::SECURE_OPTIONAL => 'SECURE_OPTIONAL',
        self::SECURE_ALWAYS => 'SECURE_ALWAYS',
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

