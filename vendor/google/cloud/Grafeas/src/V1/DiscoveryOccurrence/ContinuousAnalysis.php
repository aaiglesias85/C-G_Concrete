<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/discovery.proto

namespace Grafeas\V1\DiscoveryOccurrence;

use UnexpectedValueException;

/**
 * Whether the resource is continuously analyzed.
 *
 * Protobuf type <code>grafeas.v1.DiscoveryOccurrence.ContinuousAnalysis</code>
 */
class ContinuousAnalysis
{
    /**
     * Unknown.
     *
     * Generated from protobuf enum <code>CONTINUOUS_ANALYSIS_UNSPECIFIED = 0;</code>
     */
    const CONTINUOUS_ANALYSIS_UNSPECIFIED = 0;
    /**
     * The resource is continuously analyzed.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * The resource is ignored for continuous analysis.
     *
     * Generated from protobuf enum <code>INACTIVE = 2;</code>
     */
    const INACTIVE = 2;

    private static $valueToName = [
        self::CONTINUOUS_ANALYSIS_UNSPECIFIED => 'CONTINUOUS_ANALYSIS_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::INACTIVE => 'INACTIVE',
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


