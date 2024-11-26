<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads_v1beta1.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1\Workload\SaaEnrollmentResponse;

use UnexpectedValueException;

/**
 * Setup state of SAA enrollment.
 *
 * Protobuf type <code>google.cloud.assuredworkloads.v1beta1.Workload.SaaEnrollmentResponse.SetupState</code>
 */
class SetupState
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>SETUP_STATE_UNSPECIFIED = 0;</code>
     */
    const SETUP_STATE_UNSPECIFIED = 0;
    /**
     * SAA enrollment pending.
     *
     * Generated from protobuf enum <code>STATUS_PENDING = 1;</code>
     */
    const STATUS_PENDING = 1;
    /**
     * SAA enrollment comopleted.
     *
     * Generated from protobuf enum <code>STATUS_COMPLETE = 2;</code>
     */
    const STATUS_COMPLETE = 2;

    private static $valueToName = [
        self::SETUP_STATE_UNSPECIFIED => 'SETUP_STATE_UNSPECIFIED',
        self::STATUS_PENDING => 'STATUS_PENDING',
        self::STATUS_COMPLETE => 'STATUS_COMPLETE',
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
class_alias(SetupState::class, \Google\Cloud\AssuredWorkloads\V1beta1\Workload_SaaEnrollmentResponse_SetupState::class);

