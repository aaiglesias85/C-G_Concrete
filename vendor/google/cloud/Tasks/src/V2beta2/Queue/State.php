<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/queue.proto

namespace Google\Cloud\Tasks\V2beta2\Queue;

use UnexpectedValueException;

/**
 * State of the queue.
 *
 * Protobuf type <code>google.cloud.tasks.v2beta2.Queue.State</code>
 */
class State
{
    /**
     * Unspecified state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The queue is running. Tasks can be dispatched.
     * If the queue was created using Cloud Tasks and the queue has
     * had no activity (method calls or task dispatches) for 30 days,
     * the queue may take a few minutes to re-activate. Some method
     * calls may return [NOT_FOUND][google.rpc.Code.NOT_FOUND] and
     * tasks may not be dispatched for a few minutes until the queue
     * has been re-activated.
     *
     * Generated from protobuf enum <code>RUNNING = 1;</code>
     */
    const RUNNING = 1;
    /**
     * Tasks are paused by the user. If the queue is paused then Cloud
     * Tasks will stop delivering tasks from it, but more tasks can
     * still be added to it by the user. When a pull queue is paused,
     * all [LeaseTasks][google.cloud.tasks.v2beta2.CloudTasks.LeaseTasks] calls will return a
     * [FAILED_PRECONDITION][google.rpc.Code.FAILED_PRECONDITION].
     *
     * Generated from protobuf enum <code>PAUSED = 2;</code>
     */
    const PAUSED = 2;
    /**
     * The queue is disabled.
     * A queue becomes `DISABLED` when
     * [queue.yaml](https://cloud.google.com/appengine/docs/python/config/queueref)
     * or
     * [queue.xml](https://cloud.google.com/appengine/docs/standard/java/config/queueref)
     * is uploaded which does not contain the queue. You cannot directly disable
     * a queue.
     * When a queue is disabled, tasks can still be added to a queue
     * but the tasks are not dispatched and
     * [LeaseTasks][google.cloud.tasks.v2beta2.CloudTasks.LeaseTasks] calls return a
     * `FAILED_PRECONDITION` error.
     * To permanently delete this queue and all of its tasks, call
     * [DeleteQueue][google.cloud.tasks.v2beta2.CloudTasks.DeleteQueue].
     *
     * Generated from protobuf enum <code>DISABLED = 3;</code>
     */
    const DISABLED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::RUNNING => 'RUNNING',
        self::PAUSED => 'PAUSED',
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
class_alias(State::class, \Google\Cloud\Tasks\V2beta2\Queue_State::class);

