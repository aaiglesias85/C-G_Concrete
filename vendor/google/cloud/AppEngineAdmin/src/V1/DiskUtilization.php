<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Target scaling by disk usage.
 * Only applicable in the App Engine flexible environment.
 *
 * Generated from protobuf message <code>google.appengine.v1.DiskUtilization</code>
 */
class DiskUtilization extends \Google\Protobuf\Internal\Message
{
    /**
     * Target bytes written per second.
     *
     * Generated from protobuf field <code>int32 target_write_bytes_per_second = 14;</code>
     */
    private $target_write_bytes_per_second = 0;
    /**
     * Target ops written per second.
     *
     * Generated from protobuf field <code>int32 target_write_ops_per_second = 15;</code>
     */
    private $target_write_ops_per_second = 0;
    /**
     * Target bytes read per second.
     *
     * Generated from protobuf field <code>int32 target_read_bytes_per_second = 16;</code>
     */
    private $target_read_bytes_per_second = 0;
    /**
     * Target ops read per seconds.
     *
     * Generated from protobuf field <code>int32 target_read_ops_per_second = 17;</code>
     */
    private $target_read_ops_per_second = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $target_write_bytes_per_second
     *           Target bytes written per second.
     *     @type int $target_write_ops_per_second
     *           Target ops written per second.
     *     @type int $target_read_bytes_per_second
     *           Target bytes read per second.
     *     @type int $target_read_ops_per_second
     *           Target ops read per seconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Target bytes written per second.
     *
     * Generated from protobuf field <code>int32 target_write_bytes_per_second = 14;</code>
     * @return int
     */
    public function getTargetWriteBytesPerSecond()
    {
        return $this->target_write_bytes_per_second;
    }

    /**
     * Target bytes written per second.
     *
     * Generated from protobuf field <code>int32 target_write_bytes_per_second = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetWriteBytesPerSecond($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_write_bytes_per_second = $var;

        return $this;
    }

    /**
     * Target ops written per second.
     *
     * Generated from protobuf field <code>int32 target_write_ops_per_second = 15;</code>
     * @return int
     */
    public function getTargetWriteOpsPerSecond()
    {
        return $this->target_write_ops_per_second;
    }

    /**
     * Target ops written per second.
     *
     * Generated from protobuf field <code>int32 target_write_ops_per_second = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetWriteOpsPerSecond($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_write_ops_per_second = $var;

        return $this;
    }

    /**
     * Target bytes read per second.
     *
     * Generated from protobuf field <code>int32 target_read_bytes_per_second = 16;</code>
     * @return int
     */
    public function getTargetReadBytesPerSecond()
    {
        return $this->target_read_bytes_per_second;
    }

    /**
     * Target bytes read per second.
     *
     * Generated from protobuf field <code>int32 target_read_bytes_per_second = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetReadBytesPerSecond($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_read_bytes_per_second = $var;

        return $this;
    }

    /**
     * Target ops read per seconds.
     *
     * Generated from protobuf field <code>int32 target_read_ops_per_second = 17;</code>
     * @return int
     */
    public function getTargetReadOpsPerSecond()
    {
        return $this->target_read_ops_per_second;
    }

    /**
     * Target ops read per seconds.
     *
     * Generated from protobuf field <code>int32 target_read_ops_per_second = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetReadOpsPerSecond($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_read_ops_per_second = $var;

        return $this;
    }

}

