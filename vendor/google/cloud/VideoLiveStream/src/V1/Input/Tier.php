<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/resources.proto

namespace Google\Cloud\Video\LiveStream\V1\Input;

use UnexpectedValueException;

/**
 * Tier of the input specification.
 *
 * Protobuf type <code>google.cloud.video.livestream.v1.Input.Tier</code>
 */
class Tier
{
    /**
     * Tier is not specified.
     *
     * Generated from protobuf enum <code>TIER_UNSPECIFIED = 0;</code>
     */
    const TIER_UNSPECIFIED = 0;
    /**
     * Resolution < 1280x720. Bitrate <= 6 Mbps. FPS <= 60.
     *
     * Generated from protobuf enum <code>SD = 1;</code>
     */
    const SD = 1;
    /**
     * Resolution <= 1920x1080. Bitrate <= 25 Mbps. FPS <= 60.
     *
     * Generated from protobuf enum <code>HD = 2;</code>
     */
    const HD = 2;
    /**
     * Resolution <= 4096x2160. Not supported yet.
     *
     * Generated from protobuf enum <code>UHD = 3;</code>
     */
    const UHD = 3;

    private static $valueToName = [
        self::TIER_UNSPECIFIED => 'TIER_UNSPECIFIED',
        self::SD => 'SD',
        self::HD => 'HD',
        self::UHD => 'UHD',
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


