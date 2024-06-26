<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\UrlMapsValidateRequest;

use UnexpectedValueException;

/**
 *
 * Protobuf type <code>google.cloud.compute.v1.UrlMapsValidateRequest.LoadBalancingSchemes</code>
 */
class LoadBalancingSchemes
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_LOAD_BALANCING_SCHEMES = 0;</code>
     */
    const UNDEFINED_LOAD_BALANCING_SCHEMES = 0;
    /**
     * Signifies that this will be used for Classic L7 External Load Balancing.
     *
     * Generated from protobuf enum <code>EXTERNAL = 35607499;</code>
     */
    const EXTERNAL = 35607499;
    /**
     * Signifies that this will be used for Envoy-based L7 External Load Balancing.
     *
     * Generated from protobuf enum <code>EXTERNAL_MANAGED = 512006923;</code>
     */
    const EXTERNAL_MANAGED = 512006923;
    /**
     * If unspecified, the validation will try to infer the scheme from the backend service resources this Url map references. If the inferrence is not possible, EXTERNAL will be used as the default type.
     *
     * Generated from protobuf enum <code>LOAD_BALANCING_SCHEME_UNSPECIFIED = 526507452;</code>
     */
    const LOAD_BALANCING_SCHEME_UNSPECIFIED = 526507452;

    private static $valueToName = [
        self::UNDEFINED_LOAD_BALANCING_SCHEMES => 'UNDEFINED_LOAD_BALANCING_SCHEMES',
        self::EXTERNAL => 'EXTERNAL',
        self::EXTERNAL_MANAGED => 'EXTERNAL_MANAGED',
        self::LOAD_BALANCING_SCHEME_UNSPECIFIED => 'LOAD_BALANCING_SCHEME_UNSPECIFIED',
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


