<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

use UnexpectedValueException;

/**
 * Enum that represents the usage of the contact information.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.ContactInfoUsage</code>
 */
class ContactInfoUsage
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>CONTACT_INFO_USAGE_UNSPECIFIED = 0;</code>
     */
    const CONTACT_INFO_USAGE_UNSPECIFIED = 0;
    /**
     * Personal use.
     *
     * Generated from protobuf enum <code>PERSONAL = 1;</code>
     */
    const PERSONAL = 1;
    /**
     * Work use.
     *
     * Generated from protobuf enum <code>WORK = 2;</code>
     */
    const WORK = 2;
    /**
     * School use.
     *
     * Generated from protobuf enum <code>SCHOOL = 3;</code>
     */
    const SCHOOL = 3;

    private static $valueToName = [
        self::CONTACT_INFO_USAGE_UNSPECIFIED => 'CONTACT_INFO_USAGE_UNSPECIFIED',
        self::PERSONAL => 'PERSONAL',
        self::WORK => 'WORK',
        self::SCHOOL => 'SCHOOL',
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

