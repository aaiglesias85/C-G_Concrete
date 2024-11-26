<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1beta2\Repository;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MavenRepositoryConfig is maven related repository details.
 * Provides additional configuration details for repositories of the maven
 * format type.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1beta2.Repository.MavenRepositoryConfig</code>
 */
class MavenRepositoryConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The repository with this flag will allow publishing
     * the same snapshot versions.
     *
     * Generated from protobuf field <code>bool allow_snapshot_overwrites = 1;</code>
     */
    private $allow_snapshot_overwrites = false;
    /**
     * Version policy defines the versions that the registry will accept.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.Repository.MavenRepositoryConfig.VersionPolicy version_policy = 2;</code>
     */
    private $version_policy = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $allow_snapshot_overwrites
     *           The repository with this flag will allow publishing
     *           the same snapshot versions.
     *     @type int $version_policy
     *           Version policy defines the versions that the registry will accept.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\Repository::initOnce();
        parent::__construct($data);
    }

    /**
     * The repository with this flag will allow publishing
     * the same snapshot versions.
     *
     * Generated from protobuf field <code>bool allow_snapshot_overwrites = 1;</code>
     * @return bool
     */
    public function getAllowSnapshotOverwrites()
    {
        return $this->allow_snapshot_overwrites;
    }

    /**
     * The repository with this flag will allow publishing
     * the same snapshot versions.
     *
     * Generated from protobuf field <code>bool allow_snapshot_overwrites = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowSnapshotOverwrites($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_snapshot_overwrites = $var;

        return $this;
    }

    /**
     * Version policy defines the versions that the registry will accept.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.Repository.MavenRepositoryConfig.VersionPolicy version_policy = 2;</code>
     * @return int
     */
    public function getVersionPolicy()
    {
        return $this->version_policy;
    }

    /**
     * Version policy defines the versions that the registry will accept.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.Repository.MavenRepositoryConfig.VersionPolicy version_policy = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setVersionPolicy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ArtifactRegistry\V1beta2\Repository\MavenRepositoryConfig\VersionPolicy::class);
        $this->version_policy = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MavenRepositoryConfig::class, \Google\Cloud\ArtifactRegistry\V1beta2\Repository_MavenRepositoryConfig::class);

