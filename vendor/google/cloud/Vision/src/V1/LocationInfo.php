<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detected entity location information.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.LocationInfo</code>
 */
class LocationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * lat/long location coordinates.
     *
     * Generated from protobuf field <code>.google.type.LatLng lat_lng = 1;</code>
     */
    private $lat_lng = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\LatLng $lat_lng
     *           lat/long location coordinates.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * lat/long location coordinates.
     *
     * Generated from protobuf field <code>.google.type.LatLng lat_lng = 1;</code>
     * @return \Google\Type\LatLng|null
     */
    public function getLatLng()
    {
        return $this->lat_lng;
    }

    public function hasLatLng()
    {
        return isset($this->lat_lng);
    }

    public function clearLatLng()
    {
        unset($this->lat_lng);
    }

    /**
     * lat/long location coordinates.
     *
     * Generated from protobuf field <code>.google.type.LatLng lat_lng = 1;</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setLatLng($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->lat_lng = $var;

        return $this;
    }

}

