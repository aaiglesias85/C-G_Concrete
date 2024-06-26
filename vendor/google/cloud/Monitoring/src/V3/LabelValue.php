<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A label value.
 *
 * Generated from protobuf message <code>google.monitoring.v3.LabelValue</code>
 */
class LabelValue extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $bool_value
     *           A bool label value.
     *     @type int|string $int64_value
     *           An int64 label value.
     *     @type string $string_value
     *           A string label value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Metric::initOnce();
        parent::__construct($data);
    }

    /**
     * A bool label value.
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
     * A bool label value.
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
     * An int64 label value.
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
     * An int64 label value.
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
     * A string label value.
     *
     * Generated from protobuf field <code>string string_value = 3;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(3);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * A string label value.
     *
     * Generated from protobuf field <code>string string_value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

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

