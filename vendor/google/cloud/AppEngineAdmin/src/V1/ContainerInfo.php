<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/deploy.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Docker image that is used to create a container and start a VM instance for
 * the version that you deploy. Only applicable for instances running in the App
 * Engine flexible environment.
 *
 * Generated from protobuf message <code>google.appengine.v1.ContainerInfo</code>
 */
class ContainerInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * URI to the hosted container image in Google Container Registry. The URI
     * must be fully qualified and include a tag or digest.
     * Examples: "gcr.io/my-project/image:tag" or "gcr.io/my-project/image&#64;digest"
     *
     * Generated from protobuf field <code>string image = 1;</code>
     */
    private $image = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $image
     *           URI to the hosted container image in Google Container Registry. The URI
     *           must be fully qualified and include a tag or digest.
     *           Examples: "gcr.io/my-project/image:tag" or "gcr.io/my-project/image&#64;digest"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Deploy::initOnce();
        parent::__construct($data);
    }

    /**
     * URI to the hosted container image in Google Container Registry. The URI
     * must be fully qualified and include a tag or digest.
     * Examples: "gcr.io/my-project/image:tag" or "gcr.io/my-project/image&#64;digest"
     *
     * Generated from protobuf field <code>string image = 1;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * URI to the hosted container image in Google Container Registry. The URI
     * must be fully qualified and include a tag or digest.
     * Examples: "gcr.io/my-project/image:tag" or "gcr.io/my-project/image&#64;digest"
     *
     * Generated from protobuf field <code>string image = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

}

