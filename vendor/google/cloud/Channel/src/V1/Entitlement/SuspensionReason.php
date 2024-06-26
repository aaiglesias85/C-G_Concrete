<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/entitlements.proto

namespace Google\Cloud\Channel\V1\Entitlement;

use UnexpectedValueException;

/**
 * Suspension reason for an entitlement if [provisioning_state][google.cloud.channel.v1.Entitlement.provisioning_state] = SUSPENDED.
 *
 * Protobuf type <code>google.cloud.channel.v1.Entitlement.SuspensionReason</code>
 */
class SuspensionReason
{
    /**
     * Not used.
     *
     * Generated from protobuf enum <code>SUSPENSION_REASON_UNSPECIFIED = 0;</code>
     */
    const SUSPENSION_REASON_UNSPECIFIED = 0;
    /**
     * Entitlement was manually suspended by the Reseller.
     *
     * Generated from protobuf enum <code>RESELLER_INITIATED = 1;</code>
     */
    const RESELLER_INITIATED = 1;
    /**
     * Trial ended.
     *
     * Generated from protobuf enum <code>TRIAL_ENDED = 2;</code>
     */
    const TRIAL_ENDED = 2;
    /**
     * Entitlement renewal was canceled.
     *
     * Generated from protobuf enum <code>RENEWAL_WITH_TYPE_CANCEL = 3;</code>
     */
    const RENEWAL_WITH_TYPE_CANCEL = 3;
    /**
     * Entitlement was automatically suspended on creation for pending ToS
     * acceptance on customer.
     *
     * Generated from protobuf enum <code>PENDING_TOS_ACCEPTANCE = 4;</code>
     */
    const PENDING_TOS_ACCEPTANCE = 4;
    /**
     * Other reasons (internal reasons, abuse, etc.).
     *
     * Generated from protobuf enum <code>OTHER = 100;</code>
     */
    const OTHER = 100;

    private static $valueToName = [
        self::SUSPENSION_REASON_UNSPECIFIED => 'SUSPENSION_REASON_UNSPECIFIED',
        self::RESELLER_INITIATED => 'RESELLER_INITIATED',
        self::TRIAL_ENDED => 'TRIAL_ENDED',
        self::RENEWAL_WITH_TYPE_CANCEL => 'RENEWAL_WITH_TYPE_CANCEL',
        self::PENDING_TOS_ACCEPTANCE => 'PENDING_TOS_ACCEPTANCE',
        self::OTHER => 'OTHER',
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
class_alias(SuspensionReason::class, \Google\Cloud\Channel\V1\Entitlement_SuspensionReason::class);

