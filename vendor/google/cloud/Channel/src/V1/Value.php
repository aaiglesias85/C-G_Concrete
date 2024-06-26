<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/common.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data type and value of a parameter.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.Value</code>
 */
class Value extends \Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $int64_value
     *           Represents an int64 value.
     *     @type string $string_value
     *           Represents a string value.
     *     @type float $double_value
     *           Represents a double value.
     *     @type \Google\Protobuf\Any $proto_value
     *           Represents an 'Any' proto value.
     *     @type bool $bool_value
     *           Represents a boolean value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents an int64 value.
     *
     * Generated from protobuf field <code>int64 int64_value = 1;</code>
     * @return int|string
     */
    public function getInt64Value()
    {
        return $this->readOneof(1);
    }

    public function hasInt64Value()
    {
        return $this->hasOneof(1);
    }

    /**
     * Represents an int64 value.
     *
     * Generated from protobuf field <code>int64 int64_value = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInt64Value($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Represents a string value.
     *
     * Generated from protobuf field <code>string string_value = 2;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(2);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Represents a string value.
     *
     * Generated from protobuf field <code>string string_value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Represents a double value.
     *
     * Generated from protobuf field <code>double double_value = 3;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(3);
    }

    public function hasDoubleValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * Represents a double value.
     *
     * Generated from protobuf field <code>double double_value = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Represents an 'Any' proto value.
     *
     * Generated from protobuf field <code>.google.protobuf.Any proto_value = 4;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getProtoValue()
    {
        return $this->readOneof(4);
    }

    public function hasProtoValue()
    {
        return $this->hasOneof(4);
    }

    /**
     * Represents an 'Any' proto value.
     *
     * Generated from protobuf field <code>.google.protobuf.Any proto_value = 4;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setProtoValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Represents a boolean value.
     *
     * Generated from protobuf field <code>bool bool_value = 5;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(5);
    }

    public function hasBoolValue()
    {
        return $this->hasOneof(5);
    }

    /**
     * Represents a boolean value.
     *
     * Generated from protobuf field <code>bool bool_value = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}

