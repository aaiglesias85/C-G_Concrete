<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/yum_artifact.proto

namespace Google\Cloud\ArtifactRegistry\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A detailed representation of a Yum artifact.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1beta2.YumArtifact</code>
 */
class YumArtifact extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The Artifact Registry resource name of the artifact.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. The yum package name of the artifact.
     *
     * Generated from protobuf field <code>string package_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $package_name = '';
    /**
     * Output only. An artifact is a binary or source package.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.YumArtifact.PackageType package_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $package_type = 0;
    /**
     * Output only. Operating system architecture of the artifact.
     *
     * Generated from protobuf field <code>string architecture = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $architecture = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The Artifact Registry resource name of the artifact.
     *     @type string $package_name
     *           Output only. The yum package name of the artifact.
     *     @type int $package_type
     *           Output only. An artifact is a binary or source package.
     *     @type string $architecture
     *           Output only. Operating system architecture of the artifact.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\YumArtifact::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The Artifact Registry resource name of the artifact.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The Artifact Registry resource name of the artifact.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The yum package name of the artifact.
     *
     * Generated from protobuf field <code>string package_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPackageName()
    {
        return $this->package_name;
    }

    /**
     * Output only. The yum package name of the artifact.
     *
     * Generated from protobuf field <code>string package_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPackageName($var)
    {
        GPBUtil::checkString($var, True);
        $this->package_name = $var;

        return $this;
    }

    /**
     * Output only. An artifact is a binary or source package.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.YumArtifact.PackageType package_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPackageType()
    {
        return $this->package_type;
    }

    /**
     * Output only. An artifact is a binary or source package.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.YumArtifact.PackageType package_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPackageType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ArtifactRegistry\V1beta2\YumArtifact\PackageType::class);
        $this->package_type = $var;

        return $this;
    }

    /**
     * Output only. Operating system architecture of the artifact.
     *
     * Generated from protobuf field <code>string architecture = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getArchitecture()
    {
        return $this->architecture;
    }

    /**
     * Output only. Operating system architecture of the artifact.
     *
     * Generated from protobuf field <code>string architecture = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setArchitecture($var)
    {
        GPBUtil::checkString($var, True);
        $this->architecture = $var;

        return $this;
    }

}

