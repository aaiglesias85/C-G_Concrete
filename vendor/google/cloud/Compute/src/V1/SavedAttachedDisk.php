<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DEPRECATED: Please use compute#savedDisk instead. An instance-attached disk resource.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SavedAttachedDisk</code>
 */
class SavedAttachedDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies whether the disk will be auto-deleted when the instance is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>optional bool auto_delete = 464761403;</code>
     */
    private $auto_delete = null;
    /**
     * Indicates that this is a boot disk. The virtual machine will use the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>optional bool boot = 3029746;</code>
     */
    private $boot = null;
    /**
     * Specifies the name of the disk attached to the source instance.
     *
     * Generated from protobuf field <code>optional string device_name = 67541716;</code>
     */
    private $device_name = null;
    /**
     * The encryption key for the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomerEncryptionKey disk_encryption_key = 271660677;</code>
     */
    private $disk_encryption_key = null;
    /**
     * The size of the disk in base-2 GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 316263735;</code>
     */
    private $disk_size_gb = null;
    /**
     * [Output Only] URL of the disk type resource. For example: projects/project /zones/zone/diskTypes/pd-standard or pd-ssd
     *
     * Generated from protobuf field <code>optional string disk_type = 93009052;</code>
     */
    private $disk_type = null;
    /**
     * A list of features to enable on the guest operating system. Applicable only for bootable images. Read Enabling guest operating system features to see a list of available options.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.GuestOsFeature guest_os_features = 79294545;</code>
     */
    private $guest_os_features;
    /**
     * Specifies zero-based index of the disk that is attached to the source instance.
     *
     * Generated from protobuf field <code>optional int32 index = 100346066;</code>
     */
    private $index = null;
    /**
     * Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME.
     * Check the Interface enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string interface = 502623545;</code>
     */
    private $interface = null;
    /**
     * [Output Only] Type of the resource. Always compute#attachedDisk for attached disks.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * [Output Only] Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string licenses = 337642578;</code>
     */
    private $licenses;
    /**
     * The mode in which this disk is attached to the source instance, either READ_WRITE or READ_ONLY.
     * Check the Mode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string mode = 3357091;</code>
     */
    private $mode = null;
    /**
     * Specifies a URL of the disk attached to the source instance.
     *
     * Generated from protobuf field <code>optional string source = 177235995;</code>
     */
    private $source = null;
    /**
     * [Output Only] A size of the storage used by the disk's snapshot by this machine image.
     *
     * Generated from protobuf field <code>optional int64 storage_bytes = 424631719;</code>
     */
    private $storage_bytes = null;
    /**
     * [Output Only] An indicator whether storageBytes is in a stable state or it is being adjusted as a result of shared storage reallocation. This status can either be UPDATING, meaning the size of the snapshot is being updated, or UP_TO_DATE, meaning the size of the snapshot is up-to-date.
     * Check the StorageBytesStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string storage_bytes_status = 490739082;</code>
     */
    private $storage_bytes_status = null;
    /**
     * Specifies the type of the attached disk, either SCRATCH or PERSISTENT.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     */
    private $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $auto_delete
     *           Specifies whether the disk will be auto-deleted when the instance is deleted (but not when the disk is detached from the instance).
     *     @type bool $boot
     *           Indicates that this is a boot disk. The virtual machine will use the first partition of the disk for its root filesystem.
     *     @type string $device_name
     *           Specifies the name of the disk attached to the source instance.
     *     @type \Google\Cloud\Compute\V1\CustomerEncryptionKey $disk_encryption_key
     *           The encryption key for the disk.
     *     @type int|string $disk_size_gb
     *           The size of the disk in base-2 GB.
     *     @type string $disk_type
     *           [Output Only] URL of the disk type resource. For example: projects/project /zones/zone/diskTypes/pd-standard or pd-ssd
     *     @type \Google\Cloud\Compute\V1\GuestOsFeature[]|\Google\Protobuf\Internal\RepeatedField $guest_os_features
     *           A list of features to enable on the guest operating system. Applicable only for bootable images. Read Enabling guest operating system features to see a list of available options.
     *     @type int $index
     *           Specifies zero-based index of the disk that is attached to the source instance.
     *     @type string $interface
     *           Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME.
     *           Check the Interface enum for the list of possible values.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#attachedDisk for attached disks.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $licenses
     *           [Output Only] Any valid publicly visible licenses.
     *     @type string $mode
     *           The mode in which this disk is attached to the source instance, either READ_WRITE or READ_ONLY.
     *           Check the Mode enum for the list of possible values.
     *     @type string $source
     *           Specifies a URL of the disk attached to the source instance.
     *     @type int|string $storage_bytes
     *           [Output Only] A size of the storage used by the disk's snapshot by this machine image.
     *     @type string $storage_bytes_status
     *           [Output Only] An indicator whether storageBytes is in a stable state or it is being adjusted as a result of shared storage reallocation. This status can either be UPDATING, meaning the size of the snapshot is being updated, or UP_TO_DATE, meaning the size of the snapshot is up-to-date.
     *           Check the StorageBytesStatus enum for the list of possible values.
     *     @type string $type
     *           Specifies the type of the attached disk, either SCRATCH or PERSISTENT.
     *           Check the Type enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies whether the disk will be auto-deleted when the instance is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>optional bool auto_delete = 464761403;</code>
     * @return bool
     */
    public function getAutoDelete()
    {
        return isset($this->auto_delete) ? $this->auto_delete : false;
    }

    public function hasAutoDelete()
    {
        return isset($this->auto_delete);
    }

    public function clearAutoDelete()
    {
        unset($this->auto_delete);
    }

    /**
     * Specifies whether the disk will be auto-deleted when the instance is deleted (but not when the disk is detached from the instance).
     *
     * Generated from protobuf field <code>optional bool auto_delete = 464761403;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoDelete($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_delete = $var;

        return $this;
    }

    /**
     * Indicates that this is a boot disk. The virtual machine will use the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>optional bool boot = 3029746;</code>
     * @return bool
     */
    public function getBoot()
    {
        return isset($this->boot) ? $this->boot : false;
    }

    public function hasBoot()
    {
        return isset($this->boot);
    }

    public function clearBoot()
    {
        unset($this->boot);
    }

    /**
     * Indicates that this is a boot disk. The virtual machine will use the first partition of the disk for its root filesystem.
     *
     * Generated from protobuf field <code>optional bool boot = 3029746;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoot($var)
    {
        GPBUtil::checkBool($var);
        $this->boot = $var;

        return $this;
    }

    /**
     * Specifies the name of the disk attached to the source instance.
     *
     * Generated from protobuf field <code>optional string device_name = 67541716;</code>
     * @return string
     */
    public function getDeviceName()
    {
        return isset($this->device_name) ? $this->device_name : '';
    }

    public function hasDeviceName()
    {
        return isset($this->device_name);
    }

    public function clearDeviceName()
    {
        unset($this->device_name);
    }

    /**
     * Specifies the name of the disk attached to the source instance.
     *
     * Generated from protobuf field <code>optional string device_name = 67541716;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_name = $var;

        return $this;
    }

    /**
     * The encryption key for the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomerEncryptionKey disk_encryption_key = 271660677;</code>
     * @return \Google\Cloud\Compute\V1\CustomerEncryptionKey|null
     */
    public function getDiskEncryptionKey()
    {
        return $this->disk_encryption_key;
    }

    public function hasDiskEncryptionKey()
    {
        return isset($this->disk_encryption_key);
    }

    public function clearDiskEncryptionKey()
    {
        unset($this->disk_encryption_key);
    }

    /**
     * The encryption key for the disk.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomerEncryptionKey disk_encryption_key = 271660677;</code>
     * @param \Google\Cloud\Compute\V1\CustomerEncryptionKey $var
     * @return $this
     */
    public function setDiskEncryptionKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\CustomerEncryptionKey::class);
        $this->disk_encryption_key = $var;

        return $this;
    }

    /**
     * The size of the disk in base-2 GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 316263735;</code>
     * @return int|string
     */
    public function getDiskSizeGb()
    {
        return isset($this->disk_size_gb) ? $this->disk_size_gb : 0;
    }

    public function hasDiskSizeGb()
    {
        return isset($this->disk_size_gb);
    }

    public function clearDiskSizeGb()
    {
        unset($this->disk_size_gb);
    }

    /**
     * The size of the disk in base-2 GB.
     *
     * Generated from protobuf field <code>optional int64 disk_size_gb = 316263735;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDiskSizeGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->disk_size_gb = $var;

        return $this;
    }

    /**
     * [Output Only] URL of the disk type resource. For example: projects/project /zones/zone/diskTypes/pd-standard or pd-ssd
     *
     * Generated from protobuf field <code>optional string disk_type = 93009052;</code>
     * @return string
     */
    public function getDiskType()
    {
        return isset($this->disk_type) ? $this->disk_type : '';
    }

    public function hasDiskType()
    {
        return isset($this->disk_type);
    }

    public function clearDiskType()
    {
        unset($this->disk_type);
    }

    /**
     * [Output Only] URL of the disk type resource. For example: projects/project /zones/zone/diskTypes/pd-standard or pd-ssd
     *
     * Generated from protobuf field <code>optional string disk_type = 93009052;</code>
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
     * A list of features to enable on the guest operating system. Applicable only for bootable images. Read Enabling guest operating system features to see a list of available options.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.GuestOsFeature guest_os_features = 79294545;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGuestOsFeatures()
    {
        return $this->guest_os_features;
    }

    /**
     * A list of features to enable on the guest operating system. Applicable only for bootable images. Read Enabling guest operating system features to see a list of available options.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.GuestOsFeature guest_os_features = 79294545;</code>
     * @param \Google\Cloud\Compute\V1\GuestOsFeature[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGuestOsFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\GuestOsFeature::class);
        $this->guest_os_features = $arr;

        return $this;
    }

    /**
     * Specifies zero-based index of the disk that is attached to the source instance.
     *
     * Generated from protobuf field <code>optional int32 index = 100346066;</code>
     * @return int
     */
    public function getIndex()
    {
        return isset($this->index) ? $this->index : 0;
    }

    public function hasIndex()
    {
        return isset($this->index);
    }

    public function clearIndex()
    {
        unset($this->index);
    }

    /**
     * Specifies zero-based index of the disk that is attached to the source instance.
     *
     * Generated from protobuf field <code>optional int32 index = 100346066;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME.
     * Check the Interface enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string interface = 502623545;</code>
     * @return string
     */
    public function getInterface()
    {
        return isset($this->interface) ? $this->interface : '';
    }

    public function hasInterface()
    {
        return isset($this->interface);
    }

    public function clearInterface()
    {
        unset($this->interface);
    }

    /**
     * Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME.
     * Check the Interface enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string interface = 502623545;</code>
     * @param string $var
     * @return $this
     */
    public function setInterface($var)
    {
        GPBUtil::checkString($var, True);
        $this->interface = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#attachedDisk for attached disks.
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
     * [Output Only] Type of the resource. Always compute#attachedDisk for attached disks.
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
     * [Output Only] Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string licenses = 337642578;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLicenses()
    {
        return $this->licenses;
    }

    /**
     * [Output Only] Any valid publicly visible licenses.
     *
     * Generated from protobuf field <code>repeated string licenses = 337642578;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLicenses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->licenses = $arr;

        return $this;
    }

    /**
     * The mode in which this disk is attached to the source instance, either READ_WRITE or READ_ONLY.
     * Check the Mode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string mode = 3357091;</code>
     * @return string
     */
    public function getMode()
    {
        return isset($this->mode) ? $this->mode : '';
    }

    public function hasMode()
    {
        return isset($this->mode);
    }

    public function clearMode()
    {
        unset($this->mode);
    }

    /**
     * The mode in which this disk is attached to the source instance, either READ_WRITE or READ_ONLY.
     * Check the Mode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string mode = 3357091;</code>
     * @param string $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->mode = $var;

        return $this;
    }

    /**
     * Specifies a URL of the disk attached to the source instance.
     *
     * Generated from protobuf field <code>optional string source = 177235995;</code>
     * @return string
     */
    public function getSource()
    {
        return isset($this->source) ? $this->source : '';
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * Specifies a URL of the disk attached to the source instance.
     *
     * Generated from protobuf field <code>optional string source = 177235995;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * [Output Only] A size of the storage used by the disk's snapshot by this machine image.
     *
     * Generated from protobuf field <code>optional int64 storage_bytes = 424631719;</code>
     * @return int|string
     */
    public function getStorageBytes()
    {
        return isset($this->storage_bytes) ? $this->storage_bytes : 0;
    }

    public function hasStorageBytes()
    {
        return isset($this->storage_bytes);
    }

    public function clearStorageBytes()
    {
        unset($this->storage_bytes);
    }

    /**
     * [Output Only] A size of the storage used by the disk's snapshot by this machine image.
     *
     * Generated from protobuf field <code>optional int64 storage_bytes = 424631719;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStorageBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->storage_bytes = $var;

        return $this;
    }

    /**
     * [Output Only] An indicator whether storageBytes is in a stable state or it is being adjusted as a result of shared storage reallocation. This status can either be UPDATING, meaning the size of the snapshot is being updated, or UP_TO_DATE, meaning the size of the snapshot is up-to-date.
     * Check the StorageBytesStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string storage_bytes_status = 490739082;</code>
     * @return string
     */
    public function getStorageBytesStatus()
    {
        return isset($this->storage_bytes_status) ? $this->storage_bytes_status : '';
    }

    public function hasStorageBytesStatus()
    {
        return isset($this->storage_bytes_status);
    }

    public function clearStorageBytesStatus()
    {
        unset($this->storage_bytes_status);
    }

    /**
     * [Output Only] An indicator whether storageBytes is in a stable state or it is being adjusted as a result of shared storage reallocation. This status can either be UPDATING, meaning the size of the snapshot is being updated, or UP_TO_DATE, meaning the size of the snapshot is up-to-date.
     * Check the StorageBytesStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string storage_bytes_status = 490739082;</code>
     * @param string $var
     * @return $this
     */
    public function setStorageBytesStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->storage_bytes_status = $var;

        return $this;
    }

    /**
     * Specifies the type of the attached disk, either SCRATCH or PERSISTENT.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : '';
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Specifies the type of the attached disk, either SCRATCH or PERSISTENT.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

