<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Overlay configuration.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.Overlay</code>
 */
class Overlay extends \Google\Protobuf\Internal\Message
{
    /**
     * Image overlay.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.Image image = 1;</code>
     */
    private $image = null;
    /**
     * List of Animations. The list should be chronological, without any time
     * overlap.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.Overlay.Animation animations = 2;</code>
     */
    private $animations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\Overlay\Image $image
     *           Image overlay.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\Overlay\Animation[]|\Google\Protobuf\Internal\RepeatedField $animations
     *           List of Animations. The list should be chronological, without any time
     *           overlap.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Image overlay.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.Image image = 1;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\Overlay\Image|null
     */
    public function getImage()
    {
        return $this->image;
    }

    public function hasImage()
    {
        return isset($this->image);
    }

    public function clearImage()
    {
        unset($this->image);
    }

    /**
     * Image overlay.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.Image image = 1;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\Overlay\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\Overlay\Image::class);
        $this->image = $var;

        return $this;
    }

    /**
     * List of Animations. The list should be chronological, without any time
     * overlap.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.Overlay.Animation animations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnimations()
    {
        return $this->animations;
    }

    /**
     * List of Animations. The list should be chronological, without any time
     * overlap.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.Overlay.Animation animations = 2;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\Overlay\Animation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnimations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1beta1\Overlay\Animation::class);
        $this->animations = $arr;

        return $this;
    }

}

