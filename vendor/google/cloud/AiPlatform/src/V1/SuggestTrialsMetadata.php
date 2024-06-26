<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vizier_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of operations that perform Trials suggestion.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SuggestTrialsMetadata</code>
 */
class SuggestTrialsMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Operation metadata for suggesting Trials.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     */
    private $generic_metadata = null;
    /**
     * The identifier of the client that is requesting the suggestion.
     * If multiple SuggestTrialsRequests have the same `client_id`,
     * the service will return the identical suggested Trial if the Trial is
     * pending, and provide a new Trial if the last suggested Trial was completed.
     *
     * Generated from protobuf field <code>string client_id = 2;</code>
     */
    private $client_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\GenericOperationMetadata $generic_metadata
     *           Operation metadata for suggesting Trials.
     *     @type string $client_id
     *           The identifier of the client that is requesting the suggestion.
     *           If multiple SuggestTrialsRequests have the same `client_id`,
     *           the service will return the identical suggested Trial if the Trial is
     *           pending, and provide a new Trial if the last suggested Trial was completed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VizierService::initOnce();
        parent::__construct($data);
    }

    /**
     * Operation metadata for suggesting Trials.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\GenericOperationMetadata|null
     */
    public function getGenericMetadata()
    {
        return $this->generic_metadata;
    }

    public function hasGenericMetadata()
    {
        return isset($this->generic_metadata);
    }

    public function clearGenericMetadata()
    {
        unset($this->generic_metadata);
    }

    /**
     * Operation metadata for suggesting Trials.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\GenericOperationMetadata $var
     * @return $this
     */
    public function setGenericMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GenericOperationMetadata::class);
        $this->generic_metadata = $var;

        return $this;
    }

    /**
     * The identifier of the client that is requesting the suggestion.
     * If multiple SuggestTrialsRequests have the same `client_id`,
     * the service will return the identical suggested Trial if the Trial is
     * pending, and provide a new Trial if the last suggested Trial was completed.
     *
     * Generated from protobuf field <code>string client_id = 2;</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * The identifier of the client that is requesting the suggestion.
     * If multiple SuggestTrialsRequests have the same `client_id`,
     * the service will return the identical suggested Trial if the Trial is
     * pending, and provide a new Trial if the last suggested Trial was completed.
     *
     * Generated from protobuf field <code>string client_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

}

