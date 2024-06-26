<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies incompatibilties between shipments depending on their
 * shipment_type. The appearance of incompatible shipments on the same route is
 * restricted based on the incompatibility mode.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.ShipmentTypeIncompatibility</code>
 */
class ShipmentTypeIncompatibility extends \Google\Protobuf\Internal\Message
{
    /**
     * List of incompatible types. Two shipments having different `shipment_types`
     * among those listed are "incompatible".
     *
     * Generated from protobuf field <code>repeated string types = 1;</code>
     */
    private $types;
    /**
     * Mode applied to the incompatibility.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentTypeIncompatibility.IncompatibilityMode incompatibility_mode = 2;</code>
     */
    private $incompatibility_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $types
     *           List of incompatible types. Two shipments having different `shipment_types`
     *           among those listed are "incompatible".
     *     @type int $incompatibility_mode
     *           Mode applied to the incompatibility.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * List of incompatible types. Two shipments having different `shipment_types`
     * among those listed are "incompatible".
     *
     * Generated from protobuf field <code>repeated string types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * List of incompatible types. Two shipments having different `shipment_types`
     * among those listed are "incompatible".
     *
     * Generated from protobuf field <code>repeated string types = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->types = $arr;

        return $this;
    }

    /**
     * Mode applied to the incompatibility.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentTypeIncompatibility.IncompatibilityMode incompatibility_mode = 2;</code>
     * @return int
     */
    public function getIncompatibilityMode()
    {
        return $this->incompatibility_mode;
    }

    /**
     * Mode applied to the incompatibility.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentTypeIncompatibility.IncompatibilityMode incompatibility_mode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setIncompatibilityMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Optimization\V1\ShipmentTypeIncompatibility\IncompatibilityMode::class);
        $this->incompatibility_mode = $var;

        return $this;
    }

}

