<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/baremetalsolution.proto

namespace Google\Cloud\BaremetalSolution\V2\Network;

use UnexpectedValueException;

/**
 * Network type.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.Network.Type</code>
 */
class Type
{
    /**
     * Unspecified value.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Client network, a network peered to a Google Cloud VPC.
     *
     * Generated from protobuf enum <code>CLIENT = 1;</code>
     */
    const CLIENT = 1;
    /**
     * Private network, a network local to the Bare Metal Solution environment.
     *
     * Generated from protobuf enum <code>PRIVATE = 2;</code>
     */
    const PBPRIVATE = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::CLIENT => 'CLIENT',
        self::PBPRIVATE => 'PBPRIVATE',
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


