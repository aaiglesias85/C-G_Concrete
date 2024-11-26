<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_clusters.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * GameServerClustersService.PreviewCreateGameServerCluster.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.PreviewCreateGameServerClusterResponse</code>
 */
class PreviewCreateGameServerClusterResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The ETag of the game server cluster.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     */
    private $etag = '';
    /**
     * The target state.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.TargetState target_state = 3;</code>
     */
    private $target_state = null;
    /**
     * Output only. The state of the Kubernetes cluster in preview, this will be available if
     * 'view' is set to `FULL` in the relevant List/Get/Preview request.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.KubernetesClusterState cluster_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $cluster_state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $etag
     *           The ETag of the game server cluster.
     *     @type \Google\Cloud\Gaming\V1\TargetState $target_state
     *           The target state.
     *     @type \Google\Cloud\Gaming\V1\KubernetesClusterState $cluster_state
     *           Output only. The state of the Kubernetes cluster in preview, this will be available if
     *           'view' is set to `FULL` in the relevant List/Get/Preview request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerClusters::initOnce();
        parent::__construct($data);
    }

    /**
     * The ETag of the game server cluster.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * The ETag of the game server cluster.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * The target state.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.TargetState target_state = 3;</code>
     * @return \Google\Cloud\Gaming\V1\TargetState|null
     */
    public function getTargetState()
    {
        return $this->target_state;
    }

    public function hasTargetState()
    {
        return isset($this->target_state);
    }

    public function clearTargetState()
    {
        unset($this->target_state);
    }

    /**
     * The target state.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.TargetState target_state = 3;</code>
     * @param \Google\Cloud\Gaming\V1\TargetState $var
     * @return $this
     */
    public function setTargetState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Gaming\V1\TargetState::class);
        $this->target_state = $var;

        return $this;
    }

    /**
     * Output only. The state of the Kubernetes cluster in preview, this will be available if
     * 'view' is set to `FULL` in the relevant List/Get/Preview request.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.KubernetesClusterState cluster_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Gaming\V1\KubernetesClusterState|null
     */
    public function getClusterState()
    {
        return $this->cluster_state;
    }

    public function hasClusterState()
    {
        return isset($this->cluster_state);
    }

    public function clearClusterState()
    {
        unset($this->cluster_state);
    }

    /**
     * Output only. The state of the Kubernetes cluster in preview, this will be available if
     * 'view' is set to `FULL` in the relevant List/Get/Preview request.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.KubernetesClusterState cluster_state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Gaming\V1\KubernetesClusterState $var
     * @return $this
     */
    public function setClusterState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Gaming\V1\KubernetesClusterState::class);
        $this->cluster_state = $var;

        return $this;
    }

}

