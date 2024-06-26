<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for [AssetService.AnalyzeIamPolicy][google.cloud.asset.v1.AssetService.AnalyzeIamPolicy].
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.AnalyzeIamPolicyRequest</code>
 */
class AnalyzeIamPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The request query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery analysis_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $analysis_query = null;
    /**
     * Optional. Amount of time executable has to complete.  See JSON representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json).
     * If this field is set with a value less than the RPC deadline, and the
     * execution of your query hasn't finished in the specified
     * execution timeout,  you will get a response with partial result.
     * Otherwise, your query's execution will continue until the RPC deadline.
     * If it's not finished until then, you will get a  DEADLINE_EXCEEDED error.
     * Default is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $execution_timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery $analysis_query
     *           Required. The request query.
     *     @type \Google\Protobuf\Duration $execution_timeout
     *           Optional. Amount of time executable has to complete.  See JSON representation of
     *           [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json).
     *           If this field is set with a value less than the RPC deadline, and the
     *           execution of your query hasn't finished in the specified
     *           execution timeout,  you will get a response with partial result.
     *           Otherwise, your query's execution will continue until the RPC deadline.
     *           If it's not finished until then, you will get a  DEADLINE_EXCEEDED error.
     *           Default is empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The request query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery analysis_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery|null
     */
    public function getAnalysisQuery()
    {
        return $this->analysis_query;
    }

    public function hasAnalysisQuery()
    {
        return isset($this->analysis_query);
    }

    public function clearAnalysisQuery()
    {
        unset($this->analysis_query);
    }

    /**
     * Required. The request query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery analysis_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery $var
     * @return $this
     */
    public function setAnalysisQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery::class);
        $this->analysis_query = $var;

        return $this;
    }

    /**
     * Optional. Amount of time executable has to complete.  See JSON representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json).
     * If this field is set with a value less than the RPC deadline, and the
     * execution of your query hasn't finished in the specified
     * execution timeout,  you will get a response with partial result.
     * Otherwise, your query's execution will continue until the RPC deadline.
     * If it's not finished until then, you will get a  DEADLINE_EXCEEDED error.
     * Default is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getExecutionTimeout()
    {
        return $this->execution_timeout;
    }

    public function hasExecutionTimeout()
    {
        return isset($this->execution_timeout);
    }

    public function clearExecutionTimeout()
    {
        unset($this->execution_timeout);
    }

    /**
     * Optional. Amount of time executable has to complete.  See JSON representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json).
     * If this field is set with a value less than the RPC deadline, and the
     * execution of your query hasn't finished in the specified
     * execution timeout,  you will get a response with partial result.
     * Otherwise, your query's execution will continue until the RPC deadline.
     * If it's not finished until then, you will get a  DEADLINE_EXCEEDED error.
     * Default is empty.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setExecutionTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->execution_timeout = $var;

        return $this;
    }

}

