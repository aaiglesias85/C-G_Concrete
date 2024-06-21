<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies requirements between shipments based on their shipment_type.
 * The specifics of the requirement are defined by the requirement mode.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.ShipmentTypeRequirement</code>
 */
class ShipmentTypeRequirement extends \Google\Protobuf\Internal\Message
{
    /**
     * List of alternative shipment types required by the
     * `dependent_shipment_types`.
     *
     * Generated from protobuf field <code>repeated string required_shipment_type_alternatives = 1;</code>
     */
    private $required_shipment_type_alternatives;
    /**
     * All shipments with a type in the `dependent_shipment_types` field require
     * at least one shipment of type `required_shipment_type_alternatives` to be
     * visited on the same route.
     * NOTE: Chains of requirements such that a `shipment_type` depends on itself
     * are not allowed.
     *
     * Generated from protobuf field <code>repeated string dependent_shipment_types = 2;</code>
     */
    private $dependent_shipment_types;
    /**
     * Mode applied to the requirement.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentTypeRequirement.RequirementMode requirement_mode = 3;</code>
     */
    private $requirement_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $required_shipment_type_alternatives
     *           List of alternative shipment types required by the
     *           `dependent_shipment_types`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $dependent_shipment_types
     *           All shipments with a type in the `dependent_shipment_types` field require
     *           at least one shipment of type `required_shipment_type_alternatives` to be
     *           visited on the same route.
     *           NOTE: Chains of requirements such that a `shipment_type` depends on itself
     *           are not allowed.
     *     @type int $requirement_mode
     *           Mode applied to the requirement.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * List of alternative shipment types required by the
     * `dependent_shipment_types`.
     *
     * Generated from protobuf field <code>repeated string required_shipment_type_alternatives = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequiredShipmentTypeAlternatives()
    {
        return $this->required_shipment_type_alternatives;
    }

    /**
     * List of alternative shipment types required by the
     * `dependent_shipment_types`.
     *
     * Generated from protobuf field <code>repeated string required_shipment_type_alternatives = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequiredShipmentTypeAlternatives($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->required_shipment_type_alternatives = $arr;

        return $this;
    }

    /**
     * All shipments with a type in the `dependent_shipment_types` field require
     * at least one shipment of type `required_shipment_type_alternatives` to be
     * visited on the same route.
     * NOTE: Chains of requirements such that a `shipment_type` depends on itself
     * are not allowed.
     *
     * Generated from protobuf field <code>repeated string dependent_shipment_types = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDependentShipmentTypes()
    {
        return $this->dependent_shipment_types;
    }

    /**
     * All shipments with a type in the `dependent_shipment_types` field require
     * at least one shipment of type `required_shipment_type_alternatives` to be
     * visited on the same route.
     * NOTE: Chains of requirements such that a `shipment_type` depends on itself
     * are not allowed.
     *
     * Generated from protobuf field <code>repeated string dependent_shipment_types = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDependentShipmentTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dependent_shipment_types = $arr;

        return $this;
    }

    /**
     * Mode applied to the requirement.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentTypeRequirement.RequirementMode requirement_mode = 3;</code>
     * @return int
     */
    public function getRequirementMode()
    {
        return $this->requirement_mode;
    }

    /**
     * Mode applied to the requirement.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentTypeRequirement.RequirementMode requirement_mode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRequirementMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Optimization\V1\ShipmentTypeRequirement\RequirementMode::class);
        $this->requirement_mode = $var;

        return $this;
    }

}

