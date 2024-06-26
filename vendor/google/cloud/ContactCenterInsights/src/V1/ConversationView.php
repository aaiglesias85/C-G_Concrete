<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use UnexpectedValueException;

/**
 * Represents the options for viewing a conversation.
 *
 * Protobuf type <code>google.cloud.contactcenterinsights.v1.ConversationView</code>
 */
class ConversationView
{
    /**
     * The conversation view is not specified.
     * * Defaults to `FULL` in `GetConversationRequest`.
     * * Defaults to `BASIC` in `ListConversationsRequest`.
     *
     * Generated from protobuf enum <code>CONVERSATION_VIEW_UNSPECIFIED = 0;</code>
     */
    const CONVERSATION_VIEW_UNSPECIFIED = 0;
    /**
     * Populates all fields in the conversation.
     *
     * Generated from protobuf enum <code>FULL = 2;</code>
     */
    const FULL = 2;
    /**
     * Populates all fields in the conversation except the transcript.
     *
     * Generated from protobuf enum <code>BASIC = 1;</code>
     */
    const BASIC = 1;

    private static $valueToName = [
        self::CONVERSATION_VIEW_UNSPECIFIED => 'CONVERSATION_VIEW_UNSPECIFIED',
        self::FULL => 'FULL',
        self::BASIC => 'BASIC',
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

