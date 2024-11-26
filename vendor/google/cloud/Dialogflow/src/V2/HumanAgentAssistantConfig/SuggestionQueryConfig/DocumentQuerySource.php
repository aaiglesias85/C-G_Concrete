<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionQueryConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Document source settings.
 * Supported features: SMART_REPLY, SMART_COMPOSE.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.DocumentQuerySource</code>
 */
class DocumentQuerySource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Knowledge documents to query from. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<KnowledgeBase ID>/documents/<Document ID>`.
     * Currently, at most 5 documents are supported.
     *
     * Generated from protobuf field <code>repeated string documents = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $documents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $documents
     *           Required. Knowledge documents to query from. Format:
     *           `projects/<Project ID>/locations/<Location
     *           ID>/knowledgeBases/<KnowledgeBase ID>/documents/<Document ID>`.
     *           Currently, at most 5 documents are supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Knowledge documents to query from. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<KnowledgeBase ID>/documents/<Document ID>`.
     * Currently, at most 5 documents are supported.
     *
     * Generated from protobuf field <code>repeated string documents = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Required. Knowledge documents to query from. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<KnowledgeBase ID>/documents/<Document ID>`.
     * Currently, at most 5 documents are supported.
     *
     * Generated from protobuf field <code>repeated string documents = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->documents = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DocumentQuerySource::class, \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig_SuggestionQueryConfig_DocumentQuerySource::class);

