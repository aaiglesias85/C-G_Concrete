<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterStatusBgpPeerStatus</code>
 */
class RouterStatusBgpPeerStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Routes that were advertised to the remote BGP peer
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Route advertised_routes = 333393068;</code>
     */
    private $advertised_routes;
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.BfdStatus bfd_status = 395631729;</code>
     */
    private $bfd_status = null;
    /**
     * IP address of the local BGP interface.
     *
     * Generated from protobuf field <code>optional string ip_address = 406272220;</code>
     */
    private $ip_address = null;
    /**
     * URL of the VPN tunnel that this BGP peer controls.
     *
     * Generated from protobuf field <code>optional string linked_vpn_tunnel = 352296953;</code>
     */
    private $linked_vpn_tunnel = null;
    /**
     * Name of this BGP peer. Unique within the Routers resource.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * Number of routes learned from the remote BGP Peer.
     *
     * Generated from protobuf field <code>optional uint32 num_learned_routes = 135457535;</code>
     */
    private $num_learned_routes = null;
    /**
     * IP address of the remote BGP interface.
     *
     * Generated from protobuf field <code>optional string peer_ip_address = 207735769;</code>
     */
    private $peer_ip_address = null;
    /**
     * [Output only] URI of the VM instance that is used as third-party router appliances such as Next Gen Firewalls, Virtual Routers, or Router Appliances. The VM instance is the peer side of the BGP session.
     *
     * Generated from protobuf field <code>optional string router_appliance_instance = 468312989;</code>
     */
    private $router_appliance_instance = null;
    /**
     * The state of the BGP session. For a list of possible values for this field, see BGP session states.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     */
    private $state = null;
    /**
     * Status of the BGP peer: {UP, DOWN}
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    private $status = null;
    /**
     * Time this session has been up. Format: 14 years, 51 weeks, 6 days, 23 hours, 59 minutes, 59 seconds
     *
     * Generated from protobuf field <code>optional string uptime = 235379688;</code>
     */
    private $uptime = null;
    /**
     * Time this session has been up, in seconds. Format: 145
     *
     * Generated from protobuf field <code>optional string uptime_seconds = 104736040;</code>
     */
    private $uptime_seconds = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\Route[]|\Google\Protobuf\Internal\RepeatedField $advertised_routes
     *           Routes that were advertised to the remote BGP peer
     *     @type \Google\Cloud\Compute\V1\BfdStatus $bfd_status
     *     @type string $ip_address
     *           IP address of the local BGP interface.
     *     @type string $linked_vpn_tunnel
     *           URL of the VPN tunnel that this BGP peer controls.
     *     @type string $name
     *           Name of this BGP peer. Unique within the Routers resource.
     *     @type int $num_learned_routes
     *           Number of routes learned from the remote BGP Peer.
     *     @type string $peer_ip_address
     *           IP address of the remote BGP interface.
     *     @type string $router_appliance_instance
     *           [Output only] URI of the VM instance that is used as third-party router appliances such as Next Gen Firewalls, Virtual Routers, or Router Appliances. The VM instance is the peer side of the BGP session.
     *     @type string $state
     *           The state of the BGP session. For a list of possible values for this field, see BGP session states.
     *     @type string $status
     *           Status of the BGP peer: {UP, DOWN}
     *           Check the Status enum for the list of possible values.
     *     @type string $uptime
     *           Time this session has been up. Format: 14 years, 51 weeks, 6 days, 23 hours, 59 minutes, 59 seconds
     *     @type string $uptime_seconds
     *           Time this session has been up, in seconds. Format: 145
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Routes that were advertised to the remote BGP peer
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Route advertised_routes = 333393068;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdvertisedRoutes()
    {
        return $this->advertised_routes;
    }

    /**
     * Routes that were advertised to the remote BGP peer
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Route advertised_routes = 333393068;</code>
     * @param \Google\Cloud\Compute\V1\Route[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdvertisedRoutes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Route::class);
        $this->advertised_routes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.BfdStatus bfd_status = 395631729;</code>
     * @return \Google\Cloud\Compute\V1\BfdStatus|null
     */
    public function getBfdStatus()
    {
        return $this->bfd_status;
    }

    public function hasBfdStatus()
    {
        return isset($this->bfd_status);
    }

    public function clearBfdStatus()
    {
        unset($this->bfd_status);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.BfdStatus bfd_status = 395631729;</code>
     * @param \Google\Cloud\Compute\V1\BfdStatus $var
     * @return $this
     */
    public function setBfdStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\BfdStatus::class);
        $this->bfd_status = $var;

        return $this;
    }

    /**
     * IP address of the local BGP interface.
     *
     * Generated from protobuf field <code>optional string ip_address = 406272220;</code>
     * @return string
     */
    public function getIpAddress()
    {
        return isset($this->ip_address) ? $this->ip_address : '';
    }

    public function hasIpAddress()
    {
        return isset($this->ip_address);
    }

    public function clearIpAddress()
    {
        unset($this->ip_address);
    }

    /**
     * IP address of the local BGP interface.
     *
     * Generated from protobuf field <code>optional string ip_address = 406272220;</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * URL of the VPN tunnel that this BGP peer controls.
     *
     * Generated from protobuf field <code>optional string linked_vpn_tunnel = 352296953;</code>
     * @return string
     */
    public function getLinkedVpnTunnel()
    {
        return isset($this->linked_vpn_tunnel) ? $this->linked_vpn_tunnel : '';
    }

    public function hasLinkedVpnTunnel()
    {
        return isset($this->linked_vpn_tunnel);
    }

    public function clearLinkedVpnTunnel()
    {
        unset($this->linked_vpn_tunnel);
    }

    /**
     * URL of the VPN tunnel that this BGP peer controls.
     *
     * Generated from protobuf field <code>optional string linked_vpn_tunnel = 352296953;</code>
     * @param string $var
     * @return $this
     */
    public function setLinkedVpnTunnel($var)
    {
        GPBUtil::checkString($var, True);
        $this->linked_vpn_tunnel = $var;

        return $this;
    }

    /**
     * Name of this BGP peer. Unique within the Routers resource.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of this BGP peer. Unique within the Routers resource.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
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
     * Number of routes learned from the remote BGP Peer.
     *
     * Generated from protobuf field <code>optional uint32 num_learned_routes = 135457535;</code>
     * @return int
     */
    public function getNumLearnedRoutes()
    {
        return isset($this->num_learned_routes) ? $this->num_learned_routes : 0;
    }

    public function hasNumLearnedRoutes()
    {
        return isset($this->num_learned_routes);
    }

    public function clearNumLearnedRoutes()
    {
        unset($this->num_learned_routes);
    }

    /**
     * Number of routes learned from the remote BGP Peer.
     *
     * Generated from protobuf field <code>optional uint32 num_learned_routes = 135457535;</code>
     * @param int $var
     * @return $this
     */
    public function setNumLearnedRoutes($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_learned_routes = $var;

        return $this;
    }

    /**
     * IP address of the remote BGP interface.
     *
     * Generated from protobuf field <code>optional string peer_ip_address = 207735769;</code>
     * @return string
     */
    public function getPeerIpAddress()
    {
        return isset($this->peer_ip_address) ? $this->peer_ip_address : '';
    }

    public function hasPeerIpAddress()
    {
        return isset($this->peer_ip_address);
    }

    public function clearPeerIpAddress()
    {
        unset($this->peer_ip_address);
    }

    /**
     * IP address of the remote BGP interface.
     *
     * Generated from protobuf field <code>optional string peer_ip_address = 207735769;</code>
     * @param string $var
     * @return $this
     */
    public function setPeerIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_ip_address = $var;

        return $this;
    }

    /**
     * [Output only] URI of the VM instance that is used as third-party router appliances such as Next Gen Firewalls, Virtual Routers, or Router Appliances. The VM instance is the peer side of the BGP session.
     *
     * Generated from protobuf field <code>optional string router_appliance_instance = 468312989;</code>
     * @return string
     */
    public function getRouterApplianceInstance()
    {
        return isset($this->router_appliance_instance) ? $this->router_appliance_instance : '';
    }

    public function hasRouterApplianceInstance()
    {
        return isset($this->router_appliance_instance);
    }

    public function clearRouterApplianceInstance()
    {
        unset($this->router_appliance_instance);
    }

    /**
     * [Output only] URI of the VM instance that is used as third-party router appliances such as Next Gen Firewalls, Virtual Routers, or Router Appliances. The VM instance is the peer side of the BGP session.
     *
     * Generated from protobuf field <code>optional string router_appliance_instance = 468312989;</code>
     * @param string $var
     * @return $this
     */
    public function setRouterApplianceInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->router_appliance_instance = $var;

        return $this;
    }

    /**
     * The state of the BGP session. For a list of possible values for this field, see BGP session states.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @return string
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : '';
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * The state of the BGP session. For a list of possible values for this field, see BGP session states.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * Status of the BGP peer: {UP, DOWN}
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Status of the BGP peer: {UP, DOWN}
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Time this session has been up. Format: 14 years, 51 weeks, 6 days, 23 hours, 59 minutes, 59 seconds
     *
     * Generated from protobuf field <code>optional string uptime = 235379688;</code>
     * @return string
     */
    public function getUptime()
    {
        return isset($this->uptime) ? $this->uptime : '';
    }

    public function hasUptime()
    {
        return isset($this->uptime);
    }

    public function clearUptime()
    {
        unset($this->uptime);
    }

    /**
     * Time this session has been up. Format: 14 years, 51 weeks, 6 days, 23 hours, 59 minutes, 59 seconds
     *
     * Generated from protobuf field <code>optional string uptime = 235379688;</code>
     * @param string $var
     * @return $this
     */
    public function setUptime($var)
    {
        GPBUtil::checkString($var, True);
        $this->uptime = $var;

        return $this;
    }

    /**
     * Time this session has been up, in seconds. Format: 145
     *
     * Generated from protobuf field <code>optional string uptime_seconds = 104736040;</code>
     * @return string
     */
    public function getUptimeSeconds()
    {
        return isset($this->uptime_seconds) ? $this->uptime_seconds : '';
    }

    public function hasUptimeSeconds()
    {
        return isset($this->uptime_seconds);
    }

    public function clearUptimeSeconds()
    {
        unset($this->uptime_seconds);
    }

    /**
     * Time this session has been up, in seconds. Format: 145
     *
     * Generated from protobuf field <code>optional string uptime_seconds = 104736040;</code>
     * @param string $var
     * @return $this
     */
    public function setUptimeSeconds($var)
    {
        GPBUtil::checkString($var, True);
        $this->uptime_seconds = $var;

        return $this;
    }

}

