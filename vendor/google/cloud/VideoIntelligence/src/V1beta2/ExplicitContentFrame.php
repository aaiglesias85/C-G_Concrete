<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta2/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video frame level annotation results for explicit content.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1beta2.ExplicitContentFrame</code>
 */
class ExplicitContentFrame extends \Google\Protobuf\Internal\Message
{
    /**
     * Time-offset, relative to the beginning of the video, corresponding to the
     * video frame for this location.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 1;</code>
     */
    private $time_offset = null;
    /**
     * Likelihood of the pornography content..
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.Likelihood pornography_likelihood = 2;</code>
     */
    private $pornography_likelihood = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $time_offset
     *           Time-offset, relative to the beginning of the video, corresponding to the
     *           video frame for this location.
     *     @type int $pornography_likelihood
     *           Likelihood of the pornography content..
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta2\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Time-offset, relative to the beginning of the video, corresponding to the
     * video frame for this location.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 1;</code>
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
     * Time-offset, relative to the beginning of the video, corresponding to the
     * video frame for this location.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration time_offset = 1;</code>
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
     * Likelihood of the pornography content..
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.Likelihood pornography_likelihood = 2;</code>
     * @return int
     */
    public function getPornographyLikelihood()
    {
        return $this->pornography_likelihood;
    }

    /**
     * Likelihood of the pornography content..
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.Likelihood pornography_likelihood = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPornographyLikelihood($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VideoIntelligence\V1beta2\Likelihood::class);
        $this->pornography_likelihood = $var;

        return $this;
    }

}

