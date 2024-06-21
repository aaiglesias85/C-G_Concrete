<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for calculating conversation statistics.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.CalculateStatsResponse</code>
 */
class CalculateStatsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The average duration of all conversations. The average is calculated using
     * only conversations that have a time duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration average_duration = 1;</code>
     */
    private $average_duration = null;
    /**
     * The average number of turns per conversation.
     *
     * Generated from protobuf field <code>int32 average_turn_count = 2;</code>
     */
    private $average_turn_count = 0;
    /**
     * The total number of conversations.
     *
     * Generated from protobuf field <code>int32 conversation_count = 3;</code>
     */
    private $conversation_count = 0;
    /**
     * A map associating each smart highlighter display name with its respective
     * number of matches in the set of conversations.
     *
     * Generated from protobuf field <code>map<string, int32> smart_highlighter_matches = 4;</code>
     */
    private $smart_highlighter_matches;
    /**
     * A map associating each custom highlighter resource name with its respective
     * number of matches in the set of conversations.
     *
     * Generated from protobuf field <code>map<string, int32> custom_highlighter_matches = 5;</code>
     */
    private $custom_highlighter_matches;
    /**
     * A map associating each issue resource name with its respective number of
     * matches in the set of conversations. Key has the format:
     * `projects/<Project-ID>/locations/<Location-ID>/issueModels/<Issue-Model-ID>/issues/<Issue-ID>`
     * Deprecated, use `issue_matches_stats` field instead.
     *
     * Generated from protobuf field <code>map<string, int32> issue_matches = 6 [deprecated = true];</code>
     * @deprecated
     */
    private $issue_matches;
    /**
     * A map associating each issue resource name with its respective number of
     * matches in the set of conversations. Key has the format:
     * `projects/<Project-ID>/locations/<Location-ID>/issueModels/<Issue-Model-ID>/issues/<Issue-ID>`
     *
     * Generated from protobuf field <code>map<string, .google.cloud.contactcenterinsights.v1.IssueModelLabelStats.IssueStats> issue_matches_stats = 8;</code>
     */
    private $issue_matches_stats;
    /**
     * A time series representing the count of conversations created over time
     * that match that requested filter criteria.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.CalculateStatsResponse.TimeSeries conversation_count_time_series = 7;</code>
     */
    private $conversation_count_time_series = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $average_duration
     *           The average duration of all conversations. The average is calculated using
     *           only conversations that have a time duration.
     *     @type int $average_turn_count
     *           The average number of turns per conversation.
     *     @type int $conversation_count
     *           The total number of conversations.
     *     @type array|\Google\Protobuf\Internal\MapField $smart_highlighter_matches
     *           A map associating each smart highlighter display name with its respective
     *           number of matches in the set of conversations.
     *     @type array|\Google\Protobuf\Internal\MapField $custom_highlighter_matches
     *           A map associating each custom highlighter resource name with its respective
     *           number of matches in the set of conversations.
     *     @type array|\Google\Protobuf\Internal\MapField $issue_matches
     *           A map associating each issue resource name with its respective number of
     *           matches in the set of conversations. Key has the format:
     *           `projects/<Project-ID>/locations/<Location-ID>/issueModels/<Issue-Model-ID>/issues/<Issue-ID>`
     *           Deprecated, use `issue_matches_stats` field instead.
     *     @type array|\Google\Protobuf\Internal\MapField $issue_matches_stats
     *           A map associating each issue resource name with its respective number of
     *           matches in the set of conversations. Key has the format:
     *           `projects/<Project-ID>/locations/<Location-ID>/issueModels/<Issue-Model-ID>/issues/<Issue-ID>`
     *     @type \Google\Cloud\ContactCenterInsights\V1\CalculateStatsResponse\TimeSeries $conversation_count_time_series
     *           A time series representing the count of conversations created over time
     *           that match that requested filter criteria.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * The average duration of all conversations. The average is calculated using
     * only conversations that have a time duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration average_duration = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getAverageDuration()
    {
        return $this->average_duration;
    }

    public function hasAverageDuration()
    {
        return isset($this->average_duration);
    }

    public function clearAverageDuration()
    {
        unset($this->average_duration);
    }

    /**
     * The average duration of all conversations. The average is calculated using
     * only conversations that have a time duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration average_duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setAverageDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->average_duration = $var;

        return $this;
    }

    /**
     * The average number of turns per conversation.
     *
     * Generated from protobuf field <code>int32 average_turn_count = 2;</code>
     * @return int
     */
    public function getAverageTurnCount()
    {
        return $this->average_turn_count;
    }

    /**
     * The average number of turns per conversation.
     *
     * Generated from protobuf field <code>int32 average_turn_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAverageTurnCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->average_turn_count = $var;

        return $this;
    }

    /**
     * The total number of conversations.
     *
     * Generated from protobuf field <code>int32 conversation_count = 3;</code>
     * @return int
     */
    public function getConversationCount()
    {
        return $this->conversation_count;
    }

    /**
     * The total number of conversations.
     *
     * Generated from protobuf field <code>int32 conversation_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setConversationCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->conversation_count = $var;

        return $this;
    }

    /**
     * A map associating each smart highlighter display name with its respective
     * number of matches in the set of conversations.
     *
     * Generated from protobuf field <code>map<string, int32> smart_highlighter_matches = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSmartHighlighterMatches()
    {
        return $this->smart_highlighter_matches;
    }

    /**
     * A map associating each smart highlighter display name with its respective
     * number of matches in the set of conversations.
     *
     * Generated from protobuf field <code>map<string, int32> smart_highlighter_matches = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSmartHighlighterMatches($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT32);
        $this->smart_highlighter_matches = $arr;

        return $this;
    }

    /**
     * A map associating each custom highlighter resource name with its respective
     * number of matches in the set of conversations.
     *
     * Generated from protobuf field <code>map<string, int32> custom_highlighter_matches = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getCustomHighlighterMatches()
    {
        return $this->custom_highlighter_matches;
    }

    /**
     * A map associating each custom highlighter resource name with its respective
     * number of matches in the set of conversations.
     *
     * Generated from protobuf field <code>map<string, int32> custom_highlighter_matches = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setCustomHighlighterMatches($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT32);
        $this->custom_highlighter_matches = $arr;

        return $this;
    }

    /**
     * A map associating each issue resource name with its respective number of
     * matches in the set of conversations. Key has the format:
     * `projects/<Project-ID>/locations/<Location-ID>/issueModels/<Issue-Model-ID>/issues/<Issue-ID>`
     * Deprecated, use `issue_matches_stats` field instead.
     *
     * Generated from protobuf field <code>map<string, int32> issue_matches = 6 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\MapField
     * @deprecated
     */
    public function getIssueMatches()
    {
        @trigger_error('issue_matches is deprecated.', E_USER_DEPRECATED);
        return $this->issue_matches;
    }

    /**
     * A map associating each issue resource name with its respective number of
     * matches in the set of conversations. Key has the format:
     * `projects/<Project-ID>/locations/<Location-ID>/issueModels/<Issue-Model-ID>/issues/<Issue-ID>`
     * Deprecated, use `issue_matches_stats` field instead.
     *
     * Generated from protobuf field <code>map<string, int32> issue_matches = 6 [deprecated = true];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     * @deprecated
     */
    public function setIssueMatches($var)
    {
        @trigger_error('issue_matches is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT32);
        $this->issue_matches = $arr;

        return $this;
    }

    /**
     * A map associating each issue resource name with its respective number of
     * matches in the set of conversations. Key has the format:
     * `projects/<Project-ID>/locations/<Location-ID>/issueModels/<Issue-Model-ID>/issues/<Issue-ID>`
     *
     * Generated from protobuf field <code>map<string, .google.cloud.contactcenterinsights.v1.IssueModelLabelStats.IssueStats> issue_matches_stats = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getIssueMatchesStats()
    {
        return $this->issue_matches_stats;
    }

    /**
     * A map associating each issue resource name with its respective number of
     * matches in the set of conversations. Key has the format:
     * `projects/<Project-ID>/locations/<Location-ID>/issueModels/<Issue-Model-ID>/issues/<Issue-ID>`
     *
     * Generated from protobuf field <code>map<string, .google.cloud.contactcenterinsights.v1.IssueModelLabelStats.IssueStats> issue_matches_stats = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setIssueMatchesStats($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ContactCenterInsights\V1\IssueModelLabelStats\IssueStats::class);
        $this->issue_matches_stats = $arr;

        return $this;
    }

    /**
     * A time series representing the count of conversations created over time
     * that match that requested filter criteria.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.CalculateStatsResponse.TimeSeries conversation_count_time_series = 7;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\CalculateStatsResponse\TimeSeries|null
     */
    public function getConversationCountTimeSeries()
    {
        return $this->conversation_count_time_series;
    }

    public function hasConversationCountTimeSeries()
    {
        return isset($this->conversation_count_time_series);
    }

    public function clearConversationCountTimeSeries()
    {
        unset($this->conversation_count_time_series);
    }

    /**
     * A time series representing the count of conversations created over time
     * that match that requested filter criteria.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.CalculateStatsResponse.TimeSeries conversation_count_time_series = 7;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\CalculateStatsResponse\TimeSeries $var
     * @return $this
     */
    public function setConversationCountTimeSeries($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\CalculateStatsResponse\TimeSeries::class);
        $this->conversation_count_time_series = $var;

        return $this;
    }

}

