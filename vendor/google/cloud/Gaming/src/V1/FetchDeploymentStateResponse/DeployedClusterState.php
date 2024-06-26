<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_deployments.proto

namespace Google\Cloud\Gaming\V1\FetchDeploymentStateResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The game server cluster changes made by the game server deployment.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.FetchDeploymentStateResponse.DeployedClusterState</code>
 */
class DeployedClusterState extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string cluster = 1;</code>
     */
    private $cluster = '';
    /**
     * The details about the Agones fleets and autoscalers created in the
     * game server cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.DeployedFleetDetails fleet_details = 2;</code>
     */
    private $fleet_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster
     *           The name of the cluster.
     *     @type \Google\Cloud\Gaming\V1\DeployedFleetDetails[]|\Google\Protobuf\Internal\RepeatedField $fleet_details
     *           The details about the Agones fleets and autoscalers created in the
     *           game server cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerDeployments::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string cluster = 1;</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string cluster = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

    /**
     * The details about the Agones fleets and autoscalers created in the
     * game server cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.DeployedFleetDetails fleet_details = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFleetDetails()
    {
        return $this->fleet_details;
    }

    /**
     * The details about the Agones fleets and autoscalers created in the
     * game server cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.DeployedFleetDetails fleet_details = 2;</code>
     * @param \Google\Cloud\Gaming\V1\DeployedFleetDetails[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFleetDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Gaming\V1\DeployedFleetDetails::class);
        $this->fleet_details = $arr;

        return $this;
    }

}


