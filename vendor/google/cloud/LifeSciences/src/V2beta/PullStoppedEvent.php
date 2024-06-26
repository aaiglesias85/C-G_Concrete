<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/lifesciences/v2beta/workflows.proto

namespace Google\Cloud\LifeSciences\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An event generated when the worker stops pulling an image.
 *
 * Generated from protobuf message <code>google.cloud.lifesciences.v2beta.PullStoppedEvent</code>
 */
class PullStoppedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * The URI of the image that was pulled.
     *
     * Generated from protobuf field <code>string image_uri = 1;</code>
     */
    private $image_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $image_uri
     *           The URI of the image that was pulled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Lifesciences\V2Beta\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * The URI of the image that was pulled.
     *
     * Generated from protobuf field <code>string image_uri = 1;</code>
     * @return string
     */
    public function getImageUri()
    {
        return $this->image_uri;
    }

    /**
     * The URI of the image that was pulled.
     *
     * Generated from protobuf field <code>string image_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_uri = $var;

        return $this;
    }

}

