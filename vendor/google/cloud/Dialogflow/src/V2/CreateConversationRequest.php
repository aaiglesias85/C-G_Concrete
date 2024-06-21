<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Conversations.CreateConversation][google.cloud.dialogflow.v2.Conversations.CreateConversation].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.CreateConversationRequest</code>
 */
class CreateConversationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource identifier of the project creating the conversation.
     * Format: `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The conversation to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Conversation conversation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $conversation = null;
    /**
     * Optional. Identifier of the conversation. Generally it's auto generated by Google.
     * Only set it if you cannot wait for the response to return a
     * auto-generated one to you.
     * The conversation ID must be compliant with the regression fomula
     * "[a-zA-Z][a-zA-Z0-9_-]*" with the characters length in range of [3,64].
     * If the field is provided, the caller is resposible for
     * 1. the uniqueness of the ID, otherwise the request will be rejected.
     * 2. the consistency for whether to use custom ID or not under a project to
     * better ensure uniqueness.
     *
     * Generated from protobuf field <code>string conversation_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $conversation_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource identifier of the project creating the conversation.
     *           Format: `projects/<Project ID>/locations/<Location ID>`.
     *     @type \Google\Cloud\Dialogflow\V2\Conversation $conversation
     *           Required. The conversation to create.
     *     @type string $conversation_id
     *           Optional. Identifier of the conversation. Generally it's auto generated by Google.
     *           Only set it if you cannot wait for the response to return a
     *           auto-generated one to you.
     *           The conversation ID must be compliant with the regression fomula
     *           "[a-zA-Z][a-zA-Z0-9_-]*" with the characters length in range of [3,64].
     *           If the field is provided, the caller is resposible for
     *           1. the uniqueness of the ID, otherwise the request will be rejected.
     *           2. the consistency for whether to use custom ID or not under a project to
     *           better ensure uniqueness.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource identifier of the project creating the conversation.
     * Format: `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource identifier of the project creating the conversation.
     * Format: `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The conversation to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Conversation conversation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\Conversation|null
     */
    public function getConversation()
    {
        return $this->conversation;
    }

    public function hasConversation()
    {
        return isset($this->conversation);
    }

    public function clearConversation()
    {
        unset($this->conversation);
    }

    /**
     * Required. The conversation to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Conversation conversation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Conversation $var
     * @return $this
     */
    public function setConversation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Conversation::class);
        $this->conversation = $var;

        return $this;
    }

    /**
     * Optional. Identifier of the conversation. Generally it's auto generated by Google.
     * Only set it if you cannot wait for the response to return a
     * auto-generated one to you.
     * The conversation ID must be compliant with the regression fomula
     * "[a-zA-Z][a-zA-Z0-9_-]*" with the characters length in range of [3,64].
     * If the field is provided, the caller is resposible for
     * 1. the uniqueness of the ID, otherwise the request will be rejected.
     * 2. the consistency for whether to use custom ID or not under a project to
     * better ensure uniqueness.
     *
     * Generated from protobuf field <code>string conversation_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getConversationId()
    {
        return $this->conversation_id;
    }

    /**
     * Optional. Identifier of the conversation. Generally it's auto generated by Google.
     * Only set it if you cannot wait for the response to return a
     * auto-generated one to you.
     * The conversation ID must be compliant with the regression fomula
     * "[a-zA-Z][a-zA-Z0-9_-]*" with the characters length in range of [3,64].
     * If the field is provided, the caller is resposible for
     * 1. the uniqueness of the ID, otherwise the request will be rejected.
     * 2. the consistency for whether to use custom ID or not under a project to
     * better ensure uniqueness.
     *
     * Generated from protobuf field <code>string conversation_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setConversationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversation_id = $var;

        return $this;
    }

}

