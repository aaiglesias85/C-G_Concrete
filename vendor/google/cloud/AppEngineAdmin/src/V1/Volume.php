<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Volumes mounted within the app container.
 * Only applicable in the App Engine flexible environment.
 *
 * Generated from protobuf message <code>google.appengine.v1.Volume</code>
 */
class Volume extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique name for the volume.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Underlying volume type, e.g. 'tmpfs'.
     *
     * Generated from protobuf field <code>string volume_type = 2;</code>
     */
    private $volume_type = '';
    /**
     * Volume size in gigabytes.
     *
     * Generated from protobuf field <code>double size_gb = 3;</code>
     */
    private $size_gb = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Unique name for the volume.
     *     @type string $volume_type
     *           Underlying volume type, e.g. 'tmpfs'.
     *     @type float $size_gb
     *           Volume size in gigabytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique name for the volume.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Unique name for the volume.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Underlying volume type, e.g. 'tmpfs'.
     *
     * Generated from protobuf field <code>string volume_type = 2;</code>
     * @return string
     */
    public function getVolumeType()
    {
        return $this->volume_type;
    }

    /**
     * Underlying volume type, e.g. 'tmpfs'.
     *
     * Generated from protobuf field <code>string volume_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVolumeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->volume_type = $var;

        return $this;
    }

    /**
     * Volume size in gigabytes.
     *
     * Generated from protobuf field <code>double size_gb = 3;</code>
     * @return float
     */
    public function getSizeGb()
    {
        return $this->size_gb;
    }

    /**
     * Volume size in gigabytes.
     *
     * Generated from protobuf field <code>double size_gb = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setSizeGb($var)
    {
        GPBUtil::checkDouble($var);
        $this->size_gb = $var;

        return $this;
    }

}

