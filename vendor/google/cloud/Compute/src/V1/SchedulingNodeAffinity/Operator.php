<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\SchedulingNodeAffinity;

use UnexpectedValueException;

/**
 * Defines the operation of node selection. Valid operators are IN for affinity and NOT_IN for anti-affinity.
 *
 * Protobuf type <code>google.cloud.compute.v1.SchedulingNodeAffinity.Operator</code>
 */
class Operator
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_OPERATOR = 0;</code>
     */
    const UNDEFINED_OPERATOR = 0;
    /**
     * Requires Compute Engine to seek for matched nodes.
     *
     * Generated from protobuf enum <code>IN = 2341;</code>
     */
    const IN = 2341;
    /**
     * Requires Compute Engine to avoid certain nodes.
     *
     * Generated from protobuf enum <code>NOT_IN = 161144369;</code>
     */
    const NOT_IN = 161144369;
    /**
     * Generated from protobuf enum <code>OPERATOR_UNSPECIFIED = 128892924;</code>
     */
    const OPERATOR_UNSPECIFIED = 128892924;

    private static $valueToName = [
        self::UNDEFINED_OPERATOR => 'UNDEFINED_OPERATOR',
        self::IN => 'IN',
        self::NOT_IN => 'NOT_IN',
        self::OPERATOR_UNSPECIFIED => 'OPERATOR_UNSPECIFIED',
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


