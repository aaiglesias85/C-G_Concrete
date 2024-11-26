<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha\DatabaseDumpSpec;

use UnexpectedValueException;

/**
 * The type of the database dump.
 *
 * Protobuf type <code>google.cloud.metastore.v1alpha.DatabaseDumpSpec.Type</code>
 */
class Type
{
    /**
     * The type of the database dump is unknown.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Database dump is a MySQL dump file.
     *
     * Generated from protobuf enum <code>MYSQL = 1;</code>
     */
    const MYSQL = 1;
    /**
     * Database dump contains Avro files.
     *
     * Generated from protobuf enum <code>AVRO = 2;</code>
     */
    const AVRO = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::MYSQL => 'MYSQL',
        self::AVRO => 'AVRO',
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
class_alias(Type::class, \Google\Cloud\Metastore\V1alpha\DatabaseDumpSpec_Type::class);

