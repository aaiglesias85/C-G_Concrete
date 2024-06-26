<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/operation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generic Metadata shared by all operations.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GenericOperationMetadata</code>
 */
class GenericOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Partial failures encountered.
     * E.g. single files that couldn't be read.
     * This field should never exceed 20 entries.
     * Status details field will contain standard GCP error details.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_failures = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $partial_failures;
    /**
     * Output only. Time when the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Time when the operation was updated for the last time.
     * If the operation has finished (successfully or not), this is the finish
     * time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Rpc\Status[]|\Google\Protobuf\Internal\RepeatedField $partial_failures
     *           Output only. Partial failures encountered.
     *           E.g. single files that couldn't be read.
     *           This field should never exceed 20 entries.
     *           Status details field will contain standard GCP error details.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when the operation was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when the operation was updated for the last time.
     *           If the operation has finished (successfully or not), this is the finish
     *           time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Operation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Partial failures encountered.
     * E.g. single files that couldn't be read.
     * This field should never exceed 20 entries.
     * Status details field will contain standard GCP error details.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_failures = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartialFailures()
    {
        return $this->partial_failures;
    }

    /**
     * Output only. Partial failures encountered.
     * E.g. single files that couldn't be read.
     * This field should never exceed 20 entries.
     * Status details field will contain standard GCP error details.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status partial_failures = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartialFailures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->partial_failures = $arr;

        return $this;
    }

    /**
     * Output only. Time when the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when the operation was updated for the last time.
     * If the operation has finished (successfully or not), this is the finish
     * time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time when the operation was updated for the last time.
     * If the operation has finished (successfully or not), this is the finish
     * time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

}

