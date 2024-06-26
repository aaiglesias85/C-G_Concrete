<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1\NfsExportOptions;

use UnexpectedValueException;

/**
 * The squash mode.
 *
 * Protobuf type <code>google.cloud.filestore.v1.NfsExportOptions.SquashMode</code>
 */
class SquashMode
{
    /**
     * SquashMode not set.
     *
     * Generated from protobuf enum <code>SQUASH_MODE_UNSPECIFIED = 0;</code>
     */
    const SQUASH_MODE_UNSPECIFIED = 0;
    /**
     * The Root user has root access to the file share (default).
     *
     * Generated from protobuf enum <code>NO_ROOT_SQUASH = 1;</code>
     */
    const NO_ROOT_SQUASH = 1;
    /**
     * The Root user has squashed access to the anonymous uid/gid.
     *
     * Generated from protobuf enum <code>ROOT_SQUASH = 2;</code>
     */
    const ROOT_SQUASH = 2;

    private static $valueToName = [
        self::SQUASH_MODE_UNSPECIFIED => 'SQUASH_MODE_UNSPECIFIED',
        self::NO_ROOT_SQUASH => 'NO_ROOT_SQUASH',
        self::ROOT_SQUASH => 'ROOT_SQUASH',
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
class_alias(SquashMode::class, \Google\Cloud\Filestore\V1\NfsExportOptions_SquashMode::class);

