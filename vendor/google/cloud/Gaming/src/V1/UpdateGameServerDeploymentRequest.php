<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_deployments.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GameServerDeploymentsService.UpdateGameServerDeployment.
 * Only allows updates for labels.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.UpdateGameServerDeploymentRequest</code>
 */
class UpdateGameServerDeploymentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The game server delpoyment to be updated.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerDeployment game_server_deployment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $game_server_deployment = null;
    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. For the `FieldMask` definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Gaming\V1\GameServerDeployment $game_server_deployment
     *           Required. The game server delpoyment to be updated.
     *           Only fields specified in update_mask are updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update. At least one path must be supplied in
     *           this field. For the `FieldMask` definition, see
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerDeployments::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The game server delpoyment to be updated.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerDeployment game_server_deployment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Gaming\V1\GameServerDeployment|null
     */
    public function getGameServerDeployment()
    {
        return $this->game_server_deployment;
    }

    public function hasGameServerDeployment()
    {
        return isset($this->game_server_deployment);
    }

    public function clearGameServerDeployment()
    {
        unset($this->game_server_deployment);
    }

    /**
     * Required. The game server delpoyment to be updated.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GameServerDeployment game_server_deployment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Gaming\V1\GameServerDeployment $var
     * @return $this
     */
    public function setGameServerDeployment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Gaming\V1\GameServerDeployment::class);
        $this->game_server_deployment = $var;

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

}

