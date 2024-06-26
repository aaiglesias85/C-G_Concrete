<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/package.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An occurrence of a particular package installation found within a system's
 * filesystem. E.g., glibc was found in `/var/lib/dpkg/status`.
 *
 * Generated from protobuf message <code>grafeas.v1.Location</code>
 */
class Location extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The CPE URI in [CPE format](https://cpe.mitre.org/specification/)
     * denoting the package manager version distributing a package.
     *
     * Generated from protobuf field <code>string cpe_uri = 1;</code>
     */
    private $cpe_uri = '';
    /**
     * The version installed at this location.
     *
     * Generated from protobuf field <code>.grafeas.v1.Version version = 2;</code>
     */
    private $version = null;
    /**
     * The path from which we gathered that this package/version is installed.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     */
    private $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cpe_uri
     *           Required. The CPE URI in [CPE format](https://cpe.mitre.org/specification/)
     *           denoting the package manager version distributing a package.
     *     @type \Grafeas\V1\Version $version
     *           The version installed at this location.
     *     @type string $path
     *           The path from which we gathered that this package/version is installed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Package::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The CPE URI in [CPE format](https://cpe.mitre.org/specification/)
     * denoting the package manager version distributing a package.
     *
     * Generated from protobuf field <code>string cpe_uri = 1;</code>
     * @return string
     */
    public function getCpeUri()
    {
        return $this->cpe_uri;
    }

    /**
     * Required. The CPE URI in [CPE format](https://cpe.mitre.org/specification/)
     * denoting the package manager version distributing a package.
     *
     * Generated from protobuf field <code>string cpe_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCpeUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpe_uri = $var;

        return $this;
    }

    /**
     * The version installed at this location.
     *
     * Generated from protobuf field <code>.grafeas.v1.Version version = 2;</code>
     * @return \Grafeas\V1\Version|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * The version installed at this location.
     *
     * Generated from protobuf field <code>.grafeas.v1.Version version = 2;</code>
     * @param \Grafeas\V1\Version $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\Version::class);
        $this->version = $var;

        return $this;
    }

    /**
     * The path from which we gathered that this package/version is installed.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The path from which we gathered that this package/version is installed.
     *
     * Generated from protobuf field <code>string path = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}

