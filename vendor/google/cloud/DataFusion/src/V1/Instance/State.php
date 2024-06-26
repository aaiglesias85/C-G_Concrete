<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datafusion/v1/datafusion.proto

namespace Google\Cloud\DataFusion\V1\Instance;

use UnexpectedValueException;

/**
 * Represents the state of a Data Fusion instance
 *
 * Protobuf type <code>google.cloud.datafusion.v1.Instance.State</code>
 */
class State
{
    /**
     * Instance does not have a state yet
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Instance is being created
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * Instance is active and ready for requests. This corresponds to 'RUNNING'
     * in datafusion.v1beta1.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * Instance creation failed
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;
    /**
     * Instance is being deleted
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;
    /**
     * Instance is being upgraded
     *
     * Generated from protobuf enum <code>UPGRADING = 5;</code>
     */
    const UPGRADING = 5;
    /**
     * Instance is being restarted
     *
     * Generated from protobuf enum <code>RESTARTING = 6;</code>
     */
    const RESTARTING = 6;
    /**
     * Instance is being updated on customer request
     *
     * Generated from protobuf enum <code>UPDATING = 7;</code>
     */
    const UPDATING = 7;
    /**
     * Instance is being auto-updated
     *
     * Generated from protobuf enum <code>AUTO_UPDATING = 8;</code>
     */
    const AUTO_UPDATING = 8;
    /**
     * Instance is being auto-upgraded
     *
     * Generated from protobuf enum <code>AUTO_UPGRADING = 9;</code>
     */
    const AUTO_UPGRADING = 9;
    /**
     * Instance is disabled
     *
     * Generated from protobuf enum <code>DISABLED = 10;</code>
     */
    const DISABLED = 10;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::ACTIVE => 'ACTIVE',
        self::FAILED => 'FAILED',
        self::DELETING => 'DELETING',
        self::UPGRADING => 'UPGRADING',
        self::RESTARTING => 'RESTARTING',
        self::UPDATING => 'UPDATING',
        self::AUTO_UPDATING => 'AUTO_UPDATING',
        self::AUTO_UPGRADING => 'AUTO_UPGRADING',
        self::DISABLED => 'DISABLED',
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


