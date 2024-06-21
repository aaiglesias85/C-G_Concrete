<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1beta1/asset_service.proto

namespace Google\Cloud\Asset\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Cloud Storage location.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1beta1.GcsDestination</code>
 */
class GcsDestination extends \Google\Protobuf\Internal\Message
{
    protected $object_uri;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           The uri of the Cloud Storage object. It's the same uri that is used by
     *           gsutil. For example: "gs://bucket_name/object_name". See [Viewing and
     *           Editing Object
     *           Metadata](https://cloud.google.com/storage/docs/viewing-editing-metadata)
     *           for more information.
     *     @type string $uri_prefix
     *           The uri prefix of all generated Cloud Storage objects. For example:
     *           "gs://bucket_name/object_name_prefix". Each object uri is in format:
     *           "gs://bucket_name/object_name_prefix/<asset type>/<shard number> and only
     *           contains assets for that type. <shard number> starts from 0. For example:
     *           "gs://bucket_name/object_name_prefix/google.compute.disk/0" is the first
     *           shard of output objects containing all google.compute.disk assets.
     *           An INVALID_ARGUMENT error will be returned if file with the same name
     *           "gs://bucket_name/object_name_prefix" already exists.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1Beta1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The uri of the Cloud Storage object. It's the same uri that is used by
     * gsutil. For example: "gs://bucket_name/object_name". See [Viewing and
     * Editing Object
     * Metadata](https://cloud.google.com/storage/docs/viewing-editing-metadata)
     * for more information.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->readOneof(1);
    }

    /**
     * The uri of the Cloud Storage object. It's the same uri that is used by
     * gsutil. For example: "gs://bucket_name/object_name". See [Viewing and
     * Editing Object
     * Metadata](https://cloud.google.com/storage/docs/viewing-editing-metadata)
     * for more information.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The uri prefix of all generated Cloud Storage objects. For example:
     * "gs://bucket_name/object_name_prefix". Each object uri is in format:
     * "gs://bucket_name/object_name_prefix/<asset type>/<shard number> and only
     * contains assets for that type. <shard number> starts from 0. For example:
     * "gs://bucket_name/object_name_prefix/google.compute.disk/0" is the first
     * shard of output objects containing all google.compute.disk assets.
     * An INVALID_ARGUMENT error will be returned if file with the same name
     * "gs://bucket_name/object_name_prefix" already exists.
     *
     * Generated from protobuf field <code>string uri_prefix = 2;</code>
     * @return string
     */
    public function getUriPrefix()
    {
        return $this->readOneof(2);
    }

    /**
     * The uri prefix of all generated Cloud Storage objects. For example:
     * "gs://bucket_name/object_name_prefix". Each object uri is in format:
     * "gs://bucket_name/object_name_prefix/<asset type>/<shard number> and only
     * contains assets for that type. <shard number> starts from 0. For example:
     * "gs://bucket_name/object_name_prefix/google.compute.disk/0" is the first
     * shard of output objects containing all google.compute.disk assets.
     * An INVALID_ARGUMENT error will be returned if file with the same name
     * "gs://bucket_name/object_name_prefix" already exists.
     *
     * Generated from protobuf field <code>string uri_prefix = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUriPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getObjectUri()
    {
        return $this->whichOneof("object_uri");
    }

}

