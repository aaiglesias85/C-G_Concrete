<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigateway/v1/apigateway.proto

namespace Google\Cloud\ApiGateway\V1\GetApiConfigRequest;

use UnexpectedValueException;

/**
 * Enum to control which fields should be included in the response.
 *
 * Protobuf type <code>google.cloud.apigateway.v1.GetApiConfigRequest.ConfigView</code>
 */
class ConfigView
{
    /**
     * Generated from protobuf enum <code>CONFIG_VIEW_UNSPECIFIED = 0;</code>
     */
    const CONFIG_VIEW_UNSPECIFIED = 0;
    /**
     * Do not include configuration source files.
     *
     * Generated from protobuf enum <code>BASIC = 1;</code>
     */
    const BASIC = 1;
    /**
     * Include configuration source files.
     *
     * Generated from protobuf enum <code>FULL = 2;</code>
     */
    const FULL = 2;

    private static $valueToName = [
        self::CONFIG_VIEW_UNSPECIFIED => 'CONFIG_VIEW_UNSPECIFIED',
        self::BASIC => 'BASIC',
        self::FULL => 'FULL',
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
class_alias(ConfigView::class, \Google\Cloud\ApiGateway\V1\GetApiConfigRequest_ConfigView::class);

