<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_clusters.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GameServerClustersService.UpdateGameServerCluster.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.PreviewUpdateGameServerClusterRequest</code>
 */
class PreviewUpdateGameServerClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The game server cluster to be updated.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerCluster game_server_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $game_server_cluster = null;
    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. For the `FieldMask` definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Optional. The target timestamp to compute the preview.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp preview_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $preview_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Gaming\V1\GameServerCluster $game_server_cluster
     *           Required. The game server cluster to be updated.
     *           Only fields specified in update_mask are updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update. At least one path must be supplied in
     *           this field. For the `FieldMask` definition, see
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *     @type \Google\Protobuf\Timestamp $preview_time
     *           Optional. The target timestamp to compute the preview.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerClusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The game server cluster to be updated.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerCluster game_server_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The game server cluster to be updated.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerCluster game_server_cluster = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Gaming\V1\GameServerCluster $var
     * @return $this
     */
    public function setGameServerCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Gaming\V1\GameServerCluster::class);
        $this->game_server_cluster = $var;

        return $this;
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. For the `FieldMask` definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. For the `FieldMask` definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Optional. The target timestamp to compute the preview.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp preview_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPreviewTime()
    {
        return $this->preview_time;
    }

    public function hasPreviewTime()
    {
        return isset($this->preview_time);
    }

    public function clearPreviewTime()
    {
        unset($this->preview_time);
    }

    /**
     * Optional. The target timestamp to compute the preview.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp preview_time = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPreviewTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->preview_time = $var;

        return $this;
    }

}

