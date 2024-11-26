<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response to a batch image annotation request.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.BatchAnnotateImagesResponse</code>
 */
class BatchAnnotateImagesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Individual responses to image annotation requests within the batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AnnotateImageResponse responses = 1;</code>
     */
    private $responses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\AnnotateImageResponse[]|\Google\Protobuf\Internal\RepeatedField $responses
     *           Individual responses to image annotation requests within the batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * Individual responses to image annotation requests within the batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AnnotateImageResponse responses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * Individual responses to image annotation requests within the batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.AnnotateImageResponse responses = 1;</code>
     * @param \Google\Cloud\Vision\V1\AnnotateImageResponse[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\AnnotateImageResponse::class);
        $this->responses = $arr;

        return $this;
    }

}

