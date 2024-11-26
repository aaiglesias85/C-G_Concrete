<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

use UnexpectedValueException;

/**
 * **Beta Feature**
 * The logging verbosity for device activity. Specifies which events should be
 * written to logs. For example, if the LogLevel is ERROR, only events that
 * terminate in errors will be logged. LogLevel is inclusive; enabling INFO
 * logging will also enable ERROR logging.
 *
 * Protobuf type <code>google.cloud.iot.v1.LogLevel</code>
 */
class LogLevel
{
    /**
     * No logging specified. If not specified, logging will be disabled.
     *
     * Generated from protobuf enum <code>LOG_LEVEL_UNSPECIFIED = 0;</code>
     */
    const LOG_LEVEL_UNSPECIFIED = 0;
    /**
     * Disables logging.
     *
     * Generated from protobuf enum <code>NONE = 10;</code>
     */
    const NONE = 10;
    /**
     * Error events will be logged.
     *
     * Generated from protobuf enum <code>ERROR = 20;</code>
     */
    const ERROR = 20;
    /**
     * Informational events will be logged, such as connections and
     * disconnections.
     *
     * Generated from protobuf enum <code>INFO = 30;</code>
     */
    const INFO = 30;
    /**
     * All events will be logged.
     *
     * Generated from protobuf enum <code>DEBUG = 40;</code>
     */
    const DEBUG = 40;

    private static $valueToName = [
        self::LOG_LEVEL_UNSPECIFIED => 'LOG_LEVEL_UNSPECIFIED',
        self::NONE => 'NONE',
        self::ERROR => 'ERROR',
        self::INFO => 'INFO',
        self::DEBUG => 'DEBUG',
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

