<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represent a user-facing Error.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.Error</code>
 */
class Error extends \Google\Protobuf\Internal\Message
{
    /**
     * A title that explains the reason for the error.
     *
     * Generated from protobuf field <code>string reason = 1;</code>
     */
    private $reason = '';
    /**
     * A unique identifier for this specific error,
     * allowing it to be traced throughout the system in logs and API responses.
     *
     * Generated from protobuf field <code>string error_uuid = 2;</code>
     */
    private $error_uuid = '';
    /**
     * A message containing more information about the error that occurred.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     */
    private $message = '';
    /**
     * The time when the error occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp error_time = 4;</code>
     */
    private $error_time = null;
    /**
     * Additional information about the error.
     *
     * Generated from protobuf field <code>map<string, string> details = 5;</code>
     */
    private $details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reason
     *           A title that explains the reason for the error.
     *     @type string $error_uuid
     *           A unique identifier for this specific error,
     *           allowing it to be traced throughout the system in logs and API responses.
     *     @type string $message
     *           A message containing more information about the error that occurred.
     *     @type \Google\Protobuf\Timestamp $error_time
     *           The time when the error occurred.
     *     @type array|\Google\Protobuf\Internal\MapField $details
     *           Additional information about the error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * A title that explains the reason for the error.
     *
     * Generated from protobuf field <code>string reason = 1;</code>
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * A title that explains the reason for the error.
     *
     * Generated from protobuf field <code>string reason = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->reason = $var;

        return $this;
    }

    /**
     * A unique identifier for this specific error,
     * allowing it to be traced throughout the system in logs and API responses.
     *
     * Generated from protobuf field <code>string error_uuid = 2;</code>
     * @return string
     */
    public function getErrorUuid()
    {
        return $this->error_uuid;
    }

    /**
     * A unique identifier for this specific error,
     * allowing it to be traced throughout the system in logs and API responses.
     *
     * Generated from protobuf field <code>string error_uuid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_uuid = $var;

        return $this;
    }

    /**
     * A message containing more information about the error that occurred.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * A message containing more information about the error that occurred.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * The time when the error occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp error_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getErrorTime()
    {
        return $this->error_time;
    }

    public function hasErrorTime()
    {
        return isset($this->error_time);
    }

    public function clearErrorTime()
    {
        unset($this->error_time);
    }

    /**
     * The time when the error occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp error_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setErrorTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->error_time = $var;

        return $this;
    }

    /**
     * Additional information about the error.
     *
     * Generated from protobuf field <code>map<string, string> details = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Additional information about the error.
     *
     * Generated from protobuf field <code>map<string, string> details = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDetails($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->details = $arr;

        return $this;
    }

}

