<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privatecatalog/v1beta1/private_catalog.proto

namespace Google\Cloud\PrivateCatalog\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [PrivateCatalog.SearchProducts][google.cloud.privatecatalog.v1beta1.PrivateCatalog.SearchProducts].
 *
 * Generated from protobuf message <code>google.cloud.privatecatalog.v1beta1.SearchProductsRequest</code>
 */
class SearchProductsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the resource context. See [SearchCatalogsRequest.resource][google.cloud.privatecatalog.v1beta1.SearchCatalogsRequest.resource]
     * for details.
     *
     * Generated from protobuf field <code>string resource = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource = '';
    /**
     * The query to filter the products.
     * The supported queries are:
     * * List products of all catalogs: empty
     * * List products under a catalog: `parent=catalogs/{catalog}`
     * * Get a product by name:
     * `name=catalogs/{catalog}/products/{product}`
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
     * A pagination token returned from a previous call to SearchProducts that
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
     *           Required. The name of the resource context. See [SearchCatalogsRequest.resource][google.cloud.privatecatalog.v1beta1.SearchCatalogsRequest.resource]
     *           for details.
     *     @type string $query
     *           The query to filter the products.
     *           The supported queries are:
     *           * List products of all catalogs: empty
     *           * List products under a catalog: `parent=catalogs/{catalog}`
     *           * Get a product by name:
     *           `name=catalogs/{catalog}/products/{product}`
     *     @type int $page_size
     *           The maximum number of entries that are requested.
     *     @type string $page_token
     *           A pagination token returned from a previous call to SearchProducts that
     *           indicates where this listing should continue from.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privatecatalog\V1Beta1\PrivateCatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the resource context. See [SearchCatalogsRequest.resource][google.cloud.privatecatalog.v1beta1.SearchCatalogsRequest.resource]
     * for details.
     *
     * Generated from protobuf field <code>string resource = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Required. The name of the resource context. See [SearchCatalogsRequest.resource][google.cloud.privatecatalog.v1beta1.SearchCatalogsRequest.resource]
     * for details.
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
     * The query to filter the products.
     * The supported queries are:
     * * List products of all catalogs: empty
     * * List products under a catalog: `parent=catalogs/{catalog}`
     * * Get a product by name:
     * `name=catalogs/{catalog}/products/{product}`
     *
     * Generated from protobuf field <code>string query = 2;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * The query to filter the products.
     * The supported queries are:
     * * List products of all catalogs: empty
     * * List products under a catalog: `parent=catalogs/{catalog}`
     * * Get a product by name:
     * `name=catalogs/{catalog}/products/{product}`
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
     * A pagination token returned from a previous call to SearchProducts that
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
     * A pagination token returned from a previous call to SearchProducts that
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

