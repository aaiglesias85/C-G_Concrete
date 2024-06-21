<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/endpoint_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [EndpointService.ListEndpoints][google.cloud.aiplatform.v1.EndpointService.ListEndpoints].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListEndpointsResponse</code>
 */
class ListEndpointsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of Endpoints in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Endpoint endpoints = 1;</code>
     */
    private $endpoints;
    /**
     * A token to retrieve the next page of results.
     * Pass to [ListEndpointsRequest.page_token][google.cloud.aiplatform.v1.ListEndpointsRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Endpoint[]|\Google\Protobuf\Internal\RepeatedField $endpoints
     *           List of Endpoints in the requested page.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     *           Pass to [ListEndpointsRequest.page_token][google.cloud.aiplatform.v1.ListEndpointsRequest.page_token] to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EndpointService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of Endpoints in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Endpoint endpoints = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * List of Endpoints in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Endpoint endpoints = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\Endpoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Endpoint::class);
        $this->endpoints = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListEndpointsRequest.page_token][google.cloud.aiplatform.v1.ListEndpointsRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to [ListEndpointsRequest.page_token][google.cloud.aiplatform.v1.ListEndpointsRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

