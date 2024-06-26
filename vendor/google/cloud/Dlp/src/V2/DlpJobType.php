<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use UnexpectedValueException;

/**
 * An enum to represent the various types of DLP jobs.
 *
 * Protobuf type <code>google.privacy.dlp.v2.DlpJobType</code>
 */
class DlpJobType
{
    /**
     * Defaults to INSPECT_JOB.
     *
     * Generated from protobuf enum <code>DLP_JOB_TYPE_UNSPECIFIED = 0;</code>
     */
    const DLP_JOB_TYPE_UNSPECIFIED = 0;
    /**
     * The job inspected Google Cloud for sensitive data.
     *
     * Generated from protobuf enum <code>INSPECT_JOB = 1;</code>
     */
    const INSPECT_JOB = 1;
    /**
     * The job executed a Risk Analysis computation.
     *
     * Generated from protobuf enum <code>RISK_ANALYSIS_JOB = 2;</code>
     */
    const RISK_ANALYSIS_JOB = 2;

    private static $valueToName = [
        self::DLP_JOB_TYPE_UNSPECIFIED => 'DLP_JOB_TYPE_UNSPECIFIED',
        self::INSPECT_JOB => 'INSPECT_JOB',
        self::RISK_ANALYSIS_JOB => 'RISK_ANALYSIS_JOB',
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

