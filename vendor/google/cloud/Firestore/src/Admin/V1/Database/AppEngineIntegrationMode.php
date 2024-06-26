<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/database.proto

namespace Google\Cloud\Firestore\Admin\V1\Database;

use UnexpectedValueException;

/**
 * The type of App Engine integration mode.
 *
 * Protobuf type <code>google.firestore.admin.v1.Database.AppEngineIntegrationMode</code>
 */
class AppEngineIntegrationMode
{
    /**
     * Not used.
     *
     * Generated from protobuf enum <code>APP_ENGINE_INTEGRATION_MODE_UNSPECIFIED = 0;</code>
     */
    const APP_ENGINE_INTEGRATION_MODE_UNSPECIFIED = 0;
    /**
     * If an App Engine application exists in the same region as this database,
     * App Engine configuration will impact this database. This includes
     * disabling of the application & database, as well as disabling writes to
     * the database.
     *
     * Generated from protobuf enum <code>ENABLED = 1;</code>
     */
    const ENABLED = 1;
    /**
     * Appengine has no affect on the ability of this database to serve
     * requests.
     *
     * Generated from protobuf enum <code>DISABLED = 2;</code>
     */
    const DISABLED = 2;

    private static $valueToName = [
        self::APP_ENGINE_INTEGRATION_MODE_UNSPECIFIED => 'APP_ENGINE_INTEGRATION_MODE_UNSPECIFIED',
        self::ENABLED => 'ENABLED',
        self::DISABLED => 'DISABLED',
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
class_alias(AppEngineIntegrationMode::class, \Google\Cloud\Firestore\Admin\V1\Database_AppEngineIntegrationMode::class);

