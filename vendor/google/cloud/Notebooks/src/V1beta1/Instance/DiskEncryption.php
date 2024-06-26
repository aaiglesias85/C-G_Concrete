<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1beta1/instance.proto

namespace Google\Cloud\Notebooks\V1beta1\Instance;

use UnexpectedValueException;

/**
 * Definition of the disk encryption options.
 *
 * Protobuf type <code>google.cloud.notebooks.v1beta1.Instance.DiskEncryption</code>
 */
class DiskEncryption
{
    /**
     * Disk encryption is not specified.
     *
     * Generated from protobuf enum <code>DISK_ENCRYPTION_UNSPECIFIED = 0;</code>
     */
    const DISK_ENCRYPTION_UNSPECIFIED = 0;
    /**
     * Use Google managed encryption keys to encrypt the boot disk.
     *
     * Generated from protobuf enum <code>GMEK = 1;</code>
     */
    const GMEK = 1;
    /**
     * Use customer managed encryption keys to encrypt the boot disk.
     *
     * Generated from protobuf enum <code>CMEK = 2;</code>
     */
    const CMEK = 2;

    private static $valueToName = [
        self::DISK_ENCRYPTION_UNSPECIFIED => 'DISK_ENCRYPTION_UNSPECIFIED',
        self::GMEK => 'GMEK',
        self::CMEK => 'CMEK',
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
class_alias(DiskEncryption::class, \Google\Cloud\Notebooks\V1beta1\Instance_DiskEncryption::class);

