<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\MaintenanceExclusionOptions;

use UnexpectedValueException;

/**
 * Scope of exclusion.
 *
 * Protobuf type <code>google.container.v1.MaintenanceExclusionOptions.Scope</code>
 */
class Scope
{
    /**
     * NO_UPGRADES excludes all upgrades, including patch upgrades and minor
     * upgrades across control planes and nodes. This is the default exclusion
     * behavior.
     *
     * Generated from protobuf enum <code>NO_UPGRADES = 0;</code>
     */
    const NO_UPGRADES = 0;
    /**
     * NO_MINOR_UPGRADES excludes all minor upgrades for the cluster, only
     * patches are allowed.
     *
     * Generated from protobuf enum <code>NO_MINOR_UPGRADES = 1;</code>
     */
    const NO_MINOR_UPGRADES = 1;
    /**
     * NO_MINOR_OR_NODE_UPGRADES excludes all minor upgrades for the cluster,
     * and also exclude all node pool upgrades. Only control
     * plane patches are allowed.
     *
     * Generated from protobuf enum <code>NO_MINOR_OR_NODE_UPGRADES = 2;</code>
     */
    const NO_MINOR_OR_NODE_UPGRADES = 2;

    private static $valueToName = [
        self::NO_UPGRADES => 'NO_UPGRADES',
        self::NO_MINOR_UPGRADES => 'NO_MINOR_UPGRADES',
        self::NO_MINOR_OR_NODE_UPGRADES => 'NO_MINOR_OR_NODE_UPGRADES',
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
class_alias(Scope::class, \Google\Cloud\Container\V1\MaintenanceExclusionOptions_Scope::class);

