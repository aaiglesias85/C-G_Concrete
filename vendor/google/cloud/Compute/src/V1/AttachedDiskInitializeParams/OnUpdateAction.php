<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\AttachedDiskInitializeParams;

use UnexpectedValueException;

/**
 * Specifies which action to take on instance update with this disk. Default is to use the existing disk.
 *
 * Protobuf type <code>google.cloud.compute.v1.AttachedDiskInitializeParams.OnUpdateAction</code>
 */
class OnUpdateAction
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ON_UPDATE_ACTION = 0;</code>
     */
    const UNDEFINED_ON_UPDATE_ACTION = 0;
    /**
     * Always recreate the disk.
     *
     * Generated from protobuf enum <code>RECREATE_DISK = 494767853;</code>
     */
    const RECREATE_DISK = 494767853;
    /**
     * Recreate the disk if source (image, snapshot) of this disk is different from source of existing disk.
     *
     * Generated from protobuf enum <code>RECREATE_DISK_IF_SOURCE_CHANGED = 398099712;</code>
     */
    const RECREATE_DISK_IF_SOURCE_CHANGED = 398099712;
    /**
     * Use the existing disk, this is the default behaviour.
     *
     * Generated from protobuf enum <code>USE_EXISTING_DISK = 232682233;</code>
     */
    const USE_EXISTING_DISK = 232682233;

    private static $valueToName = [
        self::UNDEFINED_ON_UPDATE_ACTION => 'UNDEFINED_ON_UPDATE_ACTION',
        self::RECREATE_DISK => 'RECREATE_DISK',
        self::RECREATE_DISK_IF_SOURCE_CHANGED => 'RECREATE_DISK_IF_SOURCE_CHANGED',
        self::USE_EXISTING_DISK => 'USE_EXISTING_DISK',
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


