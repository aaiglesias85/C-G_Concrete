<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of an interview.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Interview</code>
 */
class Interview extends \Google\Protobuf\Internal\Message
{
    /**
     * The rating on this interview.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Rating rating = 6;</code>
     */
    private $rating = null;
    /**
     * Required. The overall decision resulting from this interview (positive, negative,
     * nuetral).
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Outcome outcome = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $outcome = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Talent\V4beta1\Rating $rating
     *           The rating on this interview.
     *     @type int $outcome
     *           Required. The overall decision resulting from this interview (positive, negative,
     *           nuetral).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The rating on this interview.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Rating rating = 6;</code>
     * @return \Google\Cloud\Talent\V4beta1\Rating|null
     */
    public function getRating()
    {
        return $this->rating;
    }

    public function hasRating()
    {
        return isset($this->rating);
    }

    public function clearRating()
    {
        unset($this->rating);
    }

    /**
     * The rating on this interview.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Rating rating = 6;</code>
     * @param \Google\Cloud\Talent\V4beta1\Rating $var
     * @return $this
     */
    public function setRating($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\Rating::class);
        $this->rating = $var;

        return $this;
    }

    /**
     * Required. The overall decision resulting from this interview (positive, negative,
     * nuetral).
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Outcome outcome = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Required. The overall decision resulting from this interview (positive, negative,
     * nuetral).
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Outcome outcome = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setOutcome($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\Outcome::class);
        $this->outcome = $var;

        return $this;
    }

}

