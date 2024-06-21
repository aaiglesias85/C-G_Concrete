<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NodePool contains the name and configuration for a cluster's node pool.
 * Node pools are a set of nodes (i.e. VM's), with a common configuration and
 * specification, under the control of the cluster master. They may have a set
 * of Kubernetes labels applied to them, which may be used to reference them
 * during pod scheduling. They may also be resized up or down, to accommodate
 * the workload.
 *
 * Generated from protobuf message <code>google.container.v1.NodePool</code>
 */
class NodePool extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the node pool.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The node configuration of the pool.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeConfig config = 2;</code>
     */
    private $config = null;
    /**
     * The initial node count for the pool. You must ensure that your
     * Compute Engine [resource quota](https://cloud.google.com/compute/quotas)
     * is sufficient for this number of instances. You must also have available
     * firewall and routes quota.
     *
     * Generated from protobuf field <code>int32 initial_node_count = 3;</code>
     */
    private $initial_node_count = 0;
    /**
     * The list of Google Compute Engine
     * [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     * NodePool's nodes should be located.
     * If this value is unspecified during node pool creation, the
     * [Cluster.Locations](https://cloud.google.com/kubernetes-engine/docs/reference/rest/v1/projects.locations.clusters#Cluster.FIELDS.locations)
     * value will be used, instead.
     * Warning: changing node pool locations will result in nodes being added
     * and/or removed.
     *
     * Generated from protobuf field <code>repeated string locations = 13;</code>
     */
    private $locations;
    /**
     * Networking configuration for this NodePool. If specified, it overrides the
     * cluster-level defaults.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeNetworkConfig network_config = 14;</code>
     */
    private $network_config = null;
    /**
     * [Output only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 100;</code>
     */
    private $self_link = '';
    /**
     * The version of the Kubernetes of this node.
     *
     * Generated from protobuf field <code>string version = 101;</code>
     */
    private $version = '';
    /**
     * [Output only] The resource URLs of the [managed instance
     * groups](https://cloud.google.com/compute/docs/instance-groups/creating-groups-of-managed-instances)
     * associated with this node pool.
     *
     * Generated from protobuf field <code>repeated string instance_group_urls = 102;</code>
     */
    private $instance_group_urls;
    /**
     * [Output only] The status of the nodes in this pool instance.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.Status status = 103;</code>
     */
    private $status = 0;
    /**
     * [Output only] Deprecated. Use conditions instead.
     * Additional information about the current status of this
     * node pool instance, if available.
     *
     * Generated from protobuf field <code>string status_message = 104 [deprecated = true];</code>
     * @deprecated
     */
    protected $status_message = '';
    /**
     * Autoscaler configuration for this NodePool. Autoscaler is enabled
     * only if a valid configuration is present.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePoolAutoscaling autoscaling = 4;</code>
     */
    private $autoscaling = null;
    /**
     * NodeManagement configuration for this NodePool.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeManagement management = 5;</code>
     */
    private $management = null;
    /**
     * The constraint on the maximum number of pods that can be run
     * simultaneously on a node in the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.MaxPodsConstraint max_pods_constraint = 6;</code>
     */
    private $max_pods_constraint = null;
    /**
     * Which conditions caused the current node pool state.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.StatusCondition conditions = 105;</code>
     */
    private $conditions;
    /**
     * [Output only] The pod CIDR block size per node in this node pool.
     *
     * Generated from protobuf field <code>int32 pod_ipv4_cidr_size = 7;</code>
     */
    private $pod_ipv4_cidr_size = 0;
    /**
     * Upgrade settings control disruption and speed of the upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 107;</code>
     */
    private $upgrade_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the node pool.
     *     @type \Google\Cloud\Container\V1\NodeConfig $config
     *           The node configuration of the pool.
     *     @type int $initial_node_count
     *           The initial node count for the pool. You must ensure that your
     *           Compute Engine [resource quota](https://cloud.google.com/compute/quotas)
     *           is sufficient for this number of instances. You must also have available
     *           firewall and routes quota.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $locations
     *           The list of Google Compute Engine
     *           [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     *           NodePool's nodes should be located.
     *           If this value is unspecified during node pool creation, the
     *           [Cluster.Locations](https://cloud.google.com/kubernetes-engine/docs/reference/rest/v1/projects.locations.clusters#Cluster.FIELDS.locations)
     *           value will be used, instead.
     *           Warning: changing node pool locations will result in nodes being added
     *           and/or removed.
     *     @type \Google\Cloud\Container\V1\NodeNetworkConfig $network_config
     *           Networking configuration for this NodePool. If specified, it overrides the
     *           cluster-level defaults.
     *     @type string $self_link
     *           [Output only] Server-defined URL for the resource.
     *     @type string $version
     *           The version of the Kubernetes of this node.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $instance_group_urls
     *           [Output only] The resource URLs of the [managed instance
     *           groups](https://cloud.google.com/compute/docs/instance-groups/creating-groups-of-managed-instances)
     *           associated with this node pool.
     *     @type int $status
     *           [Output only] The status of the nodes in this pool instance.
     *     @type string $status_message
     *           [Output only] Deprecated. Use conditions instead.
     *           Additional information about the current status of this
     *           node pool instance, if available.
     *     @type \Google\Cloud\Container\V1\NodePoolAutoscaling $autoscaling
     *           Autoscaler configuration for this NodePool. Autoscaler is enabled
     *           only if a valid configuration is present.
     *     @type \Google\Cloud\Container\V1\NodeManagement $management
     *           NodeManagement configuration for this NodePool.
     *     @type \Google\Cloud\Container\V1\MaxPodsConstraint $max_pods_constraint
     *           The constraint on the maximum number of pods that can be run
     *           simultaneously on a node in the node pool.
     *     @type \Google\Cloud\Container\V1\StatusCondition[]|\Google\Protobuf\Internal\RepeatedField $conditions
     *           Which conditions caused the current node pool state.
     *     @type int $pod_ipv4_cidr_size
     *           [Output only] The pod CIDR block size per node in this node pool.
     *     @type \Google\Cloud\Container\V1\NodePool\UpgradeSettings $upgrade_settings
     *           Upgrade settings control disruption and speed of the upgrade.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the node pool.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the node pool.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The node configuration of the pool.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeConfig config = 2;</code>
     * @return \Google\Cloud\Container\V1\NodeConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * The node configuration of the pool.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeConfig config = 2;</code>
     * @param \Google\Cloud\Container\V1\NodeConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodeConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * The initial node count for the pool. You must ensure that your
     * Compute Engine [resource quota](https://cloud.google.com/compute/quotas)
     * is sufficient for this number of instances. You must also have available
     * firewall and routes quota.
     *
     * Generated from protobuf field <code>int32 initial_node_count = 3;</code>
     * @return int
     */
    public function getInitialNodeCount()
    {
        return $this->initial_node_count;
    }

    /**
     * The initial node count for the pool. You must ensure that your
     * Compute Engine [resource quota](https://cloud.google.com/compute/quotas)
     * is sufficient for this number of instances. You must also have available
     * firewall and routes quota.
     *
     * Generated from protobuf field <code>int32 initial_node_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setInitialNodeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->initial_node_count = $var;

        return $this;
    }

    /**
     * The list of Google Compute Engine
     * [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     * NodePool's nodes should be located.
     * If this value is unspecified during node pool creation, the
     * [Cluster.Locations](https://cloud.google.com/kubernetes-engine/docs/reference/rest/v1/projects.locations.clusters#Cluster.FIELDS.locations)
     * value will be used, instead.
     * Warning: changing node pool locations will result in nodes being added
     * and/or removed.
     *
     * Generated from protobuf field <code>repeated string locations = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * The list of Google Compute Engine
     * [zones](https://cloud.google.com/compute/docs/zones#available) in which the
     * NodePool's nodes should be located.
     * If this value is unspecified during node pool creation, the
     * [Cluster.Locations](https://cloud.google.com/kubernetes-engine/docs/reference/rest/v1/projects.locations.clusters#Cluster.FIELDS.locations)
     * value will be used, instead.
     * Warning: changing node pool locations will result in nodes being added
     * and/or removed.
     *
     * Generated from protobuf field <code>repeated string locations = 13;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->locations = $arr;

        return $this;
    }

    /**
     * Networking configuration for this NodePool. If specified, it overrides the
     * cluster-level defaults.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeNetworkConfig network_config = 14;</code>
     * @return \Google\Cloud\Container\V1\NodeNetworkConfig|null
     */
    public function getNetworkConfig()
    {
        return $this->network_config;
    }

    public function hasNetworkConfig()
    {
        return isset($this->network_config);
    }

    public function clearNetworkConfig()
    {
        unset($this->network_config);
    }

    /**
     * Networking configuration for this NodePool. If specified, it overrides the
     * cluster-level defaults.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeNetworkConfig network_config = 14;</code>
     * @param \Google\Cloud\Container\V1\NodeNetworkConfig $var
     * @return $this
     */
    public function setNetworkConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodeNetworkConfig::class);
        $this->network_config = $var;

        return $this;
    }

    /**
     * [Output only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 100;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * [Output only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * The version of the Kubernetes of this node.
     *
     * Generated from protobuf field <code>string version = 101;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the Kubernetes of this node.
     *
     * Generated from protobuf field <code>string version = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * [Output only] The resource URLs of the [managed instance
     * groups](https://cloud.google.com/compute/docs/instance-groups/creating-groups-of-managed-instances)
     * associated with this node pool.
     *
     * Generated from protobuf field <code>repeated string instance_group_urls = 102;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstanceGroupUrls()
    {
        return $this->instance_group_urls;
    }

    /**
     * [Output only] The resource URLs of the [managed instance
     * groups](https://cloud.google.com/compute/docs/instance-groups/creating-groups-of-managed-instances)
     * associated with this node pool.
     *
     * Generated from protobuf field <code>repeated string instance_group_urls = 102;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstanceGroupUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instance_group_urls = $arr;

        return $this;
    }

    /**
     * [Output only] The status of the nodes in this pool instance.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.Status status = 103;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * [Output only] The status of the nodes in this pool instance.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.Status status = 103;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\NodePool\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * [Output only] Deprecated. Use conditions instead.
     * Additional information about the current status of this
     * node pool instance, if available.
     *
     * Generated from protobuf field <code>string status_message = 104 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getStatusMessage()
    {
        @trigger_error('status_message is deprecated.', E_USER_DEPRECATED);
        return $this->status_message;
    }

    /**
     * [Output only] Deprecated. Use conditions instead.
     * Additional information about the current status of this
     * node pool instance, if available.
     *
     * Generated from protobuf field <code>string status_message = 104 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setStatusMessage($var)
    {
        @trigger_error('status_message is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->status_message = $var;

        return $this;
    }

    /**
     * Autoscaler configuration for this NodePool. Autoscaler is enabled
     * only if a valid configuration is present.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePoolAutoscaling autoscaling = 4;</code>
     * @return \Google\Cloud\Container\V1\NodePoolAutoscaling|null
     */
    public function getAutoscaling()
    {
        return $this->autoscaling;
    }

    public function hasAutoscaling()
    {
        return isset($this->autoscaling);
    }

    public function clearAutoscaling()
    {
        unset($this->autoscaling);
    }

    /**
     * Autoscaler configuration for this NodePool. Autoscaler is enabled
     * only if a valid configuration is present.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePoolAutoscaling autoscaling = 4;</code>
     * @param \Google\Cloud\Container\V1\NodePoolAutoscaling $var
     * @return $this
     */
    public function setAutoscaling($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodePoolAutoscaling::class);
        $this->autoscaling = $var;

        return $this;
    }

    /**
     * NodeManagement configuration for this NodePool.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeManagement management = 5;</code>
     * @return \Google\Cloud\Container\V1\NodeManagement|null
     */
    public function getManagement()
    {
        return $this->management;
    }

    public function hasManagement()
    {
        return isset($this->management);
    }

    public function clearManagement()
    {
        unset($this->management);
    }

    /**
     * NodeManagement configuration for this NodePool.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeManagement management = 5;</code>
     * @param \Google\Cloud\Container\V1\NodeManagement $var
     * @return $this
     */
    public function setManagement($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodeManagement::class);
        $this->management = $var;

        return $this;
    }

    /**
     * The constraint on the maximum number of pods that can be run
     * simultaneously on a node in the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.MaxPodsConstraint max_pods_constraint = 6;</code>
     * @return \Google\Cloud\Container\V1\MaxPodsConstraint|null
     */
    public function getMaxPodsConstraint()
    {
        return $this->max_pods_constraint;
    }

    public function hasMaxPodsConstraint()
    {
        return isset($this->max_pods_constraint);
    }

    public function clearMaxPodsConstraint()
    {
        unset($this->max_pods_constraint);
    }

    /**
     * The constraint on the maximum number of pods that can be run
     * simultaneously on a node in the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.MaxPodsConstraint max_pods_constraint = 6;</code>
     * @param \Google\Cloud\Container\V1\MaxPodsConstraint $var
     * @return $this
     */
    public function setMaxPodsConstraint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\MaxPodsConstraint::class);
        $this->max_pods_constraint = $var;

        return $this;
    }

    /**
     * Which conditions caused the current node pool state.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.StatusCondition conditions = 105;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Which conditions caused the current node pool state.
     *
     * Generated from protobuf field <code>repeated .google.container.v1.StatusCondition conditions = 105;</code>
     * @param \Google\Cloud\Container\V1\StatusCondition[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1\StatusCondition::class);
        $this->conditions = $arr;

        return $this;
    }

    /**
     * [Output only] The pod CIDR block size per node in this node pool.
     *
     * Generated from protobuf field <code>int32 pod_ipv4_cidr_size = 7;</code>
     * @return int
     */
    public function getPodIpv4CidrSize()
    {
        return $this->pod_ipv4_cidr_size;
    }

    /**
     * [Output only] The pod CIDR block size per node in this node pool.
     *
     * Generated from protobuf field <code>int32 pod_ipv4_cidr_size = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPodIpv4CidrSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->pod_ipv4_cidr_size = $var;

        return $this;
    }

    /**
     * Upgrade settings control disruption and speed of the upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 107;</code>
     * @return \Google\Cloud\Container\V1\NodePool\UpgradeSettings|null
     */
    public function getUpgradeSettings()
    {
        return $this->upgrade_settings;
    }

    public function hasUpgradeSettings()
    {
        return isset($this->upgrade_settings);
    }

    public function clearUpgradeSettings()
    {
        unset($this->upgrade_settings);
    }

    /**
     * Upgrade settings control disruption and speed of the upgrade.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 107;</code>
     * @param \Google\Cloud\Container\V1\NodePool\UpgradeSettings $var
     * @return $this
     */
    public function setUpgradeSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodePool\UpgradeSettings::class);
        $this->upgrade_settings = $var;

        return $this;
    }

}

