<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A public key format and data.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.PublicKeyCredential</code>
 */
class PublicKeyCredential extends \Google\Protobuf\Internal\Message
{
    /**
     * The format of the key.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.PublicKeyFormat format = 1;</code>
     */
    private $format = 0;
    /**
     * The key data.
     *
     * Generated from protobuf field <code>string key = 2;</code>
     */
    private $key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $format
     *           The format of the key.
     *     @type string $key
     *           The key data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The format of the key.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.PublicKeyFormat format = 1;</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * The format of the key.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.PublicKeyFormat format = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Iot\V1\PublicKeyFormat::class);
        $this->format = $var;

        return $this;
    }

    /**
     * The key data.
     *
     * Generated from protobuf field <code>string key = 2;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * The key data.
     *
     * Generated from protobuf field <code>string key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

}

