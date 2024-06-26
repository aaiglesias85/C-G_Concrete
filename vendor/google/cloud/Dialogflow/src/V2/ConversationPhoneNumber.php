<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a phone number for telephony integration. It allows for connecting
 * a particular conversation over telephony.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ConversationPhoneNumber</code>
 */
class ConversationPhoneNumber extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The phone number to connect to this conversation.
     *
     * Generated from protobuf field <code>string phone_number = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $phone_number = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phone_number
     *           Output only. The phone number to connect to this conversation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The phone number to connect to this conversation.
     *
     * Generated from protobuf field <code>string phone_number = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Output only. The phone number to connect to this conversation.
     *
     * Generated from protobuf field <code>string phone_number = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

}

