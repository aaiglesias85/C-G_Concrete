<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response's metadata carrying additional information about the report content.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.ResponseMetaData</code>
 */
class ResponseMetaData extends \Google\Protobuf\Internal\Message
{
    /**
     * If true, indicates some buckets of dimension combinations are rolled into
     * "(other)" row. This can happen for high cardinality reports.
     *
     * Generated from protobuf field <code>bool data_loss_from_other_row = 3;</code>
     */
    private $data_loss_from_other_row = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $data_loss_from_other_row
     *           If true, indicates some buckets of dimension combinations are rolled into
     *           "(other)" row. This can happen for high cardinality reports.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * If true, indicates some buckets of dimension combinations are rolled into
     * "(other)" row. This can happen for high cardinality reports.
     *
     * Generated from protobuf field <code>bool data_loss_from_other_row = 3;</code>
     * @return bool
     */
    public function getDataLossFromOtherRow()
    {
        return $this->data_loss_from_other_row;
    }

    /**
     * If true, indicates some buckets of dimension combinations are rolled into
     * "(other)" row. This can happen for high cardinality reports.
     *
     * Generated from protobuf field <code>bool data_loss_from_other_row = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDataLossFromOtherRow($var)
    {
        GPBUtil::checkBool($var);
        $this->data_loss_from_other_row = $var;

        return $this;
    }

}

