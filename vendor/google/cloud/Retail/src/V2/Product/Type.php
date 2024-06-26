<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/product.proto

namespace Google\Cloud\Retail\V2\Product;

use UnexpectedValueException;

/**
 * The type of this product.
 *
 * Protobuf type <code>google.cloud.retail.v2.Product.Type</code>
 */
class Type
{
    /**
     * Default value. Default to
     * [Catalog.product_level_config.ingestion_product_type][google.cloud.retail.v2.ProductLevelConfig.ingestion_product_type]
     * if unset.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * The primary type.
     * As the primary unit for predicting, indexing and search serving, a
     * [Type.PRIMARY][google.cloud.retail.v2.Product.Type.PRIMARY]
     * [Product][google.cloud.retail.v2.Product] is grouped with multiple
     * [Type.VARIANT][google.cloud.retail.v2.Product.Type.VARIANT]
     * [Product][google.cloud.retail.v2.Product]s.
     *
     * Generated from protobuf enum <code>PRIMARY = 1;</code>
     */
    const PRIMARY = 1;
    /**
     * The variant type.
     * [Type.VARIANT][google.cloud.retail.v2.Product.Type.VARIANT]
     * [Product][google.cloud.retail.v2.Product]s usually share some common
     * attributes on the same
     * [Type.PRIMARY][google.cloud.retail.v2.Product.Type.PRIMARY]
     * [Product][google.cloud.retail.v2.Product]s, but they have variant
     * attributes like different colors, sizes and prices, etc.
     *
     * Generated from protobuf enum <code>VARIANT = 2;</code>
     */
    const VARIANT = 2;
    /**
     * The collection type. Collection products are bundled
     * [Type.PRIMARY][google.cloud.retail.v2.Product.Type.PRIMARY]
     * [Product][google.cloud.retail.v2.Product]s or
     * [Type.VARIANT][google.cloud.retail.v2.Product.Type.VARIANT]
     * [Product][google.cloud.retail.v2.Product]s that are sold together, such
     * as a jewelry set with necklaces, earrings and rings, etc.
     *
     * Generated from protobuf enum <code>COLLECTION = 3;</code>
     */
    const COLLECTION = 3;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::PRIMARY => 'PRIMARY',
        self::VARIANT => 'VARIANT',
        self::COLLECTION => 'COLLECTION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


