<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\ShipmentTypeIncompatibility;

use UnexpectedValueException;

/**
 * Modes defining how the appearance of incompatible shipments are restricted
 * on the same route.
 *
 * Protobuf type <code>google.cloud.optimization.v1.ShipmentTypeIncompatibility.IncompatibilityMode</code>
 */
class IncompatibilityMode
{
    /**
     * Unspecified incompatibility mode. This value should never be used.
     *
     * Generated from protobuf enum <code>INCOMPATIBILITY_MODE_UNSPECIFIED = 0;</code>
     */
    const INCOMPATIBILITY_MODE_UNSPECIFIED = 0;
    /**
     * In this mode, two shipments with incompatible types can never share the
     * same vehicle.
     *
     * Generated from protobuf enum <code>NOT_PERFORMED_BY_SAME_VEHICLE = 1;</code>
     */
    const NOT_PERFORMED_BY_SAME_VEHICLE = 1;
    /**
     * For two shipments with incompatible types with the
     * `NOT_IN_SAME_VEHICLE_SIMULTANEOUSLY` incompatibility mode:
     * * If both are pickups only (no deliveries) or deliveries only (no
     *   pickups), they cannot share the same vehicle at all.
     * * If one of the shipments has a delivery and the other a pickup, the two
     *   shipments can share the same vehicle iff the former shipment is
     *   delivered before the latter is picked up.
     *
     * Generated from protobuf enum <code>NOT_IN_SAME_VEHICLE_SIMULTANEOUSLY = 2;</code>
     */
    const NOT_IN_SAME_VEHICLE_SIMULTANEOUSLY = 2;

    private static $valueToName = [
        self::INCOMPATIBILITY_MODE_UNSPECIFIED => 'INCOMPATIBILITY_MODE_UNSPECIFIED',
        self::NOT_PERFORMED_BY_SAME_VEHICLE => 'NOT_PERFORMED_BY_SAME_VEHICLE',
        self::NOT_IN_SAME_VEHICLE_SIMULTANEOUSLY => 'NOT_IN_SAME_VEHICLE_SIMULTANEOUSLY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


