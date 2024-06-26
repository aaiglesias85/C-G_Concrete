<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/completion_service.proto

namespace Google\Cloud\Talent\V4\CompleteQueryRequest;

use UnexpectedValueException;

/**
 * Enum to specify auto-completion topics.
 *
 * Protobuf type <code>google.cloud.talent.v4.CompleteQueryRequest.CompletionType</code>
 */
class CompletionType
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>COMPLETION_TYPE_UNSPECIFIED = 0;</code>
     */
    const COMPLETION_TYPE_UNSPECIFIED = 0;
    /**
     * Suggest job titles for jobs autocomplete.
     * For [CompletionType.JOB_TITLE][google.cloud.talent.v4.CompleteQueryRequest.CompletionType.JOB_TITLE] type, only open jobs with the same
     * [language_codes][google.cloud.talent.v4.CompleteQueryRequest.language_codes] are returned.
     *
     * Generated from protobuf enum <code>JOB_TITLE = 1;</code>
     */
    const JOB_TITLE = 1;
    /**
     * Suggest company names for jobs autocomplete.
     * For [CompletionType.COMPANY_NAME][google.cloud.talent.v4.CompleteQueryRequest.CompletionType.COMPANY_NAME] type,
     * only companies having open jobs with the same [language_codes][google.cloud.talent.v4.CompleteQueryRequest.language_codes] are
     * returned.
     *
     * Generated from protobuf enum <code>COMPANY_NAME = 2;</code>
     */
    const COMPANY_NAME = 2;
    /**
     * Suggest both job titles and company names for jobs autocomplete.
     * For [CompletionType.COMBINED][google.cloud.talent.v4.CompleteQueryRequest.CompletionType.COMBINED] type, only open jobs with the same
     * [language_codes][google.cloud.talent.v4.CompleteQueryRequest.language_codes] or companies having open jobs with the same
     * [language_codes][google.cloud.talent.v4.CompleteQueryRequest.language_codes] are returned.
     *
     * Generated from protobuf enum <code>COMBINED = 3;</code>
     */
    const COMBINED = 3;

    private static $valueToName = [
        self::COMPLETION_TYPE_UNSPECIFIED => 'COMPLETION_TYPE_UNSPECIFIED',
        self::JOB_TITLE => 'JOB_TITLE',
        self::COMPANY_NAME => 'COMPANY_NAME',
        self::COMBINED => 'COMBINED',
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


