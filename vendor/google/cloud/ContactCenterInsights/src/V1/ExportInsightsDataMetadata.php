<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for an export insights operation.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.ExportInsightsDataMetadata</code>
 */
class ExportInsightsDataMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $end_time = null;
    /**
     * The original request for export.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ExportInsightsDataRequest request = 3;</code>
     */
    private $request = null;
    /**
     * Partial errors during export operation that might cause the operation
     * output to be incomplete.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_errors = 4;</code>
     */
    private $partial_errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the operation was created.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. The time the operation finished running.
     *     @type \Google\Cloud\ContactCenterInsights\V1\ExportInsightsDataRequest $request
     *           The original request for export.
     *     @type \Google\Rpc\Status[]|\Google\Protobuf\Internal\RepeatedField $partial_errors
     *           Partial errors during export operation that might cause the operation
     *           output to be incomplete.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * The original request for export.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ExportInsightsDataRequest request = 3;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\ExportInsightsDataRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function hasRequest()
    {
        return isset($this->request);
    }

    public function clearRequest()
    {
        unset($this->request);
    }

    /**
     * The original request for export.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ExportInsightsDataRequest request = 3;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\ExportInsightsDataRequest $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\ExportInsightsDataRequest::class);
        $this->request = $var;

        return $this;
    }

    /**
     * Partial errors during export operation that might cause the operation
     * output to be incomplete.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_errors = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartialErrors()
    {
        return $this->partial_errors;
    }

    /**
     * Partial errors during export operation that might cause the operation
     * output to be incomplete.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_errors = 4;</code>
     * @param \Google\Rpc\Status[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartialErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->partial_errors = $arr;

        return $this;
    }

}

