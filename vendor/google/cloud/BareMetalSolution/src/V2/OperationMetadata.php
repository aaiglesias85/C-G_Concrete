<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/baremetalsolution.proto

namespace Google\Cloud\BaremetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the metadata from a long-running operation.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.OperationMetadata</code>
 */
class OperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $end_time = null;
    /**
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $target = '';
    /**
     * Name of the action executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $verb = '';
    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $status_message = '';
    /**
     * Identifies whether the user requested the cancellation
     * of the operation. Operations that have been successfully cancelled
     * have [Operation.error][] value with a [google.rpc.Status.code][] of 1,
     * corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool requested_cancellation = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $requested_cancellation = false;
    /**
     * API version used with the operation.
     *
     * Generated from protobuf field <code>string api_version = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $api_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time the operation was created.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time the operation finished running.
     *     @type string $target
     *           Server-defined resource path for the target of the operation.
     *     @type string $verb
     *           Name of the action executed by the operation.
     *     @type string $status_message
     *           Human-readable status of the operation, if any.
     *     @type bool $requested_cancellation
     *           Identifies whether the user requested the cancellation
     *           of the operation. Operations that have been successfully cancelled
     *           have [Operation.error][] value with a [google.rpc.Status.code][] of 1,
     *           corresponding to `Code.CANCELLED`.
     *     @type string $api_version
     *           API version used with the operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Baremetalsolution::initOnce();
        parent::__construct($data);
    }

    /**
     * The time the operation was created.
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
     * The time the operation was created.
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
     * The time the operation finished running.
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
     * The time the operation finished running.
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
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

    /**
     * Name of the action executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * Name of the action executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setVerb($var)
    {
        GPBUtil::checkString($var, True);
        $this->verb = $var;

        return $this;
    }

    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * Human-readable status of the operation, if any.
     *
     * Generated from protobuf field <code>string status_message = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStatusMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_message = $var;

        return $this;
    }

    /**
     * Identifies whether the user requested the cancellation
     * of the operation. Operations that have been successfully cancelled
     * have [Operation.error][] value with a [google.rpc.Status.code][] of 1,
     * corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool requested_cancellation = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getRequestedCancellation()
    {
        return $this->requested_cancellation;
    }

    /**
     * Identifies whether the user requested the cancellation
     * of the operation. Operations that have been successfully cancelled
     * have [Operation.error][] value with a [google.rpc.Status.code][] of 1,
     * corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool requested_cancellation = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setRequestedCancellation($var)
    {
        GPBUtil::checkBool($var);
        $this->requested_cancellation = $var;

        return $this;
    }

    /**
     * API version used with the operation.
     *
     * Generated from protobuf field <code>string api_version = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * API version used with the operation.
     *
     * Generated from protobuf field <code>string api_version = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_version = $var;

        return $this;
    }

}

