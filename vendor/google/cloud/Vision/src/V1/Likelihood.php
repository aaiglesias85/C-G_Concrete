<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use UnexpectedValueException;

/**
 * A bucketized representation of likelihood, which is intended to give clients
 * highly stable results across model upgrades.
 *
 * Protobuf type <code>google.cloud.vision.v1.Likelihood</code>
 */
class Likelihood
{
    /**
     * Unknown likelihood.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * It is very unlikely.
     *
     * Generated from protobuf enum <code>VERY_UNLIKELY = 1;</code>
     */
    const VERY_UNLIKELY = 1;
    /**
     * It is unlikely.
     *
     * Generated from protobuf enum <code>UNLIKELY = 2;</code>
     */
    const UNLIKELY = 2;
    /**
     * It is possible.
     *
     * Generated from protobuf enum <code>POSSIBLE = 3;</code>
     */
    const POSSIBLE = 3;
    /**
     * It is likely.
     *
     * Generated from protobuf enum <code>LIKELY = 4;</code>
     */
    const LIKELY = 4;
    /**
     * It is very likely.
     *
     * Generated from protobuf enum <code>VERY_LIKELY = 5;</code>
     */
    const VERY_LIKELY = 5;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::VERY_UNLIKELY => 'VERY_UNLIKELY',
        self::UNLIKELY => 'UNLIKELY',
        self::POSSIBLE => 'POSSIBLE',
        self::LIKELY => 'LIKELY',
        self::VERY_LIKELY => 'VERY_LIKELY',
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

