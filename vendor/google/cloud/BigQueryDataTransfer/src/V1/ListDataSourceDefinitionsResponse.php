<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datasource.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Returns a list of supported data source definitions.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.ListDataSourceDefinitionsResponse</code>
 */
class ListDataSourceDefinitionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of supported data source definitions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.DataSourceDefinition data_source_definitions = 1;</code>
     */
    private $data_source_definitions;
    /**
     * Output only. The next-pagination token. For multiple-page list results,
     * this token can be used as the
     * `ListDataSourceDefinitionsRequest.page_token`
     * to request the next page of the list results.
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
     *     @type \Google\Cloud\BigQuery\DataTransfer\V1\DataSourceDefinition[]|\Google\Protobuf\Internal\RepeatedField $data_source_definitions
     *           List of supported data source definitions.
     *     @type string $next_page_token
     *           Output only. The next-pagination token. For multiple-page list results,
     *           this token can be used as the
     *           `ListDataSourceDefinitionsRequest.page_token`
     *           to request the next page of the list results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datasource::initOnce();
        parent::__construct($data);
    }

    /**
     * List of supported data source definitions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.DataSourceDefinition data_source_definitions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataSourceDefinitions()
    {
        return $this->data_source_definitions;
    }

    /**
     * List of supported data source definitions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.datatransfer.v1.DataSourceDefinition data_source_definitions = 1;</code>
     * @param \Google\Cloud\BigQuery\DataTransfer\V1\DataSourceDefinition[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataSourceDefinitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\DataTransfer\V1\DataSourceDefinition::class);
        $this->data_source_definitions = $arr;

        return $this;
    }

    /**
     * Output only. The next-pagination token. For multiple-page list results,
     * this token can be used as the
     * `ListDataSourceDefinitionsRequest.page_token`
     * to request the next page of the list results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Output only. The next-pagination token. For multiple-page list results,
     * this token can be used as the
     * `ListDataSourceDefinitionsRequest.page_token`
     * to request the next page of the list results.
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

