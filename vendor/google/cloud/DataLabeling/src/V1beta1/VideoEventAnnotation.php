<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/annotation.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video event annotation.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.VideoEventAnnotation</code>
 */
class VideoEventAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Label of the event in this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     */
    private $annotation_spec = null;
    /**
     * The time segment of the video to which the annotation applies.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.TimeSegment time_segment = 2;</code>
     */
    private $time_segment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec $annotation_spec
     *           Label of the event in this annotation.
     *     @type \Google\Cloud\DataLabeling\V1beta1\TimeSegment $time_segment
     *           The time segment of the video to which the annotation applies.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Annotation::initOnce();
        parent::__construct($data);
    }

    /**
     * Label of the event in this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec|null
     */
    public function getAnnotationSpec()
    {
        return $this->annotation_spec;
    }

    public function hasAnnotationSpec()
    {
        return isset($this->annotation_spec);
    }

    public function clearAnnotationSpec()
    {
        unset($this->annotation_spec);
    }

    /**
     * Label of the event in this annotation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSpec annotation_spec = 1;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec $var
     * @return $this
     */
    public function setAnnotationSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\AnnotationSpec::class);
        $this->annotation_spec = $var;

        return $this;
    }

    /**
     * The time segment of the video to which the annotation applies.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.TimeSegment time_segment = 2;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\TimeSegment|null
     */
    public function getTimeSegment()
    {
        return $this->time_segment;
    }

    public function hasTimeSegment()
    {
        return isset($this->time_segment);
    }

    public function clearTimeSegment()
    {
        unset($this->time_segment);
    }

    /**
     * The time segment of the video to which the annotation applies.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.TimeSegment time_segment = 2;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\TimeSegment $var
     * @return $this
     */
    public function setTimeSegment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\TimeSegment::class);
        $this->time_segment = $var;

        return $this;
    }

}

