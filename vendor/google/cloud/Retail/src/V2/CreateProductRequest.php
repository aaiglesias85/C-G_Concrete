<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/product_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CreateProduct][] method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.CreateProductRequest</code>
 */
class CreateProductRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent catalog resource name, such as
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/branches/default_branch`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The [Product][google.cloud.retail.v2.Product] to create.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Product product = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $product = null;
    /**
     * Required. The ID to use for the [Product][google.cloud.retail.v2.Product],
     * which will become the final component of the
     * [Product.name][google.cloud.retail.v2.Product.name].
     * If the caller does not have permission to create the
     * [Product][google.cloud.retail.v2.Product], regardless of whether or not it
     * exists, a PERMISSION_DENIED error is returned.
     * This field must be unique among all
     * [Product][google.cloud.retail.v2.Product]s with the same
     * [parent][google.cloud.retail.v2.CreateProductRequest.parent]. Otherwise, an
     * ALREADY_EXISTS error is returned.
     * This field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string product_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $product_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent catalog resource name, such as
     *           `projects/&#42;&#47;locations/global/catalogs/default_catalog/branches/default_branch`.
     *     @type \Google\Cloud\Retail\V2\Product $product
     *           Required. The [Product][google.cloud.retail.v2.Product] to create.
     *     @type string $product_id
     *           Required. The ID to use for the [Product][google.cloud.retail.v2.Product],
     *           which will become the final component of the
     *           [Product.name][google.cloud.retail.v2.Product.name].
     *           If the caller does not have permission to create the
     *           [Product][google.cloud.retail.v2.Product], regardless of whether or not it
     *           exists, a PERMISSION_DENIED error is returned.
     *           This field must be unique among all
     *           [Product][google.cloud.retail.v2.Product]s with the same
     *           [parent][google.cloud.retail.v2.CreateProductRequest.parent]. Otherwise, an
     *           ALREADY_EXISTS error is returned.
     *           This field must be a UTF-8 encoded string with a length limit of 128
     *           characters. Otherwise, an INVALID_ARGUMENT error is returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\ProductService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent catalog resource name, such as
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/branches/default_branch`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent catalog resource name, such as
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/branches/default_branch`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The [Product][google.cloud.retail.v2.Product] to create.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Product product = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2\Product|null
     */
    public function getProduct()
    {
        return $this->product;
    }

    public function hasProduct()
    {
        return isset($this->product);
    }

    public function clearProduct()
    {
        unset($this->product);
    }

    /**
     * Required. The [Product][google.cloud.retail.v2.Product] to create.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Product product = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2\Product $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Product::class);
        $this->product = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the [Product][google.cloud.retail.v2.Product],
     * which will become the final component of the
     * [Product.name][google.cloud.retail.v2.Product.name].
     * If the caller does not have permission to create the
     * [Product][google.cloud.retail.v2.Product], regardless of whether or not it
     * exists, a PERMISSION_DENIED error is returned.
     * This field must be unique among all
     * [Product][google.cloud.retail.v2.Product]s with the same
     * [parent][google.cloud.retail.v2.CreateProductRequest.parent]. Otherwise, an
     * ALREADY_EXISTS error is returned.
     * This field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string product_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Required. The ID to use for the [Product][google.cloud.retail.v2.Product],
     * which will become the final component of the
     * [Product.name][google.cloud.retail.v2.Product.name].
     * If the caller does not have permission to create the
     * [Product][google.cloud.retail.v2.Product], regardless of whether or not it
     * exists, a PERMISSION_DENIED error is returned.
     * This field must be unique among all
     * [Product][google.cloud.retail.v2.Product]s with the same
     * [parent][google.cloud.retail.v2.CreateProductRequest.parent]. Otherwise, an
     * ALREADY_EXISTS error is returned.
     * This field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string product_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProductId($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_id = $var;

        return $this;
    }

}

