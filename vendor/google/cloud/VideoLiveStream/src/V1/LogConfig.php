<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/resources.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of platform logs.
 * See [Using and managing platform
 * logs](https://cloud.google.com/logging/docs/api/platform-logs#managing-logs)
 * for more information about how to view platform logs through Cloud Logging.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.LogConfig</code>
 */
class LogConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The severity level of platform logging for this resource.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.LogConfig.LogSeverity log_severity = 1;</code>
     */
    private $log_severity = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $log_severity
     *           The severity level of platform logging for this resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The severity level of platform logging for this resource.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.LogConfig.LogSeverity log_severity = 1;</code>
     * @return int
     */
    public function getLogSeverity()
    {
        return $this->log_severity;
    }

    /**
     * The severity level of platform logging for this resource.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.LogConfig.LogSeverity log_severity = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLogSeverity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\LiveStream\V1\LogConfig\LogSeverity::class);
        $this->log_severity = $var;

        return $this;
    }

}

