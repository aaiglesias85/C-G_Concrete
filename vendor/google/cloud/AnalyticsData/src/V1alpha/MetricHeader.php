<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a metric column in the report. Visible metrics requested in a
 * report produce column entries within rows and MetricHeaders. However,
 * metrics used exclusively within filters or expressions do not produce columns
 * in a report; correspondingly, those metrics do not produce headers.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.MetricHeader</code>
 */
class MetricHeader extends \Google\Protobuf\Internal\Message
{
    /**
     * The metric's name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The metric's data type.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.MetricType type = 2;</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The metric's name.
     *     @type int $type
     *           The metric's data type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The metric's name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The metric's name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The metric's data type.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.MetricType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The metric's data type.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.MetricType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Data\V1alpha\MetricType::class);
        $this->type = $var;

        return $this;
    }

}

