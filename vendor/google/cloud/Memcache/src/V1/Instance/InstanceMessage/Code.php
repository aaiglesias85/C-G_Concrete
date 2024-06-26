<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1/cloud_memcache.proto

namespace Google\Cloud\Memcache\V1\Instance\InstanceMessage;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.memcache.v1.Instance.InstanceMessage.Code</code>
 */
class Code
{
    /**
     * Message Code not set.
     *
     * Generated from protobuf enum <code>CODE_UNSPECIFIED = 0;</code>
     */
    const CODE_UNSPECIFIED = 0;
    /**
     * Memcached nodes are distributed unevenly.
     *
     * Generated from protobuf enum <code>ZONE_DISTRIBUTION_UNBALANCED = 1;</code>
     */
    const ZONE_DISTRIBUTION_UNBALANCED = 1;

    private static $valueToName = [
        self::CODE_UNSPECIFIED => 'CODE_UNSPECIFIED',
        self::ZONE_DISTRIBUTION_UNBALANCED => 'ZONE_DISTRIBUTION_UNBALANCED',
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
class_alias(Code::class, \Google\Cloud\Memcache\V1\Instance_InstanceMessage_Code::class);

