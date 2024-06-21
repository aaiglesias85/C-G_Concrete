<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\ResourcePolicyWeeklyCycleDayOfWeek;

use UnexpectedValueException;

/**
 * Defines a schedule that runs on specific days of the week. Specify one or more days. The following options are available: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY.
 *
 * Protobuf type <code>google.cloud.compute.v1.ResourcePolicyWeeklyCycleDayOfWeek.Day</code>
 */
class Day
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_DAY = 0;</code>
     */
    const UNDEFINED_DAY = 0;
    /**
     * Generated from protobuf enum <code>FRIDAY = 471398751;</code>
     */
    const FRIDAY = 471398751;
    /**
     * Generated from protobuf enum <code>INVALID = 530283991;</code>
     */
    const INVALID = 530283991;
    /**
     * Generated from protobuf enum <code>MONDAY = 132310288;</code>
     */
    const MONDAY = 132310288;
    /**
     * Generated from protobuf enum <code>SATURDAY = 279037881;</code>
     */
    const SATURDAY = 279037881;
    /**
     * Generated from protobuf enum <code>SUNDAY = 309626320;</code>
     */
    const SUNDAY = 309626320;
    /**
     * Generated from protobuf enum <code>THURSDAY = 207198682;</code>
     */
    const THURSDAY = 207198682;
    /**
     * Generated from protobuf enum <code>TUESDAY = 277509677;</code>
     */
    const TUESDAY = 277509677;
    /**
     * Generated from protobuf enum <code>WEDNESDAY = 422029110;</code>
     */
    const WEDNESDAY = 422029110;

    private static $valueToName = [
        self::UNDEFINED_DAY => 'UNDEFINED_DAY',
        self::FRIDAY => 'FRIDAY',
        self::INVALID => 'INVALID',
        self::MONDAY => 'MONDAY',
        self::SATURDAY => 'SATURDAY',
        self::SUNDAY => 'SUNDAY',
        self::THURSDAY => 'THURSDAY',
        self::TUESDAY => 'TUESDAY',
        self::WEDNESDAY => 'WEDNESDAY',
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


