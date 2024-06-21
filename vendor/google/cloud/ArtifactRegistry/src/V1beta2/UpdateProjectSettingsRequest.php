<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/settings.proto

namespace Google\Cloud\ArtifactRegistry\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Sets the settings of the project.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1beta2.UpdateProjectSettingsRequest</code>
 */
class UpdateProjectSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The project settings.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.ProjectSettings project_settings = 2;</code>
     */
    private $project_settings = null;
    /**
     * Field mask to support partial updates.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ArtifactRegistry\V1beta2\ProjectSettings $project_settings
     *           The project settings.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Field mask to support partial updates.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\Settings::initOnce();
        parent::__construct($data);
    }

    /**
     * The project settings.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.ProjectSettings project_settings = 2;</code>
     * @return \Google\Cloud\ArtifactRegistry\V1beta2\ProjectSettings|null
     */
    public function getProjectSettings()
    {
        return $this->project_settings;
    }

    public function hasProjectSettings()
    {
        return isset($this->project_settings);
    }

    public function clearProjectSettings()
    {
        unset($this->project_settings);
    }

    /**
     * The project settings.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.ProjectSettings project_settings = 2;</code>
     * @param \Google\Cloud\ArtifactRegistry\V1beta2\ProjectSettings $var
     * @return $this
     */
    public function setProjectSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1beta2\ProjectSettings::class);
        $this->project_settings = $var;

        return $this;
    }

    /**
     * Field mask to support partial updates.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Field mask to support partial updates.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

