<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Cloud\Bigtable\Admin\V2\Instance;

use UnexpectedValueException;

/**
 * Possible states of an instance.
 *
 * Protobuf type <code>google.bigtable.admin.v2.Instance.State</code>
 */
class State
{
    /**
     * The state of the instance could not be determined.
     *
     * Generated from protobuf enum <code>STATE_NOT_KNOWN = 0;</code>
     */
    const STATE_NOT_KNOWN = 0;
    /**
     * The instance has been successfully created and can serve requests
     * to its tables.
     *
     * Generated from protobuf enum <code>READY = 1;</code>
     */
    const READY = 1;
    /**
     * The instance is currently being created, and may be destroyed
     * if the creation process encounters an error.
     *
     * Generated from protobuf enum <code>CREATING = 2;</code>
     */
    const CREATING = 2;

    private static $valueToName = [
        self::STATE_NOT_KNOWN => 'STATE_NOT_KNOWN',
        self::READY => 'READY',
        self::CREATING => 'CREATING',
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
class_alias(State::class, \Google\Cloud\Bigtable\Admin\V2\Instance_State::class);

