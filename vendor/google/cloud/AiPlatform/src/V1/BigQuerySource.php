<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/io.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The BigQuery location for the input content.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BigQuerySource</code>
 */
class BigQuerySource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. BigQuery URI to a table, up to 2000 characters long.
     * Accepted forms:
     * *  BigQuery path. For example: `bq://projectId.bqDatasetId.bqTableId`.
     *
     * Generated from protobuf field <code>string input_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $input_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $input_uri
     *           Required. BigQuery URI to a table, up to 2000 characters long.
     *           Accepted forms:
     *           *  BigQuery path. For example: `bq://projectId.bqDatasetId.bqTableId`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Io::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. BigQuery URI to a table, up to 2000 characters long.
     * Accepted forms:
     * *  BigQuery path. For example: `bq://projectId.bqDatasetId.bqTableId`.
     *
     * Generated from protobuf field <code>string input_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInputUri()
    {
        return $this->input_uri;
    }

    /**
     * Required. BigQuery URI to a table, up to 2000 characters long.
     * Accepted forms:
     * *  BigQuery path. For example: `bq://projectId.bqDatasetId.bqTableId`.
     *
     * Generated from protobuf field <code>string input_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_uri = $var;

        return $this;
    }

}

