<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/image.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Layer holds metadata specific to a layer of a Docker image.
 *
 * Generated from protobuf message <code>grafeas.v1.Layer</code>
 */
class Layer extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The recovered Dockerfile directive used to construct this layer.
     * See https://docs.docker.com/engine/reference/builder/ for more information.
     *
     * Generated from protobuf field <code>string directive = 1;</code>
     */
    private $directive = '';
    /**
     * The recovered arguments to the Dockerfile directive.
     *
     * Generated from protobuf field <code>string arguments = 2;</code>
     */
    private $arguments = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $directive
     *           Required. The recovered Dockerfile directive used to construct this layer.
     *           See https://docs.docker.com/engine/reference/builder/ for more information.
     *     @type string $arguments
     *           The recovered arguments to the Dockerfile directive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Image::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The recovered Dockerfile directive used to construct this layer.
     * See https://docs.docker.com/engine/reference/builder/ for more information.
     *
     * Generated from protobuf field <code>string directive = 1;</code>
     * @return string
     */
    public function getDirective()
    {
        return $this->directive;
    }

    /**
     * Required. The recovered Dockerfile directive used to construct this layer.
     * See https://docs.docker.com/engine/reference/builder/ for more information.
     *
     * Generated from protobuf field <code>string directive = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDirective($var)
    {
        GPBUtil::checkString($var, True);
        $this->directive = $var;

        return $this;
    }

    /**
     * The recovered arguments to the Dockerfile directive.
     *
     * Generated from protobuf field <code>string arguments = 2;</code>
     * @return string
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * The recovered arguments to the Dockerfile directive.
     *
     * Generated from protobuf field <code>string arguments = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setArguments($var)
    {
        GPBUtil::checkString($var, True);
        $this->arguments = $var;

        return $this;
    }

}

