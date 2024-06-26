<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InstanceGroupManagerUpdatePolicy;

use UnexpectedValueException;

/**
 * Minimal action to be taken on an instance. Use this option to minimize disruption as much as possible or to apply a more disruptive action than is necessary. - To limit disruption as much as possible, set the minimal action to REFRESH. If your update requires a more disruptive action, Compute Engine performs the necessary action to execute the update. - To apply a more disruptive action than is strictly necessary, set the minimal action to RESTART or REPLACE. For example, Compute Engine does not need to restart a VM to change its metadata. But if your application reads instance metadata only when a VM is restarted, you can set the minimal action to RESTART in order to pick up metadata changes.
 * Additional supported values which may be not listed in the enum directly due to technical reasons:
 * NONE
 * REFRESH
 * REPLACE
 * RESTART
 *
 * Protobuf type <code>google.cloud.compute.v1.InstanceGroupManagerUpdatePolicy.MinimalAction</code>
 */
class MinimalAction
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_MINIMAL_ACTION = 0;</code>
     */
    const UNDEFINED_MINIMAL_ACTION = 0;

    private static $valueToName = [
        self::UNDEFINED_MINIMAL_ACTION => 'UNDEFINED_MINIMAL_ACTION',
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


