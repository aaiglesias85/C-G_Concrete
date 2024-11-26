<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\LicenseCode;

use UnexpectedValueException;

/**
 * [Output Only] Current state of this License Code.
 *
 * Protobuf type <code>google.cloud.compute.v1.LicenseCode.State</code>
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
     * Machines are not allowed to attach boot disks with this License Code. Requests to create new resources with this license will be rejected.
     *
     * Generated from protobuf enum <code>DISABLED = 516696700;</code>
     */
    const DISABLED = 516696700;
    /**
     * Use is allowed for anyone with USE_READ_ONLY access to this License Code.
     *
     * Generated from protobuf enum <code>ENABLED = 182130465;</code>
     */
    const ENABLED = 182130465;
    /**
     * Use of this license is limited to a project whitelist.
     *
     * Generated from protobuf enum <code>RESTRICTED = 261551195;</code>
     */
    const RESTRICTED = 261551195;
    /**
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 470755401;</code>
     */
    const STATE_UNSPECIFIED = 470755401;
    /**
     * Reserved state.
     *
     * Generated from protobuf enum <code>TERMINATED = 250018339;</code>
     */
    const TERMINATED = 250018339;

    private static $valueToName = [
        self::UNDEFINED_STATE => 'UNDEFINED_STATE',
        self::DISABLED => 'DISABLED',
        self::ENABLED => 'ENABLED',
        self::RESTRICTED => 'RESTRICTED',
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::TERMINATED => 'TERMINATED',
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


