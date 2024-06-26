<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta2/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Label annotation.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1beta2.LabelAnnotation</code>
 */
class LabelAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Detected entity.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.Entity entity = 1;</code>
     */
    private $entity = null;
    /**
     * Common categories for the detected entity.
     * E.g. when the label is `Terrier` the category is likely `dog`. And in some
     * cases there might be more than one categories e.g. `Terrier` could also be
     * a `pet`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.Entity category_entities = 2;</code>
     */
    private $category_entities;
    /**
     * All video segments where a label was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.LabelSegment segments = 3;</code>
     */
    private $segments;
    /**
     * All video frames where a label was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.LabelFrame frames = 4;</code>
     */
    private $frames;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VideoIntelligence\V1beta2\Entity $entity
     *           Detected entity.
     *     @type \Google\Cloud\VideoIntelligence\V1beta2\Entity[]|\Google\Protobuf\Internal\RepeatedField $category_entities
     *           Common categories for the detected entity.
     *           E.g. when the label is `Terrier` the category is likely `dog`. And in some
     *           cases there might be more than one categories e.g. `Terrier` could also be
     *           a `pet`.
     *     @type \Google\Cloud\VideoIntelligence\V1beta2\LabelSegment[]|\Google\Protobuf\Internal\RepeatedField $segments
     *           All video segments where a label was detected.
     *     @type \Google\Cloud\VideoIntelligence\V1beta2\LabelFrame[]|\Google\Protobuf\Internal\RepeatedField $frames
     *           All video frames where a label was detected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta2\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Detected entity.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.Entity entity = 1;</code>
     * @return \Google\Cloud\VideoIntelligence\V1beta2\Entity|null
     */
    public function getEntity()
    {
        return $this->entity;
    }

    public function hasEntity()
    {
        return isset($this->entity);
    }

    public function clearEntity()
    {
        unset($this->entity);
    }

    /**
     * Detected entity.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta2.Entity entity = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta2\Entity $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1beta2\Entity::class);
        $this->entity = $var;

        return $this;
    }

    /**
     * Common categories for the detected entity.
     * E.g. when the label is `Terrier` the category is likely `dog`. And in some
     * cases there might be more than one categories e.g. `Terrier` could also be
     * a `pet`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.Entity category_entities = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategoryEntities()
    {
        return $this->category_entities;
    }

    /**
     * Common categories for the detected entity.
     * E.g. when the label is `Terrier` the category is likely `dog`. And in some
     * cases there might be more than one categories e.g. `Terrier` could also be
     * a `pet`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.Entity category_entities = 2;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta2\Entity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategoryEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1beta2\Entity::class);
        $this->category_entities = $arr;

        return $this;
    }

    /**
     * All video segments where a label was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.LabelSegment segments = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * All video segments where a label was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.LabelSegment segments = 3;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta2\LabelSegment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1beta2\LabelSegment::class);
        $this->segments = $arr;

        return $this;
    }

    /**
     * All video frames where a label was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.LabelFrame frames = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * All video frames where a label was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta2.LabelFrame frames = 4;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta2\LabelFrame[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFrames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1beta2\LabelFrame::class);
        $this->frames = $arr;

        return $this;
    }

}

