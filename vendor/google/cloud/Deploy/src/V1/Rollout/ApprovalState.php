<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1\Rollout;

use UnexpectedValueException;

/**
 * Valid approval states of a `Rollout`.
 *
 * Protobuf type <code>google.cloud.deploy.v1.Rollout.ApprovalState</code>
 */
class ApprovalState
{
    /**
     * The `Rollout` has an unspecified approval state.
     *
     * Generated from protobuf enum <code>APPROVAL_STATE_UNSPECIFIED = 0;</code>
     */
    const APPROVAL_STATE_UNSPECIFIED = 0;
    /**
     * The `Rollout` requires approval.
     *
     * Generated from protobuf enum <code>NEEDS_APPROVAL = 1;</code>
     */
    const NEEDS_APPROVAL = 1;
    /**
     * The `Rollout` does not require approval.
     *
     * Generated from protobuf enum <code>DOES_NOT_NEED_APPROVAL = 2;</code>
     */
    const DOES_NOT_NEED_APPROVAL = 2;
    /**
     * The `Rollout` has been approved.
     *
     * Generated from protobuf enum <code>APPROVED = 3;</code>
     */
    const APPROVED = 3;
    /**
     * The `Rollout` has been rejected.
     *
     * Generated from protobuf enum <code>REJECTED = 4;</code>
     */
    const REJECTED = 4;

    private static $valueToName = [
        self::APPROVAL_STATE_UNSPECIFIED => 'APPROVAL_STATE_UNSPECIFIED',
        self::NEEDS_APPROVAL => 'NEEDS_APPROVAL',
        self::DOES_NOT_NEED_APPROVAL => 'DOES_NOT_NEED_APPROVAL',
        self::APPROVED => 'APPROVED',
        self::REJECTED => 'REJECTED',
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


