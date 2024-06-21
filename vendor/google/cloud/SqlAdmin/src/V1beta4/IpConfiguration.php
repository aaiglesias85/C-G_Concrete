<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IP Management configuration.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.IpConfiguration</code>
 */
class IpConfiguration extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the instance is assigned a public IP address or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ipv4_enabled = 1;</code>
     */
    private $ipv4_enabled = null;
    /**
     * The resource link for the VPC network from which the Cloud SQL instance is
     * accessible for private IP. For example,
     * `/projects/myProject/global/networks/default`. This setting can
     * be updated, but it cannot be removed after it is set.
     *
     * Generated from protobuf field <code>string private_network = 2;</code>
     */
    private $private_network = '';
    /**
     * Whether SSL connections over IP are enforced or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue require_ssl = 3;</code>
     */
    private $require_ssl = null;
    /**
     * The list of external networks that are allowed to connect to the instance
     * using the IP. In 'CIDR' notation, also known as 'slash' notation (for
     * example: `157.197.200.0/24`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.AclEntry authorized_networks = 4;</code>
     */
    private $authorized_networks;
    /**
     * The name of the allocated ip range for the private ip CloudSQL instance.
     * For example: "google-managed-services-default". If set, the instance ip
     * will be created in the allocated range. The range name must comply with
     * [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     * must be 1-63 characters long and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])?.`
     *
     * Generated from protobuf field <code>string allocated_ip_range = 6;</code>
     */
    private $allocated_ip_range = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\BoolValue $ipv4_enabled
     *           Whether the instance is assigned a public IP address or not.
     *     @type string $private_network
     *           The resource link for the VPC network from which the Cloud SQL instance is
     *           accessible for private IP. For example,
     *           `/projects/myProject/global/networks/default`. This setting can
     *           be updated, but it cannot be removed after it is set.
     *     @type \Google\Protobuf\BoolValue $require_ssl
     *           Whether SSL connections over IP are enforced or not.
     *     @type \Google\Cloud\Sql\V1beta4\AclEntry[]|\Google\Protobuf\Internal\RepeatedField $authorized_networks
     *           The list of external networks that are allowed to connect to the instance
     *           using the IP. In 'CIDR' notation, also known as 'slash' notation (for
     *           example: `157.197.200.0/24`).
     *     @type string $allocated_ip_range
     *           The name of the allocated ip range for the private ip CloudSQL instance.
     *           For example: "google-managed-services-default". If set, the instance ip
     *           will be created in the allocated range. The range name must comply with
     *           [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     *           must be 1-63 characters long and match the regular expression
     *           `[a-z]([-a-z0-9]*[a-z0-9])?.`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the instance is assigned a public IP address or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ipv4_enabled = 1;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getIpv4Enabled()
    {
        return $this->ipv4_enabled;
    }

    public function hasIpv4Enabled()
    {
        return isset($this->ipv4_enabled);
    }

    public function clearIpv4Enabled()
    {
        unset($this->ipv4_enabled);
    }

    /**
     * Returns the unboxed value from <code>getIpv4Enabled()</code>

     * Whether the instance is assigned a public IP address or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ipv4_enabled = 1;</code>
     * @return bool|null
     */
    public function getIpv4EnabledValue()
    {
        return $this->readWrapperValue("ipv4_enabled");
    }

    /**
     * Whether the instance is assigned a public IP address or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ipv4_enabled = 1;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIpv4Enabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->ipv4_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether the instance is assigned a public IP address or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ipv4_enabled = 1;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setIpv4EnabledValue($var)
    {
        $this->writeWrapperValue("ipv4_enabled", $var);
        return $this;}

    /**
     * The resource link for the VPC network from which the Cloud SQL instance is
     * accessible for private IP. For example,
     * `/projects/myProject/global/networks/default`. This setting can
     * be updated, but it cannot be removed after it is set.
     *
     * Generated from protobuf field <code>string private_network = 2;</code>
     * @return string
     */
    public function getPrivateNetwork()
    {
        return $this->private_network;
    }

    /**
     * The resource link for the VPC network from which the Cloud SQL instance is
     * accessible for private IP. For example,
     * `/projects/myProject/global/networks/default`. This setting can
     * be updated, but it cannot be removed after it is set.
     *
     * Generated from protobuf field <code>string private_network = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_network = $var;

        return $this;
    }

    /**
     * Whether SSL connections over IP are enforced or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue require_ssl = 3;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getRequireSsl()
    {
        return $this->require_ssl;
    }

    public function hasRequireSsl()
    {
        return isset($this->require_ssl);
    }

    public function clearRequireSsl()
    {
        unset($this->require_ssl);
    }

    /**
     * Returns the unboxed value from <code>getRequireSsl()</code>

     * Whether SSL connections over IP are enforced or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue require_ssl = 3;</code>
     * @return bool|null
     */
    public function getRequireSslValue()
    {
        return $this->readWrapperValue("require_ssl");
    }

    /**
     * Whether SSL connections over IP are enforced or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue require_ssl = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setRequireSsl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->require_ssl = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether SSL connections over IP are enforced or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue require_ssl = 3;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setRequireSslValue($var)
    {
        $this->writeWrapperValue("require_ssl", $var);
        return $this;}

    /**
     * The list of external networks that are allowed to connect to the instance
     * using the IP. In 'CIDR' notation, also known as 'slash' notation (for
     * example: `157.197.200.0/24`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.AclEntry authorized_networks = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuthorizedNetworks()
    {
        return $this->authorized_networks;
    }

    /**
     * The list of external networks that are allowed to connect to the instance
     * using the IP. In 'CIDR' notation, also known as 'slash' notation (for
     * example: `157.197.200.0/24`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.AclEntry authorized_networks = 4;</code>
     * @param \Google\Cloud\Sql\V1beta4\AclEntry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuthorizedNetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Sql\V1beta4\AclEntry::class);
        $this->authorized_networks = $arr;

        return $this;
    }

    /**
     * The name of the allocated ip range for the private ip CloudSQL instance.
     * For example: "google-managed-services-default". If set, the instance ip
     * will be created in the allocated range. The range name must comply with
     * [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     * must be 1-63 characters long and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])?.`
     *
     * Generated from protobuf field <code>string allocated_ip_range = 6;</code>
     * @return string
     */
    public function getAllocatedIpRange()
    {
        return $this->allocated_ip_range;
    }

    /**
     * The name of the allocated ip range for the private ip CloudSQL instance.
     * For example: "google-managed-services-default". If set, the instance ip
     * will be created in the allocated range. The range name must comply with
     * [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     * must be 1-63 characters long and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])?.`
     *
     * Generated from protobuf field <code>string allocated_ip_range = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAllocatedIpRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->allocated_ip_range = $var;

        return $this;
    }

}

