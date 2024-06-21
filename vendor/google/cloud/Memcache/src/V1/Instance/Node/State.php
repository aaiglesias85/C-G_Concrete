<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1/cloud_memcache.proto

namespace Google\Cloud\Memcache\V1\Instance\Node;

use UnexpectedValueException;

/**
 * Different states of a Memcached node.
 *
 * Protobuf type <code>google.cloud.memcache.v1.Instance.Node.State</code>
 */
class State
{
    /**
     * Node state is not set.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Node is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * Node has been created and ready to be used.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;
    /**
     * Node is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 3;</code>
     */
    const DELETING = 3;
    /**
     * Node is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 4;</code>
     */
    const UPDATING = 4;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::READY => 'READY',
        self::DELETING => 'DELETING',
        self::UPDATING => 'UPDATING',
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
class_alias(State::class, \Google\Cloud\Memcache\V1\Instance_Node_State::class);

