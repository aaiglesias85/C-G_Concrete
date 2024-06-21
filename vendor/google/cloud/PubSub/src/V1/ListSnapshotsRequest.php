<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ListSnapshots` method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.ListSnapshotsRequest</code>
 */
class ListSnapshotsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project in which to list snapshots.
     * Format is `projects/{project-id}`.
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $project = '';
    /**
     * Maximum number of snapshots to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The value returned by the last `ListSnapshotsResponse`; indicates that this
     * is a continuation of a prior `ListSnapshots` call, and that the system
     * should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Required. The name of the project in which to list snapshots.
     *           Format is `projects/{project-id}`.
     *     @type int $page_size
     *           Maximum number of snapshots to return.
     *     @type string $page_token
     *           The value returned by the last `ListSnapshotsResponse`; indicates that this
     *           is a continuation of a prior `ListSnapshots` call, and that the system
     *           should return the next page of data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project in which to list snapshots.
     * Format is `projects/{project-id}`.
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Required. The name of the project in which to list snapshots.
     * Format is `projects/{project-id}`.
     *
     * Generated from protobuf field <code>string project = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Maximum number of snapshots to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of snapshots to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The value returned by the last `ListSnapshotsResponse`; indicates that this
     * is a continuation of a prior `ListSnapshots` call, and that the system
     * should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value returned by the last `ListSnapshotsResponse`; indicates that this
     * is a continuation of a prior `ListSnapshots` call, and that the system
     * should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

