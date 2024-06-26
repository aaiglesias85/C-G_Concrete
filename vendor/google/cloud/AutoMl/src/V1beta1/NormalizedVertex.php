<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/geometry.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A vertex represents a 2D point in the image.
 * The normalized vertex coordinates are between 0 to 1 fractions relative to
 * the original plane (image, video). E.g. if the plane (e.g. whole image) would
 * have size 10 x 20 then a point with normalized coordinates (0.1, 0.3) would
 * be at the position (1, 6) on that plane.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.NormalizedVertex</code>
 */
class NormalizedVertex extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Horizontal coordinate.
     *
     * Generated from protobuf field <code>float x = 1;</code>
     */
    private $x = 0.0;
    /**
     * Required. Vertical coordinate.
     *
     * Generated from protobuf field <code>float y = 2;</code>
     */
    private $y = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $x
     *           Required. Horizontal coordinate.
     *     @type float $y
     *           Required. Vertical coordinate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Geometry::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Horizontal coordinate.
     *
     * Generated from protobuf field <code>float x = 1;</code>
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Required. Horizontal coordinate.
     *
     * Generated from protobuf field <code>float x = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setX($var)
    {
        GPBUtil::checkFloat($var);
        $this->x = $var;

        return $this;
    }

    /**
     * Required. Vertical coordinate.
     *
     * Generated from protobuf field <code>float y = 2;</code>
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Required. Vertical coordinate.
     *
     * Generated from protobuf field <code>float y = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setY($var)
    {
        GPBUtil::checkFloat($var);
        $this->y = $var;

        return $this;
    }

}

