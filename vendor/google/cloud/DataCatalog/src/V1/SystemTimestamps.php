<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/timestamps.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Timestamps associated with this resource in a particular system.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.SystemTimestamps</code>
 */
class SystemTimestamps extends \Google\Protobuf\Internal\Message
{
    /**
     * Creation timestamp of the resource within the given system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     */
    private $create_time = null;
    /**
     * Timestamp of the last modification of the resource or its metadata within
     * a given system.
     * Note: Depending on the source system, not every modification updates this
     * timestamp.
     * For example, BigQuery timestamps every metadata modification but not data
     * or permission changes.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2;</code>
     */
    private $update_time = null;
    /**
     * Output only. Expiration timestamp of the resource within the given system.
     * Currently only applicable to BigQuery resources.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $expire_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Creation timestamp of the resource within the given system.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Timestamp of the last modification of the resource or its metadata within
     *           a given system.
     *           Note: Depending on the source system, not every modification updates this
     *           timestamp.
     *           For example, BigQuery timestamps every metadata modification but not data
     *           or permission changes.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Output only. Expiration timestamp of the resource within the given system.
     *           Currently only applicable to BigQuery resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Timestamps::initOnce();
        parent::__construct($data);
    }

    /**
     * Creation timestamp of the resource within the given system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
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
     * Creation timestamp of the resource within the given system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
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
     * Timestamp of the last modification of the resource or its metadata within
     * a given system.
     * Note: Depending on the source system, not every modification updates this
     * timestamp.
     * For example, BigQuery timestamps every metadata modification but not data
     * or permission changes.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Timestamp of the last modification of the resource or its metadata within
     * a given system.
     * Note: Depending on the source system, not every modification updates this
     * timestamp.
     * For example, BigQuery timestamps every metadata modification but not data
     * or permission changes.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. Expiration timestamp of the resource within the given system.
     * Currently only applicable to BigQuery resources.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Output only. Expiration timestamp of the resource within the given system.
     * Currently only applicable to BigQuery resources.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

}

