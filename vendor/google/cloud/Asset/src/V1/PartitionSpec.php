<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifications of BigQuery partitioned table as export destination.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.PartitionSpec</code>
 */
class PartitionSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The partition key for BigQuery partitioned table.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.PartitionSpec.PartitionKey partition_key = 1;</code>
     */
    private $partition_key = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $partition_key
     *           The partition key for BigQuery partitioned table.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The partition key for BigQuery partitioned table.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.PartitionSpec.PartitionKey partition_key = 1;</code>
     * @return int
     */
    public function getPartitionKey()
    {
        return $this->partition_key;
    }

    /**
     * The partition key for BigQuery partitioned table.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.PartitionSpec.PartitionKey partition_key = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPartitionKey($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Asset\V1\PartitionSpec\PartitionKey::class);
        $this->partition_key = $var;

        return $this;
    }

}

