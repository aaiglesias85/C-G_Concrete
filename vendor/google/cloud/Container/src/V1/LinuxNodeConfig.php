<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters that can be configured on Linux nodes.
 *
 * Generated from protobuf message <code>google.container.v1.LinuxNodeConfig</code>
 */
class LinuxNodeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The Linux kernel parameters to be applied to the nodes and all pods running
     * on the nodes.
     * The following parameters are supported.
     * net.core.netdev_max_backlog
     * net.core.rmem_max
     * net.core.wmem_default
     * net.core.wmem_max
     * net.core.optmem_max
     * net.core.somaxconn
     * net.ipv4.tcp_rmem
     * net.ipv4.tcp_wmem
     * net.ipv4.tcp_tw_reuse
     *
     * Generated from protobuf field <code>map<string, string> sysctls = 1;</code>
     */
    private $sysctls;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $sysctls
     *           The Linux kernel parameters to be applied to the nodes and all pods running
     *           on the nodes.
     *           The following parameters are supported.
     *           net.core.netdev_max_backlog
     *           net.core.rmem_max
     *           net.core.wmem_default
     *           net.core.wmem_max
     *           net.core.optmem_max
     *           net.core.somaxconn
     *           net.ipv4.tcp_rmem
     *           net.ipv4.tcp_wmem
     *           net.ipv4.tcp_tw_reuse
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Linux kernel parameters to be applied to the nodes and all pods running
     * on the nodes.
     * The following parameters are supported.
     * net.core.netdev_max_backlog
     * net.core.rmem_max
     * net.core.wmem_default
     * net.core.wmem_max
     * net.core.optmem_max
     * net.core.somaxconn
     * net.ipv4.tcp_rmem
     * net.ipv4.tcp_wmem
     * net.ipv4.tcp_tw_reuse
     *
     * Generated from protobuf field <code>map<string, string> sysctls = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSysctls()
    {
        return $this->sysctls;
    }

    /**
     * The Linux kernel parameters to be applied to the nodes and all pods running
     * on the nodes.
     * The following parameters are supported.
     * net.core.netdev_max_backlog
     * net.core.rmem_max
     * net.core.wmem_default
     * net.core.wmem_max
     * net.core.optmem_max
     * net.core.somaxconn
     * net.ipv4.tcp_rmem
     * net.ipv4.tcp_wmem
     * net.ipv4.tcp_tw_reuse
     *
     * Generated from protobuf field <code>map<string, string> sysctls = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSysctls($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->sysctls = $arr;

        return $this;
    }

}

