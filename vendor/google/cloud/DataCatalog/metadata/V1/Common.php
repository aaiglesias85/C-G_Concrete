<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/common.proto

namespace GPBMetadata\Google\Cloud\Datacatalog\V1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(google/cloud/datacatalog/v1/common.protogoogle.cloud.datacatalog.v1"Q
PersonalDetails
starred (-
	star_time (2.google.protobuf.Timestamp*{
IntegratedSystem!
INTEGRATED_SYSTEM_UNSPECIFIED 
BIGQUERY
CLOUD_PUBSUB
DATAPROC_METASTORE
DATAPLEXB�
com.google.cloud.datacatalog.v1PZFgoogle.golang.org/genproto/googleapis/cloud/datacatalog/v1;datacatalog��Google.Cloud.DataCatalog.V1�Google\\Cloud\\DataCatalog\\V1�Google::Cloud::DataCatalog::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

