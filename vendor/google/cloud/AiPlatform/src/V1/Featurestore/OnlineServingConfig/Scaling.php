<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore.proto

namespace Google\Cloud\AIPlatform\V1\Featurestore\OnlineServingConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Online serving scaling configuration. If min_node_count and
 * max_node_count are set to the same value, the cluster will be configured
 * with the fixed number of node (no auto-scaling).
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Featurestore.OnlineServingConfig.Scaling</code>
 */
class Scaling extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The minimum number of nodes to scale down to. Must be greater than or
     * equal to 1.
     *
     * Generated from protobuf field <code>int32 min_node_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $min_node_count = 0;
    /**
     * The maximum number of nodes to scale up to. Must be greater than
     * min_node_count, and less than or equal to 10 times of 'min_node_count'.
     *
     * Generated from protobuf field <code>int32 max_node_count = 2;</code>
     */
    private $max_node_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_node_count
     *           Required. The minimum number of nodes to scale down to. Must be greater than or
     *           equal to 1.
     *     @type int $max_node_count
     *           The maximum number of nodes to scale up to. Must be greater than
     *           min_node_count, and less than or equal to 10 times of 'min_node_count'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Featurestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The minimum number of nodes to scale down to. Must be greater than or
     * equal to 1.
     *
     * Generated from protobuf field <code>int32 min_node_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMinNodeCount()
    {
        return $this->min_node_count;
    }

    /**
     * Required. The minimum number of nodes to scale down to. Must be greater than or
     * equal to 1.
     *
     * Generated from protobuf field <code>int32 min_node_count = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMinNodeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_node_count = $var;

        return $this;
    }

    /**
     * The maximum number of nodes to scale up to. Must be greater than
     * min_node_count, and less than or equal to 10 times of 'min_node_count'.
     *
     * Generated from protobuf field <code>int32 max_node_count = 2;</code>
     * @return int
     */
    public function getMaxNodeCount()
    {
        return $this->max_node_count;
    }

    /**
     * The maximum number of nodes to scale up to. Must be greater than
     * min_node_count, and less than or equal to 10 times of 'min_node_count'.
     *
     * Generated from protobuf field <code>int32 max_node_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxNodeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_node_count = $var;

        return $this;
    }

}


