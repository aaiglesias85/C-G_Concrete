<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [ModelService.ListModels][google.cloud.aiplatform.v1.ModelService.ListModels]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListModelsResponse</code>
 */
class ListModelsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of Models in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Model models = 1;</code>
     */
    private $models;
    /**
     * A token to retrieve next page of results.
     * Pass to [ListModelsRequest.page_token][google.cloud.aiplatform.v1.ListModelsRequest.page_token] to obtain that page.
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
     *     @type \Google\Cloud\AIPlatform\V1\Model[]|\Google\Protobuf\Internal\RepeatedField $models
     *           List of Models in the requested page.
     *     @type string $next_page_token
     *           A token to retrieve next page of results.
     *           Pass to [ListModelsRequest.page_token][google.cloud.aiplatform.v1.ListModelsRequest.page_token] to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of Models in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Model models = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModels()
    {
        return $this->models;
    }

    /**
     * List of Models in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Model models = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\Model[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Model::class);
        $this->models = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results.
     * Pass to [ListModelsRequest.page_token][google.cloud.aiplatform.v1.ListModelsRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results.
     * Pass to [ListModelsRequest.page_token][google.cloud.aiplatform.v1.ListModelsRequest.page_token] to obtain that page.
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

