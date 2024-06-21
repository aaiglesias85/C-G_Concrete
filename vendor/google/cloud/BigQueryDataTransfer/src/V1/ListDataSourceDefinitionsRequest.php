<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datasource.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the request of the ListDataSourceDefinitions method.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.ListDataSourceDefinitionsRequest</code>
 */
class ListDataSourceDefinitionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The BigQuery project id for which data sources should be returned.
     * Must be in the form: `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Pagination token, which can be used to request a specific page
     * of `ListDataSourceDefinitionsRequest` list results. For multiple-page
     * results, `ListDataSourceDefinitionsResponse` outputs a `next_page` token,
     * which can be used as the `page_token` value to request the next page of
     * the list results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * Page size. The default page size is the maximum value of 1000 results.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The BigQuery project id for which data sources should be returned.
     *           Must be in the form: `projects/{project_id}/locations/{location_id}`
     *     @type string $page_token
     *           Pagination token, which can be used to request a specific page
     *           of `ListDataSourceDefinitionsRequest` list results. For multiple-page
     *           results, `ListDataSourceDefinitionsResponse` outputs a `next_page` token,
     *           which can be used as the `page_token` value to request the next page of
     *           the list results.
     *     @type int $page_size
     *           Page size. The default page size is the maximum value of 1000 results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datasource::initOnce();
        parent::__construct($data);
    }

    /**
     * The BigQuery project id for which data sources should be returned.
     * Must be in the form: `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The BigQuery project id for which data sources should be returned.
     * Must be in the form: `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Pagination token, which can be used to request a specific page
     * of `ListDataSourceDefinitionsRequest` list results. For multiple-page
     * results, `ListDataSourceDefinitionsResponse` outputs a `next_page` token,
     * which can be used as the `page_token` value to request the next page of
     * the list results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Pagination token, which can be used to request a specific page
     * of `ListDataSourceDefinitionsRequest` list results. For multiple-page
     * results, `ListDataSourceDefinitionsResponse` outputs a `next_page` token,
     * which can be used as the `page_token` value to request the next page of
     * the list results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Page size. The default page size is the maximum value of 1000 results.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Page size. The default page size is the maximum value of 1000 results.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

