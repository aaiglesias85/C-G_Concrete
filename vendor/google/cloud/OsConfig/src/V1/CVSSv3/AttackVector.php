<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/vulnerability.proto

namespace Google\Cloud\OsConfig\V1\CVSSv3;

use UnexpectedValueException;

/**
 * This metric reflects the context by which vulnerability exploitation is
 * possible.
 *
 * Protobuf type <code>google.cloud.osconfig.v1.CVSSv3.AttackVector</code>
 */
class AttackVector
{
    /**
     * Invalid value.
     *
     * Generated from protobuf enum <code>ATTACK_VECTOR_UNSPECIFIED = 0;</code>
     */
    const ATTACK_VECTOR_UNSPECIFIED = 0;
    /**
     * The vulnerable component is bound to the network stack and the set of
     * possible attackers extends beyond the other options listed below, up to
     * and including the entire Internet.
     *
     * Generated from protobuf enum <code>ATTACK_VECTOR_NETWORK = 1;</code>
     */
    const ATTACK_VECTOR_NETWORK = 1;
    /**
     * The vulnerable component is bound to the network stack, but the attack is
     * limited at the protocol level to a logically adjacent topology.
     *
     * Generated from protobuf enum <code>ATTACK_VECTOR_ADJACENT = 2;</code>
     */
    const ATTACK_VECTOR_ADJACENT = 2;
    /**
     * The vulnerable component is not bound to the network stack and the
     * attacker's path is via read/write/execute capabilities.
     *
     * Generated from protobuf enum <code>ATTACK_VECTOR_LOCAL = 3;</code>
     */
    const ATTACK_VECTOR_LOCAL = 3;
    /**
     * The attack requires the attacker to physically touch or manipulate the
     * vulnerable component.
     *
     * Generated from protobuf enum <code>ATTACK_VECTOR_PHYSICAL = 4;</code>
     */
    const ATTACK_VECTOR_PHYSICAL = 4;

    private static $valueToName = [
        self::ATTACK_VECTOR_UNSPECIFIED => 'ATTACK_VECTOR_UNSPECIFIED',
        self::ATTACK_VECTOR_NETWORK => 'ATTACK_VECTOR_NETWORK',
        self::ATTACK_VECTOR_ADJACENT => 'ATTACK_VECTOR_ADJACENT',
        self::ATTACK_VECTOR_LOCAL => 'ATTACK_VECTOR_LOCAL',
        self::ATTACK_VECTOR_PHYSICAL => 'ATTACK_VECTOR_PHYSICAL',
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


