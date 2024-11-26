<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.privacy.dlp.v2.ProfileStatus</code>
 */
class ProfileStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Profiling status code and optional message
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     */
    private $status = null;
    /**
     * Time when the profile generation status was updated
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3;</code>
     */
    private $timestamp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Rpc\Status $status
     *           Profiling status code and optional message
     *     @type \Google\Protobuf\Timestamp $timestamp
     *           Time when the profile generation status was updated
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Profiling status code and optional message
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Profiling status code and optional message
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Time when the profile generation status was updated
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
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
     * Time when the profile generation status was updated
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

}

