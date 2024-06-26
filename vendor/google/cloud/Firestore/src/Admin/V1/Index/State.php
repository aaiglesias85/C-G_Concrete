<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/index.proto

namespace Google\Cloud\Firestore\Admin\V1\Index;

use UnexpectedValueException;

/**
 * The state of an index. During index creation, an index will be in the
 * `CREATING` state. If the index is created successfully, it will transition
 * to the `READY` state. If the index creation encounters a problem, the index
 * will transition to the `NEEDS_REPAIR` state.
 *
 * Protobuf type <code>google.firestore.admin.v1.Index.State</code>
 */
class State
{
    /**
     * The state is unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The index is being created.
     * There is an active long-running operation for the index.
     * The index is updated when writing a document.
     * Some index data may exist.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The index is ready to be used.
     * The index is updated when writing a document.
     * The index is fully populated from all stored documents it applies to.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;
    /**
     * The index was being created, but something went wrong.
     * There is no active long-running operation for the index,
     * and the most recently finished long-running operation failed.
     * The index is not updated when writing a document.
     * Some index data may exist.
     * Use the google.longrunning.Operations API to determine why the operation
     * that last attempted to create this index failed, then re-create the
     * index.
     *
     * Generated from protobuf enum <code>NEEDS_REPAIR = 3;</code>
     */
    const NEEDS_REPAIR = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::READY => 'READY',
        self::NEEDS_REPAIR => 'NEEDS_REPAIR',
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
class_alias(State::class, \Google\Cloud\Firestore\Admin\V1\Index_State::class);

