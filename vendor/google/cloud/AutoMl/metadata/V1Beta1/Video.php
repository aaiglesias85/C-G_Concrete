<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/video.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class Video
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Classification::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
┤
\'google/cloud/automl/v1beta1/video.protogoogle.cloud.automl.v1beta1google/api/annotations.proto"$
"VideoClassificationDatasetMetadata"$
"VideoObjectTrackingDatasetMetadata""
 VideoClassificationModelMetadata""
 VideoObjectTrackingModelMetadataB▒
com.google.cloud.automl.v1beta1B
VideoProtoPZAgoogle.golang.org/genproto/googleapis/cloud/automl/v1beta1;automl╩Google\\Cloud\\AutoMl\\V1beta1ŕGoogle::Cloud::AutoML::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

