<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [PartitionQuery][google.spanner.v1.Spanner.PartitionQuery]
 * or [PartitionRead][google.spanner.v1.Spanner.PartitionRead]
 *
 * Generated from protobuf message <code>google.spanner.v1.PartitionResponse</code>
 */
class PartitionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Partitions created by this request.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.Partition partitions = 1;</code>
     */
    private $partitions;
    /**
     * Transaction created by this request.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Transaction transaction = 2;</code>
     */
    private $transaction = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Spanner\V1\Partition[]|\Google\Protobuf\Internal\RepeatedField $partitions
     *           Partitions created by this request.
     *     @type \Google\Cloud\Spanner\V1\Transaction $transaction
     *           Transaction created by this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Partitions created by this request.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.Partition partitions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitions()
    {
        return $this->partitions;
    }

    /**
     * Partitions created by this request.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.Partition partitions = 1;</code>
     * @param \Google\Cloud\Spanner\V1\Partition[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\V1\Partition::class);
        $this->partitions = $arr;

        return $this;
    }

    /**
     * Transaction created by this request.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Transaction transaction = 2;</code>
     * @return \Google\Cloud\Spanner\V1\Transaction|null
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    public function hasTransaction()
    {
        return isset($this->transaction);
    }

    public function clearTransaction()
    {
        unset($this->transaction);
    }

    /**
     * Transaction created by this request.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Transaction transaction = 2;</code>
     * @param \Google\Cloud\Spanner\V1\Transaction $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\Transaction::class);
        $this->transaction = $var;

        return $this;
    }

}

