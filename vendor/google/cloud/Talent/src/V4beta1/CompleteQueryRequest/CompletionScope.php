<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/completion_service.proto

namespace Google\Cloud\Talent\V4beta1\CompleteQueryRequest;

use UnexpectedValueException;

/**
 * Enum to specify the scope of completion.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.CompleteQueryRequest.CompletionScope</code>
 */
class CompletionScope
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>COMPLETION_SCOPE_UNSPECIFIED = 0;</code>
     */
    const COMPLETION_SCOPE_UNSPECIFIED = 0;
    /**
     * Suggestions are based only on the data provided by the client.
     *
     * Generated from protobuf enum <code>TENANT = 1;</code>
     */
    const TENANT = 1;
    /**
     * Suggestions are based on all jobs data in the system that's visible to
     * the client
     *
     * Generated from protobuf enum <code>PUBLIC = 2;</code>
     */
    const PBPUBLIC = 2;

    private static $valueToName = [
        self::COMPLETION_SCOPE_UNSPECIFIED => 'COMPLETION_SCOPE_UNSPECIFIED',
        self::TENANT => 'TENANT',
        self::PBPUBLIC => 'PBPUBLIC',
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


