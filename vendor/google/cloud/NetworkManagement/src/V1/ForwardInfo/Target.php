<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1\ForwardInfo;

use UnexpectedValueException;

/**
 * Forward target types.
 *
 * Protobuf type <code>google.cloud.networkmanagement.v1.ForwardInfo.Target</code>
 */
class Target
{
    /**
     * Target not specified.
     *
     * Generated from protobuf enum <code>TARGET_UNSPECIFIED = 0;</code>
     */
    const TARGET_UNSPECIFIED = 0;
    /**
     * Forwarded to a VPC peering network.
     *
     * Generated from protobuf enum <code>PEERING_VPC = 1;</code>
     */
    const PEERING_VPC = 1;
    /**
     * Forwarded to a Cloud VPN gateway.
     *
     * Generated from protobuf enum <code>VPN_GATEWAY = 2;</code>
     */
    const VPN_GATEWAY = 2;
    /**
     * Forwarded to a Cloud Interconnect connection.
     *
     * Generated from protobuf enum <code>INTERCONNECT = 3;</code>
     */
    const INTERCONNECT = 3;
    /**
     * Forwarded to a Google Kubernetes Engine Container cluster master.
     *
     * Generated from protobuf enum <code>GKE_MASTER = 4;</code>
     */
    const GKE_MASTER = 4;
    /**
     * Forwarded to the next hop of a custom route imported from a peering VPC.
     *
     * Generated from protobuf enum <code>IMPORTED_CUSTOM_ROUTE_NEXT_HOP = 5;</code>
     */
    const IMPORTED_CUSTOM_ROUTE_NEXT_HOP = 5;
    /**
     * Forwarded to a Cloud SQL instance.
     *
     * Generated from protobuf enum <code>CLOUD_SQL_INSTANCE = 6;</code>
     */
    const CLOUD_SQL_INSTANCE = 6;

    private static $valueToName = [
        self::TARGET_UNSPECIFIED => 'TARGET_UNSPECIFIED',
        self::PEERING_VPC => 'PEERING_VPC',
        self::VPN_GATEWAY => 'VPN_GATEWAY',
        self::INTERCONNECT => 'INTERCONNECT',
        self::GKE_MASTER => 'GKE_MASTER',
        self::IMPORTED_CUSTOM_ROUTE_NEXT_HOP => 'IMPORTED_CUSTOM_ROUTE_NEXT_HOP',
        self::CLOUD_SQL_INSTANCE => 'CLOUD_SQL_INSTANCE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Target::class, \Google\Cloud\NetworkManagement\V1\ForwardInfo_Target::class);

