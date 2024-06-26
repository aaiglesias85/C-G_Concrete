<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/serviceusage/v1/resources.proto

namespace Google\Cloud\ServiceUsage\V1;

use UnexpectedValueException;

/**
 * Whether or not a service has been enabled for use by a consumer.
 *
 * Protobuf type <code>google.api.serviceusage.v1.State</code>
 */
class State
{
    /**
     * The default value, which indicates that the enabled state of the service
     * is unspecified or not meaningful. Currently, all consumers other than
     * projects (such as folders and organizations) are always in this state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The service cannot be used by this consumer. It has either been explicitly
     * disabled, or has never been enabled.
     *
     * Generated from protobuf enum <code>DISABLED = 1;</code>
     */
    const DISABLED = 1;
    /**
     * The service has been explicitly enabled for use by this consumer.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::DISABLED => 'DISABLED',
        self::ENABLED => 'ENABLED',
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

