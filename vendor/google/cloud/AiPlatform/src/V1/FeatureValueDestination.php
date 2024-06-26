<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A destination location for Feature values and format.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureValueDestination</code>
 */
class FeatureValueDestination extends \Google\Protobuf\Internal\Message
{
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\BigQueryDestination $bigquery_destination
     *           Output in BigQuery format.
     *           [BigQueryDestination.output_uri][google.cloud.aiplatform.v1.BigQueryDestination.output_uri] in
     *           [FeatureValueDestination.bigquery_destination][google.cloud.aiplatform.v1.FeatureValueDestination.bigquery_destination] must refer to a table.
     *     @type \Google\Cloud\AIPlatform\V1\TFRecordDestination $tfrecord_destination
     *           Output in TFRecord format.
     *           Below are the mapping from Feature value type
     *           in Featurestore to Feature value type in TFRecord:
     *               Value type in Featurestore                 | Value type in TFRecord
     *               DOUBLE, DOUBLE_ARRAY                       | FLOAT_LIST
     *               INT64, INT64_ARRAY                         | INT64_LIST
     *               STRING, STRING_ARRAY, BYTES                | BYTES_LIST
     *               true -> byte_string("true"), false -> byte_string("false")
     *               BOOL, BOOL_ARRAY (true, false)             | BYTES_LIST
     *     @type \Google\Cloud\AIPlatform\V1\CsvDestination $csv_destination
     *           Output in CSV format. Array Feature value types are not allowed in CSV
     *           format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output in BigQuery format.
     * [BigQueryDestination.output_uri][google.cloud.aiplatform.v1.BigQueryDestination.output_uri] in
     * [FeatureValueDestination.bigquery_destination][google.cloud.aiplatform.v1.FeatureValueDestination.bigquery_destination] must refer to a table.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BigQueryDestination bigquery_destination = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\BigQueryDestination|null
     */
    public function getBigqueryDestination()
    {
        return $this->readOneof(1);
    }

    public function hasBigqueryDestination()
    {
        return $this->hasOneof(1);
    }

    /**
     * Output in BigQuery format.
     * [BigQueryDestination.output_uri][google.cloud.aiplatform.v1.BigQueryDestination.output_uri] in
     * [FeatureValueDestination.bigquery_destination][google.cloud.aiplatform.v1.FeatureValueDestination.bigquery_destination] must refer to a table.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.BigQueryDestination bigquery_destination = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\BigQueryDestination $var
     * @return $this
     */
    public function setBigqueryDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\BigQueryDestination::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Output in TFRecord format.
     * Below are the mapping from Feature value type
     * in Featurestore to Feature value type in TFRecord:
     *     Value type in Featurestore                 | Value type in TFRecord
     *     DOUBLE, DOUBLE_ARRAY                       | FLOAT_LIST
     *     INT64, INT64_ARRAY                         | INT64_LIST
     *     STRING, STRING_ARRAY, BYTES                | BYTES_LIST
     *     true -> byte_string("true"), false -> byte_string("false")
     *     BOOL, BOOL_ARRAY (true, false)             | BYTES_LIST
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TFRecordDestination tfrecord_destination = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\TFRecordDestination|null
     */
    public function getTfrecordDestination()
    {
        return $this->readOneof(2);
    }

    public function hasTfrecordDestination()
    {
        return $this->hasOneof(2);
    }

    /**
     * Output in TFRecord format.
     * Below are the mapping from Feature value type
     * in Featurestore to Feature value type in TFRecord:
     *     Value type in Featurestore                 | Value type in TFRecord
     *     DOUBLE, DOUBLE_ARRAY                       | FLOAT_LIST
     *     INT64, INT64_ARRAY                         | INT64_LIST
     *     STRING, STRING_ARRAY, BYTES                | BYTES_LIST
     *     true -> byte_string("true"), false -> byte_string("false")
     *     BOOL, BOOL_ARRAY (true, false)             | BYTES_LIST
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TFRecordDestination tfrecord_destination = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\TFRecordDestination $var
     * @return $this
     */
    public function setTfrecordDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\TFRecordDestination::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Output in CSV format. Array Feature value types are not allowed in CSV
     * format.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CsvDestination csv_destination = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\CsvDestination|null
     */
    public function getCsvDestination()
    {
        return $this->readOneof(3);
    }

    public function hasCsvDestination()
    {
        return $this->hasOneof(3);
    }

    /**
     * Output in CSV format. Array Feature value types are not allowed in CSV
     * format.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.CsvDestination csv_destination = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\CsvDestination $var
     * @return $this
     */
    public function setCsvDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\CsvDestination::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

