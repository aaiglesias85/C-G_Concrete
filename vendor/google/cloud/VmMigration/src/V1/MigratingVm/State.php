<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1\MigratingVm;

use UnexpectedValueException;

/**
 * The possible values of the state/health of source VM.
 *
 * Protobuf type <code>google.cloud.vmmigration.v1.MigratingVm.State</code>
 */
class State
{
    /**
     * The state was not sampled by the health checks yet.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The VM in the source is being verified.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * The source VM was verified, and it's ready to start replication.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;
    /**
     * Migration is going through the first sync cycle.
     *
     * Generated from protobuf enum <code>FIRST_SYNC = 3;</code>
     */
    const FIRST_SYNC = 3;
    /**
     * The replication is active, and it's running or scheduled to run.
     *
     * Generated from protobuf enum <code>ACTIVE = 4;</code>
     */
    const ACTIVE = 4;
    /**
     * The source VM is being turned off, and a final replication is currently
     * running.
     *
     * Generated from protobuf enum <code>CUTTING_OVER = 7;</code>
     */
    const CUTTING_OVER = 7;
    /**
     * The source VM was stopped and replicated. The replication is currently
     * paused.
     *
     * Generated from protobuf enum <code>CUTOVER = 8;</code>
     */
    const CUTOVER = 8;
    /**
     * A cutover job is active and replication cycle is running the final sync.
     *
     * Generated from protobuf enum <code>FINAL_SYNC = 9;</code>
     */
    const FINAL_SYNC = 9;
    /**
     * The replication was paused by the user and no cycles are scheduled to
     * run.
     *
     * Generated from protobuf enum <code>PAUSED = 10;</code>
     */
    const PAUSED = 10;
    /**
     * The migrating VM is being finalized and migration resources are being
     * removed.
     *
     * Generated from protobuf enum <code>FINALIZING = 11;</code>
     */
    const FINALIZING = 11;
    /**
     * The replication process is done. The migrating VM is finalized and no
     * longer consumes billable resources.
     *
     * Generated from protobuf enum <code>FINALIZED = 12;</code>
     */
    const FINALIZED = 12;
    /**
     * The replication process encountered an unrecoverable error and was
     * aborted.
     *
     * Generated from protobuf enum <code>ERROR = 13;</code>
     */
    const ERROR = 13;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::READY => 'READY',
        self::FIRST_SYNC => 'FIRST_SYNC',
        self::ACTIVE => 'ACTIVE',
        self::CUTTING_OVER => 'CUTTING_OVER',
        self::CUTOVER => 'CUTOVER',
        self::FINAL_SYNC => 'FINAL_SYNC',
        self::PAUSED => 'PAUSED',
        self::FINALIZING => 'FINALIZING',
        self::FINALIZED => 'FINALIZED',
        self::ERROR => 'ERROR',
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


