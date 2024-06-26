<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceManagedByIgmErrorInstanceActionDetails</code>
 */
class InstanceManagedByIgmErrorInstanceActionDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Action that managed instance group was executing on the instance when the error occurred. Possible values:
     * Check the Action enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string action = 187661878;</code>
     */
    private $action = null;
    /**
     * [Output Only] The URL of the instance. The URL can be set even if the instance has not yet been created.
     *
     * Generated from protobuf field <code>optional string instance = 18257045;</code>
     */
    private $instance = null;
    /**
     * [Output Only] Version this instance was created from, or was being created from, but the creation failed. Corresponds to one of the versions that were set on the Instance Group Manager resource at the time this instance was being created.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstanceVersion version = 351608024;</code>
     */
    private $version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $action
     *           [Output Only] Action that managed instance group was executing on the instance when the error occurred. Possible values:
     *           Check the Action enum for the list of possible values.
     *     @type string $instance
     *           [Output Only] The URL of the instance. The URL can be set even if the instance has not yet been created.
     *     @type \Google\Cloud\Compute\V1\ManagedInstanceVersion $version
     *           [Output Only] Version this instance was created from, or was being created from, but the creation failed. Corresponds to one of the versions that were set on the Instance Group Manager resource at the time this instance was being created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Action that managed instance group was executing on the instance when the error occurred. Possible values:
     * Check the Action enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string action = 187661878;</code>
     * @return string
     */
    public function getAction()
    {
        return isset($this->action) ? $this->action : '';
    }

    public function hasAction()
    {
        return isset($this->action);
    }

    public function clearAction()
    {
        unset($this->action);
    }

    /**
     * [Output Only] Action that managed instance group was executing on the instance when the error occurred. Possible values:
     * Check the Action enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string action = 187661878;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the instance. The URL can be set even if the instance has not yet been created.
     *
     * Generated from protobuf field <code>optional string instance = 18257045;</code>
     * @return string
     */
    public function getInstance()
    {
        return isset($this->instance) ? $this->instance : '';
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * [Output Only] The URL of the instance. The URL can be set even if the instance has not yet been created.
     *
     * Generated from protobuf field <code>optional string instance = 18257045;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * [Output Only] Version this instance was created from, or was being created from, but the creation failed. Corresponds to one of the versions that were set on the Instance Group Manager resource at the time this instance was being created.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstanceVersion version = 351608024;</code>
     * @return \Google\Cloud\Compute\V1\ManagedInstanceVersion|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * [Output Only] Version this instance was created from, or was being created from, but the creation failed. Corresponds to one of the versions that were set on the Instance Group Manager resource at the time this instance was being created.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstanceVersion version = 351608024;</code>
     * @param \Google\Cloud\Compute\V1\ManagedInstanceVersion $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ManagedInstanceVersion::class);
        $this->version = $var;

        return $this;
    }

}

