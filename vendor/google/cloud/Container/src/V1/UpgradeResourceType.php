<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use UnexpectedValueException;

/**
 * UpgradeResourceType is the resource type that is upgrading. It is used
 * in upgrade notifications.
 *
 * Protobuf type <code>google.container.v1.UpgradeResourceType</code>
 */
class UpgradeResourceType
{
    /**
     * Default value. This shouldn't be used.
     *
     * Generated from protobuf enum <code>UPGRADE_RESOURCE_TYPE_UNSPECIFIED = 0;</code>
     */
    const UPGRADE_RESOURCE_TYPE_UNSPECIFIED = 0;
    /**
     * Master / control plane
     *
     * Generated from protobuf enum <code>MASTER = 1;</code>
     */
    const MASTER = 1;
    /**
     * Node pool
     *
     * Generated from protobuf enum <code>NODE_POOL = 2;</code>
     */
    const NODE_POOL = 2;

    private static $valueToName = [
        self::UPGRADE_RESOURCE_TYPE_UNSPECIFIED => 'UPGRADE_RESOURCE_TYPE_UNSPECIFIED',
        self::MASTER => 'MASTER',
        self::NODE_POOL => 'NODE_POOL',
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

