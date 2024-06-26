<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for leasing tasks using [LeaseTasks][google.cloud.tasks.v2beta2.CloudTasks.LeaseTasks].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta2.LeaseTasksResponse</code>
 */
class LeaseTasksResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The leased tasks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tasks.v2beta2.Task tasks = 1;</code>
     */
    private $tasks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Tasks\V2beta2\Task[]|\Google\Protobuf\Internal\RepeatedField $tasks
     *           The leased tasks.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Cloudtasks::initOnce();
        parent::__construct($data);
    }

    /**
     * The leased tasks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tasks.v2beta2.Task tasks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * The leased tasks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tasks.v2beta2.Task tasks = 1;</code>
     * @param \Google\Cloud\Tasks\V2beta2\Task[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTasks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Tasks\V2beta2\Task::class);
        $this->tasks = $arr;

        return $this;
    }

}

