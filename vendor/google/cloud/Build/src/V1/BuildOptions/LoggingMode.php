<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1\BuildOptions;

use UnexpectedValueException;

/**
 * Specifies the logging mode.
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.BuildOptions.LoggingMode</code>
 */
class LoggingMode
{
    /**
     * The service determines the logging mode. The default is `LEGACY`. Do not
     * rely on the default logging behavior as it may change in the future.
     *
     * Generated from protobuf enum <code>LOGGING_UNSPECIFIED = 0;</code>
     */
    const LOGGING_UNSPECIFIED = 0;
    /**
     * Cloud Logging and Cloud Storage logging are enabled.
     *
     * Generated from protobuf enum <code>LEGACY = 1;</code>
     */
    const LEGACY = 1;
    /**
     * Only Cloud Storage logging is enabled.
     *
     * Generated from protobuf enum <code>GCS_ONLY = 2;</code>
     */
    const GCS_ONLY = 2;
    /**
     * This option is the same as CLOUD_LOGGING_ONLY.
     *
     * Generated from protobuf enum <code>STACKDRIVER_ONLY = 3 [deprecated = true];</code>
     */
    const STACKDRIVER_ONLY = 3;
    /**
     * Only Cloud Logging is enabled. Note that logs for both the Cloud Console
     * UI and Cloud SDK are based on Cloud Storage logs, so neither will provide
     * logs if this option is chosen.
     *
     * Generated from protobuf enum <code>CLOUD_LOGGING_ONLY = 5;</code>
     */
    const CLOUD_LOGGING_ONLY = 5;
    /**
     * Turn off all logging. No build logs will be captured.
     *
     * Generated from protobuf enum <code>NONE = 4;</code>
     */
    const NONE = 4;

    private static $valueToName = [
        self::LOGGING_UNSPECIFIED => 'LOGGING_UNSPECIFIED',
        self::LEGACY => 'LEGACY',
        self::GCS_ONLY => 'GCS_ONLY',
        self::STACKDRIVER_ONLY => 'STACKDRIVER_ONLY',
        self::CLOUD_LOGGING_ONLY => 'CLOUD_LOGGING_ONLY',
        self::NONE => 'NONE',
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
class_alias(LoggingMode::class, \Google\Cloud\Build\V1\BuildOptions_LoggingMode::class);

