<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads_v1beta1.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1\Workload;

use UnexpectedValueException;

/**
 * Key Access Justifications(KAJ) Enrollment State.
 *
 * Protobuf type <code>google.cloud.assuredworkloads.v1beta1.Workload.KajEnrollmentState</code>
 */
class KajEnrollmentState
{
    /**
     * Default State for KAJ Enrollment.
     *
     * Generated from protobuf enum <code>KAJ_ENROLLMENT_STATE_UNSPECIFIED = 0;</code>
     */
    const KAJ_ENROLLMENT_STATE_UNSPECIFIED = 0;
    /**
     * Pending State for KAJ Enrollment.
     *
     * Generated from protobuf enum <code>KAJ_ENROLLMENT_STATE_PENDING = 1;</code>
     */
    const KAJ_ENROLLMENT_STATE_PENDING = 1;
    /**
     * Complete State for KAJ Enrollment.
     *
     * Generated from protobuf enum <code>KAJ_ENROLLMENT_STATE_COMPLETE = 2;</code>
     */
    const KAJ_ENROLLMENT_STATE_COMPLETE = 2;

    private static $valueToName = [
        self::KAJ_ENROLLMENT_STATE_UNSPECIFIED => 'KAJ_ENROLLMENT_STATE_UNSPECIFIED',
        self::KAJ_ENROLLMENT_STATE_PENDING => 'KAJ_ENROLLMENT_STATE_PENDING',
        self::KAJ_ENROLLMENT_STATE_COMPLETE => 'KAJ_ENROLLMENT_STATE_COMPLETE',
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
class_alias(KajEnrollmentState::class, \Google\Cloud\AssuredWorkloads\V1beta1\Workload_KajEnrollmentState::class);

