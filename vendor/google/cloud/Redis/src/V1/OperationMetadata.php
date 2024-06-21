<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1/cloud_redis.proto

namespace Google\Cloud\Redis\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the v1 metadata of the long-running operation.
 *
 * Generated from protobuf message <code>google.cloud.redis.v1.OperationMetadata</code>
 */
class OperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     */
    private $create_time = null;
    /**
     * End timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * Operation target.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     */
    private $target = '';
    /**
     * Operation verb.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     */
    private $verb = '';
    /**
     * Operation status details.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     */
    private $status_detail = '';
    /**
     * Specifies if cancellation was requested for the operation.
     *
     * Generated from protobuf field <code>bool cancel_requested = 6;</code>
     */
    private $cancel_requested = false;
    /**
     * API version.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     */
    private $api_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Creation timestamp.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           End timestamp.
     *     @type string $target
     *           Operation target.
     *     @type string $verb
     *           Operation verb.
     *     @type string $status_detail
     *           Operation status details.
     *     @type bool $cancel_requested
     *           Specifies if cancellation was requested for the operation.
     *     @type string $api_version
     *           API version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\V1\CloudRedis::initOnce();
        parent::__construct($data);
    }

    /**
     * Creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * End timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * End timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Operation target.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Operation target.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

    /**
     * Operation verb.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     * @return string
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * Operation verb.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVerb($var)
    {
        GPBUtil::checkString($var, True);
        $this->verb = $var;

        return $this;
    }

    /**
     * Operation status details.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * Operation status details.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_detail = $var;

        return $this;
    }

    /**
     * Specifies if cancellation was requested for the operation.
     *
     * Generated from protobuf field <code>bool cancel_requested = 6;</code>
     * @return bool
     */
    public function getCancelRequested()
    {
        return $this->cancel_requested;
    }

    /**
     * Specifies if cancellation was requested for the operation.
     *
     * Generated from protobuf field <code>bool cancel_requested = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setCancelRequested($var)
    {
        GPBUtil::checkBool($var);
        $this->cancel_requested = $var;

        return $this;
    }

    /**
     * API version.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     * @return string
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * API version.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_version = $var;

        return $this;
    }

}

