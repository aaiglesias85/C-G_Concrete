<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The share setting for reservations and sole tenancy node groups.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ShareSettings</code>
 */
class ShareSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * A map of project id and project config. This is only valid when share_type's value is SPECIFIC_PROJECTS.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.ShareSettingsProjectConfig> project_map = 134212406;</code>
     */
    private $project_map;
    /**
     * Type of sharing for this shared-reservation
     * Check the ShareType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string share_type = 359533466;</code>
     */
    private $share_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $project_map
     *           A map of project id and project config. This is only valid when share_type's value is SPECIFIC_PROJECTS.
     *     @type string $share_type
     *           Type of sharing for this shared-reservation
     *           Check the ShareType enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A map of project id and project config. This is only valid when share_type's value is SPECIFIC_PROJECTS.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.ShareSettingsProjectConfig> project_map = 134212406;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getProjectMap()
    {
        return $this->project_map;
    }

    /**
     * A map of project id and project config. This is only valid when share_type's value is SPECIFIC_PROJECTS.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.ShareSettingsProjectConfig> project_map = 134212406;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setProjectMap($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ShareSettingsProjectConfig::class);
        $this->project_map = $arr;

        return $this;
    }

    /**
     * Type of sharing for this shared-reservation
     * Check the ShareType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string share_type = 359533466;</code>
     * @return string
     */
    public function getShareType()
    {
        return isset($this->share_type) ? $this->share_type : '';
    }

    public function hasShareType()
    {
        return isset($this->share_type);
    }

    public function clearShareType()
    {
        unset($this->share_type);
    }

    /**
     * Type of sharing for this shared-reservation
     * Check the ShareType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string share_type = 359533466;</code>
     * @param string $var
     * @return $this
     */
    public function setShareType($var)
    {
        GPBUtil::checkString($var, True);
        $this->share_type = $var;

        return $this;
    }

}

