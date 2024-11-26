<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/detection.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Annotation details for video object tracking.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.VideoObjectTrackingAnnotation</code>
 */
class VideoObjectTrackingAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The instance of the object, expressed as a positive integer. Used to tell
     * apart objects of the same type (i.e. AnnotationSpec) when multiple are
     * present on a single example.
     * NOTE: Instance ID prediction quality is not a part of model evaluation and
     * is done as best effort. Especially in cases when an entity goes
     * off-screen for a longer time (minutes), when it comes back it may be given
     * a new instance ID.
     *
     * Generated from protobuf field <code>string instance_id = 1;</code>
     */
    private $instance_id = '';
    /**
     * Required. A time (frame) of a video to which this annotation pertains.
     * Represented as the duration since the video's start.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 2;</code>
     */
    private $time_offset = null;
    /**
     * Required. The rectangle representing the object location on the frame (i.e.
     * at the time_offset of the video).
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.BoundingPoly bounding_box = 3;</code>
     */
    private $bounding_box = null;
    /**
     * Output only. The confidence that this annotation is positive for the video at
     * the time_offset, value in [0, 1], higher means higher positivity
     * confidence. For annotations created by the user the score is 1. When
     * user approves an annotation, the original float score is kept (and not
     * changed to 1).
     *
     * Generated from protobuf field <code>float score = 4;</code>
     */
    private $score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_id
     *           Optional. The instance of the object, expressed as a positive integer. Used to tell
     *           apart objects of the same type (i.e. AnnotationSpec) when multiple are
     *           present on a single example.
     *           NOTE: Instance ID prediction quality is not a part of model evaluation and
     *           is done as best effort. Especially in cases when an entity goes
     *           off-screen for a longer time (minutes), when it comes back it may be given
     *           a new instance ID.
     *     @type \Google\Protobuf\Duration $time_offset
     *           Required. A time (frame) of a video to which this annotation pertains.
     *           Represented as the duration since the video's start.
     *     @type \Google\Cloud\AutoMl\V1beta1\BoundingPoly $bounding_box
     *           Required. The rectangle representing the object location on the frame (i.e.
     *           at the time_offset of the video).
     *     @type float $score
     *           Output only. The confidence that this annotation is positive for the video at
     *           the time_offset, value in [0, 1], higher means higher positivity
     *           confidence. For annotations created by the user the score is 1. When
     *           user approves an annotation, the original float score is kept (and not
     *           changed to 1).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Detection::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The instance of the object, expressed as a positive integer. Used to tell
     * apart objects of the same type (i.e. AnnotationSpec) when multiple are
     * present on a single example.
     * NOTE: Instance ID prediction quality is not a part of model evaluation and
     * is done as best effort. Especially in cases when an entity goes
     * off-screen for a longer time (minutes), when it comes back it may be given
     * a new instance ID.
     *
     * Generated from protobuf field <code>string instance_id = 1;</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * Optional. The instance of the object, expressed as a positive integer. Used to tell
     * apart objects of the same type (i.e. AnnotationSpec) when multiple are
     * present on a single example.
     * NOTE: Instance ID prediction quality is not a part of model evaluation and
     * is done as best effort. Especially in cases when an entity goes
     * off-screen for a longer time (minutes), when it comes back it may be given
     * a new instance ID.
     *
     * Generated from protobuf field <code>string instance_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;

        return $this;
    }

    /**
     * Required. A time (frame) of a video to which this annotation pertains.
     * Represented as the duration since the video's start.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTimeOffset()
    {
        return $this->time_offset;
    }

    public function hasTimeOffset()
    {
        return isset($this->time_offset);
    }

    public function clearTimeOffset()
    {
        unset($this->time_offset);
    }

    /**
     * Required. A time (frame) of a video to which this annotation pertains.
     * Represented as the duration since the video's start.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->time_offset = $var;

        return $this;
    }

    /**
     * Required. The rectangle representing the object location on the frame (i.e.
     * at the time_offset of the video).
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.BoundingPoly bounding_box = 3;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\BoundingPoly|null
     */
    public function getBoundingBox()
    {
        return $this->bounding_box;
    }

    public function hasBoundingBox()
    {
        return isset($this->bounding_box);
    }

    public function clearBoundingBox()
    {
        unset($this->bounding_box);
    }

    /**
     * Required. The rectangle representing the object location on the frame (i.e.
     * at the time_offset of the video).
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.BoundingPoly bounding_box = 3;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\BoundingPoly $var
     * @return $this
     */
    public function setBoundingBox($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\BoundingPoly::class);
        $this->bounding_box = $var;

        return $this;
    }

    /**
     * Output only. The confidence that this annotation is positive for the video at
     * the time_offset, value in [0, 1], higher means higher positivity
     * confidence. For annotations created by the user the score is 1. When
     * user approves an annotation, the original float score is kept (and not
     * changed to 1).
     *
     * Generated from protobuf field <code>float score = 4;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Output only. The confidence that this annotation is positive for the video at
     * the time_offset, value in [0, 1], higher means higher positivity
     * confidence. For annotations created by the user the score is 1. When
     * user approves an annotation, the original float score is kept (and not
     * changed to 1).
     *
     * Generated from protobuf field <code>float score = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

}

