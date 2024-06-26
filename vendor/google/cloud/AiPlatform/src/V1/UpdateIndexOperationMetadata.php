<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Runtime operation information for [IndexService.UpdateIndex][google.cloud.aiplatform.v1.IndexService.UpdateIndex].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateIndexOperationMetadata</code>
 */
class UpdateIndexOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The operation generic information.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     */
    private $generic_metadata = null;
    /**
     * The operation metadata with regard to Matching Engine Index operation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata nearest_neighbor_search_operation_metadata = 2;</code>
     */
    private $nearest_neighbor_search_operation_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\GenericOperationMetadata $generic_metadata
     *           The operation generic information.
     *     @type \Google\Cloud\AIPlatform\V1\NearestNeighborSearchOperationMetadata $nearest_neighbor_search_operation_metadata
     *           The operation metadata with regard to Matching Engine Index operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\IndexService::initOnce();
        parent::__construct($data);
    }

    /**
     * The operation generic information.
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
     * The operation generic information.
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
     * The operation metadata with regard to Matching Engine Index operation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata nearest_neighbor_search_operation_metadata = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\NearestNeighborSearchOperationMetadata|null
     */
    public function getNearestNeighborSearchOperationMetadata()
    {
        return $this->nearest_neighbor_search_operation_metadata;
    }

    public function hasNearestNeighborSearchOperationMetadata()
    {
        return isset($this->nearest_neighbor_search_operation_metadata);
    }

    public function clearNearestNeighborSearchOperationMetadata()
    {
        unset($this->nearest_neighbor_search_operation_metadata);
    }

    /**
     * The operation metadata with regard to Matching Engine Index operation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata nearest_neighbor_search_operation_metadata = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\NearestNeighborSearchOperationMetadata $var
     * @return $this
     */
    public function setNearestNeighborSearchOperationMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\NearestNeighborSearchOperationMetadata::class);
        $this->nearest_neighbor_search_operation_metadata = $var;

        return $this;
    }

}

