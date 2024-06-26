<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4\Operation;

use UnexpectedValueException;

/**
 * The type of Cloud SQL operation.
 *
 * Protobuf type <code>google.cloud.sql.v1beta4.Operation.SqlOperationType</code>
 */
class SqlOperationType
{
    /**
     * Unknown operation type.
     *
     * Generated from protobuf enum <code>SQL_OPERATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const SQL_OPERATION_TYPE_UNSPECIFIED = 0;
    /**
     * Imports data into a Cloud SQL instance.
     *
     * Generated from protobuf enum <code>IMPORT = 1;</code>
     */
    const IMPORT = 1;
    /**
     * Exports data from a Cloud SQL instance to a Cloud Storage
     * bucket.
     *
     * Generated from protobuf enum <code>EXPORT = 2;</code>
     */
    const EXPORT = 2;
    /**
     * Creates a new Cloud SQL instance.
     *
     * Generated from protobuf enum <code>CREATE = 3;</code>
     */
    const CREATE = 3;
    /**
     * Updates the settings of a Cloud SQL instance.
     *
     * Generated from protobuf enum <code>UPDATE = 4;</code>
     */
    const UPDATE = 4;
    /**
     * Deletes a Cloud SQL instance.
     *
     * Generated from protobuf enum <code>DELETE = 5;</code>
     */
    const DELETE = 5;
    /**
     * Restarts the Cloud SQL instance.
     *
     * Generated from protobuf enum <code>RESTART = 6;</code>
     */
    const RESTART = 6;
    /**
     * Generated from protobuf enum <code>BACKUP = 7 [deprecated = true];</code>
     */
    const BACKUP = 7;
    /**
     * Generated from protobuf enum <code>SNAPSHOT = 8 [deprecated = true];</code>
     */
    const SNAPSHOT = 8;
    /**
     * Performs instance backup.
     *
     * Generated from protobuf enum <code>BACKUP_VOLUME = 9;</code>
     */
    const BACKUP_VOLUME = 9;
    /**
     * Deletes an instance backup.
     *
     * Generated from protobuf enum <code>DELETE_VOLUME = 10;</code>
     */
    const DELETE_VOLUME = 10;
    /**
     * Restores an instance backup.
     *
     * Generated from protobuf enum <code>RESTORE_VOLUME = 11;</code>
     */
    const RESTORE_VOLUME = 11;
    /**
     * Injects a privileged user in mysql for MOB instances.
     *
     * Generated from protobuf enum <code>INJECT_USER = 12;</code>
     */
    const INJECT_USER = 12;
    /**
     * Clones a Cloud SQL instance.
     *
     * Generated from protobuf enum <code>CLONE = 14;</code>
     */
    const PBCLONE = 14;
    /**
     * Stops replication on a Cloud SQL read replica instance.
     *
     * Generated from protobuf enum <code>STOP_REPLICA = 15;</code>
     */
    const STOP_REPLICA = 15;
    /**
     * Starts replication on a Cloud SQL read replica instance.
     *
     * Generated from protobuf enum <code>START_REPLICA = 16;</code>
     */
    const START_REPLICA = 16;
    /**
     * Promotes a Cloud SQL replica instance.
     *
     * Generated from protobuf enum <code>PROMOTE_REPLICA = 17;</code>
     */
    const PROMOTE_REPLICA = 17;
    /**
     * Creates a Cloud SQL replica instance.
     *
     * Generated from protobuf enum <code>CREATE_REPLICA = 18;</code>
     */
    const CREATE_REPLICA = 18;
    /**
     * Creates a new user in a Cloud SQL instance.
     *
     * Generated from protobuf enum <code>CREATE_USER = 19;</code>
     */
    const CREATE_USER = 19;
    /**
     * Deletes a user from a Cloud SQL instance.
     *
     * Generated from protobuf enum <code>DELETE_USER = 20;</code>
     */
    const DELETE_USER = 20;
    /**
     * Updates an existing user in a Cloud SQL instance.
     *
     * Generated from protobuf enum <code>UPDATE_USER = 21;</code>
     */
    const UPDATE_USER = 21;
    /**
     * Creates a database in the Cloud SQL instance.
     *
     * Generated from protobuf enum <code>CREATE_DATABASE = 22;</code>
     */
    const CREATE_DATABASE = 22;
    /**
     * Deletes a database in the Cloud SQL instance.
     *
     * Generated from protobuf enum <code>DELETE_DATABASE = 23;</code>
     */
    const DELETE_DATABASE = 23;
    /**
     * Updates a database in the Cloud SQL instance.
     *
     * Generated from protobuf enum <code>UPDATE_DATABASE = 24;</code>
     */
    const UPDATE_DATABASE = 24;
    /**
     * Performs failover of an HA-enabled Cloud SQL
     * failover replica.
     *
     * Generated from protobuf enum <code>FAILOVER = 25;</code>
     */
    const FAILOVER = 25;
    /**
     * Deletes the backup taken by a backup run.
     *
     * Generated from protobuf enum <code>DELETE_BACKUP = 26;</code>
     */
    const DELETE_BACKUP = 26;
    /**
     * Generated from protobuf enum <code>RECREATE_REPLICA = 27;</code>
     */
    const RECREATE_REPLICA = 27;
    /**
     * Truncates a general or slow log table in MySQL.
     *
     * Generated from protobuf enum <code>TRUNCATE_LOG = 28;</code>
     */
    const TRUNCATE_LOG = 28;
    /**
     * Demotes the stand-alone instance to be a Cloud SQL
     * read replica for an external database server.
     *
     * Generated from protobuf enum <code>DEMOTE_MASTER = 29;</code>
     */
    const DEMOTE_MASTER = 29;
    /**
     * Indicates that the instance is currently in maintenance. Maintenance
     * typically causes the instance to be unavailable for 1-3 minutes.
     *
     * Generated from protobuf enum <code>MAINTENANCE = 30;</code>
     */
    const MAINTENANCE = 30;
    /**
     * This field is deprecated, and will be removed in future version of API.
     *
     * Generated from protobuf enum <code>ENABLE_PRIVATE_IP = 31 [deprecated = true];</code>
     */
    const ENABLE_PRIVATE_IP = 31;
    /**
     * Generated from protobuf enum <code>DEFER_MAINTENANCE = 32 [deprecated = true];</code>
     */
    const DEFER_MAINTENANCE = 32;
    /**
     * Creates clone instance.
     *
     * Generated from protobuf enum <code>CREATE_CLONE = 33 [deprecated = true];</code>
     */
    const CREATE_CLONE = 33;
    /**
     * Reschedule maintenance to another time.
     *
     * Generated from protobuf enum <code>RESCHEDULE_MAINTENANCE = 34;</code>
     */
    const RESCHEDULE_MAINTENANCE = 34;
    /**
     * Starts external sync of a Cloud SQL EM replica to an external primary
     * instance.
     *
     * Generated from protobuf enum <code>START_EXTERNAL_SYNC = 35;</code>
     */
    const START_EXTERNAL_SYNC = 35;

    private static $valueToName = [
        self::SQL_OPERATION_TYPE_UNSPECIFIED => 'SQL_OPERATION_TYPE_UNSPECIFIED',
        self::IMPORT => 'IMPORT',
        self::EXPORT => 'EXPORT',
        self::CREATE => 'CREATE',
        self::UPDATE => 'UPDATE',
        self::DELETE => 'DELETE',
        self::RESTART => 'RESTART',
        self::BACKUP => 'BACKUP',
        self::SNAPSHOT => 'SNAPSHOT',
        self::BACKUP_VOLUME => 'BACKUP_VOLUME',
        self::DELETE_VOLUME => 'DELETE_VOLUME',
        self::RESTORE_VOLUME => 'RESTORE_VOLUME',
        self::INJECT_USER => 'INJECT_USER',
        self::PBCLONE => 'PBCLONE',
        self::STOP_REPLICA => 'STOP_REPLICA',
        self::START_REPLICA => 'START_REPLICA',
        self::PROMOTE_REPLICA => 'PROMOTE_REPLICA',
        self::CREATE_REPLICA => 'CREATE_REPLICA',
        self::CREATE_USER => 'CREATE_USER',
        self::DELETE_USER => 'DELETE_USER',
        self::UPDATE_USER => 'UPDATE_USER',
        self::CREATE_DATABASE => 'CREATE_DATABASE',
        self::DELETE_DATABASE => 'DELETE_DATABASE',
        self::UPDATE_DATABASE => 'UPDATE_DATABASE',
        self::FAILOVER => 'FAILOVER',
        self::DELETE_BACKUP => 'DELETE_BACKUP',
        self::RECREATE_REPLICA => 'RECREATE_REPLICA',
        self::TRUNCATE_LOG => 'TRUNCATE_LOG',
        self::DEMOTE_MASTER => 'DEMOTE_MASTER',
        self::MAINTENANCE => 'MAINTENANCE',
        self::ENABLE_PRIVATE_IP => 'ENABLE_PRIVATE_IP',
        self::DEFER_MAINTENANCE => 'DEFER_MAINTENANCE',
        self::CREATE_CLONE => 'CREATE_CLONE',
        self::RESCHEDULE_MAINTENANCE => 'RESCHEDULE_MAINTENANCE',
        self::START_EXTERNAL_SYNC => 'START_EXTERNAL_SYNC',
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


