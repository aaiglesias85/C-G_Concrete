<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/answer_record.proto

namespace Google\Cloud\Dialogflow\V2\AgentAssistantFeedback;

use UnexpectedValueException;

/**
 * Efficiency of document.
 *
 * Protobuf type <code>google.cloud.dialogflow.v2.AgentAssistantFeedback.DocumentEfficiency</code>
 */
class DocumentEfficiency
{
    /**
     * Document efficiency unspecified.
     *
     * Generated from protobuf enum <code>DOCUMENT_EFFICIENCY_UNSPECIFIED = 0;</code>
     */
    const DOCUMENT_EFFICIENCY_UNSPECIFIED = 0;
    /**
     * Document is inefficient.
     *
     * Generated from protobuf enum <code>INEFFICIENT = 1;</code>
     */
    const INEFFICIENT = 1;
    /**
     * Document is efficient.
     *
     * Generated from protobuf enum <code>EFFICIENT = 2;</code>
     */
    const EFFICIENT = 2;

    private static $valueToName = [
        self::DOCUMENT_EFFICIENCY_UNSPECIFIED => 'DOCUMENT_EFFICIENCY_UNSPECIFIED',
        self::INEFFICIENT => 'INEFFICIENT',
        self::EFFICIENT => 'EFFICIENT',
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
class_alias(DocumentEfficiency::class, \Google\Cloud\Dialogflow\V2\AgentAssistantFeedback_DocumentEfficiency::class);

