<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/lineage_subgraph.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A subgraph of the overall lineage graph. Event edges connect Artifact and
 * Execution nodes.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.LineageSubgraph</code>
 */
class LineageSubgraph extends \Google\Protobuf\Internal\Message
{
    /**
     * The Artifact nodes in the subgraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Artifact artifacts = 1;</code>
     */
    private $artifacts;
    /**
     * The Execution nodes in the subgraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Execution executions = 2;</code>
     */
    private $executions;
    /**
     * The Event edges between Artifacts and Executions in the subgraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Event events = 3;</code>
     */
    private $events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Artifact[]|\Google\Protobuf\Internal\RepeatedField $artifacts
     *           The Artifact nodes in the subgraph.
     *     @type \Google\Cloud\AIPlatform\V1\Execution[]|\Google\Protobuf\Internal\RepeatedField $executions
     *           The Execution nodes in the subgraph.
     *     @type \Google\Cloud\AIPlatform\V1\Event[]|\Google\Protobuf\Internal\RepeatedField $events
     *           The Event edges between Artifacts and Executions in the subgraph.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\LineageSubgraph::initOnce();
        parent::__construct($data);
    }

    /**
     * The Artifact nodes in the subgraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Artifact artifacts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArtifacts()
    {
        return $this->artifacts;
    }

    /**
     * The Artifact nodes in the subgraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Artifact artifacts = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\Artifact[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArtifacts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Artifact::class);
        $this->artifacts = $arr;

        return $this;
    }

    /**
     * The Execution nodes in the subgraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Execution executions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExecutions()
    {
        return $this->executions;
    }

    /**
     * The Execution nodes in the subgraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Execution executions = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\Execution[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExecutions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Execution::class);
        $this->executions = $arr;

        return $this;
    }

    /**
     * The Event edges between Artifacts and Executions in the subgraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Event events = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * The Event edges between Artifacts and Executions in the subgraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Event events = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\Event[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Event::class);
        $this->events = $arr;

        return $this;
    }

}

