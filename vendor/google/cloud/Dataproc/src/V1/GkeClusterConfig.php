<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The cluster's GKE config.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.GkeClusterConfig</code>
 */
class GkeClusterConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A target GKE cluster to deploy to. It must be in the same project and
     * region as the Dataproc cluster (the GKE cluster can be zonal or regional).
     * Format: 'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *
     * Generated from protobuf field <code>string gke_cluster_target = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $gke_cluster_target = '';
    /**
     * Optional. GKE NodePools where workloads will be scheduled. At least one node pool
     * must be assigned the 'default' role. Each role can be given to only a
     * single NodePoolTarget. All NodePools must have the same location settings.
     * If a nodePoolTarget is not specified, Dataproc constructs a default
     * nodePoolTarget.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget node_pool_target = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $node_pool_target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gke_cluster_target
     *           Optional. A target GKE cluster to deploy to. It must be in the same project and
     *           region as the Dataproc cluster (the GKE cluster can be zonal or regional).
     *           Format: 'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *     @type \Google\Cloud\Dataproc\V1\GkeNodePoolTarget[]|\Google\Protobuf\Internal\RepeatedField $node_pool_target
     *           Optional. GKE NodePools where workloads will be scheduled. At least one node pool
     *           must be assigned the 'default' role. Each role can be given to only a
     *           single NodePoolTarget. All NodePools must have the same location settings.
     *           If a nodePoolTarget is not specified, Dataproc constructs a default
     *           nodePoolTarget.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A target GKE cluster to deploy to. It must be in the same project and
     * region as the Dataproc cluster (the GKE cluster can be zonal or regional).
     * Format: 'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *
     * Generated from protobuf field <code>string gke_cluster_target = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getGkeClusterTarget()
    {
        return $this->gke_cluster_target;
    }

    /**
     * Optional. A target GKE cluster to deploy to. It must be in the same project and
     * region as the Dataproc cluster (the GKE cluster can be zonal or regional).
     * Format: 'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *
     * Generated from protobuf field <code>string gke_cluster_target = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setGkeClusterTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->gke_cluster_target = $var;

        return $this;
    }

    /**
     * Optional. GKE NodePools where workloads will be scheduled. At least one node pool
     * must be assigned the 'default' role. Each role can be given to only a
     * single NodePoolTarget. All NodePools must have the same location settings.
     * If a nodePoolTarget is not specified, Dataproc constructs a default
     * nodePoolTarget.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget node_pool_target = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodePoolTarget()
    {
        return $this->node_pool_target;
    }

    /**
     * Optional. GKE NodePools where workloads will be scheduled. At least one node pool
     * must be assigned the 'default' role. Each role can be given to only a
     * single NodePoolTarget. All NodePools must have the same location settings.
     * If a nodePoolTarget is not specified, Dataproc constructs a default
     * nodePoolTarget.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.GkeNodePoolTarget node_pool_target = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\GkeNodePoolTarget[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodePoolTarget($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\GkeNodePoolTarget::class);
        $this->node_pool_target = $arr;

        return $this;
    }

}

