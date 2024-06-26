<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies an executable to run on a fully configured node and a
 * timeout period for executable completion.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.NodeInitializationAction</code>
 */
class NodeInitializationAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Cloud Storage URI of executable file.
     *
     * Generated from protobuf field <code>string executable_file = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $executable_file = '';
    /**
     * Optional. Amount of time executable has to complete. Default is
     * 10 minutes (see JSON representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     * Cluster creation fails with an explanatory error message (the
     * name of the executable that caused the error and the exceeded timeout
     * period) if the executable is not completed at end of the timeout period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $execution_timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $executable_file
     *           Required. Cloud Storage URI of executable file.
     *     @type \Google\Protobuf\Duration $execution_timeout
     *           Optional. Amount of time executable has to complete. Default is
     *           10 minutes (see JSON representation of
     *           [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     *           Cluster creation fails with an explanatory error message (the
     *           name of the executable that caused the error and the exceeded timeout
     *           period) if the executable is not completed at end of the timeout period.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Cloud Storage URI of executable file.
     *
     * Generated from protobuf field <code>string executable_file = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getExecutableFile()
    {
        return $this->executable_file;
    }

    /**
     * Required. Cloud Storage URI of executable file.
     *
     * Generated from protobuf field <code>string executable_file = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setExecutableFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->executable_file = $var;

        return $this;
    }

    /**
     * Optional. Amount of time executable has to complete. Default is
     * 10 minutes (see JSON representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     * Cluster creation fails with an explanatory error message (the
     * name of the executable that caused the error and the exceeded timeout
     * period) if the executable is not completed at end of the timeout period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getExecutionTimeout()
    {
        return $this->execution_timeout;
    }

    public function hasExecutionTimeout()
    {
        return isset($this->execution_timeout);
    }

    public function clearExecutionTimeout()
    {
        unset($this->execution_timeout);
    }

    /**
     * Optional. Amount of time executable has to complete. Default is
     * 10 minutes (see JSON representation of
     * [Duration](https://developers.google.com/protocol-buffers/docs/proto3#json)).
     * Cluster creation fails with an explanatory error message (the
     * name of the executable that caused the error and the exceeded timeout
     * period) if the executable is not completed at end of the timeout period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setExecutionTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->execution_timeout = $var;

        return $this;
    }

}

