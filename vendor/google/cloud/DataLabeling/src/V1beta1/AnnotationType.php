<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/annotation.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.datalabeling.v1beta1.AnnotationType</code>
 */
class AnnotationType
{
    /**
     * Generated from protobuf enum <code>ANNOTATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const ANNOTATION_TYPE_UNSPECIFIED = 0;
    /**
     * Classification annotations in an image. Allowed for continuous evaluation.
     *
     * Generated from protobuf enum <code>IMAGE_CLASSIFICATION_ANNOTATION = 1;</code>
     */
    const IMAGE_CLASSIFICATION_ANNOTATION = 1;
    /**
     * Bounding box annotations in an image. A form of image object detection.
     * Allowed for continuous evaluation.
     *
     * Generated from protobuf enum <code>IMAGE_BOUNDING_BOX_ANNOTATION = 2;</code>
     */
    const IMAGE_BOUNDING_BOX_ANNOTATION = 2;
    /**
     * Oriented bounding box. The box does not have to be parallel to horizontal
     * line.
     *
     * Generated from protobuf enum <code>IMAGE_ORIENTED_BOUNDING_BOX_ANNOTATION = 13;</code>
     */
    const IMAGE_ORIENTED_BOUNDING_BOX_ANNOTATION = 13;
    /**
     * Bounding poly annotations in an image.
     *
     * Generated from protobuf enum <code>IMAGE_BOUNDING_POLY_ANNOTATION = 10;</code>
     */
    const IMAGE_BOUNDING_POLY_ANNOTATION = 10;
    /**
     * Polyline annotations in an image.
     *
     * Generated from protobuf enum <code>IMAGE_POLYLINE_ANNOTATION = 11;</code>
     */
    const IMAGE_POLYLINE_ANNOTATION = 11;
    /**
     * Segmentation annotations in an image.
     *
     * Generated from protobuf enum <code>IMAGE_SEGMENTATION_ANNOTATION = 12;</code>
     */
    const IMAGE_SEGMENTATION_ANNOTATION = 12;
    /**
     * Classification annotations in video shots.
     *
     * Generated from protobuf enum <code>VIDEO_SHOTS_CLASSIFICATION_ANNOTATION = 3;</code>
     */
    const VIDEO_SHOTS_CLASSIFICATION_ANNOTATION = 3;
    /**
     * Video object tracking annotation.
     *
     * Generated from protobuf enum <code>VIDEO_OBJECT_TRACKING_ANNOTATION = 4;</code>
     */
    const VIDEO_OBJECT_TRACKING_ANNOTATION = 4;
    /**
     * Video object detection annotation.
     *
     * Generated from protobuf enum <code>VIDEO_OBJECT_DETECTION_ANNOTATION = 5;</code>
     */
    const VIDEO_OBJECT_DETECTION_ANNOTATION = 5;
    /**
     * Video event annotation.
     *
     * Generated from protobuf enum <code>VIDEO_EVENT_ANNOTATION = 6;</code>
     */
    const VIDEO_EVENT_ANNOTATION = 6;
    /**
     * Classification for text. Allowed for continuous evaluation.
     *
     * Generated from protobuf enum <code>TEXT_CLASSIFICATION_ANNOTATION = 8;</code>
     */
    const TEXT_CLASSIFICATION_ANNOTATION = 8;
    /**
     * Entity extraction for text.
     *
     * Generated from protobuf enum <code>TEXT_ENTITY_EXTRACTION_ANNOTATION = 9;</code>
     */
    const TEXT_ENTITY_EXTRACTION_ANNOTATION = 9;
    /**
     * General classification. Allowed for continuous evaluation.
     *
     * Generated from protobuf enum <code>GENERAL_CLASSIFICATION_ANNOTATION = 14;</code>
     */
    const GENERAL_CLASSIFICATION_ANNOTATION = 14;

    private static $valueToName = [
        self::ANNOTATION_TYPE_UNSPECIFIED => 'ANNOTATION_TYPE_UNSPECIFIED',
        self::IMAGE_CLASSIFICATION_ANNOTATION => 'IMAGE_CLASSIFICATION_ANNOTATION',
        self::IMAGE_BOUNDING_BOX_ANNOTATION => 'IMAGE_BOUNDING_BOX_ANNOTATION',
        self::IMAGE_ORIENTED_BOUNDING_BOX_ANNOTATION => 'IMAGE_ORIENTED_BOUNDING_BOX_ANNOTATION',
        self::IMAGE_BOUNDING_POLY_ANNOTATION => 'IMAGE_BOUNDING_POLY_ANNOTATION',
        self::IMAGE_POLYLINE_ANNOTATION => 'IMAGE_POLYLINE_ANNOTATION',
        self::IMAGE_SEGMENTATION_ANNOTATION => 'IMAGE_SEGMENTATION_ANNOTATION',
        self::VIDEO_SHOTS_CLASSIFICATION_ANNOTATION => 'VIDEO_SHOTS_CLASSIFICATION_ANNOTATION',
        self::VIDEO_OBJECT_TRACKING_ANNOTATION => 'VIDEO_OBJECT_TRACKING_ANNOTATION',
        self::VIDEO_OBJECT_DETECTION_ANNOTATION => 'VIDEO_OBJECT_DETECTION_ANNOTATION',
        self::VIDEO_EVENT_ANNOTATION => 'VIDEO_EVENT_ANNOTATION',
        self::TEXT_CLASSIFICATION_ANNOTATION => 'TEXT_CLASSIFICATION_ANNOTATION',
        self::TEXT_ENTITY_EXTRACTION_ANNOTATION => 'TEXT_ENTITY_EXTRACTION_ANNOTATION',
        self::GENERAL_CLASSIFICATION_ANNOTATION => 'GENERAL_CLASSIFICATION_ANNOTATION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

