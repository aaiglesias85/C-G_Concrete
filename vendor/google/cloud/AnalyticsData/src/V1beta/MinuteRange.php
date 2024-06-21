<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A contiguous set of minutes: startMinutesAgo, startMinutesAgo + 1, ...,
 * endMinutesAgo. Requests are allowed up to 2 minute ranges.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.MinuteRange</code>
 */
class MinuteRange extends \Google\Protobuf\Internal\Message
{
    /**
     * The inclusive start minute for the query as a number of minutes before now.
     * For example, `"startMinutesAgo": 29` specifies the report should include
     * event data from 29 minutes ago and after. Cannot be after `endMinutesAgo`.
     * If unspecified, `startMinutesAgo` is defaulted to 29. Standard Analytics
     * properties can request up to the last 30 minutes of event data
     * (`startMinutesAgo <= 29`), and Google Analytics 360 properties can request
     * up to the last 60 minutes of event data (`startMinutesAgo <= 59`).
     *
     * Generated from protobuf field <code>optional int32 start_minutes_ago = 1;</code>
     */
    private $start_minutes_ago = null;
    /**
     * The inclusive end minute for the query as a number of minutes before now.
     * Cannot be before `startMinutesAgo`. For example, `"endMinutesAgo": 15`
     * specifies the report should include event data from prior to 15 minutes
     * ago.
     * If unspecified, `endMinutesAgo` is defaulted to 0. Standard Analytics
     * properties can request any minute in the last 30 minutes of event data
     * (`endMinutesAgo <= 29`), and Google Analytics 360 properties can request
     * any minute in the last 60 minutes of event data (`endMinutesAgo <= 59`).
     *
     * Generated from protobuf field <code>optional int32 end_minutes_ago = 2;</code>
     */
    private $end_minutes_ago = null;
    /**
     * Assigns a name to this minute range. The dimension `dateRange` is valued to
     * this name in a report response. If set, cannot begin with `date_range_` or
     * `RESERVED_`. If not set, minute ranges are named by their zero based index
     * in the request: `date_range_0`, `date_range_1`, etc.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $start_minutes_ago
     *           The inclusive start minute for the query as a number of minutes before now.
     *           For example, `"startMinutesAgo": 29` specifies the report should include
     *           event data from 29 minutes ago and after. Cannot be after `endMinutesAgo`.
     *           If unspecified, `startMinutesAgo` is defaulted to 29. Standard Analytics
     *           properties can request up to the last 30 minutes of event data
     *           (`startMinutesAgo <= 29`), and Google Analytics 360 properties can request
     *           up to the last 60 minutes of event data (`startMinutesAgo <= 59`).
     *     @type int $end_minutes_ago
     *           The inclusive end minute for the query as a number of minutes before now.
     *           Cannot be before `startMinutesAgo`. For example, `"endMinutesAgo": 15`
     *           specifies the report should include event data from prior to 15 minutes
     *           ago.
     *           If unspecified, `endMinutesAgo` is defaulted to 0. Standard Analytics
     *           properties can request any minute in the last 30 minutes of event data
     *           (`endMinutesAgo <= 29`), and Google Analytics 360 properties can request
     *           any minute in the last 60 minutes of event data (`endMinutesAgo <= 59`).
     *     @type string $name
     *           Assigns a name to this minute range. The dimension `dateRange` is valued to
     *           this name in a report response. If set, cannot begin with `date_range_` or
     *           `RESERVED_`. If not set, minute ranges are named by their zero based index
     *           in the request: `date_range_0`, `date_range_1`, etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The inclusive start minute for the query as a number of minutes before now.
     * For example, `"startMinutesAgo": 29` specifies the report should include
     * event data from 29 minutes ago and after. Cannot be after `endMinutesAgo`.
     * If unspecified, `startMinutesAgo` is defaulted to 29. Standard Analytics
     * properties can request up to the last 30 minutes of event data
     * (`startMinutesAgo <= 29`), and Google Analytics 360 properties can request
     * up to the last 60 minutes of event data (`startMinutesAgo <= 59`).
     *
     * Generated from protobuf field <code>optional int32 start_minutes_ago = 1;</code>
     * @return int
     */
    public function getStartMinutesAgo()
    {
        return isset($this->start_minutes_ago) ? $this->start_minutes_ago : 0;
    }

    public function hasStartMinutesAgo()
    {
        return isset($this->start_minutes_ago);
    }

    public function clearStartMinutesAgo()
    {
        unset($this->start_minutes_ago);
    }

    /**
     * The inclusive start minute for the query as a number of minutes before now.
     * For example, `"startMinutesAgo": 29` specifies the report should include
     * event data from 29 minutes ago and after. Cannot be after `endMinutesAgo`.
     * If unspecified, `startMinutesAgo` is defaulted to 29. Standard Analytics
     * properties can request up to the last 30 minutes of event data
     * (`startMinutesAgo <= 29`), and Google Analytics 360 properties can request
     * up to the last 60 minutes of event data (`startMinutesAgo <= 59`).
     *
     * Generated from protobuf field <code>optional int32 start_minutes_ago = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStartMinutesAgo($var)
    {
        GPBUtil::checkInt32($var);
        $this->start_minutes_ago = $var;

        return $this;
    }

    /**
     * The inclusive end minute for the query as a number of minutes before now.
     * Cannot be before `startMinutesAgo`. For example, `"endMinutesAgo": 15`
     * specifies the report should include event data from prior to 15 minutes
     * ago.
     * If unspecified, `endMinutesAgo` is defaulted to 0. Standard Analytics
     * properties can request any minute in the last 30 minutes of event data
     * (`endMinutesAgo <= 29`), and Google Analytics 360 properties can request
     * any minute in the last 60 minutes of event data (`endMinutesAgo <= 59`).
     *
     * Generated from protobuf field <code>optional int32 end_minutes_ago = 2;</code>
     * @return int
     */
    public function getEndMinutesAgo()
    {
        return isset($this->end_minutes_ago) ? $this->end_minutes_ago : 0;
    }

    public function hasEndMinutesAgo()
    {
        return isset($this->end_minutes_ago);
    }

    public function clearEndMinutesAgo()
    {
        unset($this->end_minutes_ago);
    }

    /**
     * The inclusive end minute for the query as a number of minutes before now.
     * Cannot be before `startMinutesAgo`. For example, `"endMinutesAgo": 15`
     * specifies the report should include event data from prior to 15 minutes
     * ago.
     * If unspecified, `endMinutesAgo` is defaulted to 0. Standard Analytics
     * properties can request any minute in the last 30 minutes of event data
     * (`endMinutesAgo <= 29`), and Google Analytics 360 properties can request
     * any minute in the last 60 minutes of event data (`endMinutesAgo <= 59`).
     *
     * Generated from protobuf field <code>optional int32 end_minutes_ago = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEndMinutesAgo($var)
    {
        GPBUtil::checkInt32($var);
        $this->end_minutes_ago = $var;

        return $this;
    }

    /**
     * Assigns a name to this minute range. The dimension `dateRange` is valued to
     * this name in a report response. If set, cannot begin with `date_range_` or
     * `RESERVED_`. If not set, minute ranges are named by their zero based index
     * in the request: `date_range_0`, `date_range_1`, etc.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Assigns a name to this minute range. The dimension `dateRange` is valued to
     * this name in a report response. If set, cannot begin with `date_range_` or
     * `RESERVED_`. If not set, minute ranges are named by their zero based index
     * in the request: `date_range_0`, `date_range_1`, etc.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

