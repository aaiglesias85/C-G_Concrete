<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/artifact.proto

namespace Google\Cloud\AIPlatform\V1\Artifact;

use UnexpectedValueException;

/**
 * Describes the state of the Artifact.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.Artifact.State</code>
 */
class State
{
    /**
     * Unspecified state for the Artifact.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * A state used by systems like Vertex AI Pipelines to indicate that the
     * underlying data item represented by this Artifact is being created.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * A state indicating that the Artifact should exist, unless something
     * external to the system deletes it.
     *
     * Generated from protobuf enum <code>LIVE = 2;</code>
     */
    const LIVE = 2;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::LIVE => 'LIVE',
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


