<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1\ReviewDocumentRequest;

use UnexpectedValueException;

/**
 * The priority level of the human review task.
 *
 * Protobuf type <code>google.cloud.documentai.v1.ReviewDocumentRequest.Priority</code>
 */
class Priority
{
    /**
     * The default priority level.
     *
     * Generated from protobuf enum <code>DEFAULT = 0;</code>
     */
    const PBDEFAULT = 0;
    /**
     * The urgent priority level. The labeling manager should allocate labeler
     * resource to the urgent task queue to respect this priority level.
     *
     * Generated from protobuf enum <code>URGENT = 1;</code>
     */
    const URGENT = 1;

    private static $valueToName = [
        self::PBDEFAULT => 'PBDEFAULT',
        self::URGENT => 'URGENT',
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


