<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Windows patching is performed using the Windows Update Agent.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.WindowsUpdateSettings</code>
 */
class WindowsUpdateSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Only apply updates of these windows update classifications. If empty, all
     * updates are applied.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.WindowsUpdateSettings.Classification classifications = 1;</code>
     */
    private $classifications;
    /**
     * List of KBs to exclude from update.
     *
     * Generated from protobuf field <code>repeated string excludes = 2;</code>
     */
    private $excludes;
    /**
     * An exclusive list of kbs to be updated. These are the only patches
     * that will be updated. This field must not be used with other
     * patch configurations.
     *
     * Generated from protobuf field <code>repeated string exclusive_patches = 3;</code>
     */
    private $exclusive_patches;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $classifications
     *           Only apply updates of these windows update classifications. If empty, all
     *           updates are applied.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $excludes
     *           List of KBs to exclude from update.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $exclusive_patches
     *           An exclusive list of kbs to be updated. These are the only patches
     *           that will be updated. This field must not be used with other
     *           patch configurations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Only apply updates of these windows update classifications. If empty, all
     * updates are applied.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.WindowsUpdateSettings.Classification classifications = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClassifications()
    {
        return $this->classifications;
    }

    /**
     * Only apply updates of these windows update classifications. If empty, all
     * updates are applied.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.WindowsUpdateSettings.Classification classifications = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClassifications($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\OsConfig\V1\WindowsUpdateSettings\Classification::class);
        $this->classifications = $arr;

        return $this;
    }

    /**
     * List of KBs to exclude from update.
     *
     * Generated from protobuf field <code>repeated string excludes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludes()
    {
        return $this->excludes;
    }

    /**
     * List of KBs to exclude from update.
     *
     * Generated from protobuf field <code>repeated string excludes = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->excludes = $arr;

        return $this;
    }

    /**
     * An exclusive list of kbs to be updated. These are the only patches
     * that will be updated. This field must not be used with other
     * patch configurations.
     *
     * Generated from protobuf field <code>repeated string exclusive_patches = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExclusivePatches()
    {
        return $this->exclusive_patches;
    }

    /**
     * An exclusive list of kbs to be updated. These are the only patches
     * that will be updated. This field must not be used with other
     * patch configurations.
     *
     * Generated from protobuf field <code>repeated string exclusive_patches = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExclusivePatches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->exclusive_patches = $arr;

        return $this;
    }

}

