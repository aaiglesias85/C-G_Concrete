<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1\Release;

use UnexpectedValueException;

/**
 * Valid states of the render operation.
 *
 * Protobuf type <code>google.cloud.deploy.v1.Release.RenderState</code>
 */
class RenderState
{
    /**
     * The render state is unspecified.
     *
     * Generated from protobuf enum <code>RENDER_STATE_UNSPECIFIED = 0;</code>
     */
    const RENDER_STATE_UNSPECIFIED = 0;
    /**
     * All rendering operations have completed successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 1;</code>
     */
    const SUCCEEDED = 1;
    /**
     * All rendering operations have completed, and one or more have failed.
     *
     * Generated from protobuf enum <code>FAILED = 2;</code>
     */
    const FAILED = 2;
    /**
     * Rendering has started and is not complete.
     *
     * Generated from protobuf enum <code>IN_PROGRESS = 3;</code>
     */
    const IN_PROGRESS = 3;

    private static $valueToName = [
        self::RENDER_STATE_UNSPECIFIED => 'RENDER_STATE_UNSPECIFIED',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
        self::IN_PROGRESS => 'IN_PROGRESS',
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


