<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies an atomic read/modify/write operation on the latest value of the
 * specified column.
 *
 * Generated from protobuf message <code>google.bigtable.v2.ReadModifyWriteRule</code>
 */
class ReadModifyWriteRule extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the family to which the read/modify/write should be applied.
     * Must match `[-_.a-zA-Z0-9]+`
     *
     * Generated from protobuf field <code>string family_name = 1;</code>
     */
    private $family_name = '';
    /**
     * The qualifier of the column to which the read/modify/write should be
     * applied.
     * Can be any byte string, including the empty string.
     *
     * Generated from protobuf field <code>bytes column_qualifier = 2;</code>
     */
    private $column_qualifier = '';
    protected $rule;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $family_name
     *           The name of the family to which the read/modify/write should be applied.
     *           Must match `[-_.a-zA-Z0-9]+`
     *     @type string $column_qualifier
     *           The qualifier of the column to which the read/modify/write should be
     *           applied.
     *           Can be any byte string, including the empty string.
     *     @type string $append_value
     *           Rule specifying that `append_value` be appended to the existing value.
     *           If the targeted cell is unset, it will be treated as containing the
     *           empty string.
     *     @type int|string $increment_amount
     *           Rule specifying that `increment_amount` be added to the existing value.
     *           If the targeted cell is unset, it will be treated as containing a zero.
     *           Otherwise, the targeted cell must contain an 8-byte value (interpreted
     *           as a 64-bit big-endian signed integer), or the entire request will fail.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the family to which the read/modify/write should be applied.
     * Must match `[-_.a-zA-Z0-9]+`
     *
     * Generated from protobuf field <code>string family_name = 1;</code>
     * @return string
     */
    public function getFamilyName()
    {
        return $this->family_name;
    }

    /**
     * The name of the family to which the read/modify/write should be applied.
     * Must match `[-_.a-zA-Z0-9]+`
     *
     * Generated from protobuf field <code>string family_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFamilyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->family_name = $var;

        return $this;
    }

    /**
     * The qualifier of the column to which the read/modify/write should be
     * applied.
     * Can be any byte string, including the empty string.
     *
     * Generated from protobuf field <code>bytes column_qualifier = 2;</code>
     * @return string
     */
    public function getColumnQualifier()
    {
        return $this->column_qualifier;
    }

    /**
     * The qualifier of the column to which the read/modify/write should be
     * applied.
     * Can be any byte string, including the empty string.
     *
     * Generated from protobuf field <code>bytes column_qualifier = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setColumnQualifier($var)
    {
        GPBUtil::checkString($var, False);
        $this->column_qualifier = $var;

        return $this;
    }

    /**
     * Rule specifying that `append_value` be appended to the existing value.
     * If the targeted cell is unset, it will be treated as containing the
     * empty string.
     *
     * Generated from protobuf field <code>bytes append_value = 3;</code>
     * @return string
     */
    public function getAppendValue()
    {
        return $this->readOneof(3);
    }

    public function hasAppendValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * Rule specifying that `append_value` be appended to the existing value.
     * If the targeted cell is unset, it will be treated as containing the
     * empty string.
     *
     * Generated from protobuf field <code>bytes append_value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAppendValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Rule specifying that `increment_amount` be added to the existing value.
     * If the targeted cell is unset, it will be treated as containing a zero.
     * Otherwise, the targeted cell must contain an 8-byte value (interpreted
     * as a 64-bit big-endian signed integer), or the entire request will fail.
     *
     * Generated from protobuf field <code>int64 increment_amount = 4;</code>
     * @return int|string
     */
    public function getIncrementAmount()
    {
        return $this->readOneof(4);
    }

    public function hasIncrementAmount()
    {
        return $this->hasOneof(4);
    }

    /**
     * Rule specifying that `increment_amount` be added to the existing value.
     * If the targeted cell is unset, it will be treated as containing a zero.
     * Otherwise, the targeted cell must contain an 8-byte value (interpreted
     * as a 64-bit big-endian signed integer), or the entire request will fail.
     *
     * Generated from protobuf field <code>int64 increment_amount = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIncrementAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRule()
    {
        return $this->whichOneof("rule");
    }

}

