<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/shell/v1/cloudshell.proto

namespace Google\Cloud\Shell\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message included in the metadata field of operations returned from
 * [StartEnvironment][google.cloud.shell.v1.CloudShellService.StartEnvironment].
 *
 * Generated from protobuf message <code>google.cloud.shell.v1.StartEnvironmentMetadata</code>
 */
class StartEnvironmentMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Current state of the environment being started.
     *
     * Generated from protobuf field <code>.google.cloud.shell.v1.StartEnvironmentMetadata.State state = 1;</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Current state of the environment being started.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Shell\V1\Cloudshell::initOnce();
        parent::__construct($data);
    }

    /**
     * Current state of the environment being started.
     *
     * Generated from protobuf field <code>.google.cloud.shell.v1.StartEnvironmentMetadata.State state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Current state of the environment being started.
     *
     * Generated from protobuf field <code>.google.cloud.shell.v1.StartEnvironmentMetadata.State state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Shell\V1\StartEnvironmentMetadata\State::class);
        $this->state = $var;

        return $this;
    }

}

