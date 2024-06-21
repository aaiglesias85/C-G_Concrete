<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1alpha2/domains.proto

namespace Google\Cloud\Domains\V1alpha2;

use UnexpectedValueException;

/**
 * Possible states of a `Registration`'s transfer lock.
 *
 * Protobuf type <code>google.cloud.domains.v1alpha2.TransferLockState</code>
 */
class TransferLockState
{
    /**
     * The state is unspecified.
     *
     * Generated from protobuf enum <code>TRANSFER_LOCK_STATE_UNSPECIFIED = 0;</code>
     */
    const TRANSFER_LOCK_STATE_UNSPECIFIED = 0;
    /**
     * The domain is unlocked and can be transferred to another registrar.
     *
     * Generated from protobuf enum <code>UNLOCKED = 1;</code>
     */
    const UNLOCKED = 1;
    /**
     * The domain is locked and cannot be transferred to another registrar.
     *
     * Generated from protobuf enum <code>LOCKED = 2;</code>
     */
    const LOCKED = 2;

    private static $valueToName = [
        self::TRANSFER_LOCK_STATE_UNSPECIFIED => 'TRANSFER_LOCK_STATE_UNSPECIFIED',
        self::UNLOCKED => 'UNLOCKED',
        self::LOCKED => 'LOCKED',
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

