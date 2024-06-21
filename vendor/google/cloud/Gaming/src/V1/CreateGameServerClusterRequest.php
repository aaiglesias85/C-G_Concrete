<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_clusters.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GameServerClustersService.CreateGameServerCluster.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.CreateGameServerClusterRequest</code>
 */
class CreateGameServerClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name, in the following form:
     * `projects/{project}/locations/{location}/realms/{realm-id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The ID of the game server cluster resource to be created.
     *
     * Generated from protobuf field <code>string game_server_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $game_server_cluster_id = '';
    /**
     * Required. The game server cluster resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerCluster game_server_cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $game_server_cluster = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name, in the following form:
     *           `projects/{project}/locations/{location}/realms/{realm-id}`.
     *     @type string $game_server_cluster_id
     *           Required. The ID of the game server cluster resource to be created.
     *     @type \Google\Cloud\Gaming\V1\GameServerCluster $game_server_cluster
     *           Required. The game server cluster resource to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerClusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name, in the following form:
     * `projects/{project}/locations/{location}/realms/{realm-id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name, in the following form:
     * `projects/{project}/locations/{location}/realms/{realm-id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The ID of the game server cluster resource to be created.
     *
     * Generated from protobuf field <code>string game_server_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getGameServerClusterId()
    {
        return $this->game_server_cluster_id;
    }

    /**
     * Required. The ID of the game server cluster resource to be created.
     *
     * Generated from protobuf field <code>string game_server_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setGameServerClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->game_server_cluster_id = $var;

        return $this;
    }

    /**
     * Required. The game server cluster resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerCluster game_server_cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Gaming\V1\GameServerCluster|null
     */
    public function getGameServerCluster()
    {
        return $this->game_server_cluster;
    }

    public function hasGameServerCluster()
    {
        return isset($this->game_server_cluster);
    }

    public function clearGameServerCluster()
    {
        unset($this->game_server_cluster);
    }

    /**
     * Required. The game server cluster resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerCluster game_server_cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Gaming\V1\GameServerCluster $var
     * @return $this
     */
    public function setGameServerCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Gaming\V1\GameServerCluster::class);
        $this->game_server_cluster = $var;

        return $this;
    }

}

