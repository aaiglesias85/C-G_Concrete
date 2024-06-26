<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DEPRECATED: Please use compute#instanceProperties instead. New properties will not be added to this field.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SourceInstanceProperties</code>
 */
class SourceInstanceProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * Enables instances created based on this machine image to send packets with source IP addresses other than their own and receive packets with destination IP addresses other than their own. If these instances will be used as an IP gateway or it will be set as the next-hop in a Route resource, specify true. If unsure, leave this set to false. See the Enable IP forwarding documentation for more information.
     *
     * Generated from protobuf field <code>optional bool can_ip_forward = 467731324;</code>
     */
    private $can_ip_forward = null;
    /**
     * Whether the instance created from this machine image should be protected against deletion.
     *
     * Generated from protobuf field <code>optional bool deletion_protection = 458014698;</code>
     */
    private $deletion_protection = null;
    /**
     * An optional text description for the instances that are created from this machine image.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * An array of disks that are associated with the instances that are created from this machine image.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SavedAttachedDisk disks = 95594102;</code>
     */
    private $disks;
    /**
     * A list of guest accelerator cards' type and count to use for instances created from this machine image.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig guest_accelerators = 463595119;</code>
     */
    private $guest_accelerators;
    /**
     * Labels to apply to instances that are created from this machine image.
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     */
    private $labels;
    /**
     * The machine type to use for instances that are created from this machine image.
     *
     * Generated from protobuf field <code>optional string machine_type = 227711026;</code>
     */
    private $machine_type = null;
    /**
     * The metadata key/value pairs to assign to instances that are created from this machine image. These pairs can consist of custom metadata or predefined keys. See Project and instance metadata for more information.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Metadata metadata = 86866735;</code>
     */
    private $metadata = null;
    /**
     * Minimum cpu/platform to be used by instances created from this machine image. The instance may be scheduled on the specified or newer cpu/platform. Applicable values are the friendly names of CPU platforms, such as minCpuPlatform: "Intel Haswell" or minCpuPlatform: "Intel Sandy Bridge". For more information, read Specifying a Minimum CPU Platform.
     *
     * Generated from protobuf field <code>optional string min_cpu_platform = 242912759;</code>
     */
    private $min_cpu_platform = null;
    /**
     * An array of network access configurations for this interface.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkInterface network_interfaces = 52735243;</code>
     */
    private $network_interfaces;
    /**
     * Specifies the scheduling options for the instances that are created from this machine image.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Scheduling scheduling = 386688404;</code>
     */
    private $scheduling = null;
    /**
     * A list of service accounts with specified scopes. Access tokens for these service accounts are available to the instances that are created from this machine image. Use metadata queries to obtain the access tokens for these instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAccount service_accounts = 277537328;</code>
     */
    private $service_accounts;
    /**
     * A list of tags to apply to the instances that are created from this machine image. The tags identify valid sources or targets for network firewalls. The setTags method can modify this list of tags. Each tag within the list must comply with RFC1035.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Tags tags = 3552281;</code>
     */
    private $tags = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $can_ip_forward
     *           Enables instances created based on this machine image to send packets with source IP addresses other than their own and receive packets with destination IP addresses other than their own. If these instances will be used as an IP gateway or it will be set as the next-hop in a Route resource, specify true. If unsure, leave this set to false. See the Enable IP forwarding documentation for more information.
     *     @type bool $deletion_protection
     *           Whether the instance created from this machine image should be protected against deletion.
     *     @type string $description
     *           An optional text description for the instances that are created from this machine image.
     *     @type \Google\Cloud\Compute\V1\SavedAttachedDisk[]|\Google\Protobuf\Internal\RepeatedField $disks
     *           An array of disks that are associated with the instances that are created from this machine image.
     *     @type \Google\Cloud\Compute\V1\AcceleratorConfig[]|\Google\Protobuf\Internal\RepeatedField $guest_accelerators
     *           A list of guest accelerator cards' type and count to use for instances created from this machine image.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels to apply to instances that are created from this machine image.
     *     @type string $machine_type
     *           The machine type to use for instances that are created from this machine image.
     *     @type \Google\Cloud\Compute\V1\Metadata $metadata
     *           The metadata key/value pairs to assign to instances that are created from this machine image. These pairs can consist of custom metadata or predefined keys. See Project and instance metadata for more information.
     *     @type string $min_cpu_platform
     *           Minimum cpu/platform to be used by instances created from this machine image. The instance may be scheduled on the specified or newer cpu/platform. Applicable values are the friendly names of CPU platforms, such as minCpuPlatform: "Intel Haswell" or minCpuPlatform: "Intel Sandy Bridge". For more information, read Specifying a Minimum CPU Platform.
     *     @type \Google\Cloud\Compute\V1\NetworkInterface[]|\Google\Protobuf\Internal\RepeatedField $network_interfaces
     *           An array of network access configurations for this interface.
     *     @type \Google\Cloud\Compute\V1\Scheduling $scheduling
     *           Specifies the scheduling options for the instances that are created from this machine image.
     *     @type \Google\Cloud\Compute\V1\ServiceAccount[]|\Google\Protobuf\Internal\RepeatedField $service_accounts
     *           A list of service accounts with specified scopes. Access tokens for these service accounts are available to the instances that are created from this machine image. Use metadata queries to obtain the access tokens for these instances.
     *     @type \Google\Cloud\Compute\V1\Tags $tags
     *           A list of tags to apply to the instances that are created from this machine image. The tags identify valid sources or targets for network firewalls. The setTags method can modify this list of tags. Each tag within the list must comply with RFC1035.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Enables instances created based on this machine image to send packets with source IP addresses other than their own and receive packets with destination IP addresses other than their own. If these instances will be used as an IP gateway or it will be set as the next-hop in a Route resource, specify true. If unsure, leave this set to false. See the Enable IP forwarding documentation for more information.
     *
     * Generated from protobuf field <code>optional bool can_ip_forward = 467731324;</code>
     * @return bool
     */
    public function getCanIpForward()
    {
        return isset($this->can_ip_forward) ? $this->can_ip_forward : false;
    }

    public function hasCanIpForward()
    {
        return isset($this->can_ip_forward);
    }

    public function clearCanIpForward()
    {
        unset($this->can_ip_forward);
    }

    /**
     * Enables instances created based on this machine image to send packets with source IP addresses other than their own and receive packets with destination IP addresses other than their own. If these instances will be used as an IP gateway or it will be set as the next-hop in a Route resource, specify true. If unsure, leave this set to false. See the Enable IP forwarding documentation for more information.
     *
     * Generated from protobuf field <code>optional bool can_ip_forward = 467731324;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanIpForward($var)
    {
        GPBUtil::checkBool($var);
        $this->can_ip_forward = $var;

        return $this;
    }

    /**
     * Whether the instance created from this machine image should be protected against deletion.
     *
     * Generated from protobuf field <code>optional bool deletion_protection = 458014698;</code>
     * @return bool
     */
    public function getDeletionProtection()
    {
        return isset($this->deletion_protection) ? $this->deletion_protection : false;
    }

    public function hasDeletionProtection()
    {
        return isset($this->deletion_protection);
    }

    public function clearDeletionProtection()
    {
        unset($this->deletion_protection);
    }

    /**
     * Whether the instance created from this machine image should be protected against deletion.
     *
     * Generated from protobuf field <code>optional bool deletion_protection = 458014698;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeletionProtection($var)
    {
        GPBUtil::checkBool($var);
        $this->deletion_protection = $var;

        return $this;
    }

    /**
     * An optional text description for the instances that are created from this machine image.
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
     * An optional text description for the instances that are created from this machine image.
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
     * An array of disks that are associated with the instances that are created from this machine image.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SavedAttachedDisk disks = 95594102;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisks()
    {
        return $this->disks;
    }

    /**
     * An array of disks that are associated with the instances that are created from this machine image.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SavedAttachedDisk disks = 95594102;</code>
     * @param \Google\Cloud\Compute\V1\SavedAttachedDisk[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\SavedAttachedDisk::class);
        $this->disks = $arr;

        return $this;
    }

    /**
     * A list of guest accelerator cards' type and count to use for instances created from this machine image.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig guest_accelerators = 463595119;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGuestAccelerators()
    {
        return $this->guest_accelerators;
    }

    /**
     * A list of guest accelerator cards' type and count to use for instances created from this machine image.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AcceleratorConfig guest_accelerators = 463595119;</code>
     * @param \Google\Cloud\Compute\V1\AcceleratorConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGuestAccelerators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\AcceleratorConfig::class);
        $this->guest_accelerators = $arr;

        return $this;
    }

    /**
     * Labels to apply to instances that are created from this machine image.
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels to apply to instances that are created from this machine image.
     *
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * The machine type to use for instances that are created from this machine image.
     *
     * Generated from protobuf field <code>optional string machine_type = 227711026;</code>
     * @return string
     */
    public function getMachineType()
    {
        return isset($this->machine_type) ? $this->machine_type : '';
    }

    public function hasMachineType()
    {
        return isset($this->machine_type);
    }

    public function clearMachineType()
    {
        unset($this->machine_type);
    }

    /**
     * The machine type to use for instances that are created from this machine image.
     *
     * Generated from protobuf field <code>optional string machine_type = 227711026;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * The metadata key/value pairs to assign to instances that are created from this machine image. These pairs can consist of custom metadata or predefined keys. See Project and instance metadata for more information.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Metadata metadata = 86866735;</code>
     * @return \Google\Cloud\Compute\V1\Metadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * The metadata key/value pairs to assign to instances that are created from this machine image. These pairs can consist of custom metadata or predefined keys. See Project and instance metadata for more information.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Metadata metadata = 86866735;</code>
     * @param \Google\Cloud\Compute\V1\Metadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Metadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Minimum cpu/platform to be used by instances created from this machine image. The instance may be scheduled on the specified or newer cpu/platform. Applicable values are the friendly names of CPU platforms, such as minCpuPlatform: "Intel Haswell" or minCpuPlatform: "Intel Sandy Bridge". For more information, read Specifying a Minimum CPU Platform.
     *
     * Generated from protobuf field <code>optional string min_cpu_platform = 242912759;</code>
     * @return string
     */
    public function getMinCpuPlatform()
    {
        return isset($this->min_cpu_platform) ? $this->min_cpu_platform : '';
    }

    public function hasMinCpuPlatform()
    {
        return isset($this->min_cpu_platform);
    }

    public function clearMinCpuPlatform()
    {
        unset($this->min_cpu_platform);
    }

    /**
     * Minimum cpu/platform to be used by instances created from this machine image. The instance may be scheduled on the specified or newer cpu/platform. Applicable values are the friendly names of CPU platforms, such as minCpuPlatform: "Intel Haswell" or minCpuPlatform: "Intel Sandy Bridge". For more information, read Specifying a Minimum CPU Platform.
     *
     * Generated from protobuf field <code>optional string min_cpu_platform = 242912759;</code>
     * @param string $var
     * @return $this
     */
    public function setMinCpuPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->min_cpu_platform = $var;

        return $this;
    }

    /**
     * An array of network access configurations for this interface.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkInterface network_interfaces = 52735243;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkInterfaces()
    {
        return $this->network_interfaces;
    }

    /**
     * An array of network access configurations for this interface.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.NetworkInterface network_interfaces = 52735243;</code>
     * @param \Google\Cloud\Compute\V1\NetworkInterface[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkInterfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\NetworkInterface::class);
        $this->network_interfaces = $arr;

        return $this;
    }

    /**
     * Specifies the scheduling options for the instances that are created from this machine image.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Scheduling scheduling = 386688404;</code>
     * @return \Google\Cloud\Compute\V1\Scheduling|null
     */
    public function getScheduling()
    {
        return $this->scheduling;
    }

    public function hasScheduling()
    {
        return isset($this->scheduling);
    }

    public function clearScheduling()
    {
        unset($this->scheduling);
    }

    /**
     * Specifies the scheduling options for the instances that are created from this machine image.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Scheduling scheduling = 386688404;</code>
     * @param \Google\Cloud\Compute\V1\Scheduling $var
     * @return $this
     */
    public function setScheduling($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Scheduling::class);
        $this->scheduling = $var;

        return $this;
    }

    /**
     * A list of service accounts with specified scopes. Access tokens for these service accounts are available to the instances that are created from this machine image. Use metadata queries to obtain the access tokens for these instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAccount service_accounts = 277537328;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceAccounts()
    {
        return $this->service_accounts;
    }

    /**
     * A list of service accounts with specified scopes. Access tokens for these service accounts are available to the instances that are created from this machine image. Use metadata queries to obtain the access tokens for these instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ServiceAccount service_accounts = 277537328;</code>
     * @param \Google\Cloud\Compute\V1\ServiceAccount[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ServiceAccount::class);
        $this->service_accounts = $arr;

        return $this;
    }

    /**
     * A list of tags to apply to the instances that are created from this machine image. The tags identify valid sources or targets for network firewalls. The setTags method can modify this list of tags. Each tag within the list must comply with RFC1035.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Tags tags = 3552281;</code>
     * @return \Google\Cloud\Compute\V1\Tags|null
     */
    public function getTags()
    {
        return $this->tags;
    }

    public function hasTags()
    {
        return isset($this->tags);
    }

    public function clearTags()
    {
        unset($this->tags);
    }

    /**
     * A list of tags to apply to the instances that are created from this machine image. The tags identify valid sources or targets for network firewalls. The setTags method can modify this list of tags. Each tag within the list must comply with RFC1035.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Tags tags = 3552281;</code>
     * @param \Google\Cloud\Compute\V1\Tags $var
     * @return $this
     */
    public function setTags($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Tags::class);
        $this->tags = $var;

        return $this;
    }

}

