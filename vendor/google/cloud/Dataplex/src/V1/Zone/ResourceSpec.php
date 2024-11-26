<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/resources.proto

namespace Google\Cloud\Dataplex\V1\Zone;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for resources attached as assets within a zone.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Zone.ResourceSpec</code>
 */
class ResourceSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Immutable. The location type of the resources that are allowed to be attached to the
     * assets within this zone.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Zone.ResourceSpec.LocationType location_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $location_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $location_type
     *           Required. Immutable. The location type of the resources that are allowed to be attached to the
     *           assets within this zone.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Immutable. The location type of the resources that are allowed to be attached to the
     * assets within this zone.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Zone.ResourceSpec.LocationType location_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getLocationType()
    {
        return $this->location_type;
    }

    /**
     * Required. Immutable. The location type of the resources that are allowed to be attached to the
     * assets within this zone.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Zone.ResourceSpec.LocationType location_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setLocationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\Zone\ResourceSpec\LocationType::class);
        $this->location_type = $var;

        return $this;
    }

}


