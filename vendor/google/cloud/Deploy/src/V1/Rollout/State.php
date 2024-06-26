<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1\Rollout;

use UnexpectedValueException;

/**
 * Valid states of a `Rollout`.
 *
 * Protobuf type <code>google.cloud.deploy.v1.Rollout.State</code>
 */
class State
{
    /**
     * The `Rollout` has an unspecified state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The `Rollout` has completed successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 1;</code>
     */
    const SUCCEEDED = 1;
    /**
     * The `Rollout` has failed.
     *
     * Generated from protobuf enum <code>FAILED = 2;</code>
     */
    const FAILED = 2;
    /**
     * The `Rollout` is being deployed.
     *
     * Generated from protobuf enum <code>IN_PROGRESS = 3;</code>
     */
    const IN_PROGRESS = 3;
    /**
     * The `Rollout` needs approval.
     *
     * Generated from protobuf enum <code>PENDING_APPROVAL = 4;</code>
     */
    const PENDING_APPROVAL = 4;
    /**
     * An approver rejected the `Rollout`.
     *
     * Generated from protobuf enum <code>APPROVAL_REJECTED = 5;</code>
     */
    const APPROVAL_REJECTED = 5;
    /**
     * The `Rollout` is waiting for an earlier Rollout(s) to complete on this
     * `Target`.
     *
     * Generated from protobuf enum <code>PENDING = 6;</code>
     */
    const PENDING = 6;
    /**
     * The `Rollout` is waiting for the `Release` to be fully rendered.
     *
     * Generated from protobuf enum <code>PENDING_RELEASE = 7;</code>
     */
    const PENDING_RELEASE = 7;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
        self::IN_PROGRESS => 'IN_PROGRESS',
        self::PENDING_APPROVAL => 'PENDING_APPROVAL',
        self::APPROVAL_REJECTED => 'APPROVAL_REJECTED',
        self::PENDING => 'PENDING',
        self::PENDING_RELEASE => 'PENDING_RELEASE',
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


