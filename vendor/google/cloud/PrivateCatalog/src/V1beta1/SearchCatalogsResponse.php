<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privatecatalog/v1beta1/private_catalog.proto

namespace Google\Cloud\PrivateCatalog\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [PrivateCatalog.SearchCatalogs][google.cloud.privatecatalog.v1beta1.PrivateCatalog.SearchCatalogs].
 *
 * Generated from protobuf message <code>google.cloud.privatecatalog.v1beta1.SearchCatalogsResponse</code>
 */
class SearchCatalogsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The `Catalog`s computed from the resource context.
     *
     * Generated from protobuf field <code>repeated .google.cloud.privatecatalog.v1beta1.Catalog catalogs = 1;</code>
     */
    private $catalogs;
    /**
     * A pagination token returned from a previous call to SearchCatalogs that
     * indicates from where listing should continue.
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
     *     @type \Google\Cloud\PrivateCatalog\V1beta1\Catalog[]|\Google\Protobuf\Internal\RepeatedField $catalogs
     *           The `Catalog`s computed from the resource context.
     *     @type string $next_page_token
     *           A pagination token returned from a previous call to SearchCatalogs that
     *           indicates from where listing should continue.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privatecatalog\V1Beta1\PrivateCatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The `Catalog`s computed from the resource context.
     *
     * Generated from protobuf field <code>repeated .google.cloud.privatecatalog.v1beta1.Catalog catalogs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }

    /**
     * The `Catalog`s computed from the resource context.
     *
     * Generated from protobuf field <code>repeated .google.cloud.privatecatalog.v1beta1.Catalog catalogs = 1;</code>
     * @param \Google\Cloud\PrivateCatalog\V1beta1\Catalog[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCatalogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\PrivateCatalog\V1beta1\Catalog::class);
        $this->catalogs = $arr;

        return $this;
    }

    /**
     * A pagination token returned from a previous call to SearchCatalogs that
     * indicates from where listing should continue.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A pagination token returned from a previous call to SearchCatalogs that
     * indicates from where listing should continue.
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

