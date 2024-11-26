<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SecurityPolicyAdvancedOptionsConfig;

use UnexpectedValueException;

/**
 *
 * Protobuf type <code>google.cloud.compute.v1.SecurityPolicyAdvancedOptionsConfig.LogLevel</code>
 */
class LogLevel
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_LOG_LEVEL = 0;</code>
     */
    const UNDEFINED_LOG_LEVEL = 0;
    /**
     * Generated from protobuf enum <code>NORMAL = 161067239;</code>
     */
    const NORMAL = 161067239;
    /**
     * Generated from protobuf enum <code>VERBOSE = 532219234;</code>
     */
    const VERBOSE = 532219234;

    private static $valueToName = [
        self::UNDEFINED_LOG_LEVEL => 'UNDEFINED_LOG_LEVEL',
        self::NORMAL => 'NORMAL',
        self::VERBOSE => 'VERBOSE',
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


