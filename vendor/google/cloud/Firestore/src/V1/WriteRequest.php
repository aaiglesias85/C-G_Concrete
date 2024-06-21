<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Firestore.Write][google.firestore.v1.Firestore.Write].
 * The first request creates a stream, or resumes an existing one from a token.
 * When creating a new stream, the server replies with a response containing
 * only an ID and a token, to use in the next request.
 * When resuming a stream, the server first streams any responses later than the
 * given token, then a response containing only an up-to-date token, to use in
 * the next request.
 *
 * Generated from protobuf message <code>google.firestore.v1.WriteRequest</code>
 */
class WriteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     * This is only required in the first message.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $database = '';
    /**
     * The ID of the write stream to resume.
     * This may only be set in the first message. When left empty, a new write
     * stream will be created.
     *
     * Generated from protobuf field <code>string stream_id = 2;</code>
     */
    private $stream_id = '';
    /**
     * The writes to apply.
     * Always executed atomically and in order.
     * This must be empty on the first request.
     * This may be empty on the last request.
     * This must not be empty on all other requests.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.Write writes = 3;</code>
     */
    private $writes;
    /**
     * A stream token that was previously sent by the server.
     * The client should set this field to the token from the most recent
     * [WriteResponse][google.firestore.v1.WriteResponse] it has received. This acknowledges that the client has
     * received responses up to this token. After sending this token, earlier
     * tokens may not be used anymore.
     * The server may close the stream if there are too many unacknowledged
     * responses.
     * Leave this field unset when creating a new stream. To resume a stream at
     * a specific point, set this field and the `stream_id` field.
     * Leave this field unset when creating a new stream.
     *
     * Generated from protobuf field <code>bytes stream_token = 4;</code>
     */
    private $stream_token = '';
    /**
     * Labels associated with this write request.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           Required. The database name. In the format:
     *           `projects/{project_id}/databases/{database_id}`.
     *           This is only required in the first message.
     *     @type string $stream_id
     *           The ID of the write stream to resume.
     *           This may only be set in the first message. When left empty, a new write
     *           stream will be created.
     *     @type \Google\Cloud\Firestore\V1\Write[]|\Google\Protobuf\Internal\RepeatedField $writes
     *           The writes to apply.
     *           Always executed atomically and in order.
     *           This must be empty on the first request.
     *           This may be empty on the last request.
     *           This must not be empty on all other requests.
     *     @type string $stream_token
     *           A stream token that was previously sent by the server.
     *           The client should set this field to the token from the most recent
     *           [WriteResponse][google.firestore.v1.WriteResponse] it has received. This acknowledges that the client has
     *           received responses up to this token. After sending this token, earlier
     *           tokens may not be used anymore.
     *           The server may close the stream if there are too many unacknowledged
     *           responses.
     *           Leave this field unset when creating a new stream. To resume a stream at
     *           a specific point, set this field and the `stream_id` field.
     *           Leave this field unset when creating a new stream.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels associated with this write request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     * This is only required in the first message.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     * This is only required in the first message.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * The ID of the write stream to resume.
     * This may only be set in the first message. When left empty, a new write
     * stream will be created.
     *
     * Generated from protobuf field <code>string stream_id = 2;</code>
     * @return string
     */
    public function getStreamId()
    {
        return $this->stream_id;
    }

    /**
     * The ID of the write stream to resume.
     * This may only be set in the first message. When left empty, a new write
     * stream will be created.
     *
     * Generated from protobuf field <code>string stream_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStreamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stream_id = $var;

        return $this;
    }

    /**
     * The writes to apply.
     * Always executed atomically and in order.
     * This must be empty on the first request.
     * This may be empty on the last request.
     * This must not be empty on all other requests.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.Write writes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWrites()
    {
        return $this->writes;
    }

    /**
     * The writes to apply.
     * Always executed atomically and in order.
     * This must be empty on the first request.
     * This may be empty on the last request.
     * This must not be empty on all other requests.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.Write writes = 3;</code>
     * @param \Google\Cloud\Firestore\V1\Write[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWrites($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\V1\Write::class);
        $this->writes = $arr;

        return $this;
    }

    /**
     * A stream token that was previously sent by the server.
     * The client should set this field to the token from the most recent
     * [WriteResponse][google.firestore.v1.WriteResponse] it has received. This acknowledges that the client has
     * received responses up to this token. After sending this token, earlier
     * tokens may not be used anymore.
     * The server may close the stream if there are too many unacknowledged
     * responses.
     * Leave this field unset when creating a new stream. To resume a stream at
     * a specific point, set this field and the `stream_id` field.
     * Leave this field unset when creating a new stream.
     *
     * Generated from protobuf field <code>bytes stream_token = 4;</code>
     * @return string
     */
    public function getStreamToken()
    {
        return $this->stream_token;
    }

    /**
     * A stream token that was previously sent by the server.
     * The client should set this field to the token from the most recent
     * [WriteResponse][google.firestore.v1.WriteResponse] it has received. This acknowledges that the client has
     * received responses up to this token. After sending this token, earlier
     * tokens may not be used anymore.
     * The server may close the stream if there are too many unacknowledged
     * responses.
     * Leave this field unset when creating a new stream. To resume a stream at
     * a specific point, set this field and the `stream_id` field.
     * Leave this field unset when creating a new stream.
     *
     * Generated from protobuf field <code>bytes stream_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStreamToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->stream_token = $var;

        return $this;
    }

    /**
     * Labels associated with this write request.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels associated with this write request.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

