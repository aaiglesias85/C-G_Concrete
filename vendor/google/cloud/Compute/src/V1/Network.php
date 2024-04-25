<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a VPC Network resource. Networks connect resources to each other and to the internet. For more information, read Virtual Private Cloud (VPC) Network.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Network</code>
 */
class Network extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated in favor of subnet mode networks. The range of internal addresses that are legal on this network. This range is a CIDR specification, for example: 192.168.0.0/16. Provided by the client when the network is created.
     *
     * Generated from protobuf field <code>optional string I_pv4_range = 59234358;</code>
     */
    private $I_pv4_range = null;
    /**
     * Must be set to create a VPC network. If not set, a legacy network is created. When set to true, the VPC network is created in auto mode. When set to false, the VPC network is created in custom mode. An auto mode VPC network starts with one subnet per region. Each subnet has a predetermined range as described in Auto mode VPC network IP ranges. For custom mode VPC networks, you can add subnets using the subnetworks insert method.
     *
     * Generated from protobuf field <code>optional bool auto_create_subnetworks = 256156690;</code>
     */
    private $auto_create_subnetworks = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this field when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Enable ULA internal ipv6 on this network. Enabling this feature will assign a /48 from google defined ULA prefix fd20::/20. .
     *
     * Generated from protobuf field <code>optional bool enable_ula_internal_ipv6 = 423757720;</code>
     */
    private $enable_ula_internal_ipv6 = null;
    /**
     * [Output Only] The gateway address for default routing out of the network, selected by GCP.
     *
     * Generated from protobuf field <code>optional string gateway_i_pv4 = 178678877;</code>
     */
    private $gateway_i_pv4 = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * When enabling ula internal ipv6, caller optionally can specify the /48 range they want from the google defined ULA prefix fd20::/20. The input must be a valid /48 ULA IPv6 address and must be within the fd20::/20. Operation will fail if the speficied /48 is already in used by another resource. If the field is not speficied, then a /48 range will be randomly allocated from fd20::/20 and returned via this field. .
     *
     * Generated from protobuf field <code>optional string internal_ipv6_range = 277456807;</code>
     */
    private $internal_ipv6_range = null;
    /**
     * [Output Only] Type of the resource. Always compute#network for networks.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * Maximum Transmission Unit in bytes. The minimum value for this field is 1460 and the maximum value is 1500 bytes. If unspecified, defaults to 1460.
     *
     * Generated from protobuf field <code>optional int32 mtu = 108462;</code>
     */
    private $mtu = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * The network firewall policy enforcement order. Can be either AFTER_CLASSIC_FIREWALL or BEFORE_CLASSIC_FIREWALL. Defaults to AFTER_CLASSIC_FIREWALL if the field is not specified.
     * Check the NetworkFirewallPolicyEnforcementOrder enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_firewall_policy_enforcement_order = 6504784;</code>
     */
    private $network_firewall_policy_enforcement_order = null;
    /**
     * [Output Only] A list of network peerings for the resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkPeering peerings = 69883187;</code>
     */
    private $peerings;
    /**
     * The network-level routing configuration for this network. Used by Cloud Router to determine what type of network-wide routing behavior to enforce.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkRoutingConfig routing_config = 523556059;</code>
     */
    private $routing_config = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     */
    private $self_link_with_id = null;
    /**
     * [Output Only] Server-defined fully-qualified URLs for all subnetworks in this VPC network.
     *
     * Generated from protobuf field <code>repeated string subnetworks = 415853125;</code>
     */
    private $subnetworks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $I_pv4_range
     *           Deprecated in favor of subnet mode networks. The range of internal addresses that are legal on this network. This range is a CIDR specification, for example: 192.168.0.0/16. Provided by the client when the network is created.
     *     @type bool $auto_create_subnetworks
     *           Must be set to create a VPC network. If not set, a legacy network is created. When set to true, the VPC network is created in auto mode. When set to false, the VPC network is created in custom mode. An auto mode VPC network starts with one subnet per region. Each subnet has a predetermined range as described in Auto mode VPC network IP ranges. For custom mode VPC networks, you can add subnets using the subnetworks insert method.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this field when you create the resource.
     *     @type bool $enable_ula_internal_ipv6
     *           Enable ULA internal ipv6 on this network. Enabling this feature will assign a /48 from google defined ULA prefix fd20::/20. .
     *     @type string $gateway_i_pv4
     *           [Output Only] The gateway address for default routing out of the network, selected by GCP.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $internal_ipv6_range
     *           When enabling ula internal ipv6, caller optionally can specify the /48 range they want from the google defined ULA prefix fd20::/20. The input must be a valid /48 ULA IPv6 address and must be within the fd20::/20. Operation will fail if the speficied /48 is already in used by another resource. If the field is not speficied, then a /48 range will be randomly allocated from fd20::/20 and returned via this field. .
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#network for networks.
     *     @type int $mtu
     *           Maximum Transmission Unit in bytes. The minimum value for this field is 1460 and the maximum value is 1500 bytes. If unspecified, defaults to 1460.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
     *     @type string $network_firewall_policy_enforcement_order
     *           The network firewall policy enforcement order. Can be either AFTER_CLASSIC_FIREWALL or BEFORE_CLASSIC_FIREWALL. Defaults to AFTER_CLASSIC_FIREWALL if the field is not specified.
     *           Check the NetworkFirewallPolicyEnforcementOrder enum for the list of possible values.
     *     @type \Google\Cloud\Compute\V1\NetworkPeering[]|\Google\Protobuf\Internal\RepeatedField $peerings
     *           [Output Only] A list of network peerings for the resource.
     *     @type \Google\Cloud\Compute\V1\NetworkRoutingConfig $routing_config
     *           The network-level routing configuration for this network. Used by Cloud Router to determine what type of network-wide routing behavior to enforce.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $self_link_with_id
     *           [Output Only] Server-defined URL for this resource with the resource id.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $subnetworks
     *           [Output Only] Server-defined fully-qualified URLs for all subnetworks in this VPC network.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated in favor of subnet mode networks. The range of internal addresses that are legal on this network. This range is a CIDR specification, for example: 192.168.0.0/16. Provided by the client when the network is created.
     *
     * Generated from protobuf field <code>optional string I_pv4_range = 59234358;</code>
     * @return string
     */
    public function getIPv4Range()
    {
        return isset($this->I_pv4_range) ? $this->I_pv4_range : '';
    }

    public function hasIPv4Range()
    {
        return isset($this->I_pv4_range);
    }

    public function clearIPv4Range()
    {
        unset($this->I_pv4_range);
    }

    /**
     * Deprecated in favor of subnet mode networks. The range of internal addresses that are legal on this network. This range is a CIDR specification, for example: 192.168.0.0/16. Provided by the client when the network is created.
     *
     * Generated from protobuf field <code>optional string I_pv4_range = 59234358;</code>
     * @param string $var
     * @return $this
     */
    public function setIPv4Range($var)
    {
        GPBUtil::checkString($var, True);
        $this->I_pv4_range = $var;

        return $this;
    }

    /**
     * Must be set to create a VPC network. If not set, a legacy network is created. When set to true, the VPC network is created in auto mode. When set to false, the VPC network is created in custom mode. An auto mode VPC network starts with one subnet per region. Each subnet has a predetermined range as described in Auto mode VPC network IP ranges. For custom mode VPC networks, you can add subnets using the subnetworks insert method.
     *
     * Generated from protobuf field <code>optional bool auto_create_subnetworks = 256156690;</code>
     * @return bool
     */
    public function getAutoCreateSubnetworks()
    {
        return isset($this->auto_create_subnetworks) ? $this->auto_create_subnetworks : false;
    }

    public function hasAutoCreateSubnetworks()
    {
        return isset($this->auto_create_subnetworks);
    }

    public function clearAutoCreateSubnetworks()
    {
        unset($this->auto_create_subnetworks);
    }

    /**
     * Must be set to create a VPC network. If not set, a legacy network is created. When set to true, the VPC network is created in auto mode. When set to false, the VPC network is created in custom mode. An auto mode VPC network starts with one subnet per region. Each subnet has a predetermined range as described in Auto mode VPC network IP ranges. For custom mode VPC networks, you can add subnets using the subnetworks insert method.
     *
     * Generated from protobuf field <code>optional bool auto_create_subnetworks = 256156690;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoCreateSubnetworks($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_create_subnetworks = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this field when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this field when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Enable ULA internal ipv6 on this network. Enabling this feature will assign a /48 from google defined ULA prefix fd20::/20. .
     *
     * Generated from protobuf field <code>optional bool enable_ula_internal_ipv6 = 423757720;</code>
     * @return bool
     */
    public function getEnableUlaInternalIpv6()
    {
        return isset($this->enable_ula_internal_ipv6) ? $this->enable_ula_internal_ipv6 : false;
    }

    public function hasEnableUlaInternalIpv6()
    {
        return isset($this->enable_ula_internal_ipv6);
    }

    public function clearEnableUlaInternalIpv6()
    {
        unset($this->enable_ula_internal_ipv6);
    }

    /**
     * Enable ULA internal ipv6 on this network. Enabling this feature will assign a /48 from google defined ULA prefix fd20::/20. .
     *
     * Generated from protobuf field <code>optional bool enable_ula_internal_ipv6 = 423757720;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableUlaInternalIpv6($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_ula_internal_ipv6 = $var;

        return $this;
    }

    /**
     * [Output Only] The gateway address for default routing out of the network, selected by GCP.
     *
     * Generated from protobuf field <code>optional string gateway_i_pv4 = 178678877;</code>
     * @return string
     */
    public function getGatewayIPv4()
    {
        return isset($this->gateway_i_pv4) ? $this->gateway_i_pv4 : '';
    }

    public function hasGatewayIPv4()
    {
        return isset($this->gateway_i_pv4);
    }

    public function clearGatewayIPv4()
    {
        unset($this->gateway_i_pv4);
    }

    /**
     * [Output Only] The gateway address for default routing out of the network, selected by GCP.
     *
     * Generated from protobuf field <code>optional string gateway_i_pv4 = 178678877;</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayIPv4($var)
    {
        GPBUtil::checkString($var, True);
        $this->gateway_i_pv4 = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * When enabling ula internal ipv6, caller optionally can specify the /48 range they want from the google defined ULA prefix fd20::/20. The input must be a valid /48 ULA IPv6 address and must be within the fd20::/20. Operation will fail if the speficied /48 is already in used by another resource. If the field is not speficied, then a /48 range will be randomly allocated from fd20::/20 and returned via this field. .
     *
     * Generated from protobuf field <code>optional string internal_ipv6_range = 277456807;</code>
     * @return string
     */
    public function getInternalIpv6Range()
    {
        return isset($this->internal_ipv6_range) ? $this->internal_ipv6_range : '';
    }

    public function hasInternalIpv6Range()
    {
        return isset($this->internal_ipv6_range);
    }

    public function clearInternalIpv6Range()
    {
        unset($this->internal_ipv6_range);
    }

    /**
     * When enabling ula internal ipv6, caller optionally can specify the /48 range they want from the google defined ULA prefix fd20::/20. The input must be a valid /48 ULA IPv6 address and must be within the fd20::/20. Operation will fail if the speficied /48 is already in used by another resource. If the field is not speficied, then a /48 range will be randomly allocated from fd20::/20 and returned via this field. .
     *
     * Generated from protobuf field <code>optional string internal_ipv6_range = 277456807;</code>
     * @param string $var
     * @return $this
     */
    public function setInternalIpv6Range($var)
    {
        GPBUtil::checkString($var, True);
        $this->internal_ipv6_range = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#network for networks.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#network for networks.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Maximum Transmission Unit in bytes. The minimum value for this field is 1460 and the maximum value is 1500 bytes. If unspecified, defaults to 1460.
     *
     * Generated from protobuf field <code>optional int32 mtu = 108462;</code>
     * @return int
     */
    public function getMtu()
    {
        return isset($this->mtu) ? $this->mtu : 0;
    }

    public function hasMtu()
    {
        return isset($this->mtu);
    }

    public function clearMtu()
    {
        unset($this->mtu);
    }

    /**
     * Maximum Transmission Unit in bytes. The minimum value for this field is 1460 and the maximum value is 1500 bytes. If unspecified, defaults to 1460.
     *
     * Generated from protobuf field <code>optional int32 mtu = 108462;</code>
     * @param int $var
     * @return $this
     */
    public function setMtu($var)
    {
        GPBUtil::checkInt32($var);
        $this->mtu = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
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
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
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
     * The network firewall policy enforcement order. Can be either AFTER_CLASSIC_FIREWALL or BEFORE_CLASSIC_FIREWALL. Defaults to AFTER_CLASSIC_FIREWALL if the field is not specified.
     * Check the NetworkFirewallPolicyEnforcementOrder enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_firewall_policy_enforcement_order = 6504784;</code>
     * @return string
     */
    public function getNetworkFirewallPolicyEnforcementOrder()
    {
        return isset($this->network_firewall_policy_enforcement_order) ? $this->network_firewall_policy_enforcement_order : '';
    }

    public function hasNetworkFirewallPolicyEnforcementOrder()
    {
        return isset($this->network_firewall_policy_enforcement_order);
    }

    public function clearNetworkFirewallPolicyEnforcementOrder()
    {
        unset($this->network_firewall_policy_enforcement_order);
    }

    /**
     * The network firewall policy enforcement order. Can be either AFTER_CLASSIC_FIREWALL or BEFORE_CLASSIC_FIREWALL. Defaults to AFTER_CLASSIC_FIREWALL if the field is not specified.
     * Check the NetworkFirewallPolicyEnforcementOrder enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_firewall_policy_enforcement_order = 6504784;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkFirewallPolicyEnforcementOrder($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_firewall_policy_enforcement_order = $var;

        return $this;
    }

    /**
     * [Output Only] A list of network peerings for the resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkPeering peerings = 69883187;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPeerings()
    {
        return $this->peerings;
    }

    /**
     * [Output Only] A list of network peerings for the resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkPeering peerings = 69883187;</code>
     * @param \Google\Cloud\Compute\V1\NetworkPeering[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPeerings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\NetworkPeering::class);
        $this->peerings = $arr;

        return $this;
    }

    /**
     * The network-level routing configuration for this network. Used by Cloud Router to determine what type of network-wide routing behavior to enforce.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkRoutingConfig routing_config = 523556059;</code>
     * @return \Google\Cloud\Compute\V1\NetworkRoutingConfig|null
     */
    public function getRoutingConfig()
    {
        return $this->routing_config;
    }

    public function hasRoutingConfig()
    {
        return isset($this->routing_config);
    }

    public function clearRoutingConfig()
    {
        unset($this->routing_config);
    }

    /**
     * The network-level routing configuration for this network. Used by Cloud Router to determine what type of network-wide routing behavior to enforce.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.NetworkRoutingConfig routing_config = 523556059;</code>
     * @param \Google\Cloud\Compute\V1\NetworkRoutingConfig $var
     * @return $this
     */
    public function setRoutingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NetworkRoutingConfig::class);
        $this->routing_config = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
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
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     * @return string
     */
    public function getSelfLinkWithId()
    {
        return isset($this->self_link_with_id) ? $this->self_link_with_id : '';
    }

    public function hasSelfLinkWithId()
    {
        return isset($this->self_link_with_id);
    }

    public function clearSelfLinkWithId()
    {
        unset($this->self_link_with_id);
    }

    /**
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLinkWithId($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link_with_id = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined fully-qualified URLs for all subnetworks in this VPC network.
     *
     * Generated from protobuf field <code>repeated string subnetworks = 415853125;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubnetworks()
    {
        return $this->subnetworks;
    }

    /**
     * [Output Only] Server-defined fully-qualified URLs for all subnetworks in this VPC network.
     *
     * Generated from protobuf field <code>repeated string subnetworks = 415853125;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubnetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->subnetworks = $arr;

        return $this;
    }

}

