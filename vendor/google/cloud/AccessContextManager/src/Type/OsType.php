<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/type/device_resources.proto

namespace Google\Identity\AccessContextManager\Type;

use UnexpectedValueException;

/**
 * The operating system type of the device.
 * Next id: 7
 *
 * Protobuf type <code>google.identity.accesscontextmanager.type.OsType</code>
 */
class OsType
{
    /**
     * The operating system of the device is not specified or not known.
     *
     * Generated from protobuf enum <code>OS_UNSPECIFIED = 0;</code>
     */
    const OS_UNSPECIFIED = 0;
    /**
     * A desktop Mac operating system.
     *
     * Generated from protobuf enum <code>DESKTOP_MAC = 1;</code>
     */
    const DESKTOP_MAC = 1;
    /**
     * A desktop Windows operating system.
     *
     * Generated from protobuf enum <code>DESKTOP_WINDOWS = 2;</code>
     */
    const DESKTOP_WINDOWS = 2;
    /**
     * A desktop Linux operating system.
     *
     * Generated from protobuf enum <code>DESKTOP_LINUX = 3;</code>
     */
    const DESKTOP_LINUX = 3;
    /**
     * A desktop ChromeOS operating system.
     *
     * Generated from protobuf enum <code>DESKTOP_CHROME_OS = 6;</code>
     */
    const DESKTOP_CHROME_OS = 6;
    /**
     * An Android operating system.
     *
     * Generated from protobuf enum <code>ANDROID = 4;</code>
     */
    const ANDROID = 4;
    /**
     * An iOS operating system.
     *
     * Generated from protobuf enum <code>IOS = 5;</code>
     */
    const IOS = 5;

    private static $valueToName = [
        self::OS_UNSPECIFIED => 'OS_UNSPECIFIED',
        self::DESKTOP_MAC => 'DESKTOP_MAC',
        self::DESKTOP_WINDOWS => 'DESKTOP_WINDOWS',
        self::DESKTOP_LINUX => 'DESKTOP_LINUX',
        self::DESKTOP_CHROME_OS => 'DESKTOP_CHROME_OS',
        self::ANDROID => 'ANDROID',
        self::IOS => 'IOS',
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

