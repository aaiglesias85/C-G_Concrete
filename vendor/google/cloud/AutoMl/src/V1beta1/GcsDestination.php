<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/io.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Google Cloud Storage location where the output is to be written to.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.GcsDestination</code>
 */
class GcsDestination extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Google Cloud Storage URI to output directory, up to 2000
     * characters long.
     * Accepted forms:
     * * Prefix path: gs://bucket/directory
     * The requesting user must have write permission to the bucket.
     * The directory is created if it doesn't exist.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 1;</code>
     */
    private $output_uri_prefix = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $output_uri_prefix
     *           Required. Google Cloud Storage URI to output directory, up to 2000
     *           characters long.
     *           Accepted forms:
     *           * Prefix path: gs://bucket/directory
     *           The requesting user must have write permission to the bucket.
     *           The directory is created if it doesn't exist.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Io::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Google Cloud Storage URI to output directory, up to 2000
     * characters long.
     * Accepted forms:
     * * Prefix path: gs://bucket/directory
     * The requesting user must have write permission to the bucket.
     * The directory is created if it doesn't exist.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 1;</code>
     * @return string
     */
    public function getOutputUriPrefix()
    {
        return $this->output_uri_prefix;
    }

    /**
     * Required. Google Cloud Storage URI to output directory, up to 2000
     * characters long.
     * Accepted forms:
     * * Prefix path: gs://bucket/directory
     * The requesting user must have write permission to the bucket.
     * The directory is created if it doesn't exist.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUriPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri_prefix = $var;

        return $this;
    }

}

