<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigateway/v1/apigateway.proto

namespace Google\Cloud\ApiGateway\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Gateway is an API-aware HTTP proxy. It performs API-Method and/or
 * API-Consumer specific actions based on an API Config such as authentication,
 * policy enforcement, and backend selection.
 *
 * Generated from protobuf message <code>google.cloud.apigateway.v1.Gateway</code>
 */
class Gateway extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the Gateway.
     * Format: projects/{project}/locations/{location}/gateways/{gateway}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. Created time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Updated time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. Resource labels to represent user-provided metadata.
     * Refer to cloud documentation on labels for more details.
     * https://cloud.google.com/compute/docs/labeling-resources
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Display name.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $display_name = '';
    /**
     * Required. Resource name of the API Config for this Gateway.
     * Format: projects/{project}/locations/global/apis/{api}/configs/{apiConfig}
     *
     * Generated from protobuf field <code>string api_config = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $api_config = '';
    /**
     * Output only. The current state of the Gateway.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.Gateway.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The default API Gateway host name of the form
     * `{gateway_id}-{hash}.{region_code}.gateway.dev`.
     *
     * Generated from protobuf field <code>string default_hostname = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $default_hostname = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the Gateway.
     *           Format: projects/{project}/locations/{location}/gateways/{gateway}
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Created time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Updated time.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Resource labels to represent user-provided metadata.
     *           Refer to cloud documentation on labels for more details.
     *           https://cloud.google.com/compute/docs/labeling-resources
     *     @type string $display_name
     *           Optional. Display name.
     *     @type string $api_config
     *           Required. Resource name of the API Config for this Gateway.
     *           Format: projects/{project}/locations/global/apis/{api}/configs/{apiConfig}
     *     @type int $state
     *           Output only. The current state of the Gateway.
     *     @type string $default_hostname
     *           Output only. The default API Gateway host name of the form
     *           `{gateway_id}-{hash}.{region_code}.gateway.dev`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigateway\V1\Apigateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the Gateway.
     * Format: projects/{project}/locations/{location}/gateways/{gateway}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the Gateway.
     * Format: projects/{project}/locations/{location}/gateways/{gateway}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Created time.
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
     * Output only. Created time.
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
     * Output only. Updated time.
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
     * Output only. Updated time.
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

    /**
     * Optional. Resource labels to represent user-provided metadata.
     * Refer to cloud documentation on labels for more details.
     * https://cloud.google.com/compute/docs/labeling-resources
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Resource labels to represent user-provided metadata.
     * Refer to cloud documentation on labels for more details.
     * https://cloud.google.com/compute/docs/labeling-resources
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Display name.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. Display name.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. Resource name of the API Config for this Gateway.
     * Format: projects/{project}/locations/global/apis/{api}/configs/{apiConfig}
     *
     * Generated from protobuf field <code>string api_config = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getApiConfig()
    {
        return $this->api_config;
    }

    /**
     * Required. Resource name of the API Config for this Gateway.
     * Format: projects/{project}/locations/global/apis/{api}/configs/{apiConfig}
     *
     * Generated from protobuf field <code>string api_config = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setApiConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_config = $var;

        return $this;
    }

    /**
     * Output only. The current state of the Gateway.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.Gateway.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the Gateway.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.Gateway.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ApiGateway\V1\Gateway\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The default API Gateway host name of the form
     * `{gateway_id}-{hash}.{region_code}.gateway.dev`.
     *
     * Generated from protobuf field <code>string default_hostname = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDefaultHostname()
    {
        return $this->default_hostname;
    }

    /**
     * Output only. The default API Gateway host name of the form
     * `{gateway_id}-{hash}.{region_code}.gateway.dev`.
     *
     * Generated from protobuf field <code>string default_hostname = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultHostname($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_hostname = $var;

        return $this;
    }

}

