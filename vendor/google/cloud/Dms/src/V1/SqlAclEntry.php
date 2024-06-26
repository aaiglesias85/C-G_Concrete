<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An entry for an Access Control list.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.SqlAclEntry</code>
 */
class SqlAclEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * The allowlisted value for the access control list.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     */
    private $value = '';
    /**
     * A label to identify this entry.
     *
     * Generated from protobuf field <code>string label = 3;</code>
     */
    private $label = '';
    protected $expiration;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           The allowlisted value for the access control list.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           The time when this access control entry expires in
     *           [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example:
     *           `2012-11-15T16:19:00.094Z`.
     *     @type \Google\Protobuf\Duration $ttl
     *           Input only. The time-to-leave of this access control entry.
     *     @type string $label
     *           A label to identify this entry.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ClouddmsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The allowlisted value for the access control list.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The allowlisted value for the access control list.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * The time when this access control entry expires in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example:
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->readOneof(10);
    }

    public function hasExpireTime()
    {
        return $this->hasOneof(10);
    }

    /**
     * The time when this access control entry expires in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example:
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Input only. The time-to-leave of this access control entry.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 11 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTtl()
    {
        return $this->readOneof(11);
    }

    public function hasTtl()
    {
        return $this->hasOneof(11);
    }

    /**
     * Input only. The time-to-leave of this access control entry.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 11 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * A label to identify this entry.
     *
     * Generated from protobuf field <code>string label = 3;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * A label to identify this entry.
     *
     * Generated from protobuf field <code>string label = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpiration()
    {
        return $this->whichOneof("expiration");
    }

}

