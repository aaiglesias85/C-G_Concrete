<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Product][google.cloud.retail.v2.Product] image. Recommendations AI and
 * Retail Search do not use product images to improve prediction and search
 * results. However, product images can be returned in results, and are shown in
 * prediction or search previews in the console.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Image</code>
 */
class Image extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. URI of the image.
     * This field must be a valid UTF-8 encoded URI with a length limit of 5,000
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     * Google Merchant Center property
     * [image_link](https://support.google.com/merchants/answer/6324350).
     * Schema.org property [Product.image](https://schema.org/image).
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $uri = '';
    /**
     * Height of the image in number of pixels.
     * This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>int32 height = 2;</code>
     */
    private $height = 0;
    /**
     * Width of the image in number of pixels.
     * This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>int32 width = 3;</code>
     */
    private $width = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. URI of the image.
     *           This field must be a valid UTF-8 encoded URI with a length limit of 5,000
     *           characters. Otherwise, an INVALID_ARGUMENT error is returned.
     *           Google Merchant Center property
     *           [image_link](https://support.google.com/merchants/answer/6324350).
     *           Schema.org property [Product.image](https://schema.org/image).
     *     @type int $height
     *           Height of the image in number of pixels.
     *           This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     *           returned.
     *     @type int $width
     *           Width of the image in number of pixels.
     *           This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     *           returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. URI of the image.
     * This field must be a valid UTF-8 encoded URI with a length limit of 5,000
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     * Google Merchant Center property
     * [image_link](https://support.google.com/merchants/answer/6324350).
     * Schema.org property [Product.image](https://schema.org/image).
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. URI of the image.
     * This field must be a valid UTF-8 encoded URI with a length limit of 5,000
     * characters. Otherwise, an INVALID_ARGUMENT error is returned.
     * Google Merchant Center property
     * [image_link](https://support.google.com/merchants/answer/6324350).
     * Schema.org property [Product.image](https://schema.org/image).
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Height of the image in number of pixels.
     * This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>int32 height = 2;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Height of the image in number of pixels.
     * This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>int32 height = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;

        return $this;
    }

    /**
     * Width of the image in number of pixels.
     * This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>int32 width = 3;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Width of the image in number of pixels.
     * This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
     * returned.
     *
     * Generated from protobuf field <code>int32 width = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->width = $var;

        return $this;
    }

}

