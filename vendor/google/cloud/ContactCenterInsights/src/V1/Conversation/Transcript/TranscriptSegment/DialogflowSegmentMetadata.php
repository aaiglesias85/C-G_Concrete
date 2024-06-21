<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript\TranscriptSegment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata from Dialogflow relating to the current transcript segment.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment.DialogflowSegmentMetadata</code>
 */
class DialogflowSegmentMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the transcript segment was covered under the configured smart
     * reply allowlist in Agent Assist.
     *
     * Generated from protobuf field <code>bool smart_reply_allowlist_covered = 1;</code>
     */
    private $smart_reply_allowlist_covered = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $smart_reply_allowlist_covered
     *           Whether the transcript segment was covered under the configured smart
     *           reply allowlist in Agent Assist.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the transcript segment was covered under the configured smart
     * reply allowlist in Agent Assist.
     *
     * Generated from protobuf field <code>bool smart_reply_allowlist_covered = 1;</code>
     * @return bool
     */
    public function getSmartReplyAllowlistCovered()
    {
        return $this->smart_reply_allowlist_covered;
    }

    /**
     * Whether the transcript segment was covered under the configured smart
     * reply allowlist in Agent Assist.
     *
     * Generated from protobuf field <code>bool smart_reply_allowlist_covered = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSmartReplyAllowlistCovered($var)
    {
        GPBUtil::checkBool($var);
        $this->smart_reply_allowlist_covered = $var;

        return $this;
    }

}


