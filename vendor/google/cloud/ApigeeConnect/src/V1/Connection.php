<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeconnect/v1/connection.proto

namespace Google\Cloud\ApigeeConnect\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.apigeeconnect.v1.Connection</code>
 */
class Connection extends \Google\Protobuf\Internal\Message
{
    /**
     * The endpoint that the connection is made against.
     * Format: `projects/{project_number}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1;</code>
     */
    private $endpoint = '';
    /**
     * Cluster information.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeconnect.v1.Cluster cluster = 2;</code>
     */
    private $cluster = null;
    /**
     * The count of streams.
     *
     * Generated from protobuf field <code>int32 stream_count = 3;</code>
     */
    private $stream_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint
     *           The endpoint that the connection is made against.
     *           Format: `projects/{project_number}/endpoints/{endpoint}`
     *     @type \Google\Cloud\ApigeeConnect\V1\Cluster $cluster
     *           Cluster information.
     *     @type int $stream_count
     *           The count of streams.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeconnect\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * The endpoint that the connection is made against.
     * Format: `projects/{project_number}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1;</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * The endpoint that the connection is made against.
     * Format: `projects/{project_number}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * Cluster information.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeconnect.v1.Cluster cluster = 2;</code>
     * @return \Google\Cloud\ApigeeConnect\V1\Cluster|null
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    public function hasCluster()
    {
        return isset($this->cluster);
    }

    public function clearCluster()
    {
        unset($this->cluster);
    }

    /**
     * Cluster information.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeconnect.v1.Cluster cluster = 2;</code>
     * @param \Google\Cloud\ApigeeConnect\V1\Cluster $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApigeeConnect\V1\Cluster::class);
        $this->cluster = $var;

        return $this;
    }

    /**
     * The count of streams.
     *
     * Generated from protobuf field <code>int32 stream_count = 3;</code>
     * @return int
     */
    public function getStreamCount()
    {
        return $this->stream_count;
    }

    /**
     * The count of streams.
     *
     * Generated from protobuf field <code>int32 stream_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStreamCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->stream_count = $var;

        return $this;
    }

}

