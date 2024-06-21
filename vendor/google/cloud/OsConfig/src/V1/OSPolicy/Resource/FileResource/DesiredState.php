<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy.proto

namespace Google\Cloud\OsConfig\V1\OSPolicy\Resource\FileResource;

use UnexpectedValueException;

/**
 * Desired state of the file.
 *
 * Protobuf type <code>google.cloud.osconfig.v1.OSPolicy.Resource.FileResource.DesiredState</code>
 */
class DesiredState
{
    /**
     * Unspecified is invalid.
     *
     * Generated from protobuf enum <code>DESIRED_STATE_UNSPECIFIED = 0;</code>
     */
    const DESIRED_STATE_UNSPECIFIED = 0;
    /**
     * Ensure file at path is present.
     *
     * Generated from protobuf enum <code>PRESENT = 1;</code>
     */
    const PRESENT = 1;
    /**
     * Ensure file at path is absent.
     *
     * Generated from protobuf enum <code>ABSENT = 2;</code>
     */
    const ABSENT = 2;
    /**
     * Ensure the contents of the file at path matches. If the file does
     * not exist it will be created.
     *
     * Generated from protobuf enum <code>CONTENTS_MATCH = 3;</code>
     */
    const CONTENTS_MATCH = 3;

    private static $valueToName = [
        self::DESIRED_STATE_UNSPECIFIED => 'DESIRED_STATE_UNSPECIFIED',
        self::PRESENT => 'PRESENT',
        self::ABSENT => 'ABSENT',
        self::CONTENTS_MATCH => 'CONTENTS_MATCH',
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


