<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/application.proto

namespace Google\Cloud\AppEngine\V1\Application;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.appengine.v1.Application.ServingStatus</code>
 */
class ServingStatus
{
    /**
     * Serving status is unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Application is serving.
     *
     * Generated from protobuf enum <code>SERVING = 1;</code>
     */
    const SERVING = 1;
    /**
     * Application has been disabled by the user.
     *
     * Generated from protobuf enum <code>USER_DISABLED = 2;</code>
     */
    const USER_DISABLED = 2;
    /**
     * Application has been disabled by the system.
     *
     * Generated from protobuf enum <code>SYSTEM_DISABLED = 3;</code>
     */
    const SYSTEM_DISABLED = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::SERVING => 'SERVING',
        self::USER_DISABLED => 'USER_DISABLED',
        self::SYSTEM_DISABLED => 'SYSTEM_DISABLED',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServingStatus::class, \Google\Cloud\AppEngine\V1\Application_ServingStatus::class);

