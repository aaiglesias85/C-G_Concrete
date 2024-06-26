<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [SearchCatalog][google.cloud.datacatalog.v1.DataCatalog.SearchCatalog].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.SearchCatalogResponse</code>
 */
class SearchCatalogResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Search results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.SearchCatalogResult results = 1;</code>
     */
    private $results;
    /**
     * Pagination token that can be used in subsequent calls to retrieve the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     */
    private $next_page_token = '';
    /**
     * Unreachable locations. Search results don't include data from those
     * locations.
     * To get additional information on an error, repeat the search request and
     * restrict it to specific locations by setting the
     * `SearchCatalogRequest.scope.restricted_locations` parameter.
     *
     * Generated from protobuf field <code>repeated string unreachable = 6;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\SearchCatalogResult[]|\Google\Protobuf\Internal\RepeatedField $results
     *           Search results.
     *     @type string $next_page_token
     *           Pagination token that can be used in subsequent calls to retrieve the next
     *           page of results.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Unreachable locations. Search results don't include data from those
     *           locations.
     *           To get additional information on an error, repeat the search request and
     *           restrict it to specific locations by setting the
     *           `SearchCatalogRequest.scope.restricted_locations` parameter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Search results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.SearchCatalogResult results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Search results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.SearchCatalogResult results = 1;</code>
     * @param \Google\Cloud\DataCatalog\V1\SearchCatalogResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\SearchCatalogResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * Pagination token that can be used in subsequent calls to retrieve the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Pagination token that can be used in subsequent calls to retrieve the next
     * page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Unreachable locations. Search results don't include data from those
     * locations.
     * To get additional information on an error, repeat the search request and
     * restrict it to specific locations by setting the
     * `SearchCatalogRequest.scope.restricted_locations` parameter.
     *
     * Generated from protobuf field <code>repeated string unreachable = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Unreachable locations. Search results don't include data from those
     * locations.
     * To get additional information on an error, repeat the search request and
     * restrict it to specific locations by setting the
     * `SearchCatalogRequest.scope.restricted_locations` parameter.
     *
     * Generated from protobuf field <code>repeated string unreachable = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

