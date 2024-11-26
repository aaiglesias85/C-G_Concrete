<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/baremetalsolution.proto

namespace Google\Cloud\BaremetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Snapshot registered for a given storage volume.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.VolumeSnapshot</code>
 */
class VolumeSnapshot extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the storage volume snapshot.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * The description of the storage volume snapshot.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * The size of the storage volume snapshot, in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 3;</code>
     */
    private $size_bytes = 0;
    /**
     * Optional. The creation time of the storage volume snapshot.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $create_time = null;
    /**
     * The storage volume this snapshot belongs to.
     *
     * Generated from protobuf field <code>string storage_volume = 5 [(.google.api.resource_reference) = {</code>
     */
    private $storage_volume = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of the storage volume snapshot.
     *     @type string $description
     *           The description of the storage volume snapshot.
     *     @type int|string $size_bytes
     *           The size of the storage volume snapshot, in bytes.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Optional. The creation time of the storage volume snapshot.
     *     @type string $storage_volume
     *           The storage volume this snapshot belongs to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Baremetalsolution::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the storage volume snapshot.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of the storage volume snapshot.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The description of the storage volume snapshot.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the storage volume snapshot.
     *
     * Generated from protobuf field <code>string description = 2;</code>
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
     * The size of the storage volume snapshot, in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 3;</code>
     * @return int|string
     */
    public function getSizeBytes()
    {
        return $this->size_bytes;
    }

    /**
     * The size of the storage volume snapshot, in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->size_bytes = $var;

        return $this;
    }

    /**
     * Optional. The creation time of the storage volume snapshot.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Optional. The creation time of the storage volume snapshot.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The storage volume this snapshot belongs to.
     *
     * Generated from protobuf field <code>string storage_volume = 5 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getStorageVolume()
    {
        return $this->storage_volume;
    }

    /**
     * The storage volume this snapshot belongs to.
     *
     * Generated from protobuf field <code>string storage_volume = 5 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setStorageVolume($var)
    {
        GPBUtil::checkString($var, True);
        $this->storage_volume = $var;

        return $this;
    }

}

