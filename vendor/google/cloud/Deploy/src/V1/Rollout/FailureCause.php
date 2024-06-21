<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1\Rollout;

use UnexpectedValueException;

/**
 * Well-known deployment failures.
 *
 * Protobuf type <code>google.cloud.deploy.v1.Rollout.FailureCause</code>
 */
class FailureCause
{
    /**
     * No reason for failure is specified.
     *
     * Generated from protobuf enum <code>FAILURE_CAUSE_UNSPECIFIED = 0;</code>
     */
    const FAILURE_CAUSE_UNSPECIFIED = 0;
    /**
     * Cloud Build is not available, either because it is not enabled or because
     * Cloud Deploy has insufficient permissions. See [required
     * permission](https://cloud.google.com/deploy/docs/cloud-deploy-service-account#required_permissions).
     *
     * Generated from protobuf enum <code>CLOUD_BUILD_UNAVAILABLE = 1;</code>
     */
    const CLOUD_BUILD_UNAVAILABLE = 1;
    /**
     * The deploy operation did not complete successfully; check Cloud Build
     * logs.
     *
     * Generated from protobuf enum <code>EXECUTION_FAILED = 2;</code>
     */
    const EXECUTION_FAILED = 2;
    /**
     * Deployment did not complete within the alloted time.
     *
     * Generated from protobuf enum <code>DEADLINE_EXCEEDED = 3;</code>
     */
    const DEADLINE_EXCEEDED = 3;
    /**
     * Release is in a failed state.
     *
     * Generated from protobuf enum <code>RELEASE_FAILED = 4;</code>
     */
    const RELEASE_FAILED = 4;

    private static $valueToName = [
        self::FAILURE_CAUSE_UNSPECIFIED => 'FAILURE_CAUSE_UNSPECIFIED',
        self::CLOUD_BUILD_UNAVAILABLE => 'CLOUD_BUILD_UNAVAILABLE',
        self::EXECUTION_FAILED => 'EXECUTION_FAILED',
        self::DEADLINE_EXCEEDED => 'DEADLINE_EXCEEDED',
        self::RELEASE_FAILED => 'RELEASE_FAILED',
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


