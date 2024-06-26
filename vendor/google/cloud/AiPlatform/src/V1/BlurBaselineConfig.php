<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for blur baseline.
 * When enabled, a linear path from the maximally blurred image to the input
 * image is created. Using a blurred baseline instead of zero (black image) is
 * motivated by the BlurIG approach explained here:
 * https://arxiv.org/abs/2004.03383
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BlurBaselineConfig</code>
 */
class BlurBaselineConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The standard deviation of the blur kernel for the blurred baseline. The
     * same blurring parameter is used for both the height and the width
     * dimension. If not set, the method defaults to the zero (i.e. black for
     * images) baseline.
     *
     * Generated from protobuf field <code>float max_blur_sigma = 1;</code>
     */
    private $max_blur_sigma = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $max_blur_sigma
     *           The standard deviation of the blur kernel for the blurred baseline. The
     *           same blurring parameter is used for both the height and the width
     *           dimension. If not set, the method defaults to the zero (i.e. black for
     *           images) baseline.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        parent::__construct($data);
    }

    /**
     * The standard deviation of the blur kernel for the blurred baseline. The
     * same blurring parameter is used for both the height and the width
     * dimension. If not set, the method defaults to the zero (i.e. black for
     * images) baseline.
     *
     * Generated from protobuf field <code>float max_blur_sigma = 1;</code>
     * @return float
     */
    public function getMaxBlurSigma()
    {
        return $this->max_blur_sigma;
    }

    /**
     * The standard deviation of the blur kernel for the blurred baseline. The
     * same blurring parameter is used for both the height and the width
     * dimension. If not set, the method defaults to the zero (i.e. black for
     * images) baseline.
     *
     * Generated from protobuf field <code>float max_blur_sigma = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setMaxBlurSigma($var)
    {
        GPBUtil::checkFloat($var);
        $this->max_blur_sigma = $var;

        return $this;
    }

}

