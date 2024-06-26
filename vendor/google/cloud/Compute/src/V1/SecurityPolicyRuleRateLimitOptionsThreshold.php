<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SecurityPolicyRuleRateLimitOptionsThreshold</code>
 */
class SecurityPolicyRuleRateLimitOptionsThreshold extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of HTTP(S) requests for calculating the threshold.
     *
     * Generated from protobuf field <code>optional int32 count = 94851343;</code>
     */
    private $count = null;
    /**
     * Interval over which the threshold is computed.
     *
     * Generated from protobuf field <code>optional int32 interval_sec = 41084375;</code>
     */
    private $interval_sec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $count
     *           Number of HTTP(S) requests for calculating the threshold.
     *     @type int $interval_sec
     *           Interval over which the threshold is computed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of HTTP(S) requests for calculating the threshold.
     *
     * Generated from protobuf field <code>optional int32 count = 94851343;</code>
     * @return int
     */
    public function getCount()
    {
        return isset($this->count) ? $this->count : 0;
    }

    public function hasCount()
    {
        return isset($this->count);
    }

    public function clearCount()
    {
        unset($this->count);
    }

    /**
     * Number of HTTP(S) requests for calculating the threshold.
     *
     * Generated from protobuf field <code>optional int32 count = 94851343;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Interval over which the threshold is computed.
     *
     * Generated from protobuf field <code>optional int32 interval_sec = 41084375;</code>
     * @return int
     */
    public function getIntervalSec()
    {
        return isset($this->interval_sec) ? $this->interval_sec : 0;
    }

    public function hasIntervalSec()
    {
        return isset($this->interval_sec);
    }

    public function clearIntervalSec()
    {
        unset($this->interval_sec);
    }

    /**
     * Interval over which the threshold is computed.
     *
     * Generated from protobuf field <code>optional int32 interval_sec = 41084375;</code>
     * @param int $var
     * @return $this
     */
    public function setIntervalSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->interval_sec = $var;

        return $this;
    }

}

