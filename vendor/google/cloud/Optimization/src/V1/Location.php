<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encapsulates a location (a geographic point, and an optional heading).
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.Location</code>
 */
class Location extends \Google\Protobuf\Internal\Message
{
    /**
     * The waypoint's geographic coordinates.
     *
     * Generated from protobuf field <code>.google.type.LatLng lat_lng = 1;</code>
     */
    private $lat_lng = null;
    /**
     * The compass heading associated with the direction of the flow of traffic.
     * This value is used to specify the side of the road to use for pickup and
     * drop-off. Heading values can be from 0 to 360, where 0 specifies a heading
     * of due North, 90 specifies a heading of due East, etc.
     *
     * Generated from protobuf field <code>optional int32 heading = 2;</code>
     */
    private $heading = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\LatLng $lat_lng
     *           The waypoint's geographic coordinates.
     *     @type int $heading
     *           The compass heading associated with the direction of the flow of traffic.
     *           This value is used to specify the side of the road to use for pickup and
     *           drop-off. Heading values can be from 0 to 360, where 0 specifies a heading
     *           of due North, 90 specifies a heading of due East, etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * The waypoint's geographic coordinates.
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
     * The waypoint's geographic coordinates.
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

    /**
     * The compass heading associated with the direction of the flow of traffic.
     * This value is used to specify the side of the road to use for pickup and
     * drop-off. Heading values can be from 0 to 360, where 0 specifies a heading
     * of due North, 90 specifies a heading of due East, etc.
     *
     * Generated from protobuf field <code>optional int32 heading = 2;</code>
     * @return int
     */
    public function getHeading()
    {
        return isset($this->heading) ? $this->heading : 0;
    }

    public function hasHeading()
    {
        return isset($this->heading);
    }

    public function clearHeading()
    {
        unset($this->heading);
    }

    /**
     * The compass heading associated with the direction of the flow of traffic.
     * This value is used to specify the side of the road to use for pickup and
     * drop-off. Heading values can be from 0 to 360, where 0 specifies a heading
     * of due North, 90 specifies a heading of due East, etc.
     *
     * Generated from protobuf field <code>optional int32 heading = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHeading($var)
    {
        GPBUtil::checkInt32($var);
        $this->heading = $var;

        return $this;
    }

}

