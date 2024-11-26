<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1\IamPolicyAnalysisOutputConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A BigQuery destination.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicyAnalysisOutputConfig.BigQueryDestination</code>
 */
class BigQueryDestination extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The BigQuery dataset in format "projects/projectId/datasets/datasetId",
     * to which the analysis results should be exported. If this dataset does
     * not exist, the export call will return an INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $dataset = '';
    /**
     * Required. The prefix of the BigQuery tables to which the analysis results will be
     * written. Tables will be created based on this table_prefix if not exist:
     * * <table_prefix>_analysis table will contain export operation's metadata.
     * * <table_prefix>_analysis_result will contain all the
     *   [IamPolicyAnalysisResult][google.cloud.asset.v1.IamPolicyAnalysisResult].
     * When [partition_key] is specified, both tables will be partitioned based
     * on the [partition_key].
     *
     * Generated from protobuf field <code>string table_prefix = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $table_prefix = '';
    /**
     * The partition key for BigQuery partitioned table.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig.BigQueryDestination.PartitionKey partition_key = 3;</code>
     */
    private $partition_key = 0;
    /**
     * Optional. Specifies the action that occurs if the destination table or partition
     * already exists. The following values are supported:
     * * WRITE_TRUNCATE: If the table or partition already exists, BigQuery
     * overwrites the entire table or all the partitions data.
     * * WRITE_APPEND: If the table or partition already exists, BigQuery
     * appends the data to the table or the latest partition.
     * * WRITE_EMPTY: If the table already exists and contains data, an error is
     * returned.
     * The default value is WRITE_APPEND. Each action is atomic and only occurs
     * if BigQuery is able to complete the job successfully. Details are at
     * https://cloud.google.com/bigquery/docs/loading-data-local#appending_to_or_overwriting_a_table_using_a_local_file.
     *
     * Generated from protobuf field <code>string write_disposition = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $write_disposition = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset
     *           Required. The BigQuery dataset in format "projects/projectId/datasets/datasetId",
     *           to which the analysis results should be exported. If this dataset does
     *           not exist, the export call will return an INVALID_ARGUMENT error.
     *     @type string $table_prefix
     *           Required. The prefix of the BigQuery tables to which the analysis results will be
     *           written. Tables will be created based on this table_prefix if not exist:
     *           * <table_prefix>_analysis table will contain export operation's metadata.
     *           * <table_prefix>_analysis_result will contain all the
     *             [IamPolicyAnalysisResult][google.cloud.asset.v1.IamPolicyAnalysisResult].
     *           When [partition_key] is specified, both tables will be partitioned based
     *           on the [partition_key].
     *     @type int $partition_key
     *           The partition key for BigQuery partitioned table.
     *     @type string $write_disposition
     *           Optional. Specifies the action that occurs if the destination table or partition
     *           already exists. The following values are supported:
     *           * WRITE_TRUNCATE: If the table or partition already exists, BigQuery
     *           overwrites the entire table or all the partitions data.
     *           * WRITE_APPEND: If the table or partition already exists, BigQuery
     *           appends the data to the table or the latest partition.
     *           * WRITE_EMPTY: If the table already exists and contains data, an error is
     *           returned.
     *           The default value is WRITE_APPEND. Each action is atomic and only occurs
     *           if BigQuery is able to complete the job successfully. Details are at
     *           https://cloud.google.com/bigquery/docs/loading-data-local#appending_to_or_overwriting_a_table_using_a_local_file.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The BigQuery dataset in format "projects/projectId/datasets/datasetId",
     * to which the analysis results should be exported. If this dataset does
     * not exist, the export call will return an INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Required. The BigQuery dataset in format "projects/projectId/datasets/datasetId",
     * to which the analysis results should be exported. If this dataset does
     * not exist, the export call will return an INVALID_ARGUMENT error.
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

    /**
     * Required. The prefix of the BigQuery tables to which the analysis results will be
     * written. Tables will be created based on this table_prefix if not exist:
     * * <table_prefix>_analysis table will contain export operation's metadata.
     * * <table_prefix>_analysis_result will contain all the
     *   [IamPolicyAnalysisResult][google.cloud.asset.v1.IamPolicyAnalysisResult].
     * When [partition_key] is specified, both tables will be partitioned based
     * on the [partition_key].
     *
     * Generated from protobuf field <code>string table_prefix = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTablePrefix()
    {
        return $this->table_prefix;
    }

    /**
     * Required. The prefix of the BigQuery tables to which the analysis results will be
     * written. Tables will be created based on this table_prefix if not exist:
     * * <table_prefix>_analysis table will contain export operation's metadata.
     * * <table_prefix>_analysis_result will contain all the
     *   [IamPolicyAnalysisResult][google.cloud.asset.v1.IamPolicyAnalysisResult].
     * When [partition_key] is specified, both tables will be partitioned based
     * on the [partition_key].
     *
     * Generated from protobuf field <code>string table_prefix = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTablePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_prefix = $var;

        return $this;
    }

    /**
     * The partition key for BigQuery partitioned table.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig.BigQueryDestination.PartitionKey partition_key = 3;</code>
     * @return int
     */
    public function getPartitionKey()
    {
        return $this->partition_key;
    }

    /**
     * The partition key for BigQuery partitioned table.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig.BigQueryDestination.PartitionKey partition_key = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPartitionKey($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisOutputConfig\BigQueryDestination\PartitionKey::class);
        $this->partition_key = $var;

        return $this;
    }

    /**
     * Optional. Specifies the action that occurs if the destination table or partition
     * already exists. The following values are supported:
     * * WRITE_TRUNCATE: If the table or partition already exists, BigQuery
     * overwrites the entire table or all the partitions data.
     * * WRITE_APPEND: If the table or partition already exists, BigQuery
     * appends the data to the table or the latest partition.
     * * WRITE_EMPTY: If the table already exists and contains data, an error is
     * returned.
     * The default value is WRITE_APPEND. Each action is atomic and only occurs
     * if BigQuery is able to complete the job successfully. Details are at
     * https://cloud.google.com/bigquery/docs/loading-data-local#appending_to_or_overwriting_a_table_using_a_local_file.
     *
     * Generated from protobuf field <code>string write_disposition = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getWriteDisposition()
    {
        return $this->write_disposition;
    }

    /**
     * Optional. Specifies the action that occurs if the destination table or partition
     * already exists. The following values are supported:
     * * WRITE_TRUNCATE: If the table or partition already exists, BigQuery
     * overwrites the entire table or all the partitions data.
     * * WRITE_APPEND: If the table or partition already exists, BigQuery
     * appends the data to the table or the latest partition.
     * * WRITE_EMPTY: If the table already exists and contains data, an error is
     * returned.
     * The default value is WRITE_APPEND. Each action is atomic and only occurs
     * if BigQuery is able to complete the job successfully. Details are at
     * https://cloud.google.com/bigquery/docs/loading-data-local#appending_to_or_overwriting_a_table_using_a_local_file.
     *
     * Generated from protobuf field <code>string write_disposition = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setWriteDisposition($var)
    {
        GPBUtil::checkString($var, True);
        $this->write_disposition = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BigQueryDestination::class, \Google\Cloud\Asset\V1\IamPolicyAnalysisOutputConfig_BigQueryDestination::class);

