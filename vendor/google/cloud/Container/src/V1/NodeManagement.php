<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NodeManagement defines the set of node management services turned on for the
 * node pool.
 *
 * Generated from protobuf message <code>google.container.v1.NodeManagement</code>
 */
class NodeManagement extends \Google\Protobuf\Internal\Message
{
    /**
     * A flag that specifies whether node auto-upgrade is enabled for the node
     * pool. If enabled, node auto-upgrade helps keep the nodes in your node pool
     * up to date with the latest release version of Kubernetes.
     *
     * Generated from protobuf field <code>bool auto_upgrade = 1;</code>
     */
    private $auto_upgrade = false;
    /**
     * A flag that specifies whether the node auto-repair is enabled for the node
     * pool. If enabled, the nodes in this node pool will be monitored and, if
     * they fail health checks too many times, an automatic repair action will be
     * triggered.
     *
     * Generated from protobuf field <code>bool auto_repair = 2;</code>
     */
    private $auto_repair = false;
    /**
     * Specifies the Auto Upgrade knobs for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.AutoUpgradeOptions upgrade_options = 10;</code>
     */
    private $upgrade_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $auto_upgrade
     *           A flag that specifies whether node auto-upgrade is enabled for the node
     *           pool. If enabled, node auto-upgrade helps keep the nodes in your node pool
     *           up to date with the latest release version of Kubernetes.
     *     @type bool $auto_repair
     *           A flag that specifies whether the node auto-repair is enabled for the node
     *           pool. If enabled, the nodes in this node pool will be monitored and, if
     *           they fail health checks too many times, an automatic repair action will be
     *           triggered.
     *     @type \Google\Cloud\Container\V1\AutoUpgradeOptions $upgrade_options
     *           Specifies the Auto Upgrade knobs for the node pool.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * A flag that specifies whether node auto-upgrade is enabled for the node
     * pool. If enabled, node auto-upgrade helps keep the nodes in your node pool
     * up to date with the latest release version of Kubernetes.
     *
     * Generated from protobuf field <code>bool auto_upgrade = 1;</code>
     * @return bool
     */
    public function getAutoUpgrade()
    {
        return $this->auto_upgrade;
    }

    /**
     * A flag that specifies whether node auto-upgrade is enabled for the node
     * pool. If enabled, node auto-upgrade helps keep the nodes in your node pool
     * up to date with the latest release version of Kubernetes.
     *
     * Generated from protobuf field <code>bool auto_upgrade = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoUpgrade($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_upgrade = $var;

        return $this;
    }

    /**
     * A flag that specifies whether the node auto-repair is enabled for the node
     * pool. If enabled, the nodes in this node pool will be monitored and, if
     * they fail health checks too many times, an automatic repair action will be
     * triggered.
     *
     * Generated from protobuf field <code>bool auto_repair = 2;</code>
     * @return bool
     */
    public function getAutoRepair()
    {
        return $this->auto_repair;
    }

    /**
     * A flag that specifies whether the node auto-repair is enabled for the node
     * pool. If enabled, the nodes in this node pool will be monitored and, if
     * they fail health checks too many times, an automatic repair action will be
     * triggered.
     *
     * Generated from protobuf field <code>bool auto_repair = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoRepair($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_repair = $var;

        return $this;
    }

    /**
     * Specifies the Auto Upgrade knobs for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.AutoUpgradeOptions upgrade_options = 10;</code>
     * @return \Google\Cloud\Container\V1\AutoUpgradeOptions|null
     */
    public function getUpgradeOptions()
    {
        return $this->upgrade_options;
    }

    public function hasUpgradeOptions()
    {
        return isset($this->upgrade_options);
    }

    public function clearUpgradeOptions()
    {
        unset($this->upgrade_options);
    }

    /**
     * Specifies the Auto Upgrade knobs for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.AutoUpgradeOptions upgrade_options = 10;</code>
     * @param \Google\Cloud\Container\V1\AutoUpgradeOptions $var
     * @return $this
     */
    public function setUpgradeOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\AutoUpgradeOptions::class);
        $this->upgrade_options = $var;

        return $this;
    }

}

