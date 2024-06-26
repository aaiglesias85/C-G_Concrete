<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines the Human Agent Assist to connect to a conversation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.HumanAgentAssistantConfig</code>
 */
class HumanAgentAssistantConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Pub/Sub topic on which to publish new agent assistant events.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig notification_config = 2;</code>
     */
    private $notification_config = null;
    /**
     * Configuration for agent assistance of human agent participant.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig human_agent_suggestion_config = 3;</code>
     */
    private $human_agent_suggestion_config = null;
    /**
     * Configuration for agent assistance of end user participant.
     * Currently, this feature is not general available, please contact Google
     * to get access.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig end_user_suggestion_config = 4;</code>
     */
    private $end_user_suggestion_config = null;
    /**
     * Configuration for message analysis.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.MessageAnalysisConfig message_analysis_config = 5;</code>
     */
    private $message_analysis_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\NotificationConfig $notification_config
     *           Pub/Sub topic on which to publish new agent assistant events.
     *     @type \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionConfig $human_agent_suggestion_config
     *           Configuration for agent assistance of human agent participant.
     *     @type \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionConfig $end_user_suggestion_config
     *           Configuration for agent assistance of end user participant.
     *           Currently, this feature is not general available, please contact Google
     *           to get access.
     *     @type \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\MessageAnalysisConfig $message_analysis_config
     *           Configuration for message analysis.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Pub/Sub topic on which to publish new agent assistant events.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig notification_config = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2\NotificationConfig|null
     */
    public function getNotificationConfig()
    {
        return $this->notification_config;
    }

    public function hasNotificationConfig()
    {
        return isset($this->notification_config);
    }

    public function clearNotificationConfig()
    {
        unset($this->notification_config);
    }

    /**
     * Pub/Sub topic on which to publish new agent assistant events.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig notification_config = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\NotificationConfig $var
     * @return $this
     */
    public function setNotificationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\NotificationConfig::class);
        $this->notification_config = $var;

        return $this;
    }

    /**
     * Configuration for agent assistance of human agent participant.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig human_agent_suggestion_config = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionConfig|null
     */
    public function getHumanAgentSuggestionConfig()
    {
        return $this->human_agent_suggestion_config;
    }

    public function hasHumanAgentSuggestionConfig()
    {
        return isset($this->human_agent_suggestion_config);
    }

    public function clearHumanAgentSuggestionConfig()
    {
        unset($this->human_agent_suggestion_config);
    }

    /**
     * Configuration for agent assistance of human agent participant.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig human_agent_suggestion_config = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionConfig $var
     * @return $this
     */
    public function setHumanAgentSuggestionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionConfig::class);
        $this->human_agent_suggestion_config = $var;

        return $this;
    }

    /**
     * Configuration for agent assistance of end user participant.
     * Currently, this feature is not general available, please contact Google
     * to get access.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig end_user_suggestion_config = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionConfig|null
     */
    public function getEndUserSuggestionConfig()
    {
        return $this->end_user_suggestion_config;
    }

    public function hasEndUserSuggestionConfig()
    {
        return isset($this->end_user_suggestion_config);
    }

    public function clearEndUserSuggestionConfig()
    {
        unset($this->end_user_suggestion_config);
    }

    /**
     * Configuration for agent assistance of end user participant.
     * Currently, this feature is not general available, please contact Google
     * to get access.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig end_user_suggestion_config = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionConfig $var
     * @return $this
     */
    public function setEndUserSuggestionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionConfig::class);
        $this->end_user_suggestion_config = $var;

        return $this;
    }

    /**
     * Configuration for message analysis.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.MessageAnalysisConfig message_analysis_config = 5;</code>
     * @return \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\MessageAnalysisConfig|null
     */
    public function getMessageAnalysisConfig()
    {
        return $this->message_analysis_config;
    }

    public function hasMessageAnalysisConfig()
    {
        return isset($this->message_analysis_config);
    }

    public function clearMessageAnalysisConfig()
    {
        unset($this->message_analysis_config);
    }

    /**
     * Configuration for message analysis.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.MessageAnalysisConfig message_analysis_config = 5;</code>
     * @param \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\MessageAnalysisConfig $var
     * @return $this
     */
    public function setMessageAnalysisConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\MessageAnalysisConfig::class);
        $this->message_analysis_config = $var;

        return $this;
    }

}

