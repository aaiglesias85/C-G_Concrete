<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/queue.proto

namespace Google\Cloud\Tasks\V2beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Statistics for a queue.
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta2.QueueStats</code>
 */
class QueueStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. An estimation of the number of tasks in the queue, that is, the tasks in
     * the queue that haven't been executed, the tasks in the queue which the
     * queue has dispatched but has not yet received a reply for, and the failed
     * tasks that the queue is retrying.
     *
     * Generated from protobuf field <code>int64 tasks_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $tasks_count = 0;
    /**
     * Output only. An estimation of the nearest time in the future where a task in the queue
     * is scheduled to be executed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp oldest_estimated_arrival_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $oldest_estimated_arrival_time = null;
    /**
     * Output only. The number of tasks that the queue has dispatched and received a reply for
     * during the last minute. This variable counts both successful and
     * non-successful executions.
     *
     * Generated from protobuf field <code>int64 executed_last_minute_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $executed_last_minute_count = 0;
    /**
     * Output only. The number of requests that the queue has dispatched but has not received
     * a reply for yet.
     *
     * Generated from protobuf field <code>int64 concurrent_dispatches_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $concurrent_dispatches_count = 0;
    /**
     * Output only. The current maximum number of tasks per second executed by the queue.
     * The maximum value of this variable is controlled by the RateLimits of the
     * Queue. However, this value could be less to avoid overloading the endpoints
     * tasks in the queue are targeting.
     *
     * Generated from protobuf field <code>double effective_execution_rate = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $effective_execution_rate = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $tasks_count
     *           Output only. An estimation of the number of tasks in the queue, that is, the tasks in
     *           the queue that haven't been executed, the tasks in the queue which the
     *           queue has dispatched but has not yet received a reply for, and the failed
     *           tasks that the queue is retrying.
     *     @type \Google\Protobuf\Timestamp $oldest_estimated_arrival_time
     *           Output only. An estimation of the nearest time in the future where a task in the queue
     *           is scheduled to be executed.
     *     @type int|string $executed_last_minute_count
     *           Output only. The number of tasks that the queue has dispatched and received a reply for
     *           during the last minute. This variable counts both successful and
     *           non-successful executions.
     *     @type int|string $concurrent_dispatches_count
     *           Output only. The number of requests that the queue has dispatched but has not received
     *           a reply for yet.
     *     @type float $effective_execution_rate
     *           Output only. The current maximum number of tasks per second executed by the queue.
     *           The maximum value of this variable is controlled by the RateLimits of the
     *           Queue. However, this value could be less to avoid overloading the endpoints
     *           tasks in the queue are targeting.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Queue::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. An estimation of the number of tasks in the queue, that is, the tasks in
     * the queue that haven't been executed, the tasks in the queue which the
     * queue has dispatched but has not yet received a reply for, and the failed
     * tasks that the queue is retrying.
     *
     * Generated from protobuf field <code>int64 tasks_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTasksCount()
    {
        return $this->tasks_count;
    }

    /**
     * Output only. An estimation of the number of tasks in the queue, that is, the tasks in
     * the queue that haven't been executed, the tasks in the queue which the
     * queue has dispatched but has not yet received a reply for, and the failed
     * tasks that the queue is retrying.
     *
     * Generated from protobuf field <code>int64 tasks_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTasksCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->tasks_count = $var;

        return $this;
    }

    /**
     * Output only. An estimation of the nearest time in the future where a task in the queue
     * is scheduled to be executed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp oldest_estimated_arrival_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getOldestEstimatedArrivalTime()
    {
        return $this->oldest_estimated_arrival_time;
    }

    public function hasOldestEstimatedArrivalTime()
    {
        return isset($this->oldest_estimated_arrival_time);
    }

    public function clearOldestEstimatedArrivalTime()
    {
        unset($this->oldest_estimated_arrival_time);
    }

    /**
     * Output only. An estimation of the nearest time in the future where a task in the queue
     * is scheduled to be executed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp oldest_estimated_arrival_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setOldestEstimatedArrivalTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->oldest_estimated_arrival_time = $var;

        return $this;
    }

    /**
     * Output only. The number of tasks that the queue has dispatched and received a reply for
     * during the last minute. This variable counts both successful and
     * non-successful executions.
     *
     * Generated from protobuf field <code>int64 executed_last_minute_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getExecutedLastMinuteCount()
    {
        return $this->executed_last_minute_count;
    }

    /**
     * Output only. The number of tasks that the queue has dispatched and received a reply for
     * during the last minute. This variable counts both successful and
     * non-successful executions.
     *
     * Generated from protobuf field <code>int64 executed_last_minute_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setExecutedLastMinuteCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->executed_last_minute_count = $var;

        return $this;
    }

    /**
     * Output only. The number of requests that the queue has dispatched but has not received
     * a reply for yet.
     *
     * Generated from protobuf field <code>int64 concurrent_dispatches_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getConcurrentDispatchesCount()
    {
        return $this->concurrent_dispatches_count;
    }

    /**
     * Output only. The number of requests that the queue has dispatched but has not received
     * a reply for yet.
     *
     * Generated from protobuf field <code>int64 concurrent_dispatches_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setConcurrentDispatchesCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->concurrent_dispatches_count = $var;

        return $this;
    }

    /**
     * Output only. The current maximum number of tasks per second executed by the queue.
     * The maximum value of this variable is controlled by the RateLimits of the
     * Queue. However, this value could be less to avoid overloading the endpoints
     * tasks in the queue are targeting.
     *
     * Generated from protobuf field <code>double effective_execution_rate = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getEffectiveExecutionRate()
    {
        return $this->effective_execution_rate;
    }

    /**
     * Output only. The current maximum number of tasks per second executed by the queue.
     * The maximum value of this variable is controlled by the RateLimits of the
     * Queue. However, this value could be less to avoid overloading the endpoints
     * tasks in the queue are targeting.
     *
     * Generated from protobuf field <code>double effective_execution_rate = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setEffectiveExecutionRate($var)
    {
        GPBUtil::checkDouble($var);
        $this->effective_execution_rate = $var;

        return $this;
    }

}

