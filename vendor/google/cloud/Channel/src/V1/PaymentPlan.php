<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/offers.proto

namespace Google\Cloud\Channel\V1;

use UnexpectedValueException;

/**
 * Describes how the reseller will be billed.
 *
 * Protobuf type <code>google.cloud.channel.v1.PaymentPlan</code>
 */
class PaymentPlan
{
    /**
     * Not used.
     *
     * Generated from protobuf enum <code>PAYMENT_PLAN_UNSPECIFIED = 0;</code>
     */
    const PAYMENT_PLAN_UNSPECIFIED = 0;
    /**
     * Commitment.
     *
     * Generated from protobuf enum <code>COMMITMENT = 1;</code>
     */
    const COMMITMENT = 1;
    /**
     * No commitment.
     *
     * Generated from protobuf enum <code>FLEXIBLE = 2;</code>
     */
    const FLEXIBLE = 2;
    /**
     * Free.
     *
     * Generated from protobuf enum <code>FREE = 3;</code>
     */
    const FREE = 3;
    /**
     * Trial.
     *
     * Generated from protobuf enum <code>TRIAL = 4;</code>
     */
    const TRIAL = 4;
    /**
     * Price and ordering not available through API.
     *
     * Generated from protobuf enum <code>OFFLINE = 5;</code>
     */
    const OFFLINE = 5;

    private static $valueToName = [
        self::PAYMENT_PLAN_UNSPECIFIED => 'PAYMENT_PLAN_UNSPECIFIED',
        self::COMMITMENT => 'COMMITMENT',
        self::FLEXIBLE => 'FLEXIBLE',
        self::FREE => 'FREE',
        self::TRIAL => 'TRIAL',
        self::OFFLINE => 'OFFLINE',
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

