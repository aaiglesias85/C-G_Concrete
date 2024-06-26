<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [SearchCatalog][google.cloud.datacatalog.v1.DataCatalog.SearchCatalog].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.SearchCatalogRequest</code>
 */
class SearchCatalogRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The scope of this search request.
     * The `scope` is invalid if `include_org_ids`, `include_project_ids` are
     * empty AND `include_gcp_public_datasets` is set to `false`. In this case,
     * the request returns an error.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SearchCatalogRequest.Scope scope = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $scope = null;
    /**
     * Optional. The query string with a minimum of 3 characters and specific syntax.
     * For more information, see
     * [Data Catalog search
     * syntax](https://cloud.google.com/data-catalog/docs/how-to/search-reference).
     * An empty query string returns all data assets (in the specified scope)
     * that you have access to.
     * A query string can be a simple `xyz` or qualified by predicates:
     * * `name:x`
     * * `column:y`
     * * `description:z`
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $query = '';
    /**
     * Number of results to return in a single search page.
     * Can't be negative or 0, defaults to 10 in this case.
     * The maximum number is 1000. If exceeded, throws an "invalid argument"
     * exception.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Optional. Pagination token that, if specified, returns the next page of search
     * results. If empty, returns the first page.
     * This token is returned in the [SearchCatalogResponse.next_page_token][google.cloud.datacatalog.v1.SearchCatalogResponse.next_page_token]
     * field of the response to a previous
     * [SearchCatalogRequest][google.cloud.datacatalog.v1.DataCatalog.SearchCatalog]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Specifies the order of results.
     * Currently supported case-sensitive values are:
     * * `relevance` that can only be descending
     * * `last_modified_timestamp [asc|desc]` with descending (`desc`) as default
     * * `default` that can only be descending
     * If this parameter is omitted, it defaults to the descending `relevance`.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    private $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\SearchCatalogRequest\Scope $scope
     *           Required. The scope of this search request.
     *           The `scope` is invalid if `include_org_ids`, `include_project_ids` are
     *           empty AND `include_gcp_public_datasets` is set to `false`. In this case,
     *           the request returns an error.
     *     @type string $query
     *           Optional. The query string with a minimum of 3 characters and specific syntax.
     *           For more information, see
     *           [Data Catalog search
     *           syntax](https://cloud.google.com/data-catalog/docs/how-to/search-reference).
     *           An empty query string returns all data assets (in the specified scope)
     *           that you have access to.
     *           A query string can be a simple `xyz` or qualified by predicates:
     *           * `name:x`
     *           * `column:y`
     *           * `description:z`
     *     @type int $page_size
     *           Number of results to return in a single search page.
     *           Can't be negative or 0, defaults to 10 in this case.
     *           The maximum number is 1000. If exceeded, throws an "invalid argument"
     *           exception.
     *     @type string $page_token
     *           Optional. Pagination token that, if specified, returns the next page of search
     *           results. If empty, returns the first page.
     *           This token is returned in the [SearchCatalogResponse.next_page_token][google.cloud.datacatalog.v1.SearchCatalogResponse.next_page_token]
     *           field of the response to a previous
     *           [SearchCatalogRequest][google.cloud.datacatalog.v1.DataCatalog.SearchCatalog]
     *           call.
     *     @type string $order_by
     *           Specifies the order of results.
     *           Currently supported case-sensitive values are:
     *           * `relevance` that can only be descending
     *           * `last_modified_timestamp [asc|desc]` with descending (`desc`) as default
     *           * `default` that can only be descending
     *           If this parameter is omitted, it defaults to the descending `relevance`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The scope of this search request.
     * The `scope` is invalid if `include_org_ids`, `include_project_ids` are
     * empty AND `include_gcp_public_datasets` is set to `false`. In this case,
     * the request returns an error.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SearchCatalogRequest.Scope scope = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataCatalog\V1\SearchCatalogRequest\Scope|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    public function hasScope()
    {
        return isset($this->scope);
    }

    public function clearScope()
    {
        unset($this->scope);
    }

    /**
     * Required. The scope of this search request.
     * The `scope` is invalid if `include_org_ids`, `include_project_ids` are
     * empty AND `include_gcp_public_datasets` is set to `false`. In this case,
     * the request returns an error.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.SearchCatalogRequest.Scope scope = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataCatalog\V1\SearchCatalogRequest\Scope $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\SearchCatalogRequest\Scope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * Optional. The query string with a minimum of 3 characters and specific syntax.
     * For more information, see
     * [Data Catalog search
     * syntax](https://cloud.google.com/data-catalog/docs/how-to/search-reference).
     * An empty query string returns all data assets (in the specified scope)
     * that you have access to.
     * A query string can be a simple `xyz` or qualified by predicates:
     * * `name:x`
     * * `column:y`
     * * `description:z`
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Optional. The query string with a minimum of 3 characters and specific syntax.
     * For more information, see
     * [Data Catalog search
     * syntax](https://cloud.google.com/data-catalog/docs/how-to/search-reference).
     * An empty query string returns all data assets (in the specified scope)
     * that you have access to.
     * A query string can be a simple `xyz` or qualified by predicates:
     * * `name:x`
     * * `column:y`
     * * `description:z`
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Number of results to return in a single search page.
     * Can't be negative or 0, defaults to 10 in this case.
     * The maximum number is 1000. If exceeded, throws an "invalid argument"
     * exception.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of results to return in a single search page.
     * Can't be negative or 0, defaults to 10 in this case.
     * The maximum number is 1000. If exceeded, throws an "invalid argument"
     * exception.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. Pagination token that, if specified, returns the next page of search
     * results. If empty, returns the first page.
     * This token is returned in the [SearchCatalogResponse.next_page_token][google.cloud.datacatalog.v1.SearchCatalogResponse.next_page_token]
     * field of the response to a previous
     * [SearchCatalogRequest][google.cloud.datacatalog.v1.DataCatalog.SearchCatalog]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Pagination token that, if specified, returns the next page of search
     * results. If empty, returns the first page.
     * This token is returned in the [SearchCatalogResponse.next_page_token][google.cloud.datacatalog.v1.SearchCatalogResponse.next_page_token]
     * field of the response to a previous
     * [SearchCatalogRequest][google.cloud.datacatalog.v1.DataCatalog.SearchCatalog]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Specifies the order of results.
     * Currently supported case-sensitive values are:
     * * `relevance` that can only be descending
     * * `last_modified_timestamp [asc|desc]` with descending (`desc`) as default
     * * `default` that can only be descending
     * If this parameter is omitted, it defaults to the descending `relevance`.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Specifies the order of results.
     * Currently supported case-sensitive values are:
     * * `relevance` that can only be descending
     * * `last_modified_timestamp [asc|desc]` with descending (`desc`) as default
     * * `default` that can only be descending
     * If this parameter is omitted, it defaults to the descending `relevance`.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

