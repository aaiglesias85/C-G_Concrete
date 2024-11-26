<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The price information of a [Product][google.cloud.retail.v2.Product].
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.PriceInfo</code>
 */
class PriceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The 3-letter currency code defined in [ISO
     * 4217](https://www.iso.org/iso-4217-currency-codes.html).
     * If this field is an unrecognizable currency code, an INVALID_ARGUMENT
     * error is returned.
     * The [Product.Type.VARIANT][google.cloud.retail.v2.Product.Type.VARIANT]
     * [Product][google.cloud.retail.v2.Product]s with the same
     * [Product.primary_product_id][google.cloud.retail.v2.Product.primary_product_id]
     * must share the same
     * [currency_code][google.cloud.retail.v2.PriceInfo.currency_code]. Otherwise,
     * a FAILED_PRECONDITION error is returned.
     *
     * Generated from protobuf field <code>string currency_code = 1;</code>
     */
    private $currency_code = '';
    /**
     * Price of the product.
     * Google Merchant Center property
     * [price](https://support.google.com/merchants/answer/6324371). Schema.org
     * property [Offer.price](https://schema.org/price).
     *
     * Generated from protobuf field <code>float price = 2;</code>
     */
    private $price = 0.0;
    /**
     * Price of the product without any discount. If zero, by default set to be
     * the [price][google.cloud.retail.v2.PriceInfo.price]. If set,
     * [original_price][google.cloud.retail.v2.PriceInfo.original_price] should be
     * greater than or equal to [price][google.cloud.retail.v2.PriceInfo.price],
     * otherwise an INVALID_ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>float original_price = 3;</code>
     */
    private $original_price = 0.0;
    /**
     * The costs associated with the sale of a particular product. Used for gross
     * profit reporting.
     * * Profit = [price][google.cloud.retail.v2.PriceInfo.price] -
     * [cost][google.cloud.retail.v2.PriceInfo.cost]
     * Google Merchant Center property
     * [cost_of_goods_sold](https://support.google.com/merchants/answer/9017895).
     *
     * Generated from protobuf field <code>float cost = 4;</code>
     */
    private $cost = 0.0;
    /**
     * The timestamp when the [price][google.cloud.retail.v2.PriceInfo.price]
     * starts to be effective. This can be set as a future timestamp, and the
     * [price][google.cloud.retail.v2.PriceInfo.price] is only used for search
     * after
     * [price_effective_time][google.cloud.retail.v2.PriceInfo.price_effective_time].
     * If so, the
     * [original_price][google.cloud.retail.v2.PriceInfo.original_price] must be
     * set and [original_price][google.cloud.retail.v2.PriceInfo.original_price]
     * is used before
     * [price_effective_time][google.cloud.retail.v2.PriceInfo.price_effective_time].
     * Do not set if [price][google.cloud.retail.v2.PriceInfo.price] is always
     * effective because it will cause additional latency during search.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp price_effective_time = 5;</code>
     */
    private $price_effective_time = null;
    /**
     * The timestamp when the [price][google.cloud.retail.v2.PriceInfo.price]
     * stops to be effective. The [price][google.cloud.retail.v2.PriceInfo.price]
     * is used for search before
     * [price_expire_time][google.cloud.retail.v2.PriceInfo.price_expire_time]. If
     * this field is set, the
     * [original_price][google.cloud.retail.v2.PriceInfo.original_price] must be
     * set and [original_price][google.cloud.retail.v2.PriceInfo.original_price]
     * is used after
     * [price_expire_time][google.cloud.retail.v2.PriceInfo.price_expire_time].
     * Do not set if [price][google.cloud.retail.v2.PriceInfo.price] is always
     * effective because it will cause additional latency during search.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp price_expire_time = 6;</code>
     */
    private $price_expire_time = null;
    /**
     * Output only. The price range of all the child
     * [Product.Type.VARIANT][google.cloud.retail.v2.Product.Type.VARIANT]
     * [Product][google.cloud.retail.v2.Product]s grouped together on the
     * [Product.Type.PRIMARY][google.cloud.retail.v2.Product.Type.PRIMARY]
     * [Product][google.cloud.retail.v2.Product]. Only populated for
     * [Product.Type.PRIMARY][google.cloud.retail.v2.Product.Type.PRIMARY]
     * [Product][google.cloud.retail.v2.Product]s.
     * Note: This field is OUTPUT_ONLY for
     * [ProductService.GetProduct][google.cloud.retail.v2.ProductService.GetProduct].
     * Do not set this field in API requests.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.PriceInfo.PriceRange price_range = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $price_range = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $currency_code
     *           The 3-letter currency code defined in [ISO
     *           4217](https://www.iso.org/iso-4217-currency-codes.html).
     *           If this field is an unrecognizable currency code, an INVALID_ARGUMENT
     *           error is returned.
     *           The [Product.Type.VARIANT][google.cloud.retail.v2.Product.Type.VARIANT]
     *           [Product][google.cloud.retail.v2.Product]s with the same
     *           [Product.primary_product_id][google.cloud.retail.v2.Product.primary_product_id]
     *           must share the same
     *           [currency_code][google.cloud.retail.v2.PriceInfo.currency_code]. Otherwise,
     *           a FAILED_PRECONDITION error is returned.
     *     @type float $price
     *           Price of the product.
     *           Google Merchant Center property
     *           [price](https://support.google.com/merchants/answer/6324371). Schema.org
     *           property [Offer.price](https://schema.org/price).
     *     @type float $original_price
     *           Price of the product without any discount. If zero, by default set to be
     *           the [price][google.cloud.retail.v2.PriceInfo.price]. If set,
     *           [original_price][google.cloud.retail.v2.PriceInfo.original_price] should be
     *           greater than or equal to [price][google.cloud.retail.v2.PriceInfo.price],
     *           otherwise an INVALID_ARGUMENT error is thrown.
     *     @type float $cost
     *           The costs associated with the sale of a particular product. Used for gross
     *           profit reporting.
     *           * Profit = [price][google.cloud.retail.v2.PriceInfo.price] -
     *           [cost][google.cloud.retail.v2.PriceInfo.cost]
     *           Google Merchant Center property
     *           [cost_of_goods_sold](https://support.google.com/merchants/answer/9017895).
     *     @type \Google\Protobuf\Timestamp $price_effective_time
     *           The timestamp when the [price][google.cloud.retail.v2.PriceInfo.price]
     *           starts to be effective. This can be set as a future timestamp, and the
     *           [price][google.cloud.retail.v2.PriceInfo.price] is only used for search
     *           after
     *           [price_effective_time][google.cloud.retail.v2.PriceInfo.price_effective_time].
     *           If so, the
     *           [original_price][google.cloud.retail.v2.PriceInfo.original_price] must be
     *           set and [original_price][google.cloud.retail.v2.PriceInfo.original_price]
     *           is used before
     *           [price_effective_time][google.cloud.retail.v2.PriceInfo.price_effective_time].
     *           Do not set if [price][google.cloud.retail.v2.PriceInfo.price] is always
     *           effective because it will cause additional latency during search.
     *     @type \Google\Protobuf\Timestamp $price_expire_time
     *           The timestamp when the [price][google.cloud.retail.v2.PriceInfo.price]
     *           stops to be effective. The [price][google.cloud.retail.v2.PriceInfo.price]
     *           is used for search before
     *           [price_expire_time][google.cloud.retail.v2.PriceInfo.price_expire_time]. If
     *           this field is set, the
     *           [original_price][google.cloud.retail.v2.PriceInfo.original_price] must be
     *           set and [original_price][google.cloud.retail.v2.PriceInfo.original_price]
     *           is used after
     *           [price_expire_time][google.cloud.retail.v2.PriceInfo.price_expire_time].
     *           Do not set if [price][google.cloud.retail.v2.PriceInfo.price] is always
     *           effective because it will cause additional latency during search.
     *     @type \Google\Cloud\Retail\V2\PriceInfo\PriceRange $price_range
     *           Output only. The price range of all the child
     *           [Product.Type.VARIANT][google.cloud.retail.v2.Product.Type.VARIANT]
     *           [Product][google.cloud.retail.v2.Product]s grouped together on the
     *           [Product.Type.PRIMARY][google.cloud.retail.v2.Product.Type.PRIMARY]
     *           [Product][google.cloud.retail.v2.Product]. Only populated for
     *           [Product.Type.PRIMARY][google.cloud.retail.v2.Product.Type.PRIMARY]
     *           [Product][google.cloud.retail.v2.Product]s.
     *           Note: This field is OUTPUT_ONLY for
     *           [ProductService.GetProduct][google.cloud.retail.v2.ProductService.GetProduct].
     *           Do not set this field in API requests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The 3-letter currency code defined in [ISO
     * 4217](https://www.iso.org/iso-4217-currency-codes.html).
     * If this field is an unrecognizable currency code, an INVALID_ARGUMENT
     * error is returned.
     * The [Product.Type.VARIANT][google.cloud.retail.v2.Product.Type.VARIANT]
     * [Product][google.cloud.retail.v2.Product]s with the same
     * [Product.primary_product_id][google.cloud.retail.v2.Product.primary_product_id]
     * must share the same
     * [currency_code][google.cloud.retail.v2.PriceInfo.currency_code]. Otherwise,
     * a FAILED_PRECONDITION error is returned.
     *
     * Generated from protobuf field <code>string currency_code = 1;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * The 3-letter currency code defined in [ISO
     * 4217](https://www.iso.org/iso-4217-currency-codes.html).
     * If this field is an unrecognizable currency code, an INVALID_ARGUMENT
     * error is returned.
     * The [Product.Type.VARIANT][google.cloud.retail.v2.Product.Type.VARIANT]
     * [Product][google.cloud.retail.v2.Product]s with the same
     * [Product.primary_product_id][google.cloud.retail.v2.Product.primary_product_id]
     * must share the same
     * [currency_code][google.cloud.retail.v2.PriceInfo.currency_code]. Otherwise,
     * a FAILED_PRECONDITION error is returned.
     *
     * Generated from protobuf field <code>string currency_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Price of the product.
     * Google Merchant Center property
     * [price](https://support.google.com/merchants/answer/6324371). Schema.org
     * property [Offer.price](https://schema.org/price).
     *
     * Generated from protobuf field <code>float price = 2;</code>
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Price of the product.
     * Google Merchant Center property
     * [price](https://support.google.com/merchants/answer/6324371). Schema.org
     * property [Offer.price](https://schema.org/price).
     *
     * Generated from protobuf field <code>float price = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->price = $var;

        return $this;
    }

    /**
     * Price of the product without any discount. If zero, by default set to be
     * the [price][google.cloud.retail.v2.PriceInfo.price]. If set,
     * [original_price][google.cloud.retail.v2.PriceInfo.original_price] should be
     * greater than or equal to [price][google.cloud.retail.v2.PriceInfo.price],
     * otherwise an INVALID_ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>float original_price = 3;</code>
     * @return float
     */
    public function getOriginalPrice()
    {
        return $this->original_price;
    }

    /**
     * Price of the product without any discount. If zero, by default set to be
     * the [price][google.cloud.retail.v2.PriceInfo.price]. If set,
     * [original_price][google.cloud.retail.v2.PriceInfo.original_price] should be
     * greater than or equal to [price][google.cloud.retail.v2.PriceInfo.price],
     * otherwise an INVALID_ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>float original_price = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setOriginalPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->original_price = $var;

        return $this;
    }

    /**
     * The costs associated with the sale of a particular product. Used for gross
     * profit reporting.
     * * Profit = [price][google.cloud.retail.v2.PriceInfo.price] -
     * [cost][google.cloud.retail.v2.PriceInfo.cost]
     * Google Merchant Center property
     * [cost_of_goods_sold](https://support.google.com/merchants/answer/9017895).
     *
     * Generated from protobuf field <code>float cost = 4;</code>
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * The costs associated with the sale of a particular product. Used for gross
     * profit reporting.
     * * Profit = [price][google.cloud.retail.v2.PriceInfo.price] -
     * [cost][google.cloud.retail.v2.PriceInfo.cost]
     * Google Merchant Center property
     * [cost_of_goods_sold](https://support.google.com/merchants/answer/9017895).
     *
     * Generated from protobuf field <code>float cost = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setCost($var)
    {
        GPBUtil::checkFloat($var);
        $this->cost = $var;

        return $this;
    }

    /**
     * The timestamp when the [price][google.cloud.retail.v2.PriceInfo.price]
     * starts to be effective. This can be set as a future timestamp, and the
     * [price][google.cloud.retail.v2.PriceInfo.price] is only used for search
     * after
     * [price_effective_time][google.cloud.retail.v2.PriceInfo.price_effective_time].
     * If so, the
     * [original_price][google.cloud.retail.v2.PriceInfo.original_price] must be
     * set and [original_price][google.cloud.retail.v2.PriceInfo.original_price]
     * is used before
     * [price_effective_time][google.cloud.retail.v2.PriceInfo.price_effective_time].
     * Do not set if [price][google.cloud.retail.v2.PriceInfo.price] is always
     * effective because it will cause additional latency during search.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp price_effective_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPriceEffectiveTime()
    {
        return $this->price_effective_time;
    }

    public function hasPriceEffectiveTime()
    {
        return isset($this->price_effective_time);
    }

    public function clearPriceEffectiveTime()
    {
        unset($this->price_effective_time);
    }

    /**
     * The timestamp when the [price][google.cloud.retail.v2.PriceInfo.price]
     * starts to be effective. This can be set as a future timestamp, and the
     * [price][google.cloud.retail.v2.PriceInfo.price] is only used for search
     * after
     * [price_effective_time][google.cloud.retail.v2.PriceInfo.price_effective_time].
     * If so, the
     * [original_price][google.cloud.retail.v2.PriceInfo.original_price] must be
     * set and [original_price][google.cloud.retail.v2.PriceInfo.original_price]
     * is used before
     * [price_effective_time][google.cloud.retail.v2.PriceInfo.price_effective_time].
     * Do not set if [price][google.cloud.retail.v2.PriceInfo.price] is always
     * effective because it will cause additional latency during search.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp price_effective_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPriceEffectiveTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->price_effective_time = $var;

        return $this;
    }

    /**
     * The timestamp when the [price][google.cloud.retail.v2.PriceInfo.price]
     * stops to be effective. The [price][google.cloud.retail.v2.PriceInfo.price]
     * is used for search before
     * [price_expire_time][google.cloud.retail.v2.PriceInfo.price_expire_time]. If
     * this field is set, the
     * [original_price][google.cloud.retail.v2.PriceInfo.original_price] must be
     * set and [original_price][google.cloud.retail.v2.PriceInfo.original_price]
     * is used after
     * [price_expire_time][google.cloud.retail.v2.PriceInfo.price_expire_time].
     * Do not set if [price][google.cloud.retail.v2.PriceInfo.price] is always
     * effective because it will cause additional latency during search.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp price_expire_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPriceExpireTime()
    {
        return $this->price_expire_time;
    }

    public function hasPriceExpireTime()
    {
        return isset($this->price_expire_time);
    }

    public function clearPriceExpireTime()
    {
        unset($this->price_expire_time);
    }

    /**
     * The timestamp when the [price][google.cloud.retail.v2.PriceInfo.price]
     * stops to be effective. The [price][google.cloud.retail.v2.PriceInfo.price]
     * is used for search before
     * [price_expire_time][google.cloud.retail.v2.PriceInfo.price_expire_time]. If
     * this field is set, the
     * [original_price][google.cloud.retail.v2.PriceInfo.original_price] must be
     * set and [original_price][google.cloud.retail.v2.PriceInfo.original_price]
     * is used after
     * [price_expire_time][google.cloud.retail.v2.PriceInfo.price_expire_time].
     * Do not set if [price][google.cloud.retail.v2.PriceInfo.price] is always
     * effective because it will cause additional latency during search.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp price_expire_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPriceExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->price_expire_time = $var;

        return $this;
    }

    /**
     * Output only. The price range of all the child
     * [Product.Type.VARIANT][google.cloud.retail.v2.Product.Type.VARIANT]
     * [Product][google.cloud.retail.v2.Product]s grouped together on the
     * [Product.Type.PRIMARY][google.cloud.retail.v2.Product.Type.PRIMARY]
     * [Product][google.cloud.retail.v2.Product]. Only populated for
     * [Product.Type.PRIMARY][google.cloud.retail.v2.Product.Type.PRIMARY]
     * [Product][google.cloud.retail.v2.Product]s.
     * Note: This field is OUTPUT_ONLY for
     * [ProductService.GetProduct][google.cloud.retail.v2.ProductService.GetProduct].
     * Do not set this field in API requests.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.PriceInfo.PriceRange price_range = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Retail\V2\PriceInfo\PriceRange|null
     */
    public function getPriceRange()
    {
        return $this->price_range;
    }

    public function hasPriceRange()
    {
        return isset($this->price_range);
    }

    public function clearPriceRange()
    {
        unset($this->price_range);
    }

    /**
     * Output only. The price range of all the child
     * [Product.Type.VARIANT][google.cloud.retail.v2.Product.Type.VARIANT]
     * [Product][google.cloud.retail.v2.Product]s grouped together on the
     * [Product.Type.PRIMARY][google.cloud.retail.v2.Product.Type.PRIMARY]
     * [Product][google.cloud.retail.v2.Product]. Only populated for
     * [Product.Type.PRIMARY][google.cloud.retail.v2.Product.Type.PRIMARY]
     * [Product][google.cloud.retail.v2.Product]s.
     * Note: This field is OUTPUT_ONLY for
     * [ProductService.GetProduct][google.cloud.retail.v2.ProductService.GetProduct].
     * Do not set this field in API requests.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.PriceInfo.PriceRange price_range = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Retail\V2\PriceInfo\PriceRange $var
     * @return $this
     */
    public function setPriceRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\PriceInfo\PriceRange::class);
        $this->price_range = $var;

        return $this;
    }

}

