<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Condition;

use UnexpectedValueException;

/**
 * This is deprecated and has no effect. Do not use.
 * Additional supported values which may be not listed in the enum directly due to technical reasons:
 * NO_ATTR
 *
 * Protobuf type <code>google.cloud.compute.v1.Condition.Sys</code>
 */
class Sys
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_SYS = 0;</code>
     */
    const UNDEFINED_SYS = 0;
    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf enum <code>IP = 2343;</code>
     */
    const IP = 2343;
    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf enum <code>NAME = 2388619;</code>
     */
    const NAME = 2388619;
    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf enum <code>REGION = 266017524;</code>
     */
    const REGION = 266017524;
    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf enum <code>SERVICE = 17781397;</code>
     */
    const SERVICE = 17781397;

    private static $valueToName = [
        self::UNDEFINED_SYS => 'UNDEFINED_SYS',
        self::IP => 'IP',
        self::NAME => 'NAME',
        self::REGION => 'REGION',
        self::SERVICE => 'SERVICE',
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


