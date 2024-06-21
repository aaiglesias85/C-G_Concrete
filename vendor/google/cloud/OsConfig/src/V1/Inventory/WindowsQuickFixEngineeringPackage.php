<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/inventory.proto

namespace Google\Cloud\OsConfig\V1\Inventory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information related to a Quick Fix Engineering package.
 * Fields are taken from Windows QuickFixEngineering Interface and match
 * the source names:
 * https://docs.microsoft.com/en-us/windows/win32/cimwin32prov/win32-quickfixengineering
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.Inventory.WindowsQuickFixEngineeringPackage</code>
 */
class WindowsQuickFixEngineeringPackage extends \Google\Protobuf\Internal\Message
{
    /**
     * A short textual description of the QFE update.
     *
     * Generated from protobuf field <code>string caption = 1;</code>
     */
    private $caption = '';
    /**
     * A textual description of the QFE update.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Unique identifier associated with a particular QFE update.
     *
     * Generated from protobuf field <code>string hot_fix_id = 3;</code>
     */
    private $hot_fix_id = '';
    /**
     * Date that the QFE update was installed.  Mapped from installed_on field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp install_time = 5;</code>
     */
    private $install_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $caption
     *           A short textual description of the QFE update.
     *     @type string $description
     *           A textual description of the QFE update.
     *     @type string $hot_fix_id
     *           Unique identifier associated with a particular QFE update.
     *     @type \Google\Protobuf\Timestamp $install_time
     *           Date that the QFE update was installed.  Mapped from installed_on field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\Inventory::initOnce();
        parent::__construct($data);
    }

    /**
     * A short textual description of the QFE update.
     *
     * Generated from protobuf field <code>string caption = 1;</code>
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * A short textual description of the QFE update.
     *
     * Generated from protobuf field <code>string caption = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCaption($var)
    {
        GPBUtil::checkString($var, True);
        $this->caption = $var;

        return $this;
    }

    /**
     * A textual description of the QFE update.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A textual description of the QFE update.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Unique identifier associated with a particular QFE update.
     *
     * Generated from protobuf field <code>string hot_fix_id = 3;</code>
     * @return string
     */
    public function getHotFixId()
    {
        return $this->hot_fix_id;
    }

    /**
     * Unique identifier associated with a particular QFE update.
     *
     * Generated from protobuf field <code>string hot_fix_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHotFixId($var)
    {
        GPBUtil::checkString($var, True);
        $this->hot_fix_id = $var;

        return $this;
    }

    /**
     * Date that the QFE update was installed.  Mapped from installed_on field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp install_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getInstallTime()
    {
        return $this->install_time;
    }

    public function hasInstallTime()
    {
        return isset($this->install_time);
    }

    public function clearInstallTime()
    {
        unset($this->install_time);
    }

    /**
     * Date that the QFE update was installed.  Mapped from installed_on field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp install_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setInstallTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->install_time = $var;

        return $this;
    }

}


