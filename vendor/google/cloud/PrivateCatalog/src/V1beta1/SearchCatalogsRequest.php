<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privatecatalog/v1beta1/private_catalog.proto

namespace Google\Cloud\PrivateCatalog\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [PrivateCatalog.SearchCatalogs][google.cloud.privatecatalog.v1beta1.PrivateCatalog.SearchCatalogs].
 *
 * Generated from protobuf message <code>google.cloud.privatecatalog.v1beta1.SearchCatalogsRequest</code>
 */
class SearchCatalogsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the resource context. It can be in following formats:
     * * `projects/{project}`
     * * `folders/{folder}`
     * * `organizations/{organization}`
     *
     * Generated from protobuf field <code>string resource = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource = '';
    /**
     * The query to filter the catalogs. The supported queries are:
     * * Get a single catalog: `name=catalogs/{catalog}`
     *
     * Generated from protobuf field <code>string query = 2;</code>
     */
    private $query = '';
    /**
     * The maximum number of entries that are requested.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * A pagination token returned from a previous call to SearchCatalogs that
     * indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource
     *           Required. The name of the resource context. It can be in following formats:
     *           * `projects/{project}`
     *           * `folders/{folder}`
     *           * `organizations/{organization}`
     *     @type string $query
     *           The query to filter the catalogs. The supported queries are:
     *           * Get a single catalog: `name=catalogs/{catalog}`
     *     @type int $page_size
     *           The maximum number of entries that are requested.
     *     @type string $page_token
     *           A pagination token returned from a previous call to SearchCatalogs that
     *           indicates where this listing should continue from.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privatecatalog\V1Beta1\PrivateCatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the resource context. It can be in following formats:
     * * `projects/{project}`
     * * `folders/{folder}`
     * * `organizations/{organization}`
     *
     * Generated from protobuf field <code>string resource = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Required. The name of the resource context. It can be in following formats:
     * * `projects/{project}`
     * * `folders/{folder}`
     * * `organizations/{organization}`
     *
     * Generated from protobuf field <code>string resource = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * The query to filter the catalogs. The supported queries are:
     * * Get a single catalog: `name=catalogs/{catalog}`
     *
     * Generated from protobuf field <code>string query = 2;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * The query to filter the catalogs. The supported queries are:
     * * Get a single catalog: `name=catalogs/{catalog}`
     *
     * Generated from protobuf field <code>string query = 2;</code>
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
     * The maximum number of entries that are requested.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of entries that are requested.
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

    /**
     * A pagination token returned from a previous call to SearchCatalogs that
     * indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A pagination token returned from a previous call to SearchCatalogs that
     * indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

