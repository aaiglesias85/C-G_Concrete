<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

use UnexpectedValueException;

/**
 * The gateway authorization/authentication method. This setting determines how
 * Cloud IoT Core authorizes/authenticate devices to access the gateway.
 *
 * Protobuf type <code>google.cloud.iot.v1.GatewayAuthMethod</code>
 */
class GatewayAuthMethod
{
    /**
     * No authentication/authorization method specified. No devices are allowed to
     * access the gateway.
     *
     * Generated from protobuf enum <code>GATEWAY_AUTH_METHOD_UNSPECIFIED = 0;</code>
     */
    const GATEWAY_AUTH_METHOD_UNSPECIFIED = 0;
    /**
     * The device is authenticated through the gateway association only. Device
     * credentials are ignored even if provided.
     *
     * Generated from protobuf enum <code>ASSOCIATION_ONLY = 1;</code>
     */
    const ASSOCIATION_ONLY = 1;
    /**
     * The device is authenticated through its own credentials. Gateway
     * association is not checked.
     *
     * Generated from protobuf enum <code>DEVICE_AUTH_TOKEN_ONLY = 2;</code>
     */
    const DEVICE_AUTH_TOKEN_ONLY = 2;
    /**
     * The device is authenticated through both device credentials and gateway
     * association. The device must be bound to the gateway and must provide its
     * own credentials.
     *
     * Generated from protobuf enum <code>ASSOCIATION_AND_DEVICE_AUTH_TOKEN = 3;</code>
     */
    const ASSOCIATION_AND_DEVICE_AUTH_TOKEN = 3;

    private static $valueToName = [
        self::GATEWAY_AUTH_METHOD_UNSPECIFIED => 'GATEWAY_AUTH_METHOD_UNSPECIFIED',
        self::ASSOCIATION_ONLY => 'ASSOCIATION_ONLY',
        self::DEVICE_AUTH_TOKEN_ONLY => 'DEVICE_AUTH_TOKEN_ONLY',
        self::ASSOCIATION_AND_DEVICE_AUTH_TOKEN => 'ASSOCIATION_AND_DEVICE_AUTH_TOKEN',
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

