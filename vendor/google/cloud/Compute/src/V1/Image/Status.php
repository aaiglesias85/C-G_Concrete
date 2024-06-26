<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Image;

use UnexpectedValueException;

/**
 * [Output Only] The status of the image. An image can be used to create other resources, such as instances, only after the image has been successfully created and the status is set to READY. Possible values are FAILED, PENDING, or READY.
 *
 * Protobuf type <code>google.cloud.compute.v1.Image.Status</code>
 */
class Status
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_STATUS = 0;</code>
     */
    const UNDEFINED_STATUS = 0;
    /**
     * Image is deleting.
     *
     * Generated from protobuf enum <code>DELETING = 528602024;</code>
     */
    const DELETING = 528602024;
    /**
     * Image creation failed due to an error.
     *
     * Generated from protobuf enum <code>FAILED = 455706685;</code>
     */
    const FAILED = 455706685;
    /**
     * Image hasn't been created as yet.
     *
     * Generated from protobuf enum <code>PENDING = 35394935;</code>
     */
    const PENDING = 35394935;
    /**
     * Image has been successfully created.
     *
     * Generated from protobuf enum <code>READY = 77848963;</code>
     */
    const READY = 77848963;

    private static $valueToName = [
        self::UNDEFINED_STATUS => 'UNDEFINED_STATUS',
        self::DELETING => 'DELETING',
        self::FAILED => 'FAILED',
        self::PENDING => 'PENDING',
        self::READY => 'READY',
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


