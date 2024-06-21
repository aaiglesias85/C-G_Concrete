<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\DNSConfig;

use UnexpectedValueException;

/**
 * Provider lists the various in-cluster DNS providers.
 *
 * Protobuf type <code>google.container.v1.DNSConfig.Provider</code>
 */
class Provider
{
    /**
     * Default value
     *
     * Generated from protobuf enum <code>PROVIDER_UNSPECIFIED = 0;</code>
     */
    const PROVIDER_UNSPECIFIED = 0;
    /**
     * Use GKE default DNS provider(kube-dns) for DNS resolution.
     *
     * Generated from protobuf enum <code>PLATFORM_DEFAULT = 1;</code>
     */
    const PLATFORM_DEFAULT = 1;
    /**
     * Use CloudDNS for DNS resolution.
     *
     * Generated from protobuf enum <code>CLOUD_DNS = 2;</code>
     */
    const CLOUD_DNS = 2;

    private static $valueToName = [
        self::PROVIDER_UNSPECIFIED => 'PROVIDER_UNSPECIFIED',
        self::PLATFORM_DEFAULT => 'PLATFORM_DEFAULT',
        self::CLOUD_DNS => 'CLOUD_DNS',
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
class_alias(Provider::class, \Google\Cloud\Container\V1\DNSConfig_Provider::class);

