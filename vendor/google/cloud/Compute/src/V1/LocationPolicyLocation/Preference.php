<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\LocationPolicyLocation;

use UnexpectedValueException;

/**
 * Preference for a given location.
 *
 * Protobuf type <code>google.cloud.compute.v1.LocationPolicyLocation.Preference</code>
 */
class Preference
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_PREFERENCE = 0;</code>
     */
    const UNDEFINED_PREFERENCE = 0;
    /**
     * Location is allowed for use.
     *
     * Generated from protobuf enum <code>ALLOW = 62368553;</code>
     */
    const ALLOW = 62368553;
    /**
     * Location is prohibited.
     *
     * Generated from protobuf enum <code>DENY = 2094604;</code>
     */
    const DENY = 2094604;
    /**
     * Default value, unused.
     *
     * Generated from protobuf enum <code>PREFERENCE_UNSPECIFIED = 496219571;</code>
     */
    const PREFERENCE_UNSPECIFIED = 496219571;

    private static $valueToName = [
        self::UNDEFINED_PREFERENCE => 'UNDEFINED_PREFERENCE',
        self::ALLOW => 'ALLOW',
        self::DENY => 'DENY',
        self::PREFERENCE_UNSPECIFIED => 'PREFERENCE_UNSPECIFIED',
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


