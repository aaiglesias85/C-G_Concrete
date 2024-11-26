<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\RecordCondition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The field type of `value` and `field` do not need to match to be
 * considered equal, but not all comparisons are possible.
 * EQUAL_TO and NOT_EQUAL_TO attempt to compare even with incompatible types,
 * but all other comparisons are invalid with incompatible types.
 * A `value` of type:
 * - `string` can be compared against all other types
 * - `boolean` can only be compared against other booleans
 * - `integer` can be compared against doubles or a string if the string value
 * can be parsed as an integer.
 * - `double` can be compared against integers or a string if the string can
 * be parsed as a double.
 * - `Timestamp` can be compared against strings in RFC 3339 date string
 * format.
 * - `TimeOfDay` can be compared against timestamps and strings in the format
 * of 'HH:mm:ss'.
 * If we fail to compare do to type mismatch, a warning will be given and
 * the condition will evaluate to false.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.RecordCondition.Condition</code>
 */
class Condition extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field within the record this condition is evaluated against.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $field = null;
    /**
     * Required. Operator used to compare the field or infoType to the value.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RelationalOperator operator = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $operator = 0;
    /**
     * Value to compare against. [Mandatory, except for `EXISTS` tests.]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value value = 4;</code>
     */
    private $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\FieldId $field
     *           Required. Field within the record this condition is evaluated against.
     *     @type int $operator
     *           Required. Operator used to compare the field or infoType to the value.
     *     @type \Google\Cloud\Dlp\V2\Value $value
     *           Value to compare against. [Mandatory, except for `EXISTS` tests.]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field within the record this condition is evaluated against.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\FieldId|null
     */
    public function getField()
    {
        return $this->field;
    }

    public function hasField()
    {
        return isset($this->field);
    }

    public function clearField()
    {
        unset($this->field);
    }

    /**
     * Required. Field within the record this condition is evaluated against.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId field = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\FieldId $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->field = $var;

        return $this;
    }

    /**
     * Required. Operator used to compare the field or infoType to the value.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RelationalOperator operator = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Required. Operator used to compare the field or infoType to the value.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RelationalOperator operator = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\RelationalOperator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * Value to compare against. [Mandatory, except for `EXISTS` tests.]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value value = 4;</code>
     * @return \Google\Cloud\Dlp\V2\Value|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Value to compare against. [Mandatory, except for `EXISTS` tests.]
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Value value = 4;</code>
     * @param \Google\Cloud\Dlp\V2\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Value::class);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Condition::class, \Google\Cloud\Dlp\V2\RecordCondition_Condition::class);

