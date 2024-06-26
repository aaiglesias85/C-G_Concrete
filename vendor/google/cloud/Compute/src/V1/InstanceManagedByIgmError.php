<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceManagedByIgmError</code>
 */
class InstanceManagedByIgmError extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Contents of the error.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceManagedByIgmErrorManagedInstanceError error = 96784904;</code>
     */
    private $error = null;
    /**
     * [Output Only] Details of the instance action that triggered this error. May be null, if the error was not caused by an action on an instance. This field is optional.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceManagedByIgmErrorInstanceActionDetails instance_action_details = 292224547;</code>
     */
    private $instance_action_details = null;
    /**
     * [Output Only] The time that this error occurred. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string timestamp = 55126294;</code>
     */
    private $timestamp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\InstanceManagedByIgmErrorManagedInstanceError $error
     *           [Output Only] Contents of the error.
     *     @type \Google\Cloud\Compute\V1\InstanceManagedByIgmErrorInstanceActionDetails $instance_action_details
     *           [Output Only] Details of the instance action that triggered this error. May be null, if the error was not caused by an action on an instance. This field is optional.
     *     @type string $timestamp
     *           [Output Only] The time that this error occurred. This value is in RFC3339 text format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Contents of the error.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceManagedByIgmErrorManagedInstanceError error = 96784904;</code>
     * @return \Google\Cloud\Compute\V1\InstanceManagedByIgmErrorManagedInstanceError|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * [Output Only] Contents of the error.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceManagedByIgmErrorManagedInstanceError error = 96784904;</code>
     * @param \Google\Cloud\Compute\V1\InstanceManagedByIgmErrorManagedInstanceError $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstanceManagedByIgmErrorManagedInstanceError::class);
        $this->error = $var;

        return $this;
    }

    /**
     * [Output Only] Details of the instance action that triggered this error. May be null, if the error was not caused by an action on an instance. This field is optional.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceManagedByIgmErrorInstanceActionDetails instance_action_details = 292224547;</code>
     * @return \Google\Cloud\Compute\V1\InstanceManagedByIgmErrorInstanceActionDetails|null
     */
    public function getInstanceActionDetails()
    {
        return $this->instance_action_details;
    }

    public function hasInstanceActionDetails()
    {
        return isset($this->instance_action_details);
    }

    public function clearInstanceActionDetails()
    {
        unset($this->instance_action_details);
    }

    /**
     * [Output Only] Details of the instance action that triggered this error. May be null, if the error was not caused by an action on an instance. This field is optional.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceManagedByIgmErrorInstanceActionDetails instance_action_details = 292224547;</code>
     * @param \Google\Cloud\Compute\V1\InstanceManagedByIgmErrorInstanceActionDetails $var
     * @return $this
     */
    public function setInstanceActionDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstanceManagedByIgmErrorInstanceActionDetails::class);
        $this->instance_action_details = $var;

        return $this;
    }

    /**
     * [Output Only] The time that this error occurred. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string timestamp = 55126294;</code>
     * @return string
     */
    public function getTimestamp()
    {
        return isset($this->timestamp) ? $this->timestamp : '';
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * [Output Only] The time that this error occurred. This value is in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string timestamp = 55126294;</code>
     * @param string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->timestamp = $var;

        return $this;
    }

}

