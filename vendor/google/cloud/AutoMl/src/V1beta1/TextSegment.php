<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/text_segment.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A contiguous part of a text (string), assuming it has an UTF-8 NFC encoding.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.TextSegment</code>
 */
class TextSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The content of the TextSegment.
     *
     * Generated from protobuf field <code>string content = 3;</code>
     */
    private $content = '';
    /**
     * Required. Zero-based character index of the first character of the text
     * segment (counting characters from the beginning of the text).
     *
     * Generated from protobuf field <code>int64 start_offset = 1;</code>
     */
    private $start_offset = 0;
    /**
     * Required. Zero-based character index of the first character past the end of
     * the text segment (counting character from the beginning of the text).
     * The character at the end_offset is NOT included in the text segment.
     *
     * Generated from protobuf field <code>int64 end_offset = 2;</code>
     */
    private $end_offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content
     *           Output only. The content of the TextSegment.
     *     @type int|string $start_offset
     *           Required. Zero-based character index of the first character of the text
     *           segment (counting characters from the beginning of the text).
     *     @type int|string $end_offset
     *           Required. Zero-based character index of the first character past the end of
     *           the text segment (counting character from the beginning of the text).
     *           The character at the end_offset is NOT included in the text segment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TextSegment::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The content of the TextSegment.
     *
     * Generated from protobuf field <code>string content = 3;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Output only. The content of the TextSegment.
     *
     * Generated from protobuf field <code>string content = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * Required. Zero-based character index of the first character of the text
     * segment (counting characters from the beginning of the text).
     *
     * Generated from protobuf field <code>int64 start_offset = 1;</code>
     * @return int|string
     */
    public function getStartOffset()
    {
        return $this->start_offset;
    }

    /**
     * Required. Zero-based character index of the first character of the text
     * segment (counting characters from the beginning of the text).
     *
     * Generated from protobuf field <code>int64 start_offset = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_offset = $var;

        return $this;
    }

    /**
     * Required. Zero-based character index of the first character past the end of
     * the text segment (counting character from the beginning of the text).
     * The character at the end_offset is NOT included in the text segment.
     *
     * Generated from protobuf field <code>int64 end_offset = 2;</code>
     * @return int|string
     */
    public function getEndOffset()
    {
        return $this->end_offset;
    }

    /**
     * Required. Zero-based character index of the first character past the end of
     * the text segment (counting character from the beginning of the text).
     * The character at the end_offset is NOT included in the text segment.
     *
     * Generated from protobuf field <code>int64 end_offset = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->end_offset = $var;

        return $this;
    }

}

