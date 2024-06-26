<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/common/common.proto

namespace Google\Cloud\OsLogin\Common;

use UnexpectedValueException;

/**
 * The operating system options for account entries.
 *
 * Protobuf type <code>google.cloud.oslogin.common.OperatingSystemType</code>
 */
class OperatingSystemType
{
    /**
     * The operating system type associated with the user account information is
     * unspecified.
     *
     * Generated from protobuf enum <code>OPERATING_SYSTEM_TYPE_UNSPECIFIED = 0;</code>
     */
    const OPERATING_SYSTEM_TYPE_UNSPECIFIED = 0;
    /**
     * Linux user account information.
     *
     * Generated from protobuf enum <code>LINUX = 1;</code>
     */
    const LINUX = 1;
    /**
     * Windows user account information.
     *
     * Generated from protobuf enum <code>WINDOWS = 2;</code>
     */
    const WINDOWS = 2;

    private static $valueToName = [
        self::OPERATING_SYSTEM_TYPE_UNSPECIFIED => 'OPERATING_SYSTEM_TYPE_UNSPECIFIED',
        self::LINUX => 'LINUX',
        self::WINDOWS => 'WINDOWS',
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

