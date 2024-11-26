<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/baremetalsolution.proto

namespace Google\Cloud\BaremetalSolution\V2\Lun;

use UnexpectedValueException;

/**
 * Display the operating systems present for the LUN multiprotocol type.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.Lun.MultiprotocolType</code>
 */
class MultiprotocolType
{
    /**
     * Server has no OS specified.
     *
     * Generated from protobuf enum <code>MULTIPROTOCOL_TYPE_UNSPECIFIED = 0;</code>
     */
    const MULTIPROTOCOL_TYPE_UNSPECIFIED = 0;
    /**
     * Server with Linux OS.
     *
     * Generated from protobuf enum <code>LINUX = 1;</code>
     */
    const LINUX = 1;

    private static $valueToName = [
        self::MULTIPROTOCOL_TYPE_UNSPECIFIED => 'MULTIPROTOCOL_TYPE_UNSPECIFIED',
        self::LINUX => 'LINUX',
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


