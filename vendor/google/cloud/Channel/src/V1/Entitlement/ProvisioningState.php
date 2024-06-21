<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/entitlements.proto

namespace Google\Cloud\Channel\V1\Entitlement;

use UnexpectedValueException;

/**
 * Indicates the current provisioning state of the entitlement.
 *
 * Protobuf type <code>google.cloud.channel.v1.Entitlement.ProvisioningState</code>
 */
class ProvisioningState
{
    /**
     * Not used.
     *
     * Generated from protobuf enum <code>PROVISIONING_STATE_UNSPECIFIED = 0;</code>
     */
    const PROVISIONING_STATE_UNSPECIFIED = 0;
    /**
     * The entitlement is currently active.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * The entitlement is currently suspended.
     *
     * Generated from protobuf enum <code>SUSPENDED = 5;</code>
     */
    const SUSPENDED = 5;

    private static $valueToName = [
        self::PROVISIONING_STATE_UNSPECIFIED => 'PROVISIONING_STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::SUSPENDED => 'SUSPENDED',
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
class_alias(ProvisioningState::class, \Google\Cloud\Channel\V1\Entitlement_ProvisioningState::class);

