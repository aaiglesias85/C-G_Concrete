<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InterconnectDiagnosticsLinkLACPStatus;

use UnexpectedValueException;

/**
 * The state of a LACP link, which can take one of the following values: - ACTIVE: The link is configured and active within the bundle. - DETACHED: The link is not configured within the bundle. This means that the rest of the object should be empty. 
 *
 * Protobuf type <code>google.cloud.compute.v1.InterconnectDiagnosticsLinkLACPStatus.State</code>
 */
class State
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_STATE = 0;</code>
     */
    const UNDEFINED_STATE = 0;
    /**
     * The link is configured and active within the bundle.
     *
     * Generated from protobuf enum <code>ACTIVE = 314733318;</code>
     */
    const ACTIVE = 314733318;
    /**
     * The link is not configured within the bundle, this means the rest of the object should be empty.
     *
     * Generated from protobuf enum <code>DETACHED = 216562546;</code>
     */
    const DETACHED = 216562546;

    private static $valueToName = [
        self::UNDEFINED_STATE => 'UNDEFINED_STATE',
        self::ACTIVE => 'ACTIVE',
        self::DETACHED => 'DETACHED',
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


