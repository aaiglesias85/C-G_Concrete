<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/service_controller.proto

namespace Google\Cloud\ServiceControl\V1\CheckResponse\ConsumerInfo;

use UnexpectedValueException;

/**
 * The type of the consumer as defined in
 * [Google Resource Manager](https://cloud.google.com/resource-manager/).
 *
 * Protobuf type <code>google.api.servicecontrol.v1.CheckResponse.ConsumerInfo.ConsumerType</code>
 */
class ConsumerType
{
    /**
     * This is never used.
     *
     * Generated from protobuf enum <code>CONSUMER_TYPE_UNSPECIFIED = 0;</code>
     */
    const CONSUMER_TYPE_UNSPECIFIED = 0;
    /**
     * The consumer is a Google Cloud Project.
     *
     * Generated from protobuf enum <code>PROJECT = 1;</code>
     */
    const PROJECT = 1;
    /**
     * The consumer is a Google Cloud Folder.
     *
     * Generated from protobuf enum <code>FOLDER = 2;</code>
     */
    const FOLDER = 2;
    /**
     * The consumer is a Google Cloud Organization.
     *
     * Generated from protobuf enum <code>ORGANIZATION = 3;</code>
     */
    const ORGANIZATION = 3;
    /**
     * Service-specific resource container which is defined by the service
     * producer to offer their users the ability to manage service control
     * functionalities at a finer level of granularity than the PROJECT.
     *
     * Generated from protobuf enum <code>SERVICE_SPECIFIC = 4;</code>
     */
    const SERVICE_SPECIFIC = 4;

    private static $valueToName = [
        self::CONSUMER_TYPE_UNSPECIFIED => 'CONSUMER_TYPE_UNSPECIFIED',
        self::PROJECT => 'PROJECT',
        self::FOLDER => 'FOLDER',
        self::ORGANIZATION => 'ORGANIZATION',
        self::SERVICE_SPECIFIC => 'SERVICE_SPECIFIC',
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
class_alias(ConsumerType::class, \Google\Cloud\ServiceControl\V1\CheckResponse_ConsumerInfo_ConsumerType::class);

