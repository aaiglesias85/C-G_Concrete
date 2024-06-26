<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeconnect/v1/tether.proto

namespace Google\Cloud\ApigeeConnect\V1;

use UnexpectedValueException;

/**
 * The action taken by agent.
 *
 * Protobuf type <code>google.cloud.apigeeconnect.v1.Action</code>
 */
class Action
{
    /**
     * Unspecified Action.
     *
     * Generated from protobuf enum <code>ACTION_UNSPECIFIED = 0;</code>
     */
    const ACTION_UNSPECIFIED = 0;
    /**
     * Indicates that agent should open a new stream.
     *
     * Generated from protobuf enum <code>OPEN_NEW_STREAM = 1;</code>
     */
    const OPEN_NEW_STREAM = 1;

    private static $valueToName = [
        self::ACTION_UNSPECIFIED => 'ACTION_UNSPECIFIED',
        self::OPEN_NEW_STREAM => 'OPEN_NEW_STREAM',
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

