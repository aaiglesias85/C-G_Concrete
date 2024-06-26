<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/geometry.proto

namespace Google\Cloud\AutoMl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A bounding polygon of a detected object on a plane.
 * On output both vertices and normalized_vertices are provided.
 * The polygon is formed by connecting vertices in the order they are listed.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.BoundingPoly</code>
 */
class BoundingPoly extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only . The bounding polygon normalized vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.NormalizedVertex normalized_vertices = 2;</code>
     */
    private $normalized_vertices;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1\NormalizedVertex[]|\Google\Protobuf\Internal\RepeatedField $normalized_vertices
     *           Output only . The bounding polygon normalized vertices.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Geometry::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only . The bounding polygon normalized vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.NormalizedVertex normalized_vertices = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNormalizedVertices()
    {
        return $this->normalized_vertices;
    }

    /**
     * Output only . The bounding polygon normalized vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1.NormalizedVertex normalized_vertices = 2;</code>
     * @param \Google\Cloud\AutoMl\V1\NormalizedVertex[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNormalizedVertices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1\NormalizedVertex::class);
        $this->normalized_vertices = $arr;

        return $this;
    }

}

