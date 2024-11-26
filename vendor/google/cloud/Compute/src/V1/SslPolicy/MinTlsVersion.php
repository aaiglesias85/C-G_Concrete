<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SslPolicy;

use UnexpectedValueException;

/**
 * The minimum version of SSL protocol that can be used by the clients to establish a connection with the load balancer. This can be one of TLS_1_0, TLS_1_1, TLS_1_2.
 *
 * Protobuf type <code>google.cloud.compute.v1.SslPolicy.MinTlsVersion</code>
 */
class MinTlsVersion
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_MIN_TLS_VERSION = 0;</code>
     */
    const UNDEFINED_MIN_TLS_VERSION = 0;
    /**
     * TLS 1.0
     *
     * Generated from protobuf enum <code>TLS_1_0 = 33116734;</code>
     */
    const TLS_1_0 = 33116734;
    /**
     * TLS 1.1
     *
     * Generated from protobuf enum <code>TLS_1_1 = 33116735;</code>
     */
    const TLS_1_1 = 33116735;
    /**
     * TLS 1.2
     *
     * Generated from protobuf enum <code>TLS_1_2 = 33116736;</code>
     */
    const TLS_1_2 = 33116736;

    private static $valueToName = [
        self::UNDEFINED_MIN_TLS_VERSION => 'UNDEFINED_MIN_TLS_VERSION',
        self::TLS_1_0 => 'TLS_1_0',
        self::TLS_1_1 => 'TLS_1_1',
        self::TLS_1_2 => 'TLS_1_2',
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


