<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/data_stats.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data statistics of a series of STRING values.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.StringStats</code>
 */
class StringStats extends \Google\Protobuf\Internal\Message
{
    /**
     * The statistics of the top 20 unigrams, ordered by
     * [count][google.cloud.automl.v1beta1.StringStats.UnigramStats.count].
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.StringStats.UnigramStats top_unigram_stats = 1;</code>
     */
    private $top_unigram_stats;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1beta1\StringStats\UnigramStats[]|\Google\Protobuf\Internal\RepeatedField $top_unigram_stats
     *           The statistics of the top 20 unigrams, ordered by
     *           [count][google.cloud.automl.v1beta1.StringStats.UnigramStats.count].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\DataStats::initOnce();
        parent::__construct($data);
    }

    /**
     * The statistics of the top 20 unigrams, ordered by
     * [count][google.cloud.automl.v1beta1.StringStats.UnigramStats.count].
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.StringStats.UnigramStats top_unigram_stats = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopUnigramStats()
    {
        return $this->top_unigram_stats;
    }

    /**
     * The statistics of the top 20 unigrams, ordered by
     * [count][google.cloud.automl.v1beta1.StringStats.UnigramStats.count].
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.StringStats.UnigramStats top_unigram_stats = 1;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\StringStats\UnigramStats[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopUnigramStats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1beta1\StringStats\UnigramStats::class);
        $this->top_unigram_stats = $arr;

        return $this;
    }

}

