<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\BackendService;

use UnexpectedValueException;

/**
 * Specifies the load balancer type. A backend service created for one type of load balancer cannot be used with another. For more information, refer to Choosing a load balancer.
 *
 * Protobuf type <code>google.cloud.compute.v1.BackendService.LoadBalancingScheme</code>
 */
class LoadBalancingScheme
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_LOAD_BALANCING_SCHEME = 0;</code>
     */
    const UNDEFINED_LOAD_BALANCING_SCHEME = 0;
    /**
     * Signifies that this will be used for external HTTP(S), SSL Proxy, TCP Proxy, or Network Load Balancing
     *
     * Generated from protobuf enum <code>EXTERNAL = 35607499;</code>
     */
    const EXTERNAL = 35607499;
    /**
     * Signifies that this will be used for External Managed HTTP(S) Load Balancing.
     *
     * Generated from protobuf enum <code>EXTERNAL_MANAGED = 512006923;</code>
     */
    const EXTERNAL_MANAGED = 512006923;
    /**
     * Signifies that this will be used for Internal TCP/UDP Load Balancing.
     *
     * Generated from protobuf enum <code>INTERNAL = 279295677;</code>
     */
    const INTERNAL = 279295677;
    /**
     * Signifies that this will be used for Internal HTTP(S) Load Balancing.
     *
     * Generated from protobuf enum <code>INTERNAL_MANAGED = 37350397;</code>
     */
    const INTERNAL_MANAGED = 37350397;
    /**
     * Signifies that this will be used by Traffic Director.
     *
     * Generated from protobuf enum <code>INTERNAL_SELF_MANAGED = 236211150;</code>
     */
    const INTERNAL_SELF_MANAGED = 236211150;
    /**
     * Generated from protobuf enum <code>INVALID_LOAD_BALANCING_SCHEME = 275352060;</code>
     */
    const INVALID_LOAD_BALANCING_SCHEME = 275352060;

    private static $valueToName = [
        self::UNDEFINED_LOAD_BALANCING_SCHEME => 'UNDEFINED_LOAD_BALANCING_SCHEME',
        self::EXTERNAL => 'EXTERNAL',
        self::EXTERNAL_MANAGED => 'EXTERNAL_MANAGED',
        self::INTERNAL => 'INTERNAL',
        self::INTERNAL_MANAGED => 'INTERNAL_MANAGED',
        self::INTERNAL_SELF_MANAGED => 'INTERNAL_SELF_MANAGED',
        self::INVALID_LOAD_BALANCING_SCHEME => 'INVALID_LOAD_BALANCING_SCHEME',
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


