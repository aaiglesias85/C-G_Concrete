<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\PerInstanceConfig;

use UnexpectedValueException;

/**
 * The status of applying this per-instance configuration on the corresponding managed instance.
 *
 * Protobuf type <code>google.cloud.compute.v1.PerInstanceConfig.Status</code>
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
     * The per-instance configuration is being applied to the instance, but is not yet effective, possibly waiting for the instance to, for example, REFRESH.
     *
     * Generated from protobuf enum <code>APPLYING = 352003508;</code>
     */
    const APPLYING = 352003508;
    /**
     * The per-instance configuration deletion is being applied on the instance, possibly waiting for the instance to, for example, REFRESH.
     *
     * Generated from protobuf enum <code>DELETING = 528602024;</code>
     */
    const DELETING = 528602024;
    /**
     * The per-instance configuration is effective on the instance, meaning that all disks, ips and metadata specified in this configuration are attached or set on the instance.
     *
     * Generated from protobuf enum <code>EFFECTIVE = 244201863;</code>
     */
    const EFFECTIVE = 244201863;
    /**
     * *[Default]* The default status, when no per-instance configuration exists.
     *
     * Generated from protobuf enum <code>NONE = 2402104;</code>
     */
    const NONE = 2402104;
    /**
     * The per-instance configuration is set on an instance but not been applied yet.
     *
     * Generated from protobuf enum <code>UNAPPLIED = 483935140;</code>
     */
    const UNAPPLIED = 483935140;
    /**
     * The per-instance configuration has been deleted, but the deletion is not yet applied.
     *
     * Generated from protobuf enum <code>UNAPPLIED_DELETION = 313956873;</code>
     */
    const UNAPPLIED_DELETION = 313956873;

    private static $valueToName = [
        self::UNDEFINED_STATUS => 'UNDEFINED_STATUS',
        self::APPLYING => 'APPLYING',
        self::DELETING => 'DELETING',
        self::EFFECTIVE => 'EFFECTIVE',
        self::NONE => 'NONE',
        self::UNAPPLIED => 'UNAPPLIED',
        self::UNAPPLIED_DELETION => 'UNAPPLIED_DELETION',
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


