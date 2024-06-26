<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/common.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single strongly-typed value.
 *
 * Generated from protobuf message <code>google.monitoring.v3.TypedValue</code>
 */
class TypedValue extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $bool_value
     *           A Boolean value: `true` or `false`.
     *     @type int|string $int64_value
     *           A 64-bit integer. Its range is approximately &plusmn;9.2x10<sup>18</sup>.
     *     @type float $double_value
     *           A 64-bit double-precision floating-point number. Its magnitude
     *           is approximately &plusmn;10<sup>&plusmn;300</sup> and it has 16
     *           significant digits of precision.
     *     @type string $string_value
     *           A variable-length string value.
     *     @type \Google\Api\Distribution $distribution_value
     *           A distribution value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * A Boolean value: `true` or `false`.
     *
     * Generated from protobuf field <code>bool bool_value = 1;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(1);
    }

    public function hasBoolValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * A Boolean value: `true` or `false`.
     *
     * Generated from protobuf field <code>bool bool_value = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A 64-bit integer. Its range is approximately &plusmn;9.2x10<sup>18</sup>.
     *
     * Generated from protobuf field <code>int64 int64_value = 2;</code>
     * @return int|string
     */
    public function getInt64Value()
    {
        return $this->readOneof(2);
    }

    public function hasInt64Value()
    {
        return $this->hasOneof(2);
    }

    /**
     * A 64-bit integer. Its range is approximately &plusmn;9.2x10<sup>18</sup>.
     *
     * Generated from protobuf field <code>int64 int64_value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInt64Value($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A 64-bit double-precision floating-point number. Its magnitude
     * is approximately &plusmn;10<sup>&plusmn;300</sup> and it has 16
     * significant digits of precision.
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
     * A 64-bit double-precision floating-point number. Its magnitude
     * is approximately &plusmn;10<sup>&plusmn;300</sup> and it has 16
     * significant digits of precision.
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
     * A variable-length string value.
     *
     * Generated from protobuf field <code>string string_value = 4;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(4);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(4);
    }

    /**
     * A variable-length string value.
     *
     * Generated from protobuf field <code>string string_value = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A distribution value.
     *
     * Generated from protobuf field <code>.google.api.Distribution distribution_value = 5;</code>
     * @return \Google\Api\Distribution|null
     */
    public function getDistributionValue()
    {
        return $this->readOneof(5);
    }

    public function hasDistributionValue()
    {
        return $this->hasOneof(5);
    }

    /**
     * A distribution value.
     *
     * Generated from protobuf field <code>.google.api.Distribution distribution_value = 5;</code>
     * @param \Google\Api\Distribution $var
     * @return $this
     */
    public function setDistributionValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Distribution::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

