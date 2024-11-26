<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/tag.proto

namespace Google\Cloud\ArtifactRegistry\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to create or update a tag.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1beta2.UpdateTagRequest</code>
 */
class UpdateTagRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The tag that replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.Tag tag = 1;</code>
     */
    private $tag = null;
    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ArtifactRegistry\V1beta2\Tag $tag
     *           The tag that replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applies to the resource. For the `FieldMask` definition,
     *           see
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\Tag::initOnce();
        parent::__construct($data);
    }

    /**
     * The tag that replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.Tag tag = 1;</code>
     * @return \Google\Cloud\ArtifactRegistry\V1beta2\Tag|null
     */
    public function getTag()
    {
        return $this->tag;
    }

    public function hasTag()
    {
        return isset($this->tag);
    }

    public function clearTag()
    {
        unset($this->tag);
    }

    /**
     * The tag that replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.Tag tag = 1;</code>
     * @param \Google\Cloud\ArtifactRegistry\V1beta2\Tag $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1beta2\Tag::class);
        $this->tag = $var;

        return $this;
    }

    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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

