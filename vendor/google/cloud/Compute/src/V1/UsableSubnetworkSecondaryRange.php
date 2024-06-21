<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Secondary IP range of a usable subnetwork.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.UsableSubnetworkSecondaryRange</code>
 */
class UsableSubnetworkSecondaryRange extends \Google\Protobuf\Internal\Message
{
    /**
     * The range of IP addresses belonging to this subnetwork secondary range.
     *
     * Generated from protobuf field <code>optional string ip_cidr_range = 98117322;</code>
     */
    private $ip_cidr_range = null;
    /**
     * The name associated with this subnetwork secondary range, used when adding an alias IP range to a VM instance. The name must be 1-63 characters long, and comply with RFC1035. The name must be unique within the subnetwork.
     *
     * Generated from protobuf field <code>optional string range_name = 332216397;</code>
     */
    private $range_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ip_cidr_range
     *           The range of IP addresses belonging to this subnetwork secondary range.
     *     @type string $range_name
     *           The name associated with this subnetwork secondary range, used when adding an alias IP range to a VM instance. The name must be 1-63 characters long, and comply with RFC1035. The name must be unique within the subnetwork.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The range of IP addresses belonging to this subnetwork secondary range.
     *
     * Generated from protobuf field <code>optional string ip_cidr_range = 98117322;</code>
     * @return string
     */
    public function getIpCidrRange()
    {
        return isset($this->ip_cidr_range) ? $this->ip_cidr_range : '';
    }

    public function hasIpCidrRange()
    {
        return isset($this->ip_cidr_range);
    }

    public function clearIpCidrRange()
    {
        unset($this->ip_cidr_range);
    }

    /**
     * The range of IP addresses belonging to this subnetwork secondary range.
     *
     * Generated from protobuf field <code>optional string ip_cidr_range = 98117322;</code>
     * @param string $var
     * @return $this
     */
    public function setIpCidrRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_cidr_range = $var;

        return $this;
    }

    /**
     * The name associated with this subnetwork secondary range, used when adding an alias IP range to a VM instance. The name must be 1-63 characters long, and comply with RFC1035. The name must be unique within the subnetwork.
     *
     * Generated from protobuf field <code>optional string range_name = 332216397;</code>
     * @return string
     */
    public function getRangeName()
    {
        return isset($this->range_name) ? $this->range_name : '';
    }

    public function hasRangeName()
    {
        return isset($this->range_name);
    }

    public function clearRangeName()
    {
        unset($this->range_name);
    }

    /**
     * The name associated with this subnetwork secondary range, used when adding an alias IP range to a VM instance. The name must be 1-63 characters long, and comply with RFC1035. The name must be unique within the subnetwork.
     *
     * Generated from protobuf field <code>optional string range_name = 332216397;</code>
     * @param string $var
     * @return $this
     */
    public function setRangeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->range_name = $var;

        return $this;
    }

}

