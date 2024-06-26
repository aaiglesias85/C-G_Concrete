<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/import_config.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The input config source for products.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.ProductInputConfig</code>
 */
class ProductInputConfig extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Retail\V2\ProductInlineSource $product_inline_source
     *           The Inline source for the input content for products.
     *     @type \Google\Cloud\Retail\V2\GcsSource $gcs_source
     *           Google Cloud Storage location for the input content.
     *     @type \Google\Cloud\Retail\V2\BigQuerySource $big_query_source
     *           BigQuery input source.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * The Inline source for the input content for products.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ProductInlineSource product_inline_source = 1;</code>
     * @return \Google\Cloud\Retail\V2\ProductInlineSource|null
     */
    public function getProductInlineSource()
    {
        return $this->readOneof(1);
    }

    public function hasProductInlineSource()
    {
        return $this->hasOneof(1);
    }

    /**
     * The Inline source for the input content for products.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ProductInlineSource product_inline_source = 1;</code>
     * @param \Google\Cloud\Retail\V2\ProductInlineSource $var
     * @return $this
     */
    public function setProductInlineSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\ProductInlineSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.GcsSource gcs_source = 2;</code>
     * @return \Google\Cloud\Retail\V2\GcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(2);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.GcsSource gcs_source = 2;</code>
     * @param \Google\Cloud\Retail\V2\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\GcsSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * BigQuery input source.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.BigQuerySource big_query_source = 3;</code>
     * @return \Google\Cloud\Retail\V2\BigQuerySource|null
     */
    public function getBigQuerySource()
    {
        return $this->readOneof(3);
    }

    public function hasBigQuerySource()
    {
        return $this->hasOneof(3);
    }

    /**
     * BigQuery input source.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.BigQuerySource big_query_source = 3;</code>
     * @param \Google\Cloud\Retail\V2\BigQuerySource $var
     * @return $this
     */
    public function setBigQuerySource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\BigQuerySource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

