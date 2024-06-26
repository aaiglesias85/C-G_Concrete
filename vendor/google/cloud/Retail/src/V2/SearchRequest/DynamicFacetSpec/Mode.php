<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/search_service.proto

namespace Google\Cloud\Retail\V2\SearchRequest\DynamicFacetSpec;

use UnexpectedValueException;

/**
 * Enum to control DynamicFacet mode
 *
 * Protobuf type <code>google.cloud.retail.v2.SearchRequest.DynamicFacetSpec.Mode</code>
 */
class Mode
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * Disable Dynamic Facet.
     *
     * Generated from protobuf enum <code>DISABLED = 1;</code>
     */
    const DISABLED = 1;
    /**
     * Automatic mode built by Google Retail Search.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::DISABLED => 'DISABLED',
        self::ENABLED => 'ENABLED',
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


