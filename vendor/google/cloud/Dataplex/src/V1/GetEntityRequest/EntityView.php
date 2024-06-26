<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1\GetEntityRequest;

use UnexpectedValueException;

/**
 * Entity views for get entity partial result.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.GetEntityRequest.EntityView</code>
 */
class EntityView
{
    /**
     * The API will default to the `BASIC` view.
     *
     * Generated from protobuf enum <code>ENTITY_VIEW_UNSPECIFIED = 0;</code>
     */
    const ENTITY_VIEW_UNSPECIFIED = 0;
    /**
     * Minimal view that does not include the schema.
     *
     * Generated from protobuf enum <code>BASIC = 1;</code>
     */
    const BASIC = 1;
    /**
     * Include basic information and schema.
     *
     * Generated from protobuf enum <code>SCHEMA = 2;</code>
     */
    const SCHEMA = 2;
    /**
     * Include everything. Currently, this is the same as the SCHEMA view.
     *
     * Generated from protobuf enum <code>FULL = 4;</code>
     */
    const FULL = 4;

    private static $valueToName = [
        self::ENTITY_VIEW_UNSPECIFIED => 'ENTITY_VIEW_UNSPECIFIED',
        self::BASIC => 'BASIC',
        self::SCHEMA => 'SCHEMA',
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


