<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a contiguous range of columns within a single column family.
 * The range spans from &lt;column_family&gt;:&lt;start_qualifier&gt; to
 * &lt;column_family&gt;:&lt;end_qualifier&gt;, where both bounds can be either
 * inclusive or exclusive.
 *
 * Generated from protobuf message <code>google.bigtable.v2.ColumnRange</code>
 */
class ColumnRange extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the column family within which this range falls.
     *
     * Generated from protobuf field <code>string family_name = 1;</code>
     */
    private $family_name = '';
    protected $start_qualifier;
    protected $end_qualifier;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $family_name
     *           The name of the column family within which this range falls.
     *     @type string $start_qualifier_closed
     *           Used when giving an inclusive lower bound for the range.
     *     @type string $start_qualifier_open
     *           Used when giving an exclusive lower bound for the range.
     *     @type string $end_qualifier_closed
     *           Used when giving an inclusive upper bound for the range.
     *     @type string $end_qualifier_open
     *           Used when giving an exclusive upper bound for the range.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the column family within which this range falls.
     *
     * Generated from protobuf field <code>string family_name = 1;</code>
     * @return string
     */
    public function getFamilyName()
    {
        return $this->family_name;
    }

    /**
     * The name of the column family within which this range falls.
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
     * Used when giving an inclusive lower bound for the range.
     *
     * Generated from protobuf field <code>bytes start_qualifier_closed = 2;</code>
     * @return string
     */
    public function getStartQualifierClosed()
    {
        return $this->readOneof(2);
    }

    public function hasStartQualifierClosed()
    {
        return $this->hasOneof(2);
    }

    /**
     * Used when giving an inclusive lower bound for the range.
     *
     * Generated from protobuf field <code>bytes start_qualifier_closed = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStartQualifierClosed($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Used when giving an exclusive lower bound for the range.
     *
     * Generated from protobuf field <code>bytes start_qualifier_open = 3;</code>
     * @return string
     */
    public function getStartQualifierOpen()
    {
        return $this->readOneof(3);
    }

    public function hasStartQualifierOpen()
    {
        return $this->hasOneof(3);
    }

    /**
     * Used when giving an exclusive lower bound for the range.
     *
     * Generated from protobuf field <code>bytes start_qualifier_open = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStartQualifierOpen($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Used when giving an inclusive upper bound for the range.
     *
     * Generated from protobuf field <code>bytes end_qualifier_closed = 4;</code>
     * @return string
     */
    public function getEndQualifierClosed()
    {
        return $this->readOneof(4);
    }

    public function hasEndQualifierClosed()
    {
        return $this->hasOneof(4);
    }

    /**
     * Used when giving an inclusive upper bound for the range.
     *
     * Generated from protobuf field <code>bytes end_qualifier_closed = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEndQualifierClosed($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Used when giving an exclusive upper bound for the range.
     *
     * Generated from protobuf field <code>bytes end_qualifier_open = 5;</code>
     * @return string
     */
    public function getEndQualifierOpen()
    {
        return $this->readOneof(5);
    }

    public function hasEndQualifierOpen()
    {
        return $this->hasOneof(5);
    }

    /**
     * Used when giving an exclusive upper bound for the range.
     *
     * Generated from protobuf field <code>bytes end_qualifier_open = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEndQualifierOpen($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStartQualifier()
    {
        return $this->whichOneof("start_qualifier");
    }

    /**
     * @return string
     */
    public function getEndQualifier()
    {
        return $this->whichOneof("end_qualifier");
    }

}

