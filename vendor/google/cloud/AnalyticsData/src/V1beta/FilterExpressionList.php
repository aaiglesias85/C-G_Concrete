<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of filter expressions.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.FilterExpressionList</code>
 */
class FilterExpressionList extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.FilterExpression expressions = 1;</code>
     */
    private $expressions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1beta\FilterExpression[]|\Google\Protobuf\Internal\RepeatedField $expressions
     *           A list of filter expressions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.FilterExpression expressions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExpressions()
    {
        return $this->expressions;
    }

    /**
     * A list of filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.FilterExpression expressions = 1;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpression[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExpressions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\FilterExpression::class);
        $this->expressions = $arr;

        return $this;
    }

}

