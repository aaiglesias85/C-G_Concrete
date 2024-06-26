<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/catalog.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The catalog configuration.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Catalog</code>
 */
class Catalog extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Immutable. The fully qualified resource name of the catalog.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $name = '';
    /**
     * Required. Immutable. The catalog display name.
     * This field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $display_name = '';
    /**
     * Required. The product level configuration.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ProductLevelConfig product_level_config = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $product_level_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Immutable. The fully qualified resource name of the catalog.
     *     @type string $display_name
     *           Required. Immutable. The catalog display name.
     *           This field must be a UTF-8 encoded string with a length limit of 128
     *           characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *     @type \Google\Cloud\Retail\V2\ProductLevelConfig $product_level_config
     *           Required. The product level configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Immutable. The fully qualified resource name of the catalog.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Immutable. The fully qualified resource name of the catalog.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Immutable. The catalog display name.
     * This field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Immutable. The catalog display name.
     * This field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. The product level configuration.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ProductLevelConfig product_level_config = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2\ProductLevelConfig|null
     */
    public function getProductLevelConfig()
    {
        return $this->product_level_config;
    }

    public function hasProductLevelConfig()
    {
        return isset($this->product_level_config);
    }

    public function clearProductLevelConfig()
    {
        unset($this->product_level_config);
    }

    /**
     * Required. The product level configuration.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.ProductLevelConfig product_level_config = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2\ProductLevelConfig $var
     * @return $this
     */
    public function setProductLevelConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\ProductLevelConfig::class);
        $this->product_level_config = $var;

        return $this;
    }

}

