<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/insight.proto

namespace Google\Cloud\Recommender\V1\InsightStateInfo;

use UnexpectedValueException;

/**
 * Represents insight state.
 *
 * Protobuf type <code>google.cloud.recommender.v1.InsightStateInfo.State</code>
 */
class State
{
    /**
     * Unspecified state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Insight is active. Content for ACTIVE insights can be updated by Google.
     * ACTIVE insights can be marked DISMISSED OR ACCEPTED.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Some action has been taken based on this insight. Insights become
     * accepted when a recommendation derived from the insight has been marked
     * CLAIMED, SUCCEEDED, or FAILED. ACTIVE insights can also be marked
     * ACCEPTED explicitly. Content for ACCEPTED insights is immutable. ACCEPTED
     * insights can only be marked ACCEPTED (which may update state metadata).
     *
     * Generated from protobuf enum <code>ACCEPTED = 2;</code>
     */
    const ACCEPTED = 2;
    /**
     * Insight is dismissed. Content for DISMISSED insights can be updated by
     * Google. DISMISSED insights can be marked as ACTIVE.
     *
     * Generated from protobuf enum <code>DISMISSED = 3;</code>
     */
    const DISMISSED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::ACCEPTED => 'ACCEPTED',
        self::DISMISSED => 'DISMISSED',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Recommender\V1\InsightStateInfo_State::class);

