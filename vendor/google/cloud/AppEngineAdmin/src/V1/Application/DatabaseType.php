<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/application.proto

namespace Google\Cloud\AppEngine\V1\Application;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.appengine.v1.Application.DatabaseType</code>
 */
class DatabaseType
{
    /**
     * Database type is unspecified.
     *
     * Generated from protobuf enum <code>DATABASE_TYPE_UNSPECIFIED = 0;</code>
     */
    const DATABASE_TYPE_UNSPECIFIED = 0;
    /**
     * Cloud Datastore
     *
     * Generated from protobuf enum <code>CLOUD_DATASTORE = 1;</code>
     */
    const CLOUD_DATASTORE = 1;
    /**
     * Cloud Firestore Native
     *
     * Generated from protobuf enum <code>CLOUD_FIRESTORE = 2;</code>
     */
    const CLOUD_FIRESTORE = 2;
    /**
     * Cloud Firestore in Datastore Mode
     *
     * Generated from protobuf enum <code>CLOUD_DATASTORE_COMPATIBILITY = 3;</code>
     */
    const CLOUD_DATASTORE_COMPATIBILITY = 3;

    private static $valueToName = [
        self::DATABASE_TYPE_UNSPECIFIED => 'DATABASE_TYPE_UNSPECIFIED',
        self::CLOUD_DATASTORE => 'CLOUD_DATASTORE',
        self::CLOUD_FIRESTORE => 'CLOUD_FIRESTORE',
        self::CLOUD_DATASTORE_COMPATIBILITY => 'CLOUD_DATASTORE_COMPATIBILITY',
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
class_alias(DatabaseType::class, \Google\Cloud\AppEngine\V1\Application_DatabaseType::class);

