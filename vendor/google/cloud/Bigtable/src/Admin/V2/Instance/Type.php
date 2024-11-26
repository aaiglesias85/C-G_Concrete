<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Cloud\Bigtable\Admin\V2\Instance;

use UnexpectedValueException;

/**
 * The type of the instance.
 *
 * Protobuf type <code>google.bigtable.admin.v2.Instance.Type</code>
 */
class Type
{
    /**
     * The type of the instance is unspecified. If set when creating an
     * instance, a `PRODUCTION` instance will be created. If set when updating
     * an instance, the type will be left unchanged.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * An instance meant for production use. `serve_nodes` must be set
     * on the cluster.
     *
     * Generated from protobuf enum <code>PRODUCTION = 1;</code>
     */
    const PRODUCTION = 1;
    /**
     * DEPRECATED: Prefer PRODUCTION for all use cases, as it no longer enforces
     * a higher minimum node count than DEVELOPMENT.
     *
     * Generated from protobuf enum <code>DEVELOPMENT = 2;</code>
     */
    const DEVELOPMENT = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::PRODUCTION => 'PRODUCTION',
        self::DEVELOPMENT => 'DEVELOPMENT',
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
class_alias(Type::class, \Google\Cloud\Bigtable\Admin\V2\Instance_Type::class);

