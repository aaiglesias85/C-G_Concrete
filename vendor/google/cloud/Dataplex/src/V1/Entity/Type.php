<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1\Entity;

use UnexpectedValueException;

/**
 * The type of entity.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.Entity.Type</code>
 */
class Type
{
    /**
     * Type unspecified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Structured and semi-structured data.
     *
     * Generated from protobuf enum <code>TABLE = 1;</code>
     */
    const TABLE = 1;
    /**
     * Unstructured data.
     *
     * Generated from protobuf enum <code>FILESET = 2;</code>
     */
    const FILESET = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::TABLE => 'TABLE',
        self::FILESET => 'FILESET',
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


