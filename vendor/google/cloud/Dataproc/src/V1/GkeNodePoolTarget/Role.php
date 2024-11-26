<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1\GkeNodePoolTarget;

use UnexpectedValueException;

/**
 * `Role` specifies whose tasks will run on the NodePool. The roles can be
 * specific to workloads. Exactly one GkeNodePoolTarget within the
 * VirtualCluster must have 'default' role, which is used to run all workloads
 * that are not associated with a NodePool.
 *
 * Protobuf type <code>google.cloud.dataproc.v1.GkeNodePoolTarget.Role</code>
 */
class Role
{
    /**
     * Role is unspecified.
     *
     * Generated from protobuf enum <code>ROLE_UNSPECIFIED = 0;</code>
     */
    const ROLE_UNSPECIFIED = 0;
    /**
     * Any roles that are not directly assigned to a NodePool run on the
     * `default` role's NodePool.
     *
     * Generated from protobuf enum <code>DEFAULT = 1;</code>
     */
    const PBDEFAULT = 1;
    /**
     * Run controllers and webhooks.
     *
     * Generated from protobuf enum <code>CONTROLLER = 2;</code>
     */
    const CONTROLLER = 2;
    /**
     * Run spark driver.
     *
     * Generated from protobuf enum <code>SPARK_DRIVER = 3;</code>
     */
    const SPARK_DRIVER = 3;
    /**
     * Run spark executors.
     *
     * Generated from protobuf enum <code>SPARK_EXECUTOR = 4;</code>
     */
    const SPARK_EXECUTOR = 4;

    private static $valueToName = [
        self::ROLE_UNSPECIFIED => 'ROLE_UNSPECIFIED',
        self::PBDEFAULT => 'PBDEFAULT',
        self::CONTROLLER => 'CONTROLLER',
        self::SPARK_DRIVER => 'SPARK_DRIVER',
        self::SPARK_EXECUTOR => 'SPARK_EXECUTOR',
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
class_alias(Role::class, \Google\Cloud\Dataproc\V1\GkeNodePoolTarget_Role::class);

