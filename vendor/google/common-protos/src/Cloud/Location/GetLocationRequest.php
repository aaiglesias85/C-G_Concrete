<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/location/locations.proto

namespace Google\Cloud\Location;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Locations.GetLocation][google.cloud.location.Locations.GetLocation].
 *
 * Generated from protobuf message <code>google.cloud.location.GetLocationRequest</code>
 */
class GetLocationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name for the location.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name for the location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Location\Locations::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name for the location.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name for the location.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

