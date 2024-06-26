<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1\SchedulingNodeAffinity;

use UnexpectedValueException;

/**
 * Possible types of node selection operators. Valid operators are IN for
 * affinity and NOT_IN for anti-affinity.
 *
 * Protobuf type <code>google.cloud.vmmigration.v1.SchedulingNodeAffinity.Operator</code>
 */
class Operator
{
    /**
     * An unknown, unexpected behavior.
     *
     * Generated from protobuf enum <code>OPERATOR_UNSPECIFIED = 0;</code>
     */
    const OPERATOR_UNSPECIFIED = 0;
    /**
     * The node resource group should be in these resources affinity.
     *
     * Generated from protobuf enum <code>IN = 1;</code>
     */
    const IN = 1;
    /**
     * The node resource group should not be in these resources affinity.
     *
     * Generated from protobuf enum <code>NOT_IN = 2;</code>
     */
    const NOT_IN = 2;

    private static $valueToName = [
        self::OPERATOR_UNSPECIFIED => 'OPERATOR_UNSPECIFIED',
        self::IN => 'IN',
        self::NOT_IN => 'NOT_IN',
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


