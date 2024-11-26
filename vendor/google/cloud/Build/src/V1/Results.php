<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Artifacts created by the build pipeline.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.Results</code>
 */
class Results extends \Google\Protobuf\Internal\Message
{
    /**
     * Container images that were built as a part of the build.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.BuiltImage images = 2;</code>
     */
    private $images;
    /**
     * List of build step digests, in the order corresponding to build step
     * indices.
     *
     * Generated from protobuf field <code>repeated string build_step_images = 3;</code>
     */
    private $build_step_images;
    /**
     * Path to the artifact manifest. Only populated when artifacts are uploaded.
     *
     * Generated from protobuf field <code>string artifact_manifest = 4;</code>
     */
    private $artifact_manifest = '';
    /**
     * Number of artifacts uploaded. Only populated when artifacts are uploaded.
     *
     * Generated from protobuf field <code>int64 num_artifacts = 5;</code>
     */
    private $num_artifacts = 0;
    /**
     * List of build step outputs, produced by builder images, in the order
     * corresponding to build step indices.
     * [Cloud Builders](https://cloud.google.com/cloud-build/docs/cloud-builders)
     * can produce this output by writing to `$BUILDER_OUTPUT/output`.
     * Only the first 4KB of data is stored.
     *
     * Generated from protobuf field <code>repeated bytes build_step_outputs = 6;</code>
     */
    private $build_step_outputs;
    /**
     * Time to push all non-container artifacts.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan artifact_timing = 7;</code>
     */
    private $artifact_timing = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Build\V1\BuiltImage[]|\Google\Protobuf\Internal\RepeatedField $images
     *           Container images that were built as a part of the build.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $build_step_images
     *           List of build step digests, in the order corresponding to build step
     *           indices.
     *     @type string $artifact_manifest
     *           Path to the artifact manifest. Only populated when artifacts are uploaded.
     *     @type int|string $num_artifacts
     *           Number of artifacts uploaded. Only populated when artifacts are uploaded.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $build_step_outputs
     *           List of build step outputs, produced by builder images, in the order
     *           corresponding to build step indices.
     *           [Cloud Builders](https://cloud.google.com/cloud-build/docs/cloud-builders)
     *           can produce this output by writing to `$BUILDER_OUTPUT/output`.
     *           Only the first 4KB of data is stored.
     *     @type \Google\Cloud\Build\V1\TimeSpan $artifact_timing
     *           Time to push all non-container artifacts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Container images that were built as a part of the build.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.BuiltImage images = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Container images that were built as a part of the build.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.BuiltImage images = 2;</code>
     * @param \Google\Cloud\Build\V1\BuiltImage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Build\V1\BuiltImage::class);
        $this->images = $arr;

        return $this;
    }

    /**
     * List of build step digests, in the order corresponding to build step
     * indices.
     *
     * Generated from protobuf field <code>repeated string build_step_images = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuildStepImages()
    {
        return $this->build_step_images;
    }

    /**
     * List of build step digests, in the order corresponding to build step
     * indices.
     *
     * Generated from protobuf field <code>repeated string build_step_images = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuildStepImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->build_step_images = $arr;

        return $this;
    }

    /**
     * Path to the artifact manifest. Only populated when artifacts are uploaded.
     *
     * Generated from protobuf field <code>string artifact_manifest = 4;</code>
     * @return string
     */
    public function getArtifactManifest()
    {
        return $this->artifact_manifest;
    }

    /**
     * Path to the artifact manifest. Only populated when artifacts are uploaded.
     *
     * Generated from protobuf field <code>string artifact_manifest = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setArtifactManifest($var)
    {
        GPBUtil::checkString($var, True);
        $this->artifact_manifest = $var;

        return $this;
    }

    /**
     * Number of artifacts uploaded. Only populated when artifacts are uploaded.
     *
     * Generated from protobuf field <code>int64 num_artifacts = 5;</code>
     * @return int|string
     */
    public function getNumArtifacts()
    {
        return $this->num_artifacts;
    }

    /**
     * Number of artifacts uploaded. Only populated when artifacts are uploaded.
     *
     * Generated from protobuf field <code>int64 num_artifacts = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumArtifacts($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_artifacts = $var;

        return $this;
    }

    /**
     * List of build step outputs, produced by builder images, in the order
     * corresponding to build step indices.
     * [Cloud Builders](https://cloud.google.com/cloud-build/docs/cloud-builders)
     * can produce this output by writing to `$BUILDER_OUTPUT/output`.
     * Only the first 4KB of data is stored.
     *
     * Generated from protobuf field <code>repeated bytes build_step_outputs = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuildStepOutputs()
    {
        return $this->build_step_outputs;
    }

    /**
     * List of build step outputs, produced by builder images, in the order
     * corresponding to build step indices.
     * [Cloud Builders](https://cloud.google.com/cloud-build/docs/cloud-builders)
     * can produce this output by writing to `$BUILDER_OUTPUT/output`.
     * Only the first 4KB of data is stored.
     *
     * Generated from protobuf field <code>repeated bytes build_step_outputs = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuildStepOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->build_step_outputs = $arr;

        return $this;
    }

    /**
     * Time to push all non-container artifacts.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan artifact_timing = 7;</code>
     * @return \Google\Cloud\Build\V1\TimeSpan|null
     */
    public function getArtifactTiming()
    {
        return isset($this->artifact_timing) ? $this->artifact_timing : null;
    }

    public function hasArtifactTiming()
    {
        return isset($this->artifact_timing);
    }

    public function clearArtifactTiming()
    {
        unset($this->artifact_timing);
    }

    /**
     * Time to push all non-container artifacts.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan artifact_timing = 7;</code>
     * @param \Google\Cloud\Build\V1\TimeSpan $var
     * @return $this
     */
    public function setArtifactTiming($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\TimeSpan::class);
        $this->artifact_timing = $var;

        return $this;
    }

}

