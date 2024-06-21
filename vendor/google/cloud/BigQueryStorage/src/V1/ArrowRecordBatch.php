<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/arrow.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Arrow RecordBatch.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.ArrowRecordBatch</code>
 */
class ArrowRecordBatch extends \Google\Protobuf\Internal\Message
{
    /**
     * IPC-serialized Arrow RecordBatch.
     *
     * Generated from protobuf field <code>bytes serialized_record_batch = 1;</code>
     */
    private $serialized_record_batch = '';
    /**
     * The count of rows in `serialized_record_batch`.
     *
     * Generated from protobuf field <code>int64 row_count = 2;</code>
     */
    private $row_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $serialized_record_batch
     *           IPC-serialized Arrow RecordBatch.
     *     @type int|string $row_count
     *           The count of rows in `serialized_record_batch`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Arrow::initOnce();
        parent::__construct($data);
    }

    /**
     * IPC-serialized Arrow RecordBatch.
     *
     * Generated from protobuf field <code>bytes serialized_record_batch = 1;</code>
     * @return string
     */
    public function getSerializedRecordBatch()
    {
        return $this->serialized_record_batch;
    }

    /**
     * IPC-serialized Arrow RecordBatch.
     *
     * Generated from protobuf field <code>bytes serialized_record_batch = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSerializedRecordBatch($var)
    {
        GPBUtil::checkString($var, False);
        $this->serialized_record_batch = $var;

        return $this;
    }

    /**
     * The count of rows in `serialized_record_batch`.
     *
     * Generated from protobuf field <code>int64 row_count = 2;</code>
     * @return int|string
     */
    public function getRowCount()
    {
        return $this->row_count;
    }

    /**
     * The count of rows in `serialized_record_batch`.
     *
     * Generated from protobuf field <code>int64 row_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->row_count = $var;

        return $this;
    }

}

