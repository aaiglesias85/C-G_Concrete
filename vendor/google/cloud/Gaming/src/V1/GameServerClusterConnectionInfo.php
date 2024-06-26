<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_clusters.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The game server cluster connection information.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.GameServerClusterConnectionInfo</code>
 */
class GameServerClusterConnectionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Namespace designated on the game server cluster where the Agones game
     * server instances will be created. Existence of the namespace will be
     * validated during creation.
     *
     * Generated from protobuf field <code>string namespace = 5;</code>
     */
    private $namespace = '';
    protected $cluster_reference;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Gaming\V1\GkeClusterReference $gke_cluster_reference
     *           Reference to the GKE cluster where the game servers are installed.
     *     @type string $namespace
     *           Namespace designated on the game server cluster where the Agones game
     *           server instances will be created. Existence of the namespace will be
     *           validated during creation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerClusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Reference to the GKE cluster where the game servers are installed.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GkeClusterReference gke_cluster_reference = 7;</code>
     * @return \Google\Cloud\Gaming\V1\GkeClusterReference|null
     */
    public function getGkeClusterReference()
    {
        return $this->readOneof(7);
    }

    public function hasGkeClusterReference()
    {
        return $this->hasOneof(7);
    }

    /**
     * Reference to the GKE cluster where the game servers are installed.
     *
     * Generated from protobuf field <code>.google.cloud.gaming.v1.GkeClusterReference gke_cluster_reference = 7;</code>
     * @param \Google\Cloud\Gaming\V1\GkeClusterReference $var
     * @return $this
     */
    public function setGkeClusterReference($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Gaming\V1\GkeClusterReference::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Namespace designated on the game server cluster where the Agones game
     * server instances will be created. Existence of the namespace will be
     * validated during creation.
     *
     * Generated from protobuf field <code>string namespace = 5;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Namespace designated on the game server cluster where the Agones game
     * server instances will be created. Existence of the namespace will be
     * validated during creation.
     *
     * Generated from protobuf field <code>string namespace = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getClusterReference()
    {
        return $this->whichOneof("cluster_reference");
    }

}

