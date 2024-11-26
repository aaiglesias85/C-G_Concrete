<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta2/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Explicit content annotation (based on per-frame visual signals only).
 * If no explicit content has been detected in a frame, no annotations are
 * present for that frame.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1beta2.ExplicitContentAnnotation</code>
 */
class ExplicitContentAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * All video frames where explicit content was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.ExplicitContentFrame frames = 1;</code>
     */
    private $frames;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VideoIntelligence\V1beta2\ExplicitContentFrame[]|\Google\Protobuf\Internal\RepeatedField $frames
     *           All video frames where explicit content was detected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta2\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * All video frames where explicit content was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.ExplicitContentFrame frames = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * All video frames where explicit content was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.ExplicitContentFrame frames = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta2\ExplicitContentFrame[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFrames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1beta2\ExplicitContentFrame::class);
        $this->frames = $arr;

        return $this;
    }

}

