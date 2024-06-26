<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SecurityPolicyRuleMatcher;

use UnexpectedValueException;

/**
 * Preconfigured versioned expression. If this field is specified, config must also be specified. Available preconfigured expressions along with their requirements are: SRC_IPS_V1 - must specify the corresponding src_ip_range field in config.
 *
 * Protobuf type <code>google.cloud.compute.v1.SecurityPolicyRuleMatcher.VersionedExpr</code>
 */
class VersionedExpr
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_VERSIONED_EXPR = 0;</code>
     */
    const UNDEFINED_VERSIONED_EXPR = 0;
    /**
     * Matches the source IP address of a request to the IP ranges supplied in config.
     *
     * Generated from protobuf enum <code>SRC_IPS_V1 = 70925961;</code>
     */
    const SRC_IPS_V1 = 70925961;

    private static $valueToName = [
        self::UNDEFINED_VERSIONED_EXPR => 'UNDEFINED_VERSIONED_EXPR',
        self::SRC_IPS_V1 => 'SRC_IPS_V1',
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


