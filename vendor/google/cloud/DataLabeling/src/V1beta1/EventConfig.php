<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/human_annotation_config.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for video event human labeling task.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.EventConfig</code>
 */
class EventConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The list of annotation spec set resource name. Similar to video
     * classification, we support selecting event from multiple AnnotationSpecSet
     * at the same time.
     *
     * Generated from protobuf field <code>repeated string annotation_spec_sets = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $annotation_spec_sets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $annotation_spec_sets
     *           Required. The list of annotation spec set resource name. Similar to video
     *           classification, we support selecting event from multiple AnnotationSpecSet
     *           at the same time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\HumanAnnotationConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The list of annotation spec set resource name. Similar to video
     * classification, we support selecting event from multiple AnnotationSpecSet
     * at the same time.
     *
     * Generated from protobuf field <code>repeated string annotation_spec_sets = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnnotationSpecSets()
    {
        return $this->annotation_spec_sets;
    }

    /**
     * Required. The list of annotation spec set resource name. Similar to video
     * classification, we support selecting event from multiple AnnotationSpecSet
     * at the same time.
     *
     * Generated from protobuf field <code>repeated string annotation_spec_sets = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnnotationSpecSets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotation_spec_sets = $arr;

        return $this;
    }

}

