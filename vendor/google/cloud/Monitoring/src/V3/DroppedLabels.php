<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/dropped_labels.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of (label, value) pairs that were removed from a Distribution
 * time series during aggregation and then added as an attachment to a
 * Distribution.Exemplar.
 * The full label set for the exemplars is constructed by using the dropped
 * pairs in combination with the label values that remain on the aggregated
 * Distribution time series. The constructed full label set can be used to
 * identify the specific entity, such as the instance or job, which might be
 * contributing to a long-tail. However, with dropped labels, the storage
 * requirements are reduced because only the aggregated distribution values for
 * a large group of time series are stored.
 * Note that there are no guarantees on ordering of the labels from
 * exemplar-to-exemplar and from distribution-to-distribution in the same
 * stream, and there may be duplicates.  It is up to clients to resolve any
 * ambiguities.
 *
 * Generated from protobuf message <code>google.monitoring.v3.DroppedLabels</code>
 */
class DroppedLabels extends \Google\Protobuf\Internal\Message
{
    /**
     * Map from label to its value, for all labels dropped in any aggregation.
     *
     * Generated from protobuf field <code>map<string, string> label = 1;</code>
     */
    private $label;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $label
     *           Map from label to its value, for all labels dropped in any aggregation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\DroppedLabels::initOnce();
        parent::__construct($data);
    }

    /**
     * Map from label to its value, for all labels dropped in any aggregation.
     *
     * Generated from protobuf field <code>map<string, string> label = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Map from label to its value, for all labels dropped in any aggregation.
     *
     * Generated from protobuf field <code>map<string, string> label = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabel($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->label = $arr;

        return $this;
    }

}

