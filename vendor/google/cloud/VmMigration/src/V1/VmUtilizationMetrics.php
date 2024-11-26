<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Utilization metrics values for a single VM.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.VmUtilizationMetrics</code>
 */
class VmUtilizationMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Max CPU usage, percent.
     *
     * Generated from protobuf field <code>int32 cpu_max_percent = 9;</code>
     */
    private $cpu_max_percent = 0;
    /**
     * Average CPU usage, percent.
     *
     * Generated from protobuf field <code>int32 cpu_average_percent = 10;</code>
     */
    private $cpu_average_percent = 0;
    /**
     * Max memory usage, percent.
     *
     * Generated from protobuf field <code>int32 memory_max_percent = 11;</code>
     */
    private $memory_max_percent = 0;
    /**
     * Average memory usage, percent.
     *
     * Generated from protobuf field <code>int32 memory_average_percent = 12;</code>
     */
    private $memory_average_percent = 0;
    /**
     * Max disk IO rate, in kilobytes per second.
     *
     * Generated from protobuf field <code>int64 disk_io_rate_max_kbps = 13;</code>
     */
    private $disk_io_rate_max_kbps = 0;
    /**
     * Average disk IO rate, in kilobytes per second.
     *
     * Generated from protobuf field <code>int64 disk_io_rate_average_kbps = 14;</code>
     */
    private $disk_io_rate_average_kbps = 0;
    /**
     * Max network throughput (combined transmit-rates and receive-rates), in
     * kilobytes per second.
     *
     * Generated from protobuf field <code>int64 network_throughput_max_kbps = 15;</code>
     */
    private $network_throughput_max_kbps = 0;
    /**
     * Average network throughput (combined transmit-rates and receive-rates), in
     * kilobytes per second.
     *
     * Generated from protobuf field <code>int64 network_throughput_average_kbps = 16;</code>
     */
    private $network_throughput_average_kbps = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cpu_max_percent
     *           Max CPU usage, percent.
     *     @type int $cpu_average_percent
     *           Average CPU usage, percent.
     *     @type int $memory_max_percent
     *           Max memory usage, percent.
     *     @type int $memory_average_percent
     *           Average memory usage, percent.
     *     @type int|string $disk_io_rate_max_kbps
     *           Max disk IO rate, in kilobytes per second.
     *     @type int|string $disk_io_rate_average_kbps
     *           Average disk IO rate, in kilobytes per second.
     *     @type int|string $network_throughput_max_kbps
     *           Max network throughput (combined transmit-rates and receive-rates), in
     *           kilobytes per second.
     *     @type int|string $network_throughput_average_kbps
     *           Average network throughput (combined transmit-rates and receive-rates), in
     *           kilobytes per second.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Max CPU usage, percent.
     *
     * Generated from protobuf field <code>int32 cpu_max_percent = 9;</code>
     * @return int
     */
    public function getCpuMaxPercent()
    {
        return $this->cpu_max_percent;
    }

    /**
     * Max CPU usage, percent.
     *
     * Generated from protobuf field <code>int32 cpu_max_percent = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuMaxPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->cpu_max_percent = $var;

        return $this;
    }

    /**
     * Average CPU usage, percent.
     *
     * Generated from protobuf field <code>int32 cpu_average_percent = 10;</code>
     * @return int
     */
    public function getCpuAveragePercent()
    {
        return $this->cpu_average_percent;
    }

    /**
     * Average CPU usage, percent.
     *
     * Generated from protobuf field <code>int32 cpu_average_percent = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCpuAveragePercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->cpu_average_percent = $var;

        return $this;
    }

    /**
     * Max memory usage, percent.
     *
     * Generated from protobuf field <code>int32 memory_max_percent = 11;</code>
     * @return int
     */
    public function getMemoryMaxPercent()
    {
        return $this->memory_max_percent;
    }

    /**
     * Max memory usage, percent.
     *
     * Generated from protobuf field <code>int32 memory_max_percent = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMemoryMaxPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->memory_max_percent = $var;

        return $this;
    }

    /**
     * Average memory usage, percent.
     *
     * Generated from protobuf field <code>int32 memory_average_percent = 12;</code>
     * @return int
     */
    public function getMemoryAveragePercent()
    {
        return $this->memory_average_percent;
    }

    /**
     * Average memory usage, percent.
     *
     * Generated from protobuf field <code>int32 memory_average_percent = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMemoryAveragePercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->memory_average_percent = $var;

        return $this;
    }

    /**
     * Max disk IO rate, in kilobytes per second.
     *
     * Generated from protobuf field <code>int64 disk_io_rate_max_kbps = 13;</code>
     * @return int|string
     */
    public function getDiskIoRateMaxKbps()
    {
        return $this->disk_io_rate_max_kbps;
    }

    /**
     * Max disk IO rate, in kilobytes per second.
     *
     * Generated from protobuf field <code>int64 disk_io_rate_max_kbps = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDiskIoRateMaxKbps($var)
    {
        GPBUtil::checkInt64($var);
        $this->disk_io_rate_max_kbps = $var;

        return $this;
    }

    /**
     * Average disk IO rate, in kilobytes per second.
     *
     * Generated from protobuf field <code>int64 disk_io_rate_average_kbps = 14;</code>
     * @return int|string
     */
    public function getDiskIoRateAverageKbps()
    {
        return $this->disk_io_rate_average_kbps;
    }

    /**
     * Average disk IO rate, in kilobytes per second.
     *
     * Generated from protobuf field <code>int64 disk_io_rate_average_kbps = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDiskIoRateAverageKbps($var)
    {
        GPBUtil::checkInt64($var);
        $this->disk_io_rate_average_kbps = $var;

        return $this;
    }

    /**
     * Max network throughput (combined transmit-rates and receive-rates), in
     * kilobytes per second.
     *
     * Generated from protobuf field <code>int64 network_throughput_max_kbps = 15;</code>
     * @return int|string
     */
    public function getNetworkThroughputMaxKbps()
    {
        return $this->network_throughput_max_kbps;
    }

    /**
     * Max network throughput (combined transmit-rates and receive-rates), in
     * kilobytes per second.
     *
     * Generated from protobuf field <code>int64 network_throughput_max_kbps = 15;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNetworkThroughputMaxKbps($var)
    {
        GPBUtil::checkInt64($var);
        $this->network_throughput_max_kbps = $var;

        return $this;
    }

    /**
     * Average network throughput (combined transmit-rates and receive-rates), in
     * kilobytes per second.
     *
     * Generated from protobuf field <code>int64 network_throughput_average_kbps = 16;</code>
     * @return int|string
     */
    public function getNetworkThroughputAverageKbps()
    {
        return $this->network_throughput_average_kbps;
    }

    /**
     * Average network throughput (combined transmit-rates and receive-rates), in
     * kilobytes per second.
     *
     * Generated from protobuf field <code>int64 network_throughput_average_kbps = 16;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNetworkThroughputAverageKbps($var)
    {
        GPBUtil::checkInt64($var);
        $this->network_throughput_average_kbps = $var;

        return $this;
    }

}

