<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v1/cloud_tpu.proto

namespace Google\Cloud\Tpu\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A network endpoint over which a TPU worker can be reached.
 *
 * Generated from protobuf message <code>google.cloud.tpu.v1.NetworkEndpoint</code>
 */
class NetworkEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The IP address of this network endpoint.
     *
     * Generated from protobuf field <code>string ip_address = 1;</code>
     */
    private $ip_address = '';
    /**
     * The port of this network endpoint.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     */
    private $port = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ip_address
     *           The IP address of this network endpoint.
     *     @type int $port
     *           The port of this network endpoint.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tpu\V1\CloudTpu::initOnce();
        parent::__construct($data);
    }

    /**
     * The IP address of this network endpoint.
     *
     * Generated from protobuf field <code>string ip_address = 1;</code>
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * The IP address of this network endpoint.
     *
     * Generated from protobuf field <code>string ip_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * The port of this network endpoint.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * The port of this network endpoint.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

}

