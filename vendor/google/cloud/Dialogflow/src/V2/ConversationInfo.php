<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_dataset.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents metadata of a conversation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ConversationInfo</code>
 */
class ConversationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The language code of the conversation data within this dataset. See
     * https://cloud.google.com/apis/design/standard_fields for more information.
     * Supports all UTF-8 languages.
     *
     * Generated from protobuf field <code>string language_code = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $language_code
     *           Optional. The language code of the conversation data within this dataset. See
     *           https://cloud.google.com/apis/design/standard_fields for more information.
     *           Supports all UTF-8 languages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationDataset::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The language code of the conversation data within this dataset. See
     * https://cloud.google.com/apis/design/standard_fields for more information.
     * Supports all UTF-8 languages.
     *
     * Generated from protobuf field <code>string language_code = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The language code of the conversation data within this dataset. See
     * https://cloud.google.com/apis/design/standard_fields for more information.
     * Supports all UTF-8 languages.
     *
     * Generated from protobuf field <code>string language_code = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

