<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy.proto

namespace Google\Cloud\OsConfig\V1\OSPolicy\Resource\File;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a file available as a Cloud Storage Object.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.OSPolicy.Resource.File.Gcs</code>
 */
class Gcs extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Bucket of the Cloud Storage object.
     *
     * Generated from protobuf field <code>string bucket = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $bucket = '';
    /**
     * Required. Name of the Cloud Storage object.
     *
     * Generated from protobuf field <code>string object = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $object = '';
    /**
     * Generation number of the Cloud Storage object.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     */
    private $generation = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket
     *           Required. Bucket of the Cloud Storage object.
     *     @type string $object
     *           Required. Name of the Cloud Storage object.
     *     @type int|string $generation
     *           Generation number of the Cloud Storage object.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Bucket of the Cloud Storage object.
     *
     * Generated from protobuf field <code>string bucket = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Required. Bucket of the Cloud Storage object.
     *
     * Generated from protobuf field <code>string bucket = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

    /**
     * Required. Name of the Cloud Storage object.
     *
     * Generated from protobuf field <code>string object = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Required. Name of the Cloud Storage object.
     *
     * Generated from protobuf field <code>string object = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setObject($var)
    {
        GPBUtil::checkString($var, True);
        $this->object = $var;

        return $this;
    }

    /**
     * Generation number of the Cloud Storage object.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     * @return int|string
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * Generation number of the Cloud Storage object.
     *
     * Generated from protobuf field <code>int64 generation = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGeneration($var)
    {
        GPBUtil::checkInt64($var);
        $this->generation = $var;

        return $this;
    }

}


