<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/upgrade.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Upgrade Note represents a potential upgrade of a package to a given
 * version. For each package version combination (i.e. bash 4.0, bash 4.1,
 * bash 4.1.2), there will be an Upgrade Note. For Windows, windows_update field
 * represents the information related to the update.
 *
 * Generated from protobuf message <code>grafeas.v1.UpgradeNote</code>
 */
class UpgradeNote extends \Google\Protobuf\Internal\Message
{
    /**
     * Required for non-Windows OS. The package this Upgrade is for.
     *
     * Generated from protobuf field <code>string package = 1;</code>
     */
    private $package = '';
    /**
     * Required for non-Windows OS. The version of the package in machine + human
     * readable form.
     *
     * Generated from protobuf field <code>.grafeas.v1.Version version = 2;</code>
     */
    private $version = null;
    /**
     * Metadata about the upgrade for each specific operating system.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.UpgradeDistribution distributions = 3;</code>
     */
    private $distributions;
    /**
     * Required for Windows OS. Represents the metadata about the Windows update.
     *
     * Generated from protobuf field <code>.grafeas.v1.WindowsUpdate windows_update = 4;</code>
     */
    private $windows_update = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $package
     *           Required for non-Windows OS. The package this Upgrade is for.
     *     @type \Grafeas\V1\Version $version
     *           Required for non-Windows OS. The version of the package in machine + human
     *           readable form.
     *     @type \Grafeas\V1\UpgradeDistribution[]|\Google\Protobuf\Internal\RepeatedField $distributions
     *           Metadata about the upgrade for each specific operating system.
     *     @type \Grafeas\V1\WindowsUpdate $windows_update
     *           Required for Windows OS. Represents the metadata about the Windows update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Upgrade::initOnce();
        parent::__construct($data);
    }

    /**
     * Required for non-Windows OS. The package this Upgrade is for.
     *
     * Generated from protobuf field <code>string package = 1;</code>
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Required for non-Windows OS. The package this Upgrade is for.
     *
     * Generated from protobuf field <code>string package = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPackage($var)
    {
        GPBUtil::checkString($var, True);
        $this->package = $var;

        return $this;
    }

    /**
     * Required for non-Windows OS. The version of the package in machine + human
     * readable form.
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
     * Required for non-Windows OS. The version of the package in machine + human
     * readable form.
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
     * Metadata about the upgrade for each specific operating system.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.UpgradeDistribution distributions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDistributions()
    {
        return $this->distributions;
    }

    /**
     * Metadata about the upgrade for each specific operating system.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.UpgradeDistribution distributions = 3;</code>
     * @param \Grafeas\V1\UpgradeDistribution[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDistributions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grafeas\V1\UpgradeDistribution::class);
        $this->distributions = $arr;

        return $this;
    }

    /**
     * Required for Windows OS. Represents the metadata about the Windows update.
     *
     * Generated from protobuf field <code>.grafeas.v1.WindowsUpdate windows_update = 4;</code>
     * @return \Grafeas\V1\WindowsUpdate|null
     */
    public function getWindowsUpdate()
    {
        return $this->windows_update;
    }

    public function hasWindowsUpdate()
    {
        return isset($this->windows_update);
    }

    public function clearWindowsUpdate()
    {
        unset($this->windows_update);
    }

    /**
     * Required for Windows OS. Represents the metadata about the Windows update.
     *
     * Generated from protobuf field <code>.grafeas.v1.WindowsUpdate windows_update = 4;</code>
     * @param \Grafeas\V1\WindowsUpdate $var
     * @return $this
     */
    public function setWindowsUpdate($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\WindowsUpdate::class);
        $this->windows_update = $var;

        return $this;
    }

}

