<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/endpoint_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [EndpointService.UndeployModel][google.cloud.aiplatform.v1.EndpointService.UndeployModel].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UndeployModelRequest</code>
 */
class UndeployModelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Endpoint resource from which to undeploy a Model.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $endpoint = '';
    /**
     * Required. The ID of the DeployedModel to be undeployed from the Endpoint.
     *
     * Generated from protobuf field <code>string deployed_model_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $deployed_model_id = '';
    /**
     * If this field is provided, then the Endpoint's
     * [traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split] will be overwritten with it. If
     * last DeployedModel is being undeployed from the Endpoint, the
     * [Endpoint.traffic_split] will always end up empty when this call returns.
     * A DeployedModel will be successfully undeployed only if it doesn't have
     * any traffic assigned to it when this method executes, or if this field
     * unassigns any traffic to it.
     *
     * Generated from protobuf field <code>map<string, int32> traffic_split = 3;</code>
     */
    private $traffic_split;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint
     *           Required. The name of the Endpoint resource from which to undeploy a Model.
     *           Format:
     *           `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *     @type string $deployed_model_id
     *           Required. The ID of the DeployedModel to be undeployed from the Endpoint.
     *     @type array|\Google\Protobuf\Internal\MapField $traffic_split
     *           If this field is provided, then the Endpoint's
     *           [traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split] will be overwritten with it. If
     *           last DeployedModel is being undeployed from the Endpoint, the
     *           [Endpoint.traffic_split] will always end up empty when this call returns.
     *           A DeployedModel will be successfully undeployed only if it doesn't have
     *           any traffic assigned to it when this method executes, or if this field
     *           unassigns any traffic to it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EndpointService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Endpoint resource from which to undeploy a Model.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Required. The name of the Endpoint resource from which to undeploy a Model.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * Required. The ID of the DeployedModel to be undeployed from the Endpoint.
     *
     * Generated from protobuf field <code>string deployed_model_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDeployedModelId()
    {
        return $this->deployed_model_id;
    }

    /**
     * Required. The ID of the DeployedModel to be undeployed from the Endpoint.
     *
     * Generated from protobuf field <code>string deployed_model_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDeployedModelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployed_model_id = $var;

        return $this;
    }

    /**
     * If this field is provided, then the Endpoint's
     * [traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split] will be overwritten with it. If
     * last DeployedModel is being undeployed from the Endpoint, the
     * [Endpoint.traffic_split] will always end up empty when this call returns.
     * A DeployedModel will be successfully undeployed only if it doesn't have
     * any traffic assigned to it when this method executes, or if this field
     * unassigns any traffic to it.
     *
     * Generated from protobuf field <code>map<string, int32> traffic_split = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTrafficSplit()
    {
        return $this->traffic_split;
    }

    /**
     * If this field is provided, then the Endpoint's
     * [traffic_split][google.cloud.aiplatform.v1.Endpoint.traffic_split] will be overwritten with it. If
     * last DeployedModel is being undeployed from the Endpoint, the
     * [Endpoint.traffic_split] will always end up empty when this call returns.
     * A DeployedModel will be successfully undeployed only if it doesn't have
     * any traffic assigned to it when this method executes, or if this field
     * unassigns any traffic to it.
     *
     * Generated from protobuf field <code>map<string, int32> traffic_split = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTrafficSplit($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT32);
        $this->traffic_split = $arr;

        return $this;
    }

}

