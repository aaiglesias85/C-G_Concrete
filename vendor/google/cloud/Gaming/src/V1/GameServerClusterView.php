<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_clusters.proto

namespace Google\Cloud\Gaming\V1;

use UnexpectedValueException;

/**
 * A view for GameServerCluster objects.
 *
 * Protobuf type <code>google.cloud.gaming.v1.GameServerClusterView</code>
 */
class GameServerClusterView
{
    /**
     * The default / unset value.
     * The API will default to the BASIC view.
     *
     * Generated from protobuf enum <code>GAME_SERVER_CLUSTER_VIEW_UNSPECIFIED = 0;</code>
     */
    const GAME_SERVER_CLUSTER_VIEW_UNSPECIFIED = 0;
    /**
     * Include basic information of a GameServerCluster resource and omit
     * `cluster_state`. This is the default value (for ListGameServerClusters,
     * GetGameServerCluster and PreviewCreateGameServerCluster).
     *
     * Generated from protobuf enum <code>BASIC = 1;</code>
     */
    const BASIC = 1;
    /**
     * Include everything.
     *
     * Generated from protobuf enum <code>FULL = 2;</code>
     */
    const FULL = 2;

    private static $valueToName = [
        self::GAME_SERVER_CLUSTER_VIEW_UNSPECIFIED => 'GAME_SERVER_CLUSTER_VIEW_UNSPECIFIED',
        self::BASIC => 'BASIC',
        self::FULL => 'FULL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

