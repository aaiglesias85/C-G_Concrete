<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Route;

use UnexpectedValueException;

/**
 * [Output only] The status of the route.
 *
 * Protobuf type <code>google.cloud.compute.v1.Route.RouteStatus</code>
 */
class RouteStatus
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ROUTE_STATUS = 0;</code>
     */
    const UNDEFINED_ROUTE_STATUS = 0;
    /**
     * This route is processed and active.
     *
     * Generated from protobuf enum <code>ACTIVE = 314733318;</code>
     */
    const ACTIVE = 314733318;
    /**
     * The route is dropped due to the VPC exceeding the dynamic route limit. For dynamic route limit, please refer to the Learned route example
     *
     * Generated from protobuf enum <code>DROPPED = 496235424;</code>
     */
    const DROPPED = 496235424;
    /**
     * This route is processed but inactive due to failure from the backend. The backend may have rejected the route
     *
     * Generated from protobuf enum <code>INACTIVE = 270421099;</code>
     */
    const INACTIVE = 270421099;
    /**
     * This route is being processed internally. The status will change once processed.
     *
     * Generated from protobuf enum <code>PENDING = 35394935;</code>
     */
    const PENDING = 35394935;

    private static $valueToName = [
        self::UNDEFINED_ROUTE_STATUS => 'UNDEFINED_ROUTE_STATUS',
        self::ACTIVE => 'ACTIVE',
        self::DROPPED => 'DROPPED',
        self::INACTIVE => 'INACTIVE',
        self::PENDING => 'PENDING',
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


