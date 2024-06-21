<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1\GkeClusterConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A full, namespace-isolated deployment target for an existing GKE cluster.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.GkeClusterConfig.NamespacedGkeDeploymentTarget</code>
 */
class NamespacedGkeDeploymentTarget extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The target GKE cluster to deploy to.
     * Format: 'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *
     * Generated from protobuf field <code>string target_gke_cluster = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $target_gke_cluster = '';
    /**
     * Optional. A namespace within the GKE cluster to deploy into.
     *
     * Generated from protobuf field <code>string cluster_namespace = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $cluster_namespace = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $target_gke_cluster
     *           Optional. The target GKE cluster to deploy to.
     *           Format: 'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *     @type string $cluster_namespace
     *           Optional. A namespace within the GKE cluster to deploy into.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The target GKE cluster to deploy to.
     * Format: 'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *
     * Generated from protobuf field <code>string target_gke_cluster = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTargetGkeCluster()
    {
        return $this->target_gke_cluster;
    }

    /**
     * Optional. The target GKE cluster to deploy to.
     * Format: 'projects/{project}/locations/{location}/clusters/{cluster_id}'
     *
     * Generated from protobuf field <code>string target_gke_cluster = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTargetGkeCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_gke_cluster = $var;

        return $this;
    }

    /**
     * Optional. A namespace within the GKE cluster to deploy into.
     *
     * Generated from protobuf field <code>string cluster_namespace = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getClusterNamespace()
    {
        return $this->cluster_namespace;
    }

    /**
     * Optional. A namespace within the GKE cluster to deploy into.
     *
     * Generated from protobuf field <code>string cluster_namespace = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_namespace = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NamespacedGkeDeploymentTarget::class, \Google\Cloud\Dataproc\V1\GkeClusterConfig_NamespacedGkeDeploymentTarget::class);

