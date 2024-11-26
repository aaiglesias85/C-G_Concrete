<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Rectangle determined by min and max `LatLng` pairs.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.LatLongRect</code>
 */
class LatLongRect extends \Google\Protobuf\Internal\Message
{
    /**
     * Min lat/long pair.
     *
     * Generated from protobuf field <code>.google.type.LatLng min_lat_lng = 1;</code>
     */
    private $min_lat_lng = null;
    /**
     * Max lat/long pair.
     *
     * Generated from protobuf field <code>.google.type.LatLng max_lat_lng = 2;</code>
     */
    private $max_lat_lng = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\LatLng $min_lat_lng
     *           Min lat/long pair.
     *     @type \Google\Type\LatLng $max_lat_lng
     *           Max lat/long pair.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * Min lat/long pair.
     *
     * Generated from protobuf field <code>.google.type.LatLng min_lat_lng = 1;</code>
     * @return \Google\Type\LatLng|null
     */
    public function getMinLatLng()
    {
        return $this->min_lat_lng;
    }

    public function hasMinLatLng()
    {
        return isset($this->min_lat_lng);
    }

    public function clearMinLatLng()
    {
        unset($this->min_lat_lng);
    }

    /**
     * Min lat/long pair.
     *
     * Generated from protobuf field <code>.google.type.LatLng min_lat_lng = 1;</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setMinLatLng($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->min_lat_lng = $var;

        return $this;
    }

    /**
     * Max lat/long pair.
     *
     * Generated from protobuf field <code>.google.type.LatLng max_lat_lng = 2;</code>
     * @return \Google\Type\LatLng|null
     */
    public function getMaxLatLng()
    {
        return $this->max_lat_lng;
    }

    public function hasMaxLatLng()
    {
        return isset($this->max_lat_lng);
    }

    public function clearMaxLatLng()
    {
        unset($this->max_lat_lng);
    }

    /**
     * Max lat/long pair.
     *
     * Generated from protobuf field <code>.google.type.LatLng max_lat_lng = 2;</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setMaxLatLng($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->max_lat_lng = $var;

        return $this;
    }

}

