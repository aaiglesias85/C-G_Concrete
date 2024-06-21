<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AutoprovisioningNodePoolDefaults contains defaults for a node pool created
 * by NAP.
 *
 * Generated from protobuf message <code>google.container.v1.AutoprovisioningNodePoolDefaults</code>
 */
class AutoprovisioningNodePoolDefaults extends \Google\Protobuf\Internal\Message
{
    /**
     * Scopes that are used by NAP when creating node pools.
     *
     * Generated from protobuf field <code>repeated string oauth_scopes = 1;</code>
     */
    private $oauth_scopes;
    /**
     * The Google Cloud Platform Service Account to be used by the node VMs.
     *
     * Generated from protobuf field <code>string service_account = 2;</code>
     */
    private $service_account = '';
    /**
     * Specifies the upgrade settings for NAP created node pools
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 3;</code>
     */
    private $upgrade_settings = null;
    /**
     * Specifies the node management options for NAP created node-pools.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeManagement management = 4;</code>
     */
    private $management = null;
    /**
     * Minimum CPU platform to be used for NAP created node pools.
     * The instance may be scheduled on the specified or newer CPU platform.
     * Applicable values are the friendly names of CPU platforms, such as
     * minCpuPlatform: Intel Haswell or
     * minCpuPlatform: Intel Sandy Bridge. For more
     * information, read [how to specify min CPU
     * platform](https://cloud.google.com/compute/docs/instances/specify-min-cpu-platform)
     * To unset the min cpu platform field pass "automatic"
     * as field value.
     *
     * Generated from protobuf field <code>string min_cpu_platform = 5;</code>
     */
    private $min_cpu_platform = '';
    /**
     * Size of the disk attached to each node, specified in GB.
     * The smallest allowed disk size is 10GB.
     * If unspecified, the default disk size is 100GB.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 6;</code>
     */
    private $disk_size_gb = 0;
    /**
     * Type of the disk attached to each node (e.g. 'pd-standard', 'pd-ssd' or
     * 'pd-balanced')
     * If unspecified, the default disk type is 'pd-standard'
     *
     * Generated from protobuf field <code>string disk_type = 7;</code>
     */
    private $disk_type = '';
    /**
     * Shielded Instance options.
     *
     * Generated from protobuf field <code>.google.container.v1.ShieldedInstanceConfig shielded_instance_config = 8;</code>
     */
    private $shielded_instance_config = null;
    /**
     * The Customer Managed Encryption Key used to encrypt the boot disk attached
     * to each node in the node pool. This should be of the form
     * projects/[KEY_PROJECT_ID]/locations/[LOCATION]/keyRings/[RING_NAME]/cryptoKeys/[KEY_NAME].
     * For more information about protecting resources with Cloud KMS Keys please
     * see:
     * https://cloud.google.com/compute/docs/disks/customer-managed-encryption
     *
     * Generated from protobuf field <code>string boot_disk_kms_key = 9;</code>
     */
    private $boot_disk_kms_key = '';
    /**
     * The image type to use for NAP created node.
     *
     * Generated from protobuf field <code>string image_type = 10;</code>
     */
    private $image_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $oauth_scopes
     *           Scopes that are used by NAP when creating node pools.
     *     @type string $service_account
     *           The Google Cloud Platform Service Account to be used by the node VMs.
     *     @type \Google\Cloud\Container\V1\NodePool\UpgradeSettings $upgrade_settings
     *           Specifies the upgrade settings for NAP created node pools
     *     @type \Google\Cloud\Container\V1\NodeManagement $management
     *           Specifies the node management options for NAP created node-pools.
     *     @type string $min_cpu_platform
     *           Minimum CPU platform to be used for NAP created node pools.
     *           The instance may be scheduled on the specified or newer CPU platform.
     *           Applicable values are the friendly names of CPU platforms, such as
     *           minCpuPlatform: Intel Haswell or
     *           minCpuPlatform: Intel Sandy Bridge. For more
     *           information, read [how to specify min CPU
     *           platform](https://cloud.google.com/compute/docs/instances/specify-min-cpu-platform)
     *           To unset the min cpu platform field pass "automatic"
     *           as field value.
     *     @type int $disk_size_gb
     *           Size of the disk attached to each node, specified in GB.
     *           The smallest allowed disk size is 10GB.
     *           If unspecified, the default disk size is 100GB.
     *     @type string $disk_type
     *           Type of the disk attached to each node (e.g. 'pd-standard', 'pd-ssd' or
     *           'pd-balanced')
     *           If unspecified, the default disk type is 'pd-standard'
     *     @type \Google\Cloud\Container\V1\ShieldedInstanceConfig $shielded_instance_config
     *           Shielded Instance options.
     *     @type string $boot_disk_kms_key
     *           The Customer Managed Encryption Key used to encrypt the boot disk attached
     *           to each node in the node pool. This should be of the form
     *           projects/[KEY_PROJECT_ID]/locations/[LOCATION]/keyRings/[RING_NAME]/cryptoKeys/[KEY_NAME].
     *           For more information about protecting resources with Cloud KMS Keys please
     *           see:
     *           https://cloud.google.com/compute/docs/disks/customer-managed-encryption
     *     @type string $image_type
     *           The image type to use for NAP created node.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Scopes that are used by NAP when creating node pools.
     *
     * Generated from protobuf field <code>repeated string oauth_scopes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOauthScopes()
    {
        return $this->oauth_scopes;
    }

    /**
     * Scopes that are used by NAP when creating node pools.
     *
     * Generated from protobuf field <code>repeated string oauth_scopes = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOauthScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->oauth_scopes = $arr;

        return $this;
    }

    /**
     * The Google Cloud Platform Service Account to be used by the node VMs.
     *
     * Generated from protobuf field <code>string service_account = 2;</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * The Google Cloud Platform Service Account to be used by the node VMs.
     *
     * Generated from protobuf field <code>string service_account = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Specifies the upgrade settings for NAP created node pools
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 3;</code>
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
     * Specifies the upgrade settings for NAP created node pools
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpgradeSettings upgrade_settings = 3;</code>
     * @param \Google\Cloud\Container\V1\NodePool\UpgradeSettings $var
     * @return $this
     */
    public function setUpgradeSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodePool\UpgradeSettings::class);
        $this->upgrade_settings = $var;

        return $this;
    }

    /**
     * Specifies the node management options for NAP created node-pools.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeManagement management = 4;</code>
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
     * Specifies the node management options for NAP created node-pools.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeManagement management = 4;</code>
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
     * Minimum CPU platform to be used for NAP created node pools.
     * The instance may be scheduled on the specified or newer CPU platform.
     * Applicable values are the friendly names of CPU platforms, such as
     * minCpuPlatform: Intel Haswell or
     * minCpuPlatform: Intel Sandy Bridge. For more
     * information, read [how to specify min CPU
     * platform](https://cloud.google.com/compute/docs/instances/specify-min-cpu-platform)
     * To unset the min cpu platform field pass "automatic"
     * as field value.
     *
     * Generated from protobuf field <code>string min_cpu_platform = 5;</code>
     * @return string
     */
    public function getMinCpuPlatform()
    {
        return $this->min_cpu_platform;
    }

    /**
     * Minimum CPU platform to be used for NAP created node pools.
     * The instance may be scheduled on the specified or newer CPU platform.
     * Applicable values are the friendly names of CPU platforms, such as
     * minCpuPlatform: Intel Haswell or
     * minCpuPlatform: Intel Sandy Bridge. For more
     * information, read [how to specify min CPU
     * platform](https://cloud.google.com/compute/docs/instances/specify-min-cpu-platform)
     * To unset the min cpu platform field pass "automatic"
     * as field value.
     *
     * Generated from protobuf field <code>string min_cpu_platform = 5;</code>
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
     * Size of the disk attached to each node, specified in GB.
     * The smallest allowed disk size is 10GB.
     * If unspecified, the default disk size is 100GB.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 6;</code>
     * @return int
     */
    public function getDiskSizeGb()
    {
        return $this->disk_size_gb;
    }

    /**
     * Size of the disk attached to each node, specified in GB.
     * The smallest allowed disk size is 10GB.
     * If unspecified, the default disk size is 100GB.
     *
     * Generated from protobuf field <code>int32 disk_size_gb = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDiskSizeGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->disk_size_gb = $var;

        return $this;
    }

    /**
     * Type of the disk attached to each node (e.g. 'pd-standard', 'pd-ssd' or
     * 'pd-balanced')
     * If unspecified, the default disk type is 'pd-standard'
     *
     * Generated from protobuf field <code>string disk_type = 7;</code>
     * @return string
     */
    public function getDiskType()
    {
        return $this->disk_type;
    }

    /**
     * Type of the disk attached to each node (e.g. 'pd-standard', 'pd-ssd' or
     * 'pd-balanced')
     * If unspecified, the default disk type is 'pd-standard'
     *
     * Generated from protobuf field <code>string disk_type = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDiskType($var)
    {
        GPBUtil::checkString($var, True);
        $this->disk_type = $var;

        return $this;
    }

    /**
     * Shielded Instance options.
     *
     * Generated from protobuf field <code>.google.container.v1.ShieldedInstanceConfig shielded_instance_config = 8;</code>
     * @return \Google\Cloud\Container\V1\ShieldedInstanceConfig|null
     */
    public function getShieldedInstanceConfig()
    {
        return $this->shielded_instance_config;
    }

    public function hasShieldedInstanceConfig()
    {
        return isset($this->shielded_instance_config);
    }

    public function clearShieldedInstanceConfig()
    {
        unset($this->shielded_instance_config);
    }

    /**
     * Shielded Instance options.
     *
     * Generated from protobuf field <code>.google.container.v1.ShieldedInstanceConfig shielded_instance_config = 8;</code>
     * @param \Google\Cloud\Container\V1\ShieldedInstanceConfig $var
     * @return $this
     */
    public function setShieldedInstanceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\ShieldedInstanceConfig::class);
        $this->shielded_instance_config = $var;

        return $this;
    }

    /**
     * The Customer Managed Encryption Key used to encrypt the boot disk attached
     * to each node in the node pool. This should be of the form
     * projects/[KEY_PROJECT_ID]/locations/[LOCATION]/keyRings/[RING_NAME]/cryptoKeys/[KEY_NAME].
     * For more information about protecting resources with Cloud KMS Keys please
     * see:
     * https://cloud.google.com/compute/docs/disks/customer-managed-encryption
     *
     * Generated from protobuf field <code>string boot_disk_kms_key = 9;</code>
     * @return string
     */
    public function getBootDiskKmsKey()
    {
        return $this->boot_disk_kms_key;
    }

    /**
     * The Customer Managed Encryption Key used to encrypt the boot disk attached
     * to each node in the node pool. This should be of the form
     * projects/[KEY_PROJECT_ID]/locations/[LOCATION]/keyRings/[RING_NAME]/cryptoKeys/[KEY_NAME].
     * For more information about protecting resources with Cloud KMS Keys please
     * see:
     * https://cloud.google.com/compute/docs/disks/customer-managed-encryption
     *
     * Generated from protobuf field <code>string boot_disk_kms_key = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setBootDiskKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->boot_disk_kms_key = $var;

        return $this;
    }

    /**
     * The image type to use for NAP created node.
     *
     * Generated from protobuf field <code>string image_type = 10;</code>
     * @return string
     */
    public function getImageType()
    {
        return $this->image_type;
    }

    /**
     * The image type to use for NAP created node.
     *
     * Generated from protobuf field <code>string image_type = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setImageType($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_type = $var;

        return $this;
    }

}

