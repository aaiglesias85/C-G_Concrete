<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1/cloudscheduler.proto

namespace Google\Cloud\Scheduler\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for deleting a job using
 * [DeleteJob][google.cloud.scheduler.v1.CloudScheduler.DeleteJob].
 *
 * Generated from protobuf message <code>google.cloud.scheduler.v1.DeleteJobRequest</code>
 */
class DeleteJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The job name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/jobs/JOB_ID`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The job name. For example:
     *           `projects/PROJECT_ID/locations/LOCATION_ID/jobs/JOB_ID`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Scheduler\V1\Cloudscheduler::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The job name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/jobs/JOB_ID`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The job name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/jobs/JOB_ID`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

