<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A task to execute on the completion of a job.
 * See https://cloud.google.com/dlp/docs/concepts-actions to learn more.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Action</code>
 */
class Action extends \Google\Protobuf\Internal\Message
{
    protected $action;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\Action\SaveFindings $save_findings
     *           Save resulting findings in a provided location.
     *     @type \Google\Cloud\Dlp\V2\Action\PublishToPubSub $pub_sub
     *           Publish a notification to a pubsub topic.
     *     @type \Google\Cloud\Dlp\V2\Action\PublishSummaryToCscc $publish_summary_to_cscc
     *           Publish summary to Cloud Security Command Center (Alpha).
     *     @type \Google\Cloud\Dlp\V2\Action\PublishFindingsToCloudDataCatalog $publish_findings_to_cloud_data_catalog
     *           Publish findings to Cloud Datahub.
     *     @type \Google\Cloud\Dlp\V2\Action\JobNotificationEmails $job_notification_emails
     *           Enable email notification for project owners and editors on job's
     *           completion/failure.
     *     @type \Google\Cloud\Dlp\V2\Action\PublishToStackdriver $publish_to_stackdriver
     *           Enable Stackdriver metric dlp.googleapis.com/finding_count.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Save resulting findings in a provided location.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.SaveFindings save_findings = 1;</code>
     * @return \Google\Cloud\Dlp\V2\Action\SaveFindings|null
     */
    public function getSaveFindings()
    {
        return $this->readOneof(1);
    }

    public function hasSaveFindings()
    {
        return $this->hasOneof(1);
    }

    /**
     * Save resulting findings in a provided location.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.SaveFindings save_findings = 1;</code>
     * @param \Google\Cloud\Dlp\V2\Action\SaveFindings $var
     * @return $this
     */
    public function setSaveFindings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Action\SaveFindings::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Publish a notification to a pubsub topic.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.PublishToPubSub pub_sub = 2;</code>
     * @return \Google\Cloud\Dlp\V2\Action\PublishToPubSub|null
     */
    public function getPubSub()
    {
        return $this->readOneof(2);
    }

    public function hasPubSub()
    {
        return $this->hasOneof(2);
    }

    /**
     * Publish a notification to a pubsub topic.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.PublishToPubSub pub_sub = 2;</code>
     * @param \Google\Cloud\Dlp\V2\Action\PublishToPubSub $var
     * @return $this
     */
    public function setPubSub($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Action\PublishToPubSub::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Publish summary to Cloud Security Command Center (Alpha).
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.PublishSummaryToCscc publish_summary_to_cscc = 3;</code>
     * @return \Google\Cloud\Dlp\V2\Action\PublishSummaryToCscc|null
     */
    public function getPublishSummaryToCscc()
    {
        return $this->readOneof(3);
    }

    public function hasPublishSummaryToCscc()
    {
        return $this->hasOneof(3);
    }

    /**
     * Publish summary to Cloud Security Command Center (Alpha).
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.PublishSummaryToCscc publish_summary_to_cscc = 3;</code>
     * @param \Google\Cloud\Dlp\V2\Action\PublishSummaryToCscc $var
     * @return $this
     */
    public function setPublishSummaryToCscc($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Action\PublishSummaryToCscc::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Publish findings to Cloud Datahub.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.PublishFindingsToCloudDataCatalog publish_findings_to_cloud_data_catalog = 5;</code>
     * @return \Google\Cloud\Dlp\V2\Action\PublishFindingsToCloudDataCatalog|null
     */
    public function getPublishFindingsToCloudDataCatalog()
    {
        return $this->readOneof(5);
    }

    public function hasPublishFindingsToCloudDataCatalog()
    {
        return $this->hasOneof(5);
    }

    /**
     * Publish findings to Cloud Datahub.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.PublishFindingsToCloudDataCatalog publish_findings_to_cloud_data_catalog = 5;</code>
     * @param \Google\Cloud\Dlp\V2\Action\PublishFindingsToCloudDataCatalog $var
     * @return $this
     */
    public function setPublishFindingsToCloudDataCatalog($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Action\PublishFindingsToCloudDataCatalog::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Enable email notification for project owners and editors on job's
     * completion/failure.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.JobNotificationEmails job_notification_emails = 8;</code>
     * @return \Google\Cloud\Dlp\V2\Action\JobNotificationEmails|null
     */
    public function getJobNotificationEmails()
    {
        return $this->readOneof(8);
    }

    public function hasJobNotificationEmails()
    {
        return $this->hasOneof(8);
    }

    /**
     * Enable email notification for project owners and editors on job's
     * completion/failure.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.JobNotificationEmails job_notification_emails = 8;</code>
     * @param \Google\Cloud\Dlp\V2\Action\JobNotificationEmails $var
     * @return $this
     */
    public function setJobNotificationEmails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Action\JobNotificationEmails::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Enable Stackdriver metric dlp.googleapis.com/finding_count.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.PublishToStackdriver publish_to_stackdriver = 9;</code>
     * @return \Google\Cloud\Dlp\V2\Action\PublishToStackdriver|null
     */
    public function getPublishToStackdriver()
    {
        return $this->readOneof(9);
    }

    public function hasPublishToStackdriver()
    {
        return $this->hasOneof(9);
    }

    /**
     * Enable Stackdriver metric dlp.googleapis.com/finding_count.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Action.PublishToStackdriver publish_to_stackdriver = 9;</code>
     * @param \Google\Cloud\Dlp\V2\Action\PublishToStackdriver $var
     * @return $this
     */
    public function setPublishToStackdriver($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Action\PublishToStackdriver::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->whichOneof("action");
    }

}

