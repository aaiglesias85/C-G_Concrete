<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/annotation.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Start and end position in a sequence (e.g. text segment).
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.SequentialSegment</code>
 */
class SequentialSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * Start position (inclusive).
     *
     * Generated from protobuf field <code>int32 start = 1;</code>
     */
    private $start = 0;
    /**
     * End position (exclusive).
     *
     * Generated from protobuf field <code>int32 end = 2;</code>
     */
    private $end = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $start
     *           Start position (inclusive).
     *     @type int $end
     *           End position (exclusive).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Annotation::initOnce();
        parent::__construct($data);
    }

    /**
     * Start position (inclusive).
     *
     * Generated from protobuf field <code>int32 start = 1;</code>
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Start position (inclusive).
     *
     * Generated from protobuf field <code>int32 start = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkInt32($var);
        $this->start = $var;

        return $this;
    }

    /**
     * End position (exclusive).
     *
     * Generated from protobuf field <code>int32 end = 2;</code>
     * @return int
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * End position (exclusive).
     *
     * Generated from protobuf field <code>int32 end = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt32($var);
        $this->end = $var;

        return $this;
    }

}

