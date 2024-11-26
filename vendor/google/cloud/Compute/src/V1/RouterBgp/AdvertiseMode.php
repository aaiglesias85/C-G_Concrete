<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\RouterBgp;

use UnexpectedValueException;

/**
 * User-specified flag to indicate which mode to use for advertisement. The options are DEFAULT or CUSTOM.
 *
 * Protobuf type <code>google.cloud.compute.v1.RouterBgp.AdvertiseMode</code>
 */
class AdvertiseMode
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ADVERTISE_MODE = 0;</code>
     */
    const UNDEFINED_ADVERTISE_MODE = 0;
    /**
     * Generated from protobuf enum <code>CUSTOM = 388595569;</code>
     */
    const CUSTOM = 388595569;
    /**
     * Generated from protobuf enum <code>DEFAULT = 115302945;</code>
     */
    const PBDEFAULT = 115302945;

    private static $valueToName = [
        self::UNDEFINED_ADVERTISE_MODE => 'UNDEFINED_ADVERTISE_MODE',
        self::CUSTOM => 'CUSTOM',
        self::PBDEFAULT => 'PBDEFAULT',
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


