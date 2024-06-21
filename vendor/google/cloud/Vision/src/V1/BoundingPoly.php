<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/geometry.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A bounding polygon for the detected image annotation.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.BoundingPoly</code>
 */
class BoundingPoly extends \Google\Protobuf\Internal\Message
{
    /**
     * The bounding polygon vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Vertex vertices = 1;</code>
     */
    private $vertices;
    /**
     * The bounding polygon normalized vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.NormalizedVertex normalized_vertices = 2;</code>
     */
    private $normalized_vertices;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\Vertex[]|\Google\Protobuf\Internal\RepeatedField $vertices
     *           The bounding polygon vertices.
     *     @type \Google\Cloud\Vision\V1\NormalizedVertex[]|\Google\Protobuf\Internal\RepeatedField $normalized_vertices
     *           The bounding polygon normalized vertices.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\Geometry::initOnce();
        parent::__construct($data);
    }

    /**
     * The bounding polygon vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Vertex vertices = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVertices()
    {
        return $this->vertices;
    }

    /**
     * The bounding polygon vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Vertex vertices = 1;</code>
     * @param \Google\Cloud\Vision\V1\Vertex[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVertices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\Vertex::class);
        $this->vertices = $arr;

        return $this;
    }

    /**
     * The bounding polygon normalized vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.NormalizedVertex normalized_vertices = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNormalizedVertices()
    {
        return $this->normalized_vertices;
    }

    /**
     * The bounding polygon normalized vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.NormalizedVertex normalized_vertices = 2;</code>
     * @param \Google\Cloud\Vision\V1\NormalizedVertex[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNormalizedVertices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\NormalizedVertex::class);
        $this->normalized_vertices = $arr;

        return $this;
    }

}

