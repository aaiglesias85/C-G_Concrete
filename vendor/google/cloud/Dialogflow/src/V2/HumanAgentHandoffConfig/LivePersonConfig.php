<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2\HumanAgentHandoffConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration specific to LivePerson (https://www.liveperson.com).
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.HumanAgentHandoffConfig.LivePersonConfig</code>
 */
class LivePersonConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Account number of the LivePerson account to connect. This is
     * the account number you input at the login page.
     *
     * Generated from protobuf field <code>string account_number = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $account_number = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_number
     *           Required. Account number of the LivePerson account to connect. This is
     *           the account number you input at the login page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Account number of the LivePerson account to connect. This is
     * the account number you input at the login page.
     *
     * Generated from protobuf field <code>string account_number = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->account_number;
    }

    /**
     * Required. Account number of the LivePerson account to connect. This is
     * the account number you input at the login page.
     *
     * Generated from protobuf field <code>string account_number = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAccountNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_number = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LivePersonConfig::class, \Google\Cloud\Dialogflow\V2\HumanAgentHandoffConfig_LivePersonConfig::class);

