<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The details of the score received for an assessment or interview.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Rating</code>
 */
class Rating extends \Google\Protobuf\Internal\Message
{
    /**
     * Overall score.
     *
     * Generated from protobuf field <code>double overall = 1;</code>
     */
    private $overall = 0.0;
    /**
     * The minimum value for the score.
     *
     * Generated from protobuf field <code>double min = 2;</code>
     */
    private $min = 0.0;
    /**
     * The maximum value for the score.
     *
     * Generated from protobuf field <code>double max = 3;</code>
     */
    private $max = 0.0;
    /**
     * The steps within the score (for example, interval = 1 max = 5
     * min = 1 indicates that the score can be 1, 2, 3, 4, or 5)
     *
     * Generated from protobuf field <code>double interval = 4;</code>
     */
    private $interval = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $overall
     *           Overall score.
     *     @type float $min
     *           The minimum value for the score.
     *     @type float $max
     *           The maximum value for the score.
     *     @type float $interval
     *           The steps within the score (for example, interval = 1 max = 5
     *           min = 1 indicates that the score can be 1, 2, 3, 4, or 5)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Overall score.
     *
     * Generated from protobuf field <code>double overall = 1;</code>
     * @return float
     */
    public function getOverall()
    {
        return $this->overall;
    }

    /**
     * Overall score.
     *
     * Generated from protobuf field <code>double overall = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setOverall($var)
    {
        GPBUtil::checkDouble($var);
        $this->overall = $var;

        return $this;
    }

    /**
     * The minimum value for the score.
     *
     * Generated from protobuf field <code>double min = 2;</code>
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * The minimum value for the score.
     *
     * Generated from protobuf field <code>double min = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkDouble($var);
        $this->min = $var;

        return $this;
    }

    /**
     * The maximum value for the score.
     *
     * Generated from protobuf field <code>double max = 3;</code>
     * @return float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * The maximum value for the score.
     *
     * Generated from protobuf field <code>double max = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkDouble($var);
        $this->max = $var;

        return $this;
    }

    /**
     * The steps within the score (for example, interval = 1 max = 5
     * min = 1 indicates that the score can be 1, 2, 3, 4, or 5)
     *
     * Generated from protobuf field <code>double interval = 4;</code>
     * @return float
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * The steps within the score (for example, interval = 1 max = 5
     * min = 1 indicates that the score can be 1, 2, 3, 4, or 5)
     *
     * Generated from protobuf field <code>double interval = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkDouble($var);
        $this->interval = $var;

        return $this;
    }

}

