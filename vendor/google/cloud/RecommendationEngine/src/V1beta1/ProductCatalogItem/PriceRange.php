<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/catalog.proto

namespace Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Product price range when there are a range of prices for different
 * variations of the same product.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.ProductCatalogItem.PriceRange</code>
 */
class PriceRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The minimum product price.
     *
     * Generated from protobuf field <code>float min = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $min = 0.0;
    /**
     * Required. The maximum product price.
     *
     * Generated from protobuf field <code>float max = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $max = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $min
     *           Required. The minimum product price.
     *     @type float $max
     *           Required. The maximum product price.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The minimum product price.
     *
     * Generated from protobuf field <code>float min = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Required. The minimum product price.
     *
     * Generated from protobuf field <code>float min = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkFloat($var);
        $this->min = $var;

        return $this;
    }

    /**
     * Required. The maximum product price.
     *
     * Generated from protobuf field <code>float max = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Required. The maximum product price.
     *
     * Generated from protobuf field <code>float max = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkFloat($var);
        $this->max = $var;

        return $this;
    }

}


