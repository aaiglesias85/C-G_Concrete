<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/document.proto

namespace Google\Cloud\Dialogflow\V2\Document;

use UnexpectedValueException;

/**
 * The knowledge type of document content.
 *
 * Protobuf type <code>google.cloud.dialogflow.v2.Document.KnowledgeType</code>
 */
class KnowledgeType
{
    /**
     * The type is unspecified or arbitrary.
     *
     * Generated from protobuf enum <code>KNOWLEDGE_TYPE_UNSPECIFIED = 0;</code>
     */
    const KNOWLEDGE_TYPE_UNSPECIFIED = 0;
    /**
     * The document content contains question and answer pairs as either HTML or
     * CSV. Typical FAQ HTML formats are parsed accurately, but unusual formats
     * may fail to be parsed.
     * CSV must have questions in the first column and answers in the second,
     * with no header. Because of this explicit format, they are always parsed
     * accurately.
     *
     * Generated from protobuf enum <code>FAQ = 1;</code>
     */
    const FAQ = 1;
    /**
     * Documents for which unstructured text is extracted and used for
     * question answering.
     *
     * Generated from protobuf enum <code>EXTRACTIVE_QA = 2;</code>
     */
    const EXTRACTIVE_QA = 2;
    /**
     * The entire document content as a whole can be used for query results.
     * Only for Contact Center Solutions on Dialogflow.
     *
     * Generated from protobuf enum <code>ARTICLE_SUGGESTION = 3;</code>
     */
    const ARTICLE_SUGGESTION = 3;
    /**
     * The document contains agent-facing Smart Reply entries.
     *
     * Generated from protobuf enum <code>AGENT_FACING_SMART_REPLY = 4;</code>
     */
    const AGENT_FACING_SMART_REPLY = 4;

    private static $valueToName = [
        self::KNOWLEDGE_TYPE_UNSPECIFIED => 'KNOWLEDGE_TYPE_UNSPECIFIED',
        self::FAQ => 'FAQ',
        self::EXTRACTIVE_QA => 'EXTRACTIVE_QA',
        self::ARTICLE_SUGGESTION => 'ARTICLE_SUGGESTION',
        self::AGENT_FACING_SMART_REPLY => 'AGENT_FACING_SMART_REPLY',
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
class_alias(KnowledgeType::class, \Google\Cloud\Dialogflow\V2\Document_KnowledgeType::class);

