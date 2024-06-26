<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v2/trace.proto

namespace Google\Cloud\Trace\V2\Span\TimeEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An event describing a message sent/received between Spans.
 *
 * Generated from protobuf message <code>google.devtools.cloudtrace.v2.Span.TimeEvent.MessageEvent</code>
 */
class MessageEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of MessageEvent. Indicates whether the message was sent or
     * received.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.TimeEvent.MessageEvent.Type type = 1;</code>
     */
    private $type = 0;
    /**
     * An identifier for the MessageEvent's message that can be used to match
     * SENT and RECEIVED MessageEvents. It is recommended to be unique within
     * a Span.
     *
     * Generated from protobuf field <code>int64 id = 2;</code>
     */
    private $id = 0;
    /**
     * The number of uncompressed bytes sent or received.
     *
     * Generated from protobuf field <code>int64 uncompressed_size_bytes = 3;</code>
     */
    private $uncompressed_size_bytes = 0;
    /**
     * The number of compressed bytes sent or received. If missing assumed to
     * be the same size as uncompressed.
     *
     * Generated from protobuf field <code>int64 compressed_size_bytes = 4;</code>
     */
    private $compressed_size_bytes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Type of MessageEvent. Indicates whether the message was sent or
     *           received.
     *     @type int|string $id
     *           An identifier for the MessageEvent's message that can be used to match
     *           SENT and RECEIVED MessageEvents. It is recommended to be unique within
     *           a Span.
     *     @type int|string $uncompressed_size_bytes
     *           The number of uncompressed bytes sent or received.
     *     @type int|string $compressed_size_bytes
     *           The number of compressed bytes sent or received. If missing assumed to
     *           be the same size as uncompressed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudtrace\V2\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of MessageEvent. Indicates whether the message was sent or
     * received.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.TimeEvent.MessageEvent.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of MessageEvent. Indicates whether the message was sent or
     * received.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.TimeEvent.MessageEvent.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Trace\V2\Span\TimeEvent\MessageEvent\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * An identifier for the MessageEvent's message that can be used to match
     * SENT and RECEIVED MessageEvents. It is recommended to be unique within
     * a Span.
     *
     * Generated from protobuf field <code>int64 id = 2;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * An identifier for the MessageEvent's message that can be used to match
     * SENT and RECEIVED MessageEvents. It is recommended to be unique within
     * a Span.
     *
     * Generated from protobuf field <code>int64 id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * The number of uncompressed bytes sent or received.
     *
     * Generated from protobuf field <code>int64 uncompressed_size_bytes = 3;</code>
     * @return int|string
     */
    public function getUncompressedSizeBytes()
    {
        return $this->uncompressed_size_bytes;
    }

    /**
     * The number of uncompressed bytes sent or received.
     *
     * Generated from protobuf field <code>int64 uncompressed_size_bytes = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUncompressedSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->uncompressed_size_bytes = $var;

        return $this;
    }

    /**
     * The number of compressed bytes sent or received. If missing assumed to
     * be the same size as uncompressed.
     *
     * Generated from protobuf field <code>int64 compressed_size_bytes = 4;</code>
     * @return int|string
     */
    public function getCompressedSizeBytes()
    {
        return $this->compressed_size_bytes;
    }

    /**
     * The number of compressed bytes sent or received. If missing assumed to
     * be the same size as uncompressed.
     *
     * Generated from protobuf field <code>int64 compressed_size_bytes = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompressedSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->compressed_size_bytes = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MessageEvent::class, \Google\Cloud\Trace\V2\Span_TimeEvent_MessageEvent::class);

