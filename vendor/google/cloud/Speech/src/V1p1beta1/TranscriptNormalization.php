<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/resource.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Transcription normalization configuration. Use transcription normalization
 * to automatically replace parts of the transcript with phrases of your
 * choosing. For StreamingRecognize, this normalization only applies to stable
 * partial transcripts (stability > 0.8) and final transcripts.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.TranscriptNormalization</code>
 */
class TranscriptNormalization extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of replacement entries. We will perform replacement with one entry
     * at a time. For example, the second entry in ["cat" => "dog", "mountain cat"
     * => "mountain dog"] will never be applied because we will always process the
     * first entry before it. At most 100 entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.TranscriptNormalization.Entry entries = 1;</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Speech\V1p1beta1\TranscriptNormalization\Entry[]|\Google\Protobuf\Internal\RepeatedField $entries
     *           A list of replacement entries. We will perform replacement with one entry
     *           at a time. For example, the second entry in ["cat" => "dog", "mountain cat"
     *           => "mountain dog"] will never be applied because we will always process the
     *           first entry before it. At most 100 entries.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of replacement entries. We will perform replacement with one entry
     * at a time. For example, the second entry in ["cat" => "dog", "mountain cat"
     * => "mountain dog"] will never be applied because we will always process the
     * first entry before it. At most 100 entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.TranscriptNormalization.Entry entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * A list of replacement entries. We will perform replacement with one entry
     * at a time. For example, the second entry in ["cat" => "dog", "mountain cat"
     * => "mountain dog"] will never be applied because we will always process the
     * first entry before it. At most 100 entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1p1beta1.TranscriptNormalization.Entry entries = 1;</code>
     * @param \Google\Cloud\Speech\V1p1beta1\TranscriptNormalization\Entry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1p1beta1\TranscriptNormalization\Entry::class);
        $this->entries = $arr;

        return $this;
    }

}

