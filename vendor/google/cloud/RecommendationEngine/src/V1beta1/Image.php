<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/catalog.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Catalog item thumbnail/detail image.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.Image</code>
 */
class Image extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. URL of the image with a length limit of 5 KiB.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $uri = '';
    /**
     * Optional. Height of the image in number of pixels.
     *
     * Generated from protobuf field <code>int32 height = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $height = 0;
    /**
     * Optional. Width of the image in number of pixels.
     *
     * Generated from protobuf field <code>int32 width = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $width = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. URL of the image with a length limit of 5 KiB.
     *     @type int $height
     *           Optional. Height of the image in number of pixels.
     *     @type int $width
     *           Optional. Width of the image in number of pixels.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. URL of the image with a length limit of 5 KiB.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. URL of the image with a length limit of 5 KiB.
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
     * Optional. Height of the image in number of pixels.
     *
     * Generated from protobuf field <code>int32 height = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Optional. Height of the image in number of pixels.
     *
     * Generated from protobuf field <code>int32 height = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Width of the image in number of pixels.
     *
     * Generated from protobuf field <code>int32 width = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Optional. Width of the image in number of pixels.
     *
     * Generated from protobuf field <code>int32 width = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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

